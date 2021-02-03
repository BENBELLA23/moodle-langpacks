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
 * Strings for component 'backup', language 'sv', version '3.8'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Säkerhetskopieringen har slutförts';
$string['asyncbackupcompletebutton'] = 'Fortsätt';
$string['asyncbackupcompletedetail'] = 'Säkerhetskopieringen lyckades.<br>Du kan nå säkerhetskopian på <a href="{$a}">sidan för återställning.</a>';
$string['asyncbackuperror'] = 'Säkerhetskopieringen misslyckades';
$string['asyncbackuperrordetail'] = 'Säkerhetskopieringen har misslyckats. Kontakta systemadministratören.';
$string['asyncbackuppending'] = 'Väntande säkerhetskopiering';
$string['asyncbackupprocessing'] = 'Säkerhetskopieringen pågår';
$string['asyncbadexecution'] = 'Felaktig backupcontrollerkörning. Den är {$a} men de borde vara 2.';
$string['asynccheckprogress'] = 'Du kan kontrollera förloppet när som helst på <a href="{$a}">sidan för återställning</a>.';
$string['asyncemailenable'] = 'Aktivera notiser';
$string['asyncemailenabledetail'] = 'Om detta alternativ är aktivt kommer användare att få ett meddelande då en asynkron säkerhetskopiering eller återställning slutförts.';
$string['asyncgeneralsettings'] = 'Asynkron säkerhetskopiering/återställning';
$string['asyncmessagebody'] = 'Meddelande';
$string['asyncmessagebodydefault'] = 'Hej {user_firstname},<br/> Din {operation} (ID: {backupid}) lyckades. <br/><br/>Du kan nå den här: {link}.';
$string['asyncmessagebodydetail'] = 'Meddelande som ska skickas när en asynkron säkerhetskopiering eller återställning slutförts.';
$string['asyncmessagesubject'] = 'Ämne';
$string['asyncmessagesubjectdefault'] = 'Moodle {operation} lyckades.';
$string['asyncmessagesubjectdetail'] = 'Ämne för meddelande';
$string['asyncnowait'] = 'Du behöver inte vänta här eftersom processen kommer att fortsätta i bakgrunden.';
$string['asyncprocesspending'] = 'Väntande process';
$string['asyncrestorecomplete'] = 'Återställningsprocessen är slutförd';
$string['asyncrestorecompletebutton'] = 'Fortsätt';
$string['asyncrestorecompletedetail'] = 'Återställningen lyckades. Om du klickar på Fortsätt kommer du att flyttas vidare till <a href="{$a}">kursen med det återställda objektet.</a>';
$string['asyncrestoreerror'] = 'Återställningen misslyckades';
$string['asyncrestoreerrordetail'] = 'Återställningen har misslyckats. Kontakta systemadministratören.';
$string['asyncrestoreinprogress'] = 'Återställning pågår';
$string['asyncrestoreinprogress_help'] = 'Pågående asynkrona kursåterställningar visas här.';
$string['asyncrestorepending'] = 'Väntande återställning';
$string['asyncrestoreprocessing'] = 'Återställningen pågår';
$string['asyncreturn'] = 'Återgå till kurs';
$string['autoactivedescription'] = 'Välj om det skall göras automatisk säkerhetskopiering eller inte. Om manuell säkerhetskopiering väljs kommer automatisk säkerhetskopiering endast vara möjlig via CLI skript för automatiserad backup.
Säkerhetskopiering kan då göras manuellt på kommando prompten eller genom cron.';
$string['autoactivedisabled'] = 'Inaktiverad';
$string['autoactiveenabled'] = 'Aktiverad';
$string['autoactivemanual'] = 'Manuell';
$string['automatedbackupschedule'] = 'Schema';
$string['automatedbackupschedulehelp'] = 'Välj vilka dagar i veckan som automatiska säkerhetskopieringar ska genomföras.';
$string['automatedbackupsinactive'] = 'Webbplatsens administratör har inte aktiverat automatisk säkerhetskopiering.';
$string['automatedbackupstatus'] = 'Status för automatisk säkerhetskopiering.';
$string['automateddeletedays'] = 'Radera säkerhetskopior äldre än';
$string['automatedmaxkept'] = 'Maximalt antal säkerhetskopior att behålla';
$string['automatedmaxkepthelp'] = 'Specificerar det maximala antalet senaste säkerhetskopieringar som ska behållas för varje kurs. Äldre säkerhetskopior kommer automatiskt raderas.';
$string['automatedminkept'] = 'Minsta antal säkerhetskopior att behålla';
$string['automatedminkepthelp'] = 'Om säkerhetskopior äldre än ett angivet antal dagar raderas kan detta medföra att inaktiva kurser efter en tid har några säkerhetskopior. För att förhindra detta bör ett minsta antal säkerhetskopior att behålla anges.';
$string['automatedsettings'] = 'Inställningar för automatisk säkerhetskopiering';
$string['automatedsetup'] = 'Inställningar för automatisk säkerhetskopiering';
$string['automatedstorage'] = 'Lagring för automatisk säkerhetskopiering';
$string['automatedstoragehelp'] = 'Välj vilken plats som automatiska säkerhetskopior ska lagras på.';
$string['backupactivity'] = 'Säkerhetskopieringsaktivitet: {$a}';
$string['backupcourse'] = 'Säkerhetskopiera kurs: {$a}';
$string['backupcoursedetails'] = 'Kursdetaljer';
$string['backupcoursesection'] = 'Sektion: {$a}';
$string['backupcoursesections'] = 'Kurssektioner';
$string['backupdate'] = 'Datum gjord';
$string['backupdetails'] = 'Detaljer för säkerhetskopia';
$string['backupdetailsnonstandardinfo'] = 'Den valda filen är inte en vanlig Moodle säkerhetskopia. Återställningsprocessen kommer att försöka konvertera filen till standardformat och därefter återställa den.';
$string['backupformat'] = 'Format';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Okänt format';
$string['backuplog'] = 'Teknisk information och varningar';
$string['backupmode'] = 'Läge';
$string['backupmode10'] = 'Allmänt';
$string['backupmode20'] = 'Importera';
$string['backupmode30'] = 'Hubb';
$string['backupmode40'] = 'Samma webbplats';
$string['backupmode50'] = 'Automatiserad';
$string['backupmode60'] = 'Konverterad';
$string['backupmode70'] = 'Asynkron';
$string['backupsection'] = 'Sektion för säkerhetskopiering av kurs: {$a}';
$string['backupsettings'] = 'Inställningar för säkerhetskopiering';
$string['backupsitedetails'] = 'Webbplatsdetaljer';
$string['backupstage16action'] = 'Fortsätt';
$string['backupstage1action'] = 'Nästa';
$string['backupstage2action'] = 'Nästa';
$string['backupstage4action'] = 'Genomför säkerhetskopiering';
$string['backupstage8action'] = 'Fortsätt';
$string['backuptype'] = 'Typ';
$string['backuptypeactivity'] = 'Aktivitet';
$string['backuptypecourse'] = 'Kurs';
$string['backuptypesection'] = 'Sektion';
$string['backupversion'] = 'Version';
$string['cannotfindassignablerole'] = 'Rollen {$a} i säkerhetskopian kan inte kopplas till någon av de roller du har rätt att tilldela.';
$string['choosefilefromactivitybackup'] = 'Område för säkerhetskopiering av aktiviteter';
$string['choosefilefromactivitybackup_help'] = 'När säkerhetskopiering med standardinställningar görs kommer säkerhetskopiorna sparas här';
$string['choosefilefromautomatedbackup'] = 'Automatiska säkerhetskopieringar';
$string['choosefilefromautomatedbackup_help'] = 'Innehåller automatiskt genererade säkerhetskopior.';
$string['choosefilefromcoursebackup'] = 'Område för säkerhetskopiering av kurser';
$string['choosefilefromcoursebackup_help'] = 'När kurser säkerhetskopieras med standardinställningar kommer säkerhetskopiorna att sparas här';
$string['choosefilefromuserbackup'] = 'Område för privat säkerhetskopiering för användare';
$string['choosefilefromuserbackup_help'] = 'När säkerhetskopiering görs med "Anonymisera användarinformation" valet aktiverat kommer säkerhetskopiorna att sparas här';
$string['config_keep_groups_and_groupings'] = 'Som standard, behåll nuvarande grupper och gruppindelningar.';
$string['config_keep_roles_and_enrolments'] = 'Som standard, behåll nuvarande roller och registreringar.';
$string['config_overwrite_conf'] = 'Tillåter att användaren skriver över nuvarande kursinställningar';
$string['config_overwrite_course_fullname'] = 'Som standard skriv över kursens fullständiga namn med det från backup-filen. Detta kräver att "Skriv över kurskonfiguration" är ikryssad och att aktuell användare har behörighet att ändra kursens fullständiga namn (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'Som standard skriv över kursens kortnamn med det från backup-filen. Detta kräver att "Skriv över kurskonfiguration" är ikryssad och att aktuell användare har behörighet att ändra kursens kortnamn (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'Som standard skriv över kursens startdatum med det från backup-filen. Detta kräver att "Skriv över kurskonfiguration" är ikryssad och att aktuell användare har behörighet att ändra kursens startdatum vid återställningar (moodle/restore:rolldates)';
$string['configgeneralactivities'] = 'Anger grundinställningen för att inkludera aktiviteter i en säkerhetskopia.';
$string['configgeneralanonymize'] = 'Om det är aktiverat alla uppgifter om användare kommer att anonymiseras som standard.';
$string['configgeneralbadges'] = 'Definierar standardinställningen för "märken" (badges) i säkerhetskopior';
$string['configgeneralblocks'] = 'Anger grundinställningen för att inkludera block i en säkerhetskopia.';
$string['configgeneralcalendarevents'] = 'Anger standardinställningarna för hur kalenderhändelser ska inkluderas vid en säkerhetskopiering.';
$string['configgeneralcomments'] = 'Anger grundinställningen för att inkludera kommentarer i en säkerhetskopia.';
$string['configgeneralcompetencies'] = 'Anger standardinställningarna för hur kompetenser ska inkluderas vid en säkerhetskopiering.';
$string['configgeneralfiles'] = 'Anger standardinställningarna för hur filer ska inkluderas vid en säkerhetskopiering. OBS! Om du inaktiverar denna inställning kommer enbart referenser till filer inkluderas i säkerhetskopian. Detta är inget problem om säkerhetskopian återställs på samma webbplats och filerna inte tagits bort enligt inställningen <em>Städa upp bland skräpfiler</em> under <em>Hantera webbplats -> Server -> Städa upp</em (<code>filescleanupperiod</code>).';
$string['configgeneralfilters'] = 'Anger grundinställningen för att inkludera filter i en säkerhetskopia.';
$string['configgeneralgroups'] = 'Definierar standardinställningen för grupper och gruppindelningar i säkerhetskopior';
$string['configgeneralhistories'] = 'Anger grundinställningen för att inkludera användarhistoria i en säkerhetskopia.';
$string['configgenerallogs'] = 'Om valet aktiverats kommer loggar att ingå i säkerhetskopiorna som standard.';
$string['configgeneralquestionbank'] = 'Om aktiverat kommer frågebanken att ingå i säkerhetskopior som standard. OBS: Om du inaktiverar den här inställningen inaktiveras säkerhetskopior av aktiviteter som använder frågebanken  som t.ex aktiviteten "Test"';
$string['configgeneralroleassignments'] = 'Om valet aktiverats kommer rolltilldelning att säkerhetskopieras.';
$string['configgeneralusers'] = 'Anger grundinställningen för om du vill inkludera användare i säkerhetskopior.';
$string['configgeneraluserscompletion'] = 'Om valet aktiverats kommer spårning av fullföljande att ingå i säkerhetskopior som standard.';
$string['configloglifetime'] = 'Detta anger hur lång tid du vill behålla logginformation för säkerhetskopiering. Loggar som är äldre än angiven ålder tas automatiskt bort. Rekommendationen är att hålla detta värde lågt eftersom logginformationen kan vara omfattande.';
$string['configrestoreactivities'] = 'Ställer in standardvärdena för att återställa aktiviteter.';
$string['configrestorebadges'] = 'Ställer in standardvärdena för att återställa märken.';
$string['configrestoreblocks'] = 'Ställer in standardvärdena för att återställa block.';
$string['configrestorecalendarevents'] = 'Ställer in standardvärdena för att återställa kalenderhändelser.';
$string['configrestorecomments'] = 'Ställer in standardvärdena för att återställa kommentarer.';
$string['configrestorecompetencies'] = 'Ställer in standardvärdena för att återställa kompetenser.';
$string['configrestoreenrolments'] = 'Ställer in standardvärdena för att återställa anmälningsmetoder.';
$string['configrestorefilters'] = 'Ställer in standardvärdena för att återställa filter.';
$string['configrestoregroups'] = 'Ställer in standardvärdena för att återställa grupper och gruppindelningar om de inkluderats i backupen.';
$string['configrestorehistories'] = 'Ställer in standardvärdena för att återställa användarhistorik om den inkluderats i backupen.';
$string['configrestorelogs'] = 'Om aktiverad kommer loggar att återställas om de fanns med i säkerhetskopian.';
$string['configrestoreroleassignments'] = 'Om aktiverad kommer rolltilldelningarna återställas om de inkluderats i säkerhetskopian.';
$string['configrestoreusers'] = 'Anger standardvärdet för om användare ska återställas om de inkluderats i säkerhetskopian.';
$string['configrestoreuserscompletion'] = 'Om aktiverad kommer användarnas slutförandeinformation återställas som standard om den inkluderats i säkerhetskopian.';
$string['confirmcancel'] = 'Avbryt säkerhetskopiering';
$string['confirmcancelimport'] = 'Avbryt import';
$string['confirmcancelno'] = 'Stanna';
$string['confirmcancelquestion'] = 'Är du säker på att du vill avbryta? All information som du har matat in kommer att försvinna.';
$string['confirmcancelrestore'] = 'Avbryt återställning';
$string['confirmcancelyes'] = 'Avbryt';
$string['confirmnewcoursecontinue'] = 'Nykurs varning';
$string['confirmnewcoursecontinuequestion'] = 'En tillfällig (dold) kurs kommer att skapas av kursåterställningsprocessen. För att avbryta återställningen klicka på Avbryt. Stäng inte webbläsaren medan återställningen pågår-';
$string['coursecategory'] = 'Kategori som kursen återställs till';
$string['courseid'] = 'Ursprungligt ID';
$string['coursesettings'] = 'Kursinställningar';
$string['coursetitle'] = 'Titel';
$string['currentstage1'] = 'Initiala inställningar';
$string['currentstage16'] = 'Slutförd';
$string['currentstage2'] = 'Schemainställningar';
$string['currentstage4'] = 'Bekräftelse och förnyad kontroll';
$string['currentstage8'] = 'Utför säkerhetskopiering';
$string['enableasyncbackup'] = 'Aktivera asynkrona säkerhetskopieringar';
$string['enableasyncbackup_help'] = 'Om detta alternativ är aktiverat kommer alla säkerhetskopieringar och återställningar göras asynkront (i bakgrunden). Detta påverkar inte importer eller exporter. Asynkrona säkerhetskopieringar och återställningar gör det möjligt för användare att göra andra saker under tiden som säkerhetskopieringen eller återställningen pågår.';
$string['enterasearch'] = 'Ange en sökning';
$string['error_block_for_module_not_found'] = 'Den övergivna block-instansen (ID: {$a->bid}) för delkurs (ID: {$a->mid}) hittades. Detta block kommer inte att säkerhetskopieras';
$string['error_course_module_not_found'] = 'Den övergivna kursen (ID: {$a}) hittades. Denna modul kommer inte att säkerhetskopieras.';
$string['errorcopyingbackupfile'] = 'Misslyckades med att kopiera filen med säkerhetskopian till den tillfälliga mappen innan återställningen.';
$string['errorfilenamemustbezip'] = 'Filnamnet du anger måste vara en ZIP-fil och har .mbz förlängning';
$string['errorfilenamerequired'] = 'Du måste ange ett giltigt filnamn för denna säkerhetskopia';
$string['errorfilenametoolong'] = 'Filnamnet måste innehålla mindre än 255 tecken.';
$string['errorinvalidformat'] = 'Okänd backup format';
$string['errorinvalidformatinfo'] = 'Den valda filen är inte en giltig Moodle backupfil och kan inte återställas.';
$string['errorminbackup20version'] = 'Denna säkerhetskopia har skapats med en utvecklingsversion av Moodle backup ({$a->backup}). Minimikravet är {$a->min}. Säkerhetskopian kan inte återställas.';
$string['errorrestorefrontpagebackup'] = 'Säkerhetskopior från ingångssidan kan endast återställas på ingångssidan';
$string['executionsuccess'] = 'Säkerhetskopian har skapats.';
$string['failed'] = 'Säkerhetskopieringen misslyckades';
$string['filealiasesrestorefailures'] = 'Det gick inte att återställa alias.';
$string['filealiasesrestorefailures_help'] = 'Alias är symboliska länkar till andra filer, inklusive de som lagras i externa databaser. I vissa fall kan Moodle inte återställa dem - till exempel när du återställer säkerhetskopian på en annan plats eller när den refererade filen finns inte. Fler detaljer och den faktiska orsaken till felet finns i loggfilen för återställningen.';
$string['filealiasesrestorefailuresinfo'] = 'Några alias som ingår i säkerhetskopian kunde inte återställas. Följande lista innehåller deras förväntade plats och källfilen de hänvisar till på dess ursprungliga plats.';
$string['filename'] = 'Filnamn';
$string['filereferencesincluded'] = 'Filreferenser till externt innehåll inkluderat i säkerhetskopian kommer inte att fungera på andra webbplatser.';
$string['filereferencesnotsamesite'] = 'Säkerhetskopian är från en annan plats, filreferenser kan inte återställas';
$string['filereferencessamesite'] = 'Säkerhetskopian är från samma webbplats, filreferenser kan återställas';
$string['generalactivities'] = 'Ta med aktiviteter';
$string['generalanonymize'] = 'Anonymisera informationen';
$string['generalbackdefaults'] = 'Allmänna inställningar för säkerhetskopiering';
$string['generalbadges'] = 'Inkludera märken';
$string['generalblocks'] = 'Ta med block';
$string['generalcalendarevents'] = 'Inkludera kalenderhändelser';
$string['generalcomments'] = 'Ta med kommentarer';
$string['generalcompetencies'] = 'Inkludera kompetenser';
$string['generalenrolments'] = 'Inkludera registreringsmetoder';
$string['generalfiles'] = 'Inkludera filer';
$string['generalfilters'] = 'Ta med filter';
$string['generalgradehistories'] = 'Ta med historik';
$string['generalgroups'] = 'Inkludera grupper och gruppindelningar';
$string['generalhistories'] = 'Ta med historik';
$string['generallogs'] = 'Ta med loggar';
$string['generalquestionbank'] = 'Inkludera frågebanken';
$string['generalrestoredefaults'] = 'Allmänna standardinställningar för återställning';
$string['generalrestoresettings'] = 'Allmänna inställningar för återställning';
$string['generalroleassignments'] = 'Ta med tilldelningar av roller';
$string['generalsettings'] = 'Allmänna inställningar för säkerhetskopiering';
$string['generalusers'] = 'Ta med användare';
$string['generaluserscompletion'] = 'Ta med information om användarnas fullföljande av kurser/delar av kurser';
$string['hidetypes'] = 'Dölj optioner';
$string['importbackupstage16action'] = 'Fortsätt';
$string['importbackupstage1action'] = 'Nästa';
$string['importbackupstage2action'] = 'Nästa';
$string['importbackupstage4action'] = 'Utför import';
$string['importbackupstage8action'] = 'Fortsätt';
$string['importcurrentstage0'] = 'Val av kurser';
$string['importcurrentstage1'] = 'Initiala inställningar';
$string['importcurrentstage16'] = 'Slutförd';
$string['importcurrentstage2'] = 'Schemainställningar';
$string['importcurrentstage4'] = 'Bekräftelse och förnyad kontroll';
$string['importcurrentstage8'] = 'Utför import';
$string['importfile'] = 'Importera en säkerhetskopierad fil';
$string['importgeneralduplicateadminallowed'] = 'Tillåt automatisk lösning av motstridiga \'admin\'-användarnamn';
$string['importgeneralduplicateadminallowed_desc'] = 'Om webbsajten redan har ett konto där användarnamnet är \'admin\' och man samtidigt försöker återställa en säkerhetskopia som också innehåller ett konto med detta användarnamn kommer detta resultera i motstridiga konton. Om denna inställning är aktiverad kommer detta lösas genom att användarnamnet på kontot i säkerhetskopian döps om till \'admin_xyz\'.';
$string['importgeneralmaxresults'] = 'Maximum antal av kurser som visas vid import';
$string['importgeneralmaxresults_desc'] = 'Detta styr antalet kurser som visas under det första steget i importprocessen';
$string['importgeneralsettings'] = 'Generella standardinställningar för Import';
$string['importrootsettings'] = 'Inställningar för import';
$string['importsettings'] = 'Allmänna inställningar för import';
$string['importsuccess'] = 'Importen är genomförd. Klicka för att återvända till kursen.';
$string['includeactivities'] = 'Ta med:';
$string['includeditems'] = 'Medtagna komponenter:';
$string['includefilereferences'] = 'Filreferenser till externt innehåll';
$string['includesection'] = 'Sektion {$a}';
$string['includeuserinfo'] = 'Användardata';
$string['inprogress'] = 'Säkerhetskopiering pågår';
$string['jumptofinalstep'] = 'Hoppa till sista steget';
$string['keep'] = 'Behåll';
$string['locked'] = 'Låst';
$string['lockedbyconfig'] = 'Den här inställningen har låsts av standardinställningarna för säkerhetskopiering';
$string['lockedbyhierarchy'] = 'Låst av beroenden';
$string['lockedbypermission'] = 'Du har inte tillräckliga behörigheter för att ändra den här inställningen.';
$string['loglifetime'] = 'Behåll loggar i';
$string['managefiles'] = 'Administrera säkerhetskopierade filer';
$string['mergerestoredefaults'] = 'Återställ standardinställningarna vid sammanslagning med annan kurs';
$string['missingfilesinpool'] = 'Vissa filer kunde inte sparas under säkerhetskopieringen, det kommer inte att vara möjligt att återställa dem.';
$string['module'] = 'Modul';
$string['moodleversion'] = 'Moodle-version';
$string['morecoursesearchresults'] = 'Hittade mer än {$a} kurser, visar första {$a} resultat';
$string['moreresults'] = 'Det finns för många resultat, ange en mer specifik sökning.';
$string['nomatchingcourses'] = 'Det finns inga kurser att visa';
$string['norestoreoptions'] = 'Det finns inga kategorier eller befintliga kurser du kan återställa till.';
$string['originalwwwroot'] = 'URL till säkerhetskopia';
$string['overwrite'] = 'Skriv över';
$string['pendingasyncdeletedetail'] = 'Det finns en väntande säkerhetskopiering för denna kurs.<br>Kurser kan inte raderas innan denna säkerhetskopiering är avslutad.';
$string['pendingasyncdetail'] = 'Vid asynkrona säkerhetskopieringar är det endast möjligt för en användare att ha en(1) pågående säkerhetskopiering aktiv åt gången per resurs.<br>Multipla asynkrona säkerhetskopieringar för samma resurs kan inte köas eftersom detta troligtvis skulle resultera i multipla säkerhetskopior med identiskt innehåll.';
$string['pendingasyncedit'] = 'Det finns en väntande asynkron säkerhetskopiering för denna kurs. Vänligen undvik att redigera denna kurs tills det att säkerhetskopieringen är slutförd.';
$string['pendingasyncerror'] = 'Väntande säkerhetskopiering för denna resurs';
$string['preparingdata'] = 'Förbereder data';
$string['preparingui'] = 'Förbereder att visa sidan';
$string['previousstage'] = 'Föregående';
$string['privacy:metadata:backup:detailsofarchive'] = 'Det här arkivet kan innehålla olika användardata som har med en kurs att göra, till exempel resultat, användarregistreringar och aktivitetsdata.';
$string['privacy:metadata:backup:externalpurpose'] = 'Syftet med detta arkiv är att lagra information relaterad till en kurs och som kan återställas i framtiden.';
$string['privacy:metadata:backup_controllers'] = 'Listan med säkerhetskopieringsaktiviteter';
$string['privacy:metadata:backup_controllers:itemid'] = 'Kursens ID';
$string['privacy:metadata:backup_controllers:operation'] = 'Processen som utfördes, t.ex. återställning';
$string['privacy:metadata:backup_controllers:timecreated'] = 'Tidpunkten då åtgärden skapades';
$string['privacy:metadata:backup_controllers:timemodified'] = 'Tidpunkten då åtgärden ändrades';
$string['privacy:metadata:backup_controllers:type'] = 'Typ av objekt som bearbetats, t.ex. åtgärd';
$string['qcategory2coursefallback'] = 'Fråge kategorin "{$a->name}", ursprungligen på system/kursnivå i säkerhetskopian, kommer att skapas på kursnivå vid återställningen';
$string['qcategorycannotberestored'] = 'Frågekategorin &quot;{$a->name}&quot; kan inte skapas av återställningprocessen';
$string['question2coursefallback'] = 'Frågekategorin &quot;{$a->name}&quot; kan inte skapas av återställningprocessen';
$string['questionegorycannotberestored'] = 'Frågorna "{$a->name}" kan inte skapas av återställningprocessen';
$string['recyclebin_desc'] = 'OBS att dessa inställningar även kommer att användas för papperskorgen.';
$string['replacerestoredefaults'] = 'Återställ standardinställningarna när återställningen görs in i en annan kurs där innehållet raderas.';
$string['restoreactivity'] = 'Återställ aktivitet';
$string['restorecourse'] = 'Återställ kurs';
$string['restorecoursesettings'] = 'Kursinställningar';
$string['restoreexecutionsuccess'] = 'Kursen återställdes framgångsrikt, klicka på fortsätt knappen under för att se kursen du återställde.';
$string['restorefileweremissing'] = 'Vissa filer kunde inte återställas eftersom de saknades i säkerhetskopian.';
$string['restorenewcoursefullname'] = 'Namn på ny kurs';
$string['restorenewcourseshortname'] = 'Kortnamn för ny kurs';
$string['restorenewcoursestartdate'] = 'Nytt startdatum';
$string['restorerolemappings'] = 'Återställ kartläggning av roller';
$string['restorerootsettings'] = 'Återställ inställningar';
$string['restoresection'] = 'Återställ sektion';
$string['restorestage1'] = 'Bekräfta ';
$string['restorestage16'] = 'Kontrollera igen';
$string['restorestage16action'] = 'Utför återställning';
$string['restorestage1action'] = 'Nästa';
$string['restorestage2'] = 'Destination';
$string['restorestage2action'] = 'Nästa';
$string['restorestage32'] = 'Process';
$string['restorestage32action'] = 'Fortsätt';
$string['restorestage4'] = 'Inställningar';
$string['restorestage4action'] = 'Nästa';
$string['restorestage64'] = 'Slutförd';
$string['restorestage64action'] = 'Fortsätt';
$string['restorestage8'] = 'Schema';
$string['restorestage8action'] = 'Nästa';
$string['restoretarget'] = 'Återställ må¨l';
$string['restoretocourse'] = 'Återställ till kurs:';
$string['restoretocurrentcourse'] = 'Återställ till den här kursen';
$string['restoretocurrentcourseadding'] = 'Slå samman den säkerhetskopierade kursen med den här kursen';
$string['restoretocurrentcoursedeleting'] = 'Ta bort innehållet i den här kursen och återställ sedan';
$string['restoretoexistingcourse'] = 'Återställ till en befintlig kurs';
$string['restoretoexistingcourseadding'] = 'Slå samman den säkerhetskopierade kursen med den befintliga kursen';
$string['restoretoexistingcoursedeleting'] = 'Ta bort innehållet i den befintliga kursen och återställ sedan';
$string['restoretonewcourse'] = 'Återställ som en ny kurs';
$string['restoringcourse'] = 'Återställning av kurs pågår';
$string['restoringcourseshortname'] = 'återställer';
$string['rootenrolmanual'] = 'Återställ med manuell inskrivning';
$string['rootsettingactivities'] = 'Inkludera aktiviteter och resurser';
$string['rootsettinganonymize'] = 'Anonymisera användarinformation';
$string['rootsettingbadges'] = 'Inkludera märken';
$string['rootsettingblocks'] = 'Inkludera block';
$string['rootsettingcalendarevents'] = 'Inkludera kalenderhändelser';
$string['rootsettingcomments'] = 'Inkludera kommentarer';
$string['rootsettingcompetencies'] = 'Inkludera kompetenser';
$string['rootsettingcustomfield'] = 'Inkludera anpassade fält';
$string['rootsettingenrolments'] = 'Inkludera registreringsmetoder';
$string['rootsettingenrolments_always'] = 'Ja, alltid';
$string['rootsettingenrolments_never'] = 'Nej, återställ användare som registrerade manuellt';
$string['rootsettingenrolments_withusers'] = 'Ja, men endast om användare inkluderas';
$string['rootsettingfiles'] = 'Inkludera filer';
$string['rootsettingfilters'] = 'Ta med filter';
$string['rootsettinggradehistories'] = 'Ta med betygshistorik';
$string['rootsettinggroups'] = 'Inkludera grupper och gruppindelningar';
$string['rootsettingimscc1'] = 'Konvertera till IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Konvertera till IMS Common Cartridge 1.1';
$string['rootsettinglogs'] = 'Ta med loggar för kurser';
$string['rootsettingquestionbank'] = 'Inkludera frågebanken';
$string['rootsettingroleassignments'] = 'Ta med tilldelningar av roller för användare';
$string['rootsettings'] = 'Inställningar för säkerhetskopiering';
$string['rootsettingusers'] = 'Ta med registrerade användare';
$string['rootsettinguserscompletion'] = 'Ta med detaljer om användares fullföljanden';
$string['samesitenotification'] = 'Denna säkerhetskopia skapades med en inställning som resulterat i att enbart referenserna till filerna i säkerhetskopian sparades och inte deras innehåll. En återställning av denna säkerhetskopia kommer enbart att fungera på denna webbsajt.';
$string['sectionactivities'] = 'Aktiviteter';
$string['sectioninc'] = 'Ingår i säkerhetskopian (ingen användarinformation)';
$string['sectionincanduser'] = 'Ingår i säkerhetskopian tillsammans med användarinformation';
$string['selectacategory'] = 'Välj en kategori';
$string['selectacourse'] = 'Välj en kurs';
$string['setting_course_fullname'] = 'Namn på kurs';
$string['setting_course_shortname'] = 'Kortnamn för kurs';
$string['setting_course_startdate'] = 'Startdatum för kurs';
$string['setting_keep_groups_and_groupings'] = 'Behåll nuvarande grupper och grupperingar';
$string['setting_keep_roles_and_enrolments'] = 'Behåll nuvarande roller och registreringar';
$string['setting_overwrite_conf'] = 'Skriv över kursinställningarna';
$string['setting_overwrite_course_fullname'] = 'Skriv över kursnamnet';
$string['setting_overwrite_course_shortname'] = 'Skriv över kursens kortnamn';
$string['setting_overwrite_course_startdate'] = 'Skriv över kursens startdatum';
$string['showtypes'] = 'Visa optioner';
$string['sitecourseformatwarning'] = 'Detta är en säkerhetskopia av en Ingångssida. OBS! dessa kan endast återställas på Ingångssidan';
$string['skiphidden'] = 'Hoppa över dolda kurser';
$string['skiphiddenhelp'] = 'Välj om du vill hoppa över dolda kurser';
$string['skipmodifdays'] = 'Hoppa över kurser som inte ändrats sedan';
$string['skipmodifdayshelp'] = 'Välj att hoppa över kurser som inte har ändrats sedan ett antal dagar';
$string['skipmodifprev'] = 'Hoppa över kurser inte ändrats sedan föregående säkerhetskopiering';
$string['skipmodifprevhelp'] = 'Välj om du vill hoppa över kurser som inte har ändrats sedan föregående säkerhetskopiering';
$string['status'] = 'Status';
$string['storagecourseandexternal'] = 'Filarea för kursens säkerhetskopian och den angivna katalogen';
$string['storagecourseonly'] = 'Filarea för kursens säkerhetskopia';
$string['storageexternalonly'] = 'Specificerad katalog för automatiska säkerhetskopieringar';
$string['successful'] = 'Säkerhetskopieringen lyckades';
$string['successfulrestore'] = 'Återställningen lyckades';
$string['timetaken'] = 'Tidsåtgång';
$string['title'] = 'Titel';
$string['totalcategorysearchresults'] = 'Summa kategorier: {$a}';
$string['totalcoursesearchresults'] = 'Summa kurser: {$a}';
$string['undefinedrolemapping'] = 'Mappningen av roll är inte definierad för \'{$a}\'-arketypen';
$string['unnamedsection'] = 'Namnlös sektion';
$string['userinfo'] = 'Användarinformation';
