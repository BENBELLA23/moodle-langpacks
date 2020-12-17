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
 * Strings for component 'assign', language 'sv', version '3.8'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Uppgifter att bevaka';
$string['addattempt'] = 'Tillåt ett nytt försök';
$string['addnewattempt'] = 'Lägg till ett nytt försök';
$string['addnewattempt_help'] = 'Detta kommer att skapa en ny tom inlämning för dig att arbeta på.';
$string['addnewattemptfromprevious'] = 'Lägg till ett nytt försök baserat på tidigare inlämning';
$string['addnewattemptfromprevious_help'] = 'Detta kommer att kopiera innehållet i din tidigare inlämning till en ny inlämning som du kan arbeta med.';
$string['addnewuseroverride'] = 'Lägg till åsidosättande av användare';
$string['addsubmission'] = 'Lägg till din inlämningsuppgift';
$string['addsubmission_help'] = 'Du har inte gjort någon inlämning ännu.';
$string['allocatedmarker'] = 'Tilldelade Bedömare';
$string['allocatedmarker_help'] = 'Bedömare som är tilldelad för denna uppgift';
$string['allowsubmissions'] = 'Tillåt användaren att göra inlämningar till denna inlämningsuppgift.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Detaljer om inlämningsuppgiften samt inlämningsformuläret kommer att vara tillgängligt från <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Tillåt inlämning från';
$string['allowsubmissionsfromdate_help'] = 'Om aktiverat kan elever inte lämna in före detta datum. Om inaktiverat kan elever starta inlämning omedelbart.';
$string['allowsubmissionsfromdatesummary'] = 'Denna inlämningsuppgift kommer att tillåta inlämning från <strong>{$a}</strong>';
$string['allowsubmissionsshort'] = 'Tillåt ändringar av inlämning';
$string['alwaysshowdescription'] = 'Visa alltid beskrivning';
$string['alwaysshowdescription_help'] = 'Om inaktiverat kommer uppgiftsbeskrivningen ovan att vara synlig för elever först vid datumet "Tillåt inlämning från och med".';
$string['applytoteam'] = 'Tillämpa betyg och återkoppling för hela gruppen';
$string['assign:addinstance'] = 'Lägg till en ny uppgift';
$string['assign:editothersubmission'] = 'Redigera annan students inlämning';
$string['assign:exportownsubmission'] = 'Exportera egna inskickade bidrag';
$string['assign:grade'] = 'Betygssätt uppgift';
$string['assign:grantextension'] = 'Tillåt förlängning';
$string['assign:manageallocations'] = 'Hantera bedömare som tilldelats uppgifter';
$string['assign:managegrades'] = 'Granska och godkänn betyg';
$string['assign:releasegrades'] = 'Godkänn betyg';
$string['assign:revealidentities'] = 'Avslöja studentidentiteter';
$string['assign:reviewgrades'] = 'Granska betyg';
$string['assign:showhiddengrader'] = 'Se identiteten för en dold betygssättare';
$string['assign:submit'] = 'Skicka in uppgift';
$string['assign:view'] = 'Visa uppgift';
$string['assign:viewgrades'] = 'Visa betyg/omdömen';
$string['assignfeedback'] = 'Insticksmodul för återkoppling';
$string['assignfeedbackpluginname'] = 'Insticksmodul för återkoppling';
$string['assignmentisdue'] = 'Inlämningstiden har gått ut.';
$string['assignmentmail'] = '{$a->grader} har gett återkoppling på din inlämning \'{$a->assignment}\' Du kan se återkopplingen bifogad till din inlämning: {$a->url}';
$string['assignmentmailhtml'] = '<p>{$a->grader} har gett återkoppling på din inlämning <i>\'{$a->assignment}\'</i></p>
<p>Du kan se återkopplingen bifogad till <a href="{$a->url}">din inlämning</a>.</p>';
$string['assignmentmailsmall'] = '{$a->grader} har gett återkoppling på din inlämning \'{$a->assignment}\' Du kan se återkopplingen bifogad till din inlämning';
$string['assignmentname'] = 'Uppgiftens namn';
$string['assignmentplugins'] = 'Pluginmodul för inlämningsuppgift';
$string['assignmentsperpage'] = 'Inlämningsuppgifter per sida';
$string['assignsubmission'] = 'Insticksmodul för inlämning';
$string['assignsubmissionpluginname'] = 'Insticksmodul för inlämning';
$string['attemptheading'] = 'Försök{$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Tidigare försök';
$string['attemptnumber'] = 'Försök nummer';
$string['attemptreopenmethod'] = 'Försök återupptas';
$string['attemptreopenmethod_help'] = 'Bestämmer hur studentens inlämningar kan öppnas upp igen för ny inlämning .

Tillgängliga alternativen är:

Aldrig: Studentens inlämning kan inte öppnas upp på nytt.

Manuellt: Studentens inlämning kan öppnas upp av en lärare.

