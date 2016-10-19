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
 * Strings for component 'quiz', language 'ja', branch 'MOODLE_31_STABLE'
 *
 * @package   quiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessnoticesheader'] = 'あなたはこの小テストをプレビューすることができます。しかし、これが本当の受験の場合、あなたは次の理由でブロックされます:';
$string['action'] = '操作';
$string['activityoverview'] = 'あなたには期限の到来した小テストがあります。';
$string['adaptive'] = 'アダプティブモード';
$string['adaptive_help'] = 'この設定を有効にした場合、小テストを受験している最中でも複数回解答することができます。例えば解答が間違っている場合、学生はすぐに解答しなおすことが許されます。しかし、「ペナルティを適用する」設定に基づき、通常間違った解答ごとに評点からペナルティが引かれます。';
$string['add'] = '追加';
$string['addaquestion'] = '新しい問題';
$string['addarandomquestion'] = 'ランダム問題';
$string['addarandomquestion_help'] = 'ランダム問題を追加した場合、受験ごとに同じカテゴリよりランダムに問題が選択され小テストに追加されます。これは学生が小テストを受験する場合、異なる種類の問題群が選択されることを意味します。小テストが再受験可能な場合、それぞれの受験では新しい問題群を含むことになります。';
$string['addarandomselectedquestion'] = 'ランダム選択問題を追加する ...';
$string['addasection'] = '新しいセクションヘッディング';
$string['adddescriptionlabel'] = '説明項目を追加する';
$string['addingquestion'] = '問題の追加';
$string['addingquestions'] = '<p> ここではデータベース内の問題を管理します。問題は整理しやすいようカテゴリごとに保存されます。また、「公開」を選択した場合、コース内または他のコースの小テストで使用することができます。</p>
<p> 問題カテゴリの作成を選択した後、問題の作成または編集を行うことができます。ページの反対側にある問題リストから問題を選択して小テストに追加することができます。</p>';
$string['addmoreoverallfeedbacks'] = 'さらに {no} 個のフィードバックフィールドを追加する';
$string['addnewgroupoverride'] = 'グループオーバーライドを追加する';
$string['addnewpagesafterselected'] = '選択した問題の後に新しいページを追加する';
$string['addnewquestionsqbank'] = 'カテゴリ {$a->catname} に問題を追加する: {$a->link}';
$string['addnewuseroverride'] = 'ユーザオーバーライドを追加する';
$string['addpagebreak'] = '改ページを追加する';
$string['addpagehere'] = 'ページをここに追加する';
$string['addquestion'] = '問題を追加する';
$string['addquestionfrombankatend'] = '問題バンクから末尾に追加する';
$string['addquestionfrombanktopage'] = '問題バンクからページ {$a} に追加する';
$string['addquestions'] = '問題を追加する';
$string['addquestionstoquiz'] = '現在の小テストに問題を追加する';
$string['addrandom'] = '{$a} 問のランダム問題を追加する';
$string['addrandom1'] = '<< 追加';
$string['addrandom2'] = 'ランダム問題';
$string['addrandomfromcategory'] = 'カテゴリからランダム問題を追加する:';
$string['addrandomquestion'] = 'ランダム問題を追加する';
$string['addrandomquestionatend'] = '末尾にランダム問題を追加する';
$string['addrandomquestiontopage'] = 'ランダム問題をページ {$a} に追加する';
$string['addrandomquestiontoquiz'] = 'ランダム問題を小テスト {$a} に追加する';
$string['addselectedquestionstoquiz'] = '選択した問題を小テストに追加する';
$string['addselectedtoquiz'] = '選択したものを小テストに追加する';
$string['addtoquiz'] = '小テストに追加する';
$string['affectedstudents'] = '影響を受けた {$a}';
$string['aftereachquestion'] = 'それぞれの問題を追加した後';
$string['afternquestions'] = '問題 {$a} 問を追加した後';
$string['age'] = '作成日時';
$string['allattempts'] = 'すべての受験';
$string['allinone'] = '無制限';
$string['allowreview'] = 'レビューを許可する';
$string['alreadysubmitted'] = 'あなたはすでにこの受験を送信しているようです。';
$string['alternativeunits'] = '代替単位';
$string['alwaysavailable'] = '常時利用可能';
$string['analysisoptions'] = '分析オプション';
$string['analysistitle'] = 'アイテム分析テーブル';
$string['answer'] = '答え';
$string['answered'] = '解答済み';
$string['answerhowmany'] = '単一または複数解答?';
$string['answers'] = '正解';
$string['answersingleno'] = '複数解答を許可する';
$string['answersingleyes'] = '単一の解答のみ';
$string['answertoolong'] = '{$a} 行以降の解答が長すぎます (最大、半角255文字)';
$string['aon'] = 'AONフォーマット';
$string['areyousureremoveselected'] = '選択した問題すべてを本当に削除してもよろしいですか?';
$string['asshownoneditscreen'] = '編集画面と同じ順で表示する';
$string['attempt'] = '受験 {$a}';
$string['attemptalreadyclosed'] = 'この受験はすでに終了しています。';
$string['attemptclosed'] = '受験はまだ終了していません。';
$string['attemptduration'] = '所要時間';
$string['attemptedon'] = '受験日時';
$string['attempterror'] = '現在、あなたはこの小テストを受験することはできません。理由: {$a}';
$string['attemptfirst'] = '最初の受験';
$string['attemptincomplete'] = '{$a} による受験はまだ完了していません。';
$string['attemptlast'] = '最新の受験';
$string['attemptnumber'] = '受験';
$string['attemptquiznow'] = '問題を受験する';
$string['attempts'] = '受験';
$string['attemptsallowed'] = '受験可能回数';
$string['attemptsdeleted'] = '小テストの受験結果が削除されました。';
$string['attemptselection'] = 'どの受験を分析するかユーザごとに選択してください:';
$string['attemptsexist'] = 'あなたはこれ以上問題を追加または削除することはできません。';
$string['attemptsnum'] = '受験件数: {$a}';
$string['attemptsnumthisgroup'] = '受験件数: {$a->total} (このグループ: {$a->group})';
$string['attemptsnumyourgroups'] = '受験件数: {$a->total} (あなたのグループ: {$a->group})';
$string['attemptsonly'] = '受験済みの学生のみ表示する';
$string['attemptstate'] = '状態';
$string['attemptstillinprogress'] = '進行中の受験';
$string['attemptsunlimited'] = '無制限';
$string['autosaveperiod'] = 'オートセーブ遅延';
$string['autosaveperiod_desc'] = '小テスト受験中、自動的に解答を保存することができます。解答が修正された時点でいつでもこの遅延の後に保存されます。トレードオフ: 遅延を短くすることにより、サーバ負荷は増加しますが学生が作業を失う可能性を減らします。この遅延をさらに短くしたい場合、あなたは徐々に値を修正してサーバ負荷をモニタすべきです。サーバ負荷が高くなりすぎた場合、再度遅延を長くしてください。 ゼロを設定することにより、オートセーブ無効にします。';
$string['back'] = '問題のプレビューに戻る';
$string['backtocourse'] = 'コースに戻る';
$string['backtoquestionlist'] = '問題リストに戻る';
$string['backtoquiz'] = '小テストの編集に戻る';
$string['basicideasofquiz'] = '小テスト作成の基本的な考え方';
$string['bestgrade'] = '最高評点';
$string['bothattempts'] = '受験済みおよび未受験の学生を表示する';
$string['browsersecurity'] = 'ブラウザセキュリティ';
$string['browsersecurity_help'] = 'JavaScriptセキュリティ対策を含んだフルスクリーンポップアップを選択した場合:

* 学生がJavaScriptの利用を有効にしているブラウザのみ、小テスト受験を開始することができます。
* 小テストはフルスクリーンのポップアップウィンドウ上に表示され、ナビゲーションコントロールはありません。
* 可能な範囲でコピー&ペーストのような機能を学生が使用できないようにします。';
$string['calculated'] = '計算問題';
$string['calculatedquestion'] = '{$a} 行の計算問題はサポートされていません。問題は無視されました。';
$string['cannotcreatepath'] = 'パス ({$a}) が作成できません。';
$string['cannoteditafterattempts'] = 'この小テストは受験されているため、あなたは問題を追加または削除することはできません。({$a})';
$string['cannotfindprevattempt'] = '直近の受験結果を構築するためのデータが見つかりませんでした。';
$string['cannotfindquestionregard'] = '再評定のための問題を取得できませんでした!';
$string['cannotinsert'] = '問題を追加できません。';
$string['cannotinsertrandomquestion'] = '新しいランダム問題を追加できませんでした!';
$string['cannotloadquestion'] = '問題オプションを読み込むことができませんでした。';
$string['cannotloadtypeinfo'] = '問題タイプの問題情報を読み込むことができません。';
$string['cannotopen'] = 'エクスポートファイル ({$a}) を開けません。';
$string['cannotrestore'] = '問題セッションをリストアできませんでした。';
$string['cannotreviewopen'] = 'まだ開いているため、あなたはこの受験をレビューできません。';
$string['cannotsavelayout'] = 'レイアウトを保存できませんでした。';
$string['cannotsavenumberofquestion'] = 'ページごとの問題数を保存できませんでした。';
$string['cannotsavequestion'] = '問題リストを保存できません。';
$string['cannotsetgrade'] = '小テストの新たな最大評点を設定できませんでした。';
$string['cannotsetsumgrades'] = '評点合計を設定できませんでした。';
$string['cannotstartgradesmismatch'] = 'この小テストの受験を開始できません。小テストは最大評点 {$a->grade} に設定されているようですが、小テスト内に評定できる問題が存在しません。これは「小テストを編集する」ページで修正することができます。';
$string['cannotstartmissingquestion'] = 'この小テストの受験を開始できません。小テストの定義に存在しない問題が含まれています。';
$string['cannotstartnoquestions'] = 'この小テストの受験を開始できません。まだ、小テストが設定されていません。問題が追加されていません。';
$string['cannotwrite'] = 'エクスポートファイル ({$a}) を書き込めません。';
$string['canredoquestions'] = '受験内でのやり直しを許可する';
$string['canredoquestions_desc'] = 'この設定を有効にした場合、学生が特定の問題の受験を終了した時点で「問題をやり直す」ボタンが表示されます。これにより、小テストの受験すべてを送信せずに、また別の小テストを開始せずに別バージョンの同一問題を受験することができるようなります。このオプションは主に練習問題に有用です。

