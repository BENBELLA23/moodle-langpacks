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
 * Strings for component 'studentquiz', language 'de', version '3.11'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'Abbrechen';
$string['add_comment'] = 'Kommentar hinzufügen';
$string['add_reply'] = 'Antwort hinzufügen';
$string['after_answering_end_date'] = 'Dieses StudentQuiz wurde am {$a} für weitere Antworten geschlossen.';
$string['after_submission_end_date'] = 'Dieses StudentQuiz wurde am {$a} für das Einreichen von Fragen geschlossen.';
$string['anonymous_user_name'] = 'Anonyme/r Nutzer/in #{$a}';
$string['answeringndbeforestart'] = 'Der Endtermin für die Beantwortung von Fragen kann nicht vor dem Starttermin liegen.';
$string['api_state_change_success_content'] = 'Fragestatus/Sichtbarkeit erfolgreich geändert';
$string['api_state_change_success_title'] = 'Erfolg';
$string['approve'] = 'Bestätigen';
$string['approve_toggle'] = 'Ablehnen/Bestätigen';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Bestätigt';
$string['approved_veryshort'] = 'B';
$string['approveselectedscheck'] = 'Möchten Sie wirklich die folgenden Fragen ablehnen bzw. bestätigen?<br /><br />{$a}';
$string['average_column_name'] = 'Durchschnitt';
$string['before_answering_end_date'] = 'Dieses StudentQuiz schließt für weitere Antworten am {$a}.';
$string['before_answering_start_date'] = 'Offen für die Beantwortung ab {$a}.';
$string['before_submission_end_date'] = 'Dieses StudentQuiz schließt für das Einreichen von Fragen am {$a}.';
$string['before_submission_start_date'] = 'Offen für das Einreichen von Fragen ab {$a}.';
$string['cachedef_permissionssync'] = 'Synchronisationstracking für die StudentQuiz-Rechte';
$string['cannotcapturecommenthistory'] = 'Kann keine Aufzeichnung des Kommentarverlaufs finden';
$string['changeselectedsstate'] = 'Status der folgenden Fragen ändern:<br /><br />{$a}';
$string['collapseall'] = 'Alle Kommentare einklappen';
$string['collapsecomment'] = 'Kommentar einklappen';
$string['comment_author'] = 'Autor/in';
$string['comment_cannot_update'] = 'Kommentar kann nicht aktualisiert werden.';
$string['comment_column_name'] = 'Kommentare';
$string['comment_error'] = 'Bitte kommentieren';
$string['comment_error_unsaved'] = 'Möchten Sie diesen Kommentar zunächst speichern?';
$string['comment_help'] = 'Kommentar schreiben';
$string['comment_help_help'] = 'Kommentar zu dieser Frage schreiben';
$string['comment_veryshort'] = 'K';
$string['commenthistory'] = 'Kommentarverlauf';
$string['confirmdeletecomment'] = 'Soll der Kommentar wirklich gelöscht werden?';
$string['createnewquestion'] = 'Neue Frage erstellen';
$string['createnewquestionfirst'] = 'Erste Frage erstellen';
$string['creator_anonym_fullname'] = 'Anonyme/r Teilnehmer/in';
$string['current_of_total'] = '{$a->current} von {$a->total}';
$string['delete'] = 'Löschen';
$string['deletecomment'] = 'Kommentar löschen';
$string['deletedbyauthor'] = 'Dieser Kommentar wurde am {$a} gelöscht.';
$string['deletedbyuser'] = 'Dieser Kommentar wurde von {$a->user} am {$a->date} gelöscht.';
$string['deletedcomment'] = 'Kommentar gelöscht';
$string['deleteorphanedquestions'] = 'Verwaiste Fragen löschen';
$string['deleteorphanedquestionserrormdlquestion'] = '<font color="red">Fehler</font>: Konnte nicht aus der Tabelle mdl_question löschen. Die Frage ist wahrscheinlich irgendwo in Gebrauch.<br><font color="red">Fehler</font>: Löschen aus mdl_studentquiz*-Tabellen wurde übersprungen.<br>';
$string['deleteorphanedquestionserrorstudentquiz'] = '<font color="red">Fehler</font>: Konnte nicht aus mdl_studentquiz*-Tabellen löschen.<br>';
$string['deleteorphanedquestionsfullmessage'] = 'Abgelehnte oder zur Löschung vorgemerkte Fragen:<ul>{$a->fullmessage}</ul>';
$string['deleteorphanedquestionsnonefound'] = '<b>keine gefunden</b>';
$string['deleteorphanedquestionsquestioninfo'] = '<li><b>{$a->name}</b> (Fragetyp: {$a->qtype}, ID: {$a->questionid})</li>';
$string['deleteorphanedquestionssmallmessage'] = 'StudentQuiz: Task zur Löschung von verwaisten Fragen wurde ausgeführt';
$string['deleteorphanedquestionssubject'] = 'StudentQuiz';
$string['deleteorphanedquestionssuccessmdlquestion'] = '<font color="green">Erfolg</font>: Aus mdl_question-Tabelle gelöscht.<br>';
$string['deleteorphanedquestionssuccessstudentquiz'] = '<font color="green">Erfolg</font>: Aus mdl_studentquiz*-Tabellen gelöscht.<br>';
$string['describe_already_deleted'] = 'Dieser Kommentar wurde bereits gelöscht.';
$string['describe_not_creator'] = 'Dies ist nicht Ihr Kommentar.';
$string['describe_out_of_time_delete'] = 'Dieser Kommentar kann nicht mehr gelöscht werden.';
$string['describe_out_of_time_edit'] = 'Dieser Kommentar kann nicht mehr bearbeitet werden.';
$string['difficulty_all_column_name'] = 'Community Schwierigkeit';
$string['difficulty_level_column_name'] = 'Schwierigkeit';
$string['difficulty_title'] = 'Schwierigkeitsgrad';
$string['editcomment'] = 'Kommentar bearbeiten';
$string['editedcomment_last_edit'] = 'Zuletzt bearbeitet:';
$string['editedcommenthistory'] = 'Von {$a->lastesteditedcommentauthorname} am {$a->lastededitedcommenttime} bearbeitet';
$string['editedcommenthistorylinktext'] = 'Verlauf';
$string['editorplaceholder'] = 'Geben Sie hier Ihren Kommentar ein ...';
$string['emailautomationnote'] = 'Bitte beachten Sie, dass dies eine automatisierte Systemmeldung ist – diese E-Mail-Adresse wird nicht gelesen.';
$string['emailcommentaddedbody'] = 'Hallo {$a->recepientname},