Automatiskt tills godkänd: Studentens inlämning öppnas upp per automatik tills studentens betyg motsvarar godkänd i betygsrapport för den specifika uppgiften';
$string['attemptreopenmethod_manual'] = 'Manuellt';
$string['attemptreopenmethod_none'] = 'Aldrig';
$string['attemptreopenmethod_untilpass'] = 'Automatiskt tills passerat';
$string['attemptsettings'] = 'Inställningar försök';
$string['availability'] = 'Tillgänglighet';
$string['backtoassignment'] = 'Tillbaka till inlämningsuppgift';
$string['batchoperationconfirmaddattempt'] = 'Tillåt nytt försök för valda inlämningar?';
$string['batchoperationconfirmgrantextension'] = 'Tillåt en förlängning till alla valda inlämningar?';
$string['batchoperationconfirmlock'] = 'Lås alla valda inlämningar?';
$string['batchoperationconfirmreverttodraft'] = 'Återställ valda inlämningar till utkast?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Definiera tilldelning av bedömare för alla valda inlämningar?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Definiera arbetsflöde för bedömning för alla valda inlämningar?';
$string['batchoperationconfirmunlock'] = 'Lås upp alla valda inlämningar?';
$string['batchoperationlock'] = 'lås inlämningar';
$string['batchoperationreverttodraft'] = 'återställ inlämningar till utkast';
$string['batchoperationsdescription'] = 'Med valda...';
$string['batchoperationunlock'] = 'lås upp inlämningar';
$string['batchsetallocatedmarker'] = 'Definiera tilldelning av bedömare för {$a} valda användare (s).';
$string['batchsetmarkingworkflowstateforusers'] = 'Definiera arbetsflöde för {$a} selected user(s).';
$string['blindmarking'] = 'Anonym rättning';
$string['blindmarking_help'] = 'Anonym rättning döljer identiteten på de elever som rättas. Inställningen Anonym rättning kommer att vara låst så snart en inlämning eller en rättning gjorts i relation till denna inlämningsuppgift.';
$string['changeuser'] = 'Gå till en annan användare';
$string['choosegradingaction'] = 'Betygssättningsåtgärd';
$string['choosemarker'] = 'Välj ...';
$string['chooseoperation'] = 'Välj funktion';
$string['comment'] = 'Kommentar';
$string['completionsubmit'] = 'Eleven måste lämna in till denna aktivitet för att fullfölja den';
$string['configshowrecentsubmissions'] = 'Alla kan se notiser om inskickade uppgifter in rapporterna för senaste aktivitet.';
$string['confirmbatchgradingoperation'] = 'Är du säker på att du vill {$a->operation} för {$a->count} elever?';
$string['confirmsubmission'] = 'Är du säker på att du vill lämna in ditt arbete för betygssättning? Du kommer inte längre att kunna göra några ändringar';
$string['conversionexception'] = 'Kunde inte konvertera inlämningsuppgift. Undantaget var: {$a}.';
$string['couldnotconvertgrade'] = 'Kunde inte konvertera betyg för inlämningsuppgift för användare {$a}.';
$string['couldnotconvertsubmission'] = 'Kunde inte konvertera inlämning för användare {$a}.';
$string['couldnotcreatecoursemodule'] = 'Kunde inte skapa kursmodul.';
$string['couldnotcreatenewassignmentinstance'] = 'Kunde inte skapa ny instans av inlämningsuppgift.';
$string['couldnotfindassignmenttoupgrade'] = 'Kunde inte hitta gammal instans av inlämningsuppgift att uppgradera.';
$string['currentattempt'] = 'Detta är försök {$a}.';
$string['currentattemptof'] = 'Detta är försök {$a->attemptnumber} ( {$a->maxattempts} försök tillåten).';
$string['currentgrade'] = 'Aktuellt betyg/omdöme i betygskatalogen';
$string['cutoffdate'] = 'Avstängningsdatum';
$string['cutoffdate_help'] = 'Om satt kommer inlämningsuppgiften inte att acceptera inlämningar efter detta datum utan att det finns en förlängningsperiod.';
$string['cutoffdatefromdatevalidation'] = 'Avstängningsdatum måste vara senare än datum för tillåt inlämning från.';
$string['cutoffdatevalidation'] = 'Stängningsdatum måste vara senare än slutdatum för inlämning.';
$string['defaultsettings'] = 'Förvalda inställningar för inlämningsuppgift';
$string['defaultsettings_help'] = 'Dessa inställningar anger vad som är förvalt för alla nya inlämningsuppgifter.';
$string['defaultteam'] = 'Förvald grupp';
$string['deleteallsubmissions'] = 'Ta bort alla inlämningar';
$string['description'] = 'Beskrivning';
$string['disabled'] = 'Inaktiverad';
$string['downloadall'] = 'Ladda ner alla inlämningar';
$string['duedate'] = 'Slutdatum/tid';
$string['duedate_help'] = 'Detta är sluttiden för inlämning. Inlämningar kommer fortfarande att vara möjliga efter detta datum men kommer då att märkas som sena. För att förhindra inlämning efter ett visst datum sätt ett avstängningsdatum.';
$string['duedateno'] = 'Inget slutdatum/tid';
$string['duedatereached'] = 'Slutdatum för denna inlämningsuppgift har nu passerat';
$string['duedatevalidation'] = 'Slutdatum måste vara efter datum för tillåt inlämning från.';
$string['editaction'] = 'Åtgärder...';
$string['editattemptfeedback'] = 'Redigera betyg och feedback för försök nr {$a}.';
$string['editingpreviousfeedbackwarning'] = 'Du redigerar feedback av ett tidigare försök. Detta är försök nr {$a->attemptnumber} av totalt{$a->totalattempts}.';
$string['editingstatus'] = 'Redigerar status';
$string['editsubmission'] = 'Redigera min inlämning';
$string['editsubmission_help'] = 'Gör ändringar i din inlämning';
$string['editsubmissionother'] = 'Redigera inlämning för {$a}';
$string['enabled'] = 'Aktiverad';
$string['errornosubmissions'] = 'Det finns inga inskickade bidrag att ladda ner';
$string['errorquickgradingvsadvancedgrading'] = 'Betygen sparades inte eftersom denna inlämningsuppgift använder för närvarande avancerad betygssättning';
$string['errorrecordmodified'] = 'Betygen sparades inte eftersom någon har modifierat en eller flera poster mer nyligt än när du laddade sidan.';
$string['eventallsubmissionsdownloaded'] = 'Alla inlämningar laddas ner.';
$string['eventassessablesubmitted'] = 'En inlämning har inlämnats';
$string['eventextensiongranted'] = 'Förlängd inlämningstid har beviljats';
$string['eventfeedbackupdated'] = 'Återkoppling uppdaterad';
$string['eventfeedbackviewed'] = 'Återkoppling läst';
$string['eventgradingformviewed'] = 'Betygsform visades';
$string['eventgradingtableviewed'] = 'Betygstabell visades';
$string['eventidentitiesrevealed'] = 'Identiteterna har avslöjats';
$string['eventmarkerupdated'] = 'Den tilldelade bedömare har uppdaterats.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Sidan med avslöja identiteter visades';
$string['eventstatementaccepted'] = 'Användaren har accepterat meddelandet om inlämning.';
$string['eventsubmissioncreated'] = 'Inlämning skapades';
$string['eventsubmissionduplicated'] = 'Användaren duplicerade sin inlämning';
$string['eventsubmissionformviewed'] = 'Inlämningsformulär visades';
$string['eventsubmissiongraded'] = 'Inlämningen har fått betyg';
$string['eventsubmissionlocked'] = 'Inlämningar har låsts för en användare.';
$string['eventsubmissionstatusupdated'] = 'Status för inlämning har uppdaterats.';
$string['eventsubmissionstatusviewed'] = 'Status för inlämning har visats.';
$string['eventsubmissionunlocked'] = 'Inlämningar har låsts upp för en användare.';
$string['eventsubmissionupdated'] = 'Inlämning uppdaterad';
$string['eventsubmissionviewed'] = 'Inlämning sett.';
$string['eventworkflowstateupdated'] = 'Status för arbetsflödet har uppdaterats.';
$string['extensionduedate'] = 'Förlängning av slutdatum';
$string['extensionnotafterduedate'] = 'Förlängningsdatum måste vara senare än slutdatum';
$string['extensionnotafterfromdate'] = 'Förlängningsdatum måste vara efter datum för tillåt inlämning från';
$string['feedback'] = 'Återkoppling';
$string['feedbackavailablehtml'] = '<p>{$a->username} har gett återkoppling på din inlämning <i>\'{$a->assignment}\'</i></p>
<p>Du kan se återkopplingen bifogad till <a href="{$a->url}">din inlämning</a>.</p>';
$string['feedbackavailablesmall'] = '{$a->username} har gett återkoppling för inlämningsuppgift {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} har gett återkoppling på din inlämning \'{$a->assignment}\' Du kan se återkopplingen bifogad till din inlämning: {$a->url}';
$string['feedbackplugin'] = 'Insticksmodul för återkoppling';
$string['feedbackpluginforgradebook'] = 'Insticksmodul för återkoppling som kommer att skicka kommentarer till betygsboken';
$string['feedbackpluginforgradebook_help'] = 'Endast en insticksmodul för återkoppling kan skicka återkopplingar till betygsboken.';
$string['feedbackplugins'] = 'Pluginmoduler för återkoppling';
$string['feedbacksettings'] = 'Inställningar för återkoppling';
$string['feedbacktypes'] = 'Feedback typer';
$string['filesubmissions'] = 'Filinlämningar';
$string['filter'] = 'Filter';
$string['filtergrantedextension'] = 'Beviljad förlängning av inlämningstiden';
$string['filternone'] = 'Inga filter';
$string['filternotsubmitted'] = 'Ej inlämnat';
$string['filterrequiregrading'] = 'Behöver betygssättas';
$string['filtersubmitted'] = 'Inskickad';
$string['gradeabovemaximum'] = 'Betyg måste bli mindre än eller lika med {$a}.';
$string['gradebelowzero'] = 'Betyg måste vara större än eller lika med noll.';
$string['gradecanbechanged'] = 'Betyg kan ändras';
$string['gradechangessaveddetail'] = 'Ändringar av betyg och återkoppling har sparats.';
$string['graded'] = 'Betygssatt';
$string['gradedby'] = 'Betygssatt av';
$string['gradedfollowupsubmit'] = 'Betygssatt - uppföljning av inlämningen mottagen';
$string['gradedon'] = 'Betygssatt den';
$string['gradelocked'] = 'Detta betyg är låst eller skrevs över i betygsboken/betygsrapporten.';
$string['gradeoutof'] = 'Betyg ur {$a}';
$string['gradeoutofhelp'] = 'Betyg';
$string['gradeoutofhelp_help'] = 'Ange betyget för elevens inlämnade uppgift här. Du kan använda decimaler.';
$string['gradersubmissionupdatedhtml'] = '{$a->username} har uppdaterat sin inskickade uppgift för <i>\'{$a->assignment}\' den {$a->timeupdated}</i><br /><br />Den är <a href="{$a->url}"> tillgänglig på webbplatsen.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} har uppdaterat sin inlämning för inlämningsuppgift {$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username} har uppdaterat sina inskickade uppgifter för
 \'{$a->assignment}\' den at {$a->timeupdated}

