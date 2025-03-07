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
 * Strings for component 'debug', language 'fr', version '4.1'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Plugin d\'authentification {$a} introuvable.';
$string['blocknotexist'] = 'Le bloc {$a} n\'existe pas';
$string['cannotbenull'] = '{$a} ne peut pas être nul !';
$string['cannotdowngrade'] = 'Impossible de faire revenir {$a->plugin} de {$a->oldversion} vers {$a->newversion}.';
$string['cannotfindadmin'] = 'Impossible de trouver un administrateur !';
$string['cannotinitpage'] = 'Impossible d\'initialiser complètement la page : {$a->name}, identifiant {$a->id} non valide';
$string['cannotsetuptable'] = '{$a} tables n\'ont pas pu être configurées correctement !';
$string['codingerror'] = 'Erreur de programmation détectée. Ceci doit être corrigé par un programmeur : {$a}';
$string['configmoodle'] = 'Moodle n\'a pas encore été configuré. Vous devez avant tout écrire le fichier config.php.';
$string['debuginfo'] = 'Info de débogage';
$string['erroroccur'] = 'Une erreur est survenue durant cette procédure';
$string['invalidarraysize'] = 'Taille incorrecte des tableaux dans les paramètres de {$a}';
$string['invalideventdata'] = 'Données d\'événement incorrecte : {$a}';
$string['invalidparameter'] = 'Valeur incorrecte de paramètre détectée';
$string['invalidresponse'] = 'Valeur retournée incorrecte détectée';
$string['line'] = 'Ligne';
$string['missingconfigversion'] = 'La table Config ne contient pas la version. Impossible de continuer.';
$string['modulenotexist'] = 'Le module {$a} n\'existe pas';
$string['morethanonerecordinfetch'] = 'Plus d\'un enregistrement trouvé dans fetch() !';
$string['mustbeoveride'] = 'La méthode abstraite {$a} doit être surchargée.';
$string['noadminrole'] = 'Aucun rôle administrateur trouvé';
$string['noblocks'] = 'Aucun bloc installé !';
$string['nocate'] = 'Aucune catégorie !';
$string['nomodules'] = 'Aucun module trouvé !';
$string['nopageclass'] = '{$a} a été importé, mais aucune classe de page n\'a été trouvée';
$string['noreports'] = 'Aucun rapport disponible';
$string['notables'] = 'Pas de table !';
$string['outputbuffer'] = 'Tampon de sortie';
$string['phpvaroff'] = 'La variable « {$a->name} » du serveur PHP devrait être sur Off - {$a->link}';
$string['phpvaron'] = 'La variable « {$a->name} » du serveur PHP n\'est pas sur On - {$a->link}';
$string['reactive_highlightoff'] = 'Surlignage désactivé';
$string['reactive_highlighton'] = 'Surlignage activé';
$string['reactive_instances'] = 'Instances Reactive';
$string['reactive_noinstances'] = 'Cette page n\'a pas d\'instance Reactive';
$string['reactive_pin'] = 'Épingler';
$string['reactive_readmodeoff'] = 'Mode lecture désactivé';
$string['reactive_readmodeon'] = 'Mode lecture activé';
$string['reactive_resetpanel'] = 'Réinitialiser le panneau';
$string['reactive_saveingwarning'] = 'Attention ! La modification de l\'état peut générer des résultats inattendus.';
$string['reactive_statedata'] = 'Données d\'état';
$string['reactive_unpin'] = 'Dépingler';
$string['sessionmissing'] = 'L\'objet de session {$a} n\'est pas présent dans la session';
$string['sqlrelyonobsoletetable'] = 'Ce code SQL présuppose des tables obsolètes : {$a} ! Votre code doit être corrigé par un développeur.';
$string['stacktrace'] = 'Trace de la pile';
$string['withoutversion'] = 'Le fichier principal version.php n\'existe pas, ne peut pas être lu ou est corrompu';
$string['xmlizeunavailable'] = 'Les fonctions xmlize ne sont pas disponibles';