Ihre Frage \'{$a->questionname}\' in der StudentQuiz-Aktivität \'{$a->modulename}\' im Kurs \'{$a->coursename}\' wurde von \'{$a->actorname}\' um \'{$a->timestamp}\' kommentiert.

Der Kommentar war: \'{$a->commenttext}\'

Sie können diese Frage über den folgenden Link betrachten: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = 'Ihre Frage \'{$a->questionname}\' wurde von {$a->actorname} kommentiert.';
$string['emailcommentaddedsubject'] = 'Frage kommentiert: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Hallo {$a->recepientname},

Der Kommentar um \'{$a->commentname}\' zu Ihrer Frage \'{$a->questionname}\' in der StudentQuiz-Aktivität \'{$a->modulename}\' im Kurs \'{$a->coursename}\' wurde von \'{$a->actorname}\' um \'{$a->timestamp}\' gelöscht.

Der Kommentar war: \'{$a->commenttext}\'

Sie können diese Frage über den folgenden Link betrachten: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = 'Der Kommentar zu Ihrer Frage \'{$a->questionname}\' wurde von \'{$a->actorname}\' gelöscht.';
$string['emailcommentdeletedsubject'] = 'Kommentar zu einer Frage gelöscht: {$a->questionname}';
$string['emaildigestbody'] = 'Dies ist Ihre {$a->digesttype} Ausgabe der Benachrichtigungen für die <b>{$a->modulename}</b> StudentQuiz-Aktivität, hier verfügbar:';
$string['emaildigestbody_section_content'] = 'Ihre Frage <b>{$a->questionname}</b> wurde von <b>{$a->actorname}</b> <b>{$a->actiontype}</b>.';
$string['emaildigestbody_section_title'] = 'Benachrichtigung {$a->seq}, {$a->timestamp}';
$string['emaildigestsubject'] = 'Ausgabe der StudentQuiz-Benachrichtigung';
$string['emailminecommentdeletedbody'] = 'Hallo {$a->recepientname},

Ihr Kommentar um \'{$a->commenttime}\' zur Frage \'{$a->questionname}\' in der StudentQuiz-Aktivität \'{$a->modulename}\' im Kurs \'{$a->coursename}\' wurde von \'{$a->actorname}\' am \'{$a->timestamp}\' gelöscht.

Der Kommentar war: \'{$a->commenttext}\'

