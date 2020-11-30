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
 * Strings for component 'tool_xmldb', language 'el', version '3.8'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Πραγματικά';
$string['addpersistent'] = 'Προσθέστε υποχρεωτικά επιμένοντα πεδία';
$string['aftertable'] = 'Μετά τον πίνακα:';
$string['back'] = 'Επιστροφή';
$string['backtomainview'] = 'Επιστροφή στην κεντρική';
$string['cannotuseidfield'] = 'Το πεδίο «id» δεν μπορεί να εισαχθεί. Συμπληρώνεται αυτόματα με τον επόμενο αριθμό';
$string['change'] = 'Αλλαγή';
$string['charincorrectlength'] = 'Λάθος μήκος πεδίου χαρακτήρων';
$string['check_bigints'] = 'Έλεγχος για εσφαλμένους ακέραιους αριθμούς βάσης δεδομένων';
$string['check_defaults'] = 'Έλεγχος για ασυνεπείς προεπιλεγμένες τιμές';
$string['check_foreign_keys'] = 'Έλεγχος για παραβιάσεις ξένων κλειδιών';
$string['check_indexes'] = 'Έλεγχος για ελλείποντα ευρετήρια ΒΔ';
$string['check_oracle_semantics'] = 'Αναζητήστε σημασιολογία λανθασμένου μήκους';
$string['checkbigints'] = 'Έλεγχος ακεραίων αριθμών';
$string['checkdefaults'] = 'Έλεγχος προεπιλογών';
$string['checkforeignkeys'] = 'Έλεγχος ξένων κλειδιών';
$string['checkindexes'] = 'Έλεγχος ευρετηρίων';
$string['checkoraclesemantics'] = 'Σημασιολογικός έλεγχος';
$string['completelogbelow'] = '(δείτε την πλήρη καταγραφή της αναζήτησης παρακάτω)';
$string['confirmcheckbigints'] = 'Αυτή η λειτουργία θα αναζητήσει <a href="https://tracker.moodle.org/browse/MDL-11038"> πιθανά λανθασμένα πεδία ακέραιων αριθμών</a> στον εξυπηρετητή σας Moodle, δημιουργώντας (αλλά όχι εκτελώντας!) αυτόματα τις απαραίτητες SQL δηλώσεις για να είναι όλοι οι ακέραιοι στη ΒΔ σας κατάλληλα ορισμένοι.

Μόλις δημιουργηθούν, μπορείτε να αντιγράψετε αυτές τις δηλώσεις και να τις εκτελέσετε με ασφάλεια με την διεπαφή SQL που προτιμάτε (μην ξεχάσετε να δημιουργήσετε αντίγραφα ασφαλείας των δεδομένων σας πριν κάνετε κάτι τέτοιο).

Συνιστάται ιδιαίτερα, να εκτελείτε την πιο πρόσφατη διαθέσιμη διανομή (+ έκδοση) του Moodle πριν εκτελέσετε την αναζήτηση λανθασμένων ακέραιων αριθμών.

Αυτή η λειτουργία δεν εκτελεί καμία ενέργεια στην ΒΔ (μόνο διαβάζει από αυτή), έτσι μπορεί να εκτελεστεί με ασφάλεια ανά πάσα στιγμή.';
$string['confirmcheckdefaults'] = 'Αυτή η λειτουργία θα αναζητήσει ασυνεπείς προεπιλεγμένες τιμές στον εξυπηρετητή σας Moodle, δημιουργώντας (αλλά όχι εκτελώντας!) τις απαραίτητες δηλώσεις SQL για να έχετε όλες τις προεπιλεγμένες τιμές σωστά ορισμένες.

Μόλις δημιουργηθούν, μπορείτε να αντιγράψετε αυτές τις δηλώσεις και να τις εκτελέσετε με ασφάλεια με την διεπαφή SQL που προτιμάτε (μην ξεχάσετε να δημιουργήσετε αντίγραφα ασφαλείας των δεδομένων σας πριν κάνετε κάτι τέτοιο).

