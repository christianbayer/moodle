<?php

/**
 * Google autoload.
 *
 * @copyright  2020 Christian Bayer - Univates
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function google_autoload($className)
{
    // For files with namespace.
    $classPath = explode('\\', $className);

    // For files without namespace.
    if(strpos($className, '_') > 0) {
        $classPath = explode('_', $className);
    }
    if($classPath[0] != 'Google') {
        return;
    }
    $filePath = dirname(__FILE__) . '/src/' . implode('/', $classPath) . '.php';
    if(file_exists($filePath)) {
        require_once($filePath);
    }
}

spl_autoload_register('google_autoload');