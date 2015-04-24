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
 * Strings for component 'scheduler', language 'ja', branch 'MOODLE_28_STABLE'
 *
 * @package   scheduler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['action'] = '操作';
$string['addappointment'] = '別の学生を追加する';
$string['addondays'] = '面会予約を追加する';
$string['addscheduled'] = '予定学生を追加する';
$string['addscheduled_help'] = '<h3>スロットセットアップで面会予約を追加する</h3>
<p>このリンクを使用することで、あなたはこのスロット情報で定義された面会予約リストにユーザを追加することができます。これは集団面会予約をセットアップするシンプルで早い方法です。</p>';
$string['addsingleslot'] = '単一スロットを追加する';
$string['addslot'] = 'あなたはいつでも面会予約スロットを追加することができます。';
$string['addstudenttogroup'] = 'この学生を面会予約グループに追加する';
$string['allowgroup'] = '排他的スロット - 変更するにはクリック';
$string['allslotsincloseddays'] = 'すべてのスロットは終了しています。';
$string['allteachersgrading'] = '教師はすべての面会予約を評定できる';
$string['alreadyappointed'] = 'すでにスロットが予約で一杯のため、面会予約できません。';
$string['appointagroup'] = 'グループ面会予約';
$string['appointagroup_help'] = 'あなたのみ面会予約したいか、それともグループ全体で予約したいか選択してください。';
$string['appointfor'] = '面会予約';
$string['appointformygroup'] = '私のグループ全体を予約する';
$string['appointingstudent'] = 'スロットの面会予約';
$string['appointingstudentinnew'] = '新しいスロットの面会予約';
$string['appointmentmode'] = '面会予約モード設定';
$string['appointmentno'] = '面会予約 {$a}';
$string['appointmentnotes'] = '面会予約メモ';
$string['appointments'] = '面会予約';
$string['appointsolo'] = '私のみ';
$string['appointsomeone'] = '新しい面会予約を追加する';
$string['attendable'] = '出席可能';
$string['attendablelbl'] = 'スケジューリングの候補者合計';
$string['attended'] = '出席済み';
$string['attendedlbl'] = '出席済み学生数';
$string['attendedslots'] = '参加済みスロット';
$string['availableslots'] = '利用可能なスロット';
$string['availableslotsall'] = 'すべてのスロット';
$string['availableslotsnotowned'] = '自分以外のスロット';
$string['availableslotsowned'] = '自分のスロット';
$string['bookwithteacher'] = '教師';
$string['bookwithteacher_help'] = '面会予約の教師を選択してください。';
$string['break'] = 'スロット間の休憩時間';
$string['breaknotnegative'] = '休憩時間の長さはマイナスにすることができません。';
$string['cancelledbystudent'] = '{$a} : 学生によりキャンセルまたは移動された面会予約';
$string['cancelledbyteacher'] = '{$a} : 教師によりキャンセルされた面会予約';
$string['choice'] = '選択';
$string['chooseexisting'] = '既存のスロットを選択する';
$string['choosingslotstart'] = '既存の開始時間の選択';
$string['comments'] = 'コメント';
$string['complete'] = '予約済';
$string['composeemail'] = 'メールを作成する:';
$string['confirmdelete'] = '削除は元に戻すことができません。本当に続けてもよろしいですか?';
$string['conflictingslots'] = '衝突';
$string['course'] = 'コース';
$string['csvencoding'] = 'ファイルテキストエンコーディング';
$string['csvfieldseparator'] = 'CSVフィールドセパレータ';
$string['csvparms'] = 'CSVフォーマットパラメータ';
$string['csvrecordseparator'] = 'CSVレコードセパレータ';
$string['date'] = '日付';
$string['datelist'] = '概要';
$string['defaultslotduration'] = 'デフォルトのスロット継続時間';
$string['defaultslotduration_help'] = 'あなたが設定する面会予約スロットのデフォルト長 (分) です。';
$string['deleteallslots'] = 'すべてのスロットを削除する';
$string['deleteallunusedslots'] = '未使用のスロットすべてを削除する';
$string['deletemyslots'] = '私のスロットすべてを削除する';
$string['deleteselection'] = '選択したスロットを削除する';
$string['deletetheseslots'] = 'これらのスロットを削除する';
$string['deleteunusedslots'] = '私の未使用スロットを削除する';
$string['department'] = 'どこから?';
$string['disengage'] = '私の面会予約をキャンセルする';
$string['displayfrom'] = '学生に面会予約を表示する';
$string['distributetoslot'] = 'グループ全体に分配する';
$string['divide'] = 'スロットを分割しますか?';
$string['dontforgetsaveadvice'] = 'あなたは面会予約ユーザリストを変更しました。変更を確実にするため、このフォームを忘れずに保存してください。';
$string['downloadexcel'] = 'Excelにエクスポートする';
$string['downloads'] = 'ダウンロード';
$string['duration'] = '継続期間';
$string['durationrange'] = 'スロット継続時間は {$a->min} から {$a->max} 分の間に設定する必要があります。';
$string['email_applied_plain'] = 'コースの学生「 {$a->attendee} 」により、{$a->date} {$a->time} の面会予約が申請されました:

