<?php

/**
 * Firebase autoload.
 *
 * @copyright  2020 Christian Bayer - Univates
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function firebase_autoload($className)
{
    $classPath = explode('\\', $className);
    if($classPath[0] != 'Firebase') {
        return;
    }
    $filePath = dirname(__FILE__) . '/src/' . implode('/', array_slice($classPath, 2)) . '.php';
    if(file_exists($filePath)) {
        require_once($filePath);
    }
}

spl_autoload_register('firebase_autoload');