この設定は問題 (例えば「作文問題」) および動作 (例えば、「即時フィードバック」または「複数受験インタラクティブ」) のみに影響します。学生は受験が送信される前に問題を終了することができます。';
$string['canredoquestions_help'] = 'この設定を有効にした場合、学生が特定の問題の受験を終了した時点で「問題をやり直す」ボタンが表示されます。これにより、小テストの受験すべてを送信せずに、また別の小テストを開始せずに別バージョンの同一問題を受験することができるようになります。このオプションは主に練習問題に有用です。

この設定は問題 (例えば「作文問題」) および動作 (例えば、「即時フィードバック」または「複数受験インタラクティブ」) のみに影響します。学生は受験が送信される前に問題を終了することができます。';
$string['canredoquestionsyes'] = '学生は終了した問題の別バージョンをやり直すことができる';
$string['caseno'] = 'いいえ、文字の大小は重要ではありません。';
$string['casesensitive'] = '大文字小文字の区別';
$string['caseyes'] = 'はい、文字の大小は合致する必要があります。';
$string['categoryadded'] = 'カテゴリ「 {$a} 」が追加されました。';
$string['categorydeleted'] = 'カテゴリ「 {$a} 」が削除されました。';
$string['categorynoedit'] = 'あなたはカテゴリ「 {$a} 」での編集権限がありません。';
$string['categoryupdated'] = 'カテゴリが正常に更新されました。';
$string['close'] = 'ウィンドウを閉じる';
$string['closebeforeopen'] = '小テストを更新できませんでした。あなたは小テスト終了日時を小テスト公開日時の前に設定しました。';
$string['closed'] = '終了';
$string['closepreview'] = 'プレビューを閉じる';
$string['closereview'] = 'レビューを閉じる';
$string['comment'] = 'コメント';
$string['commentorgrade'] = 'コメントを作成または評点を上書きする';
$string['comments'] = 'コメント';
$string['completedon'] = '完了日時';
$string['completionattemptsexhausted'] = 'または利用可能な受験すべてが完了した場合';
$string['completionattemptsexhausted_help'] = '学生が最大受験数を満たした場合、小テストを完了したとマークします。';
$string['completionpass'] = '合格点を必要とする';
$string['completionpass_help'] = 'この設定を有効にした場合、評定表に合格点が設定され学生が合格点を取得することにより、この活動は完了したとみなされます。';
$string['configadaptive'] = 'あなたがこのオプションを有効にした場合、同じ小テスト内の受験であっても学生は問題に複数回の解答を許可されます。';
$string['configattemptsallowed'] = '小テストで学生が許可される受験回数の制限です。';
$string['configdecimaldigits'] = '評定を表示する場合、小数点以下に表示される評点の桁数を設定します。';
$string['configdecimalplaces'] = '小テストの評定を表示する場合、小数点以下に表示される評点の桁数を設定します。';
$string['configdecimalplacesquestion'] = '個々の問題の評定を表示する場合、小数点以下に表示される評点の桁数を設定します。';
$string['configdelay1'] = 'あなたが待ち時間を設定した場合、最初の受験終了後、次の小テストを受験できるまで学生は指定された時間待つ必要があります。';
$string['configdelay1st2nd'] = 'あなたがここで待ち時間を設定した場合、最初の受験終了後、ここで設定した時間が経過するまで学生は2回目の受験を開始できません。';
$string['configdelay2'] = 'あなたがここで待ち時間を設定した場合、2回目またはそれ以降の小テストを受験できるまで学生は指定された時間待つ必要があります。';
$string['configdelaylater'] = 'あなたがここで待ち時間を設定した場合、前回の受験終了後、ここで設定した時間が経過するまで学生は3回目、4回目 ... の受験を開始できません。';
$string['configeachattemptbuildsonthelast'] = '複数解答が許可されている場合、それぞれの新しい受験に前の受験結果を含みます。';
$string['configgrademethod'] = '複数解答が許可されている場合、小テストにおける学生の最終評点に関してどの評定方法を使用するか設定します。';
$string['configintro'] = 'あなたがここで設定した値は新しい小テスト作成時のデフォルト値として使用されます。また、どの小テスト設定が「高度な設定」とみなされるか設定することもできます。';
$string['configmaximumgrade'] = '設定値を基に小テスト評定が増減されるデフォルトの評点です。';
$string['confignavmethod'] = 'フリーナビゲーションではナビゲーションを使って問題にどのような順序でも解答することができます。順次では固定された順番で問題に解答する必要があります。';
$string['confignewpageevery'] = '問題を小テストに追加する場合、あなたがここで選択した設定に基づき改ページが自動的に挿入されます。';
$string['configoutcomesadvanced'] = 'このオプションを有効にした場合、小テスト編集フォームのアウトカムは高度な設定になります。';
$string['configpenaltyscheme'] = 'アダプティブモードの場合、それぞれの誤答に関してペナルティが差し引かれます。';
$string['configpopup'] = '小テストの受験時、ポップアップウィンドを開きます。また、小テストの受験中、コピー&ペースト等を制限するためにJavaScriptを使用します。';
$string['configrequirepassword'] = '学生が小テストを受験するにはこのパスワードを事前に入力する必要があります。';
$string['configrequiresubnet'] = '学生はこれらのコンピュータからのみ小テストを受験することができます。';
$string['configreviewoptions'] = 'これらのオプションではユーザが小テスト受験をレビューまたは小テストレポートを閲覧する場合、どの情報を閲覧できるかコントロールします。';
$string['configshowblocks'] = '小テスト受験中にブロックを表示します。';
$string['configshowuserpicture'] = '受験中、画面にユーザ画像を表示します。';
$string['configshufflewithin'] = 'あなたがこのオプションを有効にした場合、また小テスト設定でのオプションも有効にされている場合、学生がこの小テスト受験を開始するたびに個々の問題を構成している部品がランダムにシャッフルされます。';
$string['configtimelimit'] = '小テストのデフォルトの制限時間 (分) です。ゼロは制限時間なしを意味します。';
$string['configtimelimitsec'] = '小テストのデフォルトの制限時間 (秒) です。ゼロは制限時間なしを意味します。';
$string['configurerandomquestion'] = '問題の設定';
$string['confirmclose'] = '送信した場合、この受験に関して、これ以上あなたの答えを変更することはできません。';
$string['confirmremovequestion'] = '本当にこの {$a} 問題を削除してもよろしいですか?';
$string['confirmremovesectionheading'] = '本当に「 {$a} 」セクションヘッディングを削除してもよろしいですか?';
$string['confirmserverdelete'] = '本当にサーバ <b>{$a}</b> をリストから削除してもよろしいですか?';
$string['connectionerror'] = 'ネットワークコネクションが切断されました (オートセーブ失敗)。

このページで入力した最後の数分間の解答をメモした後、再接続を試みてください。

