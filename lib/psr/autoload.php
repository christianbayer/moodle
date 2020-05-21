<?php

/**
 * PSR autoload.
 *
 * @copyright  2020 Christian Bayer - Univates
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function psr_autoload($className)
{
    $classPath = explode('\\', $className);
    if($classPath[0] != 'Psr') {
        return;
    }
    $filePath = dirname(__FILE__) . '/src/' . implode('/', $classPath) . '.php';
    if(file_exists($filePath)) {
        require_once($filePath);
    }
}

spl_autoload_register('psr_autoload');