{$a->course_short}: {$a->course}

ウェブサイト「 {$a->site} 」のスケジューラ「 {$a->module} 」を使用しています。';
$string['email_applied_subject'] = '{$a->course_short}: 新しい面会予約';
$string['email_cancelled_plain'] = 'ウェブサイト「 {$a->site} 」のスケジューラ「 {$a->module} 」において、あなたのコース「 {$a->course_short}: {$a->course} 」の学生「 {$a->attendant} 」との {$a->date} {$a->time} の面会予約がキャンセルまたは移動されました。';
$string['email_cancelled_subject'] = '{$a->course_short}: 学生による面会予約のキャンセルまたは移動';
$string['emailreminder'] = 'リマインダをメール送信する';
$string['emailreminderondate'] = 'リマインダをメール送信する';
$string['email_reminder_plain'] = 'あなたには近日中の面会予約があります。
面会予約日時: {$a->date} {$a->time} - {$a->endtime}
参加者: {$a->attendant}.

ロケーション: {$a->location}';
$string['email_reminder_subject'] = '{$a->course_short}: 面会予約リマインダ';
$string['email_teachercancelled_plain'] = 'ウェブサイト「 {$a->site} 」のスケジューラ「 {$a->module} 」において、あなたのコース「 {$a->course_short}: {$a->course} 」の「 {$a->staffrole} {$a->attendant} 」との {$a->date} {$a->time} の面会予約がキャンセルされました。