接続が再確立された場合、あなたの解答は保存され、このメッセージは表示されなくなります。';
$string['connectionok'] = 'ネットワークコネクションが復元されました。あなたは安全に続けることができます。';
$string['containercategorycreated'] = 'このカテゴリは下記原因によりサイトレベルで移動されたすべてのオリジナルカテゴリを保存するために作成されました。';
$string['continueattemptquiz'] = '前回の受験を続ける';
$string['continuepreview'] = '前回受験のプレビューを続ける';
$string['copyingfrom'] = '問題「 {$a} 」のコピーを作成';
$string['copyingquestion'] = '問題のコピー';
$string['correct'] = '正解';
$string['correctanswer'] = '正解';
$string['correctanswerformula'] = '正解の公式';
$string['correctansweris'] = '正解: {$a}';
$string['correctanswerlength'] = '有効数字';
$string['correctanswers'] = '正解';
$string['correctanswershows'] = '正解の表示';
$string['corrresp'] = '正解';
$string['countdown'] = 'カウントダウン';
$string['countdownfinished'] = 'この小テストは終了します。あなたの解答を送信してください。';
$string['countdowntenminutes'] = '小テストは10分後に終了します。';
$string['coursetestmanager'] = 'Course Test Managerフォーマット';
$string['createcategoryandaddrandomquestion'] = 'カテゴリを作成してランダム問題を追加する';
$string['createfirst'] = 'あなたは最初に記述問題を作成する必要があります。';
$string['createmultiple'] = '小テストにランダム問題を追加する';
$string['createnewquestion'] = '新しい問題を作成する';
$string['createquestionandadd'] = '新しい問題を作成して小テストに追加する';
$string['custom'] = 'カスタムフォーマット';
$string['dataitemneed'] = '有効な問題を作成するにはあなたは少なくとも一組のデータアイテムを追加する必要があります。';
$string['datasetdefinitions'] = 'カテゴリ {$a} の再利用可能なデータセット定義';
$string['datasetnumber'] = 'No.';
$string['daysavailable'] = '日利用可能';
$string['decimaldigits'] = '評点の小数点以下桁数';
$string['decimalplaces'] = '評点の小数位';
$string['decimalplaces_help'] = 'この設定では評点を表示するときに小数点以下を何桁表示するか指定します。この設定は評点の表示のみに影響します。データベースに保存された評点および常に完全精度のため実行される内部計算には影響しません。';
$string['decimalplacesquestion'] = '問題評点の小数位';
$string['decimalplacesquestion_help'] = 'この設定では個々の問題の評点を表示するときに小数点以下を何桁表示するか指定します。';
$string['decimalpoints'] = '小数点';
$string['default'] = 'デフォルト';
$string['defaultgrade'] = 'デフォルト問題評点';
$string['defaultinfo'] = '問題のデフォルトカテゴリ';
$string['delay1'] = '最初と2回目の受験の待ち時間';
$string['delay1st2nd'] = '最初と2回目の受験の強制待ち時間';
$string['delay1st2nd_help'] = 'この設定を有効にした場合、最初の受験後、学生が2回目の小テストを受験するには設定された時間待つ必要があります。';
$string['delay2'] = '2回目以降の受験の待ち時間';
$string['delaylater'] = '2回目以降の受験の強制待ち時間';
$string['delaylater_help'] = 'この設定を有効にした場合、前の受験後、学生が3回目またはそれ以降の小テストを受験するには設定された時間待つ必要があります。';
$string['deleteattemptcheck'] = '本当にこれらの受験を削除してもよろしいですか?';
$string['deleteselected'] = '選択したものを削除する';
$string['deletingquestionattempts'] = '問題受験結果の削除';
$string['description'] = '説明';
$string['disabled'] = '無効';
$string['displayoptions'] = '表示オプション';
$string['donotuseautosave'] = 'オートセーブを使用しない';
$string['download'] = 'エクスポートしたカテゴリファイルをダウンロードする';
$string['downloadextra'] = '(ファイルはコースファイル内の/backupdata/quizフォルダにも保存されます。)';
$string['dragtoafter'] = '{$a} の後';
$string['dragtostart'] = '最初へ';
$string['duplicateresponse'] = 'あなたは前に同じ解答を送信しているため、この送信は無視されました。';
$string['eachattemptbuildsonthelast'] = '直近の解答内容を反映させる';
$string['eachattemptbuildsonthelast_help'] = '複数回の受験が許可され、この設定が有効にされた場合、それぞれの新しい受験では直近の解答内容が反映されます。これにより複数回の受験で小テストが終了するよう設定できます。';
$string['editcategories'] = 'カテゴリを編集する';
$string['editcategory'] = 'カテゴリを編集する';
$string['editcatquestions'] = 'カテゴリ問題を編集する';
$string['editingquestion'] = '問題の編集';
$string['editingquiz'] = '小テストの編集';
$string['editingquiz_help'] = '小テスト作成におけるメインコンセプトは下記のとおりです:

* 小テストは1ページまたはそれ以上のページに問題を含みます。
* 問題バンクにはすべての問題がカテゴリにより整理されて保存されます。
* ランダム問題 - 小テスト受験時、学生は毎回異なる問題を受験します。また、学生ごとに異なる問題を受験することができます。';
$string['editingquizx'] = '小テストの編集: {$a}';
$string['editmaxmark'] = '最大評点を編集する';
$string['editoverride'] = 'オーバーライドを編集する';
$string['editqcats'] = '問題カテゴリを編集する';
$string['editquestion'] = '問題を編集する';
$string['editquestions'] = '問題を編集する';
$string['editquiz'] = '小テストを編集する';
$string['editquizquestions'] = '小テスト問題を編集する';
$string['emailconfirmbody'] = '{$a->username} さん

以下の解答をお送りいただきまして、ありがとうございます。

小テスト名: {$a->quizname}
コース名: {$a->coursename}
送信日時: {$a->submissiontime}

私たちがあなたの解答を正常に受信しましたので、この確認メールをお送りします。

あなたは {$a->quizurl} でこの小テストにアクセスすることができます。';
$string['emailconfirmsmall'] = '「 {$a->quizname} 」へのあなたの解答送信ありがとうございます。';
$string['emailconfirmsubject'] = '送信確認: {$a->quizname}';
$string['emailnotifybody'] = '{$a->username} さん

{$a->studentname} がコース「 {$a->coursename} 」の「 {$a->quizname} 」 ({$a->quizurl}) を完了しました。

あなたはこの受験を {$a->quizreviewurl} でレビューすることができます。';
$string['emailnotifysmall'] = '{$a->studentname} が {$a->quizname} を完了しました。詳細は {$a->quizreviewurl} をご覧ください。';
$string['emailnotifysubject'] = '{$a->studentname} が {$a->quizname} を完了しました。';
$string['emailoverduebody'] = '{$a->studentname} さん

あなたはコース「 {$a->coursename} 」の小テスト「 {$a->quizname} 」の受験を開始しましたが、一度も送信していないようです。あなたの受験は {$a->attemptduedate} までに送信される必要があります。