Den är tillgänglig här:

   {$a->url}';
$string['gradestudent'] = 'Betygssätt elev: (id={$a->id}, fullt namn={$a->fullname}).';
$string['gradeuser'] = 'Betyg {$a}';
$string['grading'] = 'Betygssättning';
$string['gradingchangessaved'] = 'Ändringar i betygssättning sparades';
$string['gradingduedate'] = 'Påminn mig att bedöma uppgiften senast';
$string['gradingduefromdatevalidation'] = 'Datum för senaste bedömning kan inte ligga före tidigaste inlämningsdatum.';
$string['gradingmethodpreview'] = 'Kriterium för betygssättning';
$string['gradingoptions'] = 'Alternativ';
$string['gradingstatus'] = 'Status';
$string['gradingstudent'] = 'Betygssättning student';
$string['gradingsummary'] = 'Betygssammanställning';
$string['grantextension'] = 'Tillåt förlängning';
$string['grantextensionforusers'] = 'Tillåt förlängning för {$a} elever';
$string['groupsubmissionsettings'] = 'Gruppinlämning inställningar';
$string['hiddenuser'] = 'Deltagare';
$string['hideshow'] = 'Döjl/Visa';
$string['instructionfiles'] = 'Instruktionsfiler';
$string['introattachments'] = 'Tillägsfiler';
$string['introattachments_help'] = 'Filer som kan användas för uppgiften, t.ex. mallar kan bifogas. Filerna kommer att ligga under beskrivningen av uppgiften och kan laddas ner därifrån .';
$string['invalidfloatforgrade'] = 'Det givna betyget kunde inte förstås: {$a}';
$string['invalidgradeforscale'] = 'Det givna betyget var inte giltigt för den nuvarande skalan';
$string['lastmodifiedgrade'] = 'Senast modifierat (betyg)';
$string['lastmodifiedsubmission'] = 'Senast modifierat (inlämning)';
$string['latesubmissions'] = 'Sen inlämning';
$string['latesubmissionsaccepted'] = 'Tillåtet till {$a}';
$string['locksubmissionforstudent'] = 'Förhindra fler inlämningar från elev: (id={$a->id}, hela namnet={$a->fullname}).';
$string['locksubmissions'] = 'Lås inlämningar';
$string['manageassignfeedbackplugins'] = 'Hantera pluginmoduler för återkoppling till inlämningsuppgift';
$string['manageassignsubmissionplugins'] = 'Hantera pluginmoduler för inlämning av inlämningsuppgift';
$string['marker'] = 'Bedömare';
$string['markerfilter'] = 'Filtrera Bedömare';
$string['markerfilternomarker'] = 'Ingen bedömare';
$string['markingallocation'] = 'Användning tilldelning av bedömare';
$string['markingallocation_help'] = 'Om aktiverad tillsammans med arbetsflöde för bedömning, kan bedömare tilldelas särskilda studenter.';
$string['markingworkflow'] = 'Använd arbetsflöde för bedömning';
$string['markingworkflow_help'] = 'Om aktiverad, kommer bedömningen att gå igenom en serie av arbetssteg (flöde) innan den släpps till studenter. Detta skapar en möjlighet för flera omgångar av bedömningar och gör det även möjligt att bedömningar släpps till alla studenter på samma gång.';
$string['markingworkflowstate'] = 'Markera status för arbetsflöde';
$string['markingworkflowstate_help'] = 'Möjliga status för arbetsflöde kan omfatta (beroende på din behörighet):
* Inte bedömd- bedömaren har inte börjat
* Under bedömning - bedömaren har börjat markören men är inte färdig ännu
* Bedömning klar - bedömaren är färdig men kan behöva gå tillbaka för kontroll / korrigeringar
* I review - bedömningen är nu hos den ansvariga läraren för kvalitetskontroll
* Redo för release - den ansvariga läraren är nöjd med bedömningen men väntar med att ge eleverna tillgång till bedömningen
* Release - studenten kan komma åt betygen / feedback';
$string['markingworkflowstateinmarking'] = 'Under bedömning';
$string['markingworkflowstateinreview'] = 'Under granskning';
$string['markingworkflowstatenotmarked'] = 'Inte bedömd';
$string['markingworkflowstatereadyforrelease'] = 'Redo för';
$string['markingworkflowstatereadyforreview'] = 'Bedömning färdig';
$string['markingworkflowstatereleased'] = 'Released';
$string['maxattempts'] = 'Maximalt antal försök';
$string['maxattempts_help'] = 'Det maximala antalet försök av inlämningar som kan göras av en elev. Efter att studenten har laddat upp detta detta antal försök har han/hon inte möjlighet att ladda upp ett nytt försök.';
$string['maxgrade'] = 'Maximalt betyg';
$string['messageprovider:assign_notification'] = 'Notis för inlämningsuppgift';
$string['modulename'] = 'Uppgift';
$string['modulename_help'] = 'Aktivitetsmodulen inlämningsuppgift låter lärare kommunicera uppgifter, samla arbete och sätta betyg med återkoppling.