Sie können diese Frage über den folgenden Link betrachten: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = 'Der Kommentar zu Ihrer Frage \'{$a->questionname}\' wurde gelöscht durch {$a->actorname}.';
$string['emailminecommentdeletedsubject'] = 'Ein Kommentar zu einer Frage wurde gelöscht: {$a->questionname}';
$string['emailsalutation'] = 'Hallo {$a},';
$string['emailsinglebody'] = 'Ihre Frage <b>{$a->questionname}</b> in der StudentQuiz-Aktivität <b>{$a->modulename}</b> im Kurs <b>{$a->coursename}</b> wurde von <b>{$a->actorname}</b> um <b>{$a->timestamp}</b> {$a->eventname}.';
$string['emailsinglebody_reviewlink'] = 'Sie können diese Frage hier überprüfen:';
$string['error_form_validation'] = '{$a}';
$string['error_sendalert'] = 'Es gab einen Fehler. Ihr Bericht an {$a} konnte nicht gesendet werden.';
$string['expandall'] = 'Alle Kommentare ausklappen';
$string['expandcomment'] = 'Kommentar ausklappen';
$string['filter'] = 'Filter';
$string['filter_advanced_element'] = '{$a} (erweiteres Element)';
$string['filter_comment_label_date'] = 'Datum';
$string['filter_comment_label_forename'] = 'Vorname';
$string['filter_comment_label_sort_by'] = 'Sortiert nach:';
$string['filter_comment_label_sort_toggle'] = 'Sortieren nach {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'Nachname';
$string['filter_ishigher'] = 'Ist höher';
$string['filter_islower'] = 'Ist tiefer';
$string['filter_label_approved'] = 'Bestätigte Fragen';
$string['filter_label_comment'] = 'Kommentare';
$string['filter_label_createdate'] = 'Erstellt';
$string['filter_label_difficulty_level'] = 'Schwierigkeiten';
$string['filter_label_fast_filters'] = 'Schnellfilter für Fragen';
$string['filter_label_myattempts'] = 'Meine Versuche';
$string['filter_label_mydifficulty'] = 'Meine Schwierigkeit';
$string['filter_label_mylastattempt'] = 'Mein letzter Versuch';
$string['filter_label_myrate'] = 'Meine Bewertung';
$string['filter_label_onlyapproved'] = 'Bestätigt';
$string['filter_label_onlyapproved_help'] = 'Von Ihrer Lehrperson bestätigte Fragen';
$string['filter_label_onlydifficult'] = 'Schwer für alle';
$string['filter_label_onlydifficult_help'] = 'Fragen mit einer durchschnittlichen Schwierigkeit von mehr als {$a}%';
$string['filter_label_onlydifficultforme'] = 'Für mich schwer';
$string['filter_label_onlydifficultforme_help'] = 'Fragen mit meiner Schwierigkeit von mehr als {$a}%';
$string['filter_label_onlygood'] = 'Gute';
$string['filter_label_onlygood_help'] = 'Fragen mit einer durchschnittlichen Bewertung von mindestens {$a} Sternen';
$string['filter_label_onlymine'] = 'Meine';
$string['filter_label_onlymine_help'] = 'Fragen, die Sie erstellten.';
$string['filter_label_onlynew'] = 'Unbeantwortete';
$string['filter_label_onlynew_help'] = 'Fragen, die Sie noch nie beantwortet haben';
$string['filter_label_question'] = 'Fragetitel';
$string['filter_label_question_creation_item'] = '{$a->creationtext} {$a->rowtext} {$a->inputtext}';
$string['filter_label_question_creation_item_inputtext'] = '{$a->inputtext} {$a->inputtype}';
$string['filter_label_questiontext'] = 'Frageinhalt';
$string['filter_label_rates'] = 'Bewertung';
$string['filter_label_show_mine'] = 'Meine Fragen';
$string['filter_label_tags'] = 'Tag';
$string['finish_button'] = 'Fertig';
$string['image_placeholder'] = '[Image]';
$string['invalidcomment'] = 'ungültiger Kommentar';
$string['invalidemail'] = 'Diese E-Mail-Adresse ist ungültig. Bitte geben Sie eine gültige E-Mail-Adresse ein.';
$string['lastattempt_right'] = '✓';
$string['lastattempt_right_label'] = 'Beim letzten Versuch richtig';
$string['lastattempt_wrong'] = '✗';
$string['lastattempt_wrong_label'] = 'Beim letzten Versuch falsch';
$string['latest_column_name'] = 'Letzter';
$string['manager_anonym_fullname'] = 'Anonymer Manager';
$string['message'] = 'Nachricht';
$string['messageprovider:commentadded'] = 'Mitteilung: Kommentar hinzugefügt';
$string['messageprovider:commentdeleted'] = 'Mitteilung: Kommentar gelöscht';
$string['messageprovider:deleteorphanedquestions'] = 'Benachrichtigung für eine Frage-Löschung';
$string['messageprovider:minecommentdeleted'] = 'Mitteilung: Mein Kommentar wurde gelöscht';
$string['messageprovider:questionchanged'] = 'Benachrichtigung für ein Frage-Ereignis';
$string['migrate_already_done'] = 'Es wurde nichts getan, weil diese Aktivität bereits migriert wurde!';
$string['migrate_ask'] = 'Die Geschwindigkeit von StudentQuiz hat sich mit der Version 3.2.1 verbessert, aber dieser Fragensatz basiert immer noch auf einer früheren Version.
Fragen und Quizzes werden schneller geladen, wenn Sie diese beschleunigte Migration durchführen. Sie werden ein schnelleres Laden erleben; ansonsten wird sich nichts ändern.';
$string['migrate_studentquiz'] = 'Migration von StudentQuiz-Fragen vor Version 3.2.1 auf die schnellere Version mit aggregierten Werten';
$string['migrate_studentquiz_short'] = 'Diesen Fragensatz beschleunigen';
$string['migrated_successful'] = 'Diese Aktivität wurde erfolgreich migriert!';
$string['mine_column_name'] = 'Meine';
$string['missingparam'] = 'Ein Parameter fehlt oder ist falsch';
$string['moderator'] = 'Moderator/in';
$string['modulename'] = 'StudentQuiz';
$string['modulename_help'] = 'Die StudentQuiz-Aktivität ermöglicht es Teilnehmer/innen, Fragen zum Pool hinzuzufügen. In der StudentQuiz-Übersicht können die Teilnehmer/innen Fragen filtern. Sie können die gefilterten Fragen anschließend zum Üben benutzen. Trainer/innen haben die Option die Spalte "erstellt von" zu anonymisieren.<br><br>Die StudentQuiz-Aktivität vergibt Teilnehmer/innen Punkte, um sie zu motivieren, Fragen hinzuzufügen und damit zu üben. Die Punkte werden in einer Rangliste aufgelistet.';
$string['modulenameplural'] = 'StudentQuizzes';
$string['more'] = 'Mehr';
$string['myattempts_column_name'] = 'Meine Versuche';
$string['mydifficulty_column_name'] = 'Meine Schwierigkeit';
$string['mylastattempt_column_name'] = 'Mein letzter Versuch';
$string['myrate_column_name'] = 'Meine Bewertung';
$string['nav_export'] = 'Export';
$string['nav_import'] = 'Import';
$string['nav_question_no'] = 'Frage {$a->current} von {$a->total}';
$string['needtoallowatleastoneqtype'] = 'Sie müssen mindestens einen Fragetypen zulassen.';
$string['next_button'] = 'Weiter';
$string['no_comment'] = 'n.a.';
$string['no_comments'] = 'Keine Kommentare';
$string['no_difficulty_level'] = 'n.a.';
$string['no_myattempts'] = 'n.a.';
$string['no_mylastattempt'] = 'n.a.';
$string['no_mylastattempt_label'] = 'Diese Frage wurde noch nie versucht.';
$string['no_questions_add'] = 'Es gibt noch keine Fragen in diesem StudentQuiz. Fügen Sie die ersten Fragen hinzu.';
$string['no_questions_filter'] = 'Keine Frage erfüllte die Filterkriterien. Setzen Sie den Filter zurück um alle Fragen zu sehen.';
$string['no_questions_selected_message'] = 'Bitte mindestens eine Frage auswählen um einen Quiz zu starten.';
$string['no_rates'] = 'n.a.';
$string['no_tags'] = 'n.a.';
$string['nocommenthistoryexist'] = 'Für diesen Kommentar gibt es noch keinen Kommentarverlauf.';
$string['not_approved'] = '✗';
$string['notshowratingcomment'] = 'Hinweis: Bewerten und Kommentieren sind im Vorschau-Modus für Ihre eigene Frage nicht verfügbar.';
$string['num_questions'] = '{$a} Fragen';
$string['number_column_name'] = 'Zahl';
$string['numberreply'] = '{$a} Antworten';
$string['onlyrootcommentcanreply'] = 'Es kann nur Kommentare auf höchster Ebene geantwortet werden.';
$string['pagesize'] = 'Seitengröße:';
$string['please_enrole_message'] = 'Schreiben Sie sich in diesen Kurs ein, um Ihren persönlichen Fortschritt zu sehen.';
$string['pluginadministration'] = 'StudentQuiz Administration';
$string['pluginname'] = 'StudentQuiz';
$string['previous_button'] = 'Vorige';
$string['privacy:metadata:mod_studentquiz_comment_sort'] = 'Eine Nutzereinstellung für Filter auf Kommentare.';
$string['privacy:metadata:studentquiz_attempt'] = 'Umfasst einen Versuch eines Benutzers eine Auswahl von Fragen zu beantworten';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'ID der Kategorie';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'ID des Versuchs';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'ID des StudentQuiz';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'ID von Nutzer/in';
$string['privacy:metadata:studentquiz_comment'] = 'Kommentare zu Fragen speichern';
$string['privacy:metadata:studentquiz_comment:comment'] = 'Kommentar zur Frage';
$string['privacy:metadata:studentquiz_comment:created'] = 'Erstellzeitpunkt';
$string['privacy:metadata:studentquiz_comment:deleted'] = 'Zeitstempel im Kommentar gelöscht.';
$string['privacy:metadata:studentquiz_comment:deleteuserid'] = 'Nutzer-ID im Kommentar gelöscht.';
$string['privacy:metadata:studentquiz_comment:edited'] = 'Zeitstempel im Kommentar geändert.';
$string['privacy:metadata:studentquiz_comment:edituserid'] = 'Nutzer-ID im Kommentar geändert.';
$string['privacy:metadata:studentquiz_comment:parentid'] = 'ID des übergeordneten Kommentars. 0: Kommentar auf höchster Ebene.';
$string['privacy:metadata:studentquiz_comment:questionid'] = 'ID der Frage';
$string['privacy:metadata:studentquiz_comment:status'] = 'Status des Kommentars';
$string['privacy:metadata:studentquiz_comment:timemodified'] = 'Änderungszeit des Kommentars';
$string['privacy:metadata:studentquiz_comment:userid'] = 'Nutzer-ID';
$string['privacy:metadata:studentquiz_comment:usermodified'] = 'Id der Person, die den Kommentar bearbeitet hat';
$string['privacy:metadata:studentquiz_comment_history'] = 'Kommentarverläufe speichern';
$string['privacy:metadata:studentquiz_comment_history:action'] = 'Verlaufstyp 0 - Erstellen | 1 - Bearbeiten | 2 - Löschen';
$string['privacy:metadata:studentquiz_comment_history:commentid'] = 'ID des Kommentars';
$string['privacy:metadata:studentquiz_comment_history:content'] = 'Inhalt des Kommentarverlaufs';
$string['privacy:metadata:studentquiz_comment_history:timemodified'] = 'Änderungszeit des Kommentars';
$string['privacy:metadata:studentquiz_comment_history:userid'] = 'ID der Person, die den Kommentar bearbeitet hat';
$string['privacy:metadata:studentquiz_notification'] = 'Benachrichtigung-Queue';
$string['privacy:metadata:studentquiz_notification:content'] = 'Benachrichtigungsinhalt';
$string['privacy:metadata:studentquiz_notification:recipientid'] = 'Empfänger-ID';
$string['privacy:metadata:studentquiz_notification:status'] = 'Status der Benachrichtigung';
$string['privacy:metadata:studentquiz_notification:studentquizid'] = 'StudentQuiz-ID';
$string['privacy:metadata:studentquiz_notification:timetosend'] = 'Zeit zum Senden der Benachrichtigung';
$string['privacy:metadata:studentquiz_progress'] = 'Fortschrittsinformationen zu dieser Frage der Studierenden speichern';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'Anzahl Versuche die Frage zu beantworten';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Anzahl richtiger Antworten';
$string['privacy:metadata:studentquiz_progress:lastanswercorrect'] = '0: Die zuletzt gegebene Anwort war falsch oder nicht definiert. 1: Die zuletzt gegebene Antwort war richtig';
$string['privacy:metadata:studentquiz_progress:questionid'] = 'ID der Frage';
$string['privacy:metadata:studentquiz_progress:studentquizid'] = 'ID des StudentQuiz';
$string['privacy:metadata:studentquiz_progress:userid'] = 'Nutzer-ID';
$string['privacy:metadata:studentquiz_rate'] = 'Bewertungen zu Fragen speichern';
$string['privacy:metadata:studentquiz_rate:questionid'] = 'ID der Frage';
$string['privacy:metadata:studentquiz_rate:rate'] = 'Bewertung der Frage';
$string['privacy:metadata:studentquiz_rate:userid'] = 'Nutzer-ID';
$string['progress_bar_caption'] = 'Ihr Fortschritt in dieser StudentQuiz Aktivität';
$string['questionsinuse'] = '(* Die Fragen mit einem Stern werden bereits in Quizzes verwendet.)';
$string['ranking_block_title'] = 'Rang';
$string['ranking_block_title_anonymised'] = 'Rangliste (anonymisiert)';
$string['rate_all_column_name'] = 'Community Bewertung';
$string['rate_column_name'] = 'Bewertung';
$string['rate_error'] = 'Bitte bewerten';
$string['rate_help'] = 'Bewerten Sie diese Frage';
$string['rate_help_help'] = 'Bewerten Sie diese Frage. <br />1 Stern ist sehr schlecht und 5 Sterne sind sehr gut';
$string['rate_multi_stars_desc'] = '{$a} Sterne ausgewählt';
$string['rate_one_star_desc'] = '1 Stern ausgewählt';
$string['rate_points'] = 'Punkte';
$string['rate_title'] = 'Bewertung';
$string['ratingbar_title'] = 'Bewertung';
$string['remove_comment'] = 'Entfernen';
$string['remove_comment_label'] = 'Kommentar entfernen';
$string['replies'] = 'Antworten';
$string['reply'] = 'Antwort';
$string['replycomment'] = 'Antwort';
$string['report_comment_condition1'] = 'Der Kommentar ist beleidigend';
$string['report_comment_condition2'] = 'Der Kommentar ist belästigend';
$string['report_comment_condition3'] = 'Der Kommentar beinhaltet unangebrachten Inhalt (z.B. Pornografie)';
$string['report_comment_condition4'] = 'Der Kommentar ist beleidigend oder diffamierend';
$string['report_comment_condition5'] = 'Der Kommentar verletzt Copyright-Rechte';
$string['report_comment_condition6'] = 'Der Kommentar verstößt aus anderen Gründen gegen Regeln';
$string['report_comment_condition_more'] = 'Zusätzliche Informationen (freiwillig)';
$string['report_comment_emailappendix'] = 'Sie erhalten diese Nachricht, weil Ihre E-Mail-Adresse im StudentQuiz als Empfänger für Berichte zu unakzeptablen Kommentaren angegeben wurde.';
$string['report_comment_emailpreface'] = 'Der Kommentar wurde gemeldet durch {$a->fullname} ({$a->username},
{$a->email}).';
$string['report_comment_emailsubject'] = 'Den Kommentar melden {$a->commentid}: {$a->coursename} {$a->studentquizname}';
$string['report_comment_feedback'] = 'Ihre Meldung wurde erfolgreich versandt. Wir werden dem Hinweis nachgehen.';
$string['report_comment_info'] = 'Die \'Bericht\'-Funktion kann diesen Kommentar an einen Mitarbeiter Ihrer Institution senden. <strong>Bitte benutzen Sie diese Funktion nur, wenn der Kommentar gegen Regeln verstösst</strong>.';
$string['report_comment_invalid'] = 'Sie müssen einen Grund für die Meldung angeben.';
$string['report_comment_invalid_checkbox'] = 'Sie müssen mindestens eine Box auswählen.';
$string['report_comment_link_text'] = 'Vorschau';
$string['report_comment_not_available'] = 'Die Meldefunktion für Kommentare ist nicht verfügbar.';
$string['report_comment_pagename'] = 'Melden Sie einen Kommentar als unakzeptabel.';
$string['report_comment_reasons'] = 'Gründe für die Meldung:';
$string['report_comment_reporter_detail'] = '{$a->fullname} ({$a->username}; {$a->email}; {$a->ip})';
$string['report_comment_reporter_info'] = '<strong>Informationen zur meldenden Person</strong>:';
$string['report_comment_submit'] = 'Meldung absenden';
$string['reportcomment'] = 'Bericht';
$string['reportcomment_title'] = 'Melden eines Kommentars als nicht akzeptabel';
$string['reportquiz_admin_title'] = 'Nutzerstatistik';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Community Durchschnitt des letzten richtigen Antworten';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Community Durchschnitt der letzten falschen Antworten';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Community Anteil richtiger Antworten';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Anzahl richtiger Antworten / Anzahl aller Antworten';
$string['reportquiz_stats_all_progress'] = 'Durchschnittlicher Community Fortschritt';
$string['reportquiz_stats_all_progress_help'] = 'Durchschnittlicher Community Fortschritt über alle Mitglieder';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Community Durchschnitt richtiger Antworten';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Community Durchschnitt falscher Antworten';
$string['reportquiz_stats_all_questions_answered'] = 'Community Durchschnitt aller Antworten';
$string['reportquiz_stats_all_questions_answered_help'] = 'Durchschnittliche Anzahl von allen Mitgliedern gegebenen Antworten';
$string['reportquiz_stats_all_questions_approved'] = 'Anzahl bestätigter Fragen';
$string['reportquiz_stats_all_questions_approved_help'] = 'Lehrpersonen können Fragen bestätigen, um deren Korrektheit zu verifizieren. Dies ist die Zahl aller bestätigten Fragen in diesem StudentQuiz.';
$string['reportquiz_stats_all_questions_created'] = 'Anzahl aller Fragen in diesem StudentQuiz';
$string['reportquiz_stats_all_questions_created_help'] = 'Anzahl aller von der Community erstellten Fragen';
$string['reportquiz_stats_all_rates_average'] = 'Durchschnittliche Bewertung aller Fragen';
$string['reportquiz_stats_all_rates_average_help'] = 'Die Bewertung jeder Frage ist der Durchschnitt aller Sterne, welche die Frage von der Community erhalten hat. Beispiel: Die Community erstellte 4 Fragen. Falls Frage A = 3 Sterne und Frage B = 4 Sterne, Frage C = 2 Sterne und Frage D = 5 Sterne erhält, ist die durchschnittliche Bewertung über alle Fragen 3.5.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Anzahl Ihrer zuletzt richtigen Antworten.';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Anzahl Ihrer zuletzt falschen Antworten.';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Anteil richtiger Antworten.';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Anteil Ihrer richtigen Antworten an allen gegebenen Antworten.
Teilweise richtige Antworten werden als falsche Antworten gezählt.';
$string['reportquiz_stats_own_progress'] = 'Persönlicher Fortschritt';
$string['reportquiz_stats_own_progress_help'] = 'Anteil Ihrer zuletzt richtigen Antworten an allen Fragen in diesem StudentQuiz. Teilweise richtige Antworten werden als falsche Antworten gezählt.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Anzahl Ihrer richtigen Antworten';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Anzahl Ihrer falschen Antworten';
$string['reportquiz_stats_own_questions_answered'] = 'Anzahl aller Ihrer Antworten';
$string['reportquiz_stats_own_questions_answered_help'] = 'Anzahl all der Antworten, die Sie in diesem StudentQuiz gegeben haben.';
$string['reportquiz_stats_own_questions_approved'] = 'Anzahl Ihrer bestätigten Fragen';
$string['reportquiz_stats_own_questions_approved_help'] = 'Lehrpersonen können Fragen bestätigen um deren Korrektheit zu verifizieren. Dies ist die Zahl Ihrer bestätigten Fragen innerhalb dieses StudentQuiz.';
$string['reportquiz_stats_own_questions_created'] = 'Anzahl der Fragen, die Sie beigetragen haben.';
$string['reportquiz_stats_own_questions_created_help'] = 'Anzahl der Fragen, die Sie zu diesem StudentQuiz beigetragen haben.';
$string['reportquiz_stats_own_rates_average'] = 'Ihre durchschnittlich erhaltene Bewertung';
$string['reportquiz_stats_own_rates_average_help'] = 'Die Bewertung jeder Frage ist der Durchschnitt aller Sterne, welche diese von der Community erhalten hat. Beispiel: Sie haben die Fragen A und B erstellt. Wenn Ihre Frage A nun 3 Sterne von der Community erhalten hat und Frage B 4, ist Ihre erhaltene durchschnittliche Bewertung 3.5.';
$string['reportquiz_stats_title'] = 'Statistiken';
$string['reportquiz_total_attempt'] = 'Anzahl der Quizdurchführungen';
$string['reportquiz_total_obtained_marks'] = 'Erhaltene Punkte';
$string['reportquiz_total_questions_answered'] = 'Anzahl beantworteter Fragen';
$string['reportquiz_total_questions_right'] = 'Anzahl richtig beantworteter Fragen';
$string['reportquiz_total_questions_wrong'] = 'Falsche Antworten';
$string['reportquiz_total_users'] = 'Teilnehmerzahl';
$string['reportrank_table_column_approvedquestions'] = 'Punkte für bestätigte Fragen';
$string['reportrank_table_column_communitystatus'] = 'Community Statistik';
$string['reportrank_table_column_correctanswers'] = 'Richtige Antworten';
$string['reportrank_table_column_countquestions'] = 'Punkte für veröffentlichte Fragen';
$string['reportrank_table_column_description'] = 'Beschreibung';
$string['reportrank_table_column_factor'] = 'Faktor';
$string['reportrank_table_column_fullname'] = 'Vollständiger Name';
$string['reportrank_table_column_incorrectanswers'] = 'Falsche Antworten';
$string['reportrank_table_column_lastcorrectanswers'] = 'Punkte für richtige Antworten beim letzten Versuch';
$string['reportrank_table_column_lastincorrectanswers'] = 'Punkte für falsche Antworten beim letzten Versuch';
$string['reportrank_table_column_points'] = 'Punkte';
$string['reportrank_table_column_progress'] = 'Persönlicher Fortschritt';
$string['reportrank_table_column_quantifier_name'] = 'Name';
$string['reportrank_table_column_rank'] = 'Rang';
$string['reportrank_table_column_summeanrates'] = 'Punkte für erhaltene Sterne';
$string['reportrank_table_column_total_points'] = 'Total Punkte';
$string['reportrank_table_column_value'] = 'Wert';
$string['reportrank_table_column_yourstatus'] = 'Persönliche Statistik';
$string['reportrank_table_quantifier_caption'] = 'Wie Ihre Punkte berechnet werden';
$string['reportrank_table_title'] = 'Teilnehmer-Rangliste - Top 10';
$string['reportrank_table_title_for_manager'] = 'Teilnehmer-Rangliste';
$string['reportrank_title'] = 'Rangliste';
$string['review_button'] = 'Überarbeiten';
$string['savechanges'] = 'Änderungen speichern';
$string['scheduled_task_send_digest_notification'] = 'StudentQuiz-Zusammenfassung versenden';
$string['setting_question_publishing'] = 'Frage veröffentlichen';
$string['setting_question_publishing_automatic'] = 'Neue Fragen automatisch veröffentlichen';
$string['setting_question_publishing_help'] = 'Veröffentlichte Fragen erscheinen im Fragepool für andere Studierende. Stellen Sie entweder ein, dass alle Fragen automatisch veröffentlicht werden, oder verlangen Sie eine Genehmigung, bevor sie veröffentlicht werden.<br>Beachten Sie, dass diese Einstellung nur für neu erstellte Fragen gilt.';
$string['setting_question_publishing_require_approval'] = 'Benötigte eine Bestätigung zur Veröffentlichung';
$string['settings_allowallqtypes'] = 'Alle Fragetypen erlauben';
$string['settings_allowedqtypes'] = 'Erlaubte Fragetypen';
$string['settings_allowedqtypes_help'] = 'Begrenzen Sie die erlaubten Fragetypen auf die ausgewählten Einträge';
$string['settings_anonymous'] = 'Anonymisierung';
$string['settings_anonymous_help'] = 'Teilnehmer/innen können die Namen anderer Teilnehmer/innen nicht sehen.';
$string['settings_anonymous_label'] = 'Teilnehmer/innen anonymisieren';
$string['settings_approvedquantifier'] = 'Faktor für bestätigte Fragen';
$string['settings_approvedquantifier_help'] = 'Punkte für bestätigte Fragen';
$string['settings_approvedquantifier_label'] = 'Punkte für jede bestätigte Frage';
$string['settings_availability_close_answering_from'] = 'Für das Antworten von Fragen geschlossen ab';
$string['settings_availability_close_submission_from'] = 'Für das Einreichen von Fragen geschlossen ab';
$string['settings_availability_open_answering_from'] = 'Für das Antworten von Fragen geöffnet ab';
$string['settings_availability_open_submission_from'] = 'Für das Einreichen von Fragen geöffnet ab';
$string['settings_comment_editor_toolbar'] = 'Toolbar-Konfiguraion des Kommentar-Editors';
$string['settings_comment_editor_toolbar_des'] = 'Die Liste von Plugins und deren Reihenfolge kann hier konfiguriert werden';
$string['settings_commentdeletionperiod'] = 'Zeit zum Bearbeiten oder Löschen des Kommentars (Minuten)';
$string['settings_commentdeletionperiod_help'] = 'Zeitperiode (in Minuten) für die Bearbeitung und das Löschen des Kommentars für Studierende. Werte zwischen 0 und 60 Minuten sind erlaubt. Falls die Zeit für die Löschung auf 0 gesetzt ist, können Studierende ihren Kommentar nicht Bearbeiten oder Löschen. Lehrende und Administratoren/innen können Kommentare immer bearbeiten oder löschen.';
$string['settings_email_digest_first_day'] = 'Erster Tag der Woche?';
$string['settings_email_digest_first_day_help'] = 'Wenn Sie eine wöchentliche Zusammenfassung ausgewählt haben, können Sie mit dieser Option den ersten Tag (beginnend um 00h:00m:00s dieses Tages) des Sieben-Tage-Zeitraums festlegen. Dies ist besonders nützlich, wenn die Aktivität z.B. Mitte der Woche beginnt.';
$string['settings_email_digest_type'] = 'Typ der E-Mail-Zusammenfassung';
$string['settings_email_digest_type_daily_digest'] = 'Tägliche Zusammenfassung';
$string['settings_email_digest_type_help'] = 'StudentQuiz verfügt über verschiedene Benachrichtigungen, die Sie aktivieren können, wie z.B. die Benachrichtigung des Studentenfragen-Autors über eine Zustandsänderung (z.B. ein Lehrer hat eine seiner Fragen genehmigt). Mit dieser Einstellung können Sie die Häufigkeit dieser Benachrichtigungen festlegen. Zusammenfassung-E-Mails werden nur dann versendet, wenn mindestens eine Benachrichtigung in der eingestellten Periode vorliegt.';
$string['settings_email_digest_type_no_digest'] = 'Keine Zusammenfassung (einzelne E-Mail pro Aktion)';
$string['settings_email_digest_type_weekly_digest'] = 'Wöchentliche Zusammenfassung';
$string['settings_excluderoles'] = 'Rollen vom Ranking ausschließen';
$string['settings_excluderoles_help'] = 'Die ausgewählten Rollen sind in den Rankings ausgeblendet, registrierte Nutzer/innen in diesen Rollen können weiterhin normal an der Aktivität teilnehmen.';
$string['settings_excluderoles_label'] = 'Rollen, die im Ranking ausgeschlossen werden sollen';
$string['settings_forcecommenting'] = 'Kommentieren erzwingen';
$string['settings_forcecommenting_help'] = 'Bei Beantwortung einer Frage muss diese zwingend kommentiert werden.';
$string['settings_forcerating'] = 'Bewerten erzwingen';
$string['settings_forcerating_help'] = 'Bei Beantwortung einer Frage muss diese zwingend bewertet werden.';
$string['settings_lastcorrectanswerquantifier'] = 'Faktor für zuletzt richtige Antworten';
$string['settings_lastcorrectanswerquantifier_help'] = 'Punkte für jede richtig beantwortete Frage beim letzten Versuch';
$string['settings_lastcorrectanswerquantifier_label'] = 'Punkte für zuletzt richtige Antworten';
$string['settings_lastincorrectanswerquantifier'] = 'Faktor für zuletzt falsche Antworten';
$string['settings_lastincorrectanswerquantifier_help'] = 'Punkte für jede falsche oder teilweise falsche Antwort beim letzten Versuch';
$string['settings_lastincorrectanswerquantifier_label'] = 'Punkte für zuletzt falsche Antworten';
$string['settings_notification'] = 'Benachrichtigungseinstellungen';
$string['settings_questionquantifier'] = 'Faktor für veröffentlichte Fragen';
$string['settings_questionquantifier_help'] = 'Punkte für jede veröffentlichte Frage';
$string['settings_questionquantifier_label'] = 'Punkte für jede veröffentlichte Frage';
$string['settings_ratequantifier'] = 'Bewertungsfaktor';
$string['settings_ratequantifier_help'] = 'Punkte für jeden erhaltenen Stern';
$string['settings_ratequantifier_label'] = 'Multiplikator für den Durchschnitt der per Frage erhaltenen Sterne';
$string['settings_removeqbehavior'] = 'Question Behaviour Plugin StudentQuiz entfernen';
$string['settings_removeqbehavior_help'] = 'Diese Information erscheint nur einmal während dem Update. Wir informieren Sie darüber, dass wir das Question Behaviour Plugin "StudentQuiz" auf diesem System detektiert haben. Dieses wird nicht mehr benötigt und so versuchen wir es automatisiert zu deinstallieren. Falls Sie diese Einstellung sehen, deinstallieren Sie das Question Behaviour StudentQuiz manuell <a href="{$a}">unter diesem Link.</a>.';
$string['settings_removeqbehavior_label'] = 'Question Behaviour Plugin StudentQuiz entfernen.';
$string['settings_reportingemail'] = 'E-Mail for die Meldung von fehlbaren Kommentaren';
$string['settings_reportingemail_help'] = 'Wenn hier eine E-Mailadresse hinterlegt ist, wird ein Meldelink erscheint neben einem Kommentar. Nutzer können diesen Link anwählen, um einen missbräuchlichen Kommentar zu melden. Diese Meldung wird dann an diese Adresse gesendet.