あなたがこの受験をまだ送信したいと思う場合、{$a->attemptsummaryurl} にアクセスして送信ボタンをクリックしてください。この作業は {$a->attemptgraceend} までに実施してください。そうでない場合、あなたの受験はカウントされないことになります。';
$string['emailoverduesmall'] = 'あなたは {$a->quizname} の受験を送信していないようです。あなたがまだ受験を送信したいと思う場合、{$a->attemptgraceend} までに {$a->attemptsummaryurl} にアクセスしてください。';
$string['emailoverduesubject'] = '受験期限切れ: {$a->quizname}';
$string['empty'] = '空';
$string['enabled'] = '有効';
$string['endtest'] = 'テスト終了 ...';
$string['erroraccessingreport'] = 'あなたはこのレポートにアクセスできません。';
$string['errorinquestion'] = '問題のエラー';
$string['errormissingquestion'] = 'エラー: id {$a} の問題はありません。';
$string['errornotnumbers'] = 'エラー - 答えには数字を使用してください。';
$string['errorunexpectedevent'] = '受験「 {$a->attemptid} 」の問題「 {$a->questionid} 」に予期しないイベントコード「 {$a->event} 」が見つかりました。';
$string['essay'] = '作文問題';
$string['essayquestions'] = '問題';
$string['eventattemptdeleted'] = '小テスト受験が削除されました。';
$string['eventattemptpreviewstarted'] = '小テスト受験プレビューが開始されました。';
$string['eventattemptreviewed'] = '小テスト受験がレビューされました。';
$string['eventattemptsummaryviewed'] = '小テスト受験概要が閲覧されました。';
$string['eventattemptviewed'] = '小テスト受験が閲覧されました。';
$string['eventeditpageviewed'] = '小テスト編集ページが閲覧されました。';
$string['eventoverridecreated'] = '小テストオーバーライドが作成されました。';
$string['eventoverridedeleted'] = '小テストオーバーライドが削除されました。';
$string['eventoverrideupdated'] = '小テストオーバーライドが更新されました。';
$string['eventquestionmanuallygraded'] = '小テストが手動評定されました。';
$string['eventquizattemptabandoned'] = '小テスト受験が放棄されました。';
$string['eventquizattemptstarted'] = '小テスト受験が開始されました。';
$string['eventquizattemptsubmitted'] = '小テスト受験が送信されました。';
$string['eventquizattempttimelimitexceeded'] = '小テスト受験の時間制限を超過しました。';
$string['eventreportviewed'] = '小テストレポートが閲覧されました。';
$string['everynquestions'] = '問題 {$a} 問ごと';
$string['everyquestion'] = '問題１問ごと';
$string['everythingon'] = 'すべて有効';
$string['exportcategory'] = 'エクスポートカテゴリ';
$string['exporterror'] = 'エクスポート処理中にエラーが発生しました。';
$string['exportingquestions'] = '問題がファイルにエクスポートされました。';
$string['exportname'] = 'ファイル名';
$string['exportquestions'] = '問題をファイルにエクスポートする';
$string['extraattemptrestrictions'] = '受験に関する特別制限';
$string['false'] = '×';
$string['feedback'] = 'フィードバック';
$string['feedbackerrorboundaryformat'] = 'フィードバック評点境界はパーセンテージまたは数値で入力してください。あなたが入力した境界 {$a} は認められません。';
$string['feedbackerrorboundaryoutofrange'] = 'フィードバック評点境界は0%から100%の間で入力してください。あなたが入力した境界 {$a} は範囲外です。';
$string['feedbackerrorjunkinboundary'] = 'あなたは評点境界ボックスに対してギャップなしで入力する必要があります。';
$string['feedbackerrorjunkinfeedback'] = 'フィードバックボックスには空白なしで入力してください。';
$string['feedbackerrororder'] = 'フィードバック評点境界は最初に最高値から順に入力してください。あなたが入力した境界 {$a} の順番は正しくありません。';
$string['file'] = 'ファイル';
$string['fileformat'] = 'ファイルフォーマット';
$string['fillcorrect'] = '正解を表示する';
$string['filloutnumericalanswer'] = 'あなたは少なくとも1つの答えおよび許容誤差を入力しました。最初の組み合わせの答えは評点とフィードバックを決定するために使用されます。あなたが最後に答えのないフィードバックを提供した場合、学生には解答が他のどの答えとも合致していない旨が表示されてしまいます。';
$string['filloutoneanswer'] = 'あなたは1つ以上の考えられる答えを入力する必要があります。空白の答えは使用されません。「*」はどのような文字にでも合致するワイルドカードとして使用することができます。最初の組み合わせの答えは評点およびフィードバックを決定するため使用されます。';
$string['filloutthreequestions'] = '組み合わせの答えがある問題を少なくとも3つ入力してください。答えが空白の問題を使用して誤答を余分に提供することもできます。問題と答えの両方が空白のエントリは無視されます。';
$string['fillouttwochoices'] = 'あなたは2つ以上の選択肢を入力する必要があります。空白は使用できません。';
$string['finishattemptdots'] = '受験を終了する ...';
$string['finishreview'] = 'レビューを終了する';
$string['forceregeneration'] = '再生成を強制する';
$string['formatnotfound'] = 'インポート/エクスポートフォーマット {$a} が見つかりませんでした。';
$string['formulaerror'] = '公式エラー!';
$string['fractionsaddwrong'] = 'あなたが選択したプラス評点の合計が100%になっていません。<br />現在の評点合計は {$a}% です。<br />戻ってこの問題を修正しますか?';
$string['fractionsnomax'] = 'この問題で満点を取ることができるよう<br />答えの1つは、100%でなければなりません。 <br />戻ってこの問題を修正しますか?';
$string['fromfile'] = 'ファイルからインポートする:';
$string['functiondisabledbysecuremode'] = 'この機能は現在無効にされています。';
$string['generalfeedback'] = '全般に対するフィードバック';
$string['generalfeedback_help'] = '全般に対するフィードバックは問題の受験後、学生に表示されるテキストです。問題タイプおよび学生の解答によって決まるフィードバックとは異なり、同じ全般に対するフィードバックテキストがすべての学生に表示されます。';
$string['graceperiod'] = '送信猶予期間';
$string['graceperiod_desc'] = '制限時間経過後に関して「開いている受験を送信できる場合は猶予期間を設けますが、さらに問題に解答することはできません」が設定されている場合、これが許可されるデフォルトの猶予期間です。';
$string['graceperiod_help'] = '制限時間経過後に関して「開いている受験を送信できる場合は猶予期間を設けますが、さらに問題に解答することはできません」が設定されている場合、これが許可されるデフォルトの猶予期間です。';
$string['graceperiodmin'] = '最終送信の猶予期間';
$string['graceperiodmin_desc'] = '小テストの終わりに関して潜在的な問題があります。時間切れ時点でタイマーが小テストを自動的に送信させることにより私たちは最後の秒まで学生に小テストを受験を続けさせたいと思います。しかし、サーバに負荷が掛かることにより、解答処理に時間を要する場合があります。そのため、サーバの遅延を原因としてペナルティが課せられないよう私たちは制限時間後に最大ここで設定した時間だけ解答を受け付けることができます。しかし、学生はこの時間を小テストの解答に不正に使うことができてしまいます。小テストの受験中、あなたのサーバのパフォーマンスをどれだけ信用するかをトレードオフにする必要があります。';
$string['graceperiodtoosmall'] = '送信猶予期間は {$a} 以上に設定してください。';
$string['grade'] = '評点';
$string['gradeall'] = 'すべてを評定する';
$string['gradeaverage'] = '平均評点';
$string['gradeboundary'] = '評点境界';
$string['gradeessays'] = '作文問題を評定する';
$string['gradehighest'] = '最高評点';
$string['grademethod'] = '評定方法';
$string['grademethod_help'] = '複数回の受験が許可されている場合、次の方法で小テストの最終評点を計算することができます。

* すべての受験の最高評点
* すべての受験の平均評点
* 最初の受験 (他のすべての受験は無視されます)
* 前回の受験 (他のすべての受験は無視されます)';
$string['gradesdeleted'] = '小テストの評定が削除されました。';
$string['gradesofar'] = '{$a->method}: {$a->mygrade} / {$a->quizgrade}';
$string['gradetopassmustbeset'] = 'この小テストには完了方法に「合格点を必要とする」が設定されているため、合格点をゼロにすることはできません。ゼロ以外の値を設定してください。';
$string['gradetopassnotset'] = 'この小テストには合格点が設定されていないため、あなたはこのオプションを使用することはできません。代わりに「評定を必要とする」設定を使用してください。';
$string['gradingdetails'] = 'この解答の評点: {$a->raw}/{$a->max}';
$string['gradingdetailsadjustment'] = '前のペナルティにより <strong>{$a->cur}/{$a->max}</strong> に調整されます。';
$string['gradingdetailspenalty'] = 'この解答のペナルティ: {$a}';
$string['gradingdetailszeropenalty'] = 'あなたのこの解答にペナルティはありません。';
$string['gradingmethod'] = '評定方法: {$a}';
$string['groupoverrides'] = 'グループオーバーライド';
$string['groupoverridesdeleted'] = 'グループオーバーライドが削除されました。';
$string['groupsnone'] = 'このコースにはグループはありません。';
$string['guestsno'] = '申し訳ございません、ゲストユーザは小テストの表示または解答ができません。';
$string['hidebreaks'] = '改ページを隠す';
$string['hidereordertool'] = '並べ替えツールを隠す';
$string['history'] = '解答履歴:';
$string['howquestionsbehave_desc'] = '小テストにおける問題動作のデフォルト設定です。';
$string['imagedisplay'] = '表示イメージ';
$string['importcategory'] = 'カテゴリをインポートする';
$string['importerror'] = 'インポート処理中にエラーが発生しました。';
$string['importfilearea'] = 'すでにコース内にあるファイルからインポートする ...';
$string['importfileupload'] = 'アップロードしたファイルからインポートする ...';
$string['importfromthisfile'] = 'このファイルからインポートする';
$string['import_help'] = 'この機能では外部テキストファイルから問題をインポートすることができます。

あなたのファイルが非ASCII文字コードを含んでいる場合、 UTF-8エンコードを使用する必要があります。正常に処理できない特別エンコーディングを使用する場合があるため、Microsoft Officeアプリケーションで作成されたファイルには特に注意してください。

