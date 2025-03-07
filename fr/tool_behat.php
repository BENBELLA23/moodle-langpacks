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
 * Strings for component 'tool_behat', language 'fr', version '4.1'.
 *
 * @package     tool_behat
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aim'] = 'Cet outil d\'administration aide les développeurs et les personnes qui créent les tests à composer des fichiers .feature décrivant les fonctionnalités de Moodle et à lancer les tests automatiquement. La définition des étapes pouvant être utilisées dans les fichiers .feature est affichées ci-dessous.';
$string['allavailablesteps'] = 'Toutes les définitions d\'étape disponibles';
$string['errorbehatcommand'] = 'Erreur d\'exécution de la commande CLI behat. Essayez de lancer « {$a} --help » manuellement afin d\'en savoir plus sur le problème.';
$string['errorcomposer'] = 'Les dépendances de composition ne sont pas installées.';
$string['errordataroot'] = '$CFG->behat_dataroot n\'est pas définie ou n\'est pas valide.';
$string['errorsetconfig'] = 'Les variables $CFG->behat_dataroot, $CFG->behat_prefix et $CFG->behat_wwwroot doivent être définies dans config.php.';
$string['erroruniqueconfig'] = 'Les variables $CFG->behat_dataroot, $CFG->behat_prefix et $CFG->behat_wwwroot doivent être définies avec des valeurs différentes de $CFG->dataroot, $CFG->prefix, $CFG->wwwroot, $CFG->phpunit_dataroot et $CFG->phpunit_prefix.<br/>Ou bien, si $CFG->behat_prefix est le même, $CFG->behat_dbname ou $CFG->behat_dbhost doivent être différents de $CFG->phpunit_dbname et $CFG->phpunit_dbhost et de $CFG->dbname et $CFG->dbhost.';
$string['fieldvalueargument'] = 'Paramètres de la valeur du champ';
$string['fieldvalueargument_help'] = 'Ce paramètre doit être renseigné avec une valeur de champ. Il y a beaucoup de types de champ, certains simples, par exemple cases à cocher, boîtes de sélection et zones de texte, ou plus complexes comme des sélecteurs de date. Veuillez consulter <a href="https://moodledev.io/general/development/tools/behat" target="_blank">Acceptance testing</a> (en anglais) pour des informations sur les valeurs attendues en fonction du type de champ fourni.';
$string['giveninfo'] = 'Donné. Processus pour mettre en place l\'environnement';
$string['infoheading'] = 'Info';
$string['installinfo'] = 'Lire {$a} pour des informations sur l\'installation et l\'exécution des tests.';
$string['newstepsinfo'] = 'Lire {$a} pour des informations sur l\'ajout de la définitions d\'étape';
$string['newtestsinfo'] = 'Lire {$a} pour des informations de confection de nouveaux tests';
$string['nostepsdefinitions'] = 'Il n\'y a pas de définition d\'étape correspondant à ce filtre';
$string['pluginname'] = 'Tests d\'acceptation';
$string['privacy:metadata'] = 'Le plugin Tests d\'acceptation n\'enregistre aucune donnée personnelle.';
$string['stepsdefinitionscomponent'] = 'Zone';
$string['stepsdefinitionscontains'] = 'Contient';
$string['stepsdefinitionsfilters'] = 'Définitions d\'étape';
$string['stepsdefinitionstype'] = 'Type';
$string['theninfo'] = 'Alors. Vérifications assurant que les résultats sont bien ceux attendus';
$string['unknownexceptioninfo'] = 'Un problème est survenu avec Selenium ou votre navigateur. Assurez-vous que vous utilisez la dernière version de Selenium. Erreur :';
$string['viewsteps'] = 'Filtre';
$string['warndirrootconfigfound'] = 'Un fichier de configuration a été trouvé à {$a}. Ce fichier n\'est pas mis à jour automatiquement et peut devenir obsolète. Il est recommandé de supprimer ce fichier.';
$string['wheninfo'] = 'Quand. Action qui provoque un événement';
$string['wrongbehatsetup'] = 'Quelque chose n\'est pas correct dans vos réglages behat, qui empêche l\'affichage de la définition des étapes : <b>{$a->errormsg}</b><br/><br/>Assurez-vous que
<ul>
<li>les variables $CFG->behat_dataroot, $CFG->behat_prefix et $CFG->behat_wwwroot sont définies dans config.php avec des valeurs différentes de $CFG->dataroot, $CFG->prefix et $CFG->wwwroot ;</li>
<li>vous avez lancé la commande « {$a->behatinit} » depuis votre dossier moodle ;</li>
<li>les dépendances sont installées dans le dossier vendor/ et le fichier {$a->behatcommand} possède les droits d\'accès pour être lancé.</li></ul>';