Elever kan lämna in digitalt material (filer) såsom dokument från ordbehandlingsprogram, kalkylblad, bilder eller ljud- och videofiler. Alternativt eller som tillägg kan inlämningsuppgiften kräva att eleverna skriver test direkt i testredigeraren. En inlämningsuppgift kan även användas för att påminna elever om en uppgift utanför webbplatsen, som de ska utföra utan att vara inloggade.

Vid granskning av inlämningsuppgifter kan lärare ge kommentarer för återkoppling samt ladda upp filer såsom rättningsmarkerade elevuppgifter, dokument med kommentarer eller talade kommentarer (ljudfiler). Inlämningsuppgifter kan betygssättas med numerisk eller anpassad skala eller med en avancerad betygsmetod såsom en bedömningsmatris. Slutgiltiga betyg lagras i betygsboken.';
$string['modulenameplural'] = 'Uppgifter';
$string['moreusers'] = '{$a} mer ...';
$string['multipleteams'] = 'Medlem av mer än en grupp';
$string['multipleteams_desc'] = 'Denna inlämning är en gruppuppgift. Just nu är du medlem i flera grupper. För att kunna göra en inlämning måste du ingår i endast en grupp. V.g. be din lärare att ändra din grupptillhörighet.';
$string['multipleteamsgrader'] = 'Medlem av mer än en grupp, kan därför inte ladda upp fil';
$string['mysubmission'] = 'Min inlämning:';
$string['newsubmissions'] = 'Uppgifterna är inskickade';
$string['noattempt'] = 'Inga försök';
$string['nofiles'] = 'Inga filer.';
$string['nograde'] = 'Inget betyg.';
$string['nolatesubmissions'] = 'Sena inlämningar accepteras inte.';
$string['nomoresubmissionsaccepted'] = 'Endast tillåtet för deltagare som har beviljats en förlängning';
$string['noonlinesubmissions'] = 'Denna inlämningsuppgift kräver inte att du lämnar in något online.';
$string['nosavebutnext'] = 'Nästa';
$string['nosubmission'] = 'Inget har lämnats in för denna inlämningsuppgift';
$string['nosubmissionsacceptedafter'] = 'Inga inlämningar tillåts efter';
$string['noteam'] = 'Inte medlem i någon grupp';
$string['noteam_desc'] = 'Denna inlämning är en gruppuppgift. Just nu är du inte medlem i någon grupp. V.g. be din lärare att lägga in dig i en grupp.';
$string['noteamgrader'] = 'Inte medlem i någon grupp, kan därför inte ladda upp fil';
$string['notgraded'] = 'Ej betygssatt';
$string['notgradedyet'] = 'Ännu ej bedömd';
$string['notifications'] = 'Notiser';
$string['notsubmittedyet'] = 'Ännu inte inskickade uppgifter';
$string['nousersselected'] = 'Ingen användare vald';
$string['numberofdraftsubmissions'] = 'Utkast';
$string['numberofparticipants'] = 'Deltagare';
$string['numberofsubmissionsneedgrading'] = 'Behöver betygssättas';
$string['numberofsubmittedassignments'] = 'Inlämnad';
$string['numberofteams'] = 'Grupper';
$string['offline'] = 'Ingen inlämning online krävs';
$string['open'] = 'Öppen';
$string['outlinegrade'] = 'Betyg: {$a}';
$string['outof'] = '{$a->current} av totalt {$a->total}';
$string['overdue'] = '<font color="red">Inlämningsuppgiften är försenad med: {$a}</font>';
$string['page-mod-assign-view'] = 'Huvudsidan för modulen inlämningsuppgift samt sidan för inlämning';
$string['page-mod-assign-x'] = 'Varje sida för modulen inlämningsuppgift';
$string['participant'] = 'Deltagare';
$string['pluginadministration'] = 'Administration av inlämningsuppgift';
$string['pluginname'] = 'Inlämningsuppgift';
$string['preventsubmissionnotingroup'] = 'Kräver gruppen att lämna in';
$string['preventsubmissionnotingroup_help'] = 'Om aktiverat , kan användare som inte är medlemmar i en grupp inte lämna in';
$string['preventsubmissions'] = 'Förhindra användaren från att göra fler inlämningar till denna inlämningsuppgift.';
$string['preventsubmissionsshort'] = 'Förhindra ändringar av inlämnad uppgift';
$string['previous'] = 'Tidigare';
$string['quickgrading'] = 'Snabb betygssättning';
$string['quickgrading_help'] = 'Snabb betygssättning medger att du sätter betyg (och resultat) direkt i inlämningsöversikten. Snabb betygssättning är inte kompatibelt med avancerad betygssättning och rekommenderas heller inte då det finns multipla poängskalor.';
$string['quickgradingchangessaved'] = 'Betygsändringarna sparades';
$string['quickgradingresult'] = 'Snabb betygssättning';
$string['recordid'] = 'Identifierare';
$string['removesubmission'] = 'Ta bort inlämning';
$string['removesubmissionforstudent'] = 'Ta bort inlämning för deltagaren: (id={$a->id}, fullname={$a->fullname}).';
$string['requireallteammemberssubmit'] = 'Kräv att alla gruppmedlemmar lämnar in';
$string['requireallteammemberssubmit_help'] = 'Om detta är aktiverat måste alla elever i elevgruppen ha klickat på skicka in knappen innan gruppens inlämningsuppgift kommer anses vara inlämnad. Om inaktiverat kommer gruppinlämningen anses som inlämnad så snart som någon av gruppmedlemmarna klickar på knappen lämna in.';
$string['requiresubmissionstatement'] = 'Kräv att elever godkänner inlämningsförsäkran';
$string['requiresubmissionstatement_help'] = 'Kräv att deltagarna accepterar inlämningsförsäkran för alla inlämningar till den här uppgiften.';
$string['revealidentities'] = 'Avslöja elevidentiteter';
$string['revealidentitiesconfirm'] = 'Är du säker på att du vill avslöja elevidentiteter för denna inlämningsuppgift. Detta kan inte ångras. När elevidentiteterna har avslöjats kommer rättningen att släppas till betygsboken.';
$string['reverttodraft'] = 'Återställ inlämningen till status utkast.';
$string['reverttodraftforstudent'] = 'Återställ inlämningen till status utkast för elev: (id={$a->id}, fullt namn={$a->fullname}).';
$string['reverttodraftshort'] = 'Återställ inlämningen till utkast';
$string['reviewed'] = 'Granskad';
$string['saveallquickgradingchanges'] = 'Spara alla ändringar för snabb betygssättning';
$string['saveandcontinue'] = 'Spara och fortsätt';
$string['savechanges'] = 'Spara';
$string['savegradingresult'] = 'Betyg';
$string['savenext'] = 'Spara och visa nästa';
$string['scale'] = 'Skala';
$string['selectedusers'] = 'Valda användare';
$string['selectlink'] = 'Välj...';
$string['selectuser'] = 'Välj {$a}';
$string['sendlatenotifications'] = 'Meddela betygssättare om sena inlämningar';
$string['sendlatenotifications_help'] = 'Om aktiverad kommer betygssättare (oftast lärare) att motta en notis närhelst en elev skickar in en inlämningsuppgift sent. Inställningarna för notiserna kan konfigureras.';
$string['sendnotifications'] = 'Meddela betygssättare om inlämningar';
$string['sendnotifications_help'] = 'Om aktiverad kommer betygssättare (oftast lärare) att motta en notis närhelst en elev skickar in en inlämningsuppgift, tidigt, i rätt tid eller för sent. Inställningarna för notiserna kan konfigureras.';
$string['sendstudentnotifications'] = 'Meddela studenter';
$string['sendstudentnotifications_help'] = 'Om aktiverad,  får studenterna ett meddelande om det uppdaterade betyget eller återkopplingen.';
$string['sendstudentnotificationsdefault'] = 'Standardinställningen för "Meddela studenter"';
$string['sendstudentnotificationsdefault_help'] = 'Ange standardvärdet för "Meddela eleverna" i  kryssrutan på betygsformuläret.';
$string['sendsubmissionreceipts'] = 'Skicka inlämningskvittens till elever';
$string['sendsubmissionreceipts_help'] = 'Omkopplaren aktiverar bekräftelse på inlämningen för elever. Eleven kommer att få ett meddelande varje gång denne genomfört en inlämning.';
$string['setmarkerallocationforlog'] = 'Välj tilldelning av bedömare:';
$string['setmarkingallocation'] = 'Välj den som ska bedöma';
$string['setmarkingworkflowstate'] = 'Välj status för arbetsflöde';
$string['setmarkingworkflowstateforlog'] = 'Välj status för arbetsflöde: (id={$a->id}, fullname={$a->fullname}, state={$a->state}).';
$string['settings'] = 'Inställningar för inlämningsuppgift';
$string['showrecentsubmissions'] = 'Visa aktuella inskickade uppgifter';
$string['status'] = 'Status';
$string['submission'] = 'Inskickad uppgift';
$string['submissioncopiedhtml'] = 'Du har gjort en kopia av din tidigare uppgiftsinlämning för <i>\'{$a->assignment}</i> &quot; <br /><br /> Du kan se status för ditt <a href="{$a->url}">uppgiftsinlämning</a> .';
$string['submissioncopiedsmall'] = 'Du har kopierat ditt tidigare uppgiftsinlämning för {$a->assignment}';
$string['submissioncopiedtext'] = 'Du har gjort en kopia av din tidigare uppgiftsinlämning för \'{$a->assignment} &quot;Du kan se status för ditt uppgiftsinlämning: {$a->url}';
$string['submissiondrafts'] = 'Kräv att elever klickar på knapp för lämna in';
$string['submissiondrafts_help'] = 'Om aktiverat måste elever klicka på knappen Lämna in för att markera sin inlämning som slutgiltig. Detta medger elever att ha utkast av sin inlämning i systemet. Om denna inställning ändras från Nej till Ja efter att elever redan har lämnat in kommer dessa inlämningar att betraktas som slutgiltiga.';
$string['submissioneditable'] = 'Elev kan ändra denna inlämning';
$string['submissionempty'] = 'Inget blev inlämnat';
$string['submissionlog'] = 'Student: {$a->fullname}, Status: {$a->status}';
$string['submissionmodifiedgroup'] = 'Denna inlämning har ändrats av någon annan. Var god lämna denna sida och försök igen.';
$string['submissionnotcopiedinvalidstatus'] = 'Inlämningen kopierades inte eftersom den har redigerats sedan den öppnades.';
$string['submissionnoteditable'] = 'Elev kan inte ändra denna inlämning';
$string['submissionnotready'] = 'Denna inlämningsuppgift är inte klar för inlämning:';
$string['submissionplugins'] = 'Pluginmoduler för inlämning';
$string['submissionreceipthtml'] = 'Du har lämnat in en inlämningsuppgift för \'<i>{$a->assignment}</i>\'<br /><br /> Se status för din <a href="{$a->url}">inlämnade uppgift</a>.';
$string['submissionreceiptotherhtml'] = 'Din uppgift för <i>\'{$a->assignment}</i> "har lämnats in. <br /><br /> Du kan se status på din <a href="{$a->url}">inlämning</a> .';
$string['submissionreceiptothersmall'] = 'Din uppgift för {$a->assignment} har lämnats in.';
$string['submissionreceiptothertext'] = 'Din uppgift för \'{$a->assignment} &quot;har lämnats in. Du kan se status på ditt inlämning: {$a->url}';
$string['submissionreceipts'] = 'Skicka inlämningsbekräftelser';
$string['submissionreceiptsmall'] = 'Du har lämnat in din uppgift för {$a->assignment}';
$string['submissionreceipttext'] = 'Du har lämnat in en uppgift för \'{$a->assignment}\'

