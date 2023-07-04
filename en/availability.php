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
 * Strings for component 'availability', language 'en', version '4.1'.
 *
 * @package     availability
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessrestrictions'] = 'Access restrictions';
$string['addrestriction'] = 'Add restriction...';
$string['and'] = 'and';
$string['condition_group'] = 'Restriction set';
$string['condition_group_info'] = 'Add a set of nested restrictions to apply complex logic.';
$string['enableavailability'] = 'Enable restricted access';
$string['enableavailability_desc'] = 'If enabled, conditions (based on date, grade, completion etc.) may be set to control whether an activity or resource can be accessed.';
$string['error_list_nochildren'] = 'Restriction sets should contain at least one condition.';
$string['hidden_all'] = 'Hidden entirely if student doesn\'t meet the conditions';
$string['hidden_individual'] = 'Hidden entirely if student doesn\'t meet this condition';
$string['hidden_marker'] = '(hidden otherwise)';
$string['hide_verb'] = 'Click to hide';
$string['invalid'] = 'Please set';
$string['item_unknowntype'] = 'These restrictions use a plugin which is no longer available (if it is okay to remove that restriction, delete it below)';
$string['itemheading'] = '{$a->number} {$a->type} restriction';
$string['label_multi'] = 'Required restrictions';
$string['label_sign'] = 'Restriction type';
$string['list_and'] = 'All of:';
$string['list_and_hidden'] = 'All of (hidden otherwise):';
$string['list_or'] = 'Any of:';
$string['list_or_hidden'] = 'Any of (hidden otherwise):';
$string['list_root_and'] = 'Not available unless:';
$string['list_root_and_hidden'] = 'Not available (hidden) unless:';
$string['list_root_or'] = 'Not available unless any of:';
$string['list_root_or_hidden'] = 'Not available (hidden) unless any of:';
$string['listheader_multi_after'] = 'of the following';
$string['listheader_multi_and'] = 'all';
$string['listheader_multi_before'] = 'match';
$string['listheader_multi_or'] = 'any';
$string['listheader_sign_before'] = 'Student';
$string['listheader_sign_neg'] = 'must not';
$string['listheader_sign_pos'] = 'must';
$string['listheader_single'] = 'match the following';
$string['manageplugins'] = 'Manage restrictions';
$string['missingplugin'] = 'Missing restriction plugin';
$string['or'] = 'or';
$string['privacy:metadata'] = 'The Access restriction subsystem does not store any personal data.';
$string['restrictaccess'] = 'Restrict access';
$string['restrictbygroup'] = 'Add group/grouping access restriction';
$string['setheading'] = '{$a->number} Set of {$a->count} restriction(s)';
$string['show_verb'] = 'Click to display';
$string['showmore'] = 'Show more';
$string['shown_all'] = 'Displayed if student doesn\'t meet the conditions';
$string['shown_individual'] = 'Displayed if student doesn\'t meet this condition';
$string['unknowncondition'] = 'Unknown condition (deleted condition plugin)';
