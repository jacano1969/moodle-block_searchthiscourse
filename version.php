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
 * SearchThisCourse block version details.
 *
 * @package    block_searchthiscourse
 * @copyright  2013 Paul Vaughan, paulvaughan@southdevon.ac.uk
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$plugin->version        = 2013051401;                   // The current plugin version (Date: YYYYMMDDXX).
$plugin->requires       = 2010112400;                   // Moodle 2.0: http://docs.moodle.org/dev/Moodle_versions
// $plugin->requires       = 2011070100;                   // Moodle 2.1.
// $plugin->requires       = 2011120500;                   // Moodle 2.2.
$plugin->component      = 'block_searchthiscourse';     // Full name of the plugin (used for diagnostics).
$plugin->cron           = 0;                            // Period for cron to check this plugin (secs).
$plugin->maturity       = MATURITY_BETA;
$plugin->release        = '0.5';
