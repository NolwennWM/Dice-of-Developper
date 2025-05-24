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
     */
    public function __construct(private string $name="", private bool $isLoggedAccess = false) {}
    /**
     * TODO
     *
     * @return boolean
     */
    public function isValidRoute(string $checked_route): bool
    {
        return $checked_route === $this->name;
    }
    /**
     * TODO
     *
     * @return boolean
     */
    public function isGrantedAccess(): bool
    {
        return $this->isLoggedAccess? isset($_SESSION["admin"]):true;
    }
}