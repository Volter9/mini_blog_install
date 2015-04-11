<?php

/**
 * Get cookie value
 * 
 * @param string $name
 * @return mixed
 */
function cookie ($name) {
    return array_get($_COOKIE, $name);
}

/**
 * Set/get session
 * 
 * @param string $name
 * @param mixed $value
 * @return mixed
 */
function session ($name, $value = null) {
    if ($value === null) {
        return array_get($_SESSION, $name);
    }
    
    $_SESSION[$name] = $value;
}

/**
 * Redirect with errors (setting them into session)
 * 
 * @param string $url
 * @param array $errors
 */
function redirect_with_errors ($url, array $errors) {
    session('errors', $errors);
    
    redirect($url);
}