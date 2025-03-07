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
 * Strings for component 'backup', language 'ja', version '4.1'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'バックアップ処理が完了しました。';
$string['asyncbackupcompletebutton'] = '続ける';
$string['asyncbackupcompletedetail'] = 'バックアップ処理が正常に完了しました。<br/>あなたは<a href="{$a}">リストアページ</a>でバックアップにアクセスできます。';
$string['asyncbackuperror'] = 'バックアップ処理に失敗しました。';
$string['asyncbackuperrordetail'] = 'バックアップ処理に失敗しました。あなたのシステム管理者にご連絡ください。';
$string['asyncbackuppending'] = 'バックアップ処理は保留中です。';
$string['asyncbackupprocessing'] = 'バックアップは処理中です。';
$string['asyncbadexecution'] = '正しくないバックアップコントローラの実行です。{$a} は2にしてください。';
$string['asynccheckprogress'] = 'あなたは<a href="{$a}">リストアページ</a>でいつでも進捗を確認できます。';
$string['asyncemailenable'] = 'メッセージ通知を有効にする';
$string['asyncemailenabledetail'] = 'この設定を有効にした場合、ユーザは非同期リストアまたはバックアップ完了時にメッセージを受信します。';
$string['asyncgeneralsettings'] = '非同期バックアップ/リストア';
$string['asyncmessagebody'] = 'メッセージ';
$string['asyncmessagebodydefault'] = 'あなたの {operation} (ID: {backupid}) が正常に完了しました。あなたはここでアクセスできます: {link}';
$string['asyncmessagebodydetail'] = '非同期バックアップまたはリストア完了時に送信されるメッセージです。';
$string['asyncmessagesubject'] = '件名';
$string['asyncmessagesubjectdefault'] = 'Moodleは {operation} を正常に完了しました。';
$string['asyncmessagesubjectdetail'] = 'メッセージ件名';
$string['asyncnowait'] = '処理はバックグランドで続けられるため、あなたはここで待つ必要はありません。';
$string['asyncprocesspending'] = '処理保留中';
$string['asyncrestorecomplete'] = 'リストア処理が完了しました。';
$string['asyncrestorecompletebutton'] = '続ける';
$string['asyncrestorecompletedetail'] = 'リストア処理が正常に完了しました。あなたは「続ける」をクリックして<a href="{$a}">リストア済みアイテムのコース</a>に移動できます。';
$string['asyncrestoreerror'] = 'リストア処理に失敗しました。';
$string['asyncrestoreerrordetail'] = 'リストア処理に失敗しました。あなたのシステム管理者にご連絡ください。';
$string['asyncrestoreinprogress'] = 'リストア処理中';
$string['asyncrestoreinprogress_help'] = '処理中の非同期コースリストアはここに表示されます。';
$string['asyncrestorepending'] = 'リストア処理は保留中です。';
$string['asyncrestoreprocessing'] = 'リストアは処理中です。';
$string['asyncreturn'] = 'コースに戻る';
$string['autoactivedescription'] = '自動バックアップを実行するかどうか選択してください。「手動」が選択された場合、自動バックアップは自動バックアップCLIスクリプトでのみ実行できます。これはコマンドラインを使った手動またはcronスクリプトを通して実行できます。';
$string['autoactivedisabled'] = '無効';
$string['autoactiveenabled'] = '有効';
$string['autoactivemanual'] = '手動';
$string['automatedbackupschedule'] = 'スケジュール';
$string['automatedbackupschedulehelp'] = '自動バックアップを実行する週の曜日を選択してください。';
$string['automatedbackupsinactive'] = '自動バックアップはサイト管理者により有効にされていません。';
$string['automatedbackupstatus'] = '自動バックアップステータス';
$string['automateddeletedays'] = '次より古いバックアップを削除する';
$string['automatedmaxkept'] = 'バックアップ最大保持数';
$string['automatedmaxkepthelp'] = 'ここではそれぞれのコースの最新の自動バックアップの最大保持数を指定します。古いバックアップは自動的に削除されます。';
$string['automatedminkept'] = 'バックアップ最小保持数';
$string['automatedminkepthelp'] = '指定した日数よりも古いバックアップが削除された場合、休止中のコースにバックアップがない状況が生じることがあります。これを防ぐためにはバックアップを保持する最小数を指定してください。';
$string['automatedsettings'] = '自動バックアップ設定';
$string['automatedsetup'] = '自動バックアップ設定';
$string['automatedstorage'] = '自動バックアップストレージ';
$string['automatedstoragehelp'] = '自動バックアップ作成時にあなたがバックアップを保存したい場所を選択してください。';
$string['backupactivity'] = '活動をバックアップする: {$a}';
$string['backupautoactivitiesdescription'] = 'バックアップに活動を含めるためのデフォルトを設定します。ごみ箱を機能させるためにはこの設定を有効にする必要があります。';
$string['backupcourse'] = 'コースをバックアップする: {$a}';
$string['backupcoursedetails'] = 'コース詳細';
$string['backupcoursesection'] = 'セクション: {$a}';
$string['backupcoursesections'] = 'コースセクション';
$string['backupdate'] = '取得日時';
$string['backupdetails'] = 'バックアップ詳細';
$string['backupdetailsnonstandardinfo'] = '選択されたファイルは標準的なMoodleバックアップファイルではありません。リストア処理はバックアップファイルの標準的なフォーマットへの変換およびリストアを試みます。';
$string['backupformat'] = 'フォーマット';
$string['backupformatimscc1'] = 'IMS共通カートリッジ 1.0';
$string['backupformatimscc11'] = 'IMS共通カートリッジ 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = '不明なフォーマット';
$string['backuplog'] = '技術情報および警告';
$string['backupmode'] = 'モード';
$string['backupmode10'] = '一般';
$string['backupmode20'] = 'インポート';
$string['backupmode30'] = 'ハブ';
$string['backupmode40'] = '同一サイト';
$string['backupmode50'] = '自動';
$string['backupmode60'] = 'コンバート';
$string['backupmode70'] = '非同期';
$string['backupsection'] = 'コースセクションをバックアップする: {$a}';
$string['backupsettings'] = 'バックアップ設定';
$string['backupsitedetails'] = 'サイト詳細';
$string['backupstage16action'] = '続ける';
$string['backupstage1action'] = '次へ';
$string['backupstage2action'] = '次へ';
$string['backupstage4action'] = 'バックアップを実行する';
$string['backupstage8action'] = '続ける';
$string['backuptype'] = 'タイプ';
$string['backuptypeactivity'] = '活動';
$string['backuptypecourse'] = 'コース';
$string['backuptypesection'] = 'セクション';
$string['backupversion'] = 'バックアップバージョン';
$string['cannotfindassignablerole'] = 'あなたが割り当てを許可されているロールにバックアップファイル内のロール {$a} をマップできません。';
$string['choosefilefromactivitybackup'] = '活動バックアップエリア';
$string['choosefilefromactivitybackup_help'] = 'デフォルト設定を使用した活動バックアップがここに保存されます。';
$string['choosefilefromautomatedbackup'] = '自動バックアップ';
$string['choosefilefromautomatedbackup_help'] = '自動生成バックアップを含みます。';
$string['choosefilefromcoursebackup'] = 'コースバックアップエリア';
$string['choosefilefromcoursebackup_help'] = 'デフォルト設定を使用したコースバックアップがここに保存されます。';
$string['choosefilefromuserbackup'] = 'ユーザプライベートバックアップエリア';
$string['choosefilefromuserbackup_help'] = 'ユーザ情報を匿名化したバックアップファイルがここに保存されます。';
$string['config_keep_groups_and_groupings'] = 'デフォルトで現在のグループおよびグルーピングを保持します。';
$string['config_keep_roles_and_enrolments'] = 'デフォルトで現在のロールおよび登録を保持します。';
$string['config_overwrite_conf'] = 'ユーザが現在のコース設定を上書きできるようにします。';
$string['config_overwrite_course_fullname'] = 'デフォルトではバックアップファイルからコースフルネームを上書きします。これには「コース設定を上書きする」をチェックして現在のユーザにコースフルネームを変更するケイパビリティ(moodle/course:changefullname) が割り当てられている必要があります。';
$string['config_overwrite_course_shortname'] = 'デフォルトではバックアップファイルからコース省略名を上書きします。これには「コース設定を上書きする」をチェックして現在のユーザにコース省略名を変更するケイパビリティ(moodle/course:changeshortname) が割り当てられている必要があります。';
$string['config_overwrite_course_startdate'] = 'デフォルトではバックアップファイルからコース開始日を上書きします。これには「コース設定を上書きする」をチェックして現在のユーザにコース開始日を変更するケイパビリティ(moodle/restore:rolldates) が割り当てられている必要があります。';
$string['configgeneralactivities'] = '活動をバックアップに含むかどうかデフォルトを設定します。';
$string['configgeneralanonymize'] = 'この設定を有効にした場合、ユーザに関する情報がデフォルトで匿名化されます。';
$string['configgeneralbadges'] = 'バッジをバックアップに含むかどうかデフォルトを設定します。';
$string['configgeneralblocks'] = 'ブロックをバックアップに含むかどうかデフォルトを設定します。';
$string['configgeneralcalendarevents'] = 'カレンダーイベントをバックアップに含むかどうかデフォルトを設定します。';
$string['configgeneralcomments'] = 'コメントをバックアップに含むかどうかデフォルトを設定します。';
$string['configgeneralcompetencies'] = 'コンピテンシをバックアップに含むかどうかデフォルトを設定します。';
$string['configgeneralcontentbankcontent'] = 'コンテンツバンクコンテンツをバックアップに含むかどうかデフォルトを設定します。';
$string['configgeneralfiles'] = 'バックアップに含むファイルのデフォルトを設定します。次に留意してください: この設定を無効にすることによりバックアップにはファイルへの参照のみ含まれることになります。バックアップが同じサイトにリストアされる場合、および設定「ゴミ箱ファイルを削除する」 (filescleanupperiod) によりファイルが削除されていない場合、これは問題になりません。';
$string['configgeneralfilters'] = 'フィルタをバックアップに含むかどうかデフォルトを設定します。';
$string['configgeneralgroups'] = 'グループおよびグルーピングをバックアップに含むかどうかデフォルトを設定します。';
$string['configgeneralhistories'] = 'ユーザ履歴をバックアップに含むかどうかデフォルトを設定します。';
$string['configgenerallogs'] = 'ログをバックアップに含むかどうかデフォルトを設定します。';
$string['configgeneralpermissions'] = 'この設定を有効にした場合、ロールパーミッションがインポートされます。これにより既存の登録済みユーザのパーミッションをオーバーライドします。';
$string['configgeneralquestionbank'] = 'この設定を有効にした場合、問題バンクがデフォルトでバックアップに含まれます。注意: この設定を無効にした場合、小テストのように問題バンクを使用する活動のバックアップも無効にされます。';
$string['configgeneralroleassignments'] = 'この設定を有効にした場合、デフォルトのロール割り当てもバックアップに含まれます。';
$string['configgeneralusers'] = 'バックアップにユーザを含むかどうかデフォルトを設定します。';
$string['configgeneraluserscompletion'] = 'ユーザ完了情報をバックアップに含むかどうかデフォルトを設定します。';
$string['configlegacyfiles'] = 'バックアップにレガシコースファイルを含む場合のデフォルトを設定してください。レガシコースファイルはMoodle 2.0以前のバージョンです。';
$string['configloglifetime'] = 'ここではあなたが希望するバックアップログ情報の保持期間を指定します。設定値より古いログは自動的に削除されます。バックアップログ情報は肥大化する可能性があるため、この値を小さく設定することをお勧めします。';
$string['configrestoreactivities'] = '活動のリストアのデフォルトを設定します。';
$string['configrestorebadges'] = 'バッジのリストアのデフォルトを設定します。';
$string['configrestoreblocks'] = 'ブロックのリストアのデフォルトを設定します。';
$string['configrestorecalendarevents'] = 'カレンダーイベントのリストアのデフォルトを設定します。';
$string['configrestorecomments'] = 'コメントのリストアのデフォルトを設定します。';
$string['configrestorecompetencies'] = 'コンピテンシのリストアのデフォルトを設定します。';
$string['configrestorecontentbankcontent'] = 'コンテンツバンクコンテンツをリストアに含むかどうかデフォルトを設定します。';
$string['configrestoreenrolments'] = '登録方法のリストアのデフォルトを設定します。';
$string['configrestorefilters'] = 'フィルタのリストアのデフォルトを設定します。';
$string['configrestoregroups'] = 'バックアップに含まれている場合のグループおよびグルーピングのリストアのデフォルトを設定します。';
$string['configrestorehistories'] = 'バックアップに含まれている場合のユーザ履歴のリストアのデフォルトを設定します。';
$string['configrestorelogs'] = 'バックアップに含まれている場合のログのリストアのデフォルトを設定します。';
$string['configrestorepermissions'] = 'この設定を有効にした場合、ロールパーミッションがリストアされます。これにより既存の登録済みユーザのパーミッションをオーバーライドします。';
$string['configrestoreroleassignments'] = 'バックアップに含まれている場合のロール割り当てのリストアのデフォルトを設定します。';
$string['configrestoreusers'] = 'バックアップに含まれている場合のユーザのリストアのデフォルトを設定します。';
$string['configrestoreuserscompletion'] = 'バックアップに含まれている場合のユーザ完了情報のリストアのデフォルトを設定します。';
$string['confirmcancel'] = 'バックアップをキャンセルする';
$string['confirmcancelimport'] = 'インポートをキャンセルする';
$string['confirmcancelno'] = 'キャンセルしない';
$string['confirmcancelquestion'] = '本当にキャンセルしてもよろしいですか? あなたが入力したすべての情報は失われます。';
$string['confirmcancelrestore'] = 'リストアをキャンセルする';
$string['confirmcancelyes'] = 'バックアップをキャンセルする';
$string['confirmnewcoursecontinue'] = '新しいコース警告';
$string['confirmnewcoursecontinuequestion'] = 'コースリストア処理中、一時 (非表示) コースが作成されます。リストアを中止するには「キャンセル」をクリックしてください。リストア処理中はブラウザを閉じないでください。';
$string['copiesinprogress'] = 'このコースはコピー処理中です。<a href="{$a}">処理中のコピーを表示します。</a>';
$string['copycoursedesc'] = 'このコースは複製されて選択されたコースカテゴリに設置されます。';
$string['copycourseheading'] = 'コースをコピーする';
$string['copycoursetitle'] = 'コースをコピーする: {$a}';
$string['copydest'] = '宛先';
$string['copyfieldnotfound'] = '次のフィールドの必須フィールドデータは見つかりませんでした: {$a}';
$string['copyformfail'] = 'コースコピーフォームのAJAX送信に失敗しました。';
$string['copyingcourse'] = 'コースコピー中';
$string['copyingcourseshortname'] = 'コピー中';
$string['copyop'] = '現在の処理';
$string['copyprogressheading'] = 'コースコピー処理中';
$string['copyprogressheading_help'] = 'このテーブルにはあなたのすべての未了コースコピーのステータスが表示されます。';
$string['copyprogresstitle'] = 'コースコピー進捗';
$string['copyreturn'] = 'コピーして戻る';
$string['copysource'] = 'ソース';
$string['copyview'] = 'コピーして表示する';
$string['coursecategory'] = 'コースがリストアされるカテゴリ';
$string['courseid'] = 'オリジナルID';
$string['coursesettings'] = 'コース設定';
$string['coursetitle'] = 'タイトル';
$string['currentstage1'] = '初期設定';
$string['currentstage16'] = '完了';
$string['currentstage2'] = 'スキーマ設定';
$string['currentstage4'] = '確認およびレビュー';
$string['currentstage8'] = 'バックアップを実行する';
$string['enableasyncbackup'] = '非同期バックアップを有効にする';
$string['enableasyncbackup_help'] = 'この設定を有効にした場合、すべてのバックアップおよびリストア処理は非同期で実行されます。これはインポートおよびエクスポートには影響しません。非同期バックアップおよびリストアによりユーザはバックアップまたはリストア処理中に他の操作を実行できます。';
$string['enterasearch'] = 'キーワードを入力する';
$string['error_block_for_module_not_found'] = 'コースモジュール (id: {$a->mid}) において、迷子のブロックインスタンス (id: {$a->bid}) が見つかりました。このブロックはバックアップされません。';
$string['error_course_module_not_found'] = '迷子のコースモジュール (id: {$a}) が見つかりました。このモジュールはバックアップされません。';
$string['errorcopyingbackupfile'] = 'リストア前の一時フォルダへのバックアップファイルのコピーに失敗しました。';
$string['errorfilenamemustbezip'] = 'あなたが入力するファイル名は.mbz拡張子を持つZIPファイルである必要があります。';
$string['errorfilenamerequired'] = 'あなたはこのバックアップに関して、有効なファイル名を入力する必要があります。';
$string['errorfilenametoolong'] = 'ファイル名は半角255文字以下の長さにしてください。';
$string['errorinvalidformat'] = '不明なバックアップフォーマットです。';
$string['errorinvalidformatinfo'] = '選択されたファイルは有効なMoodleバックアップファイルではないため、リストアすることはできません。';
$string['errorminbackup20version'] = 'このバックアップファイルは開発バージョンのMoodleバックアップ ({$a->backup}) により作成されました。最小必要条件は {$a->min} です。リストアすることはできません。';
$string['errorrestorefrontpagebackup'] = 'あなたはサイトホームでサイトホームバックアップのみリストアできます。';
$string['executionsuccess'] = 'バックアップファイルが正常に作成されました。';
$string['extractingbackupfileto'] = 'バックアップファイル展開先: {$a}';
$string['failed'] = 'バックアップ失敗';
$string['filealiasesrestorefailures'] = 'エイリアスリストア失敗';
$string['filealiasesrestorefailures_help'] = 'エイリアスは外部リポジトリに保存されたファイルを含む他のファイルへのシンボリックリンクです。一部の例ではMoodeがシンボリックリンクをリストアできない場合があります - 例えば別のサイトでのバックアップをリストアする場合、または参照ファイルが存在しくなった場合です。