新しいスロットを申請してください。';
$string['email_teachercancelled_subject'] = '{$a->course_short}: 教師によりキャンセルされた面会予約';
$string['end'] = '終了';
$string['endtime'] = '終了時間';
$string['exclusive'] = '排他的';
$string['exclusivity'] = '排他性';
$string['exclusivity_help'] = '<p>あなたはスロットに適用できる学生総数を設定することができます。</p>
<p>制限を「1」 (デフォルト) にした場合、スロットは排他モードになります。</p>
<p>スロットが無制限 (0) に設定された場合、同じ時間枠で他のスロットが排他または制限設定されたとしても、このスロットは制約評価とみなされません。
</p>';
$string['exclusivitylockedto'] = 'あなたはスケジューリング時にスロットを変更することはできません。現在の目的スロットの制限が適用されます。スロットが新しい場合、デフォルト制限の「1」が適用されます。';
$string['exclusivityoverload'] = 'スロットにはこの設定を超える {$a} 名の学生予約があります。';
$string['explaingeneralconfig'] = 'これらのオプションはサイトレベルでのみ設定することができます。また、このMoodleインストレーションのスケジューラすべてに適用されます。';
$string['exportinstructions'] = '生成されたエクスポートファイルを使用する前に、あなたのハードドライブに保存してください。';
$string['finalgrade'] = '最終評点';
$string['for'] = '-';
$string['forbidgroup'] = 'グループスロット - 変更するにはクリック';
$string['forcewhenoverlap'] = '重複時に強制する';
$string['forcourses'] = 'コースの学生を選択する';
$string['friday'] = '金曜日';
$string['generalconfig'] = '一般設定';
$string['grade'] = '評点';
$string['gradingstrategy'] = '評定方法';
$string['gradingstrategy_help'] = 'スケジューラにおいて、学生が複数の面会予約を申請できる場合、評点の総計方法を選択してください。学生の評点が「評点平均」または「最高評点」であっても、評定表に表示することができます。';
$string['group'] = 'グループ';
$string['groupbreakdown'] = 'グループサイズ';
$string['groupscheduling'] = 'グループスケジューリングを有効にする';
$string['groupscheduling_desc'] = 'グループ全体を一度にスケジュールできるようにします (この機能を有効にするには、グローバルオプションは別として、活動グループモードを「可視グループ」または「分離グループ」に設定する必要があります)。';
$string['groupsession'] = 'グループセッション';
$string['groupsize'] = 'グループサイズ';
$string['guestscantdoanything'] = 'ゲストはここで何もできません。';
$string['howtoaddstudents'] = '学生をグローバルスコープのスケジューラに追加する場合、モジュールのロール設定を選択してください。<br　/>あなたの学生の世話役を定義する場合、モジュールロール定義を使用することもできます。';
$string['ignoreconflicts'] = 'スケジューリング衝突を無視する';
$string['ignoreconflicts_help'] = 'このチェックボックスをチェックした場合、他のスロットが同一時間に存在したとしても、スロットはリクエストされた日時に移動されます。これは教師または学生に対して、面会予約の重複を招く可能性があるため、注意して使用してください。';
$string['incourse'] = '- コース';
$string['introduction'] = '説明';
$string['invitation'] = '招待';
$string['invitationtext'] = '面会予約のタイムスロットを選択してください:';
$string['isnonexclusive'] = '非排他的';
$string['lengthbreakdown'] = 'スロット継続時間';
$string['limited'] = '制限 (残り {$a})';
$string['location'] = 'ロケーション';
$string['location_help'] = '面会予約のロケーションを指定してください。';
$string['markasseennow'] = '「面会済み」にマークする';
$string['markseen'] = 'あなたが学生と面会した後、上記テーブル内の適切なチェックボックスをチェックして、「面会済み」にマークしてください。';
$string['maxgrade'] = '最高評点';
$string['maxstudentlistsize'] = '学生リストの最大長';
$string['maxstudentlistsize_desc'] = '面会予約する必要のある学生リストの最大長です。スケジューラの教師ビューに表示されます。この数より学生数が多い場合、リストは表示されません。';
$string['maxstudentsperslot'] = 'スロットあたりの最大学生数';
$string['maxstudentsperslot_desc'] = 'グループスロット / 非排他的スロットでは、最大でこの数の学生を登録することができます。加えて、スロットに対して常に設定「無制限」を選択できることに留意してください。';
$string['meangrade'] = '評点平均';
$string['meetingwith'] = '面会スケジュール:';
$string['meetingwithplural'] = '面会スケジュール:';
$string['mins'] = '分';
$string['minutes'] = '分';
$string['minutesperslot'] = 'スロットあたりの時間 (分)';
$string['missingstudents'] = '{$a} 名の学生が面会予約する必要があります。';
$string['missingstudentsmany'] = '{$a} 名の学生が面会予約する必要があります。サイズのため、リストは表示されません。';
$string['mode'] = 'モード';
$string['modulename'] = 'スケジューラ';
$string['modulenameplural'] = 'スケジューラ';
$string['monday'] = '月曜日';
$string['move'] = '変更';
$string['moveslot'] = 'スロットを移動する';
$string['multiplestudents'] = 'スロットに複数学生の追加を許可しますか?';
$string['myappointments'] = '私の面会予約';
$string['name'] = 'スケジューラ名';
$string['needteachers'] = '教師が存在しないため、このコースにスロットを追加することはできません。';
$string['negativerange'] = '範囲がマイナスです。これは受け入れられません。';
$string['never'] = 'なし';
$string['newappointment'] = '{$a} : 新しい面会予約';
$string['noappointments'] = '面会予約なし';
$string['noexistingstudents'] = '既存の学生なし';
$string['nogroups'] = 'スケジュール可能なグループはありません。';
$string['noresults'] = '結果なし';
$string['noschedulers'] = 'スケジューラはありません。';
$string['noslots'] = '利用できる面会予約スロットはありません。';
$string['noslotsopennow'] = '現在、開いているスロットはありません。';
$string['nostudents'] = '面会予約している学生はいません。';
$string['nostudenttobook'] = '面会予約できる学生はいません。';
$string['note'] = '評点';
$string['noteacherforslot'] = 'スロットの教師はいません。';
$string['noteachershere'] = '利用可能な教師はいません。';
$string['notifications'] = '通知';
$string['notifications_help'] = 'このオプションを有効にした場合、教師および学生に対して、面会予約の申し込みまたはキャンセルが通知されます。';
$string['notselected'] = 'あなたはまだ選択していません。';
$string['now'] = '今から';
$string['occurrences'] = '発生';
$string['on'] = '-';
$string['onedaybefore'] = 'スロット1日前';
$string['oneslotadded'] = '1 スロットが追加されました。';
$string['oneweekbefore'] = 'スロット1週間前';
$string['onthemorningofappointment'] = '面会予約日の朝';
$string['overall'] = '全体';
$string['overlappings'] = 'いくつかの他のスロットが重複しています。';
$string['pluginadministration'] = 'スケジューラ管理';
$string['pluginname'] = 'スケジューラ';
$string['registeredlbl'] = '面会予約済み学生';
$string['reminder'] = 'リマインダ';
$string['remindertext'] = 'これはあなたがまだ面会予約していないことに関する通知です。できるだけ早くタイムスロットを設定してください:';
$string['remindtitle'] = '{$a}: 面会予約リマインダ';
$string['remindwithwhom'] = '予定面会予約';
$string['resetappointments'] = '面会予約および評点を削除する';
$string['resetslots'] = 'スケジューラスロットを削除する';
$string['return'] = 'コースに戻る';
$string['revoke'] = '面会予約を取り消す';
$string['saturday'] = '土曜日';
$string['save'] = '保存';
$string['savechoice'] = '私の選択を保存する';
$string['savecomment'] = 'コメントを保存する';
$string['saveseen'] = '「面会済み」を保存する';
$string['schedule'] = 'スケジュール';
$string['scheduleappointment'] = '{$a} の面会予約スケジュール';
$string['schedulecancelled'] = '{$a} : あなたの面会予約はキャンセルまたは移動されました。';
$string['schedulegroups'] = 'グループごとのスケジュール';
$string['scheduleinnew'] = '新しいスロットのスケジュール';
$string['scheduler'] = 'スケジューラ';
$string['scheduler:addinstance'] = '新しいスケジューラを追加する';
$string['scheduler:appoint'] = '面会予約';
$string['scheduler:attend'] = '学生を世話する';
$string['scheduler:canscheduletootherteachers'] = '他のスタッフメンバーの面会予約を決定する';
$string['scheduler:canseeotherteachersbooking'] = '他の教師の面会予約を閲覧する';
$string['scheduler:disengage'] = 'すべての面会予約を取り消す (学生)';
$string['scheduler:manage'] = 'あなたのスロットおよび面会予約を管理する';
$string['scheduler:manageallappointments'] = 'すべてのスケジューラデータを管理する';
$string['scheduler:seeotherstudentsbooking'] = 'スロット内の他の学生の面会予約を閲覧する';
$string['scheduler:seeotherstudentsresults'] = '他のスロット内の学生の結果を閲覧する';
$string['schedulestudents'] = '学生ごとのスケジュール';
$string['seen'] = '面会済み';
$string['showemailplain'] = 'メールアドレスをプレインテキストに表示する';
$string['showemailplain_desc'] = 'スケジューラの教師ビューにおいて、mailto: リンクに加えて、面会予約が必要な学生のメールアドレスをプレインテキストで表示します。';
$string['slots'] = 'スロット';
$string['slotsadded'] = '{$a} スロットが追加されました。';
$string['slottype'] = 'スロットタイプ';
$string['slotupdated'] = '1 スロットが更新されました。';
$string['staffbreakdown'] = '{$a}';
$string['staffmember'] = 'スタッフメンバー';
$string['staffrolename'] = '教師のロール名';
$string['staffrolename_help'] = '学生を世話するロールのラベルです。これは必ずしも「教師」である必要はありません。';
$string['start'] = '開始';
$string['starttime'] = '開始時間';
$string['statistics'] = '統計';
$string['strdownloadcsvgrades'] = '評点のCSVエクスポート';
$string['strdownloadcsvslots'] = 'スロットのCSVエクスポート';
$string['strdownloadexcelsingle'] = 'Excelエクスポート (1シート)';
$string['strdownloadexcelteachers'] = 'Excelエクスポート ({$a} 別)';
$string['strdownloadodssingle'] = 'OpenDocエクスポート (1シート)';
$string['strdownloadodsteachers'] = 'OpenDocエクスポート ({$a} 別)';
$string['student'] = '学生';
$string['studentbreakdown'] = '学生';
$string['studentcomments'] = '学生メモ';
$string['studentdetails'] = '学生詳細';
$string['studentmultiselect'] = 'それぞれの学生はこのスロットで１回のみ選択することができます。';
$string['studentnotes'] = '面会予約に関するあなたのメモ';
$string['students'] = '学生';
$string['sunday'] = '日曜日';
$string['teacher'] = '教師';
$string['thursday'] = '木曜日';
$string['tuesday'] = '火曜日';
$string['unattended'] = '出席なし';
$string['unlimited'] = '無制限';
$string['unregisteredlbl'] = '面会予約未了の学生';
$string['updategrades'] = '評点を更新する';
$string['updatesingleslot'] = '&nbsp;';
$string['updatingappointment'] = '面会予約の更新';
$string['wednesday'] = '水曜日';
$string['welcomenewstudent'] = '下記テーブルには、利用可能なスロットすべてを表示しています。ラジオボタンをチェックすることにより、あなたの選択を決定して、忘れずに「私の選択を保存する」をクリックしてください。あなたが後で内容を変更したい場合、このページに再度アクセスしてください。';
$string['welcomenewteacher'] = 'あなたの学生すべてとの面会予約を追加するには、下のボタンをクリックしてください。';
$string['what'] = '何を?';
$string['whathappened'] = '何が起きた?';
$string['whatresulted'] = '結果は?';
$string['when'] = 'いつ?';
$string['where'] = 'どこで?';
$string['who'] = '誰と?';
$string['whosthere'] = '誰がそこにいましたか?';
$string['xdaysbefore'] = 'スロットまで {$a} 日';
$string['xweeksbefore'] = 'スロットまで {$a} 週間';
$string['yourappointmentnote'] = 'あなたの見解によるメモ';
$string['yourslotnotes'] = '面会のコメント';