インポートおよびエクスポートフォーマットは着脱可能なリソースです。他の任意のフォーマットはModules and Pluginsより入手することができます。';
$string['importingquestions'] = '{$a} 問の問題をファイルからインポートする';
$string['importmax10error'] = '問題にエラーがあります。あなたは10以上の答えを設定することはできません。';
$string['importmaxerror'] = '問題にエラーがあります。答えが多すぎます。';
$string['importquestions'] = 'ファイルから問題をインポートする';
$string['inactiveoverridehelp'] = '* 学生に小テストを受験するための正しいグループまたはロールがありません。';
$string['incorrect'] = '不正解';
$string['indivresp'] = '各問題に対する解答内容';
$string['info'] = 'インフォメーション';
$string['infoshort'] = 'i';
$string['initialnumfeedbacks'] = '全体のフィードバックの初期フィールド数';
$string['initialnumfeedbacks_desc'] = '新しい小テストを作成する場合、ここで設定した数の空白の全体のフィードバックボックスが提供されます。小テストが作成された後、フォームは小テストでのフィードバック数に必要なフィールド数を表示します。この設定は少なくとも1にする必要があります。';
$string['inprogress'] = '進行中';
$string['introduction'] = '説明';
$string['invalidattemptid'] = 'そのような受験IDはありません。';
$string['invalidcategory'] = 'カテゴリIDが正しくありません。';
$string['invalidoverrideid'] = '無効なオーバーライドID';
$string['invalidquestionid'] = '問題IDが正しくありません。';
$string['invalidquizid'] = '小テストIDが正しくありません。';
$string['invalidsource'] = 'ソースは有効ではありません。';
$string['invalidsourcetype'] = 'ソースタイプが正しくありません。';
$string['invalidstateid'] = '状態IDが正しくありません。';
$string['lastanswer'] = 'あなたの直近の答えは';
$string['layout'] = 'レイアウト';
$string['layoutasshown'] = '表示されているページレイアウトです。';
$string['layoutasshownwithpages'] = '表示されているページレイアウトです。<small>({$a} 問ごとに新しいページが自動作成されます)</small>';
$string['layoutshuffledandpaged'] = '1ページあたり {$a} 問の問題がランダムにシャッフルされます。';
$string['layoutshuffledsinglepage'] = '1ページ内で問題すべてがランダムにシャッフルされます。';
$string['link'] = 'リンク';
$string['listitems'] = '小テスト内アイテム一覧';
$string['literal'] = '定数';
$string['loadingquestionsfailed'] = '問題の読み込みに失敗しました: {$a}';
$string['makecopy'] = '新しい問題として保存する';
$string['managetypes'] = '問題タイプおよびサーバを管理する';
$string['manualgradequestion'] = '{$a->user} による {$a->quiz} の 問題 {$a->question} を手動評定する';
$string['manualgrading'] = '評定';
$string['mark'] = '送信';
$string['markall'] = 'ページを送信する';
$string['marks'] = '得点';
$string['marks_help'] = 'それぞれの問題の評点および全体的な受験の評点です。';
$string['match'] = '組み合わせ問題';
$string['matchanswer'] = '組み合わせの答え';
$string['matchanswerno'] = '組み合わせの答え {$a}';
$string['max'] = '最大';
$string['maxmark'] = '最大評点';
$string['messageprovider:attempt_overdue'] = 'あなたの小テスト受験が制限時間を過ぎた場合の警告';
$string['messageprovider:confirmation'] = 'あなた自身の小テスト送信確認';
$string['messageprovider:submission'] = '小テスト送信通知';
$string['min'] = '最小';
$string['minutes'] = '分';
$string['missingcorrectanswer'] = '正しい答えを指定してください。';
$string['missingitemtypename'] = '名称がありません。';
$string['missingquestion'] = 'この問題は存在していないようです。';
$string['modulename'] = '小テスト';
$string['modulename_help'] = '小テスト活動において教師は多肢選択問題、組み合わせ問題、記述問題および数値問題を含む様々なタイプの問題を含む小テストを作成することができます。

教師は問題をシャッフルまたは問題バンクからランダムに選択して複数回の小テスト受験を許可することができます。また、時間制限を設定することもできます。

それぞれの受験は記述問題を除いて自動的に評定され、評点は評定表に記録されます。

教師は学生に対するヒント、フィードバックおよび正解の表示に関して、いつ表示するのか、および表示するのかどうか選択することができます。

小テストは下記のように使用することができます:

* コーステストとして
* 読書課題またはトピックの最後のミニテストとして
* 過去問題を使用した試験練習として
* パフォーマンスに関する即時フィードバックを提供するため
* 自己評価のため';
$string['modulenameplural'] = '小テスト';
$string['moveselectedonpage'] = '選択した問題をページ {$a} に移動する';
$string['multichoice'] = '多肢選択問題';
$string['multipleanswers'] = '少なくとも1つの答えを選択してください。';
$string['mustbesubmittedby'] = 'この受験は {$a} までに送信される必要があります。';
$string['name'] = '名称';
$string['navigatenext'] = '次のページ';
$string['navigateprevious'] = '前のページ';
$string['navmethod'] = 'ナビゲーションメソッド';
$string['navmethod_free'] = 'フリー';
$string['navmethod_help'] = '順次ナビゲーションメソッドでは学生は小テストを順番に受験する必要があります。また、前のページに戻ったり、先にスキップすることはできません。';
$string['navmethod_seq'] = '順次';
$string['navnojswarning'] = '警告: これらのリンクではあなたの解答を保存しません。ページ下部の「次へ」ボタンを使用してください。';
$string['neverallononepage'] = 'なし、すべての問題を1ページに表示する';
$string['newattemptfail'] = 'エラー: 小テストの新しい受験を開始できませんでした。';
$string['newpage'] = '新しいページ';
$string['newpageevery'] = '新しいページを自動的に開始する';
$string['newpage_help'] = '問題数の多い小テストの場合、1ページあたりの問題数を制限して小テストを複数のページに分けることは理にかなっています。小テストのページに問題を追加する場合、この設定にしたがって改ページが自動的に挿入されます。後で小テストの編集ページで手動で改ページの位置を変えることもできます。';
$string['noanswers'] = '答えが選択されていません!';
$string['noattempts'] = 'この小テストは受験されていません。';
$string['noattemptsfound'] = '受験は見つかりませんでした。';
$string['noattemptstoshow'] = '表示する受験はありません。';
$string['nocategory'] = 'カテゴリが正しくないか、指定されていません。';
$string['noclose'] = '終了日時なし';
$string['nocommentsyet'] = 'まだコメントはありません。';
$string['noconnection'] = '現在、この問題を処理できるウェブサービスとの接続がありません。あなたの管理者に連絡してください。';
$string['nodataset'] = 'なし - ワイルドカードではありません。';
$string['nodatasubmitted'] = '送信されたデータはありません。';
$string['noessayquestionsfound'] = '手動評定問題が見つかりませんでした。';
$string['nogradewarning'] = 'この小テストは評定されていません。そのため、あなたは評点ごとに異なる全体のフィードバックを設定することはできません。';
$string['nomoreattempts'] = 'これ以上受験できません。';
$string['none'] = 'なし';
$string['noopen'] = '開始日時なし';
$string['nooverridedata'] = 'あなたは少なくとも1つの小テスト設定をオーバーライドする必要があります。';
$string['nopossibledatasets'] = '利用可能なデータセットはありません。';
$string['noquestionintext'] = '問題テキストが埋め込み問題を含んでいません。';
$string['noquestions'] = 'まだ問題が追加されていません。';
$string['noquestionsfound'] = '問題が見つかりませんでした。';
$string['noquestionsinquiz'] = 'この小テストには問題がありません。';
$string['noquestionsnotinuse'] = 'カテゴリが空のため、このランダム問題は使用されません。';
$string['noquestionsonpage'] = '空のページ';
$string['noresponse'] = '解答なし';
$string['noreview'] = 'あなたはこの小テストのレビューを許可されていません。';
$string['noreviewattempt'] = 'あなたはこの受験のレビューを許可されていません。';
$string['noreviewshort'] = '許可なし';
$string['noreviewuntil'] = 'あなたは {$a} までこの小テストをレビューすることはできません。';
$string['noreviewuntilshort'] = '利用可能 {$a}';
$string['noscript'] = '続けるにはJavaScriptを有効にしてください!';
$string['notavailabletostudents'] = '注意: 現在あなたの学生はこの小テストを利用できません。';
$string['notenoughrandomquestions'] = '問題 {$a->name} ({$a->id}) を作成するために十分な問題がカテゴリ {$a->category} 内にありません。';
$string['notenoughsubquestions'] = '十分な副問題が定義されていません！<br />戻ってこの問題を修正しますか？';
$string['notimedependentitems'] = '現在、時間に依存する問題は小テストモジュールでサポートされていません。代わりに小テスト全体に対して制限時間を設定してください。他の問題を選択しますか (または無視してこの問題を使いますか) ?';
$string['notyetgraded'] = '未評定';
$string['notyetviewed'] = '未閲覧';
$string['notyourattempt'] = 'これはあなたの受験ではありません!';
$string['noview'] = 'ログインユーザはこの小テストを閲覧できません。';
$string['numattempts'] = '{$a->studentnum} 名の {$a->studentstring} が {$a->attemptnum} 回受験しました。';
$string['numattemptsmade'] = 'この小テストは {$a} 回受験されました。';
$string['numberabbr'] = '#';
$string['numerical'] = '数値問題';
$string['numquestionsx'] = '問題: {$a}';
$string['oneminute'] = '1 分';
$string['onlyteachersexport'] = '教師のみ問題をエクスポートできます。';
$string['onlyteachersimport'] = '編集権限のある教師のみ問題をインポートできます。';
$string['onthispage'] = 'このページ';
$string['open'] = '未解答';
$string['openclosedatesupdated'] = '小テスト公開日時および終了日時が更新されました。';
$string['optional'] = 'オプション';
$string['orderandpaging'] = '問題順およびページング';
$string['orderandpaging_help'] = 'それぞれの問題の反対側にある番号10、20、30、 ... は問題順を意味します。問題を追加できるよう番号は10ずつ増やされます。問題順を並べ替えるには番号を変更した後、「問題を並べ替える」ボタンをクリックしてください。

特定の問題の後に改ページを追加するには問題の横にあるチェックボックスをチェックした後、「選択した問題の後に改ページを追加する」ボタンをクリックしてください。