Συνιστάται ιδιαίτερα, να εκτελείτε την πιο πρόσφατη διανομή (+ έκδοση) του Moodle πριν εκτελέσετε την αναζήτηση των ασυνεπών προεπιλεγμένων τιμών.

Αυτή η λειτουργία δεν εκτελεί καμία ενέργεια στην ΒΔ (μόνο διαβάζει από αυτή), έτσι μπορεί να εκτελεστεί με ασφάλεια ανά πάσα στιγμή.';
$string['confirmcheckforeignkeys'] = 'Αυτή η λειτουργία θα αναζητήσει πιθανές παραβιάσεις των ξένων κλειδιών που ορίζονται στους ορισμούς install.xml. (Το Moodle δεν παράγει επί του παρόντος πραγματικούς περιορισμούς ξένου κλειδιού στη βάση δεδομένων, γι\'αυτό και ίσως να υπάρχουν μη έγκυρα δεδομένα.) Συνιστάται ιδιαίτερα, να εκτελείτε την πιο πρόσφατη (+) έκδοση του Moodle πριν εκτελέσετε την αναζήτηση πιθανών παραβιάσεων ξένων κλειδιών. Αυτή η λειτουργία δεν εκτελεί καμία ενέργεια κατά της ΒΔ (μόνο διαβάζει από τη ΒΔ), έτσι μπορεί να εκτελεστεί με ασφάλεια ανά πάσα στιγμή.';
$string['confirmcheckindexes'] = 'Αυτή η λειτουργία θα ψάξει για ευρετήρια που μπορεί να λείπουν από τον εξυπηρετητή σας Moodle, δημιουργώντας (αλλά όχι εκτελώντας!) αυτόματα τις απαραίτητες δηλώσεις SQL για να διατηρήσουν τα πάντα ενημερωμένα.

Μόλις δημιουργηθούν, μπορείτε να αντιγράψετε αυτές τις δηλώσεις και να τις εκτελέσετε με ασφάλεια με την διεπαφή SQL που προτιμάτε (μην ξεχάσετε να δημιουργήσετε αντίγραφα ασφαλείας των δεδομένων σας πριν κάνετε κάτι τέτοιο).

Συνιστάται ιδιαίτερα, να εκτελείτε την πιο πρόσφατη διαθέσιμη διανομή (+ έκδοση) του Moodle πριν εκτελέσετε την αναζήτηση ευρετηρίων που λείπουν.

Αυτή η λειτουργία δεν εκτελεί καμία ενέργεια στην βάση δεδομένων (μόνο διαβάζει από αυτή), έτσι μπορεί να εκτελεστεί με ασφάλεια ανά πάσα στιγμή.';
$string['confirmcheckoraclesemantics'] = 'Αυτή η λειτουργία θα ψάξει για <a href="http://tracker.moodle.org/browse/MDL-29322"> στήλες Oracle varchar2 που χρησιμοποιούν σημασιολογία BYTE</a> στον εξυπηρετητή σας Moodle, δημιουργώντας (αλλά όχι εκτελώντας!) αυτόματα τις απαραίτητες δηλώσεις SQL για να γίνει μετατροπή και να χρησιμοποιούν πλέον όλες οι στήλες την σημασιολογία CHAR (καλύτερη για συμβατότητα μεταξύ διαφορετικών βάσεων δεδομένων και αυξημένο μέγιστο μήκος περιεχομένου).

Μόλις δημιουργηθούν, μπορείτε να αντιγράψετε αυτές τις δηλώσεις και να τις εκτελέσετε με ασφάλεια με την διεπαφή SQL που προτιμάτε (μην ξεχάσετε να δημιουργήσετε αντίγραφα ασφαλείας των δεδομένων σας πριν κάνετε κάτι τέτοιο).

