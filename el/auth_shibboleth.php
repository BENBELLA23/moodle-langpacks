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
 * Strings for component 'auth_shibboleth', language 'el', branch 'MOODLE_32_STABLE'
 *
 * @package   auth_shibboleth
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_shib_auth_method'] = 'Όνομα Μεθόδου Αυθεντικοποίησης';
$string['auth_shib_auth_method_description'] = 'Δώστε ένα όνομα για τη μέθοδο αυθεντικοποίησης Shibboleth που να είναι οικείο στους χρήστες σας. Αυτό θα μπορούσε να είναι το όνομα της Shibboleth ομοσπονδίας σας, π.χ. <tt>Σύνδεση SWITCHaai</ tt> ή <tt>Σύνδεση InCommon</ tt> ή παρόμοια.';
$string['auth_shibbolethdescription'] = 'Με αυτή την μέθοδο οι χρήστες δημιουργούνται και πιστοποιούνται χρησιμοποιώντας το <a href="http://shibboleth.internet2.edu/" target="_blank">Shibboleth</a>.<br> Διαβάστε <a href="../auth/shibboleth/README.txt" target="_blank">εδώ</a> σχετικά με το πως να ρυθμίσετε το Moodle με το Shibboleth.';
$string['auth_shibboleth_errormsg'] = 'Please select the organization you are member of!';
$string['auth_shibboleth_login'] = 'Σύνδεση μέσω Shibboleth';
$string['auth_shibboleth_login_long'] = 'Σύνδεση στο Moodle μέσω Shibboleth';
$string['auth_shibboleth_manual_login'] = 'Χειροκίνητη σύνδεση';
$string['auth_shibboleth_select_member'] = 'I\'m a member of ...';
$string['auth_shibboleth_select_organization'] = 'Για αυθεντικοποίηση μέσω του Shibboleth, επιλέξτε τον οργανισμό σας από την αναπτυσσόμενη λίστα:';
$string['auth_shib_changepasswordurl'] = 'URL αλλαγής κωδικού πρόσβασης';
$string['auth_shib_contact_administrator'] = 'Σε περίπτωση που δεν έχετε σχέση με τους δοσμένους οργανισμούς και χρειάζεστε πρόσβαση σε κάποιο μάθημα σε αυτόν τον εξυπηρετητή, παρακαλούμε <a href="mailto:{$a}">επικοινωνήστε με τον Διαχειριστή του Moodle</a>.';
$string['auth_shib_convert_data'] = 'API τροποποίησης δεδομένων';
$string['auth_shib_convert_data_description'] = 'Μπορείτε να χρησιμοποιήσετε αυτό το API για να τροποποιήσετε επιπλέον τα δεδομένα του Shibboleth. Διαβάστε το <a href="../auth/shibboleth/README.txt" target="_blank">README</a> για περισσότερες πληροφορίες.';
$string['auth_shib_convert_data_warning'] = 'Αυτό το αρχείο δεν υπάρχει ή δεν είναι αναγνώσιμο από την διεργασία του εξυπηρετητή ιστού!';
$string['auth_shib_idp_list'] = 'Πάροχοι ταυτότητας';
$string['auth_shib_idp_list_description'] = 'Παρέχετε μια λίστα των αναγνωριστικών οντοτήτων παρόχου ταυτότητας για να επιτρέψετε στον χρήστη να επιλέξει από τη σελίδα σύνδεσης.<br />Σε κάθε γραμμή πρέπει να υπάρχει μια πλειάδα αναγνωριστικών οντοτήτων (διαχωρισμένων με κόμμα) του IdP (δείτε το αρχείο μεταδεδομένων Shibboleth) και το όνομα του IdP όπως θα εμφανίζεται στην αναπτυσσόμενη λίστα.<br />Ως προαιρετική τρίτη παράμετρος μπορείτε να προσθέσετε τη θέση ενός εκκινητή συνόδου Shibboleth που θα χρησιμοποιηθεί σε περίπτωση που η εγκατάσταση Moodle σας είναι μέρος μιας εγκατάστασης πολλαπλών ομοσπονδιών (federation).';
$string['auth_shib_instructions'] = 'Χρησιμοποιήστε το <a href="{$a}">Shibboleth login</a> για πρόσβαση μέσω Shibboleth, εάν το ίδρυμά σας το υποστηρίζει.<br /> Ειδάλλως, χρησιμοποιήστε την κανονική φόρμα σύνδεσης/εισόδου που εμφανίζεται εδώ.';
$string['auth_shib_instructions_help'] = 'Εδώ πρέπει να παρέχετε οδηγίες στους χρήστες για επεξήγηση του Shibboleth. Θα εμφανίζονται στην σελίδα σύνδεσης/εισόδου στο τμήμα πληροφοριών. Αυτές οι πληροφορίες πρέπει να περιλαμβάνουν ένα σύνδεσμο προς "<b>{$a}</b>" στον οποίο θα κάνουν κλικ οι χρήστες όταν θέλουν να συνδεθούν.';
$string['auth_shib_integrated_wayf'] = 'Υπηρεσία Moodle WAYF';
$string['auth_shib_integrated_wayf_description'] = 'If you check this, Moodle will use its own WAYF service instead of the one configured for Shibboleth. Moodle will display a drop-down list on this alternative login page where the user has to select his Identity Provider.';
$string['auth_shib_logout_return_url'] = 'Εναλλακτική διεύθυνση URL επιστροφής μετά από αποσύνδεση';
$string['auth_shib_logout_return_url_description'] = 'Δώστε τη διεύθυνση URL στην οποία θα πρέπει να ανακατευθύνονται οι χρήστες του Shibboleth μετά την αποσύνδεση.<br />Εάν παραμείνει κενή, οι χρήστες θα ανακατευθύνονται στη θέση στην οποία ανακατευθύνει τους χρήστες το Moodle.';
$string['auth_shib_logout_url'] = 'Διεύθυνση URL χειρισμού αποσύνδεσης από τον πάροχο υπηρεσιών Shibboleth';
$string['auth_shib_logout_url_description'] = 'Δώστε την URL διεύθυνση του χειριστή αποσύνδεσης του Παρόχου Υπηρεσίας Shibboleth. Αυτή τυπικά είναι <tt>/Shibboleth.sso/Logout</tt>';
$string['auth_shib_no_organizations_warning'] = 'Εάν θέλετε να χρησιμοποιήσετε την ενσωματωμένη υπηρεσία WAYF, πρέπει να δώσετε μια λίστα διαχωρισμένων με κόμμα αναγνωριστικών οντοτήτων παρόχου ταυτότητας, τα ονόματά τους και προαιρετικά έναν εκκινητή περιόδου σύνδεσης.';
$string['auth_shib_only'] = 'Μόνο Shibboleth';
$string['auth_shib_only_description'] = 'Επιλέξτε αυτή την επιλογή αν πρέπει να επιβληθεί αυθεντικοποίηση Shibboleth';
$string['auth_shib_username_description'] = 'Όνομα της μεταβλητής περιβάλλοντος του Shibboleth εξυπηρετητή ιστού που θα χρησιμοποιηθεί ως όνομα χρήστη στο Moodle.';
$string['pluginname'] = 'Shibboleth';
$string['shib_invalid_account_error'] = 'Φαίνεται ότι έχετε πιστοποιηθεί από το Shibboleth, αλλά το Moodle δεν έχει έγκυρο λογαριασμό για το όνομα χρήστη σας. Ο λογαριασμός σας ενδέχεται να μην υπάρχει ή μπορεί να έχει ανασταλεί.';
$string['shib_no_attributes_error'] = 'Φαίνεται πως έχετε πιστοποιηθεί με την αυθεντικοποίηση Shibboleth αλλά το Moodle δεν έλαβε τα χαρακτηριστικά χρήστη. Παρακαλούμε ελέγξτε ότι ο Πάροχος Ταυτοτήτων σας (Identity Provider) αποστέλλει τα αναγκαία χαρακτηριστικά ({$a}) στον Πάροχο Υπηρεσιών στον οποίο εκτελείται το Moodle ή ενημερώστε το διαχειριστή ιστοτόπου αυτού του εξυπηρετητή.';
$string['shib_not_all_attributes_error'] = 'Το Moodle χρειάζεται συγκεκριμένα χαρακτηριστικά του Shibboleth τα οποία δεν είναι παρόντα στην περίπτωσή σας. Τα χαρακτηριστικά είναι: {$a}<br /> Παρακαλούμε επικοινωνήστε με το διαχειριστή του ιστοτόπου ή τον Πάροχο Ταυτοτήτων σας (Identity Provider).';
$string['shib_not_set_up_error'] = 'Η πιστοποίηση Shibboleth δεν έχει εγκατασταθεί σωστά επειδή δεν είναι παρούσες οι μεταβλητές περιβάλλοντος του Shibboleth για αυτή τη σελίδα. Παρακαλούμε κοιτάξτε <a href="README.txt">εδώ</a> για περισσότερες οδηγίες σχετικά με το πως να εγκαταστήσετε τη Shibboleth αυθεντικοποίηση ή επικοινωνήστε με το διαχειριστή ιστοτόπου αυτής της εγκατάστασης του Moodle.';