1ページあたりの問題数を調整するには「改ページ調整」ボタンをクリックして希望する1ページあたりの問題数を入力してください。';
$string['orderingquiz'] = '問題順およびページング';
$string['orderingquizx'] = '問題順およびページング: {$a}';
$string['outcomesadvanced'] = 'アウトカムを高度な設定にする';
$string['outof'] = '{$a->grade} / {$a->maxgrade}';
$string['outofpercent'] = '{$a->grade} / {$a->maxgrade} ({$a->percent}%)';
$string['outofshort'] = '{$a->grade} / {$a->maxgrade}';
$string['overallfeedback'] = '全体のフィードバック';
$string['overallfeedback_help'] = '全体のフィードバックは小テスト受験後に表示されるテキストです。さらに評点境界 (パーセントまたは数字) を指定することにより、取得された評点に応じてテキストを表示することができます。';
$string['overdue'] = '期限切れ';
$string['overduehandling'] = '制限時間を経過した場合';
$string['overduehandlingautoabandon'] = '受験は制限時間内に送信される必要がありますが、そうでない場合はカウントされません';
$string['overduehandlingautosubmit'] = '開いている受験は自動的に送信されます';
$string['overduehandling_desc'] = '制限時間の前に学生が小テストを送信しなかった場合、デフォルトでどのようにしますか。';
$string['overduehandlinggraceperiod'] = '開いている受験を送信できる場合は猶予期間を設けますが、さらに問題に解答することはできません';
$string['overduehandling_help'] = 'この設定では学生が制限時間の前に小テスト受験の送信に失敗した場合の処理をコントロールします。その時点で学生が小テストの受験に取り組んでいる場合、カウントダウンタイマーは常に学生のために受験を自動送信します。しかし、学生がログアウトしている場合、この設定が処理をコントロールします。';
$string['overduemustbesubmittedby'] = 'この受験は制限時間を過ぎています。そして、すでに送信されている必要があります。あなたがこの小テストの評定を希望する場合、{$a} までに送信してください。それまでに送信しない場合、この受験の評点はカウントされません。';
$string['override'] = 'オーバーライド';
$string['overridedeletegroupsure'] = '本当にこのグループ {$a} のオーバーライドを削除してもよろしいですか?';
$string['overridedeleteusersure'] = '本当にこのユーザ {$a} のオーバーライドを削除してもよろしいですか?';
$string['overridegroup'] = 'グループをオーバーライドする';
$string['overridegroupeventname'] = '{$a->quiz} - {$a->group}';
$string['overrides'] = 'オーバーライド';
$string['overrideuser'] = 'ユーザをオーバーライドする';
$string['overrideusereventname'] = '{$a->quiz} - オーバーライド';
$string['page-mod-quiz-attempt'] = '小テスト受験ページ';
$string['page-mod-quiz-edit'] = '小テストページを編集する';
$string['page-mod-quiz-report'] = '小テストレポートページ';
$string['page-mod-quiz-review'] = '小テスト受験レビューページ';
$string['page-mod-quiz-summary'] = '小テスト受験概要ページ';
$string['page-mod-quiz-view'] = '小テスト情報ページ';
$string['page-mod-quiz-x'] = 'すべての小テストモジュールページ';
$string['pageshort'] = 'P';
$string['pagesize'] = 'ページサイズ';
$string['parent'] = '親';
$string['parentcategory'] = '親カテゴリ';
$string['parsingquestions'] = 'インポートファイルより問題を解析しています。';
$string['partiallycorrect'] = '部分的に正解';
$string['penalty'] = 'ペナルティ';
$string['penaltyscheme'] = 'ペナルティを適用する';
$string['penaltyscheme_help'] = 'この設定を有効にした場合、間違った解答に関して問題の最終評点からペナルティ分の評点が差し引かれます。ペナルティの合計は問題設定で指定することができます。この設定はアダプティブモードが有効にされている場合のみ適用されます。';
$string['percentcorrect'] = '正解率';
$string['pleaseclose'] = 'あなたのリクエストは処理されました。あなたはこのウィンドウを閉じることができます。';
$string['pluginadministration'] = '小テスト管理';
$string['pluginname'] = '小テスト';
$string['popup'] = '小テストを「セキュア」ウィンドウに表示する';
$string['popupblockerwarning'] = 'これからテストはセキュアモードで表示されますので、あなたは新しいセキュアウィンドウを開く必要があります。あなたのポップアップブロッカーを解除してください。ありがとうございます。';
$string['popupnotice'] = '学生はこの小テストをセキュアウィンドウで見ます。';
$string['preprocesserror'] = '前処理中にエラーが発生しました!';
$string['preview'] = 'プレビュー';
$string['previewquestion'] = '問題のプレビュー';
$string['previewquiz'] = '{$a} のプレビュー';
$string['previewquiznow'] = '小テストをプレビューする';
$string['previous'] = '前の状態に戻す';
$string['publish'] = '公開';
$string['publishedit'] = 'このカテゴリへ問題を追加または編集するにはあなたにはコース公開に関するパーミッションが割り当てられている必要があります。';
$string['qbrief'] = 'Q. {$a}';
$string['qname'] = '問題名';
$string['qti'] = 'IMS QTIフォーマット';
$string['qtypename'] = '問題タイプ、問題名';
$string['question'] = '問題';
$string['questionbank'] = '問題バンクから';
$string['questionbankmanagement'] = '問題バンク管理';
$string['questionbehaviour'] = '問題の挙動';
$string['questioncats'] = '問題カテゴリ';
$string['questiondeleted'] = 'この問題は削除されました。あなたの先生に連絡してください。';
$string['questiondependencyadd'] = '問題「 {$a->thisq} 」を受験できる場合の制限はありません。変更するにはクリックしてください。';
$string['questiondependencyfree'] = 'この問題には制限はありません。';
$string['questiondependencyremove'] = '前の問題「  {$a->previousq} 」を完了するまで問題「 {$a->thisq} 」を受験することはできません。 変更するにはクリックしてください。';
$string['questiondependsonprevious'] = 'この問題は前の問題を完了するまで受験することができません。';
$string['questioninuse'] = '問題「 {$a->questionname} 」は現在使用されています: <br />{$a->quiznames}<br />問題はこれらの小テストから削除されませんが、カテゴリ一覧からのみ削除されます。';
$string['questionmissing'] = 'このセッションの問題がありません。';
$string['questionname'] = '問題名';
$string['questionnonav'] = '<span class="accesshide">問題 </span>{$a->number}<span class="accesshide"> {$a->attributes}</span>';
$string['questionnonavinfo'] = '<span class="accesshide">インフォメーション </span>{$a->number}<span class="accesshide"> {$a->attributes}</span>';
$string['questionnotloaded'] = '問題「 {$a} 」は、データベースから読み込まれませんでした。';
$string['questionorder'] = '問題順';
$string['questionposition'] = '問題 {$a} 順番の新しいポジション';
$string['questions'] = '問題';
$string['questionsinclhidden'] = '問題 (隠された問題を含む)';
$string['questionsinthisquiz'] = 'この小テストの問題';
$string['questionsperpage'] = '1ページあたりの問題数';
$string['questionsperpageselected'] = '1ページあたりの問題数が設定されたため、現在ページングは固定されています。結果として「改ページ調整」ボタンは無効にされました。あなたは {$a} でこの設定を変更することができます。';
$string['questionsperpagex'] = '1ページあたりの問題数: {$a}';
$string['questiontext'] = '問題テキスト';
$string['questiontextisempty'] = '[空の問題テキスト]';
$string['questiontype'] = '問題タイプ {$a}';
$string['questiontypesetupoptions'] = '問題タイプのオプション設定';
$string['quiz:addinstance'] = '新しい小テストを追加する';
$string['quiz:attempt'] = '小テストを受験する';
$string['quizavailable'] = '小テストは {$a} まで利用できます。';
$string['quizclose'] = '小テスト終了日時';
$string['quizclosed'] = 'この小テストは {$a} に終了しました。';
$string['quizcloses'] = '終了日時';
$string['quizcloseson'] = 'この小テストは {$a} に終了します。';
$string['quiz:deleteattempts'] = '小テストの受験結果を削除する';
$string['quiz:emailconfirmsubmission'] = '解答を送信した旨の確認メールを受信する';
$string['quiz:emailnotifysubmission'] = '解答が送信された旨の通知メールを受信する';
$string['quiz:emailwarnoverdue'] = '受験が制限時間に達して送信する必要がある場合、通知メッセージを取得します。';
$string['quiz:grade'] = '小テストを手動評定する';
$string['quiz:ignoretimelimits'] = '小テストの制限時間を無視する';
$string['quizisclosed'] = 'この小テストは終了しています。';
$string['quizisclosedwillopen'] = '小テスト終了 (公開 {$a})';
$string['quizisopen'] = 'この小テストは公開されています。';
$string['quizisopenwillclose'] = '小テスト公開中 (終了 {$a})';
$string['quiz:manage'] = '小テストを管理する';
$string['quiz:manageoverrides'] = '小テストのオーバーライドを管理する';
$string['quiznavigation'] = '小テストナビゲーション';
$string['quizopen'] = '小テスト公開日時';
$string['quizopenclose'] = '公開および終了日時';
$string['quizopenclose_help'] = '学生は公開日時以降のみ受験を開始することができます。また、終了日時の前に受験を完了する必要があります。';
$string['quizopened'] = 'この小テストは公開されています。';
$string['quizopenedon'] = 'この小テストは {$a} に公開されます。';
$string['quizopens'] = '公開日時';
$string['quizopenwillclose'] = 'この小テストは公開中です。{$a} に終了します。';
$string['quizordernotrandom'] = '小テスト順はシャッフルされません。';
$string['quizorderrandom'] = '*　小テスト順はシャッフルされます。';
$string['quiz:preview'] = '小テストをプレビューする';
$string['quiz:regrade'] = '小テストの受験を再評定する';
$string['quiz:reviewmyattempts'] = 'あなたの受験をレビューする';
$string['quizsettings'] = '小テスト設定';
$string['quiztimer'] = '小テストタイマー';
$string['quiz:view'] = '小テスト情報を表示する';
$string['quiz:viewreports'] = '小テストレポートを表示する';
$string['quizwillopen'] = 'この小テストは {$a} に公開されます。';
$string['random'] = 'ランダム問題';
$string['randomcreate'] = 'ランダム問題を作成する';
$string['randomfromcategory'] = '次のカテゴリからのランダム問題:';
$string['randomfromexistingcategory'] = '既存のカテゴリからのランダム問題';
$string['randomnosubcat'] = 'サブカテゴリからではなく、このカテゴリからのみの問題です。';
$string['randomnumber'] = 'ランダム問題数';
$string['randomquestionusinganewcategory'] = '新しいカテゴリを使用するランダム問題';
$string['randomwithsubcat'] = 'このカテゴリおよびサブカテゴリからの問題です。';
$string['readytosend'] = 'あなたは評定のためにすべての小テストを送信しようとしています。本当に送信してもよろしいですか?';
$string['reattemptquiz'] = 'もう一度受験する';
$string['recentlyaddedquestion'] = '最近追加された問題!';
$string['recurse'] = 'サブカテゴリの問題も含む';
$string['redoesofthisquestion'] = 'ここで受験された他の問題: {$a}';
$string['redoquestion'] = '問題をやり直す';
$string['regrade'] = 'すべての受験を再評定する';
$string['regradecomplete'] = 'すべての受験が再評定されました。';
$string['regradecount'] = '{$a->attempt} 中 {$a->changed} の評点が変更されました。';
$string['regradedisplayexplanation'] = '再評定により変更された受験結果はハイパーリンクとして問題レビューウィンドウに表示されます。';
$string['regradenotallowed'] = 'あなたにはこの小テストを再評定するパーミッションがありません。';
$string['regradingquestion'] = '「 {$a} 」の再評定';
$string['regradingquiz'] = '問題「 {$a} 」の再評定';
$string['remove'] = '削除';
$string['removeallgroupoverrides'] = 'すべてのグループオーバーライドを削除する';
$string['removeallquizattempts'] = 'すべての小テスト受験結果を削除する';
$string['removealluseroverrides'] = 'すべてのユーザオーバーライドを削除する';
$string['removeemptypage'] = '空のページを削除する';
$string['removepagebreak'] = '改ページを削除する';
$string['removeselected'] = '選択したものを削除する';
$string['rename'] = 'リネーム';
$string['renderingserverconnectfailed'] = 'サーバ {$a} がRQPリクエストの処理に失敗しました。URLが正しいか確認してください。';
$string['reorderquestions'] = '問題を並べ替える';
$string['reordertool'] = '再並べ替えツールを表示する';
$string['repaginate'] = '1ページあたりの問題数: {$a}';
$string['repaginatecommand'] = '改ページ調整';
$string['repaginatenow'] = 'すぐに改ページ調整する';
$string['replace'] = '置換';
$string['replacementoptions'] = '置換オプション';
$string['report'] = 'レポート';
$string['reportanalysis'] = 'アイテム分析';
$string['reportattemptsfrom'] = '受験者';
$string['reportattemptsthatare'] = '受験状況';
$string['reportdisplayoptions'] = '表示オプション';
$string['reportfullstat'] = '詳細統計';
$string['reportmulti_percent'] = 'マルチ - パーセンテージ';
$string['reportmulti_q_x_student'] = 'マルチ - 学生選択';
$string['reportmulti_resp'] = '個別の解答';
$string['reportmustselectstate'] = 'あなたは少なくとも1つの状態を選択する必要があります。';
$string['reportnotfound'] = '不明なレポート ({$a}) です。';
$string['reportoverview'] = '概要';
$string['reportregrade'] = '受験の再評定';
$string['reportresponses'] = '解答詳細';
$string['reports'] = 'レポート';
$string['reportshowonly'] = '受験のみ表示する';
$string['reportshowonlyfinished'] = 'ユーザごとに最大1件の終了した受験を表示する ({$a})';
$string['reportsimplestat'] = '単純統計';
$string['reportusersall'] = '小テストを受験したことのあるユーザすべて';
$string['reportuserswith'] = '小テストを受験したことのある登録済みユーザ';
$string['reportuserswithorwithout'] = '小テストを受験したことのある、または受験したことのない登済みユーザ';
$string['reportuserswithout'] = '小テストを受験したことのない登録済みユーザ';
$string['reportwhattoinclude'] = 'レポートに含む内容';
$string['requirepassword'] = 'パスワード必須';
$string['requirepassword_help'] = 'ここにパスワードを設定した場合、参加者は小テストを受ける前に同じパスワードを入力する必要があります。';
$string['requiresubnet'] = 'ネットワークアドレス';
$string['requiresubnet_help'] = 'LAN上の特定のサブネットまたはインターネットから小テストへのアクセスをカンマで区切った部分的または完全なIPアドレスで制限することができます。これは特に特定の部屋の人のみ小テストにアクセスすることができる試験監督付き小テストの実施に有用です。';
$string['response'] = '解答';
$string['responses'] = '解答';
$string['results'] = '受験結果';
$string['returnattempt'] = '受験に戻る';
$string['reuseifpossible'] = '前に削除したものを再利用する';
$string['reverttodefaults'] = '小テストデフォルトに戻す';
$string['review'] = 'レビュー';
$string['reviewafter'] = '小テスト終了後にレビューを許可する';
$string['reviewalways'] = '常にレビューを許可する';
$string['reviewattempt'] = '受験をレビューする';
$string['reviewbefore'] = '小テスト実施中にレビューを許可する';
$string['reviewclosed'] = '小テスト終了後';
$string['reviewduring'] = '受験中';
$string['reviewimmediately'] = '受験後すぐに';
$string['reviewnever'] = 'レビューを許可しない';
$string['reviewofattempt'] = '受験 {$a} のレビュー';
$string['reviewofpreview'] = 'プレビューのレビュー';
$string['reviewofquestion'] = '{$a->user} による {$a->quiz} の問題 {$a->question} のレビュー';
$string['reviewopen'] = '後で、小テスト実施中';
$string['reviewoptions'] = '学生はレビューできる';
$string['reviewoptionsheading'] = 'レビューオプション';
$string['reviewoptionsheading_help'] = 'このオプションでは小テスト受験結果をレビューまたは小テストレポートを表示する場合、どの情報をユーザが閲覧することができるかコントロールします。

