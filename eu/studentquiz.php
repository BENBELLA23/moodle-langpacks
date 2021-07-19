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
 * Strings for component 'studentquiz', language 'eu', version '3.11'.
 *
 * @package     studentquiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abort_button'] = 'Bertan behera utzi';
$string['add_comment'] = 'Gehitu iruzkina';
$string['add_reply'] = 'Gehitu erantzuna';
$string['after_answering_end_date'] = 'Ikasle Galdetegi hau erantzunetarako itxi zen: {$a}';
$string['after_submission_end_date'] = 'Ikasle Galdetegi honetan galderak bidaltzeko itxi zen: {$a}';
$string['anonymous_user_name'] = '{$a}. Erabiltzaile Anonimoa';
$string['answeringndbeforestart'] = 'Erantzunetarako amaiera-data ezin da hasiera-data baino lehenagokoa izan';
$string['api_state_change_success_content'] = 'Galderaren egoera/ikusgarritasuna ondo aldatu da';
$string['api_state_change_success_title'] = 'Ondo';
$string['approve'] = 'Onartu';
$string['approve_toggle'] = 'Onartu/Baztertu';
$string['approved'] = '✓';
$string['approved_column_name'] = 'Onartuta';
$string['approved_veryshort'] = 'O';
$string['approveselectedscheck'] = 'Ziur zaude hurrengo galderak onartu/baztertu nahi dituzula?<br /><br />{$a}';
$string['average_column_name'] = 'Batez bestekoa';
$string['before_answering_end_date'] = 'Ikasle Galdetegi hau erantzuteko amaiera-data: {$a}';
$string['before_answering_start_date'] = 'Ikasle Galdetegi hau erantzuteko hasiera-data: {$a}';
$string['before_submission_end_date'] = 'Ikasle Galdetegi honetan galderak bidaltzeko amaiera-data: {$a}';
$string['before_submission_start_date'] = 'Ikasle Galdetegi honetan galderak bidaltzeko hasiera-data: {$a}';
$string['cachedef_permissionssync'] = 'IkasleGaldetegia baimenen sinkronizazioaren jarraipena';
$string['cannotcapturecommenthistory'] = 'Ezin izan da iruzkinen historia eskuratu';
$string['changeselectedsstate'] = 'Aldatu ezazu hurrengo galderen egoera:<br /><br />{$a}';
$string['collapseall'] = 'Tolestu iruzkin guztiak';
$string['collapsecomment'] = 'Tolestu iruzkina';
$string['comment_author'] = 'Egilea';
$string['comment_cannot_update'] = 'Ezin da iruzkina eguneratu';
$string['comment_column_name'] = 'Iruzkinak';
$string['comment_error'] = 'Idatzi iruzkina, mesedez';
$string['comment_error_unsaved'] = 'Aurretik iruzkin hau gorde nahi duzu?';
$string['comment_help'] = 'Idatzi iruzkin bat';
$string['comment_help_help'] = 'Idatzi iruzkin bat galderari';
$string['comment_veryshort'] = 'I';
$string['commenthistory'] = 'Iruzkinen historia';
$string['confirmdeletecomment'] = 'Ziur zaude iruzkin hau ezabatu nahi duzula?';
$string['createnewquestion'] = 'Sortu galdera  berria';
$string['createnewquestionfirst'] = 'Sortu lehen galdera';
$string['creator_anonym_fullname'] = 'Ikasle Anonimoa';
$string['current_of_total'] = '{$a->current}.a {$a->total}-(e)tik';
$string['delete'] = 'Ezabatu';
$string['deletecomment'] = 'Ezabatu iruzkina';
$string['deletedbyauthor'] = 'Iruzkin hau ezabatua izan zen {$a}(e)an.';
$string['deletedbyuser'] = 'Iruzkin hau {$a->user} erabiltzaileak ezabatu zuen ({$a->date}).';
$string['deletedcomment'] = 'Ezabatutako iruzkina.';
$string['deleteorphanedquestions'] = 'Ezabatu galdera umezurtzak';
$string['deleteorphanedquestionserrormdlquestion'] = '<font color="red">errorea</font>: ezin izan da mdl_question taulatik ezabatu. Ziurrenik galdera beste nonbait erabilia izango da.<br><font color="red">errorea</font>: mdl_studentquiz* tauletako ezabaketa saltatu egin da.<br>';
$string['deleteorphanedquestionserrorstudentquiz'] = '<font color="red">errorea</font>: ezin izan da mdl_studentquiz* tauletatik ezabatu.<br>';
$string['deleteorphanedquestionsfullmessage'] = 'Baztertuta edo ezabatzeko markatuta izan diren galderak:<ul>{$a->fullmessage}</ul>';
$string['deleteorphanedquestionsnonefound'] = '<b>bat ere ez da aurkitu</b>';
$string['deleteorphanedquestionsquestioninfo'] = '<li><b>{$a->name}</b> (Galdera-mota: {$a->qtype}, IDa: {$a->questionid})</li>';
$string['deleteorphanedquestionssmallmessage'] = 'IkasleGaldetegia: Galdera umezurtzak ezabatzeko ataza exekutatu da';
$string['deleteorphanedquestionssubject'] = 'IkasleGaldetegia';
$string['deleteorphanedquestionssuccessmdlquestion'] = '<font color="green">ondo</font>: mdl_question taulatik ezabatuta<br>';
$string['deleteorphanedquestionssuccessstudentquiz'] = '<font color="green">ondo</font>: mdl_studentquiz* tauletatik ezabatuta.<br>';
$string['describe_already_deleted'] = 'Iruzkin hau dagoeneko ezabatu da.';
$string['describe_not_creator'] = 'Iruzkin hau ez da zurea.';
$string['describe_out_of_time_delete'] = 'Iruzkin hau ezabatzeko denbora agortu da';
$string['describe_out_of_time_edit'] = 'Iruzkin hau editatzeko epez kanpo dago';
$string['difficulty_all_column_name'] = 'Komunitatearentzako Zailtasuna';
$string['difficulty_level_column_name'] = 'Zailtasuna';
$string['difficulty_title'] = 'Zailtasun-barra';
$string['editcomment'] = 'Editatu iruzkina';
$string['editedcomment_last_edit'] = 'Azkenengoz editatua:';
$string['editedcommenthistory'] = '{$a->lastesteditedcommentauthorname} erabiltzaileak editatua {$a->lastededitedcommenttime}(e)an';
$string['editedcommenthistorylinktext'] = 'Historia';
$string['editorplaceholder'] = 'Idatzi zure iruzkina hemen...';
$string['emailautomationnote'] = 'Kontuan izan mesedez hau mezu automatizatu bat dela - helbide elektroniko hau ez dago monitorizatuta.';
$string['emailcommentaddedbody'] = 'Kaixo,  {$a->recepientname}:

\'{$a->coursename}\' ikastaroko \'{$a->modulename}\' Ikasle Galdetegia jarduerako zure \'{$a->questionname}\' galderari iruzkina egin zaio (\'{$a->actorname}\' - \'{$a->timestamp}\').

Iruzkina hau da: \'{$a->commenttext}\'

Zure galdera berrikusi dezakezu hemen: {$a->questionurl}.';
$string['emailcommentaddedsmall'] = '{$a->actorname}-(e)k zure \'{$a->questionname}\' galderari iruzkina egin dio.';
$string['emailcommentaddedsubject'] = 'Galderari iruzkina egin zaio: {$a->questionname}';
$string['emailcommentdeletedbody'] = 'Kaixo,  {$a->recepientname}:

\'{$a->coursename}\' ikastaroko \'{$a->modulename}\' Ikasle Galdetegia jarduerako zure \'{$a->questionname}\' galderari egindako  \'{$a->commenttime}\' iruzkina ezabatua izan da (\'{$a->actorname}\' - \'{$a->timestamp}\').

Iruzkina hau zen: \'{$a->commenttext}\'

Zure galdera berrikusi dezakezu hemen: {$a->questionurl}.';
$string['emailcommentdeletedsmall'] = '{$a->actorname}-(e)k zure \'{$a->questionname}\' galderari egindako iruzkina ezabatu du.';
$string['emailcommentdeletedsubject'] = 'Galderaren iruzkina ezabatua izan da: {$a->questionname}';
$string['emaildigestbody'] = 'Hau zure <b>{$a->modulename}</b> IkasleGaldetegia jardueraren jakinarazpenen {$a->digesttype}. bilduma da, hemen eskuragarri dagoena:';
$string['emaildigestbody_section_content'] = '<b>{$a->actorname}</b> erabiltzaileak zure <b>{$a->questionname}</b> galdera <b>{$a->actiontype}</b> du';
$string['emaildigestbody_section_title'] = '{$a->seq}. jakinarazpena, {$a->timestamp}';
$string['emaildigestsubject'] = 'IkasleGaldetegia jakinarazpenen bilduma';
$string['emailminecommentdeletedbody'] = 'Kaixo,  {$a->recepientname}:

\'{$a->coursename}\' ikastaroko \'{$a->modulename}\' Ikasle Galdetegia jarduerako \'{$a->questionname}\' galderari zuk egindako \'{$a->commenttime}\' iruzkina ezabatua izan da (\'{$a->actorname}\' - \'{$a->timestamp}\').

Iruzkina hau zen: \'{$a->commenttext}\'

