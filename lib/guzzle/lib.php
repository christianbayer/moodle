<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Guzzle library for Moodle.
 *
 * @package    core
 * @copyright  2020 Christian Bayer - Univates
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// All Guzzle classes and dependencies are autoloaded with this.
require_once($CFG->libdir . '/psr/lib.php');
require_once($CFG->libdir . '/getallheaders/lib.php');
require_once($CFG->libdir . '/symfony/lib.php');
require_once($CFG->libdir . '/guzzle/autoload.php');
require_once($CFG->libdir . '/guzzle/src/GuzzleHttp/functions_include.php');
require_once($CFG->libdir . '/guzzle/src/GuzzleHttp/Promise/functions_include.php');
require_once($CFG->libdir . '/guzzle/src/GuzzleHttp/Psr7/functions_include.php');
