<?php 
require __DIR__."/database.php";

/**
 * get portfolio data filtered by language
 *
 * @param string $language language of the page
 * @return array contents of the portfolio
 */
function getData(string $language)
{
    $content = getPagesContent($language);
    $skills = getSkillsToDisplay();
    $menus = getPagesMenus($language);
    $content[] = ["prefix" => "skills_logo", "grouped_content" => json_encode($skills)];
    $content[] = ["prefix" => "menus", "grouped_content" => json_encode($menus)];
    return $content;
}

/**
 * get the content of the pages filtered by language
 *
 * @param string $language language of the pages
 * @return array contents of the pages
 */
function getPagesContent(string $language)
{
    $pdo = connexion_PDO(true);

    // $stmt = $pdo->prepare("SELECT slug, title, content FROM page_content WHERE language = :lang");
    $stmt = $pdo->prepare("SELECT 
    SUBSTRING_INDEX(pc.slug, '_', 1) AS prefix,
    JSON_ARRAYAGG(
        JSON_MERGE_PATCH(
            JSON_OBJECT('title', pc.title, 'content', pc.content, 'slug', pc.slug),
            IF(pr.slug IS NOT NULL, 
                JSON_OBJECT('image', pr.image, 'github', pr.github, 'link', pr.link),
                JSON_OBJECT()
                ), -- end of IF project
            IF(
                EXISTS (
                    SELECT 1 
                    FROM projects_skills ps 
                    WHERE ps.id_project = pr.id
                ),
                JSON_OBJECT(
                    'skills',
                    (
                        SELECT JSON_ARRAYAGG(
                            JSON_OBJECT('name', sk.name, 'logo', sk.logo)
                        ) -- end of JSON_ARRAYAGG for project's skills
                        FROM projects_skills ps2
                        JOIN skills sk ON ps2.id_skill = sk.id
                        WHERE ps2.id_project = pr.id
                    )
                ), -- end of IF for project's skills
                JSON_OBJECT()
            ) -- end of IF for project's skills
            ) -- end of JSON_MERGE_PATCH for each content
    ) AS grouped_content -- end of JSON_ARRAYAGG for each prefix
    FROM page_content pc
    LEFT JOIN projects pr USING(slug)
    WHERE language = :lang
    GROUP BY prefix;");

    $stmt->bindParam("lang", $language);

    $stmt->execute();

    $data = $stmt->fetchAll();
    
    return $data;
}
/**
 * get the skills to display on the portfolio
 *
 * @return array skills to display
 */
function getSkillsToDisplay()
{
    $pdo = connexion_PDO(true);

    $stmt = $pdo->prepare("SELECT * FROM skills WHERE display = 1");

    $stmt->execute();

    $data = $stmt->fetchAll();
    
    return $data;
}
/**
 * get the menu items of the pages filtered by language
 *
 * @param string $language language of the pages
 * @return array menu items of the pages
 */
function getPagesMenus(string $language)
{
    $pdo = connexion_PDO(true);

    $stmt = $pdo->prepare("SELECT slug, name FROM page_menu WHERE language = :lang");

    $stmt->bindParam("lang", $language);

    $stmt->execute();

    $data = $stmt->fetchAll(PDO::FETCH_KEY_PAIR);
    
    return $data;
}