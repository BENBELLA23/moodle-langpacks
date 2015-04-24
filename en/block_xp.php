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
 * Strings for component 'block_xp', language 'en', branch 'MOODLE_28_STABLE'
 *
 * @package   block_xp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrulesformhelp'] = 'The last column defines the amount of experience points gained when the criteria is met.';
$string['basexp'] = 'Algorithm base';
$string['cachedef_filters'] = 'Level filters';
$string['changelevelformhelp'] = 'If you change the number of levels, the custom level badges will be temporarily disabled to prevent levels without badges. If you change the level count go to the page \'Visuals\' to re-enable the custom badges once you have saved this form.';
$string['cheatguard'] = 'Cheat guard';
$string['coefxp'] = 'Algorithm coefficient';
$string['comparisonrule'] = 'Comparison rule';
$string['configdescription'] = 'Description to append';
$string['configheader'] = 'Settings';
$string['configtitle'] = 'Title';
$string['congratulationsyouleveledup'] = 'Congratulations!';
$string['coolthanks'] = 'Cool, thanks!';
$string['courselog'] = 'Course log';
$string['coursereport'] = 'Course report';
$string['courserules'] = 'Course rules';
$string['coursesettings'] = 'Course settings';
$string['coursevisuals'] = 'Course visuals';
$string['createnewrulefromthisevent'] = 'Create new rule from this event';
$string['customizelevels'] = 'Customize the levels';
$string['defaultrulesformhelp'] = 'Those are the default rules provided by the plugin, they automatically give default experience points and ignore some redundant events. Custom rules take precedence over them.';
$string['description'] = 'Description';
$string['enableinfos'] = 'Enable infos page';
$string['enableinfos_help'] = 'When set to \'No\', students will not be able to view the infos page.';
$string['enableladder'] = 'Enable the ladder';
$string['enableladder_help'] = 'When set to \'No\', students will not be able to view the ladder.';
$string['enablelevelupnotif'] = 'Enable level up notification';
$string['enablelevelupnotif_help'] = 'When set to \'Yes\', students will be displayed a popup congratulating them for the new level reached.';
$string['enablelogging'] = 'Enable logging';
$string['enablexpgain'] = 'Enable XP gain';
$string['enablexpgain_help'] = 'When set to \'No\', nobody will earn experience points in the course. This is useful to freeze the experience gained, or to enable it at a certain point in time.

