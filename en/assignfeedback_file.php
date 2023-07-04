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
 * Strings for component 'assignfeedback_file', language 'en', version '4.1'.
 *
 * @package     assignfeedback_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = 'Upload one or more feedback files for all selected users?';
$string['batchuploadfiles'] = 'Upload feedback files for multiple users';
$string['batchuploadfilesforusers'] = 'Send feedback files to {$a} selected user(s).';
$string['configmaxbytes'] = 'Maximum file size';
$string['confirmuploadzip'] = 'Confirm zip upload';
$string['countfiles'] = '{$a} files';
$string['default'] = 'Enabled by default';
$string['default_help'] = 'If set, this feedback method will be enabled by default for all new assignments.';
$string['enabled'] = 'File feedback';
$string['enabled_help'] = 'If enabled, the teacher will be able to upload files with feedback when marking assignment submissions. These files may be, but are not limited to, marked-up student submissions, documents with comments or spoken audio feedback.';
$string['feedbackfileadded'] = 'New feedback file "{$a->filename}" for student "{$a->student}"';
$string['feedbackfileupdated'] = 'Modified feedback file "{$a->filename}" for student "{$a->student}"';
$string['feedbackzip'] = 'Zip file with feedback files';
$string['feedbackzip_help'] = 'A zip file containing a list of feedback files for one or more students. Feedback files will be assigned to students based on the user ID which should be the second part of each file name immediately after the user\'s full name. This naming convention is used when downloading submissions so you can download all submissions, add comments to a few files, then re-zip and upload all of the files. Files with no changes will be ignored.';
$string['file'] = 'Feedback files';
$string['filesadded'] = 'Feedback files added: {$a}';
$string['filesupdated'] = 'Feedback files updated: {$a}';
$string['importfeedbackfiles'] = 'Import feedback file(s)';
$string['maxbytes'] = 'Maximum file size';
$string['maxfiles'] = 'Maximum number of uploaded files';
$string['maximumsize'] = 'Maximum file size';
$string['moreusers'] = '{$a} more...';
$string['nochanges'] = 'No changes';
$string['pluginname'] = 'File feedback';
$string['privacy:metadata:filepurpose'] = 'Feedback files from the teacher for the student.';
$string['privacy:path'] = 'Feedback files';
$string['selectedusers'] = 'Selected users';
$string['uploadfiles'] = 'Send feedback files';
$string['uploadzip'] = 'Upload multiple feedback files in a zip';
$string['uploadzipsummary'] = 'Feedback files imported from a zip';
$string['userswithnewfeedback'] = 'Users with updated feedback: {$a}';
