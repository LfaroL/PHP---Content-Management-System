<?php
    session_start();

    function message() {
        if (isset($_SESSION['message'])) {
            $output = "<div class=\"message\">";
                // Only convert the message not the html tags
            $output .= htmlentities($_SESSION["message"]);
            $output .= "</div>";   
            
            // clear message after use - Important so message doesn't keep appearing
            $_SESSION["message"] = null;
            
            return $output;
        }       
    }

    function errors() {
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION["errors"];
            
            // clear errors after use - Important so errors doesn't keep appearing
            $_SESSION["errors"] = null;
            
            return $errors;
        }       
    }

?>