**受験中** は「複数受験インタラクティブ」のような特定の挙動のみに関連します。

**受験後すぐに** はユーザが「すべてを送信して終了する」ボタンクリックして受験を終了した後、2分以内を意味します。

**後で、小テスト実施中** は今後および小テスト終了日時の前を意味します。

**小テスト終了後** は小テスト終了日時経過後を意味します。小テストに終了日時が設定されていない場合、この状態に達することはありません。';
$string['reviewoverallfeedback'] = '全体のフィードバック';
$string['reviewoverallfeedback_help'] = '学生の合計点に応じて受験の最後に与えられるフィードバックです。';
$string['reviewresponse'] = '解答のレビュー';
$string['reviewresponsetoq'] = '解答のレビュー (問題 {$a})';
$string['reviewthisattempt'] = 'この受験に関して、あなたの解答をレビューします。';
$string['rqp'] = 'リモート問題';
$string['rqps'] = 'リモート問題';
$string['sameasoverall'] = '全体の評点と同じ';
$string['save'] = '保存';
$string['saveandedit'] = '変更を保存して問題を編集する';
$string['saveattemptfailed'] = '現在の受験内容の保存に失敗しました。';
$string['savedfromdeletedcourse'] = '削除済みコース「 {$a} 」より保存';
$string['savegrades'] = '評点を保存する';
$string['savemyanswers'] = '私の答えを保存する';
$string['savenosubmit'] = '送信せずに保存する';
$string['saveoverrideandstay'] = '保存して別のオーバーライドを設定する';
$string['savequiz'] = 'この小テスト全体を保存する';
$string['saving'] = '保存';
$string['savingnewgradeforquestion'] = '問題ID {$a} の新しい評定を保存';
$string['savingnewmaximumgrade'] = '新しい最大評点の保存';
$string['score'] = '素点';
$string['scores'] = '得点';
$string['search:activity'] = '小テスト - 活動情報';
$string['sectionheadingedit'] = 'ヘッディング「 {$a} 」を編集する';
$string['sectionheadingremove'] = 'ヘッディング「 {$a} 」を削除する';
$string['seequestions'] = '(問題を表示する)';
$string['select'] = '選択';
$string['selectall'] = 'すべてを選択する';
$string['selectcategory'] = 'カテゴリを選択する';
$string['selectedattempts'] = '選択された受験 ...';
$string['selectnone'] = 'すべての選択を解除する';
$string['selectquestiontype'] = '-- 問題タイプを選択してください --';
$string['serveradded'] = 'サーバ追加';
$string['serveridentifier'] = '識別子';
$string['serverinfo'] = 'サーバ情報';
$string['servers'] = 'サーバ';
$string['serverurl'] = 'サーバURL';
$string['settingsoverrides'] = '設定オーバーライド';
$string['shortanswer'] = '記述問題';
$string['show'] = '表示';
$string['showall'] = 'すべての問題を1ページに表示する';
$string['showblocks'] = '小テスト受験中にブロックを表示する';
$string['showblocks_help'] = 'この設定を有効にした場合、小テストの受験中に通常のブロックが表示されます。';
$string['showbreaks'] = '改ページを表示する';
$string['showcategorycontents'] = 'カテゴリコンテンツを表示する {$a->arrow}';
$string['showcorrectanswer'] = 'フィードバックの中に正解を表示しますか?';
$string['showdetailedmarks'] = '評点詳細を表示する';
$string['showeachpage'] = '一度に1ページのみ表示する';
$string['showfeedback'] = '解答後にフィードバックを表示しますか?';
$string['showinsecurepopup'] = '受験に「セキュア」ポップアップウィンドウを使用する';
$string['showlargeimage'] = '大きなイメージ';
$string['shownoattempts'] = '未受験の学生を表示する';
$string['shownoattemptsonly'] = '未受験の学生のみ表示する';
$string['shownoimage'] = 'イメージなし';
$string['showreport'] = 'レポートを表示する';
$string['showsmallimage'] = '小さなイメージ';
$string['showteacherattempts'] = '教師の受験を表示する';
$string['showuserpicture'] = 'ユーザ画像を表示する';
$string['showuserpicture_help'] = 'この設定を有効にした場合、受験中およびレビュー時、画面に学生の氏名および画像が表示されます。試験監督による試験時、ユーザがその人自身でログインしているかどうか確認することができます。';
$string['shuffle'] = 'シャッフル';
$string['shuffleanswers'] = '答えをシャッフルする';
$string['shuffledrandomly'] = 'ランダムにシャッフルする';
$string['shufflequestions'] = 'シャッフル';
$string['shufflequestions_help'] = 'この設定を有効にした場合、小テストが受験されるたびにこのセクション内の問題順が異なるランダムな順番にシャッフルされます。