Se status för din inlämnade uppgift:

 {$a->url}';
$string['submissionsclosed'] = 'Inlämning stängd';
$string['submissionsettings'] = 'Inställningar för inlämning';
$string['submissionslocked'] = 'Denna inlämningsuppgift accepterar inte inlämningar';
$string['submissionslockedshort'] = 'Ändringar av inlämning tillåts inte';
$string['submissionsnotgraded'] = 'Ej betygssatta inlämningar: {$a}';
$string['submissionstatement'] = 'Inlämningsförsäkran';
$string['submissionstatement_help'] = 'Inlämningsförsäkran';
$string['submissionstatementacceptedlog'] = 'Inlämningsförsäkran godkänt av användare {$a}';
$string['submissionstatementdefault'] = 'Denna inlämningsuppgift består av mitt eget arbete, förutom där jag bekräftat användning av andras arbete.';
$string['submissionstatus'] = 'Status för inlämning';
$string['submissionstatus_'] = 'Ingen inlämning';
$string['submissionstatus_draft'] = 'Utkast (ej inlämnad)';
$string['submissionstatus_marked'] = 'Betygssatt';
$string['submissionstatus_new'] = 'Ingen inlämning';
$string['submissionstatus_reopened'] = 'Återöppnad';
$string['submissionstatus_submitted'] = 'Inlämnad för betygssättning';
$string['submissionstatusheading'] = 'Status för inlämning';
$string['submissionsummary'] = '{$a->status}. Senast ändrad {$a->timemodified}';
$string['submissionteam'] = 'Grupp';
$string['submissiontypes'] = 'Inlämningstyper';
$string['submitaction'] = 'Lämna in';
$string['submitassignment'] = 'Skicka in uppgift';
$string['submitassignment_help'] = 'När denna inlämningsuppgift är inlämnad kommer du inte att kunna göra några fler ändringar.';
$string['submitforgrading'] = 'Skicka in för betygssättning';
$string['submitted'] = 'Inskickad';
$string['submittedearly'] = 'Inlämningsuppgift lämnades in {$a} tidigt';
$string['submittedlate'] = 'Inlämningsuppgift lämnades in {$a} sent';
$string['submittedlateshort'] = '{$a} sent';
$string['subplugintype_assignfeedback'] = 'Feedback plugin';
$string['subplugintype_assignfeedback_plural'] = 'Feedback plugins';
$string['subplugintype_assignsubmission'] = 'Inlämning plugin';
$string['subplugintype_assignsubmission_plural'] = 'Inlämning plugins';
$string['teamsubmission'] = 'Elever lämnar in i grupp';
$string['teamsubmission_help'] = 'Om aktiverat kommer elever att delas in i grupper baserat på den förvalda uppsättningen grupper eller en anpassad gruppindelning. En gruppinlämning kommer att delas mellan gruppmedlemmar och alla medlemmar i en grupp kommer att se varandras ändringar i inlämningen.';
$string['teamsubmissiongroupingid'] = 'Gruppering för elevgrupper';
$string['teamsubmissiongroupingid_help'] = 'Detta är grupperingen som inlämningsuppgiften kommer att använda för att hitta grupper för elevgrupper. Om ej satt kommer den förvalda uppsättningen av grupper att användas.';
$string['textinstructions'] = 'Instruktion för inlämningsuppgift';
$string['timemodified'] = 'Senast ändrad';
$string['timeremaining'] = 'Återstående tid';
$string['ungroupedusers'] = 'Inställningen "Kräv grupp för att göra inlämning" är aktiverad och vissa användare är antingen inte medlem i någon grupp, eller är medlem i mer än en grupp, så de kan inte lämna in uppgifter.';
$string['ungroupedusersoptional'] = 'Inställningen \'Studenter skickar in i grupp\' är inaktiverad och vissa användare är antingen inte medlem i någon grupp, eller är medlem i mer än en grupp. Var medveten om att dessa studenter kommer att lämna in som medlemmar i \'Standardgruppen\'.';
$string['unlimitedattempts'] = 'Obegränsad';
$string['unlimitedattemptsallowed'] = 'Obegränsad försök tillåtet.';
$string['unlocksubmissionforstudent'] = 'Tillåt inlämning för elev: (id={$a->id}, fulltnamn={$a->fullname}).';
$string['unlocksubmissions'] = 'Lås upp inlämningar';
$string['updategrade'] = 'Uppdatera betyg';
$string['updatetable'] = 'Spara och uppdatera tabell';
$string['upgradenotimplemented'] = 'Uppgradering inte implementerad i insticksmodul ({$a->type} {$a->subtype})';
$string['userextensiondate'] = 'Förlängning beviljad till: {$a}';
$string['usergrade'] = 'Användarbetyg';
$string['userswhoneedtosubmit'] = 'Användare som behöver lämna in: {$a}';
$string['validmarkingworkflowstates'] = 'Giltiga status för arbetsflöde';
$string['viewfeedback'] = 'Visa återkoppling';
$string['viewfeedbackforuser'] = 'Visa återkoppling för användare: {$a}';
$string['viewfull'] = 'Visa hela';
$string['viewfullgradingpage'] = 'Öppna hela betygssidan för att ge återkoppling';
$string['viewgradebook'] = 'Visa betygsbok';
$string['viewgrading'] = 'Visa/betygssätt alla inlämningar';
$string['viewgradingformforstudent'] = 'Visa betygssättningssida för elev: (id={$a->id}, fullt namn={$a->fullname}).';
$string['viewownsubmissionform'] = 'Visa egen inlämningssida.';
$string['viewownsubmissionstatus'] = 'Visa egen sida för inlämningsstatus.';
$string['viewrevealidentitiesconfirm'] = 'Visa bekräftelsesida för avslöja elevidentiteter.';
$string['viewsubmission'] = 'Visa inlämning';
$string['viewsubmissionforuser'] = 'Visa inlämning för användare: {$a}';
$string['viewsubmissiongradingtable'] = 'Visa tabell över betyg för inlämningar';
$string['viewsummary'] = 'Visa sammanfattning';
$string['workflowfilter'] = 'Filtrera arbetsflöde';
