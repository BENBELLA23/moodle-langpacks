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
 * Strings for component 'block_configurable_reports', language 'de', version '3.8'.
 *
 * @package     block_configurable_reports
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitypost'] = 'Aktivitäten-Einreichungen';
$string['activityview'] = 'Aktivitäten-Aufrufe';
$string['addreport'] = 'Bericht hinzufügen';
$string['anyone'] = 'Jeder';
$string['anyone_summary'] = 'Jeder Nutzer kann diesen Bericht aufzurufen';
$string['availablemarks'] = 'Verfügbare Bewertungen';
$string['average'] = 'Durchschnitt';
$string['badconditionexpr'] = 'Ausdruck mit ungültiger Bedingung';
$string['badsize'] = 'Falscher Größenwert, die Größe muss in % oder Pixel angegeben werden';
$string['badtablewidth'] = 'Falscher Breitenwert, die Angabe muss in % oder als Betrag angegeben werden';
$string['bar'] = 'Balkendiagramm';
$string['barsummary'] = 'Ein Balkendiagramm';
$string['blockname'] = 'Konfigurierbare Berichte';
$string['calcs'] = 'Berechnungen';
$string['categories'] = 'Kategorien';
$string['categoryfield'] = 'Kategorienfeld';
$string['categoryfieldorder'] = 'Kategorienfeld-Reihenfolge';
$string['ccoursefield'] = 'Kategorienfeld-Bedingung';
$string['cellalign'] = 'Zellenausrichtung';
$string['cellsize'] = 'Zellengröße';
$string['cellwrap'] = 'Zellenumbruch';
$string['column'] = 'Spalte';
$string['columnandcellproperties'] = 'Spalten- und Zelleneinstellungen';
$string['columncalculations'] = 'Spaltenberechnungen';
$string['columns'] = 'Spalten';
$string['comp_calcs'] = 'Berechnungen';
$string['comp_calcs_help'] = '<p>Hier können Berechnungen für die Spalten hinzugefügt werden, z.B.: durchschnittliche Anzahl an Nutzern die in Kursen eingeschrieben sind</p> <p>Weitere Hilfe: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_calculations'] = 'Berechnungen';
$string['comp_calculations_help'] = '<p>Hier können Berechnungen für die Spalten hinzugefügt werden, z.B.: durchschnittliche Anzahl an Nutzern die in Kursen eingeschrieben sind</p>';
$string['comp_columns'] = 'Spalten';
$string['comp_columns_help'] = '<p>Hier können die verschiedenen Spalten des Reports ausgewählt werden, abhängig vom Typ ihres Reports</p> <p>Weitere Hilfe: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_conditions'] = 'Bedingungen';
$string['comp_conditions_help'] = '<p>Hier können Bedingungen definiert werden (z.B., nur Kurse einer Kategorie, nur Nutzer aus Spanien, etc.. </p> <p>Es können logische Ausdrücke verwendet werden wenn es mehr als eine Bedingung gibt.</p> <p>Weiter Hilfe: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_customsql'] = 'Angepasstes SQL';
$string['comp_customsql_help'] = '<p>Eine SQL Anweisung hinzufügen. Das Moodle Datenbank prefix ist hier nicht zu verwenden. Stattdessen muss hier als Prefix "prefix_" angegeben werden</p> <p>Beispiel: SELECT * FROM prefix_course</p> <p>Einige Beispielanweisungen könne hier gefunden werden: <a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">ad-hoc contributed reports</a></p> <p>Weitere Hinweise zum Erstellen von SQL Berichten finden Sie hier: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p>';
$string['comp_filters'] = 'Filter';
$string['comp_filters_help'] = '<p>Hier kann ausgewählt werden welcher Filter dargestellt werden soll.</p> <p>Ein Filter gibt dem Nutzer die Möglichkeit eine Spalte zu wählen über die das Ergebnis des Berichts gefiltert wird.</p> <p>Weiter Informationen zur Verwendung von Filtern finden Sie auf: <a href="http://docs.moodle.org/en/blocks/configurable_reports/#Creating_a_SQL_Report" target="_blank">Creating a SQL Report Tutorial</a></p> <p>Weitere Informationen: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_ordering'] = 'Sortierung';
$string['comp_ordering_help'] = '<p>Hier kann ausgewählt werden wie die Sortierung des Berichts aussehen soll</p> <p>Weiter Informationen unter: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_permissions'] = 'Berechtigung';
$string['comp_permissions_help'] = '<p>Hier kann festgelegt werden wer den Bericht sehen darf.</p> <p>Es können logische Ausdrücke zur Berechnung der Rechte verwendet werden wenn mehr als eine Bedingung verwendet wird.</p> <p>Weitere Informationen unter: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_plot'] = 'Diagramme';
$string['comp_plot_help'] = '<p>Hier können Diagramme über die Ergebnisse des Berichts hinzugefügt werden</p> <p>Weitere Informationen unter: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['comp_template'] = 'Vorlage';
$string['comp_template_help'] = '<p>Hier kann die Darstellung des Plugins durch ein Template angepasst werden.</p> <p>Für die Erstellung eines Templates kann man sich die Platzhalter ansehen die in der Überschrift, der Fußnote und den einzelnen Zeilen des Berichts verwendet werden können. Die Hinweise dazu sind in den jeweiligen Hilfetexten zu finden.</p> <p>Weitere Informationen unter: <a href="http://docs.moodle.org/en/blocks/configurable_reports/" target="_blank">Plugin documentation</a></p>';
$string['componenthelp'] = 'Komponenten-Hilfe';
$string['conditionexpr'] = 'Bedingung';
$string['conditionexpr_conditions'] = 'Bedingung';
$string['conditionexpr_conditions_help'] = '<p>Bedingungen können unter Verwendung von logischen Ausdrücken kombiniert werden</p> <p>Geben Sie dazu einen logischen Ausdruck ein der folgende Operatoren verwendet: and, or, nor.</p>';
$string['conditionexpr_permissions'] = 'Bedingung';
$string['conditionexpr_permissions_help'] = '<p>Bedingungen können unter Verwendung von logischen Ausdrücken kombiniert werden</p> <p>Geben Sie dazu einen logischen Ausdruck ein der folgende Operatoren verwendet: and, or, nor.</p>';
$string['conditionexprhelp'] = 'Geben Sie eine gültige Bedingung ein z.B. (c1 and c2) or (c4 and c3)';
$string['conditions'] = 'Bedingungen';
$string['configurable_reports:addinstance'] = 'Einen neuen \'Konfigurierbare Berichte\'-Block hinzufügen';
$string['configurable_reports:manageownreports'] = 'Eigene Berichte verwalten';
$string['configurable_reports:managereports'] = 'Berichte verwalten';
$string['configurable_reports:managesqlreports'] = 'SQL Berichte verwalten';
$string['configurable_reports:myaddinstance'] = 'Hinzufügen eines neuen konfigurierbaren Berichtsblocks zur Seite MY HOME';
$string['configurable_reports:viewreports'] = 'Berichte ansehen';
$string['confirmdeletereport'] = 'Sind Sie sicher dass Sie diesen Bericht löschen wollen?';
$string['coursecategories'] = 'Kategorie-Kursfilter';
$string['coursecategory'] = 'Kurs in Kategorie';
$string['coursechild'] = 'Kurse sind Metakurse von Kurs';
$string['coursededicationtime'] = 'Kurs Startzeit';
$string['coursefield'] = 'Kurs Feld';
$string['coursefieldorder'] = 'Kurs Feldreihenfolge';
$string['coursemodules'] = 'Kursmodul';
$string['courseparent'] = 'Metakurse die ableiten von';
$string['courses'] = 'Kurse';
$string['coursestats'] = 'Kurs-Statistiken';
$string['cron'] = 'Täglich automatisch ausführen';
$string['cron_help'] = 'Planen Sie diese Abfrage so ein, dass sie jeden Tag (nachts) ausgeführt wird.';
$string['crondescription'] = 'Planen Sie diese Abfrage so ein, dass sie jeden Tag (nachts) ausgeführt wird.';
$string['crrepository'] = 'Berichts-Repository';
$string['crrepositoryinfo'] = 'Freigegebenes Repository mit voll funktionsfähigen Beispielberichten (Name des GitHub-Kontoinhabers + Slash + Repository-Name)';
$string['currentreportcourse'] = 'Kurs des momentanen Berichts';
$string['currentreportcourse_summary'] = 'Der Kurs in dem der Bericht erstellt wurde';
$string['currentuser'] = 'Derzeitiger Nutzer';
$string['currentuser_summary'] = 'Der Nutzer der diesen Bericht betrachtet';
$string['currentusercourses'] = 'Kurse in denen der momentane Nutzer eingeschrieben ist';
$string['currentusercourses_summary'] = 'Eine Liste der Kurse des momentanen Nutzers (nur sichtbare Kurse)';
$string['currentuserfinalgrade'] = 'Die Endnote des momentanen Nutzers im Kurs';
$string['currentuserfinalgrade_summary'] = 'Diese Spalte zeigt die Endnoten des momentanen Nutzers in den Kursen';
$string['cuserfield'] = 'Nutzer Feldbedingung';
$string['custom'] = 'Angepasst';
$string['customdateformat'] = 'Angepasstes Datumsformat';
$string['customsql'] = 'Angepasste SQL Anfragen';
$string['datatables'] = 'DataTables JS-Bibliothek aktivieren';
$string['datatables_emptytable'] = 'Keine Daten in der Tabelle verfügbar';
$string['datatables_first'] = 'Zuerst';
$string['datatables_info'] = 'Anzeigen von _START_ bis _ENDE_ von _TOTAL_ Einträgen';
$string['datatables_infoempty'] = 'Anzeigen von 0 bis 0 von 0 Einträgen';
$string['datatables_infofiltered'] = '(gefiltert aus _MAX_ Gesamteinträgen)';
$string['datatables_last'] = 'Zuletzt';
$string['datatables_lengthmenu'] = 'MENU_Einträge_anzeigen';
$string['datatables_loadingrecords'] = 'Lädt …';
$string['datatables_next'] = 'Weiter';
$string['datatables_previous'] = 'Vorher';
$string['datatables_processing'] = 'Verarbeitet …';
$string['datatables_search'] = 'Suche:';
$string['datatables_sortascending'] = ': aktivieren, um Spalte aufsteigend zu sortieren';
$string['datatables_sortdescending'] = ': aktivieren, um Spalte absteigend zu sortieren';
$string['datatables_zerorecords'] = 'Keine passenden Datensätze gefunden';
$string['datatablesinfo'] = 'DataTables JS-Bibliothek (Spaltensortierung, feste Kopfzeile, Suche, Umbruch...)';
$string['date'] = 'Datum';
$string['dateformat'] = 'Datumsformat';
$string['dbhost'] = 'DB-Host';
$string['dbhostinfo'] = 'Hostname der entfernten Datenbank (auf der wir unsere SQL-Abfragen ausführen werden)';
$string['dbname'] = 'DB Name';
$string['dbnameinfo'] = 'Name der entfernten Datenbank (auf der wir unsere SQL-Abfragen ausführen werden)';
$string['dbpass'] = 'DB Passwort';
$string['dbpassinfo'] = 'Remote-Datenbank-Passwort (für obigen Benutzernamen)';
$string['dbuser'] = 'DB Benutzernamen';
$string['dbuserinfo'] = 'Remote-Datenbank-Benutzername (sollte SELECT-Privilegien auf der obigen DB haben)';
$string['decimals'] = 'Anzahl der Dezimalstellen';
$string['direction'] = 'Richtung';
$string['disabled'] = 'Deaktiviert';
$string['displayglobalreports'] = 'Globale Berichte anzeigen';
$string['displayreportslist'] = 'Anzeigen der Berichtsliste im Blockkörper';
$string['donotshowtime'] = 'Keine Datumsinformationen zeigen';
$string['download'] = 'Download';
$string['downloadreport'] = 'Berichtdownload';
$string['email_message'] = 'Nachricht';
$string['email_send'] = 'Abschicken';
$string['email_subject'] = 'Thema';
$string['enabled'] = 'Aktivieren';
$string['enableglobal'] = 'Dies ist ein globaler Bericht (von jedem Kurs aus zugänglich)';
$string['enablejsordering'] = 'JavaScript Sortierung aktivieren';
$string['enablejspagination'] = 'JavaScript Seitenumbruch aktivieren';
$string['endtime'] = 'Enddatum';
$string['enrolledstudents'] = 'Eingeschriebene Studenten';
$string['error_field'] = 'Feld nicht erlaubt';
$string['error_operator'] = 'Operator nicht erlaubt';
$string['error_value_expected_integer'] = 'Ganzzahliger Wert erwartet';
$string['excludedeletedusers'] = 'Gelöschte Benutzer ausschließen (nur für SQL-Berichte)';
$string['executeat'] = 'Ausführen am';
$string['executeatinfo'] = 'Moodle CRON führt geplante SQL-Abfragen nach der gewählten Zeit aus. Einmal in 24 Stunden';
$string['export_csv'] = 'Exportieren im CSV-Format';
$string['export_json'] = 'Exportieren im JSON-Format';
$string['export_ods'] = 'Export ins ODS Format';
$string['export_xls'] = 'Export ins XLS Format';
$string['exportoptions'] = 'Export Einstellungen';
$string['exportreport'] = 'Export Bericht';
$string['fcoursefield'] = 'Kurs Feldfilter';
$string['field'] = 'Feld';
$string['filter'] = 'Filter';
$string['filter_all'] = 'Alle';
$string['filter_apply'] = 'Bestätigen';
$string['filter_searchtext'] = 'Text suchen';
$string['filter_searchtext_summary'] = 'Freitext-Filter';
$string['filtercategories'] = 'Filter-Kategorien';
$string['filtercategories_summary'] = 'Nach Kategorie filtern';
$string['filtercoursecategories'] = 'Kategorie-Kursfilter';
$string['filtercoursecategories_summary'] = 'Kurse nach ihrer beliebigen übergeordneten Kategorie filtern';
$string['filtercoursemodules'] = 'Kursmodul';
$string['filtercoursemodules_summary'] = 'Kursmodule filtern';
$string['filtercourses'] = 'Kurse';
$string['filtercourses_summary'] = 'Dieser Filter zeigt eine Liste von Kursen. Es kann immer nur einer der Kurse ausgewählt sein.';
$string['filterenrolledstudents'] = 'Eingeschriebene Kursteilnehmer';
$string['filterenrolledstudents_summary'] = 'Einen Benutzer (nach ID) aus den eingeschriebenen Kursteilnehmern filtern';
$string['filterrole'] = 'Rolle';
$string['filterrole_summary'] = 'Systemrollen filtern (Dozent, Student, ...)';
$string['filters'] = 'Filter';
$string['filtersemester'] = 'Semester (Hebräisch)';
$string['filtersemester_list'] = 'סמסטר א,סמסטר ב,סמסטר ג,סמינריון';
$string['filtersemester_summary'] = 'מאפשר סינון לפני סמסטרים (בעברית, למשל: סמסטר א,סמסטר ב)';
$string['filterstartendtime_summary'] = 'Start/End-Datum Filter';
$string['filtersubcategories'] = 'Kategorie (Unterkategorien einbeziehen)';
$string['filtersubcategories_summary'] = 'Verwenden Sie: %%FILTER_SUBCATEGORIES:mdl_course_category.path%%%';
$string['filteruser'] = 'Aktueller Kursteilnehmer';
$string['filteruser_summary'] = 'Einen Benutzer (id) aus den aktuellen Kursbenutzern filtern';
$string['filterusers'] = 'Systembenutzer';
$string['filterusers_summary'] = 'Filtern eines Benutzers (nach ID) aus der Systembenutzerliste';
$string['filteryearhebrew'] = 'Jahr (hebräisch)';
$string['filteryearhebrew_list'] = 'תשע,תשעא,תשעב,תשעג,תשעד,תשעה';
$string['filteryearhebrew_summary'] = 'Filter verwendet hebräische Jahre (תשעג,...)';
$string['filteryearnumeric'] = 'Jahr (numerisch)';
$string['filteryearnumeric_summary'] = 'Filter verwendet numerische Jahre (2013,...)';
$string['filteryears'] = 'Jahr (numerisch)';
$string['filteryears_list'] = '2010,2011,2012,2013,2014,2015';
$string['filteryears_summary'] = 'Filter nach Jahren (numerische Darstellung, 2012...)';
$string['finalgradeincurrentcourse'] = 'Abschlussbewertung im aktuellen Kurs';
$string['fixeddate'] = 'Festes Datum';
$string['footer'] = 'Fußzeile';
$string['forcemidnight'] = 'Mitternacht erzwingen';
$string['fsearchuserfield'] = 'Nutzerfeld-Suche';
$string['fuserfield'] = 'Nutzer Feldfilter';
$string['global'] = 'Globaler Bericht';
$string['global_help'] = 'Auf den globalen Bericht kann von jedem Kurs auf Moodle zugegriffen werden, indem Sie einfach &courseid=MY_COURSE_ID an die Berichts-URL anhängen';
$string['globalstatsshouldbeenabled'] = 'Seitenstatistik muss aktiviert sein. Gehe zu Admin-> Server-> Statistiken';
$string['groupseries'] = 'Datenreihen gruppieren';
$string['groupvalues'] = 'Gleiche Werte gruppieren(summieren)';
$string['head_color'] = 'Hintergrundfarbe des Diagramms';
$string['head_data'] = 'Diagramm-Daten';
$string['head_size'] = 'Größe des Diagramms';
$string['header'] = 'Kopfzeile';
$string['height'] = 'Höhe';
$string['importfromrepository'] = 'Bericht aus Repository importieren';
$string['importreport'] = 'Bericht importieren';
$string['includesubcats'] = 'Unterkategorien einschließen';
$string['jsordering'] = 'JavaScript Sortierung';
$string['jsordering_help'] = 'JavaScript Sortierung erlaubt das Sortieren im Bericht ohne Neuladen der Seite.';
$string['label_field'] = 'Textblockfeld';
$string['label_field_help'] = 'Das Feld, das Namen für die in dem Diagramm dargestellten Dinge liefert';
$string['lastexecutiontime'] = 'Ausführungszeit = {$a} (Sec)';
$string['legacylognotenabled'] = 'Legacy-Protokolle müssen aktiviert werden.
Gehen Sie zu Website-Administration / Plugins / Logdaten. Aktivieren Sie die Logdatenerhebung und überprüfen Sie innerhalb der Log-Einstellungen die alten Log-daten';
$string['limitcategories'] = 'Kategorien in einem Diagramm limitieren';
$string['line'] = 'Liniendiagramm';
$string['linesummary'] = 'Linien diagramm mit mehreren Datenreihen';
$string['listofsqlreports'] = '<a href="http://docs.moodle.org/en/ad-hoc_contributed_reports" target="_blank">Liste von SQL Anfragen für Berichte</a>';
$string['managereports'] = 'Berichte verwalten';
$string['max'] = 'Maximum';
$string['min'] = 'Minimum';
$string['missingcolumn'] = 'Eine Spalte wird benötigt';
$string['module'] = 'Module';
$string['newreport'] = 'Neuer Bericht';
$string['nocalcsyet'] = 'Keine Berechnungen bis jetzt';
$string['nocolumnsyet'] = 'Keine Spalten bis jetzt';
$string['noconditionsyet'] = 'Keine Bedingungen bis jetzt';
$string['noexplicitprefix'] = 'Kein explizites prefix';
$string['nofiltersyet'] = 'Keine Filter bis jetzt';
$string['nofilteryet'] = 'Keine Filter bis jetzt';
$string['noorderingyet'] = 'Keine Sortierung bis jetzt';
$string['nopermissionsyet'] = 'Keine Rechte bis jetzt';
$string['noplotyet'] = 'Keine Diagramme bis jetzt';
$string['norecordsfound'] = 'Keine Einträge gefunden';
$string['noreportsavailable'] = 'Keine Berichte verfügbar';
$string['norowsreturned'] = 'Keine Zeilen zurückgeliefert';
$string['nosemicolon'] = 'Kein Semikolon';
$string['notallowedwords'] = 'Nicht erlaubte Wörter';
$string['operator'] = 'Operator';
$string['ordering'] = 'Sortierung';
$string['others'] = 'Andere';
$string['pagination'] = 'Seitenumbruch';
$string['pagination_help'] = 'Anzahl der Datensätz je Seite. Null bedeutet keine Beschränkung.';
$string['parentcategory'] = 'Oberkategorie';
$string['percent'] = 'Prozentualer Anteil';
$string['permissions'] = 'Rechte';
$string['pie'] = 'Kreisdiagramm';
$string['pieareaname'] = 'Name';
$string['pieareavalue'] = 'Wert';
$string['piesummary'] = 'Ein Kreisdiagramm';
$string['plot'] = 'Diagramme erzeugen';
$string['pluginname'] = 'Konfigurierbare Berichte';
$string['previousdays'] = 'Vergangene Tage';
$string['previousend'] = 'Beendet vor';
$string['previousstart'] = 'Beginnend vor';
$string['printreport'] = 'Bericht drucken';
$string['privacy:metadata:block_configurable_reports'] = 'Der konfigurierbare Berichtsblock enthält anpassbare Kursberichte.';
$string['privacy:metadata:block_configurable_reports:components'] = 'Die Konfiguration des Berichts. Er enthält die Abfrage, die Filter...';
$string['privacy:metadata:block_configurable_reports:courseid'] = 'Kursid';
$string['privacy:metadata:block_configurable_reports:global'] = 'ob der Bericht von allen Kursen aus zugänglich ist oder nicht';
$string['privacy:metadata:block_configurable_reports:lastexecutiontime'] = 'Zeit, die dieser Bericht bei seiner letzten Ausführung benötigt hat, in Millisekunden.';
$string['privacy:metadata:block_configurable_reports:name'] = 'Der Name des Berichts';
$string['privacy:metadata:block_configurable_reports:ownerid'] = 'Die ID des Benutzers, der diesen Bericht erstellt hat';
$string['privacy:metadata:block_configurable_reports:summary'] = 'Die Beschreibung des Berichts';
$string['privacy:metadata:block_configurable_reports:type'] = 'Die Art des Berichts';
$string['privacy:metadata:block_configurable_reports:visible'] = 'Ob der Bericht sichtbar ist oder nicht';
$string['puserfield'] = 'Nutzer Feld abhängig';
$string['puserfield_summary'] = 'Nutzer mit dem ausgewählten Wert im ausgewählten Feld';
$string['queryfailed'] = 'Abfrage fehlgeschlagen <code><pre>{$a}</pre></code>';
$string['querysql'] = 'SQL Anfrage';
$string['remote'] = 'Auf Remote-Db ausführen';
$string['remote_help'] = 'Möchten Sie diese Abfrage auf der entfernten Db ausführen';
$string['remotedescription'] = 'Möchten Sie diese Abfrage auf der entfernten Db ausführen';
$string['remotequerysql'] = 'SQL-Abfrage';
$string['report'] = 'Bericht';
$string['report_categories'] = 'Kategorien-Bericht';
$string['report_courses'] = 'Kurs Bericht';
$string['report_sql'] = 'SQL Bericht';
$string['report_timeline'] = 'Zeireihen-Bericht';
$string['report_users'] = 'Nutzer-Bericht';
$string['reportcategories'] = '1) Wählen Sie eine remote Berichtskategorie';
$string['reportcolumn'] = 'Spalte aus anderem Bericht';
$string['reportcreated'] = 'Bericht erfolgreich erstellt';
$string['reportlimit'] = 'Berichtszeilenlimit';
$string['reportlimitinfo'] = 'Beschränken Sie die Anzahl der Zeilen, die in der Berichtstabelle angezeigt werden (Standard ist 5000 Zeilen. Es ist besser, ein gewisses Limit zu haben, damit die Benutzer die DB-Engine nicht überlasten)';
$string['reports'] = 'Berichte';
$string['reportscapabilities'] = 'Berechtigungsbericht';
$string['reportscapabilities_summary'] = 'Nutzer mit der Möglichkeit moodle/site:viewreports aktiviert';
$string['reportsincategory'] = '2) Wählen Sie einen Bericht aus der Liste';
$string['reporttable'] = 'Bericht Tabelle';
$string['reporttable_help'] = '<p>Dies ist die Breite der Tabelle in der die Ergebnisse angezeigt werden.</p> <p>Wenn Sie ein Template benutzen wird diese Option nicht verwendet.</p>';
$string['reporttableui'] = 'Berichtstabelle Benutzeroberfläche';
$string['reporttableuiinfo'] = 'Zeigen Sie die Berichtstabelle an als: Einfache scrollbare HTML-Tabelle, jQuery mit Spaltensortierung oder DataTables JS-Bibliothek (Spaltensortierung, fester Header, Suche, Seitenumbruch...)';
$string['repository'] = 'Repository für Berichte';
$string['repository_help'] = 'Sie können Beispielberichte aus einem öffentlichen gemeinsamen Repository importieren.

