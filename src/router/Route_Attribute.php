<?php 
namespace Portfolio\Router\Attribute;
/**
 * TODO
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
class Route_Attribute
{
    /**
     * TODO
     *
     * @param string $name
     * @param boolean $isLoggedAccess
     * @param string $method
     */
    public function __construct(private string $name="", private bool $isLoggedAccess = false, private string $method = "GET") {}
    /**
     * TODO
     *
     * @return boolean
     */
    public function isValidRoute(string $checked_route): bool
    {
        if($checked_route === $this->name)
        {
            if($this->isValidMethod())
            {
                if($this->isGrantedAccess())
                {
                    return true;
                }
            }
        }
        return false;
    }
    /**
     * TODO
     *
     * @return boolean
     */
    public function isGrantedAccess(): bool
    {
        if(!$this->isLoggedAccess || isset($_SESSION["admin"]))return true;
        
        header("Location: /admin/login");
        exit;
    }
    /**
     * TODO
     *
     * @return boolean
     */
    public function isValidMethod(): bool
    {
        return $this->method==="ANY"?true:$this->method === $_SERVER["REQUEST_METHOD"];
    }
}