これにより学生が答えを共有することは難しくなりますが、あなたと特定の問題に関して議論することも難しくなります。';
$string['shufflewithin'] = '問題内部をシャッフルする';
$string['shufflewithin_help'] = 'この設定を有効にした場合、学生がこの小テストの受験を開始するたびに、個々の問題の構成要素がランダムにシャッフルされます。この場合、各問題の設定にあるシャッフルオプションも有効にする必要があります。この設定は多肢選択問題や組み合わせ問題のように複数の構成要素を持つ問題にのみ適用されます。';
$string['singleanswer'] = '1つの答えを選択してください。';
$string['sortage'] = '作成日時で並べ替える';
$string['sortalpha'] = '問題名で並べ替える';
$string['sortquestionsbyx'] = '問題を並べ替える: {$a}';
$string['sortsubmit'] = '問題を並べ替える';
$string['sorttypealpha'] = '問題タイプ・問題名で並べ替える';
$string['specificapathnotonquestion'] = '指定されたパスが問題にありません。';
$string['specificquestionnotonquiz'] = '指定された問題が小テストにありません。';
$string['startagain'] = 'もう一度始める';
$string['startattempt'] = '受験を開始する';
$string['startedon'] = '開始日時';
$string['startnewpreview'] = '新しいプレビューを開始する';
$string['stateabandoned'] = '未送信';
$string['statefinished'] = '終了';
$string['statefinisheddetails'] = '送信日時 {$a}';
$string['stateinprogress'] = '進行中';
$string['statenotloaded'] = '問題「 {$a} 」の状態はデータベースから読み込まれませんでした。';
$string['stateoverdue'] = '期限切れ';
$string['stateoverduedetails'] = '送信期限: {$a}';
$string['status'] = 'ステータス';
$string['stoponerror'] = 'エラーで中止する';
$string['submitallandfinish'] = 'すべてを送信して終了する';
$string['subneterror'] = '申し訳ございません、この小テストは特定の場所からのみアクセスすることができます。現在、あなたのコンピュータはこの小テストを利用できるコンピュータではありません。';
$string['subnetnotice'] = '特定の場所からのみアクセスできるようにこの小テストはロックされています。現在、あなたのコンピュータはこの小テストの使用を許可されていません。教師としてプレビューすることは許可されています。';
$string['subplugintype_quiz'] = 'レポート';
$string['subplugintype_quizaccess'] = 'アクセスルール';
$string['subplugintype_quizaccess_plural'] = 'アクセスルール';
$string['subplugintype_quiz_plural'] = 'レポート';
$string['substitutedby'] = 'が次の値と置換されます:';
$string['summaryofattempt'] = '受験概要';
$string['summaryofattempts'] = 'あなたの前回の受験概要';
$string['temporaryblocked'] = 'あなたは小テストを一時的に受験することができません。<br /> 次に小テストを受験できる日時は:';
$string['theattempt'] = '受験';
$string['theattempt_help'] = '学生が受験すべてをレビューできるかどうか設定します。';
$string['time'] = '時間';
$string['timecompleted'] = '受験完了';
$string['timedelay'] = '次の小テストを受験するまでの待ち時間を経過していないため、あなたは小テストを受験することができません。';
$string['timeleft'] = '残り時間';
$string['timelimit'] = '制限時間';
$string['timelimitexeeded'] = '申し訳ございません! 小テストの制限時間を経過しました!';
$string['timelimit_help'] = 'この設定を有効にした場合、小テストの初期ページで時間制限が開始されます。同時に小テストナビゲーションブロックにカウントダウンタイマーが表示されます。';
$string['timelimitmin'] = '制限時間 (分)';
$string['timelimitsec'] = '制限時間 (秒)';
$string['timestr'] = '%y/%m/%d  %H:%M:%S';
$string['timesup'] = '時間終了!';
$string['timetaken'] = '所要時間';
$string['timing'] = 'タイミング';
$string['tofile'] = '>> ファイル';
$string['tolerance'] = '許容誤差';
$string['toomanyrandom'] = '要求されたランダム問題数はこのカテゴリに含まれている数 ({$a}) より多くなっています!';
$string['top'] = 'トップ';
$string['totalmarksx'] = '合計評点: {$a}';
$string['totalquestionsinrandomqcategory'] = 'カテゴリ内に合計 {$a} 問の問題があります。';
$string['true'] = '○';
$string['truefalse'] = '○/×問題';
$string['type'] = 'タイプ';
$string['unfinished'] = '未了';
$string['ungraded'] = '未評定';
$string['unit'] = '単位';
$string['unknowntype'] = '{$a} 行目の問題タイプはサポートされていません。問題は無視されます。';
$string['updatesettings'] = '問題設定を更新する';
$string['updatingatttemptgrades'] = '受験評点の更新';
$string['updatingfinalgrades'] = '最終評点の更新';
$string['updatingthegradebook'] = '評定表の更新';
$string['upgradesure'] = '小テストモジュールは広範囲におよぶ小テストデータベーステーブルを変更することがあります。また、このアップグレードに関する十分なテストは実施されていません。処理の前に必ずあなたのデータベーステーブルをバックアップしてください。';
$string['upgradingquizattempts'] = '小テスト受験のアップグレード: 小テスト {$a->done}/{$a->outof} (小テストID {$a->info})';
$string['upgradingveryoldquizattempts'] = '非常に古い小テスト受験のアップグレード: {$a->done}/{$a->outof}';
$string['url'] = 'URL';
$string['usedcategorymoved'] = 'このカテゴリは公開されて他のコースで使用されているため、維持したままサイトレベルに移動されました。';
$string['useroverrides'] = 'ユーザオーバーライド';
$string['useroverridesdeleted'] = 'ユーザオーバーライドが削除されました。';
$string['usersnone'] = 'この小テストにアクセスできる学生はいません。';
$string['validate'] = '確認';
$string['viewallanswers'] = '{$a} 件の小テスト受験を表示する';
$string['viewallreports'] = '{$a} 件の受験レポートを表示する';
$string['viewed'] = '閲覧済み';
$string['warningmissingtype'] = '<b>この問題タイプはあなたのMoodleにまだインストールされていません。<br />あなたのMoodle管理者に連絡してください。</b>';
$string['wheregrade'] = '私の評点は?';
$string['wildcard'] = 'ワイルドカード';
$string['windowclosing'] = 'このウィンドウは間もなく閉じられます。';
$string['withsummary'] = '(統計概要を含む)';
$string['wronguse'] = 'あなたはこのページをそのように使うことはできません。';
$string['xhtml'] = 'XHTML';
$string['youneedtoenrol'] = 'この小テストを受験する前にあなたはこのコースに登録している必要があります。';
$string['yourfinalgradeis'] = 'あなたの小テスト最終評点は {$a} です。';