Zure galdera berrikusi dezakezu hemen: {$a->questionurl}.';
$string['emailminecommentdeletedsmall'] = '{$a->actorname}-(e)k \'{$a->questionname}\' galderari zuk egindako iruzkina ezabatu du.';
$string['emailminecommentdeletedsubject'] = 'Galderaren iruzkina ezabatua izan da: {$a->questionname}';
$string['emailsalutation'] = '{$a} agurgarria,';
$string['emailsinglebody'] = '<b>{$a->actorname}</b> erabiltzaileak zure <b>{$a->coursename}</b> ikastaroko <b>{$a->modulename}</b> IkasleGaldetegia jardueraren <b>{$a->questionname}</b> galdera {$a->eventname} du <b>{$a->timestamp}</b>(e)an.';
$string['emailsinglebody_reviewlink'] = 'Galdera hau hemen berrikusi dezakezu:';
$string['error_form_validation'] = '{$a}';
$string['error_sendalert'] = 'Errore bat gertatu da zure txostena {$a}-(e)ra bidaltzean.
Txostena ezin izan da bidali.';
$string['expandall'] = 'Zabaldu iruzkin guztiak';
$string['expandcomment'] = 'Zabaldu iruzkina';
$string['filter'] = 'Iragazkia';
$string['filter_advanced_element'] = '{$a} (Elementu aurreratua)';
$string['filter_comment_label_date'] = 'Data';
$string['filter_comment_label_forename'] = 'Izena';
$string['filter_comment_label_sort_by'] = 'Ordenatze-irizpidea:';
$string['filter_comment_label_sort_toggle'] = 'Ordenatze-irizpidea: {$a->field} {$a->type}';
$string['filter_comment_label_surname'] = 'Abizena';
$string['filter_ishigher'] = 'Handiagoa da';
$string['filter_islower'] = 'Txikiagoa da';
$string['filter_label_approved'] = 'Onartutako galderak';
$string['filter_label_comment'] = 'Iruzkinak';
$string['filter_label_createdate'] = 'Sorrera';
$string['filter_label_difficulty_level'] = 'Zailtasuna';
$string['filter_label_fast_filters'] = 'Galderentzako iragazki azkarra';
$string['filter_label_myattempts'] = 'Nire saiakerak';
$string['filter_label_mydifficulty'] = 'Nire zailtasuna';
$string['filter_label_mylastattempt'] = 'Nire azken saiakera';
$string['filter_label_myrate'] = 'Nire puntuazioa';
$string['filter_label_onlyapproved'] = 'Onartuta';
$string['filter_label_onlyapproved_help'] = 'Zure irakasleak onartutako galderak';
$string['filter_label_onlydifficult'] = 'Guztientzako zailtasuna';
$string['filter_label_onlydifficult_help'] = 'Batez besteko %{$a} zailtasuna baino gehiago duen galdera';
$string['filter_label_onlydifficultforme'] = 'Niretzako zailtasuna';
$string['filter_label_onlydifficultforme_help'] = 'Nire zailtasunaren %{$a} baino gehiago duen galdera';
$string['filter_label_onlygood'] = 'Ondo';
$string['filter_label_onlygood_help'] = 'Gutxienez batez besteko {$a} izarreko puntuazioa duen galdera';
$string['filter_label_onlymine'] = 'Nirea';
$string['filter_label_onlymine_help'] = 'Nik sortutako galderak.';
$string['filter_label_onlynew'] = 'Erantzun gabekoa';
$string['filter_label_onlynew_help'] = 'Oraindik erantzun ez dituzun galderak';
$string['filter_label_question'] = 'Galderaren izenburua';
$string['filter_label_question_creation_item'] = '{$a->creationtext} {$a->rowtext} {$a->inputtext}';
$string['filter_label_question_creation_item_inputtext'] = '{$a->inputtext} {$a->inputtype}';
$string['filter_label_questiontext'] = 'Galderaren edukia';
$string['filter_label_rates'] = 'Puntuazioa';
$string['filter_label_show_mine'] = 'Nire galderak';
$string['filter_label_tags'] = 'Etiketa';
$string['finish_button'] = 'Amaiera';
$string['image_placeholder'] = '[Irudia]';
$string['invalidcomment'] = 'iruzkinbaliogabea';
$string['invalidemail'] = 'Helbide elektroniko hau ez da baliozkoa. Idatzi ezazu mesedez helbide elektroniko bakarra.';
$string['lastattempt_right'] = '✓';
$string['lastattempt_right_label'] = 'Azken saiakera egokia';
$string['lastattempt_wrong'] = '✗';
$string['lastattempt_wrong_label'] = 'Azken saiakera okerra';
$string['latest_column_name'] = 'Azkena';
$string['manager_anonym_fullname'] = 'Kudeatzaile Anonimoa';
$string['message'] = 'Mezua';
$string['messageprovider:commentadded'] = 'Iruzkina egin izanaren jakinarazpena';
$string['messageprovider:commentdeleted'] = 'Iruzkina ezabatu izanaren jakinarazpena';
$string['messageprovider:deleteorphanedquestions'] = 'Ezabatutako galderaren jakinarazpena';
$string['messageprovider:minecommentdeleted'] = 'Nire iruzkina ezabatu izanaren jakinarazpena';
$string['messageprovider:questionchanged'] = 'Galdera-ekitaldiaren jakinarazpena';
$string['migrate_already_done'] = 'Ez da ezer egin jarduera hau dagoeneko migratua izan delako!';
$string['migrate_ask'] = '3.2.1 bertsioan Ikasle-Galdetegiaren abiadura hobetu da, baina galdera-multzo hau oraindik aurretiko bertsio batean oinarrituta dago. Galderak eta galdetegiak azkarrago kargatuko dira azkartzeko migrazio hau exekutatzen baduzu. Kargatze azkarragoa nabarituko duzu: besterik ez da aldatuko.';
$string['migrate_studentquiz'] = 'Migratu Ikasle-Galdetegiko galderak 3.2.1 aurretiko bertsiotik batutako balioak dituen bertsio azkarragora';
$string['migrate_studentquiz_short'] = 'Azkartu galdera-multzo hau';
$string['migrated_successful'] = 'Jarduera hau ondo migratu da!';
$string['mine_column_name'] = 'Nirea';
$string['missingparam'] = 'Beharrezkoa den parametro bat falta da edo baliogabea da';
$string['moderator'] = 'Moderatzailea';
$string['modulename'] = 'Ikasle-Galdetegia';
$string['modulename_help'] = 'Ikasle-Galdetegia jarduerak ikasleei beste partaideentzako galderak gehitzeko aukera ematen die. Ikasle-Galdetegiaren aurrebistan ikasleek galderak iragazi ditzakete. Iragazitako galderak praktikatzeko ere erabili ditzakete. Irakasleak egilearen zutabea anonimo bihurtzeko aukera du.<br><br>Ikasle-Galdetegiak ikasleei puntuak ematen dizkie praktikatzeko galderak sortzera bultzatzeko. Puntuak ranking-aren taulan erakusten dira.';
$string['modulenameplural'] = 'Ikasle-Galdetegia';
$string['more'] = 'Gehiago';
$string['myattempts_column_name'] = 'Nire Saiakerak';
$string['mydifficulty_column_name'] = 'Nire Zailtasuna';
$string['mylastattempt_column_name'] = 'Nire Azken Saiakera';
$string['myrate_column_name'] = 'Nire Puntuazioa';
$string['nav_export'] = 'Esportatu';
$string['nav_import'] = 'Inportatu';
$string['nav_question_no'] = '{$a->current}. galdera guztirako {$a->total} galderatik';
$string['needtoallowatleastoneqtype'] = 'Gutxienez galdera-mota bat baimendu behar duzu';
$string['next_button'] = 'Hurrengoa';
$string['no_comment'] = 'e.a.';
$string['no_comments'] = 'Iruzkinik ez';
$string['no_difficulty_level'] = 'e.a.';
$string['no_myattempts'] = 'e.a.';
$string['no_mylastattempt'] = 'e.a.';
$string['no_mylastattempt_label'] = 'Galdera honek ez du saiakerarik';
$string['no_questions_add'] = 'Ez dago galderarik Ikasle-Galdetegian. Nahi baduzu galdera batzuk gehitu ditzakezu.';
$string['no_questions_filter'] = 'Ez dago zure iragazkia betetzen duen galderarik. Berrabiarazi iragazkia denak ikusteko.';
$string['no_questions_selected_message'] = 'Galdetegia hasteko aukeratu gutxienez galdera bat, mesedez.';
$string['no_rates'] = 'e.a.';
$string['no_tags'] = 'e.a.';
$string['nocommenthistoryexist'] = 'Oraindik ez dago iruzkin-historiarik iruzkin honentzat.';
$string['not_approved'] = '✗';
$string['notshowratingcomment'] = 'Oharra: Puntuazioa eta iruzkinak egitea ez daude eskuragarri zure galderaren Aurrebista moduan';
$string['num_questions'] = '{$a} galdera';
$string['number_column_name'] = 'Kopurua';
$string['numberreply'] = '{$a} erantzun';
$string['onlyrootcommentcanreply'] = 'Soilik lehen mailako iruzkinei erantzun dakieke';
$string['pagesize'] = 'Orriaren tamaina:';
$string['please_enrole_message'] = 'Zure aurrerapen pertsonala ikusteko, ikastaroan matrikulatu zaitez, mesedez.';
$string['pluginadministration'] = 'Ikasle-Galdetegiaren Kudeaketa';
$string['pluginname'] = 'Ikasle-Galdetegia';
$string['previous_button'] = 'Aurrekoa';
$string['privacy:metadata:mod_studentquiz_comment_sort'] = 'Iruzkinen iragazki-motarentzako erabiltzaile-hobespena.';
$string['privacy:metadata:studentquiz_attempt'] = 'Erabiltzaile batek galdera-multzo bat erantzuteko saiakera bat adierazten du.';
$string['privacy:metadata:studentquiz_attempt:categoryid'] = 'Kategoriaren IDa.';
$string['privacy:metadata:studentquiz_attempt:questionusageid'] = 'Galdera-erabileraren IDa.';
$string['privacy:metadata:studentquiz_attempt:studentquizid'] = 'IkasteGaldetegiaren IDa.';
$string['privacy:metadata:studentquiz_attempt:userid'] = 'Erabiltzailearen IDa.';
$string['privacy:metadata:studentquiz_comment'] = 'Galderen iruzkinen gordailua.';
$string['privacy:metadata:studentquiz_comment:comment'] = 'Galderaren iruzkina.';
$string['privacy:metadata:studentquiz_comment:created'] = 'Iruzkina sortu zeneko unea.';
$string['privacy:metadata:studentquiz_comment:deleted'] = 'Iruzkina ezabatu zeneko unea.';
$string['privacy:metadata:studentquiz_comment:deleteuserid'] = 'Iruzkina ezabatu zuen erabiltzailearen IDa.';
$string['privacy:metadata:studentquiz_comment:edited'] = 'Iruzkina editatu zeneko unea.';
$string['privacy:metadata:studentquiz_comment:edituserid'] = 'Iruzkina editatu zueneko erabiltzailearen IDa.';
$string['privacy:metadata:studentquiz_comment:parentid'] = 'Goragoko iruzkinaren IDa. 0: maila goreneko iruzkina';
$string['privacy:metadata:studentquiz_comment:questionid'] = 'Galderaren IDa.';
$string['privacy:metadata:studentquiz_comment:status'] = 'Iruzkinaren egoera';
$string['privacy:metadata:studentquiz_comment:timemodified'] = 'Iruzkinaren aldaketa-unea';
$string['privacy:metadata:studentquiz_comment:userid'] = 'Erabiltzailearen IDa.';
$string['privacy:metadata:studentquiz_comment:usermodified'] = 'Iruzkina aldatu duen erabiltzailearen IDa';
$string['privacy:metadata:studentquiz_comment_history'] = 'Iruzkinen historiaren biltegia';
$string['privacy:metadata:studentquiz_comment_history:action'] = 'Historia-mota 0 - Sortu | 1 - Editatu | 2 -Ezabatu';
$string['privacy:metadata:studentquiz_comment_history:commentid'] = 'Iruzkinaren IDa';
$string['privacy:metadata:studentquiz_comment_history:content'] = 'Iruzkin-historiaren edukia';
$string['privacy:metadata:studentquiz_comment_history:timemodified'] = 'Iruzkinaren aldatze-unea';
$string['privacy:metadata:studentquiz_comment_history:userid'] = 'Iruzkina editatu duen erabiltzailearen IDa';
$string['privacy:metadata:studentquiz_notification'] = 'Jakinarazpen-ilara';
$string['privacy:metadata:studentquiz_notification:content'] = 'Jakinarazpenaren edukia';
$string['privacy:metadata:studentquiz_notification:recipientid'] = 'Jasotzailearen IDa';
$string['privacy:metadata:studentquiz_notification:status'] = 'Jakinarazpenaren egoera';
$string['privacy:metadata:studentquiz_notification:studentquizid'] = 'IkasleGaldetegiaren IDa';
$string['privacy:metadata:studentquiz_notification:timetosend'] = 'Jakinarazpena bidaltzeko unea';
$string['privacy:metadata:studentquiz_progress'] = 'Galdera honetako ikaslearen aurrerapena gordetzen du.';
$string['privacy:metadata:studentquiz_progress:attempts'] = 'Galdera hau erantzuteko saiakera-kopurua.';
$string['privacy:metadata:studentquiz_progress:correctattempts'] = 'Erantzun zuzenen kopurua.';
$string['privacy:metadata:studentquiz_progress:lastanswercorrect'] = '0: azken erantzuna okerra edo baliogabea izan zen, 1: azken erantzuna zuzena izan zen.';
$string['privacy:metadata:studentquiz_progress:questionid'] = 'Galderaren IDa.';
$string['privacy:metadata:studentquiz_progress:studentquizid'] = 'IkasleGaldetegiaren IDa.';
$string['privacy:metadata:studentquiz_progress:userid'] = 'Erabiltzailearen IDa.';
$string['privacy:metadata:studentquiz_rate'] = 'Galderen puntuazioak gordetzen ditu.';
$string['privacy:metadata:studentquiz_rate:questionid'] = 'Galderaren IDa.';
$string['privacy:metadata:studentquiz_rate:rate'] = 'Galderaren puntuazioa.';
$string['privacy:metadata:studentquiz_rate:userid'] = 'Erabiltzailearen IDa.';
$string['progress_bar_caption'] = 'Zure aurrerapena Ikasle-Galdetegia jarduera honetan';
$string['questionsinuse'] = '(* Asterisko batekin markatutako galderak dagoeneko galdetegi batzuetan erabiltzen ari dira.)';
$string['ranking_block_title'] = 'Ranking-a';
$string['ranking_block_title_anonymised'] = 'Rankinga (anonimo bihurtua)';
$string['rate_all_column_name'] = 'Komunitatearen Puntuazioa';
$string['rate_column_name'] = 'Puntuazioa';
$string['rate_error'] = 'Puntuatu ezazu, mesedez';
$string['rate_help'] = 'Puntuatu galdera hau';
$string['rate_help_help'] = 'Puntuatu galdera hau.<br /> Izar batek oso gaizki esan nahi du eta 5 izar oso ondo.';
$string['rate_multi_stars_desc'] = '{$a} izar aukeratuta';
$string['rate_one_star_desc'] = 'Izar 1 aukeratuta';
$string['rate_points'] = 'Puntuak';
$string['rate_title'] = 'Puntuazioa';
$string['ratingbar_title'] = 'Puntuazio-barra';
$string['remove_comment'] = 'Ezabatu';
$string['remove_comment_label'] = 'Ezabatu iruzkina';
$string['replies'] = 'Erantzunak';
$string['reply'] = 'Erantzun';
$string['replycomment'] = 'Erantzun';
$string['report_comment_condition1'] = 'Iraingarria da';
$string['report_comment_condition2'] = 'Jazarpenezkoa da';
$string['report_comment_condition3'] = 'Eduki lizuna dauka, esaterako pornografia';
$string['report_comment_condition4'] = 'Laidogarria da';
$string['report_comment_condition5'] = 'Copyright-a urratzen du';
$string['report_comment_condition6'] = 'Bestelako arrazoiren batengatik arauen kontrakoa da';
$string['report_comment_condition_more'] = 'Bestelako informazioa (aukerazkoa)';
$string['report_comment_emailappendix'] = 'Email hau jaso duzu zure helbide elektronikoa IkasleGaldetegiko mezu onartezinen salaketarako erabili delako.';
$string['report_comment_emailpreface'] = '{$a->fullname} erabiltzaileak ({$a->username}, {$a->email}) iruzkin bat salatu du.';
$string['report_comment_emailsubject'] = 'Salatu {$a->commentid}. iruzkina: {$a->coursename} {$a->studentquizname}';
$string['report_comment_feedback'] = 'Zure salaketa ondo bidali da. Arduradunen batek arazoa ikertuko du.';
$string['report_comment_info'] = '\'Salatu\' funtzioak iruzkin hau arduradun bati bidali ahal dio arazoa ikertu dezan. <strong>Mesedez funtzio hau erabili ezazu soilik iruzkin batek arauak urratzen dituela uste baduzu</strong>.';
$string['report_comment_invalid'] = 'Iruzkin hau salatzeko arrazoia zehaztu behar duzu.';
$string['report_comment_invalid_checkbox'] = 'Gutxienez kutxetako bat markatu behar duzu.';
$string['report_comment_link_text'] = 'Aurreikusi hemen';
$string['report_comment_not_available'] = 'Iruzkinak salatzeko funtzioa ez dago eskuragarri.';
$string['report_comment_pagename'] = 'Salatu iruzkin bat onarezin gisa';
$string['report_comment_reasons'] = 'Iruzkina salatzeko arrazoiak:';
$string['report_comment_reporter_detail'] = '{$a->fullname} ({$a->username}; {$a->email}; {$a->ip})';
$string['report_comment_reporter_info'] = '<strong>Salatzailearen xehetasunak</strong>:';
$string['report_comment_submit'] = 'Bidali salaketa';
$string['reportcomment'] = 'Salatu';
$string['reportcomment_title'] = 'Salatu iruzkina onartezin gisa';
$string['reportquiz_admin_title'] = 'Ikasleen estatistikak';
$string['reportquiz_stats_all_last_attempt_correct'] = 'Komunitatearen azken erantzun zuzenen batez bestekoa';
$string['reportquiz_stats_all_last_attempt_incorrect'] = 'Komunitatearen azken erantzun okerren batez bestekoa';
$string['reportquiz_stats_all_percentage_correct_answers'] = 'Komunitatearen azken erantzun zuzenen ehunekoaren batez bestekoa';
$string['reportquiz_stats_all_percentage_correct_answers_help'] = 'Erantzun zuzenen batura / erantzun guztien batura.';
$string['reportquiz_stats_all_progress'] = 'Komunitatearen batez besteko Aurrerapena';
$string['reportquiz_stats_all_progress_help'] = 'Komunitatearen batez besteko Aurrerapena, partaide guztiak kontuan hartuta.';
$string['reportquiz_stats_all_question_attempts_correct'] = 'Komunitatearen erantzun zuzenen batez bestekoa';
$string['reportquiz_stats_all_question_attempts_incorrect'] = 'Komunitatearen erantzun okerren batez bestekoa';
$string['reportquiz_stats_all_questions_answered'] = 'Erantzun guztien Komunitateko batez bestekoa';
$string['reportquiz_stats_all_questions_answered_help'] = 'Erantzun guztien Komunitateko batez bestekoa, partaide guztiak kontuan hartuta.';
$string['reportquiz_stats_all_questions_approved'] = 'Onartutako galdera kopurua';
$string['reportquiz_stats_all_questions_approved_help'] = 'Irakasleek galderen egokitasuna egiaztatu eta galderak onartu ditzakete. Balio hau Ikasle-Galdetegi honetan onartutako galderen kopurua da.';
$string['reportquiz_stats_all_questions_created'] = 'Ikasle-Galdetegi honetako galdera kopurua';
$string['reportquiz_stats_all_questions_created_help'] = 'Komunitateak sortutako galdera kopurua';
$string['reportquiz_stats_all_rates_average'] = 'Galdera guztien batez besteko puntuazioa';
$string['reportquiz_stats_all_rates_average_help'] = 'Galdera bakoitzaren puntuazioa komunitateak emandako izar kopuruaren batez bestekoa da. Adibidez: komunitateak 4 galdera sortu ditu. Komunitateak A galderari 3 izar, B galderari 4 izar, D galderari 2 izar eta D galderari 5 izar eman badizkio galdera guztien batez bestekoa 3,5 da.';
$string['reportquiz_stats_own_last_attempt_correct'] = 'Zure azken erantzun zuzenen kopurua';
$string['reportquiz_stats_own_last_attempt_incorrect'] = 'Zure azken erantzun okerren kopurua';
$string['reportquiz_stats_own_percentage_correct_answers'] = 'Zure erantzun zuzenen ehunekoa';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Ikasle-Galdetegi honetan eman dituzun erantzun guztien arteko erantzun zuzenen ehunekoa. Partzialki zuzen erantzundako galderak oker gisa zenbatzen dira.';
$string['reportquiz_stats_own_progress'] = 'Zure Aurrerapena';
$string['reportquiz_stats_own_progress_help'] = 'Ikasle-Galdetegi honetan eman dituzun erantzun guztien azken saiakeretako erantzun zuzenen ehunekoa. Partzialki zuzen erantzundako galderak oker gisa zenbatzen dira.';
$string['reportquiz_stats_own_question_attempts_correct'] = 'Zure erantzun zuzenak guztira';
$string['reportquiz_stats_own_question_attempts_incorrect'] = 'Zure erantzun okerrak guztira';
$string['reportquiz_stats_own_questions_answered'] = 'Zure erantzun guztien kopurua';
$string['reportquiz_stats_own_questions_answered_help'] = 'Ikasle-Galdetegi honetan eman dituzun erantzun guztien kopurua.';
$string['reportquiz_stats_own_questions_approved'] = 'Zure onartutako galderen kopurua';
$string['reportquiz_stats_own_questions_approved_help'] = 'Irakasleek galderen egokitasuna egiaztatu eta galderak onartu ditzakete. Balio hau Ikasle-Galdetegi honetan onartutako zure galderen kopurua da.';
$string['reportquiz_stats_own_questions_created'] = 'Zuk egindako galdera kopurua';
$string['reportquiz_stats_own_questions_created_help'] = 'Ikasle-Galdetegi honetan zuk sortutako galdera kopurua';
$string['reportquiz_stats_own_rates_average'] = 'Zuk jasotako batez besteko puntuazioa';
$string['reportquiz_stats_own_rates_average_help'] = 'Galdera bakoitzaren puntuazioa komunitateak emandako izar kopuruaren batez bestekoa da. Adibidez: zuk 4 galdera sortu dituzu. Komunitateak A galderari 3 izar, B galderari 4 izar, D galderari 2 izar eta D galderari 5 izar eman badizkio zure batez besteko puntuazioa 3,5 da.';
$string['reportquiz_stats_title'] = 'Estatistikak';
$string['reportquiz_total_attempt'] = 'Erabiltzaileak galdetegian egindako saiakera kopurua';
$string['reportquiz_total_obtained_marks'] = 'Puntuazioa guztira';
$string['reportquiz_total_questions_answered'] = 'Erantzunak guztira';
$string['reportquiz_total_questions_right'] = 'Erantzun zuzenak guztira';
$string['reportquiz_total_questions_wrong'] = 'Erantzun okerrak';
$string['reportquiz_total_users'] = 'Partaide kopurua';
$string['reportrank_table_column_approvedquestions'] = 'Puntuak onartutako galderentzat';
$string['reportrank_table_column_communitystatus'] = 'Komunitatearen Estatistikak';
$string['reportrank_table_column_correctanswers'] = 'Erantzun zuzenak';
$string['reportrank_table_column_countquestions'] = 'Puntuak publikatutako galderentzat';
$string['reportrank_table_column_description'] = 'Deskribapena';
$string['reportrank_table_column_factor'] = 'Puntuazioa';
$string['reportrank_table_column_fullname'] = 'Izen osoa';
$string['reportrank_table_column_incorrectanswers'] = 'Erantzun Okerrak';
$string['reportrank_table_column_lastcorrectanswers'] = 'Azken saiakera zuzenen puntuak';
$string['reportrank_table_column_lastincorrectanswers'] = 'Azken saiakera okerren puntuak';
$string['reportrank_table_column_points'] = 'Puntuak';
$string['reportrank_table_column_progress'] = 'Zure aurrerapena';
$string['reportrank_table_column_quantifier_name'] = 'Izena';
$string['reportrank_table_column_rank'] = 'Postua';
$string['reportrank_table_column_summeanrates'] = 'Izarrak jasotzeagatiko puntuak';
$string['reportrank_table_column_total_points'] = 'Puntuak guztira';
$string['reportrank_table_column_value'] = 'Balioa';
$string['reportrank_table_column_yourstatus'] = 'Zure Estatistika pertsonalak';
$string['reportrank_table_quantifier_caption'] = 'Nola kalkulatzen dira zure puntuak';
$string['reportrank_table_title'] = 'Ikasleen ranking-a - 10 onenak';
$string['reportrank_table_title_for_manager'] = 'Ikasleen ranking-a';
$string['reportrank_title'] = 'Ranking-a';
$string['review_button'] = 'Berrikusi';
$string['savechanges'] = 'Gorde aldaketak';
$string['scheduled_task_send_digest_notification'] = 'Bidali jakinarazpen-bilduma';
$string['setting_question_publishing'] = 'Galderen argitaratzea';
$string['setting_question_publishing_automatic'] = 'Argitaratu automatikoki galdera berriak';
$string['setting_question_publishing_help'] = 'Argitaratutako galderak galdera-bankuan agertzen dira beste ikasleek erantzun ditzaten. Galderak automatikoki argitaratuko diren edo argitaratu aurretiko onarpena beharko den erabaki ezbehar duzu.<br>Kontuan izan ezarpen hau sortu berriko galderei soilik aplikatzen zaiela.';
$string['setting_question_publishing_require_approval'] = 'Argitaratu aurretiko onarpena behar da';
$string['settings_allowallqtypes'] = 'Baimendu galdera-mota guztiak';
$string['settings_allowedqtypes'] = 'Baimendutako galdera-motak';
$string['settings_allowedqtypes_help'] = 'Mugatu baimendutako galdera-motak hautatutako aukeretara';
$string['settings_anonymous'] = 'Ikasleak anonimo bihurtzea';
$string['settings_anonymous_help'] = 'Ikasleek ezin dute besteen izenik ikusi.';
$string['settings_anonymous_label'] = 'Ikasleak anonimo bihurtu';
$string['settings_approvedquantifier'] = 'Onartutako galderentzako puntuazioa';
$string['settings_approvedquantifier_help'] = 'Puntuak onartutako galdera bakoitzarengatik';
$string['settings_approvedquantifier_label'] = 'Puntuak onartutako galdera bakoitzarengatik';
$string['settings_availability_close_answering_from'] = 'Erantzuteko amaiera-data';
$string['settings_availability_close_submission_from'] = 'Galderak gordetzeko amaiera-data';
$string['settings_availability_open_answering_from'] = 'Erantzuteko hasiera-data';
$string['settings_availability_open_submission_from'] = 'Galderak gordetzeko hasiera-data';
$string['settings_comment_editor_toolbar'] = 'Iruzkin-editorearen tresna-barraren konfigurazioa';
$string['settings_comment_editor_toolbar_des'] = 'Hemen pluginen zerrenda eta erakusteko ordena konfiguratu daitezke';
$string['settings_commentdeletionperiod'] = 'Iruzkinak editatu/ezabatzeko denbora-tartea (minututan)';
$string['settings_commentdeletionperiod_help'] = 'Zehaztu ikasleek iruzkina (edo beste iruzkin bati emandako erantzuna) publikatu ondoren ezabatzeko \'Editatu\'/\'Ezabatu\' botoia eskuragarri egongo den denbora-tartea (minututan). 0 eta 60 minutu arteko balioak onartzen dira, balio lehenetsia 10 delarik. Editatu/Ezabatzeko denbora-tartea 0 bada, ikasleek ezingo dute euren iruzkinak editatu edo ezabatu. Kontuan izan irakasle eta kudeatzaileek beti izango dutela ikasleen iruzkinak editatu eta ezabatzeko aukera, baita ezabatutako iruzkinen edukia ikusteko ere.';
$string['settings_email_digest_first_day'] = 'Asteko lehen eguna?';
$string['settings_email_digest_first_day_help'] = 'Astekako bilduma aukeratu izan baduzu, aukera honek aste bakoitzeko zazpi egunetako epearen lehen eguna hautatzea ahalbidetzen du (eguneko 00h:00m:00s-an hasita). Hau bereziki erabilgarria da jarduera astearen erdian hasten bada, adibidez.';
$string['settings_email_digest_type'] = 'Posta elektroniko bidezko bilduma-mota';
$string['settings_email_digest_type_daily_digest'] = 'Eguneroko bilduma';
$string['settings_email_digest_type_help'] = 'IkasleGaldetegiak gitu daitezkeen jakinarazpen ezberdinak ditu, hala nola galdera-egile diren ikasleei egoera-aldaketen berri emateko (esaterako irakasleak euren galderak onartzen dituenean). Ezarpen hau jakinarazpenen maiztasuna erabili dezakezu. Bilduma-mezuak jakinarazpen-epean gutxienez jakinarazpen bat badago baino ez dira bidaliko.';
$string['settings_email_digest_type_no_digest'] = 'Bildumarik ez (ekintza bakoitzarentzako e-mail bana)';
$string['settings_email_digest_type_weekly_digest'] = 'Asteroko bilduma';
$string['settings_excluderoles'] = 'Baztertu rolak ranking-ean';
$string['settings_excluderoles_help'] = 'Aukeratutako rolak ez dira ranking-etan erakutsiko (hala ere rol hauek dituzten erabiltzaileak jardueran parte hartu ahal izango dute)';
$string['settings_excluderoles_label'] = 'Ranking-etan baztertu beharreko rolak';
$string['settings_forcecommenting'] = 'Behartu iruzkinak egitera';
$string['settings_forcecommenting_help'] = 'Behartu iruzkinak egitera galdera erantzuten saiatzean';
$string['settings_forcerating'] = 'Behartu puntuatzera';
$string['settings_forcerating_help'] = 'Behartu puntuatzera galdera erantzuten saiatzean';
$string['settings_lastcorrectanswerquantifier'] = 'Azken erantzun zuzenentzako puntuazioa';
$string['settings_lastcorrectanswerquantifier_help'] = 'Puntuak azken saiakerako erantzun zuzen bakoitzarengatik';
$string['settings_lastcorrectanswerquantifier_label'] = 'Puntuak azken erantzun zuzenengatik';
$string['settings_lastincorrectanswerquantifier'] = 'Azken erantzun okerrentzako puntuazioa';
$string['settings_lastincorrectanswerquantifier_help'] = 'Puntuak azken saiakerako erantzun oker edo partzialki oker bakoitzarengatik';
$string['settings_lastincorrectanswerquantifier_label'] = 'Puntuak azken erantzun okerrengatik';
$string['settings_notification'] = 'Jakinarazpenen ezarpenak';
$string['settings_questionquantifier'] = 'Publikatutako galderentzako puntuazioa';
$string['settings_questionquantifier_help'] = 'Puntuak publikatutako galdera bakoitzarengatik';
$string['settings_questionquantifier_label'] = 'Puntuak publikatutako galdera bakoitzarengatik';
$string['settings_ratequantifier'] = 'Puntuazioaren balioa';
$string['settings_ratequantifier_help'] = 'Puntuak jasotako izar bakoitzarengatik';
$string['settings_ratequantifier_label'] = 'Galdera batek jasotako izar kopuruaren batez bestekoaren biderkatzailea';
$string['settings_removeqbehavior'] = 'Kendu Ikasle-Galdetegia galdera-jokaera plugina';
$string['settings_removeqbehavior_help'] = 'Informazio hau eguneratzean baino ez da agertuko. Gure Ikasle-Galdetegiko galdera-jokaera plugina instalatuta daukazula antzeman dugu. Aurrerantzean plugin hau ez da behar eta beraz automatikoki ezabatzen saiatuko gara. Ezarpen hau oraindik ikusten baduzu, mesedez Ikasle-Galdetegiko galdera-jokaera plugina eskuz desinstalatu ezazu <a href="{$a}">hemen</a>.';
$string['settings_removeqbehavior_label'] = 'Kendu Ikasle-Galdetegia galdera-jokaera plugina';
$string['settings_reportingemail'] = 'Helbide elektronikoa iruzkin iraingarrien salaketetarako';
$string['settings_reportingemail_help'] = 'Hemen helbide elektroniko bat zehazten bada iruzkin bakoitzaren ondoan \'Salatu\' esteka agertuko da. Erabiltzaileek bertan klik egin ahalko dute iraingarriak diren iruzkinak salatzeko. Informazioa helbide honetara bidaliko da.

