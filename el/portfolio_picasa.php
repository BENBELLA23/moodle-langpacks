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
 * Strings for component 'portfolio_picasa', language 'el', branch 'MOODLE_32_STABLE'
 *
 * @package   portfolio_picasa
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'Αναγνωριστικό πελάτη';
$string['noauthtoken'] = 'Ένα κουπόνι αυθεντικοποίησης δεν έχει ληφθεί από την Google. Παρακαλούμε, βεβαιωθείτε ότι επιτρέπετε στο Moodle να αποκτά πρόσβαση στο λογαριασμό σας στο Google.';
$string['nooauthcredentials'] = 'Απαιτούνται διαπιστευτήρια OAuth.';
$string['nooauthcredentials_help'] = 'Για να χρησιμοποιήσετε το πρόσθετο χαρτοφυλακίου Picasa, πρέπει να ρυθμίσετε τα διαπιστευτήρια του OAuth στις ρυθμίσεις χαρτοφυλακίου.';
$string['oauthinfo'] = '<p>Για να χρησιμοποιήσετε αυτό το πρόσθετο, πρέπει να καταχωρήσετε τον ιστότοπό σας στο Google, όπως περιγράφεται στην τεκμηρίωση για την <a href="{$a->docsurl} ">εγκατάσταση του Google OAuth 2.0 </a>.</p><p>Στο πλαίσιο της διαδικασίας καταχώρησης, θα πρέπει να δώσετε την ακόλουθη διεύθυνση URL ως \'Authorized Redirect URIs\' (εξουσιοδοτημένες ανακατευθύνσεις URI):</p<p>{$a->callbackurl}</p><p>Μόλις καταχωρηθείτε, σας παρέχεται ένα αναγνωριστικό πελάτη και ένα μυστικό που μπορεί να χρησιμοποιηθεί για τη διαμόρφωση όλων των πρόσθετων Google Drive και Picasa.</p>';
$string['pluginname'] = 'Picasa';
$string['secret'] = 'Μυστικό';
$string['sendfailed'] = 'Αποτυχία μεταφοράς του αρχείου {$a} στο Picasa';
