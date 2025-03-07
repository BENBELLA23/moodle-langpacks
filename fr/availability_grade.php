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
 * Strings for component 'availability_grade', language 'fr', version '4.1'.
 *
 * @package     availability_grade
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cachedef_items'] = 'Éléments d\'évaluation mis en cache pour l\'évaluation de la disponibilité conditionnelle';
$string['cachedef_scores'] = 'Notes de l\'utilisateur mises en cache pour l\'évaluation de la disponibilité conditionnelle';
$string['description'] = 'Requiert l\'atteinte d\'une note minimale par les étudiants';
$string['error_backwardrange'] = 'Lors de l\'indication d\'un intervalle de notes, le minimum doit être inférieur au maximum.';
$string['error_invalidnumber'] = 'Les intervalles de notes doivent être indiqués avec des pourcentages valides.';
$string['error_selectgradeid'] = 'Vous devez sélectionner un élément d\'évaluation pour la condition de note.';
$string['label_max'] = 'Pourcentage de note maximum (exclusif)';
$string['label_min'] = 'Pourcentage de note minimum (inclusif)';
$string['missing'] = '(activité manquante)';
$string['option_max'] = 'doit être <';
$string['option_min'] = 'doit être ≥';
$string['pluginname'] = 'Restriction par note';
$string['privacy:metadata'] = 'Le plugin Restriction par note n\'enregistre aucune donnée personnelle.';
$string['requires_any'] = 'Vous ayez une note dans <strong>{$a}</strong>';
$string['requires_max'] = 'Vous obteniez une note plus base qu\'un certain score dans <strong>{$a}</strong>';
$string['requires_min'] = 'Vous obteniez une note plus élevée qu\'un certain score dans <strong>{$a}</strong>';
$string['requires_notany'] = 'Vous n\'ayez pas de note dans <strong>{$a}</strong>';
$string['requires_notgeneral'] = 'Vous n\'obteniez pas des notes particulières dans <strong>{$a}</strong>';
$string['requires_range'] = 'Vous obteniez une note dans un certain intervalle dans <strong>{$a}</strong>';
$string['title'] = 'Note';
