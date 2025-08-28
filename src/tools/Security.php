<?php

class Security
{
    public function __construct() 
    {
        if(session_status()!=PHP_SESSION_ACTIVE) session_start(); 
        if (!isset($_SESSION["security"])) $_SESSION["security"] = [];
    }
    /**
     * Sanitize output to prevent XSS
     *
     * @param [type] $text
     * @return void
     */
    public function out($text)
    {
        echo htmlspecialchars($text);
    }
    /**
     * Generate a CSRF token and store it in session
     *
     * @return void
     */
    public function set_csrf()
    {
        $token = bin2hex(random_bytes(50));
        $_SESSION["security"]["csrf"] = $token;

        echo "<input type='hidden' name='csrf' value='$token'>";
    }
    /**
     * Validate the CSRF token from the form against the one in session
     *
     * @return boolean
     */
    public function is_csrf_valid()
    {
        if (!isset($_SESSION["security"]['csrf']) || !isset($_POST['csrf']))return false;
        
        if ($_SESSION["security"]['csrf'] != $_POST['csrf']) return false;

        return true;
    }
    /**
     * Generate a honey pot field to trap bots
     *
     * @param string $name
     * @param string $type
     * @param string $groupClass
     * @param string|NULL $label
     * @param string|NULL $id
     * @return void
     */
    public function set_honey_pot($name="age", $type="text", $groupClass="form-group", string|NULL $label=NULL, string|NULL $id=NULL)
    {
        $_SESSION["security"]["honey_pot"] = $name;

        $id = $id ?? $name;
        $label = $label ?? $name;

        $inputTag = "<input type='$type' name='$name' id='$id'>";
        $labelTag = "<label for='$id'>$label</label>";
        $groupTag = "<div class='$groupClass'>$labelTag $inputTag</div>";

        echo $groupTag;
    }
    /**
     * Check if the honey pot field is filled
     *
     * @return boolean
     */
    public function is_honey_pot_filled()
    {
        $name = $_SESSION["security"]["honey_pot"];

        if(empty($_GET[$name]) && empty($_POST[$name])) return false;
        
        return true;
    }
}