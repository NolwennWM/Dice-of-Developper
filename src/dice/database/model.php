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
    $pdo = connexion_PDO(true);

    $stmt = $pdo->prepare("SELECT slug, title, content FROM page_content WHERE language = :lang");

    $stmt->bindParam("lang", $language);

    $stmt->execute();

    $data = $stmt->fetchAll();
    
    return $data;
}