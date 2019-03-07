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
 * Strings for component 'role', language 'el', branch 'MOODLE_32_STABLE'
 *
 * @package   role
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'Προσθήκη νέου ρόλου';
$string['addrole'] = 'Προσθήκη νέου ρόλου';
$string['advancedoverride'] = 'Παράκαμψη ανώτερου ρόλου';
$string['allow'] = 'Άδεια';
$string['allowassign'] = 'Να επιτρέπεται ανάθεση ρόλων';
$string['allowed'] = 'Επιτρέπεται';
$string['allowoverride'] = 'Να επιτρέπεται παράκαμψη ρόλων';
$string['allowroletoassign'] = 'Να επιτρέπεται στους χρήστες με ρόλο {$a->fromrole} να αναθέτουν το ρόλο {$a->targetrole}';
$string['allowroletooverride'] = 'Να επιτρέπεται στους χρήστες με ρόλο {$a->fromrole} να παρακάμπτουν το ρόλο {$a->targetrole}';
$string['allowroletoswitch'] = 'Να επιτρέπεται στους χρήστες με ρόλο {$a->fromrole} να αλλάζουν ρόλο σε {$a->targetrole}';
$string['allowswitch'] = 'Να επιτρέπονται εναλλαγές ρόλων';
$string['allsiteusers'] = 'Όλοι οι χρήστες';
$string['archetype'] = 'Αρχέτυπο ρόλου';
$string['archetypecoursecreator'] = 'ΑΡΧΕΤΥΠΟ: Δημιουργός μαθημάτων';
$string['archetypeeditingteacher'] = 'ΑΡΧΕΤΥΠΟ: Διδάσκων (με δικαίωμα επεξεργασίας)';
$string['archetypefrontpage'] = 'ΑΡΧΕΤΥΠΟ: Πιστοποιημένος χρήστης στην «Αρχική ιστοτόπου»';
$string['archetypeguest'] = 'ΑΡΧΕΤΥΠΟ: Επισκέπτης';
$string['archetype_help'] = 'Ο ρόλος αρχέτυπο καθορίζει τα δικαιώματα όταν ένας ρόλος επαναφέρεται στις προεπιλεγμένες ρυθμίσεις. Καθορίζει επίσης οποιαδήποτε νέα διακιώματα για το ρόλο, όταν αναβαθμίζεται ο ιστότοπος.';
$string['archetypemanager'] = 'ΑΡΧΕΤΥΠΟ: Διαχειριστής';
$string['archetypestudent'] = 'ΑΡΧΕΤΥΠΟ: Μαθητής';
$string['archetypeteacher'] = 'ΑΡΧΕΤΥΠΟ: Περιορισμένος διδάσκων (χωρίς δικαίωμα επεξεργασίας)';
$string['archetypeuser'] = 'ΑΡΧΕΤΥΠΟ: Πιστοποιημένος χρήστης';
$string['assignanotherrole'] = 'Ανάθεση άλλου ρόλου';
$string['assignedroles'] = 'Ρόλοι που έχουν ανατεθεί';
$string['assignerror'] = 'Σφάλμα κατά την ανάθεση του ρόλου {$a->role} στο χρήστη {$a->user}.';
$string['assignglobalroles'] = 'Ανάθεση γενικών ρόλων';
$string['assignmentcontext'] = 'Πλαίσιο απόδοσης';
$string['assignmentoptions'] = 'Επιλογές απόδοσης';
$string['assignrole'] = 'Ανάθεση ρόλου';
$string['assignrolenameincontext'] = 'Ανάθεση του ρόλου {$a->role} στο πλαίσιο {$a->context}';
$string['assignroles'] = 'Ανάθεση ρόλων';
$string['assignroles_help'] = 'Αναθέτοντας ένα ρόλο σε ένα χρήστη σε ένα πλαίσιο, του παρέχετε τα δικαιώματα που περιλαμβάνονται σε αυτόν τον ρόλο, για το τρέχον πλαίσιο και όλα τα χαμηλότερα (ειδικότερα) πλαίσια. Για παράδειγμα, αν σε ένα χρήστη ανατεθεί ο ρόλος του μαθητή σε ένα μάθημα, θα έχει και το ρόλο του μαθητή σε όλες τις δραστηριότητες και μπλοκ μέσα στο μάθημα.';
$string['assignrolesin'] = 'Ανάθεση ρόλων στο {$a}';
$string['assignrolesrelativetothisuser'] = 'Ανάθεση ρόλων σχετιζόμενων με αυτό το χρήστη';
$string['backtoallroles'] = 'Επιστροφή στη λίστα ρόλων';
$string['backup:anonymise'] = 'Ανώνυμα δεδομένα χρήστη στα αντίγραφα ασφαλείας';
$string['backup:backupactivity'] = 'Δημιουργία αντιγράφου ασφαλείας στις δραστηριότητες';
$string['backup:backupcourse'] = 'Αντίγραφα ασφαλείας μαθημάτων';
$string['backup:backupsection'] = 'Αντίγραφα ασφαλείας τμημάτων';
$string['backup:backuptargethub'] = 'Αντίγραφα ασφαλείας για την κοινότητα (hub)';
$string['backup:backuptargetimport'] = 'Αντίγραφα ασφαλείας για εισαγωγή';
$string['backup:configure'] = 'Διαμόρφωση επιλογών αντιγράφων ασφαλείας';
$string['backup:downloadfile'] = 'Λήψη αρχείων από περιοχές αντιγράφων ασφαλείας';
$string['backup:userinfo'] = 'Αντίγραφα ασφαλείας δεδομένων χρήστη';
$string['badges:awardbadge'] = 'Απονομή διακριτικού σε ένα χρήστη';
$string['badges:configurecriteria'] = 'Ορίστε/επεξεργαστείτε κριτήρια απονομής ενός διακριτικού';
$string['badges:configuredetails'] = 'Ορίστε/επεξεργαστείτε λεπτομέρειες ενός διακριτικού';
$string['badges:configuremessages'] = 'Ρυθμίστε τα μηνύματα του διακριτικού';
$string['badges:createbadge'] = 'Δημιουργία/αντιγραφή διακριτικών';
$string['badges:deletebadge'] = 'Διαγραφή διακριτικών';
$string['badges:earnbadge'] = 'Αποκτήστε το διακριτικό';
$string['badges:manageglobalsettings'] = 'Διαχειριστείτε τις γενικές ρυθμίσεις του διακριτικού';
$string['badges:manageownbadges'] = 'Εμφάνιση και διαχείριση των διακριτικών που έχετε αποκτήσει';
$string['badges:revokebadge'] = 'Ανάκληση διακριτικού από ένα χρήστη';
$string['badges:viewawarded'] = 'Εμφάνιση χρηστών που απέκτησαν ένα συγκεκριμένο διακριτικό χωρίς να μπορούν να απονείμουν διακριτικά.';
$string['badges:viewbadges'] = 'Εμφάνιση διαθέσιμων διακριτικών χωρίς να τα αποκτήσετε';
$string['badges:viewotherbadges'] = 'Δείτε τα δημόσια διακριτικά σε προφίλ άλλων χρηστών';
$string['block:edit'] = 'Επεξεργασία ρυθμίσεων μπλοκ';
$string['block:view'] = 'Προβολή μπλοκ';
$string['blog:create'] = 'Δημιουργία αναρτήσεων σε ιστολόγιο';
$string['blog:manageentries'] = 'Επεξεργασία καταχωρήσεων';
$string['blog:manageexternal'] = 'Επεξεργασία και διαχείριση εξωτερικών ιστολογίων';
$string['blog:search'] = 'Αναζήτηση αναρτήσεων ιστολογίου';
$string['blog:view'] = 'Προβολή αναρτήσεων ιστολογίου';
$string['blog:viewdrafts'] = 'Προβολή προσχεδίων αναρτήσεων ιστολογίου';
$string['calendar:manageentries'] = 'Διαχείριση των καταχωρήσεων οποιουδήποτε ημερολογίου';
$string['calendar:managegroupentries'] = 'Διαχείριση ομαδικών γεγονότων';
$string['calendar:manageownentries'] = 'Διαχείριση προσωπικών γεγονότων';
$string['capabilities'] = 'Δυνατότητες';
$string['capability'] = 'Δυνατότητα';
$string['category:create'] = 'Δημιουργία κατηγοριών';
$string['category:delete'] = 'Διαγραφή κατηγοριών';
$string['category:manage'] = 'Διαχείριση κατηγοριών';
$string['category:update'] = 'Τροποποίηση κατηγοριών';
$string['category:viewhiddencategories'] = 'Προβολή κρυφών κατηγοριών';
$string['category:visibility'] = 'Προβολή κρυφών κατηγοριών';
$string['checkglobalpermissions'] = 'Έλεγχος δυνατοτήτων συστήματος';
$string['checkpermissions'] = 'Έλεγχος δυνατοτήτων';
$string['checkpermissionsin'] = 'Έλεγχος δυνατοτήτων στο {$a}';
$string['checksystempermissionsfor'] = 'Έλεγχος δυνατοτήτων συστήματος για το χρήστη {$a->fullname}';
$string['checkuserspermissionshere'] = 'Έλεγχος δυνατοτήτων για το χρήστη {$a->fullname} που έχει στο επίπεδο πλαισίου {$a->contextlevel}';
$string['chooseroletoassign'] = 'Παρακαλούμε επιλέξτε ρόλο προς ανάθεση';
$string['cohort:assign'] = 'Προσθήκη και διαγραφή μελών ομάδας χρηστών';
$string['cohort:manage'] = 'Δημιουργία, διαγραφή και μετακίνηση ομάδων χρηστών';
$string['cohort:view'] = 'Εμφάνιση όλων των ομάδων χρηστών της πλατφόρμας';
$string['comment:delete'] = 'Διαγραφή σχολίων';
$string['comment:post'] = 'Αποστολή σχολίων';
$string['comment:view'] = 'Προβολή σχολίων';
$string['community:add'] = 'Χρήση του μπλοκ της κοινότητας για αναζήτηση κόμβων και εύρεση μαθημάτων';
$string['community:download'] = 'Λήψη μαθήματος από το μπλοκ κοινότητας';
$string['competency:competencygrade'] = 'Ορισμός εκτίμησης προσόντος';
$string['competency:competencymanage'] = 'Διαχείριση πλασίων προσόντων';
$string['competency:competencyview'] = 'Εμφάνιση πλαισίων προσόντων';
$string['competency:coursecompetencyconfigure'] = 'Ρυθμίσεις προσόντων μαθήματος';
$string['competency:coursecompetencygradable'] = 'Να λαμβάνονται βαθμοί προσόντος';
$string['competency:coursecompetencymanage'] = 'Διαχείριση προσόντων μαθήματος';
$string['competency:coursecompetencyview'] = 'Εμφάνιση προσόντων μαθήματος';
$string['competency:evidencedelete'] = 'Διαγραφή αποδεικτικού';
$string['competency:plancomment'] = 'Σχόλιο για ένα σχέδιο μάθησης';
$string['competency:plancommentown'] = 'Σχόλιο για δικό σας σχέδιο μάθησης';
$string['competency:planmanage'] = 'Διαχείριση σχεδίων μάθησης';
$string['competency:planmanagedraft'] = 'Διαχείριση προσχεδίων σχεδίων μάθησης';
$string['competency:planmanageown'] = 'Διαχείριση δικών σας σχεδίων μάθησης';
$string['competency:planmanageowndraft'] = 'Διαχείριση δικών σας προσχεδίων για σχέδια μάθησης';
$string['competency:planrequestreview'] = 'Αίτημα για εξέταση ενός σχεδίου μάθησης';
$string['competency:planrequestreviewown'] = 'Αίτημα για εξέταση του δικού σας σχεδίου μάθησης';
$string['competency:planreview'] = 'Εξέταση ενός σχεδίου μάθησης';
$string['competency:planview'] = 'Εμφάνιση όλων των σχεδίων μάθησης';
$string['competency:planviewdraft'] = 'Προβολή προσχεδίων για σχέδια μάθησης';
$string['competency:planviewown'] = 'Εμφάνιση των δικών σας σχεδίων μάθησης';
$string['competency:planviewowndraft'] = 'Προβολή των δικών σας προσχεδίων για σχέδια μάθησης';
$string['competency:templatemanage'] = 'Διαχείριση προτύπων σχεδίων μάθησης';
$string['competency:templateview'] = 'Εμφάνιση προτύπων σχεδίων μάθησης';
$string['competency:usercompetencycomment'] = 'Σχολιασμός προσόντος χρήστη';
$string['competency:usercompetencycommentown'] = '(Αυτο)σχολιασμός για δικό σας προσόν χρήστη';
$string['competency:usercompetencyrequestreview'] = 'Αίτημα επανεξέτασης προσόντος χρήστη';
$string['competency:usercompetencyrequestreviewown'] = 'Αίτημα επανεξέτασης προσόντος τρέχοντος χρήστη';
$string['competency:usercompetencyreview'] = 'Επανεξέταση προσόντος χρήστη';
$string['competency:usercompetencyview'] = 'Εμφάνιση προσόντος χρήστη';
$string['competency:userevidencemanage'] = 'Διαχείριση αποδεικτικών προηγούμενης μάθησης';
$string['competency:userevidencemanageown'] = 'Διαχείριση δικών σας αποδεικτικών προηγούμενης μάθησης';
$string['competency:userevidenceview'] = 'Προβολή αποδεικτικών προηγούμενης μάθησης ενός χρήστη';
$string['confirmaddadmin'] = 'Θέλετε πραγματικά να προσθέσετε τον χρήστη <strong>«{$a}»</ strong> ως νέο διαχειριστή ιστοτόπου;';
$string['confirmdeladmin'] = 'Θέλετε πραγματικά να αφαιρέσετε τον χρήστη <strong>«{$a}»</ strong> από τη λίστα των διαχειριστών ιστότοπου;';
$string['confirmroleprevent'] = 'Θέλετε πραγματικά να αφαιρέσετε τον ρόλο <strong>«{$a->role}»</ strong> από τη λίστα επιτρεπόμενων ρόλων για τη δυνατότητα «{$a->cap}» στο πλαίσιο «{$a->context}»;';
$string['confirmroleunprohibit'] = 'Θέλετε πραγματικά να αφαιρέσετε τον ρόλο <strong>«{$a->role}»</ strong> από τη λίστα απαγορευμένων ρόλων για τη δυνατότητα «{$a->cap}» στο πλαίσιο «{$a->context}»;';
$string['confirmunassign'] = 'Είστε βέβαιοι ότι θέλετε να αφαιρέσετε αυτόν τον ρόλο από αυτόν τον χρήστη;';
$string['confirmunassignno'] = 'Ακύρωση';
$string['confirmunassigntitle'] = 'Επιβεβαίωση αλλαγής ρόλου';
$string['confirmunassignyes'] = 'Αφαίρεση';
$string['context'] = 'Πλαίσιο';
$string['course:activityvisibility'] = 'Προβολή/απόκρυψη δραστηριοτήτων';
$string['course:bulkmessaging'] = 'Αποστολή ενός μηνύματος σε πολλούς παραλήπτες';
$string['course:changecategory'] = 'Τροποποίηση κατηγορίας μαθήματος';
$string['course:changefullname'] = 'Αλλαγή πλήρους ονόματος μαθήματος';
$string['course:changeidnumber'] = 'Αλλαγή αναγνωριστικού αριθμού μαθήματος';
$string['course:changeshortname'] = 'Τροποποίηση σύντομου ονόματος μαθήματος';
$string['course:changesummary'] = 'Τροποποίηση περίληψης μαθήματος';
$string['course:create'] = 'Δημιουργία μαθημάτων';
$string['course:delete'] = 'Διαγραφή μαθημάτων';
$string['course:enrolconfig'] = 'Διαμόρφωση instances εγγραφής στα μαθήματα';
$string['course:enrolreview'] = 'Εξέταση εγγραφών μαθήματος';
$string['course:ignorefilesizelimits'] = 'Χρησιμοποιήστε αρχεία μεγαλύτερα από οποιονδήποτε περιορισμό μεγέθους αρχείου';
$string['course:isincompletionreports'] = 'Εμφάνιση στις αναφορές ολοκλήρωσης';
$string['course:manageactivities'] = 'Διαχείριση δραστηριοτήτων';
$string['course:managefiles'] = 'Διαχείριση αρχείων';
$string['course:managegrades'] = 'Διαχείριση βαθμών';
$string['course:managegroups'] = 'Διαχείριση ομάδων';
$string['course:managescales'] = 'Διαχείριση κλιμάκων';
$string['course:markcomplete'] = 'Επισήμανση χρηστών για ολοκλήρωση κατά την ολοκλήρωση του μαθήματος';
$string['course:movesections'] = 'Μετακίνηση τμημάτων';
$string['course:publish'] = 'Δημοσίευση ενός μαθήματος στον κόμβο';
$string['course:renameroles'] = 'Μετονομασία ρόλων';
$string['course:request'] = 'Αίτηση για δημιουργία μαθημάτων';
$string['course:reset'] = 'Επαναφορά αρχικών ρυθμίσεων μαθήματος';
$string['course:reviewotherusers'] = 'Αξιολογήστε άλλους χρήστες';
$string['course:sectionvisibility'] = 'Προβολή/απόκρυψη τμημάτων';
$string['course:setcurrentsection'] = 'Ορισμός τρέχοντος τμήματος';
$string['course:tag'] = 'Αλλαγή ετικετών μαθήματος';
$string['course:update'] = 'Επεξεργασία ρυθμίσεων μαθήματος';
$string['course:useremail'] = 'Ενεργοποίηση/απενεργοποίηση διεύθυνσης email';
$string['course:view'] = 'Προβολή μαθημάτων χωρίς συμμετέχοντες';
$string['course:viewcoursegrades'] = 'Προβολή βαθμών';
$string['course:viewhiddenactivities'] = 'Προβολή κρυφών δραστηριοτήτων';
$string['course:viewhiddencourses'] = 'Προβολή κρυφών μαθημάτων';
$string['course:viewhiddensections'] = 'Προβολή κρυφών ενοτήτων';
$string['course:viewhiddenuserfields'] = 'Προβολή κρυφών πεδίων χρηστών';
$string['course:viewparticipants'] = 'Προβολή συμμετεχόντων';
$string['course:viewscales'] = 'Προβολή κλιμάκων';
$string['course:viewsuspendedusers'] = 'Προβολή χρηστών σε αναστολή';
$string['course:visibility'] = 'Προβολή/απόκρυψη μαθημάτων';
$string['createrolebycopying'] = 'Δημιουργία νέου ρόλου βασισμένου στον «{$a}»';
$string['createthisrole'] = 'Δημιουργία αυτού του ρόλου';
$string['currentcontext'] = 'Τρέχον πλαίσιο';
$string['currentrole'] = 'Τρέχων ρόλος';
$string['customroledescription'] = 'Προσαρμοσμένη περιγραφή';
$string['customroledescription_help'] = 'Οι περιγραφές τυπικών ρόλων προσαρμόζονται τοπικά αυτόματα αν η προσαρμοσμένη περιγραφή είναι κενή.';
$string['customrolename'] = 'Προσαρμοσμένο πλήρες όνομα';
$string['customrolename_help'] = 'Τα ονόματα των τυπικών ρόλων εντοπίζονται αυτόματα αν το προσαρμοσμένο όνομα είναι κενό. Πρέπει να δώσετε ένα πλήρες όνομα για όλους τους προσαρμοσμένους ρόλους.';
$string['defaultrole'] = 'Αρχική κατηγορία χρηστών';
$string['defaultx'] = 'Προεπιλογή: «{$a}»';
$string['defineroles'] = 'Διαχείριση ρόλων';
$string['deletecourseoverrides'] = 'Διαγραφή όλων των παρακάμψεων στο μάθημα';
$string['deletelocalroles'] = 'Διαγραφή όλων των τοπικών αναθέσεων ρόλων';
$string['deleterolesure'] = '<p>Είστε σίγουροι ότι θέλετε να διαγράψετε το ρόλο «{$a->name} ({$a->shortname})»;</p><p>Αυτή τη στιγμή ο ρόλος αυτός έχει ανατεθεί σε {$a->count} χρήστες.';
$string['deletexrole'] = 'Διαγραφή του ρόλου «{$a}»';
$string['duplicaterole'] = 'Αντίγραφο ρόλου';
$string['duplicaterolesure'] = '<p>Είστε σίγουροι ότι θέλετε να δημιουργηθεί αντίγραφο του ρόλου «{$a->name} ({$a->shortname})»;</p>';
$string['editingrolex'] = 'Τροποποίηση του ρόλου «{$a}»';
$string['editrole'] = 'Επεξεργασία ρόλου';
$string['editxrole'] = 'Τροποποίηση του ρόλου «{$a}»';
$string['errorbadrolename'] = 'Εσφαλμένο όνομα ρόλου';
$string['errorbadroleshortname'] = 'Εσφαλμένο σύντομο όνομα ρόλου';
$string['errorexistsrolename'] = 'Υπάρχει ήδη ένας ρόλος με το ίδιο όνομα';
$string['errorexistsroleshortname'] = 'Υπάρχει ήδη ένας ρόλος με το ίδιο όνομα';
$string['eventroleallowassignupdated'] = 'Να επιτρέπεται ανάθεση ρόλου';
$string['eventroleallowoverrideupdated'] = 'Να επιτρέπεται παράκαμψη ρόλου';
$string['eventroleallowswitchupdated'] = 'Να επιτρέπεται εναλλαγή ρόλων';
$string['eventroleassigned'] = 'Ο ρόλος έχει ανατεθεί';
$string['eventrolecapabilitiesupdated'] = 'Οι δυνατότητες ρόλων ενημερώθηκαν';
$string['eventroledeleted'] = 'Ο ρόλος έχει διαγραφεί';
$string['eventroleunassigned'] = 'Ο ρόλος αφαιρέθηκε';
$string['existingadmins'] = 'Υπάρχοντες διαχειριστές ιστοτόπου';
$string['existingusers'] = '{$a} υπάρχοντες χρήστες';
$string['explanation'] = 'Επεξήγηση';
$string['export'] = 'Εξαγωγή';
$string['extusers'] = 'Υπάρχοντες χρήστες';
$string['extusersmatching'] = 'Υπάρχοντες χρήστες που ταιριάζουν στο «{$a}»';
$string['filter:manage'] = 'Διαχείριση τοπικών ρυθμίσεων φίλτρου';
$string['frontpageuser'] = 'Πιστοποιημένος χρήστης στην «Αρχική ιστοτόπου»';
$string['frontpageuserdescription'] = 'Όλοι οι συνδεδεμένοι χρήστες στο μάθημα στην «Αρχική ιστοτόπου».';
$string['globalrole'] = 'Ρόλος συστήματος';
$string['globalroleswarning'] = 'ΠΡΟΣΟΧΗ! Οι ρόλοι που αποδίδετε στους χρήστες από αυτήν την σελίδα, εφαρμόζονται σε ολόκληρο το σύστημα, συμπεριλαμβανόμενης της αρχικής σελίδας και όλων των μαθημάτων.';
$string['gotoassignroles'] = 'Ανάθεση ρόλων σ\' αυτό το {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'Ανάθεση ρόλων συστήματος';
$string['grade:edit'] = 'Τροποποίηση βαθμών';
$string['grade:export'] = 'Εξαγωγή βαθμών';
$string['grade:hide'] = 'Απόκρυψη/εμφάνιση βαθμών';
$string['grade:import'] = 'Εισαγωγή βαθμών';
$string['grade:lock'] = 'Κλείδωμα βαθμών';
$string['grade:manage'] = 'Διαχερίριση στοιχείων βαθμού';
$string['grade:managegradingforms'] = 'Διαχείριση προχωρημένων μεθόδων βαθμολόγησης';
$string['grade:manageletters'] = 'Διαχείριση βαθμών (γραμμάτων)';
$string['grade:manageoutcomes'] = 'Διαχείριση μαθησιακών αποτελεσμάτων βαθμού';
$string['grade:managesharedforms'] = 'Διαχείριση προτύπων φόρμας προχωρημένης βαθμολόγησης';
$string['grade:override'] = 'Παράκαμψη βαθμών';
$string['grade:sharegradingforms'] = 'Διαμοιρασμός φόρμας προχωρημένης βαθμολόγησης ως πρότυπο';
$string['grade:unlock'] = 'Ξεκλείδωμα βαθμών ή στοιχείων';
$string['grade:view'] = 'Προβολή των βαθμών σας';
$string['grade:viewall'] = 'Προβολή των βαθμών άλλων χρηστών';
$string['grade:viewhidden'] = 'Προβολή των κρυφών βαθμών μου';
$string['highlightedcellsshowdefault'] = 'Τα φωτισμένα δικαιώματα που επισημαίνονται στον παρακάτω πίνακα είναι οι προεπιλογές για το αρχικό πρότυπο ρόλων που έχετε επιλέξει παραπάνω.κελιά στον παρακάτω πίνακα δείχνουν την από προεπιλογή δυνατότητα για το ρόλο αυτό, βασισμένα στον \'Ιστορικό τύπο ρόλου\'.';
$string['highlightedcellsshowinherit'] = 'Τα φωτισμένα κελιά στον παρακάτω πίνακα δείχνουν το δικαίωμα (αν υπάρχει) που πρόκειται να κληρονομηθεί. Εκτός από τις δυνατότητες που πραγματικά  θέλετε να αλλάξετε, αφήστε όλες τις άλλες ρυθμισμένες σε Κληρονομεί.';
$string['inactiveformorethan'] = 'ανενεργό για παραπάνω από {$a->timeperiod}';
$string['ingroup'] = 'στην ομάδα «{$a->group}»';
$string['inherit'] = 'Κληρονομικότητα';
$string['invalidpresetfile'] = 'Μη έγκυρο αρχείο ορισμού ρόλου';
$string['legacy:admin'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΥ ΤΥΠΟΥ: Διαχειριστής';
$string['legacy:coursecreator'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΥ ΤΥΠΟΥ: Δημιουργός μαθημάτων';
$string['legacy:editingteacher'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΥ ΤΥΠΟΥ: Διδάσκων (με δικαίωμα επεξεργασίας)';
$string['legacy:guest'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΥ ΤΥΠΟΥ: Επισκέπτης';
$string['legacy:student'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΥ ΤΥΠΟΥ: Μαθητής';
$string['legacy:teacher'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΥ ΤΥΠΟΥ: Περιορισμένος διδάσκων (χωρίς δικαίωμα επεξεργασίας)';
$string['legacytype'] = 'Τύπος ρόλου παλαιού τύπου';
$string['legacy:user'] = 'ΡΟΛΟΣ ΠΑΛΑΙΟΥ ΤΥΠΟΥ: Αυθεντικοποιημένος χρήστης';
$string['listallroles'] = 'Εμφάνιση όλων των ρόλων';
$string['localroles'] = 'Τοπικά ανατεθειμένοι ρόλοι';
$string['mainadmin'] = 'Κύριος διαχειριστής';
$string['mainadminset'] = 'Ορσμός κύριου διαχειριστή';
$string['manageadmins'] = 'Επεξεργασία διαχειριστών ιστοτόπου';
$string['manager'] = 'Διαχειριστής';
$string['managerdescription'] = 'Οι διαχειριστές μπορούν να έχουν πρόσβαση στο μάθημα και να το τροποποιούν, συνήθως όμως δεν συμμετέχουν στα μαθήματα.';
$string['manageroles'] = 'Διαχείριση ρόλων';
$string['maybeassignedin'] = 'Τύποι πλαισίου στους οποίους μπορεί να ανατεθεί ο ρόλος αυτός';
$string['morethan'] = 'Περισσότερο από {$a}';
$string['multipleroles'] = 'Πολλαπλοί ρόλου';
$string['my:configsyspages'] = 'Διαμόρφωση προτύπων συστήματος για τις σελίδες Ταμπλό';
$string['my:manageblocks'] = 'Διαχείριση των μπλοκ σελίδας Ταμπλό';
$string['neededroles'] = 'Αδειοδοτημένοι ρόλοι';
$string['nocapabilitiesincontext'] = 'Δεν υπάρχουν διαθέσιμες δυνατότες σε αυτό το πλαίσιο';
$string['noneinthisx'] = 'Κανένας σ\' αυτό το {$a}';
$string['noneinthisxmatching'] = 'Δεν υπάρχουν χρήστες παρόμοιοι με \'{$a->search}\' σ\' αυτό το {$a->contexttype}';
$string['norole'] = 'Κανένας ρόλος';
$string['noroleassignments'] = 'Ο χρήστης αυτός δεν έχει αναθέσεις ρόλων πουθενά στο Moodle.';
$string['noroles'] = 'Χωρίς ρόλους';
$string['notabletoassignroleshere'] = 'Η ανάθεση ρόλων σε αυτό το πλαίσιο δεν έχει ενεργοποιηθεί από κάποιον διαχειριστή.';
$string['notabletooverrideroleshere'] = 'Δεν μπορείτε να παρακάμψετε τις δυνατότητες ρόλων εδώ';
$string['notes:manage'] = 'Διαχείριση σημειώσεων';
$string['notes:view'] = 'Προβολή σημειώσεων';
$string['notset'] = 'Μη καταχωρημένο';
$string['overrideanotherrole'] = 'Παράκαμψη άλλου ρόλου';
$string['overridecontext'] = 'Παράκαμψη πλαισίου';
$string['overridepermissions'] = 'Παράκαμψη δυνατοτήτων';
$string['overridepermissionsforrole'] = 'Παράκαμψη δυνατοτήτων για το ρόλο \'{$a->role}\' στο {$a->context}';
$string['overridepermissions_help'] = 'Οι παρακάμψεις δικαιωμάτων επιτρέπουν την αποδοχή ή την αποτροπή επιλεγμένων δυνατοτήτων σε ένα συγκεκριμένο πλαίσιο.';
$string['overridepermissionsin'] = 'Παράκαμψη δυνατοτήτων σε {$a}';
$string['overrideroles'] = 'Παράκαμψη ρόλων';
$string['overriderolesin'] = 'Παράκαμψη ρόλων σε {$a}';
$string['overrides'] = 'Παρακάμψεις';
$string['overridesbycontext'] = 'Παρακάμψεις (ανά πλαίσιο)';
$string['permission'] = 'Δυνατότητα';
$string['permission_help'] = 'Δικαιώματα είναι ρυθμίσεις δυνατοτήτων. Υπάρχουν 4 επιλογές:

* Μη ορισμένο
* Επιτρέπεται - Το δικαίωμα παρέχεται για την δυνατότητα
* Αποτρέπεται - Το δικαίωμα αφαιρείται ακόμη κι αν επιτρεπόταν σε ανώτερο πλαίσιο
* Απαγορεύεται - Πλήρης άρνηση του δικαιώματος και δεν μπορεί να παρακαμφθεί σε οποιοδήποτε χαμηλότερο (ειδικότερο) πλαίσιο.';
$string['permissions'] = 'Δικαιώματα χρήσης';
$string['permissionsforuser'] = 'Δυνατότητες για το χρήστη {$a}';
$string['permissionsincontext'] = 'Δικαιώματα στο πλαίσιο «{$a}»';
$string['portfolio:export'] = 'Εξαγωγή σε χαρτοφυλάκια';
$string['potentialusers'] = '{$a} πιθανοί χρήστες';
$string['potusers'] = 'Πιθανοί χρήστες';
$string['potusersmatching'] = 'Πιθανοί χρήστες παρόμοιοι με \'{$a}\'';
$string['prevent'] = 'Παρεμπόδιση';
$string['prohibit'] = 'Απαγόρευση';
$string['prohibitedroles'] = 'Απαγορευμένοι';
$string['question:add'] = 'Προσθήκη νέων ερωτήσεων';
$string['question:config'] = 'Ρύθμιση τύπων ερωτήσεων';
$string['question:editall'] = 'Τροποποίηση όλων των ερωτήσεων';
$string['question:editmine'] = 'Τροποποίηση των δικών σας ερωτήσεων';
$string['question:flag'] = 'Επισήμανση ερωτήσεων κατά την προσπάθεια';
$string['question:managecategory'] = 'Επεξεργασία κατηγοριών ερωτήσεων';
$string['question:moveall'] = 'Μετακίνηση όλων των ερωτήσεων';
$string['question:movemine'] = 'Μετακίνηση των δικών σας ερωτήσεων';
$string['question:useall'] = 'Χρήση όλων των ερωτήσεων';
$string['question:usemine'] = 'Χρήση των δικών σας ερωτήσεων';
$string['question:viewall'] = 'Προβολή όλων των ερωτήσεων';
$string['question:viewmine'] = 'Προβολή των δικών σας ερωτήσεων';
$string['rating:rate'] = 'Προσθήκη βαθμολογιών στα αντικείμενα';
$string['rating:view'] = 'Εμφάνιση της συνολικής βαθμολιγίας που έλαβες';
$string['rating:viewall'] = 'Εμφάνιση όλων των πρώτων αξιολογήσεων που δόθηκαν ατομικά';
$string['rating:viewany'] = 'Εμφάνιση όλων των συνολικών αξιολογήσεων που έλαβε κάποιος';
$string['resetrole'] = 'Επαναφορά  στην αρχική κατάσταση';
$string['resettingrole'] = 'Επαναφορά στην αρχική κατάστασή του, του ρόλου «{$a}»';
$string['restore:configure'] = 'Διαμόρφωση επιλογών επαναφοράς';
$string['restore:createuser'] = 'Δημιουργία χρηστών κατά την επαναφορά';
$string['restore:restoreactivity'] = 'Επαναφορά δραστηριοτήτων';
$string['restore:restorecourse'] = 'Επαναφορά μαθημάτων';
$string['restore:restoresection'] = 'Επαναφορά τμημάτων';
$string['restore:restoretargethub'] = 'Επαναφορά από αρχεία που προορίζονται ως κόμβοι';
$string['restore:restoretargetimport'] = 'Επαναφορά από αρχεία που προορίζονται για εισαγωγές';
$string['restore:rolldates'] = 'Επιτρέπεται να μετακυληθούν οι ημερομηνίες που έχουν χρησιμοποιηθεί στις δραστηριότητες κατά την επαναφορά';
$string['restore:uploadfile'] = 'Ανέβασμα αρχείων στις περιοχές των αντιγράφων ασφαλείας';
$string['restore:userinfo'] = 'Επαναφορά δεδομένων χρήστη';
$string['restore:viewautomatedfilearea'] = 'Επαναφορά  μαθημάτων από αυτόματα αντίγραφα ασφαλείας';
$string['risks'] = 'Κίνδυνοι';
$string['roleallowheader'] = 'Επιτρέπονται στο ρόλο:';
$string['roleallowinfo'] = 'Επιλέξτε ένα ρόλο που θα προστεθεί στη λίστα επιτρεπόμενων ρόλων στο πλαίσιο «{$a->context}», δυνατότητα «{$a->cap}»:';
$string['role:assign'] = 'Ανάθεση ρόλων στους χρήστες';
$string['roleassignments'] = 'Ανάθεση ρόλων';
$string['roledefinitions'] = 'Ορισμοί ρόλων';
$string['rolefullname'] = 'Όνομα';
$string['roleincontext'] = 'με ρόλο: «{$a->role}» στο πλαίσιο: «{$a->context}»';
$string['role:manage'] = 'Δημιουργία και διαχείριση ρόλων';
$string['role:override'] = 'Παράκαμψη δικαιωμάτων από άλλους';
$string['roleprohibitheader'] = 'Απαγόρευση ρόλου';
$string['roleprohibitinfo'] = 'Επιλέξτε ένα ρόλο που θα προστεθεί στη λίστα απαγορευμένων ρόλων στο πλαίσιο «{$a->context}», δυνατότητα «{$a->cap}»:';
$string['rolerepreset'] = 'Χρήση προτύπου ρόλου';
$string['roleresetdefaults'] = 'Προεπιλογές';
$string['roleresetrole'] = 'Χρήση ρόλου ή αρχετύπου';
$string['role:review'] = 'Εξέταση δικαιωμάτων για άλλους χρήστες';
$string['rolerisks'] = 'Κίνδυνοι ρόλου';
$string['roles'] = 'Ρόλοι';
$string['role:safeoverride'] = 'Παράκαμψη δικαιωμάτων από άλλους με ασφάλεια';
$string['roleselect'] = 'Επιλογή ρόλου';
$string['rolesforuser'] = 'Ρόλοι για τον χρήστη «{$a}»';
$string['roles_help'] = 'Ρόλος είναι μια συλλογή από δικαιώματα ορισμένα για όλο τον ιστότοπο που μπορούν να ανατεθούν σε συγκεκριμένους χρήστες σε συγκεκριμένα πλαίσια.';
$string['roleshortname'] = 'Σύντομο όνομα';
$string['roleshortname_help'] = 'Το σύντομο όνομα ρόλου είναι ένα αναγνωριστικό ρόλου χαμηλού επιπέδου στο οποίο επιτρέπονται μόνο αλφαριθμητικοί χαρακτήρες ASCII. Μην αλλάζετε τα σύντομα ονόματα τυπικών ρόλων.';
$string['role:switchroles'] = 'Αλλαγή σε άλλους ρόλους';
$string['roletoassign'] = 'Ρόλος προς καταχώρηση';
$string['roletooverride'] = 'Ρόλος προς παράκαμψη';
$string['safeoverridenotice'] = 'Σημείωση: Οι δυνατότητες με υψηλότερους πιθανούς κινδύνους είναι κλειδωμένες γιατί μπορείτε να παρακάμψετε μόνο ασφαλείς δυνατότητες.';
$string['search:query'] = 'Εκτελέστε αναζητήσεις σε επίπεδο ιστοτόπου';
$string['selectanotheruser'] = 'Επιλέξτε έναν άλλο χρήστη';
$string['selectauser'] = 'Επιλέξτε ένα χρήστη';
$string['selectrole'] = 'Επιλογή ρόλου';
$string['showallroles'] = 'Προβολή όλων των ρόλων';
$string['showthisuserspermissions'] = 'Προβολή των δικαιωμάτων του χρήστη';
$string['site:accessallgroups'] = 'Πρόσβαση σε όλες τις ομάδες';
$string['siteadministrators'] = 'Διαχειριστές ιστοτόπου';
$string['site:approvecourse'] = 'Έγκριση δημιουργίας μαθήματος';
$string['site:backup'] = 'Αντίγραφα ασφαλείας μαθημάτων';
$string['site:config'] = 'Αλλαγή των ρυθμίσεων του Moodle';
$string['site:configview'] = 'Προβολή του δέντρου διαχείρισης ιστοτόπου (αλλά όχι όλων των σελίδων του)';
$string['site:deleteanymessage'] = 'Διαγράψτε οποιαδήποτε μηνύματα στον ιστότοπο';
$string['site:deleteownmessage'] = 'Διαγραφή μηνυμάτων που αποστέλλονται από και προς τον χρήστη';
$string['site:doanything'] = 'Επιτρέπεται να κάνει τα πάντα';
$string['site:doclinks'] = 'Εμφάνιση συνδέσμων για έγγραφα εκτός σελίδων';
$string['site:forcelanguage'] = 'Να παρακαμφθεί η γλώσσα του μαθήματος';
$string['site:import'] = 'Εισαγωγή άλλων μαθημάτων σε ένα μάθημα';
$string['site:maintenanceaccess'] = 'Πρόσβαση στον ιστότοπο κατά την διάρκεια της λειτουργίας συντήρησης';
$string['site:manageallmessaging'] = 'Προσθήκη, αφαίρεση, μπλοκάρισμα και ξεμπλοκάρισμα επαφών για οποιονδήποτε χρήστη';
$string['site:manageblocks'] = 'Διαχείριση των μπλοκ σε μια σελίδα';
$string['site:mnetloginfromremote'] = 'Σύνδεση από απομακρυσμένη εφαρμογή μέσω MNet';
$string['site:mnetlogintoremote'] = 'Σύνδεση σε απομακρυσμένη εγκατάσταση εφαρμογής (Moodle) μέσω MNet';
$string['site:readallmessages'] = 'Ανάγνωση όλων των μηνυμάτων';
$string['site:restore'] = 'Επαναφορά μαθημάτων';
$string['site:sendmessage'] = 'Αποστολή μηνυμάτων σε χρήστες';
$string['site:trustcontent'] = 'Εμπιστοσύνη σε υποβαλλόμενο περιεχόμενο';
$string['site:uploadusers'] = 'Δημιουργία χρηστών από αρχείο';
$string['site:viewfullnames'] = 'Προβολή του ονοματεπώνυμου των χρηστών';
$string['site:viewparticipants'] = 'Προβολή συμμετεχόντων';
$string['site:viewreports'] = 'Προβολή αναφορών';
$string['site:viewuseridentity'] = 'Δείτε το πλήρες αναγνωριστικό του χρήστη στις λίστες';
$string['tag:create'] = 'Δημιουργία νέων ετικετών';
$string['tag:edit'] = 'Τροποποίηση υπάρχουσων ετικετών';
$string['tag:editblocks'] = 'Τροποποίηση μπλοκ στις σελίδες ετικετών';
$string['tag:flag'] = 'Επισήμανση ετικετών ως ακατάλληλων';
$string['tag:manage'] = 'Διαχείριση όλων των ετικετών';
$string['thisnewrole'] = 'Αυτός ο νέος ρόλος';
$string['thisusersroles'] = 'Ρόλοι που έχουν ανατεθεί στο χρήστη';
$string['unassignarole'] = 'Αφαίρεση του ρόλου «{$a}»';
$string['unassignconfirm'] = 'Θέλετε πραγματικά να αφαιρέσετε τον ρόλο «{$a->role}» από τον χρήστη «{$a->user}»;';
$string['unassignerror'] = 'Σφάλμα κατά την αφαίρεση του ρόλου «{$a->role}» από τον χρήστη «{$a->user}».';
$string['user:changeownpassword'] = 'Αλλαγή του δικού σας κωδικού πρόσβασης';
$string['user:create'] = 'Δημιουργία λογαριασμών χρηστών';
$string['user:delete'] = 'Διαγραφή λογαριασμών χρηστών';
$string['user:editmessageprofile'] = 'Τροποποίηση προφίλ μηνυμάτων άλλων χρηστών';
$string['user:editownmessageprofile'] = 'Τροποποίηση του δικού σας προφίλ μηνυμάτων';
$string['user:editownprofile'] = 'Τροποποίηση του δικού σας προφίλ χρήστη';
$string['user:editprofile'] = 'Τροποποίηση προφίλ χρήστη άλλων χρηστών';
$string['user:ignoreuserquota'] = 'Αγνοήστε το όριο ποσοστώσεως χρήστη';
$string['user:loginas'] = 'Σύνδεση σαν άλλος χρήστης';
$string['user:manageblocks'] = 'Διαχείριση μπλοκ στο προφίλ χρήστη των άλλων χρηστών';
$string['user:manageownblocks'] = 'Διαχείριση των μπλοκ στο δικό σας δημόσιο προφίλ χρήστη';
$string['user:manageownfiles'] = 'Διαχείριση αρχείων στις δικές σας ιδιωτικές περιοχές αρχείων';
$string['user:managesyspages'] = 'Διαμόρφωση προεπιλεγμένης διάταξης σελίδας για δημόσια προφίλ χρηστών';
$string['user:readuserblogs'] = 'Προβολή  των ιστολογίων όλων των χρηστών';
$string['user:readuserposts'] = 'Προβολή όλων των αναρτήσεων φόρουμ του χρήστη';
$string['usersfrom'] = 'Χρήστες του πλαισίου {$a}';
$string['usersfrommatching'] = 'Χρήστες του πλαισίου {$a->contextname} που ταιριάζουν στο \'{$a->search}\'';
$string['usersinthisx'] = 'Χρήστες σ\' αυτό το {$a}';
$string['usersinthisxmatching'] = 'Χρήστες σε αυτό το «{$a->contexttype}» που ταιριάζουν στο «{$a->search}»';
$string['userswithrole'] = 'Χρήστες με οποιοδήποτε ρόλο';
$string['userswiththisrole'] = 'Χρήστες με αυτό το ρόλο';
$string['user:update'] = 'Επεξεργασία των προφίλ των χρηστών';
$string['user:viewalldetails'] = 'Προβολή όλων των πληροφοριών του χρήστη';
$string['user:viewdetails'] = 'Προβολή των προφίλ των χρηστών';
$string['user:viewhiddendetails'] = 'Προβολή των κρυφών πληροφοριών των χρηστών';
$string['user:viewlastip'] = 'Προβολή της τελευταίας διεύθυνσης IP του χρήστη';
$string['user:viewuseractivitiesreport'] = 'Προβολή αναφορών δραστηριότητας χρήστη';
$string['user:viewusergrades'] = 'Προβολή βαθμών χρήστη';
$string['useshowadvancedtochange'] = 'Χρησιμοποιήστε το «Προβολή προχωρημένων» για αλλαγές';
$string['viewingdefinitionofrolex'] = 'Προβολή του ορισμού του ρόλου «{$a}»';
$string['viewrole'] = 'Προβολή των λεπτομερειών του ρόλου';
$string['webservice:createmobiletoken'] = 'Δημιουργία ενός κουπονιού υπηρεσιών ιστού για πρόσβαση κινητών.';
$string['webservice:createtoken'] = 'Δημιουργία ενός κουπονιού υπηρεσίας ιστού';
$string['whydoesuserhavecap'] = 'Γιατί ο «{$a->fullname}» έχει τη δυνατότητα «{$a->capability}» στο πλαίσιο «{$a->context}»;';
$string['whydoesusernothavecap'] = 'Γιατί ο «{$a->fullname}» δεν έχει τη δυνατότητα «{$a->capability}» στο πλαίσιο «{$a->context}»;';
$string['xroleassignments'] = 'Αναθέσεις ρόλων του «{$a}»';
$string['xuserswiththerole'] = 'Χρήστες με τον ρόλο «{$a->role}»: {$a->number}';
