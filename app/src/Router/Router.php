<?php
namespace Portfolio\Router;

/**
 * Router class to manage the routing of the website
 */
class Router
{
    /** 
     * Index of the currently checked route
     * @var integer 
     */
    public $route_index = 0;
    /**
     * array of string containing the current route
     * @var array
     */
    public $current_route = [];
    /**
     * Current language of the page
     * @var string
     */
    public $current_lang = "fr";
    /**
     * List of the Avaible languages
     *
     * @var array
     */
    public $available_lang = ["fr", "en", "jp"];
    /**
     * Template where insert the pages.
     * @var string
     */
    private $default_html = "";
    /**
     * Root path for the requires.
     * @var string
     */
    private $rootPath = "";

    private $controllerNamespace = "";
    /**
     * List of IP who can access to the admin panel
     *
     * @var array
     */
    private $whiteList = [];
    
    public function __construct()
    {
        $this->startSession();
        $this->getFilteredURI();
        $this->setRootPath("");
        $this->setWhiteList();
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
        
        if(array_key_exists($route, $routes))
        { 
            // echo "page routing", $routes[$route], "<br>";
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
     * @param array $toRender data to render in the HTML template
     * @return void
     */
    public function requirePage(string $file, array $data = [], array $toRender = []): void
    {
        $path = $this->rootPath . $file;
        
        if(file_exists($path))
        {
            ob_start();

            extract($data, EXTR_SKIP);
            require $path;

            $content = ob_get_clean();
            if(!empty($content))
            {
                $this->render($content, $toRender);
            }
            
            $fileName = basename($file, ".php");
            $className = $this->controllerNamespace . $fileName;

            if(class_exists($className, false))
            {
                $this->callControllerClass($className);
            }
            echo $content;
            exit;
        }

        $this->getPageNotFound("file not found");
    }


    /**
     * Render the HTML template with the content and the data to render
     *
     * @param string $content content of the page
     * @param array $toRender data to render in the HTML template
     * @return void
     */
    private function render(string &$content, array $toRender = []): void
    {
        
        $toRender["lang"] ??= $this->current_lang;
        $toRender["title"] ??= "Document";
        //TODO

        // preg_match_all('/\{\{\s*.+\s*:\s*(.+?)\s*\}\}/', $content, $matches);

        
        if(!empty($this->default_html))
        {
            $content = preg_replace('/\{\{\s*content\s*\}\}/', $content, $this->default_html);
        }
        foreach($toRender as $key => $value)
        {
            if (is_array($value)) 
            {
                $value = implode('<br>', $value);
            }
            $content = preg_replace('/\{\{\s*'.$key.'\s*\}\}/', $value, $content);
        }
        // remove unreplaced tags
        $content = preg_replace('/\{\{\s*.+\s*\}\}/', "", $content);

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
            $attrs = $method->getAttributes("Portfolio\Router\Route_Attribute");
            
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

    /**
     * Set the default HTML template to use with the render method
     *
     * @param string $path
     * @return void
     */
    public function setDefaultHTML(string $path):void
    {
        if(file_exists($path))
        {
            $this->default_html = file_get_contents($path);
        }
    }
    /**
     * Get the default HTML template
     *
     * @return string
     */
    public function getDefaultHTML():string
    {
        return $this->default_html;
    }
    /**
     * Set the root path for the requirePage method
     *
     * @param string $path
     * @return void
     */
    public function setRootPath(string $path):void
    {
        if(is_dir($path))
        {
            $this->rootPath = $path;
        }
        elseif(is_dir($_ENV["ROOT_PATH"]??""))
        {
            $this->rootPath = $_ENV["ROOT_PATH"];
        }
        else
        {
            $this->rootPath = __DIR__."/../";
        }
    }
    /**
     * Redirect to another page
     *
     * @param string $url URL to redirect to
     * @param array $data data to send to the page
     * @return void
     */
    public function redirect(string $url, array $data = []): void
    {
        if(!empty($data))
        {
            foreach($data as $key => $value)
            {
                $this->addFlashMessage($key, $value);
            }
        }
        header("Location: ".$url);
        exit;
    }
    /**
     * Add a flash message to the session
     *
     * @param string $type type of the message (success, error, info, etc.)
     * @param string|array $message message to display
     * @return void
     */
    public function addFlashMessage(string $type, string|array $message): void
    {
        $_SESSION["flashes"][$type][] = $message;
    }
    /**
     * Get the flash messages from the session and clear them
     * When a type is specified, get only the messages of that type
     *
     * @param string $type type of the message (success, error, info, etc.)
     * @return array array of messages
     */
    public function getFlashMessages(string $type = ""): array
    {
        if(!empty($type))
        {
            $flashes = $_SESSION["flashes"][$type] ?? [];
            unset($_SESSION["flashes"][$type]);
            return $flashes;
        }
        $flashes = $_SESSION["flashes"] ?? [];
        unset($_SESSION["flashes"]);
        return $flashes;
    }
    /**
     * Start the session if not already started
     *
     * @return void
     */
    public function startSession(): void
    {
        if(session_status() === PHP_SESSION_NONE)
        {
            session_start();
        }
    }
    /**
     * Set the namespace for the controller classes
     *
     * @param string $namespace Use double backslash (\\) to separate the namespace parts
     * @return void
     */
    public function setControllerNamespace(string $namespace): void
    {
        $this->controllerNamespace = $namespace . "\\";
    }
    /**
     * Set the list of IP who can access to the admin panel
     * From an array or from the IP_WHITELIST env variable
     *
     * @return array
     */
    private function setWhiteList(array $ips = []):void
    {
        if(empty($ips) && !empty($_ENV["IP_WHITELIST"]))
        {
            $ips = explode(",", $_ENV["IP_WHITELIST"]);
        }
        if(!empty($ips))
        {
            $this->whiteList = array_map('trim', $ips);
        }
    }
    /**
     * Check if the user IP is in the white list
     *
     * @return bool
     */
    public function isInWhiteList(): bool
    {
        if(empty($this->whiteList)) return true;
        $user_ip = $_SERVER['REMOTE_ADDR'] ?? '';
        return in_array($user_ip, $this->whiteList);
    }
    /**
     * Generate a text preview from HTML content
     * Strip tags, trim whitespace, and limit to a specified number of characters
     *
     * @param string $html The HTML content to generate a preview from
     * @param int $limit The maximum number of characters for the preview (default is 150)
     * @return string The generated text preview
     */
    public function previewContent(string $html, int $limit = 150): string 
    {
        $text = strip_tags($html);
        $text = trim(preg_replace('/\s+/', ' ', $text));
        if (mb_strlen($text) > $limit) {
            $text = mb_substr($text, 0, $limit) . '...';
        }
        return $text;
    }
}