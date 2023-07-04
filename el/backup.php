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
 * Strings for component 'backup', language 'el', version '4.1'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Η διαδικασία δημιουργίας αντιγράφων ασφαλείας έχει ολοκληρωθεί';
$string['asyncbackupcompletebutton'] = 'Συνέχεια';
$string['asyncbackupcompletedetail'] = 'Η διαδικασία δημιουργίας αντιγράφων ασφαλείας έχει ολοκληρωθεί με επιτυχία.<br/> Μπορείτε να αποκτήσετε πρόσβαση στο αντίγραφο ασφαλείας στη <a href="{$a}">σελίδα επαναφοράς</a>.';
$string['asyncbackuperror'] = 'Η διαδικασία δημιουργίας αντιγράφων ασφαλείας απέτυχε';
$string['asyncbackuperrordetail'] = 'Η διαδικασία δημιουργίας αντιγράφων ασφαλείας απέτυχε. Παρακαλούμε, επικοινωνήστε με το διαχειριστή του συστήματός σας.';
$string['asyncbackuppending'] = 'Η διαδικασία δημιουργίας αντιγράφων ασφαλείας εκκρεμεί';
$string['asyncbackupprocessing'] = 'Η διαδικασία δημιουργίας αντιγράφων ασφαλείας βρίσκεται σε εξέλιξη';
$string['asyncbadexecution'] = 'Μη ορθή εκτέλεση εφεδρικού ελεγκτή. Είναι {$a} ενώ θα έπρεπε να είναι 2.';
$string['asynccheckprogress'] = 'Μπορείτε να ελέγξετε την πρόοδο ανά πάσα στιγμή στη <a href="{$a}">σελίδα επαναφοράς</a>.';
$string['asyncemailenable'] = 'Ενεργοποιήστε τις ειδοποιήσεις μηνυμάτων';
$string['asyncemailenabledetail'] = 'Αν ενεργοποιηθεί, οι χρήστες θα λάβουν ένα μήνυμα όταν ολοκληρωθεί μια ασύγχρονη δημιουργία ή επαναφορά αντιγράφου ασφαλείας.';
$string['asyncgeneralsettings'] = 'Ασύγχρονη επαναφορά/δημιουργία αντιγράφου ασφαλείας';
$string['asyncmessagebody'] = 'Μήνυμα';
$string['asyncmessagebodydefault'] = 'Γεια σας κ. {user_firstname},<br />
Η διαδικασία σας {operation} (Αναγνωριστικό: {backupid}) ολοκληρώθηκε με επιτυχία!
<br /><br />
Μπορείτε να την δείτε εδώ {link}.<br />
Με φιλικούς χαιρετισμούς,<br />
Ο διαχειριστής του Moodle σας.';
$string['asyncmessagebodydetail'] = 'Μήνυμα για αποστολή όταν ολοκληρώνεται μια ασύγχρονη επαναφορά ή δημιουργία αντιγράφου ασφαλείας.';
$string['asyncmessagesubject'] = 'Θέμα';
$string['asyncmessagesubjectdefault'] = 'Η λειτουργία {operation} του Moodle ολοκληρώθηκε με επιτυχία';
$string['asyncmessagesubjectdetail'] = 'Θέμα μηνύματος';
$string['asyncnowait'] = 'Δεν χρειάζεται να περιμένετε εδώ, καθώς η διεργασία θα συνεχιστεί στο παρασκήνιο.';
$string['asyncprocesspending'] = 'Εκκρεμεί διαδικασία';
$string['asyncrestorecomplete'] = 'Η διαδικασία επαναφοράς έχει ολοκληρωθεί';
$string['asyncrestorecompletebutton'] = 'Συνέχεια';
$string['asyncrestorecompletedetail'] = 'Η διαδικασία επαναφοράς έχει ολοκληρωθεί με επιτυχία. Κάνοντας κλικ στο πλήκτρο «Συνέχεια» θα μεταβείτε στο <a href="{$a}">μάθημα για το στοιχείο που επαναφέρθηκε</a>.';
$string['asyncrestoreerror'] = 'Η διαδικασία επαναφοράς απέτυχε';
$string['asyncrestoreerrordetail'] = 'Η διαδικασία επαναφοράς απέτυχε. Παρακαλούμε, επικοινωνήστε με το διαχειριστή του συστήματός σας.';
$string['asyncrestoreinprogress'] = 'Επαναφορές σε εξέλιξη';
$string['asyncrestoreinprogress_help'] = 'Οι ασύγχρονες επαναφορές μαθημάτων που βρίσκονται σε εξέλιξη εμφανίζονται εδώ.';
$string['asyncrestorepending'] = 'Η διαδικασία επαναφοράς εκκρεμεί';
$string['asyncrestoreprocessing'] = 'Η επαναφορά βρίσκεται σε εξέλιξη';
$string['asyncreturn'] = 'Επιστροφή στο μάθημα';
$string['autoactivedescription'] = 'Επιλέξτε αν θέλετε ή όχι να δημιουργούνται αυτόματα αντίγραφα ασφαλείας. Αν επιλέξετε χειροκίνητα, τα αυτόματα αντίγραφα ασφαλείας θα είναι δυνατά μόνο μέσα από το σενάριο αυτομάτων αντιγράφων ασφαλείας CLI (Command-Line Interface). Αυτό μπορεί να γίνει είτε χειροκίνητα από τη γραμμή εντολών ή μέσω της εντολής χρονοπρογραμματισμού cron.';
$string['autoactivedisabled'] = 'Απενεργοποιημένο';
$string['autoactiveenabled'] = 'Ενεργοποιημένο';
$string['autoactivemanual'] = 'Μη αυτόματο';
$string['automatedbackupschedule'] = 'Χρονοπρόγραμμα';
$string['automatedbackupschedulehelp'] = 'Επιλέξτε ποιές ημέρες της εβδομάδας να δημιουργούνται αυτόματα αντίγραφα ασφαλείας.';
$string['automatedbackupsinactive'] = 'Η αυτόματη δημιουργία αντιγράφων ασφαλείας δεν έχει ενεργοποιηθεί από το διαχειριστή του ιστοτόπου';
$string['automatedbackupstatus'] = 'Κατάσταση δημιουργίας αυτόματων αντιγράφων ασφαλείας';
$string['automateddeletedays'] = 'Διαγραφή αντιγράφων ασφαλείας προγενέστερων από';
$string['automatedmaxkept'] = 'Μέγιστος αριθμός αντιγράφων ασφαλείας που θα διατηρούνται';
$string['automatedmaxkepthelp'] = 'Καθορίζει το μέγιστο αριθμό των πρόσφατων αυτόματων αντιγράφων ασφαλείας που πρέπει να διατηρούνται για κάθε μάθημα. Παλαιότερα αντίγραφα ασφαλείας θα διαγράφονται αυτόματα.';
$string['automatedminkept'] = 'Ελάχιστος αριθμός αντιγράφων ασφαλείας που θα διατηρούνται';
$string['automatedminkepthelp'] = 'Αν τα αντίγραφα ασφαλείας προγενέστερα από ένα συγκεκριμένο αριθμό ημερών έχουν διαγραφεί, μπορεί να συμβεί ένα ανενεργό μάθημα να βρεθεί χωρίς κανένα αντίγραφο ασφαλείας. Για να αποφευχθεί αυτό, θα πρέπει να καθοριστεί ένας ελάχιστος αριθμός αντιγράφων ασφαλείας που θα διατηρούνται.';
$string['automatedsettings'] = 'Ρυθμίσεις αυτόματων αντιγράφων ασφαλείας';
$string['automatedsetup'] = 'Ρύθμιση αυτόματων αντιγράφων ασφαλείας';
$string['automatedstorage'] = 'Αυτόματη αποθήκευση αντιγράφων ασφαλείας';
$string['automatedstoragehelp'] = 'Επιλέξτε την τοποθεσία που θέλετε να αποθηκεύονται τα αντίγραφα ασφαλείας όταν δημιουργούνται αυτόματα.';
$string['backupactivity'] = 'Δραστηριότητα αντιγράφου ασφαλείας: {$a}';
$string['backupcourse'] = 'Αντίγραφο ασφαλείας μαθήματος: {$a}';
$string['backupcoursedetails'] = 'Λεπτομέρειες μαθήματος';
$string['backupcoursesection'] = 'Ενότητα: {$a}';
$string['backupcoursesections'] = 'Ενότητες μαθήματος';
$string['backupdate'] = 'Ημερομηνία δημιουργίας';
$string['backupdetails'] = 'Λεπτομέρειες αντιγράφου ασφαλείας';
$string['backupdetailsnonstandardinfo'] = 'Το επιλεγμένο αρχείο δεν είναι τυπικό αρχείο αντιγράφου ασφαλείας του Moodle. Η διαδικασία επαναφοράς θα προσπαθήσει να μετατρέψει το αρχείο αντιγράφου ασφαλείας σε τυποποιημένη μορφή και στη συνέχεια να το επαναφέρει.';
$string['backupformat'] = 'Μορφή';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Άγνωστη μορφή';
$string['backuplog'] = 'Τεχνικές πληροφορίες και προειδοποιήσεις';
$string['backupmode'] = 'Λειτουργία';
$string['backupmode10'] = 'Γενικά';
$string['backupmode20'] = 'Εισαγωγή';
$string['backupmode30'] = 'Διανομέας';
$string['backupmode40'] = 'Ίδιος ιστότοπος';
$string['backupmode50'] = 'Αυτοματοποιημένο';
$string['backupmode60'] = 'Τροποποιημένο';
$string['backupmode70'] = 'Ασύγχρονα';
$string['backupsection'] = 'Αντίγραφο ασφαλείας ενότητας μαθήματος: {$a}';
$string['backupsettings'] = 'Ρυθμίσεις αντιγράφου ασφαλείας';
$string['backupsitedetails'] = 'Λεπτομέρειες ιστοτόπου';
$string['backupstage16action'] = 'Συνέχεια';
$string['backupstage1action'] = 'Επόμενο';
$string['backupstage2action'] = 'Επόμενο';
$string['backupstage4action'] = 'Εκτέλεση αντιγράφου ασφαλείας';
$string['backupstage8action'] = 'Συνέχεια';
$string['backuptype'] = 'Τύπος';
$string['backuptypeactivity'] = 'Δραστηριότητα';
$string['backuptypecourse'] = 'Μάθημα';
$string['backuptypesection'] = 'Ενότητα';
$string['backupversion'] = 'Έκδοση αντιγράφου ασφαλείας';
$string['cannotfindassignablerole'] = 'Δεν είναι δυνατή η αντιστοίχιση του ρόλου {$a} στο αρχείο αντιγράφου ασφαλείας με κάποιο από τους ρόλους που έχετε τη δυνατότητα να αναθέσετε.';
$string['choosefilefromactivitybackup'] = 'Περιοχή αντιγράφου ασφαλείας δραστηριότητας';
$string['choosefilefromactivitybackup_help'] = 'Εδώ αποθηκεύονται αντίγραφα ασφαλείας που δημιουργούνται με χρήση των προεπιλεγμένων ρυθμίσεων.';
$string['choosefilefromautomatedbackup'] = 'Αυτόματη δημιουργία αντιγράφων ασφαλείας';
$string['choosefilefromautomatedbackup_help'] = 'Περιέχει αντίγραφα ασφαλείας που δημιουργήθηκαν αυτόματα.';
$string['choosefilefromcoursebackup'] = 'Περιοχή αντιγράφων ασφαλείας μαθήματος';
$string['choosefilefromcoursebackup_help'] = 'Όταν χρησιμοποιούνται οι προεπιλεγμένες ρυθμίσεις για τα αντίγραφα ασφαλείας των μαθημάτων, τα αντίγραφα ασφαλείας θα αποθηκεύονται εδώ.';
$string['choosefilefromuserbackup'] = 'Προσωπική περιοχή αντιγράφων ασφαλείας χρήστη';
$string['choosefilefromuserbackup_help'] = 'Τα αρχεία αντιγράφων ασφαλείας με ανώνυμες πληροφορίες χρήστη αποθηκεύονται εδώ.';
$string['config_keep_groups_and_groupings'] = 'Από προεπιλογή, διατηρήστε τις τρέχουσες ομάδες και τις ομαδοποιήσεις.';
$string['config_keep_roles_and_enrolments'] = 'Από προεπιλογή, διατηρήστε τους τρέχοντες ρόλους και εγγραφές.';
$string['config_overwrite_conf'] = 'Επιτρέπει στο χρήστη να αντικαταστήσει τις τρέχουσες ρυθμίσεις μαθήματος';
$string['config_overwrite_course_fullname'] = 'Από προεπιλογή, αντικαταστήστε το πλήρες όνομα του μαθήματος με αυτό από το αρχείο αντιγράφου ασφαλείας. Αυτό απαιτεί την ενεργοποίηση της επιλογής «Αντικατάσταση ρυθμίσεων μαθήματος» και να έχει την δυνατότητα ο τρέχοντας χρήστης να αλλάξει το πλήρες όνομα του μαθήματος (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'Από προεπιλογή, αντικαταστήστε το σύντομο όνομα του μαθήματος με αυτό από το αρχείο αντιγράφου ασφαλείας. Αυτό απαιτεί την ενεργοποίηση της επιλογής «Αντικατάσταση ρυθμίσεων μαθήματος» και να έχει την δυνατότητα ο τρέχοντας χρήστης να αλλάξει το σύντομο όνομα του μαθήματος (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'Από προεπιλογή, αντικαταστήστε την ημερομηνία έναρξης του μαθήματος με αυτό από το αρχείο αντιγράφου ασφαλείας. Αυτό απαιτεί την ενεργοποίηση της επιλογής «Αντικατάσταση ρυθμίσεων μαθήματος» και να έχει την δυνατότητα ο τρέχοντας χρήστης να αλλάξει τις ημερομηνίες του μαθήματος κατά την επαναφορά (moodle/restore:rolldates)';
$string['configgeneralactivities'] = 'Ορίζει την προεπιλογή για την συμπερίληψη δραστηριοτήτων στα αντίγραφα ασφαλείας.';
$string['configgeneralanonymize'] = 'Αν ενεργοποιηθεί όλες οι πληροφορίες σχετικά με τους χρήστες θα είναι ανώνυμες από προεπιλογή.';
$string['configgeneralbadges'] = 'Ορίζει την προεπιλογή για την συμπερίληψη διακριτικών στα αντίγραφα ασφαλείας.';
$string['configgeneralblocks'] = 'Ορίζει την προεπιλογή για την συμπερίληψη μπλοκ στα αντίγραφα ασφαλείας.';
$string['configgeneralcalendarevents'] = 'Ορίζει την προεπιλογή για την συμπερίληψη γεγονότων ημερολογίου στα αντίγραφα ασφαλείας.';
$string['configgeneralcomments'] = 'Ορίζει την προεπιλογή για την συμπερίληψη των σχολίων στα αντίγραφα ασφαλείας.';
$string['configgeneralcompetencies'] = 'Ορίζει την προεπιλογή για την συμπερίληψη προσόντων στα εφεδρικά αντίγραφα ασφαλείας.';
$string['configgeneralcontentbankcontent'] = 'Ορίζει την προεπιλογή για τη συμπερίληψη περιεχομένου τράπεζας περιεχομένου σε ένα αντίγραφο ασφαλείας.';
$string['configgeneralfiles'] = 'Ορίζει την προεπιλογή για τη συμπερίληψη αρχείων σε ένα αντίγραφο ασφαλείας. Παρακαλούμε σημειώστε: Η απενεργοποίηση αυτής της ρύθμισης θα έχει ως αποτέλεσμα ένα αντίγραφο ασφαλείας που περιλαμβάνει μόνο αναφορές σε αρχεία. Αυτό δεν είναι πρόβλημα αν αποκατασταθεί το αντίγραφο ασφαλείας στον ίδιο ιστότοπο και τα αρχεία δεν έχουν διαγραφεί σύμφωνα με τη ρύθμιση «Εκκαθάριση αρχείων δεξαμενής απορριμμάτων» (filescleanupperiod).';
$string['configgeneralfilters'] = 'Ορίζει την προεπιλογή για την συμπερίληψη φίλτρων στα αντίγραφα ασφαλείας.';
$string['configgeneralgroups'] = 'Ορίζει την προεπιλογή για την συμπερίληψη ομάδων και ομαδοποιήσεων στα αντίγραφα ασφαλείας.';
$string['configgeneralhistories'] = 'Ορίζει την προεπιλογή για την συμπερίληψη ιστορικού χρήστη εντός των αντιγράφων ασφαλείας.';
$string['configgenerallogs'] = 'Αν ενεργοποιηθεί οι καταγραφές θα περιλαμβάνονται στα αντίγραφα ασφαλείας από προεπιλογή.';
$string['configgeneralpermissions'] = 'Εάν ενεργοποιηθεί, θα εισαχθούν τα δικαιώματα ρόλου. Αυτό μπορεί να αντικαταστήσει τα υπάρχοντα δικαιώματα για εγγεγραμμένους χρήστες.';
$string['configgeneralquestionbank'] = 'Εάν ενεργοποιηθεί, η τράπεζα ερωτήσεων θα περιλαμβάνεται στα αντίγραφα ασφαλείας από προεπιλογή. ΣΗΜΕΙΩΣΗ: Η απενεργοποίηση αυτής της ρύθμισης θα απενεργοποιήσει τη δημιουργία αντιγράφων ασφαλείας δραστηριοτήτων που χρησιμοποιούν τράπεζα ερωτήσεων, όπως π.χ. το κουίζ.';
$string['configgeneralroleassignments'] = 'Αν ενεργοποιηθεί από προεπιλογή θα προστεθούν επίσης στα αντίγραφα ασφαλείας οι αναθέσεις ρόλων.';
$string['configgeneralusers'] = 'Ορίζει την προεπιλογή για το αν θα συμπεριλαμβάνονται οι χρήστες στα αντίγραφα ασφαλείας.';
$string['configgeneraluserscompletion'] = 'Εάν ενεργοποιηθεί, οι πληροφορίες ολοκλήρωσης ενός χρήστη θα περιλαμβάνονται στα αντίγραφα ασφαλείας από προεπιλογή.';
$string['configlegacyfiles'] = 'Ορίζει την προεπιλογή για τη συμπερίληψη αρχείων μαθημάτων παλαιού τύπου σε ένα αντίγραφο ασφαλείας. Τα αρχεία μαθημάτων παλαιού τύπου προέρχονται από εκδόσεις του Moodle πριν από την 2.0.';
$string['configloglifetime'] = 'Καθορίζει το χρονικό διάστημα που θέλετε να διατηρήσετε πληροφορίες καταγραφών αντιγράφων ασφαλείας. Παλαιότερες καταγραφές διαγράφονται αυτόματα. Συνιστάται να διατηρείται αυτή η τιμή μικρή, επειδή οι καταγραφές αντιγράφων ασφαλείας μπορεί να είναι τεράστιες.';
$string['configrestoreactivities'] = 'Ορίζει τις προεπιλεγμένες ρυθμίσεις για την επαναφορά δραστηριοτήτων.';
$string['configrestorebadges'] = 'Ορίζει την προεπιλογή για την επαναφορά διακριτικών (από αντίγραφα ασφαλείας).';
$string['configrestoreblocks'] = 'Ορίζει την προεπιλογή για την επαναφορά των μπλοκ.';
$string['configrestorecalendarevents'] = 'Ορίζει την προεπιλογή για την επαναφορά γεγονότων ημερολογίου.';
$string['configrestorecomments'] = 'Ορίζει την προεπιλογή για την επαναφορά σχολίων.';
$string['configrestorecompetencies'] = 'Ορίζει την προεπιλογή για την επαναφορά προσόντων (από αντίγραφα ασφαλείας).';
$string['configrestorecontentbankcontent'] = 'Ορίζει την προεπιλογή για την επαναφορά περιεχομένου τράπεζας περιεχομένου.';
$string['configrestoreenrolments'] = 'Ορίζει την προεπιλογή για την επαναφορά των μεθόδων εγγραφής.';
$string['configrestorefilters'] = 'Ορίζει την προεπιλογή για την επαναφορά φίλτρων.';
$string['configrestoregroups'] = 'Ορίζει τις προεπιλεγμένες ρυθμίσεις για την επαναφορά ομάδων και ομαδοποιήσεων αν είχαν συμπεριληφθεί στο αντίγραφο ασφαλείας.';
$string['configrestorehistories'] = 'Ορίζει την προεπιλογή για την επαναφορά του ιστορικού των χρηστών αν είχε συμπεριληφθεί στο αντίγραφο ασφαλείας.';
$string['configrestorelogs'] = 'Εάν ενεργοποιηθεί, οι καταγραφές θα επαναφερθούν από προεπιλογή αν περιλαμβάνονταν στο αντίγραφο ασφαλείας.';
$string['configrestorepermissions'] = 'Εάν ενεργοποιηθεί, τα δικαιώματα ρόλου θα αποκατασταθούν. Αυτό μπορεί να αντικαταστήσει τα υπάρχοντα δικαιώματα για εγγεγραμμένους χρήστες.';
$string['configrestoreroleassignments'] = 'Αν ενεργοποιηθεί από προεπιλογή, οι αναθέσεις ρόλων θα επαναφερθούν αν είχαν συμπεριληφθεί στο αντίγραφο ασφαλείας.';
$string['configrestoreusers'] = 'Ορίζει την προεπιλεγμένη ρύθμιση για την επαναφορά των χρηστών αν συμπεριλαμβάνονταν στο αντίγραφο ασφαλείας.';
$string['configrestoreuserscompletion'] = 'Εάν ενεργοποιηθεί, πληροφορίες ολοκλήρωσης χρήστη θα επαναφερθούν από προεπιλογή εάν είχαν συμπεριληφθεί στο αντίγραφο ασφαλείας.';
$string['confirmcancel'] = 'Ακύρωση αντιγράφου ασφαλείας';
$string['confirmcancelimport'] = 'Ακύρωση εισαγωγής';
$string['confirmcancelno'] = 'Μην ακυρώσετε';
$string['confirmcancelquestion'] = 'Είστε βέβαιοι ότι θέλετε να κάνετε ακύρωση; Όλες οι πληροφορίες που έχετε εισάγει θα χαθούν.';
$string['confirmcancelrestore'] = 'Ακύρωση επαναφοράς';
$string['confirmcancelyes'] = 'Άκυρο';
$string['confirmnewcoursecontinue'] = 'Προειδοποίηση νέου μαθήματος';
$string['confirmnewcoursecontinuequestion'] = 'Ένα προσωρινό (κρυφό) μάθημα θα δημιουργηθεί από τη διαδικασία επαναφοράς μαθήματος. Για να ματαιώσετε την επαναφορά πατήστε Άκυρο. Μην κλείσετε τον περιηγητή, κατά την επαναφορά.';
$string['copiesinprogress'] = 'Αυτό το μάθημα έχει αντίγραφα σε εξέλιξη. <a href="{$a}">Προβολή των αντιγράφων σε εξέλιξη.</a>';
$string['copycoursedesc'] = 'Για αυτό το μάθημα θα δημιουργηθεί αντίγραφο και θα τεθεί στην επιλεγμένη κατηγορία μαθημάτων.';
$string['copycourseheading'] = 'Αντιγραφή ενός μαθήματος';
$string['copycoursetitle'] = 'Αντιγραφή μαθήματος: {$a}';
$string['copydest'] = 'Προορισμός';
$string['copyfieldnotfound'] = 'Δεν βρέθηκε ένα απαιτούμενο πεδίο';
$string['copyformfail'] = 'Η υποβολή AJAX της φόρμας αντιγράφου μαθήματος απέτυχε.';
$string['copyingcourse'] = 'Αντιγραφή μαθήματος σε εξέλιξη';
$string['copyingcourseshortname'] = 'γίνεται αντιγραφή';
$string['copyop'] = 'Τρέχουσα λειτουργία';
$string['copyprogressheading'] = 'Αντίγραφα μαθημάτων σε εξέλιξη';
$string['copyprogressheading_help'] = 'Αυτός ο πίνακας εμφανίζει την κατάσταση όλων των αντιγράφων μη ολοκληρωμένων μαθημάτων.';
$string['copyprogresstitle'] = 'Πρόοδος αντιγράφου μαθήματος';
$string['copyreturn'] = 'Αντιγραφή και επιστροφή';
$string['copysource'] = 'Πηγή';
$string['copyview'] = 'Αντιγραφή και εμφάνιση';
$string['coursecategory'] = 'Κατηγορία στην οποία θα επαναφερθεί το μάθημα';
$string['courseid'] = 'Αρχικό αναγνωριστικό';
$string['coursesettings'] = 'Ρυθμίσεις μαθήματος';
$string['coursetitle'] = 'Τίτλος';
$string['currentstage1'] = 'Αρχικές ρυθμίσεις';
$string['currentstage16'] = 'Ολοκλήρωση';
$string['currentstage2'] = 'Ρυθμίσεις διάταξης';
$string['currentstage4'] = 'Επιβεβαίωση και εξέταση';
$string['currentstage8'] = 'Εκτέλεση αντιγράφου ασφαλείας';
$string['enableasyncbackup'] = 'Ενεργοποίηση ασύγχρονων αντιγράφων ασφαλείας';
$string['enableasyncbackup_help'] = 'Αν ενεργοποιηθεί, όλες οι λειτουργίες δημιουργίας και επαναφοράς αντιγράφων ασφαλείας θα γίνονται ασύγχρονα. Αυτό δεν επηρεάζει τις εισαγωγές και τις εξαγωγές. Τα ασύγχρονα αντίγραφα ασφαλείας και οι επαναφορές επιτρέπουν στους χρήστες να πραγματοποιούν άλλες λειτουργίες ενώ εκτελείται η δημιουργία ή η επαναφορά των αντιγράφων αυτών.';
$string['enterasearch'] = 'Εισάγετε μια αναζήτηση';
$string['error_block_for_module_not_found'] = 'Βρέθηκε ορφανό στιγμιότυπο μπλοκ (αναγνωριστικό: {$a->bid}) για το άρθρωμα αναγνωριστικό(id: {$a->mid}). Αυτό το μπλοκ δεν θα συμπεριληφθεί στο αντίγραφο ασφαλείας.';
$string['error_course_module_not_found'] = 'Βρέθηκε ορφανό άρθρωμα μαθήματος (αναγνωριστικό: {$a}). Αυτό το άρθρωμα δεν θα συμπεριληφθεί στο αντίγραφο ασφαλείας.';
$string['errorcopyingbackupfile'] = 'Αποτυχία αντιγραφής του αρχείου αντιγράφου ασφαλείας στον προσωρινό φάκελο πριν την επαναφορά.';
$string['errorfilenamemustbezip'] = 'Το όνομα αρχείου που εισάγετε πρέπει να είναι ένα αρχείο ZIP και να έχει την επέκταση .mbz';
$string['errorfilenamerequired'] = 'Θα πρέπει να εισάγετε ένα έγκυρο όνομα αρχείου για το αντίγραφο ασφαλείας';
$string['errorfilenametoolong'] = 'Το όνομα αρχείου πρέπει να έχει μήκος μικρότερο από 255 χαρακτήρες.';
$string['errorinvalidformat'] = 'Άγνωστη μορφή αντιγράφου ασφαλείας';
$string['errorinvalidformatinfo'] = 'Το επιλεγμένο αρχείο δεν είναι ένα έγκυρο αρχείο αντιγράφου ασφαλείας του Moodle και δεν είναι δυνατή η επαναφορά του.';
$string['errorminbackup20version'] = 'Αυτό το αντίγραφο ασφαλείας έχει δημιουργηθεί με μία υπο ανάπτυξη έκδοση του Moodle δημιουργίας αντιγράφων ασφαλείας ({$a->backup}). Ελάχιστο απαιτούμενο είναι {$a->min}. Δεν είναι δυνατή η επαναφορά.';
$string['errorrestorefrontpagebackup'] = 'Μπορείτε να επαναφέρετε αντίγραφα ασφαλείας της πρώτης σελίδας μόνο στην πρώτη σελίδα';
$string['executionsuccess'] = 'Το αρχείο αντιγράφου ασφαλείας δημιουργήθηκε με επιτυχία.';
$string['extractingbackupfileto'] = 'Εξαγωγή αρχείου αντιγράφου ασφαλείας σε: {$a}';
$string['failed'] = 'Η δημιουργία αντιγράφων ασφαλείας απέτυχε';
$string['filealiasesrestorefailures'] = 'Αποτυχίες επαναφοράς ψευδώνυμων';
$string['filealiasesrestorefailures_help'] = 'Τα ψευδώνυμα είναι συμβολικοί σύνδεσμοι σε άλλα αρχεία, συμπεριλαμβανομένων εκείνων που είναι αποθηκευμένα σε εξωτερικά αποθετήρια. Σε ορισμένες περιπτώσεις, το Moodle δεν μπορεί να τα επαναφέρει - για παράδειγμα, όταν η γίνεται επαναφορά του αντιγράφου ασφαλείας σε ένα άλλο ιστότοπο ή όταν δεν υπάρχει το αναφερόμενο αρχείο. Περισσότερες λεπτομέρειες και η πραγματική αιτία της αποτυχίας μπορεί να βρεθεί στο αρχείο καταγραφής της επαναφοράς.';
$string['filealiasesrestorefailures_link'] = '';
$string['filealiasesrestorefailuresinfo'] = 'Δεν είναι δυνατή η επαναφορά μερικών ψευδώνυμων που περιλαμβάνονται στο αρχείο αντιγράφου ασφαλείας. Η ακόλουθη λίστα περιέχει την αναμενόμενη τοποθεσία τους και το αρχείο προέλευσης που αναφέρονταν στον αρχικό ιστότοπο.';
$string['filename'] = 'Όνομα αρχείου';
$string['filereferencesincluded'] = 'Οι αναφορές αρχείων σε εξωτερικό περιεχόμενο περιλαμβάνονται στο αρχείο αντιγράφου ασφαλείας. Αυτές δεν θα λειτουργούν αν γίνει επαναφορά του αντιγράφου ασφαλείας σε διαφορετικό ιστότοπο.';
$string['filereferencesnotsamesite'] = 'Το αρχείο αντιγράφου ασφαλείας είναι από διαφορετικό ιστότοπο, οπότε δεν είναι εφικτή η επαναφορά αναφορών αρχείων.';
$string['filereferencessamesite'] = 'Το αρχείο αντιγράφου ασφαλείας είναι από αυτόν τον ιστότοπο, οπότε είναι εφικτή η επαναφορά αναφορών αρχείων.';
$string['generalactivities'] = 'Συμπερίληψη δραστηριοτήτων και πόρων';
$string['generalanonymize'] = 'Ανωνυμία πληροφοριών';
$string['generalbackdefaults'] = 'Γενικές προεπιλογές αντιγράφων ασφαλείας';
$string['generalbadges'] = 'Συμπερίληψη διακριτικών';
$string['generalblocks'] = 'Συμπερίληψη μπλοκ';
$string['generalcalendarevents'] = 'Συμπερίληψη γεγονότων ημερολογίου';
$string['generalcomments'] = 'Συμπερίληψη σχολίων';
$string['generalcompetencies'] = 'Συμπερίληψη προσόντων';
$string['generalcontentbankcontent'] = 'Συμπερίληψη περιεχομένου τράπεζας περιεχομένου';
$string['generalenrolments'] = 'Συμπεριλάβετε μεθόδους εγγραφής';
$string['generalfiles'] = 'Συμπερίληψη αρχείων';
$string['generalfilters'] = 'Συμπερίληψη φίλτρων';
$string['generalgradehistories'] = 'Συμπερίληψη ιστορικών';
$string['generalgroups'] = 'Συμπερίληψη ομάδων και ομαδοποιήσεων';
$string['generalhistories'] = 'Συμπερίληψη ιστορικών';
$string['generallegacyfiles'] = 'Συμπερίληψη αρχείων μαθημάτων παλαιού τύπου';
$string['generallogs'] = 'Συμπερίληψη καταγραφών';
$string['generalpermissions'] = 'Συμπερίληψη παρακάμψεων δικαιωμάτων';
$string['generalquestionbank'] = 'Συμπερίληψη τράπεζας ερωτήσεων';
$string['generalrestoredefaults'] = 'Γενικές επιλογές επαναφοράς (από αντίγραφο ασφαλείας)';
$string['generalrestoresettings'] = 'Γενικές επιλογές επαναφοράς (από αντίγραφο ασφαλείας)';
$string['generalroleassignments'] = 'Συμπερίληψη αναθέσεων ρόλων';
$string['generalsettings'] = 'Γενικές ρυθμίσεις δημιουργίας αντιγράφων ασφαλείας';
$string['generalusers'] = 'Συμπερίληψη χρηστών';
$string['generaluserscompletion'] = 'Συμπερίληψη πληροφοριών ολοκλήρωσης χρήστη';
$string['hidetypes'] = 'Επιλογές απόκρυψης τύπων';
$string['importbackupstage16action'] = 'Συνέχεια';
$string['importbackupstage1action'] = 'Επόμενο';
$string['importbackupstage2action'] = 'Επόμενο';
$string['importbackupstage4action'] = 'Εκτέλεση εισαγωγής';
$string['importbackupstage8action'] = 'Συνέχεια';
$string['importcurrentstage0'] = 'Επιλογή μαθήματος';
$string['importcurrentstage1'] = 'Αρχικές ρυθμίσεις';
$string['importcurrentstage16'] = 'Ολοκλήρωση';
$string['importcurrentstage2'] = 'Ρυθμίσεις διάταξης';
$string['importcurrentstage4'] = 'Επιβεβαίωση και εξέταση';
$string['importcurrentstage8'] = 'Εκτέλεση εισαγωγής';
$string['importfile'] = 'Εισαγωγή αντιγράφου ασφαλείας';
$string['importgeneralduplicateadminallowed'] = 'Να επιτρέπεται επίλυση σύγκρουση admin';
$string['importgeneralduplicateadminallowed_desc'] = 'Αν ο ιστότοπος έχει ένα λογαριασμό με όνομα χρήστη «admin», και γίνει προσπάθεια επαναφοράς ενός αρχείου αντιγράφου ασφαλείας που περιέχει ένα λογαριασμό με όνομα χρήστη «admin» θα προκληθεί σύγκρουση. Εάν ενεργοποιηθεί αυτή η ρύθμιση, η σύγκρουση θα επιλυθεί με την αλλαγή του ονόματος χρήστη στο αρχείο αντιγράφου ασφαλείας σε «admin_xyz».';
$string['importgeneralmaxresults'] = 'Μέγιστος αριθμός μαθημάτων για εισαγωγή';
$string['importgeneralmaxresults_desc'] = 'Ελέγχει τον αριθμό των μαθημάτων που απαριθμούνται στο πρώτο στάδιο της διαδικασίας εισαγωγής';
$string['importgeneralsettings'] = 'Προεπιλογές γενικής εισαγωγής';
$string['importrootsettings'] = 'Ρυθμίσεις εισαγωγής';
$string['importsettings'] = 'Ρυθμίσεις γενικής εισαγωγής';
$string['importsuccess'] = 'Η εισαγωγή ολοκληρώθηκε. Κάντε κλικ στο κουμπί Συνέχεια για να επιστρέψετε στο μάθημα';
$string['includeactivities'] = 'Περιλαμβάνουν:';
$string['includeditems'] = 'Αντικείμενα που συμπεριλαμβάνονται:';
$string['includefilereferences'] = 'Αναφορές αρχείου σε εξωτερικό περιεχόμενο';
$string['includesection'] = 'Ενότητα {$a}';
$string['includeuserinfo'] = 'Δεδομένα χρήστη';
$string['inprogress'] = 'Δημιουργία αντιγράφων ασφαλείας σε εξέλιξη';
$string['jumptofinalstep'] = 'Μεταπήδηση στο τελικό στάδιο';
$string['keep'] = 'Διατήρηση';
$string['keptroles'] = 'Συμπερίληψη εγγραφών ρόλων';
$string['keptroles_help'] = 'Οι χρήστες με τους επιλεγμένους ρόλους θα εγγραφούν στο νέο μάθημα. Δεν θα αντιγραφούν δεδομένα χρήστη εκτός εάν είναι ενεργοποιημένη η «Συμπερίληψη δεδομένων χρήστη».';
$string['locked'] = 'Κλειδωμένο';
$string['lockedbyconfig'] = 'Η ρύθμιση αυτή έχει κλειδωθεί από τις προεπιλεγμένες ρυθμίσεις δημιουργίας αντιγράφων ασφαλείας';
$string['lockedbyhierarchy'] = 'Κλειδωμένο από εξαρτήσεις';
$string['lockedbypermission'] = 'Δεν έχετε επαρκή δικαιώματα για να αλλάξετε αυτή τη ρύθμιση';
$string['loglifetime'] = 'Διατήρηση καταγραφών για';
$string['managefiles'] = 'Διαχείριση αντιγράφων ασφαλείας';
$string['mergerestoredefaults'] = 'Επαναφορά προεπιλογών κατά τη συγχώνευση σε άλλο μάθημα';
$string['missingfilesinpool'] = 'Δεν ήταν δυνατή η αποθήκευση κάποιων αρχείων κατά τη δημιουργία αντιγράφου ασφαλείας, και έτσι δεν θα είναι δυνατή η επαναφορά τους.';
$string['module'] = 'Άρθρωμα';
$string['moodleversion'] = 'Έκδοση Moodle';
$string['morecoursesearchresults'] = 'Βρέθηκαν περισσότερα από {$a} μαθήματα, εμφάνιση {$a} πρώτων αποτελεσμάτων';
$string['moreresults'] = 'Υπάρχουν πάρα πολλά αποτελέσματα, εισάγετε μια πιο συγκεκριμένη αναζήτηση.';
$string['nomatchingcourses'] = 'Δεν υπάρχουν μαθήματα για να εμφανίσετε';
$string['norestoreoptions'] = 'Δεν υπάρχουν κατηγορίες ή υπάρχοντα μαθήματα για επαναφορά.';
$string['originalwwwroot'] = 'Διεύθυνση URL αντιγράφου ασφαλείας';
$string['overwrite'] = 'Αντικατάσταση';
$string['pendingasyncdeletedetail'] = 'Αυτό το μάθημα έχει ένα ασύγχρονο αντίγραφο ασφαλείας που εκκρεμεί.<br />Τα μαθήματα δεν μπορούν να διαγραφούν μέχρι να ολοκληρωθεί αυτό το αντίγραφο ασφαλείας.';
$string['pendingasyncdetail'] = 'Τα ασύγχρονα αντίγραφα ασφαλείας επιτρέπουν σε ένα χρήστη να έχει μόνο ένα αντίγραφο ασφαλείας σε εκκρεμότητα για έναν πόρο κάθε στιγμή.<br/>
Πολλαπλά ασύγχρονα αντίγραφα ασφαλείας του ίδιου πόρου δεν μπορούν να τεθούν σε ουρά, καθώς αυτό πιθανόν να έχει ως αποτέλεσμα πολλαπλά αντίγραφα ασφαλείας με το ίδιο περιεχόμενο.';
$string['pendingasyncedit'] = 'Εκκρεμεί μια δημιουργία ασύγχρονου αντιγράφου ασφαλείας για αυτό το μάθημα. Μην επεξεργαστείτε αυτό το μάθημα μέχρι να ολοκληρωθεί η δημιουργία του αντιγράφου ασφαλείας.';
$string['pendingasyncerror'] = 'Εκκρεμεί δημιουργία αντιγράφου ασφαλείας για αυτόν τον πόρο';
$string['preparingdata'] = 'Προετοιμασία δεδομένων';
$string['preparingui'] = 'Προετοιμασία εμφάνισης σελίδας';
$string['previousstage'] = 'Προηγούμενο';
$string['privacy:metadata:backup:detailsofarchive'] = 'Αυτό το αρχείο μπορεί να περιέχει διάφορα δεδομένα χρήστη σχετικά με ένα μάθημα, όπως βαθμοί, εγγραφές χρηστών και δεδομένα δραστηριότητας.';
$string['privacy:metadata:backup:externalpurpose'] = 'Ο σκοπός αυτού του αρχείου είναι η αποθήκευση πληροφοριών σχετικά με ένα μάθημα, του οποίου μπορεί να γίνει επαναφορά στο μέλλον.';
$string['privacy:metadata:backup_controllers'] = 'Η λίστα των εργασιών δημιουργίας αντιγράφων ασφαλείας';
$string['privacy:metadata:backup_controllers:itemid'] = 'Το αναγνωριστικό του μαθήματος';
$string['privacy:metadata:backup_controllers:operation'] = 'Η λειτουργία που εκτελέστηκε, π.χ. επαναφορά.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'Η ώρα κατά την οποία δημιουργήθηκε η ενέργεια';
$string['privacy:metadata:backup_controllers:timemodified'] = 'Πότε τροποποιήθηκε η ενέργεια';
$string['privacy:metadata:backup_controllers:type'] = 'Ο τύπος του στοιχείου που χρησιμοποιείται, π.χ. δραστηριότητα.';
$string['qcategory2coursefallback'] = 'Η κατηγορία ερωτήσεων «{$a->name}», αρχικά στο πλαίσιο σύστημα/κατηγορία μαθημάτων στο αρχείο αντιγράφου ασφαλείας, θα δημιουργηθεί στο πλαίσιο μαθήματος κατά την επαναφορά';
$string['qcategorycannotberestored'] = 'Δεν είναι δυνατή η δημιουργία της κατηγορίας ερωτήσεων «{$a->name}» κατά την επαναφορά';
$string['question2coursefallback'] = 'Η κατηγορία ερωτήσεων «{$a->name}», αρχικά στο πλαίσιο σύστημα/κατηγορία μαθημάτων στο αρχείο αντιγράφου ασφαλείας, θα δημιουργηθεί στο πλαίσιο μαθήματος κατά την επαναφορά';
$string['questionegorycannotberestored'] = 'Δεν είναι δυνατή η δημιουργία της κατηγορίας ερωτήσεων «{$a->name}» κατά την επαναφορά';
$string['recyclebin_desc'] = 'Να σημειωθεί ότι αυτές οι ρυθμίσεις θα εφαρμοστούν επίσης στον κάδο ανακύκλωσης.';
$string['replacerestoredefaults'] = 'Επαναφορά προεπιλογών κατά την επαναφορά σε άλλο μάθημα, διαγράφοντας τα περιεχόμενα';
$string['restoreactivity'] = 'Επαναφορά δραστηριότητας';
$string['restorecourse'] = 'Επαναφορά μαθήματος';
$string['restorecoursesettings'] = 'Ρυθμίσεις μαθήματος';
$string['restoredcourseid'] = 'Αναγνωριστικό επαναφερθέντος μαθήματος: {$a}';
$string['restoreexecutionsuccess'] = 'Η επαναφορά του μαθήματος έγινε με επιτυχία. Πατώντας το κουμπί «Συνέχεια» παρακάτω θα δείτε το μάθημα που επαναφέρατε.';
$string['restorefileweremissing'] = 'Δεν ήταν δυνατή η επαναφορά κάποιων αρχείων, διότι λείπουν από το αντίγραφο ασφαλείας.';
$string['restorenewcoursefullname'] = 'Όνομα νέου μαθήματος';
$string['restorenewcourseshortname'] = 'Σύντομο όνομα νέου μαθήματος';
$string['restorenewcoursestartdate'] = 'Νέα ημερομηνία έναρξης';
$string['restorerolemappings'] = 'Επαναφορά αντιστοιχήσεων ρόλων';
$string['restorerootsettings'] = 'Επαναφορά ρυθμίσεων';
$string['restoresection'] = 'Επαναφορά ενότητας';
$string['restorestage1'] = 'Επιβεβαίωση';
$string['restorestage16'] = 'Εξέταση';
$string['restorestage16action'] = 'Εκτέλεση επαναφοράς';
$string['restorestage1action'] = 'Επόμενο';
$string['restorestage2'] = 'Προορισμός';
$string['restorestage2action'] = 'Επόμενο';
$string['restorestage32'] = 'Διαδικασία';
$string['restorestage32action'] = 'Συνέχεια';
$string['restorestage4'] = 'Ρυθμίσεις';
$string['restorestage4action'] = 'Επόμενο';
$string['restorestage64'] = 'Ολοκλήρωση';
$string['restorestage64action'] = 'Συνέχεια';
$string['restorestage8'] = 'Σχήμα';
$string['restorestage8action'] = 'Επόμενο';
$string['restoretarget'] = 'Επαναφορά στόχου';
$string['restoretocourse'] = 'Επαναφορά στο μάθημα:';
$string['restoretocurrentcourse'] = 'Επαναφορά σε αυτό το μάθημα';
$string['restoretocurrentcourseadding'] = 'Συγχώνευση του μαθήματος από το αντίγραφο ασφαλείας σε αυτό το μάθημα';
$string['restoretocurrentcoursedeleting'] = 'Διαγραφή των περιεχομένων αυτού του μαθήματος και επαναφορά';
$string['restoretoexistingcourse'] = 'Επαναφορά σε ένα υπάρχον μάθημα';
$string['restoretoexistingcourseadding'] = 'Συγχώνευση του μαθήματος από το αντίγραφο ασφαλείας στο υπάρχον μάθημα';
$string['restoretoexistingcoursedeleting'] = 'Διαγραφή των περιεχομένων του υπάρχοντος μαθήματος και επαναφορά';
$string['restoretonewcourse'] = 'Επαναφορά ως νέο μάθημα';
$string['restoringcourse'] = 'Επαναφορά μαθήματος σε εξέλιξη';
$string['restoringcourseshortname'] = 'γίνεται επαναφορά';
$string['rootenrolmanual'] = 'Επαναφορά ως χειροκίνητες εγγραφές';
$string['rootsettingactivities'] = 'Συμπερίληψη δραστηριοτήτων και πόρων';
$string['rootsettinganonymize'] = 'Ανωνυμία πληροφοριών χρήστη';
$string['rootsettingbadges'] = 'Συμπερίληψη διακριτικών';
$string['rootsettingblocks'] = 'Συμπερίληψη μπλοκ';
$string['rootsettingcalendarevents'] = 'Συμπερίληψη γεγονότων ημερολογίου';
$string['rootsettingcomments'] = 'Συμπερίληψη σχολίων';
$string['rootsettingcompetencies'] = 'Συμπερίληψη προσόντων';
$string['rootsettingcontentbankcontent'] = 'Συμπερίληψη περιεχομένου τράπεζας περιεχομένου';
$string['rootsettingcustomfield'] = 'Να περιλαμβάνονται προσαρμοσμένα πεδία';
$string['rootsettingenrolments'] = 'Συμπερίληψη μεθόδων εγγραφής';
$string['rootsettingenrolments_always'] = 'Ναι, πάντα';
$string['rootsettingenrolments_never'] = 'Όχι, επαναφορά χρηστών ως χειροκίνητες εγγραφές';
$string['rootsettingenrolments_withusers'] = 'Ναι, αλλά μόνο αν συμπεριλαμβάνονται χρήστες';
$string['rootsettingfiles'] = 'Συμπερίληψη αρχείων';
$string['rootsettingfilters'] = 'Συμπερίληψη φίλτρων';
$string['rootsettinggradehistories'] = 'Συμπερίληψη ιστορικού βαθμολόγησης';
$string['rootsettinggroups'] = 'Συμπερίληψη ομάδων και ομαδοποιήσεων';
$string['rootsettingimscc1'] = 'Μετατροπή σε IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Μετατροπή σε IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = 'Συμπερίληψη αρχείων μαθημάτων παλαιού τύπου';
$string['rootsettinglogs'] = 'Να συμπεριλαμβάνονται καταγραφές μαθήματος';
$string['rootsettingpermissions'] = 'Συμπερίληψη παρακάμψεων δικαιωμάτων';
$string['rootsettingquestionbank'] = 'Συμπερίληψη τράπεζας ερωτήσεων';
$string['rootsettingroleassignments'] = 'Συμπερίληψη αναθέσεων ρόλου χρήστη';
$string['rootsettings'] = 'Ρυθμίσεις αντιγράφων ασφαλείας';
$string['rootsettingusers'] = 'Συμπερίληψη εγγεγραμμένων χρηστών';
$string['rootsettinguserscompletion'] = 'Συμπερίληψη λεπτομερειών ολοκλήρωσης χρήστη';
$string['samesitenotification'] = 'Αυτό το αντίγραφο ασφαλείας δημιουργήθηκε με αναφορές μόνο σε αρχεία, όχι με τα ίδια τα αρχεία. Η επαναφορά θα λειτουργήσει μόνο σε αυτόν τον ιστότοπο.';
$string['sectionactivities'] = 'Δραστηριότητες';
$string['sectioninc'] = 'Συμπεριλαμβάνονται στο αντίγραφο ασφαλείας (χωρίς πληροφορίες χρήστη)';
$string['sectionincanduser'] = 'Συμπεριλαμβάνονται στο αντίγραφο ασφαλείας μαζί με πληροφορίες χρήστη';
$string['selectacategory'] = 'Επιλογή μιας κατηγορίας';
$string['selectacourse'] = 'Επιλογή ενός μαθήματος';
$string['setting_course_fullname'] = 'Όνομα μαθήματος';
$string['setting_course_shortname'] = 'Σύντομο όνομα μαθήματος';
$string['setting_course_startdate'] = 'Ημερομηνία έναρξης μαθήματος';
$string['setting_keep_groups_and_groupings'] = 'Διατήρηση τρεχόντων ομάδων και ομαδοποιήσεων';
$string['setting_keep_roles_and_enrolments'] = 'Διατήρηση τρεχόντων ρόλων και εγγραφών';
$string['setting_overwrite_conf'] = 'Αντικατάσταση ρυθμίσεων μαθήματος';
$string['setting_overwrite_course_fullname'] = 'Αντικαταστήστε το πλήρες όνομα του μαθήματος';
$string['setting_overwrite_course_shortname'] = 'Αντικαταστήστε το σύντομο όνομα του μαθήματος';
$string['setting_overwrite_course_startdate'] = 'Αντικαταστήστε την ημερομηνία έναρξης του μαθήματος';
$string['showtypes'] = 'Εμφάνιση επιλογών τύπου';
$string['sitecourseformatwarning'] = 'Αυτό είναι ένα αντίγραφο ασφαλείας της πρώτης σελίδας. Σημειώστε ότι μπορεί να γίνει επαναφορά μόνο στην πρώτη σελίδα';
$string['skiphidden'] = 'Παράβλεψη κρυφών μαθημάτων';
$string['skiphiddenhelp'] = 'Επιλέξτε αν θα γίνει παράβλεψη ή όχι των κρυφών μαθημάτων';
$string['skipmodifdays'] = 'Παράβλεψη μαθημάτων που δεν έχουν τροποποιηθεί από';
$string['skipmodifdayshelp'] = 'Επιλέξτε αν θα γίνει παράβλεψη μαθημάτων που δεν έχουν τροποποιηθεί από έναν αριθμό ημερών';
$string['skipmodifprev'] = 'Παράβλεψη μαθημάτων που δεν έχουν τροποποιηθεί από το προηγούμενο αντίγραφο ασφαλείας';
$string['skipmodifprevhelp'] = 'Επιλέξτε αν θα γίνει παράβλεψη μαθημάτων που δεν έχουν τροποποιηθεί από την τελευταία αυτόματη δημιουργία αντιγράφου ασφαλείας. Αυτό απαιτεί να είναι ενεργοποιημένη η καταγραφή.';
$string['status'] = 'Κατάσταση';
$string['storagecourseandexternal'] = 'Περιοχή αρχείων αντιγράφων ασφαλείας μαθήματος και ο ορισμένος κατάλογος';
$string['storagecourseonly'] = 'Περιοχή αρχείων αντιγράφων ασφαλείας μαθήματος';
$string['storageexternalonly'] = 'Ορισμένος κατάλογος για αυτόματα αντίγραφα ασφαλείας';
$string['successful'] = 'Δημιουργία αντιγράφου ασφαλείας επιτυχής';
$string['successfulcopy'] = 'Αντιγραφή με επιτυχία';
$string['successfulrestore'] = 'Επαναφορά αντιγράφου ασφαλείας επιτυχής';
$string['timetaken'] = 'Χρόνος που χρειάστηκε';
$string['title'] = 'Τίτλος';
$string['totalcategorysearchresults'] = 'Σύνολο κατηγοριών: {$a}';
$string['totalcoursesearchresults'] = 'Σύνολο μαθημάτων: {$a}';
$string['undefinedrolemapping'] = 'Η αντιστοίχιση ρόλων δεν έχει οριστεί για το αρχέτυπο {{a}}.';
$string['unnamedsection'] = 'Ενότητα χωρίς όνομα';
$string['userdata'] = 'Συμπερίληψη δεδομένων χρήστη';
$string['userdata_help'] = 'Εάν ενεργοποιηθεί, δεδομένα όπως αναρτήσεις φόρουμ, υποβολές αναθέσεων κλπ. θα αντιγραφούν στο νέο μάθημα για οποιουσδήποτε χρήστες με επιλεγμένο ρόλο στο «Συμπερίληψη εγγραφών ρόλων».';
$string['userinfo'] = 'Πληροφορίες χρήστη';