Συνιστάται ιδιαίτερα, να εκτελείτε την πιο πρόσφατη διαθέσιμη διανομή (+ έκδοση) του Moodle πριν εκτελέσετε την αναζήτηση της σημασιολογίας BYTE.

Αυτή η λειτουργία δεν εκτελεί καμία ενέργεια στην ΒΔ (μόνο διαβάζει από αυτή), έτσι μπορεί να εκτελεστεί με ασφάλεια ανά πάσα στιγμή.';
$string['confirmdeletefield'] = 'Θέλετε σίγουρα να διαγράψετε το πεδίο:';
$string['confirmdeleteindex'] = 'Θέλετε σίγουρα να διαγράψετε το ευρετήριο:';
$string['confirmdeletekey'] = 'Θέλετε σίγουρα να διαγράψετε το κλειδί:';
$string['confirmdeletetable'] = 'Θέλετε σίγουρα να διαγράψετε τον πίνακα:';
$string['confirmdeletexmlfile'] = 'Θέλετε σίγουρα να διαγράψετε το αρχείο:';
$string['confirmrevertchanges'] = 'Θέλετε σίγουρα να ακυρώσετε τις αλλαγές που κάνατε:';
$string['create'] = 'Δημιουργία';
$string['createtable'] = 'Δημιουργία πίνακα:';
$string['defaultincorrect'] = 'Λάθος προεπιλογή';
$string['delete'] = 'Διαγραφή';
$string['delete_field'] = 'Διαγραφή πεδίου';
$string['delete_index'] = 'Διαγραφή ευρετηρίου';
$string['delete_key'] = 'Διαγραφή κλειδιού';
$string['delete_table'] = 'Διαγραφή πίνακα';
$string['delete_xml_file'] = 'Διαγραφή XML αρχείου';
$string['doc'] = 'Doc';
$string['docindex'] = 'Ευρετήριο τεκμηρίωσης:';
$string['documentationintro'] = 'Αυτή η τεκμηρίωση δημιουργείται αυτόματα από τον ορισμό βάσης δεδομένων XMLDB. Είναι διαθέσιμη μόνο στα Αγγλικά.';
$string['down'] = 'Κάτω';
$string['duplicate'] = 'Διπλότυπο';
$string['duplicatefieldname'] = 'Υπάρχει άλλο πεδίο με αυτό το όνομα';
$string['duplicatefieldsused'] = 'Χρησιμοποιούνται διπλότυπα πεδία';
$string['duplicateindexname'] = 'Διπλότυπο όνομα ευρετηρίου';
$string['duplicatekeyname'] = 'Υπάρχει άλλο κλειδί με αυτό το όνομα';
$string['duplicatetablename'] = 'Ένας άλλος πίνακας με αυτό το όνομα υπάρχει ήδη';
$string['edit'] = 'Επεξεργασία';
$string['edit_field'] = 'Επεξεργασία πεδίου';
$string['edit_field_save'] = 'Αποθήκευση πεδίου';
$string['edit_index'] = 'Επεξεργασία ευρετηρίου';
$string['edit_index_save'] = 'Αποθήκευση ευρετηρίου';
$string['edit_key'] = 'Επεξεργασία κλειδιού';
$string['edit_key_save'] = 'Αποθήκευση κλειδιού';
$string['edit_table'] = 'Επεξεργασία πίνακα';
$string['edit_table_save'] = 'Αποθήκευση πίνακα';
$string['edit_xml_file'] = 'Επεξεργασία XML αρχείου';
$string['enumvaluesincorrect'] = 'Λάθος τιμή πεδίου απαρίθμησης';
$string['expected'] = 'Αναμενόμενο';
$string['extensionrequired'] = 'Λυπούμαστε - για αυτή την ενέργεια απαιτείται η επέκταση «{$a}» της PHP. Παρακαλούμε εγκαταστήστε την αν θέλετε να χρησιμοποιήσετε αυτό το χαρακτηριστικό.';
$string['field'] = 'Πεδίο';
$string['fieldnameempty'] = 'Κενό πεδίο ονόματος';
$string['fields'] = 'Πεδία';
$string['fieldsnotintable'] = 'Το πεδίο δεν υπάρχει στον πίνακα';
$string['fieldsusedinindex'] = 'Αυτό το πεδίο χρησιμοποιείται ως ευρετήριο';
$string['fieldsusedinkey'] = 'Το πεδίο αυτό χρησιμοποιείται σαν κλειδί.';
$string['filemodifiedoutfromeditor'] = 'Προειδοποίηση: Το αρχείο τροποποιείται τοπικά κατά τη χρήση του επεξεργαστή XMLDB. Η αποθήκευση θα αντικαταστήσει τις τοπικές αλλαγές.';
$string['filenotwriteable'] = 'Μη εγγράψιμο αρχείο';
$string['fkunknownfield'] = 'Το ξένο κλειδί (foreign key) {$a->keyname} στον πίνακα {$a->tablename} δείχνει προς ένα ανύπαρκτο πεδίο {$a->reffield} στον αναφερόμενο πίνακα {$a->reftable}.';
$string['fkunknowntable'] = 'Το ξένο κλειδί (foreign key) {$a->keyname} στον πίνακα {$a->tablename} δείχνει προς ένα ανύπαρκτο πίνακα {$a->reftable}.';
$string['fkviolationdetails'] = 'Το κλειδί {$a->keyname} στον πίνακα {$a->tablename} παραβιάζεται {$a->numviolations} φορές σε {$a->numrows} συνολικά γραμμές.';
$string['float2numbernote'] = 'Σημείωση: Παρόλο που τα πεδία «float» υποστηρίζονται 100% από την XMLDB, συνιστάται μετεγκατάσταση (μεταφορά/μετατροπή) σε πεδία «number».';
$string['floatincorrectdecimals'] = 'Λάθος αριθμός δεκαδικών ψηφίων για πεδίο πραγματικού αριθμού';
$string['floatincorrectlength'] = 'Λάθος μήκος για πεδίο πραγματικού αριθμού';
$string['generate_all_documentation'] = 'Όλη η τεκμηρίωση';
$string['generate_documentation'] = 'Τεκμηρίωση';
$string['gotolastused'] = 'Μετάβαση στο τελευταίο αρχείο που χρησιμοποιήθηκε';
$string['incorrectfieldname'] = 'Λάθος όνομα';
$string['incorrectindexname'] = 'Λανθασμένο όνομα ευρετηρίου';
$string['incorrectkeyname'] = 'Λανθασμένο όνομα κλειδιού';
$string['incorrecttablename'] = 'Λανθασμένο όνομα πίνακα';
$string['index'] = 'Ευρετήριο';
$string['indexes'] = 'Ευρετήρια';
$string['indexnameempty'] = 'Το όνομα του ευρετηρίου είναι κενό';
$string['integerincorrectlength'] = 'Λάθος μήκος για πεδίο ακεραίου αριθμού';
$string['key'] = 'Κλειδί';
$string['keynameempty'] = 'Το όνομα του κλειδιού δεν μπορεί να είναι κενό';
$string['keys'] = 'Κλειδιά';
$string['listreservedwords'] = 'Λίστα δεσμευμένων λέξεων <br />(χρησιμοποιείται για ενημέρωση των <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">δεσμευμένων λέξεων XMLDB</a>)';
$string['load'] = 'Φόρτωση';
$string['main_view'] = 'Κύρια προβολή';
$string['masterprimaryuniqueordernomatch'] = 'Τα πεδία του ξένου κλειδιού (foreign key) σας πρέπει να παρατίθενται με την ίδια σειρά που παρατίθενται στο UNIQUE KEY (μοναδικό κλειδί) στον πίνακα αναφοράς.';
$string['missing'] = 'Λείπουν';
$string['missingindexes'] = 'Βρέθηκαν ευρετήρια να λείπουν';
$string['mustselectonefield'] = 'Πρέπει να επιλέξετε ένα πεδίο για να δείτε τις σχετικές ενέργειες!';
$string['mustselectoneindex'] = 'Πρέπει να επιλέξετε ένα ευρετήριο για να δείτε τις σχετικές ενέργειες!';
$string['mustselectonekey'] = 'Πρέπει να επιλέξετε ένα κλειδί για να δείτε τις σχετικές ενέργειες!';
$string['new_table_from_mysql'] = 'Νέος πίνακας από MySQL';
$string['newfield'] = 'Νέο πεδίο';
$string['newindex'] = 'Νέο ευρετήριο';
$string['newkey'] = 'Νέο κλειδί';
$string['newtable'] = 'Νέος πίνακας';
$string['newtablefrommysql'] = 'Νέος πίνακας από MySQL';
$string['nofieldsspecified'] = 'Δεν έχουν καθοριστεί πεδία';
$string['nomasterprimaryuniquefound'] = 'Η στήλη (ή οι στήλες) στην οποία το ξένο κλειδί (foreign key) σας παραπέμπει πρέπει να περιλαμβάνεται σε ένα πρωτεύον ή μοναδικό κλειδί (primary or unique KEY) στον αναφερόμενο πίνακα. Σημειώστε ότι το να βρίσκεται η στήλη σε UNIQUE INDEX (μοναδικό ευρετήριο) δεν είναι αρκετό.';
$string['nomissingindexesfound'] = 'Δεν βρέθηκε να λείπουν δείκτες. Η βάση δεδομένων σας δεν χρειάζεται περαιτέρω ενέργειες.';
$string['noreffieldsspecified'] = 'Δεν έχουν καθοριστεί πεδία αναφοράς';
$string['noreftablespecified'] = 'Ο συγκεκριμένος πίνακας αναφοράς δεν βρέθηκε';
$string['noviolatedforeignkeysfound'] = 'Δεν βρέθηκαν παραβιασμένα ξένα κλειδιά';
$string['nowrongdefaultsfound'] = 'Δεν έχουν βρεθεί ασυνεπείς από προεπιλογή τιμές· η DB σας δεν χρειάζεται περαιτέρω ενέργειες.';
$string['nowrongintsfound'] = 'Δεν βρέθηκαν λανθασμένοι ακέραιοι αριθμοί. Η βάση δεδομένων σας δεν χρειάζεται περαιτέρω ενέργειες.';
$string['nowrongoraclesemanticsfound'] = 'Δεν βρέθηκαν στήλες Oracle που χρησιμοποιούν σημασιολογία BYTE· η ΒΔ δεν χρειάζεται περαιτέρω ενέργειες.';
$string['numberincorrectdecimals'] = 'Λάθος αριθμός δεκαδικών ψηφίων για πεδίο (πραγματικού) αριθμού';
$string['numberincorrectlength'] = 'Λάθος μήκος για πεδίο (πραγματικού) αριθμού';
$string['numberincorrectwholepart'] = 'Υπερβολικά μεγάλο ακέραιο μέρος αριθμού για πεδίο αριθμού';
$string['pendingchanges'] = 'Σημείωση: Έχετε πραγματοποιήσει αλλαγές σε αυτό το αρχείο. Μπορούν να αποθηκευτούν ανά πάσα στιγμή.';
$string['pendingchangescannotbesaved'] = 'Υπάρχουν αλλαγές σε αυτό το αρχείο αλλά δεν μπορούν να αποθηκευτούν! Παρακαλούμε, επαληθεύστε ότι τόσο για τον φάκελο όσο και για το αρχείο του «install.xml» υπάρχουν δικαιώματα εγγραφής για τον διακομιστή ιστού.';
$string['pendingchangescannotbesavedreload'] = 'Υπάρχουν αλλαγές σε αυτό το αρχείο αλλά δεν μπορούν να αποθηκευτούν! Παρακαλούμε, επαληθεύστε ότι τόσο για τον φάκελο όσο και για το αρχείο του «install.xml» υπάρχουν δικαιώματα εγγραφής για τον διακομιστή ιστού. Στη συνέχεια επαναλάβετε τη φόρτωση αυτής της σελίδας και θα πρέπει να είστε σε θέση πλέον να αποθηκεύσετε αυτές τις αλλαγές.';
$string['persistentfieldscomplete'] = 'Προστέθηκαν τα ακόλουθα πεδία:';
$string['persistentfieldsconfirm'] = 'Θέλετε να προσθέσετε τα παρακάτω πεδία:';
$string['persistentfieldsexist'] = 'Τα παρακάτω πεδία υπάρχουν ήδη:';
$string['pluginname'] = 'Επεξεργαστής XMLDB';
$string['primarykeyonlyallownotnullfields'] = 'Τα πρωτεύοντα κλειδιά δεν μπορούν να είναι κενά (null)';
$string['privacy:metadata'] = 'Το πρόσθετο επεξεργαστή XMLDB δεν αποθηκεύει κανένα προσωπικό δεδομένο.';
$string['reserved'] = 'Δεσμευμένα';
$string['reservedwords'] = 'Δεσμευμένες λέξεις';
$string['revert'] = 'Αναίρεση';
$string['revert_changes'] = 'Αναίρεση αλλαγών';
$string['save'] = 'Αποθήκευση';
$string['searchresults'] = 'Αποτελέσματα αναζήτησης';
$string['selectaction'] = 'Επιλογή ενέργειας:';
$string['selectdb'] = 'Επιλογή βάσης δεδομένων:';
$string['selectfieldkeyindex'] = 'Επιλογή πεδίου/κλειδιού/ευρετηρίου:';
$string['selectonecommand'] = 'Επιλέξτε μια ενέργεια από τη λίστα για να δείτε τον κώδικα PHP';
$string['selectonefieldkeyindex'] = 'Παρακαλούμε, επιλέξτε ένα πεδίο/κλειδί/ευρετήριο από τη λίστα για να δείτε τον κώδικα PHP';
$string['selecttable'] = 'Επιλογή πίνακα:';
$string['table'] = 'Πίνακας';
$string['tablenameempty'] = 'Το όνομα του πίνακα δεν μπορεί να είναι κενό';
$string['tables'] = 'Πίνακες';
$string['unknownfield'] = 'Αναφορά σε ένα άγνωστο πεδίο';
$string['unknowntable'] = 'Αναφορά σε έναν άγνωστο πίνακα';
$string['unload'] = 'Αποφόρτωση';
$string['up'] = 'Πάνω';
$string['view'] = 'Προβολή';
$string['view_reserved_words'] = 'Δείτε κλειδωμένες λέξεις';
$string['view_structure_php'] = 'Δείτε τη δομή PHP';
$string['view_structure_sql'] = 'Δείτε τη δομή SQL';
$string['view_table_php'] = 'Δείτε πίνακα PHP';
$string['view_table_sql'] = 'Δείτε πίνακα SQL';
$string['viewedited'] = 'Προβολή επεξεργασμένου';
$string['vieworiginal'] = 'Προβολή πρωτοτύπου';
$string['viewphpcode'] = 'Δείτε τον κώδικα PHP';
$string['viewsqlcode'] = 'Δείτε τον κώδικα SQL';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Παραβιασμένα ξένα κλειδιά';
$string['violatedforeignkeysfound'] = 'Βρέθηκαν παραβιασμένα ξένα κλειδιά';
$string['violations'] = 'Παραβιάσεις';
$string['wrong'] = 'Λάθος';
$string['wrongdefaults'] = 'Βρέθηκαν λανθασμένες από προεπιλογή τιμές';
$string['wrongints'] = 'Βρέθηκαν εσφαλμένες ακέραιες τιμές';
$string['wronglengthforenum'] = 'Λάθος μήκος για πεδίο απαρίθμησης';
$string['wrongnumberofreffields'] = 'Λάθος αριθμός πεδίων αναφοράς';
$string['wrongoraclesemantics'] = 'Βρέθηκε λανθασμένη σημασιολογία Oracle BYTE';
$string['wrongreservedwords'] = 'Οι δεσμευμένες λέξεις αυτή τη στιγμή<br />
(σημειώστε ότι τα ονόματα των πινάκων δεν είναι σημαντικά αν χρησιμοποιείτε το $CFG->prefix)';
$string['yesmissingindexesfound'] = '<p>Έχει εντοπιστεί ότι λείπουν κάποια ευρετήρια από τη βάση δεδομένων σας. Εδώ είναι τα στοιχεία τους και οι απαραίτητες δηλώσεις SQL που πρέπει να εκτελεστούν με την διεπαφή SQL που προτιμάτε για να τα δημιουργήσετε όλα. Θυμηθείτε να δημιουργήσετε αντίγραφα ασφαλείας των δεδομένων σας πρώτα!</p>
<p>Μετά από αυτό, συνιστάται ιδιαίτερα, να εκτελέσετε ξανά αυτό το βοηθητικό πρόγραμμα για να βεβαιωθείτε ότι δεν λείπουν άλλα ευρετήρια.</p>';
$string['yeswrongdefaultsfound'] = '<p>Έχουν βρεθεί ορισμένες ασυνεπείς προεπιλογές στη βάση δεδομένων σας. Εδώ είναι οι λεπτομέρειες και οι απαραίτητες δηλώσεις SQL που πρέπει να εκτελεστούν με την διεπαφή SQL που προτιμάτε για να τις διορθώσετε όλες. Θυμηθείτε να δημιουργήσετε αντίγραφα ασφαλείας των δεδομένων σας πρώτα!</p>
<p>Μετά από αυτό, συνιστάται ιδιαίτερα, να εκτελέσετε ξανά αυτό το βοηθητικό πρόγραμμα για να βεβαιωθείτε ότι δεν υπάρχουν πλέον ασυνεπείς προεπιλογές.</p>';
$string['yeswrongintsfound'] = '<p>Έχουν εντοπιστεί μερικοί λανθασμένοι ακέραιοι στη ΒΔ σας. Ακολουθούν οι λεπτομέρειες και οι απαραίτητες δηλώσεις SQL που πρέπει να εκτελεστούν με την διεπαφή SQL που προτιμάτε για να τους διορθώσετε όλους. Θυμηθείτε να δημιουργήσετε αντίγραφα ασφαλείας των δεδομένων σας πρώτα!</p>
<p>Αφού τους διορθώσετε, συνιστάται ιδιαίτερα, να εκτελέσετε ξανά αυτό το βοηθητικό πρόγραμμα για να βεβαιωθείτε ότι δεν υπάρχουν πλέον λανθασμένοι ακέραιοι.</p>';
$string['yeswrongoraclesemanticsfound'] = '<p>Ορισμένες στήλες Oracle που χρησιμοποιούν σημασιολογία BYTE έχουν βρεθεί στην βάση δεδομένων σας. Ακολουθούν οι λεπτομέρειες και οι απαραίτητες δηλώσεις SQL που πρέπει να εκτελεστούν με την διεπαφή SQL που προτιμάτε για να τις διορθώσετε όλες. Θυμηθείτε να δημιουργήσετε αντίγραφα ασφαλείας των δεδομένων σας πρώτα!</p>
<p>Μετά από αυτό, συνιστάται ιδιαίτερα, να εκτελέσετε ξανά αυτό το βοηθητικό πρόγραμμα για να βεβαιωθείτε ότι δεν υπάρχουν πλέον άλλες λανθασμένες σημασιολογίες!</p>';