Wenn keine E-Mailadresse hinterlegt ist, wird die Meldungs-Funktion nicht angezeigt.

Mehrere E-Mailadressen können mit einem Strichpunkt getrennt angegeben werden.';
$string['settings_section_description_default'] = 'Diese Werte definieren die Standardwerte, wenn eine neue StudentQuiz Aktivität erstellt wird.';
$string['settings_section_header_comment_rating'] = 'Einstellungen für Kommentar und Bewertung';
$string['settings_section_header_question'] = 'Frageneinstellungen';
$string['settings_section_header_ranking'] = 'Bewertungseinstellungen';
$string['settingsdeleteorphaned'] = 'Verwaiste Fragen löschen';
$string['settingsdeleteorphaned_help'] = 'Aktiviert einen geplanten Vorgang, der jeden Tag ausgeführt wird, um alle verwaisten/nicht genehmigten Fragen aus der Datenbank zu löschen.';
$string['settingsdeleteorphanedtime1y'] = '1 Jahr';
$string['settingsdeleteorphanedtime2y'] = '2 Jahre';
$string['settingsdeleteorphanedtime3y'] = '3 Jahre';
$string['settingsdeleteorphanedtime6m'] = '6 Monate';
$string['settingsdeleteorphanedtimelimit'] = 'Zeitgrenze für die Löschung von verwaisten Fragen';
$string['settingsdeleteorphanedtimelimit_help'] = 'Legen Sie die Zeitgrenze für die Löschung von verwaisten oder nicht genehmigten Fragen fest. Fragen, die älter sind, werden gelöscht.';
$string['show_less'] = 'Weniger anzeigen';
$string['show_more'] = 'Mehr anzeigen';
$string['slot_of_slot'] = 'Frage {$a->slot} von {$a->slots} in diesem Set.';
$string['start_quiz_button'] = 'Quiz starten';
$string['state_approved'] = 'Bestätigt';
$string['state_change_tooltip_approved'] = 'Frage ist bestätigt. Klicken Sie hier um den Status der Frage zu ändern.';
$string['state_change_tooltip_changed'] = 'Frage ist geändert. Klicken Sie hier um den Status der Frage zu ändern.';
$string['state_change_tooltip_disapproved'] = 'Frage ist abgelehnt. Klicken Sie hier um den Status der Frage zu ändern.';
$string['state_change_tooltip_new'] = 'Frage ist neu. Klicken Sie hier um den Status der Frage zu ändern.';
$string['state_changed'] = 'Geändert';
$string['state_column_name'] = 'Status';
$string['state_column_name_veryshort'] = 'S';
$string['state_disapproved'] = 'Abgelehnt';
$string['state_new'] = 'Neu';
$string['state_toggle'] = 'Status ändern';
$string['statistic_block_approvals'] = 'Bestätigte Fragen';
$string['statistic_block_created'] = 'Erstellte Fragen';
$string['statistic_block_disapprovals'] = 'Abgelehnte Fragen';
$string['statistic_block_new_changed'] = 'Neue/geänderte Fragen';
$string['statistic_block_progress_available'] = 'Verfügbare Fragen';
$string['statistic_block_progress_last_attempt_correct'] = 'Letzter Versuch richtig';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Letzter Versuch falsch';
$string['statistic_block_progress_never'] = 'Unbeantwortete Fragen';
$string['statistic_block_title'] = 'Mein Fortschritt';
$string['studentquiz'] = 'Studentquiz';
$string['studentquiz:addinstance'] = 'Neue Instanz Studentquiz hinzufügen';
$string['studentquiz:canselfratecomment'] = 'Bewertung und Kommentar in der Vorschau';
$string['studentquiz:changestate'] = 'Den Status einer Frage im StudentQuiz setzen';
$string['studentquiz:emailnotifyapproved'] = 'Mitteilung: Frage bestätigt';
$string['studentquiz:emailnotifychanged'] = 'Mitteilung: Frage geändert';
$string['studentquiz:emailnotifycommentadded'] = 'Mitteilung: Kommentar hinzugefügt.';
$string['studentquiz:emailnotifycommentdeleted'] = 'Mitteilung: Kommentar gelöscht';
$string['studentquiz:emailnotifyquestion'] = 'Nutzer/innen erhalten E-Mail-Benachrichtigungen zu ihren Fragen';
$string['studentquiz:manage'] = 'Fragen im StudentQuiz verwalten';
$string['studentquiz:organize'] = 'Frage im StudentQuiz in Kategorien bewegen';
$string['studentquiz:previewothers'] = 'Vorschau der Fragen von anderen im StudentQuiz ansehen.';
$string['studentquiz:submit'] = 'Fragen im StudentQuiz hinzufügen';
$string['studentquiz:systemnotifytaskdeleteorphanedquestions'] = 'Benachrichtigung zur Löschung von verwaisten Fragen';
$string['studentquiz:unhideanonymous'] = 'Kann die Namen von anderen Teilnehmer/innen sehen, auch wenn die Anonymisierung aktiviert ist.';
$string['studentquiz:view'] = 'StudentQuiz anzeigen und nutzen';
$string['studentquizname'] = 'StudentQuiz Name';
$string['studentquizname_help'] = 'StudentQuiz Name';
$string['submissionendbeforestart'] = 'Die Frist für das Einreichen von Fragen kann nicht vor dem Starttermin für das Einreichen von Fragen liegen';
$string['tags'] = 'Tags';
$string['unapprove'] = 'Ablehnen';