詳細情報および実際のリストア失敗理由に関して、リストアログファイルをご覧ください。';
$string['filealiasesrestorefailures_link'] = 'restore/filealiases';
$string['filealiasesrestorefailuresinfo'] = 'バックアップファイルに含まれるいくつかのエイリアスをリストアすることができませんでした。以下のリストではオリジナルサイトで参照されていた予測されるロケーションおよびソースファイルを含みます。';
$string['filename'] = 'ファイル名';
$string['filereferencesincluded'] = '外部コンテンツのファイル参照がバックアップファイルに含まれます。バックアップが異なるサイトでリストアされる場合、これらは動作しません。';
$string['filereferencesnotsamesite'] = 'バックアップは異なるサイトで作成されているため、ファイル参照をリストアすることはできません。';
$string['filereferencessamesite'] = 'バックアップはこのサイトで作成されているため、ファイル参照をリストアすることができます。';
$string['generalactivities'] = '活動およびリソースを含む';
$string['generalanonymize'] = '情報を匿名化する';
$string['generalbackdefaults'] = '一般バックアップデフォルト';
$string['generalbadges'] = 'バッジを含む';
$string['generalblocks'] = 'ブロックを含む';
$string['generalcalendarevents'] = 'カレンダーイベントを含む';
$string['generalcomments'] = 'コメントを含む';
$string['generalcompetencies'] = 'コンピテンシを含む';
$string['generalcontentbankcontent'] = 'コンテンツバンクコンテンツを含む';
$string['generalenrolments'] = '登録方法を含む';
$string['generalfiles'] = 'ファイルを含む';
$string['generalfilters'] = 'フィルタを含む';
$string['generalgradehistories'] = '履歴を含む';
$string['generalgroups'] = 'グループおよびグルーピングを含む';
$string['generalhistories'] = '履歴を含む';
$string['generallegacyfiles'] = 'レガシコースファイルを含む';
$string['generallogs'] = 'ログを含む';
$string['generalpermissions'] = 'パーミッションオーバーライドを含む';
$string['generalquestionbank'] = '問題バンクを含む';
$string['generalrestoredefaults'] = '一般リストアデフォルト';
$string['generalrestoresettings'] = '一般リストア設定';
$string['generalroleassignments'] = 'ロール割り当てを含む';
$string['generalsettings'] = '一般バックアップ設定';
$string['generalusers'] = 'ユーザを含む';
$string['generaluserscompletion'] = 'ユーザ完了情報を含む';
$string['hidetypes'] = 'タイプオプションを隠す';
$string['importbackupstage16action'] = '続ける';
$string['importbackupstage1action'] = '次へ';
$string['importbackupstage2action'] = '次へ';
$string['importbackupstage4action'] = 'インポートを実行する';
$string['importbackupstage8action'] = '続ける';
$string['importcurrentstage0'] = 'コース選択';
$string['importcurrentstage1'] = '初期設定';
$string['importcurrentstage16'] = '完了';
$string['importcurrentstage2'] = 'スキーマ設定';
$string['importcurrentstage4'] = '確認およびレビュー';
$string['importcurrentstage8'] = 'インポートを実行する';
$string['importfile'] = 'バックアップファイルをインポートする';
$string['importgeneralduplicateadminallowed'] = 'admin競合解決を許可する';
$string['importgeneralduplicateadminallowed_desc'] = 'サイトにユーザ名「admin」が存在する場合、ユーザ名「admin」のアカウントを含むバックアップファイルのリストアにより競合が発生することになります。この設定を有効にした場合、バックアップファイル内のユーザ名を「admin_xyz」に変更することにより競合を解決します。';
$string['importgeneralmaxresults'] = 'インポートの最大コース一覧表示数';
$string['importgeneralmaxresults_desc'] = 'ここではインポート処理の最初のステップに一覧表示されるコース数を設定します。';
$string['importgeneralsettings'] = '一般インポートデフォルト';
$string['importrootsettings'] = 'インポート設定';
$string['importsettings'] = '一般インポート設定';
$string['importsuccess'] = 'インポートが完了しました。コースへ戻るには「続ける」をクリックしてください。';
$string['includeactivities'] = '次を含む:';
$string['includeditems'] = '含まれるアイテム:';
$string['includefilereferences'] = '外部コンテンツへのファイル参照';
$string['includesection'] = 'セクション {$a}';
$string['includeuserinfo'] = 'ユーザデータ';
$string['inprogress'] = 'バックアップ処理中';
$string['jumptofinalstep'] = '最終ステップにジャンプする';
$string['keep'] = '保持';
$string['keptroles'] = 'ロールの登録を含む';
$string['keptroles_help'] = '選択されたロールのユーザが新しいコースに登録されます。「ユーザデータを含む」が有効にされない限り、ユーザデータはコピーされません。';
$string['locked'] = 'ロック';
$string['lockedbyconfig'] = 'この設定はデフォルトバックアップ設定によりロックされています。';
$string['lockedbyhierarchy'] = 'この設定は依存関係によりロックされています。';
$string['lockedbypermission'] = 'あなたにはこの設定を変更するための十分なパーミッションがありません。';
$string['loglifetime'] = 'ログの保持期間';
$string['managefiles'] = 'バックアップファイルを管理する';
$string['mergerestoredefaults'] = '別のコースへのグループ統合時のリストアデフォルト';
$string['missingfilesinpool'] = 'バックアップ中、いくつかのファイルを保存することができませんでした。保存できなかったファイルはリストアすることができません。';
$string['module'] = 'モジュール';
$string['moodleversion'] = 'Moodleバージョン';
$string['morecoursesearchresults'] = '{$a} 件以上のコースが見つかりました。最初の {$a} 件を表示しています。';
$string['moreresults'] = '検索結果が多すぎます。さらに具体的なキーワードを入力してください。';
$string['nomatchingcourses'] = '表示するコースがありません。';
$string['norestoreoptions'] = 'あなたがリストアできるカテゴリまたは既存のコースがありません。';
$string['originalwwwroot'] = 'バックアップのURL';
$string['overwrite'] = '上書き';
$string['pendingasyncdeletedetail'] = 'このコースには保留中の非同期バックアップがあります。<br />このバックアップが終了するまでこのコースを削除できません。';
$string['pendingasyncdetail'] = '非同期バックアップではユーザには1度に1つのリソースの保留中バックアップが許可されます。<br />同じコンテンツが複数バックアップされることになるため同じリソースの複数非同期バックアップはキューに入れられません。';
$string['pendingasyncedit'] = 'このコースに保留中の非同期バックアップまたはコピーリクエストがあります。これが完了するまでこのコースを編集しないでください。';
$string['pendingasyncerror'] = 'このリソースのバックアップ保留';
$string['preparingdata'] = 'データ準備中';
$string['preparingui'] = '表示ページ準備中';
$string['previousstage'] = '前へ';
$string['privacy:metadata:backup:detailsofarchive'] = 'このアーカイブには評定、ユーザ登録および活動データのようなコースに関連する様々なデータを含むことができます。';
$string['privacy:metadata:backup:externalpurpose'] = 'このアーカイブの目的は将来的にリストアされるコースに関する情報を保存することにあります。';
$string['privacy:metadata:backup_controllers'] = 'バックアップ処理一覧です。';
$string['privacy:metadata:backup_controllers:itemid'] = 'コースIDです。';
$string['privacy:metadata:backup_controllers:operation'] = '実行された処理です。例) リストア';
$string['privacy:metadata:backup_controllers:timecreated'] = 'アクションの作成日時です。';
$string['privacy:metadata:backup_controllers:timemodified'] = 'アクションの修正日時です。';
$string['privacy:metadata:backup_controllers:type'] = '実行されたアイテムのタイプです。例) 活動';
$string['qcategory2coursefallback'] = '本来はバックアップファイルのシステム/コースカテゴリコンテクストにある問題カテゴリ「 {$a->name} 」はリストアによりコースコンテクストに作成されます。';
$string['qcategorycannotberestored'] = '問題カテゴリ「 {$a->name} 」をリストアで作成できません。';
$string['question2coursefallback'] = '本来バックアップファイルのシステム/コースカテゴリコンテクストにある問題カテゴリ「 {$a->name} 」はリストアによりコースコンテクストに作成されます。';
$string['questioncannotberestored'] = '問題カテゴリ「 {$a->name} 」をリストアで作成できません。';
$string['recyclebin_desc'] = 'これらの設定はゴミ箱にも適用されることに留意してください。';
$string['replacerestoredefaults'] = '別のコースへのコンテンツを削除したグループ統合時のリストアデフォルト';
$string['restoreactivity'] = '活動をリストアする';
$string['restorecourse'] = 'コースをリストアする';
$string['restorecoursesettings'] = 'コース設定';
$string['restoredcourseid'] = 'リストア済みコースID: {$a}';
$string['restoreexecutionsuccess'] = 'コースが正常にリストアされました。';
$string['restorefileweremissing'] = 'バックアップの中に存在しないため、いくつかのファイルをリストアすることができませんでした。';
$string['restorenewcoursefullname'] = '新しいコース名';
$string['restorenewcourseshortname'] = '新しいコース省略名';
$string['restorenewcoursestartdate'] = '新しい開講日';
$string['restorerolemappings'] = 'ロールマッピングをリストアする';
$string['restorerootsettings'] = 'リストア設定';
$string['restoresection'] = 'セクションをリストアする';
$string['restorestage1'] = '確認';
$string['restorestage16'] = 'レビュー';
$string['restorestage16action'] = 'リストアを実行する';
$string['restorestage1action'] = '次へ';
$string['restorestage2'] = '宛先';
$string['restorestage2action'] = '次へ';
$string['restorestage32'] = '処理';
$string['restorestage32action'] = '続ける';
$string['restorestage4'] = '設定';
$string['restorestage4action'] = '次へ';
$string['restorestage64'] = '完了';
$string['restorestage64action'] = '続ける';
$string['restorestage8'] = 'スキーマ';
$string['restorestage8action'] = '次へ';
$string['restoretarget'] = 'リストアターゲット';
$string['restoretocourse'] = 'コースにリストアする:';
$string['restoretocurrentcourse'] = 'このコースにリストアする';
$string['restoretocurrentcourseadding'] = 'バックアップコースをこのコースに結合する';
$string['restoretocurrentcoursedeleting'] = 'このコースのコンテンツを削除してリストアする';
$string['restoretoexistingcourse'] = '既存のコースにリストアする';
$string['restoretoexistingcourseadding'] = 'バックアップコースを既存のコースに結合する';
$string['restoretoexistingcoursedeleting'] = '既存のコースコンテンツを削除してリストアする';
$string['restoretonewcourse'] = '新しいコースとしてリストアする';
$string['restoringcourse'] = 'コースリストア処理中';
$string['restoringcourseshortname'] = 'リストア';
$string['rootenrolmanual'] = '手動登録としてリストアする';
$string['rootsettingactivities'] = '活動およびリソースを含む';
$string['rootsettinganonymize'] = 'ユーザ情報を匿名化する';
$string['rootsettingbadges'] = 'バッジを含む';
$string['rootsettingblocks'] = 'ブロックを含む';
$string['rootsettingcalendarevents'] = 'カレンダーイベントを含む';
$string['rootsettingcomments'] = 'コメントを含む';
$string['rootsettingcompetencies'] = 'コンピテンシを含む';
$string['rootsettingcontentbankcontent'] = 'コンテンツバンクコンテンツを含む';
$string['rootsettingcustomfield'] = 'カスタムフィールドを含む';
$string['rootsettingenrolments'] = '登録方法を含む';
$string['rootsettingenrolments_always'] = 'はい、常に';
$string['rootsettingenrolments_never'] = 'いいえ、手動登録としてユーザをリストアします';
$string['rootsettingenrolments_withusers'] = 'はい、ユーザが含まれている場合';
$string['rootsettingfiles'] = 'ファイルを含む';
$string['rootsettingfilters'] = 'フィルタを含む';
$string['rootsettinggradehistories'] = '評定履歴を含む';
$string['rootsettinggroups'] = 'グループおよびグルーピングを含む';
$string['rootsettingimscc1'] = 'IMS共通カートリッジ1.0にコンバートする';
$string['rootsettingimscc11'] = 'IMS共通カートリッジ1.1にコンバートする';
$string['rootsettinglegacyfiles'] = 'レガシコースファイルを含む';
$string['rootsettinglogs'] = 'コースログを含む';
$string['rootsettingpermissions'] = 'パーミッションオーバーライドを含む';
$string['rootsettingquestionbank'] = '問題バンクを含む';
$string['rootsettingroleassignments'] = 'ユーザロール割り当てを含む';
$string['rootsettings'] = 'バックアップ設定';
$string['rootsettingusers'] = '登録済みユーザを含む';
$string['rootsettinguserscompletion'] = 'ユーザ完了詳細を含む';
$string['samesitenotification'] = 'このバックアップはファイル自体ではなく、ファイルの参照のみで作成されました。このサイトでのリストアのみに機能します。';
$string['sectionactivities'] = '活動';
$string['sectioninc'] = 'バックアップに含む (ユーザ情報なし)';
$string['sectionincanduser'] = 'バックアップに含む (ユーザ情報あり)';
$string['selectacategory'] = 'カテゴリを選択する';
$string['selectacourse'] = 'コースを選択する';
$string['setting_course_fullname'] = 'コース名';
$string['setting_course_shortname'] = 'コース省略名';
$string['setting_course_startdate'] = 'コース開講日';
$string['setting_keep_groups_and_groupings'] = '現在のグループおよびグルーピングを保持する';
$string['setting_keep_roles_and_enrolments'] = '現在のロールおよび登録を保持する';
$string['setting_overwrite_conf'] = 'コース設定を上書きする';
$string['setting_overwrite_course_fullname'] = 'コースフルネームを上書きする';
$string['setting_overwrite_course_shortname'] = 'コース省略名を上書きする';
$string['setting_overwrite_course_startdate'] = 'コース開始日を上書きする';
$string['showtypes'] = 'タイプオプションを表示する';
$string['sitecourseformatwarning'] = 'これはサイトホームバックアップです。サイトホームにのみリストアできることに留意してください。';
$string['skiphidden'] = '非表示コースをスキップする';
$string['skiphiddenhelp'] = '非表示コースをスキップするかどうか選択します。';
$string['skipmodifdays'] = '次の期間更新されていないコースをスキップする';
$string['skipmodifdayshelp'] = '指定された日数の間に更新されていないコースをスキップするかどうか選択します。';
$string['skipmodifprev'] = '前回のバックアップから更新されていないコースをスキップする';
$string['skipmodifprevhelp'] = '前回のバックアップから更新されていないコースをスキップするかどうか選択してください。ロギングを有効にする必要があります。';
$string['status'] = 'ステータス';
$string['storagecourseandexternal'] = 'コースバックアップファイルエリアおよび指定ディレクトリ';
$string['storagecourseonly'] = 'コースバックアップファイルエリア';
$string['storageexternalonly'] = '自動バックアップの指定ディレクトリ';
$string['successful'] = 'バックアップに成功しました。';
$string['successfulcopy'] = 'コピー完了';
$string['successfulrestore'] = 'リストアに成功しました。';
$string['timetaken'] = '所要時間';
$string['title'] = 'タイトル';
$string['totalcategorysearchresults'] = '合計カテゴリ数: {$a}';
$string['totalcoursesearchresults'] = '合計コース数: {$a}';
$string['undefinedrolemapping'] = '「 {$a} 」アーキタイプのロールマッピングが定義されていません。';
$string['unnamedsection'] = '無名セクション';
$string['userdata'] = 'ユーザデータを含む';
$string['userdata_help'] = 'この設定を有効にした場合、「ロールの登録を含む」が選択されたすべての新しいユーザにフォーラム投稿、課題提出等のデータがコピーされます。';
$string['userinfo'] = 'ユーザ情報';