Helbide elektroniko hau hutsik utziz gero ez da Salatu funtzioa erakutsiko (gune mailan salaketetarako helbide bat zehaztu ezean).

Helbide elektroniko bat baino gehiago zehaztu nahi bada \';\' karakterearekin banatu behar dira.';
$string['settings_section_description_default'] = 'Balio hauek ikasle-galdetegi berri bat sortzean erakutsiko diren belio lehenetsiak zehazten dituzte.';
$string['settings_section_header_comment_rating'] = 'Iruzkin eta puntuazioaren ezarpenak';
$string['settings_section_header_question'] = 'Galderen ezarpenak';
$string['settings_section_header_ranking'] = 'Puntuazioaren ezarpenak';
$string['settingsdeleteorphaned'] = 'Ezabatu galdera umezurtzak';
$string['settingsdeleteorphaned_help'] = 'Egunero exekutatzen den programatutako ataza bat aktibatzen du umezurtz edo aprobatu gabeko galderak datu-basetik ezabatzeko.';
$string['settingsdeleteorphanedtime1y'] = 'Urte bat';
$string['settingsdeleteorphanedtime2y'] = '2 urte';
$string['settingsdeleteorphanedtime3y'] = '3 urte';
$string['settingsdeleteorphanedtime6m'] = '6 hilabete';
$string['settingsdeleteorphanedtimelimit'] = 'Galdera umezurtzen ezabaketaren denbora-tartea';
$string['settingsdeleteorphanedtimelimit_help'] = 'Umezurtz edo aprobatu gabeko galderak ezabatzeko denbora-muga bat zehazten du. Tarte hau baino zaharragoak diren galderak ezabatuak izango dira.';
$string['show_less'] = 'Erakutsi gutxiago';
$string['show_more'] = 'Erakutsi gehiago';
$string['slot_of_slot'] = '{$a->slot}. galdera multzo honetako {$a->slots}-(e)tik';
$string['start_quiz_button'] = 'Hasi Galdetegia';
$string['state_approved'] = 'Onartuta';
$string['state_change_tooltip_approved'] = 'Galdera onartuta dago. Egin klik hemen galderaren egoera aldatzeko';
$string['state_change_tooltip_changed'] = 'Galdera aldatuta dago. Egin klik hemen galderaren egoera aldatzeko';
$string['state_change_tooltip_disapproved'] = 'Galdera onartu gabe dago. Egin klik hemen galderaren egoera aldatzeko';
$string['state_change_tooltip_new'] = 'Galdera berria da. Egin klik hemen galderaren egoera aldatzeko';
$string['state_changed'] = 'Aldatuta';
$string['state_column_name'] = 'Egoera';
$string['state_column_name_veryshort'] = 'Eg.';
$string['state_disapproved'] = 'Baztertuta';
$string['state_new'] = 'Berria';
$string['state_toggle'] = 'Aldatu egoera';
$string['statistic_block_approvals'] = 'Onartutako galderak';
$string['statistic_block_created'] = 'Sortutako galderak';
$string['statistic_block_disapprovals'] = 'Baztertutako galderak';
$string['statistic_block_new_changed'] = 'Galdera berriak/aldatuta';
$string['statistic_block_progress_available'] = 'Eskuragarri dauden galderak';
$string['statistic_block_progress_last_attempt_correct'] = 'Azken saiakerako zuzenak';
$string['statistic_block_progress_last_attempt_incorrect'] = 'Azken saiakerako okerrak';
$string['statistic_block_progress_never'] = 'Inoiz erantzun gabeko galderak';
$string['statistic_block_title'] = 'Nire Aurrerapena';
$string['studentquiz'] = 'ikasle-galdetegia';
$string['studentquiz:addinstance'] = 'Gehitu Ikasle-Galdetegiaren instantzia berria';
$string['studentquiz:canselfratecomment'] = 'Puntuazioa eta iruzkinak aurrebistan';
$string['studentquiz:changestate'] = 'Zehaztu galderaren egoera IkasleGaldetegian';
$string['studentquiz:emailnotifyapproved'] = 'Galdera-onarpenen jakinarazpena';
$string['studentquiz:emailnotifychanged'] = 'Galdera-aldaketen jakinarazpena';
$string['studentquiz:emailnotifycommentadded'] = 'Iruzkina egin izanaren jakinarazpena';
$string['studentquiz:emailnotifycommentdeleted'] = 'Iruzkina ezabatu izanaren jakinarazpena';
$string['studentquiz:emailnotifyquestion'] = 'Erabiltzaileak bere galderen posta elektroniko bidezko jakinarazpena jasotzen du';
$string['studentquiz:manage'] = 'Editatu eta ezabatu galderak Ikasle-Galdetegian';
$string['studentquiz:organize'] = 'Mugitu galderak kategorietara IkasleGaldetegian';
$string['studentquiz:previewothers'] = 'Aurreikusi Ikasle-Galdetegiko besteen galderak';
$string['studentquiz:submit'] = 'Sortu galderak Ikasle-Galdetegian';
$string['studentquiz:systemnotifytaskdeleteorphanedquestions'] = 'Galdera umezurtzen ezabaketaren jakinarazpena';
$string['studentquiz:unhideanonymous'] = 'Benetako izenak ikusi ditzake anonimotasuna gaituta badago ere';
$string['studentquiz:view'] = 'Ikusi eta erabili galderak Ikasle-Galdetegian';
$string['studentquizname'] = 'Ikasle-Galdetegiaren Izena';
$string['studentquizname_help'] = 'Ikasle-Galdetegi jardueran honen izena';
$string['submissionendbeforestart'] = 'Galderak egiteko amaiera-data ezin da hasiera-data baino lehenagokoa izan.';
$string['tags'] = 'Etiketak';
$string['unapprove'] = 'Baztertu';
