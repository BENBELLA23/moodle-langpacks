<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'logstore_standard', language 'en', version '3.8'.
 *
 * @package     logstore_standard
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['buffersize'] = 'Write buffer size';
$string['jsonformat'] = 'JSON format';
$string['jsonformat_desc'] = 'Use standard JSON format instead of PHP serialised data in the \'other\' database field.';
$string['pluginname'] = 'Standard log';
$string['pluginname_desc'] = 'A log plugin stores log entries in a Moodle database table.';
$string['privacy:metadata:log'] = 'A collection of past events';
$string['privacy:metadata:log:anonymous'] = 'Whether the event was flagged as anonymous';
$string['privacy:metadata:log:eventname'] = 'The event name';
$string['privacy:metadata:log:ip'] = 'The IP address used at the time of the event';
$string['privacy:metadata:log:origin'] = 'The origin of the event';
$string['privacy:metadata:log:other'] = 'Additional information about the event';
$string['privacy:metadata:log:realuserid'] = 'The ID of the real user behind the event, when masquerading a user.';
$string['privacy:metadata:log:relateduserid'] = 'The ID of a user related to this event';
$string['privacy:metadata:log:timecreated'] = 'The time when the event occurred';
$string['privacy:metadata:log:userid'] = 'The ID of the user who triggered this event';
$string['taskcleanup'] = 'Log table cleanup';
