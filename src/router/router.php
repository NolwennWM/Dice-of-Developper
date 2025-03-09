<?php
require __DIR__."/routes.php";

$uri = getFilteredURI();

pageRouting($uri);

/**
 * filter URI to get the different parts separetly
 *
 * @return array array of URI parts
 */
function getFilteredURI()
{
    $uri = filter_var($_SERVER["REQUEST_URI"], FILTER_SANITIZE_URL);
    $uri = explode("?",$uri)[0];
    $uri = trim($uri, "/");
    $uri = explode("/", $uri);
    return $uri;
}
/**
 * Check if the route exist or send the 404
 *
 * @param array $uri array of URI parts
 * @return void
 */
function pageRouting(array $uri)
{
    if(array_key_exists($uri[0], ROUTES)){ 
        requirePage(ROUTES[$uri[0]]);
        exit;
    }
    getPageNotFound("page not found");
}
/**
 * check if the file in parameter exist and require the file
 *
 * @param string $file path of the file
 * @param array $data data to send to the page
 * @return void
 */
function requirePage(string $file, array $data = [])
{
    $path = __DIR__."/../".$file;
    if(file_exists($path))
    {
        foreach($data as $content)
        {
            $name = $content["slug"]; 
            $$name = $content;
        }

        require $path;
        exit;
    }
    getPageNotFound("file not found");
}
/**
 * require the 404 page
 *
 * @return void
 */
function getPageNotFound(string $message = "")
{
    require __DIR__."/404.php";
    exit;
}