Bitte beachten Sie, dass die Anzahl der Aufrufe an das Repository täglich begrenzt ist.

Wenn die Verbindung zum Repository nicht funktioniert, können Sie hier <a href="https://github.com/jleyva/moodle-configurable_reports_repository" target="_blank">https://github.com/jleyva/moodle-configurable_reports_repository</a> einen Bericht manuell herunterladen und ihn dann mit der unten angezeigten Funktion "Bericht importieren" importieren';
$string['role'] = 'Rolle';
$string['roleincourse'] = 'Nutzer mit der/n gewählten Rolle/n im Kurs';
$string['roleusersn'] = 'Anzahl der Nutzer mit der Rolle...';
$string['searchtext'] = 'Text suchen';
$string['semester'] = 'Semester (Hebräisch)';
$string['serieid'] = 'Datenreihe';
$string['sessionlimittime'] = 'Zeit zwischen den Klicks (in Minuten)';
$string['sessionlimittime_help'] = 'Die Zeit zwischen Klicks definiert, ob zwei Klicks Teil derselben Sitzung angehören oder nicht.';
$string['setcourseid'] = 'Kursid setzen';
$string['sharedsqlrepository'] = 'Gemeinsames SQL-Repository';
$string['sharedsqlrepositoryinfo'] = 'Name des GitHub-Kontoinhabers + Schrägstrich + Repository-Name';
$string['sqlsecurity'] = 'SQL Sicherheit';
$string['sqlsecurityinfo'] = 'Deaktiviere das Ausführen von SQL-Abfragen, mit Anweisungen zum Einfügen von Daten';
$string['sqlsyntaxhighlight'] = 'SQL-Syntax hervorheben';
$string['sqlsyntaxhighlightinfo'] = 'SQL-Syntax im Code-Editor hervorheben (CodeMirror JS-Bibliothek)';
$string['startendtime'] = 'Start/End-Datumfilter';
$string['starttime'] = 'Startdatum';
$string['stat'] = 'Statistik';
$string['statsactiveenrolments'] = 'Aktive(letzte Woche) Einschreibungen';
$string['statslogins'] = 'Logins auf der Plattform';
$string['statstotalenrolments'] = 'Alle Einschreibungen';
$string['student'] = 'Student';
$string['subcategories'] = 'Kategorie (Einschließlich Unterkategorien)';
$string['sum'] = 'Summe';
$string['tablealign'] = 'Tabelle Ausrichtung';
$string['tablecellpadding'] = 'Tabellen Zellfüllung';
$string['tablecellspacing'] = 'Tabellen Zellzwischenraum';
$string['tableclass'] = 'Tabellen Klasse';
$string['tablewidth'] = 'Tabellen Breite';
$string['template'] = 'Template';
$string['template_marks'] = 'Template Markierungen';
$string['template_marks_help'] = '<p>Sie können folgende Platzhalter im Template benutzen:</p> <ul> <li>##reportname## - um den Templatenamen ein zufügen</li> <li>##reportsummary## - um die Template Zusammenfassung einzufügen</li> <li>##graphs## - um Diagramme einzufügen</li> <li>##exportoptions## - um die Exportfunktionen einzufügen</li> <li>##calculationstable## - um die Berechnungstabelle einzufügen</li> <li>##pagination## - um die Seiten Nummerierung einzufügen </li> </ul>';
$string['templaterecord'] = 'Vorlage speichern';
$string['timeinterval'] = 'Zeitintervall';
$string['timeline'] = 'Zeitlinie';
$string['timemode'] = 'Zeitmodus';
$string['totalrecords'] = 'Gesamtzahl der Datensätze = {$a->totalrecords}';
$string['type'] = 'Typ des Berichts';
$string['typeofreport'] = 'Typ des Berichts';
$string['typeofreport_help'] = 'Wählen Sie die Art des Reports, den Sie erstellen wollen.';
$string['user'] = 'Kurs-Teilnehmer (id)';
$string['usercompletion'] = 'Abschlussstatus des Benutzers im Kurs';
$string['usercompletionsummary'] = 'Status des Kursabschlusses';
$string['userfield'] = 'Nutzerprofilfeld';
$string['userfieldorder'] = 'Nutzerfeld Sortierung';
$string['usermodactions'] = 'Nutzermodul Aktionen';
$string['usermodoutline'] = 'Nutzermodul Übersichtsstatistiken';
$string['users'] = 'Systembenutzer (id)';
$string['usersincohorts'] = 'Benutzer, die Mitglied einer/mehrerer globalen Gruppen sind';
$string['usersincohorts_summary'] = 'Nur die Benutzer, die Mitglieder der ausgewählten globalen Gruppen sind';
$string['usersincoursereport'] = 'Jeder Nutzer des Kurses';
$string['usersincoursereport_summary'] = 'Jeder Nutzer des Kurses';
$string['usersincurrentcourse'] = 'Nutzer des Kurses';
$string['usersincurrentcourse_summary'] = 'Nutzer mit der ausgewählten Rolle im Kurs';
$string['userstats'] = 'Nutzerstatistiken';
$string['value'] = 'Wert';
$string['value_fields'] = 'Wertfelder';
$string['value_fields_help'] = 'Felder, die in der Grafik dargestellt werden sollen. Mit Strg+Klick (Cmd+Klick auf Mac) können Sie mehrere auswählen. Wenn Sie das Feld Beschriftung oder ein Feld mit nicht-numerischen Werten auswählen, wird es ignoriert.';
$string['viewreport'] = 'Bericht ansehen';
$string['width'] = 'Breite';
$string['xandynotequal'] = 'X- und Y-Achse müssen unterschiedlich sein';
$string['xaxis'] = 'X-Achse';
$string['yaxis'] = 'Y-Achse';
$string['yearhebrew'] = 'Jahr (hebräisch)';
$string['yearnumeric'] = 'Jahr (numerisch)';
$string['years'] = 'Jahr (numerisch)';
$string['youmustselectarole'] = 'Mindestens eine Rolle wird benötigt';