Please note that this can also be controlled more granularly using the capability \'block/xp:earnxp\'.';
$string['errorformvalues'] = 'There are some issues in the form values, please fix them.';
$string['errorlevelsincorrect'] = 'The minimum number of levels is 2';
$string['errornotalllevelsbadgesprovided'] = 'Not all the level badges have been provided. Missing: {$a}';
$string['errorxprequiredlowerthanpreviouslevel'] = 'The XP required is lower than or equal to the previous level.';
$string['eventname'] = 'Event name';
$string['eventproperty'] = 'Event property';
$string['eventtime'] = 'Event time';
$string['event_user_leveledup'] = 'User leveled up';
$string['existingruleformhelp'] = 'Use the first field to re-order the rules, the first rule found always takes precedence over the other ones. Delete a rule by removing its value.';
$string['for1day'] = 'For 1 day';
$string['for1month'] = 'For a month';
$string['for1week'] = 'For a week';
$string['for3days'] = 'For 3 days';
$string['forever'] = 'Forever';
$string['give'] = 'give';
$string['infos'] = 'Information';
$string['invalidxp'] = 'Invalid XP value';
$string['keeplogs'] = 'Keep logs';
$string['ladder'] = 'Ladder';
$string['level'] = 'Level';
$string['levelbadges'] = 'Level badges';
$string['levelbadgesformhelp'] = 'Name the files [level].[file extension], for instance: 1.png, 2.jpg, etc... The recommended image size is 100x100.';
$string['levelcount'] = 'Level count';
$string['leveldesc'] = 'Level description';
$string['levels'] = 'Levels';
$string['levelswillbereset'] = 'Warning! Saving this form will recalculate the levels of everyone!';
$string['levelup'] = 'Level up!';
$string['levelx'] = 'Level #{$a}';
$string['logging'] = 'Logging';
$string['maxactionspertime'] = 'Max. actions in time frame';
$string['maxactionspertime_help'] = 'The maximum number of actions that will count for XP during the time frame given. Any subsequent action will be ignored.';
$string['navinfos'] = 'Infos';
$string['navladder'] = 'Ladder';
$string['navlevels'] = 'Levels';
$string['navlog'] = 'Log';
$string['navreport'] = 'Report';
$string['navrules'] = 'Rules';
$string['navsettings'] = 'Settings';
$string['navvisuals'] = 'Visuals';
$string['participatetolevelup'] = 'Participate in the course to gain experience points and level up!';
$string['pluginname'] = 'Level up!';
$string['progress'] = 'Progress';
$string['property:action'] = 'Event action';
$string['property:component'] = 'Event component';
$string['property:crud'] = 'Event CRUD';
$string['property:eventname'] = 'Event name';
$string['property:target'] = 'Event target';
$string['rank'] = 'Rank';
$string['reallyresetdata'] = 'Really reset the levels and experience points of everyone in this course?';
$string['resetcoursedata'] = 'Reset course data';
$string['rule'] = 'Rule';
$string['rule:contains'] = 'contains';
$string['rule:eq'] = 'is equal to';
$string['rule:eqs'] = 'is strictly equal to';
$string['rule:gt'] = 'is greater than';
$string['rule:gte'] = 'is greater or equal to';
$string['rule:lt'] = 'is less than';
$string['rule:lte'] = 'is less or equal to';
$string['rule:regex'] = 'matches the regex';
$string['rulesformhelp'] = '<p>This plugin is making use of the events to attribute experience points to actions performed by the students. You can use the form below to add your own rules and view the default ones.</p>
<p>It is advised to check the plugin\'s <a href="{$a->log}">log</a> to identify what events are triggered as you perform actions in the course, and also to read more about events themselves: <a href="{$a->list}">list of all events</a>, <a href="{$a->doc}">developer documentation</a>.</p>
<p>Finally, please note that the plugin always ignores:
<ul>
    <li>The actions performed by administrators, guests or non-logged in users.</li>
    <li>The actions performed by users not having the capability <em>block/xp:earnxp</em>.</li>
    <li>Repeated actions within a short time interval, to prevent cheating.</li>
    <li>And the events of educational level not equal to <em>Participating</em>.</li>
</ul>
</p>';
$string['timebetweensameactions'] = 'Time required between identical actions';
$string['timebetweensameactions_help'] = 'In seconds, the minimum time required between identical actions. An action is considered identical if it was placed in the same context and object, reading a forum post will be considered identifical if the same post is read again.';
$string['timeformaxactions'] = 'Time frame for max. actions';
$string['timeformaxactions_help'] = 'The time frame (in seconds) during which the user should not exceed a maximum number of actions.';
$string['updateandpreview'] = 'Update and preview';
$string['usealgo'] = 'Use the algorithm';
$string['usecustomlevelbadges'] = 'Use custom level badges';
$string['usecustomlevelbadges_help'] = 'When set to yes, you must provide an image for each level.';
$string['value'] = 'Value';
$string['valuessaved'] = 'The values have been successfully saved.';
$string['viewtheladder'] = 'View the ladder';
$string['when'] = 'When';
$string['xp'] = 'Experience points';
$string['xp:addinstance'] = 'Add a new XP block';
$string['xp:earnxp'] = 'Earning experience points';
$string['xpgaindisabled'] = 'XP gain disabled';
$string['xprequired'] = 'XP required';
$string['youreachedlevela'] = 'You reached level {$a}!';
