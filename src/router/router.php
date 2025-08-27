<?php
/**
 * Router class to manage the routing of the website
 */
class Router
{
    public $route_index = 0;
    public $current_route = [];
    public $current_lang = "fr";
    public $available_lang = ["fr", "en", "jp"];
    
    public function __construct()
    {
        $this->getFilteredURI();
    }
    /**
     * filter URI to get the different parts separetly
     *
     * @return array array of URI parts
     */
    public function getFilteredURI(): array
    {
        $uri = filter_var($_SERVER["REQUEST_URI"], FILTER_SANITIZE_URL);
        $uri = explode("?",$uri)[0];
        $uri = trim($uri, "/");
        $langs = [];
        preg_match('/(?:^|\/)([a-z]{2})(?:\/|$)/', $uri, $langs);
        $uri = explode("/", $uri);
        $this->current_route = $uri;
        if(isset($langs[1]) && in_array($langs[1], $this->available_lang))
        {
            $this->current_lang = $langs[1];
            // TODO remove the lang part from the URI
        }

        return $uri;
    }
    /**
     * Check if the route exist or send the 404
     * Check only the part of the URI at the index indicated
     *
     * @param array $routes list of the possible routes
     * @return void
     */
    public function pageRouting(array $routes): void
    {
        $route = $this->getNextRoutePart();

        if(array_key_exists($route, $routes)){ 
            $this->requirePage($routes[$route]);
            exit;
        }
        
        $this->getPageNotFound("page not found");
    }
    /**
     * Get the next part of the URI to check the route
     *
     * @return string
     */
    public function getNextRoutePart(): string
    {
        $uri = $this->current_route;
        $route = $uri[$this->route_index]??"";
        $this->route_index++;
        return $route;
    }
    /**
     * check if the file in parameter exist and require the file
     *
     * @param string $file path of the file
     * @param array $data data to send to the page
     * @return void
     */
    public function requirePage(string $file, array $data = []): void
    {
        $path = __DIR__."/../".$file;

        if(file_exists($path))
        {
            foreach($data as $content)
            {
                $name = $content["prefix"]; 
                $results = json_decode($content["grouped_content"], true);
                $$name = count($results)===1 ? $results[0] : $results;
                // echo $name, substr(json_encode($content),0, 1000), "<br>";
            }

            require $path;
            $fileName = basename($file, ".php");
            if(class_exists($fileName))
            {
                $this->callControllerClass($fileName);
            }
            exit;
        }

        $this->getPageNotFound("file not found");
    }
    /**
     * require the 404 page
     *
     * @return void
     */
    public function getPageNotFound(string $message = ""): void
    {
        require __DIR__."/404.php";
        exit;
    }
    /**
     * call the controller class and the method with the route attribute
     *
     * @param object|string $className
     * @return void
     */
    public function callControllerClass(object|string $className)
    {
        require __DIR__."/Route_Attribute.php";

        $classReflector = new \ReflectionClass($className);
        $routeToCheck = $this->getNextRoutePart();

        $methods = $classReflector->getMethods();
        foreach ($methods as $method) {
            $attrs = $method->getAttributes("Portfolio\Router\Attribute\Route_Attribute");
            
            foreach($attrs as $attr)
            {
                $routeAttribute = $attr->newInstance();
                if(!$routeAttribute->isValidRoute($routeToCheck)) continue;
                $controller = $classReflector->newInstance();
                $method->invoke($controller);
                exit;
            }
        }   
        $this->getPageNotFound("No Method found");
    }
}