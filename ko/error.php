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
 * Strings for component 'error', language 'ko', branch 'MOODLE_32_STABLE'
 *
 * @package   error
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alreadyloggedin'] = '이미 {$a}로 로그인 하였습니다. 다른 사용자로 로그인하려면 로그아웃 해야 합니다.';
$string['authnotexisting'] = '인증 플러그인이 없음';
$string['backupcontainexternal'] = '백업 파일에 이곳에 맞게 설정되지 않은 외부 무들네트웍 호스트가 포함되어 있음';
$string['backuptablefail'] = '백업 테이블을 제대로 설정할 수 없습니다!';
$string['blockcannotconfig'] = '이 블록은 전역 설정을 지원하지 않음';
$string['blockcannotinistantiate'] = '블록 객체의 초기화 문제';
$string['blockcannotread'] = '블록ID {$a} 에 대한 자료를 읽을 수 없음';
$string['blockdoesnotexist'] = '블록이 존재하지 않음';
$string['blockdoesnotexistonpage'] = '이  페이지 ({$a->url})에는 블록(id={$a->instanceid})이 없습니다';
$string['blocknameconflict'] = '명칭 중복: {$a->name} 블록은 기존의 {$a->conflict} 블록과 동일한 명칭을 지님!';
$string['callbackrejectcomment'] = '모듈이 덧글을 추가하는 것을 거부함';
$string['cannotaddcoursemodule'] = '새 강좌 모듈을 추가할 수 없음';
$string['cannotaddcoursemoduletosection'] = '그 영역에 새 강좌 모듈을 추가할 수 없음';
$string['cannotaddmodule'] = '{$a} 모듈을 추가할 수 없음!';
$string['cannotaddnewmodule'] = '{$a} 의 새 모듈을 추가할 수 없음';
$string['cannotaddrss'] = 'RSS 피드를 추가할 수 있는 권한이 없음';
$string['cannotaddthisblocktype'] = '이  페이지에 {$a} 블록을 추가할 수 없습니다';
$string['cannotassignrole'] = '강좌에서 역할을 부여할 수 없음';
$string['cannotassignrolehere'] = '이 문맥 ({$a->context}) 에서 역할 (id = {$a->roleid}) 을 부여받을 수 없음';
$string['cannotassignselfasparent'] = '자신을 더 상위로 지명할 수 없음!';
$string['cannotcallscript'] = '그런 방법으로는 이 스크립트를 호출할 수 없음';
$string['cannotcallusgetselecteduser'] = '복수 선택이 True 값이라면 user_selector::get_selected_user 를 호출할 수 없음';
$string['cannotcreatebackupdir'] = '백업 경로를 생성할 수 없음. 사이트 관리자가 파일 권한을 조정할 필요가 있음';
$string['cannotcreatecategory'] = '범주가 삽입되지 못함';
$string['cannotcreategroup'] = '모둠 생성중 오류';
$string['cannotcreatelangbase'] = '오류: 기본 언어팩 경로 생성 실패';
$string['cannotcreatelangdir'] = '언어팩 경로를 생성할 수 없음';
$string['cannotcreateorfindstructs'] = '강좌의 하부 얼개를 만들거나 찾는데 오류 발생';
$string['cannotcreatepopupwin'] = '정의되지 않은 요소 - 팝업창을 생성할 수 없음';
$string['cannotcreatesitedir'] = '사이트의 경로 생성 실패. 사이트 관리자가 디렉토리 접근권을 수정할 필요가 있음';
$string['cannotcreatetempdir'] = 'temp 디렉토리를 만들 수 없음';
$string['cannotcreateuploaddir'] = '올릴 경로를 생성할 수 없음. 사이트 관리자가 파일의 허가권을 조정하여야 함';
$string['cannotcustomisefiltersblockuser'] = '사용자 혹은 블록 문맥의 필터 설정을 변경할 수 없습니다.';
$string['cannotdeletebackupids'] = '이전의 백업 id를 삭제할 수 없음';
$string['cannotdeletecategorycourse'] = '\'{$a}\' 강좌 삭제 실패';
$string['cannotdeletecategoryquestions'] = '\'{$a}\' 범주에서 질문을 삭제할 수 없음';
$string['cannotdeletecourse'] = '강좌 삭제 권한이 없음';
$string['cannotdeletecustomfield'] = '추가 사항 삭제 오류';
$string['cannotdeletedir'] = '삭제할 수 없음 ({$a})';
$string['cannotdeletefile'] = '이 파일을 삭제할 수 없음';
$string['cannotdeleterole'] = '{$a} 때문에 삭제할 수 없음';
$string['cannotdeleterolewithid'] = 'ID {$a} 의 역할을 삭제할 수 없음';
$string['cannotdeletethisrole'] = '시스템에서 사용되거나 관리자의 최종 역할이기 때문에 이 역할을 삭제할 수 없습니다.';
$string['cannotdisableformat'] = '기본 포맷을 비활성화 할 수 없습니다.';
$string['cannotdownloadcomponents'] = '구성요소를 내려받을 수 없음';
$string['cannotdownloadlanguageupdatelist'] = 'download.moodle.org에서 업데이트된 언어 목록을 내려받을 수 없음';
$string['cannotdownloadzipfile'] = 'ZIP파일을 내려받을 수 없음';
$string['cannoteditcomment'] = '촌평을 수정할 수 없음!';
$string['cannoteditcommentexpired'] = '제한 시간이 지나서 편집할 수 없음!';
$string['cannoteditpostorblog'] = '블로그를 게시하거나 수정할 수 없음';
$string['cannoteditsiteform'] = '이 서식으로는 사이트 강좌를 수정할 수 없음';
$string['cannotedityourprofile'] = '죄송합니다만 개인정보를 수정할 수 없습니다.';
$string['cannotexecduringupgrade'] = '업그레이드 중에 실행될 수 없습니다.';
$string['cannotfindcategory'] = '데이테베이스에서 ID - {$a} 로 범주 자료를 찾을 수 없음';
$string['cannotfindcomponent'] = '구성요소를 찾을 수 없음';
$string['cannotfindcontext'] = '문맥을 찾을 수 없음';
$string['cannotfindcourse'] = '강좌를 찾을 수 없음';
$string['cannotfinddocs'] = '"{$a}" 언어의 문서창고를 찾을 수 없음';
$string['cannotfindgradeitem'] = '성적 항목을 찾을 수 없습니다.';
$string['cannotfindgroup'] = '모둠을 찾을 수 없음';
$string['cannotfindhelp'] = '"{$a}" 언어팩의 도움말 파일을 찾을 수 없음';
$string['cannotfindinfo'] = '"{$a}"에 대한 정보를 찾을 수 없음';
$string['cannotfindlang'] = '"{$a}" 언어팩을 찾을 수 없음!';
$string['cannotfindteacher'] = '선생님이 없음';
$string['cannotfinduser'] = '"{$a}" 사용자를 찾을 수 없음';
$string['cannotgetblock'] = '데이터베이스에서 블록을 불러올 수 없음';
$string['cannotgetcats'] = '범주 기록을 가져올 수 없음';
$string['cannotgetdata'] = '자료를 가져올 수 없음';
$string['cannotgradeuser'] = '이 사용자를 채점할 수 없습니다.';
$string['cannothaveparentcate'] = '강좌 범주는 최상위에 위치함!';
$string['cannotimport'] = '가져오기 오류';
$string['cannotimportformat'] = '죄송합니다만 아직 이 유형은 적용할 수 없습니다!';
$string['cannotimportgrade'] = '성적 가져오기 오류';
$string['cannotinsertgrade'] = '강좌 id없이는 성적 항목을 입력할 수 없음!';
$string['cannotinsertrate'] = '새 순위({$a->id} = {$a->rating})로 대체할 수 없음';
$string['cannotinsertrecord'] = '새로운 레코드 ID {$a} 를 입력할 수 없음';
$string['cannotmailconfirm'] = '암호 변경확인 이메일 발송 오류';
$string['cannotmanualctrack'] = '수동 이수 추적을 지원하지 않음';
$string['cannotmapfield'] = '배치 중복 검출 - 성적 항목 {$a} 에 두 필드가 중복 배치됨';
$string['cannotmarktopic'] = '본 강좌에서는 그 주제를 표기할 수 없음';
$string['cannotmigratedatacomments'] = '데이터 모듈의 덧글을 변환시킬 수 없음';
$string['cannotmodulename'] = '찾아가기를 만드는데 모듈 명칭을 읽어올 수 없음';
$string['cannotmoduletype'] = '찾아가기를 만드는데 모듈 형식을 읽어올 수 없음';
$string['cannotmovecategory'] = '범주를 이동할 수 없습니다.';
$string['cannotmoverolewithid'] = 'ID {$a} 의 역할을 이동할 수 없음';
$string['cannotopencsv'] = 'CSV 파일을 열 수 없음';
$string['cannotopenfile'] = '({$a}) 파일을 열 수 없음';
$string['cannotopenforwrit'] = '{$a} 를 작성해 넣을 수 없음';
$string['cannotopentemplate'] = '({$a}) 템플릿 파일을 열 수 없음';
$string['cannotopenzip'] = '64비트 운영체제의 zip 확장자 버그로 인하여 압축파일을 열 수 없는 것으로 여겨짐';
$string['cannotoverridebaserole'] = '기본 역할 능력은덮어쓰기 할 수 없음';
$string['cannotoverriderolehere'] = '문맥 ({$a->context}) 의 (id = {$a->roleid}) 역할을 덮어쓰기 하도록 허용되지 않았습니다.';
$string['cannotreadfile'] = '({$a}) 파일을 읽을 수 없음';
$string['cannotreadtmpfile'] = '임시 파일 읽기 오류';
$string['cannotreaduploadfile'] = '올려진 파일을 읽을 수 없음';
$string['cannotremovefrommeta'] = '이 메타코스에서는 선택한 강좌를 제거할 수 없음!';
$string['cannotresetguestpwd'] = '손님의 암호는 초기화할 수 없음';
$string['cannotresetmail'] = '암호 재설정 및 발송 오류';
$string['cannotresetthisrole'] = '이 역할은 재설정할 수 없음';
$string['cannotrestore'] = '오류가 발생하여 복구를 마칠 수 없었음!';
$string['cannotrestoreadminorcreator'] = '강좌 생성자나 관리자만 새 강좌를 복구할 수 있음!';
$string['cannotrestoreadminoredit'] = '선택한 강좌를 복구하려면 편집 가능한 선생님이거나 관리자라야 함!';
$string['cannotsaveagreement'] = '동의 사항을 저장할 수 없음';
$string['cannotsaveblock'] = '블록설정 저장 오류';
$string['cannotsavecomment'] = '덧글을 저장할 수 없음';
$string['cannotsavedata'] = '데이터를 저장할 수 없음';
$string['cannotsavefile'] = '"{$a}" 파일을 저장할 수 없음';
$string['cannotsavemd5file'] = 'md5 파일을 저장할 수 없음';
$string['cannotsavezipfile'] = 'ZIP 파일을 저장할 수 없음';
$string['cannotservefile'] = '파일을 서비스 할 수 없습니다. - 서버 설정 문제';
$string['cannotsetparentforcatoritem'] = '강좌항목 혹은 범주에 대한 상위를 설정할 수 없음!';
$string['cannotsetpassword'] = '사용자 암호를 설정할 수 없음!';
$string['cannotsetprefgrade'] = '본 성적 범주에서 {$a} 의 맞춤 집계표시방법을 설정할 수 없습니다.';
$string['cannotsettheme'] = '테마를 설정할 수 없음!';
$string['cannotsetupblock'] = '블록 테이블을 제대로 설정할 수 없음!';
$string['cannotsetupcapformod'] = '{$a} 에 대한 권한을 설정할 수 없음';
$string['cannotsetupcapforplugin'] = '{$a} 에 대한 권한을 설정할 수 없음';
$string['cannotshowhidecoursesincategory'] = '{$a} 범주의 강좌는 공개/비공개 할 수 없음';
$string['cannotunassigncap'] = '역할 {$a->role} 로부터 더 이상 사용이 권장되지 않는 능력 {$a->cap} 을 해지할 수 없습니다.';
$string['cannotunassignrolefrom'] = '사용자를 역할 id: {$a} 에서 역할해지 할 수 없음';
$string['cannotunzipfile'] = '압축된 파일을 풀 수 없음';
$string['cannotupdatemod'] = '{$a} 를 업데이트할 수 없음';
$string['cannotupdatepasswordonextauth'] = '외부 인증 {$a} 의 비밀번호 업데이트 실패. 좀 더 자세한 내용은 서버 기록을 참조하기 바람';
$string['cannotupdateprofile'] = '사용자 기록 업데이트 오류';
$string['cannotupdaterecord'] = '레코드 ID {$a} 를 업데이트할 수 없음';
$string['cannotupdaterss'] = 'RSS를 업데이트할 수 없음';
$string['cannotupdatesubcourse'] = '하위 강좌를 업데이트할 수 없음!';
$string['cannotupdateusermsgpref'] = '사용자 메시지 설정을 업데이트할 수 없음';
$string['cannotupdateuseronexauth'] = '외부 인증 {$a} 사용자 자료 업데이트 실패. 자세한 내용은 서버 기록을 참조할 것';
$string['cannotuploadfile'] = '파일 업로드 처리중 오류';
$string['cannotuseadmin'] = '관리자만 이  페이지를 사용할 수 있습니다';
$string['cannotuseadminadminorteacher'] = '선생님 혹은 관리자만 이  페이지를 사용할 수 있습니다';
$string['cannotusepage'] = '선생님 및 관리자만 이  페이지를 사용할 수 있습니다';
$string['cannotusepage2'] = '죄송하지만 이  페이지는 사용할 수 없습니다.';
$string['cannotviewprofile'] = '이 사용자의 개인정보를 볼 수 없음';
$string['cannotviewreport'] = '이 보고서를 볼 수 없습니다.';
$string['cannotwritefile'] = '({$a}) 파일에 기재할 수 없음';
$string['categoryerror'] = '범주 오류';
$string['categoryidnumbertaken'] = '아이디번호가 이미 다른 강좌에서 사용되고 있습니다.';
$string['categorynamerequired'] = '범주 이름이 필요합니다.';
$string['categorytoolong'] = '범주 이름이 너무 김';
$string['commentmisconf'] = '촌평의 ID가 잘못 설정됨';
$string['componentisuptodate'] = '구성 요소가 최신임';
$string['confirmsesskeybad'] = '죄송합니다. 세션키가 확실치 않아 이 작업을 수행할 수 없습니다. 이 보안 기능은 예기치 않은 사고를 막거나 중요한 기능의 악의적인 실행을 방지합니다. 이 기능을 꼭 실행하여야 하는지 확인하기 바랍니다.';
$string['couldnotassignrole'] = '역할 부여 중에 알 수 없는 심각한 오류 발생';
$string['couldnotupdatenoexistinguser'] = '사용자를 업데이트할 수 없음 - 사용자 없음';
$string['countriesphpempty'] = '오류: {$a} 언어팩의 countries.php 파일이 비었거나 없음';
$string['coursedoesnotbelongtocategory'] = '강좌가 이 범주에 속해있지 않음';
$string['courseformatnotfound'] = '강좌 형식  "{$a}"이 존재하지 않거나 인식되지 않습니다.';
$string['coursegroupunknown'] = '{$a} 모둠에 상응하는 강좌가 지정되어 있지 않음';
$string['courseidnotfound'] = '강좌 ID가 없음';
$string['coursemisconf'] = '강좌가 잘못 설정됨';
$string['courserequestdisabled'] = '요청한 강좌가 관리자에 의해 비활성화 됐음';
$string['csvcolumnduplicates'] = '중복된 열 발견';
$string['csvemptyfile'] = 'CSV 파일이 비어 있음';
$string['csvfewcolumns'] = '충분한 열이 없습니다. 구분자 설정을 확인하기 바람';
$string['csvinvalidcols'] = '<b>잘못된 CSV 파일:</b> 첫 줄에는 반드시 "헤더 필드"를 포함해야 하며, 쉼표로 구분된 "확장 필드" 혹은 "CAVV 결과 코드를 지닌 확장 필드"가 선언되어야 함';
$string['csvinvalidcolsnum'] = '잘못된 CSV 파일 - 각 줄은 49 혹은 70 필드로 이루어져야만 함';
$string['csvloaderror'] = 'CSV 파일 탑재 중 오류 발생!';
$string['csvweirdcolumns'] = '잘못된 CSV 파일 형식-열의 수가 일정하지 않음!';
$string['dbconnectionfailed'] = '<p>오류: 데이터베이스 연결 실패</p>
<p>데이터테이스가 중복되거나 제대로 작동하지 않을 수 있습니다.</p>
<p>사이트 관리자가 config.php를 분석해 데이터베이스가 제대로 지정이 되었는지 등의 자세한 내용을 점검해야 합니다.</p>';
$string['dbdriverproblem'] = '<p>오류: 데이터베이스의 드라이버 문제 발견됨</p>
<p>사이트 관리자가 서버의 설정을 검토해야 합니다.</p><p>{$a}</p>';
$string['dbsessionbroken'] = '심각한 데이터베이스 세션 문제 발견<br /><br />서버 관리자에게 알려주기 바람';
$string['dbsessionhandlerproblem'] = '데이터베이스 세션 설정 실패<br /><br />서버 관리자에게 알려주기 바람';
$string['dbsessionmysqlpacketsize'] = '심각한 세션 오류 발견<br /><br />본 문제는 MySQL의 max_allowed_packet 값을 너무 작게 주어서 생겼을 것임. 서버 관리자에게 알려주기 바랍니다.';
$string['dbupdatefailed'] = '데이터베이스 업데이트 실패';
$string['ddldependencyerror'] = '{$a->targettype} "{$a->targetname}" 는 변경될 수 없음. {$a->offendingtype} "{$a->offendingname}" 에서 종속성이 발견됨';
$string['ddlexecuteerror'] = 'DDL 쿼리 실행 오류';
$string['ddlfieldalreadyexists'] = '이미 "{$a}" 필드가 있음';
$string['ddlfieldnotexist'] = '"{$a->tablename}" 테이블에 "{$a->fieldname}" 필드가 없음';
$string['ddltablealreadyexists'] = '테이블 "{$a}"는 벌써 만들어져 있음';
$string['ddltablenotexist'] = '테이블 "{$a}"가 없음';
$string['ddlunknownerror'] = '알수없는 DDL 라이브러리 오류';
$string['ddlxmlfileerror'] = 'XML 데이터베이스 파일 오류 발견';
$string['ddsequenceerror'] = '잘못된 테이블 "{$a}" 정의: 자동 열은 한개만 있어야 하며 키로 정의되어야 합니다.';
$string['destinationcmnotexit'] = '대상 강좌의 모듈이 서버에 존재하지 않음!';
$string['detectedbrokenplugin'] = '"{$a}" 플러그인이 문제가 있거나 오래된 것이어서 계속할 수 없습니다.';
$string['dmlexceptiononinstall'] = '<p>데이터베이스 오류가 발생하였습니다. [{$a->errorcode}].<br />{$a->debuginfo}</p>';
$string['dmlreadexception'] = '데이터베이스 읽기 오류';
$string['dmltransactionexception'] = '데이터베이스 처리 오류';
$string['dmlwriteexception'] = '데이터베이스 쓰기 오류';
$string['downgradedcore'] = '오류!!! 당신이 사용하는 코드는 이 데이터베이스를 만드는데 사용된 버전보다 오래된 것입니다.';
$string['downloadedfilecheckfailed'] = '내려받은 파일 점검 실패';
$string['duplicatefieldname'] = '중복된 필드이름  "{$a}"이 발견되었습니다.';
$string['duplicateparaminsql'] = '오류: 중복된 매개 변수명 요청';
$string['duplicaterolename'] = '이 이름을 가진 역할이 이미 존재함!';
$string['duplicateroleshortname'] = '이 단축명을 가진 역할이 이미 존재함!';
$string['duplicateusername'] = '중복된 사용자명 - 기록 생략';
$string['emailfail'] = '이메일 전송 실패';
$string['error'] = '오류 발생';
$string['errorcleaningdirectory'] = '"{$a}" 디렉토리 정리 오류';
$string['errorcopyingfiles'] = '파일 복사 오류';
$string['errorcreatingdirectory'] = '"{$a}" 디렉토리 생성 오류';
$string['errorcreatingfile'] = '"{$a}" 파일 생성 오류';
$string['errorcreatingrole'] = '역할 생성 오류';
$string['errorfetchingrssfeed'] = 'RSS 접수 오류';
$string['erroronline'] = '"{$a}" 번째 줄 오류';
$string['errorparsingxml'] = '{$a->errorline} 줄에 있는 XML 문자열 {$a->errorstring}의 문자 {$a->errorchar}를 파싱하는데 오류';
$string['errorreadingfile'] = '"{$a}" 파일 읽기 오류';
$string['errorsavingrequest'] = '요청을 저장하는 중에 오류 발생';
$string['errorsettinguserpref'] = '개인 설정 오류';
$string['errorunzippingfiles'] = '파일 압축풀기 오류';
$string['expiredkey'] = '폐기된 키';
$string['externalauthpassworderror'] = '외부 인증을 위한 비어있지 않은 암호';
$string['externalfilenolocation'] = '외부 파일에  위치 경로가 없습니다.';
$string['failtoloadblocks'] = '데이터베이스에 하나 이상의 블록이 등록되어 있지만 모두 탑재에 실패함!';
$string['fieldrequired'] = '"{$a}"는 필수 항목';
$string['fileexists'] = '파일이 있습니다.';
$string['filemismatch'] = '파일명이 일치하지 않음. 파일 "{$a->current}" 는 {$a->file}가 되어야 함';
$string['filenotfound'] = '요청한 파일을 찾을 수 없음';
$string['filenotreadable'] = '파일을 읽을 수 없음';
$string['filterdoesnothavelocalconfig'] = '{$a} 필터는 지역 설정이 허용되지 않습니다.';
$string['filternotactive'] = '{$a} 필터가 활성화되어 있지 않음';
$string['filternotenabled'] = '필터를 쓸 수 없음!';
$string['filternotinstalled'] = '{$a} 필터가 설치되어 있지 않음';
$string['forumblockingtoomanyposts'] = '이 포럼의 지정 게시한계 초과';
$string['generalexceptionmessage'] = '제외 - {$a}';
$string['gradecantregrade'] = '성적 계산 중에 오류가 발생하였습니다: {$a}';
$string['gradepubdisable'] = '성적 공개 불가능';
$string['groupalready'] = '사용자는 이미 {$a} 모둠에 속해 있음';
$string['groupexistforcourse'] = '강좌에 이미 "{$a}" 모둠이 있음';
$string['groupingnotaddederror'] = '모둠 무리 "{$a}" 기 가 추가되지 않았습니다.';
$string['groupnotaddederror'] = '모둠 "{$a}"는 추가되지 않았음';
$string['groupunknown'] = '{$a} 모둠은 지정한 강좌에 속해있지 않음';
$string['groupusernotmember'] = '사용자가 이 모둠의 구성원이 아님';
$string['guestnocomment'] = '손님은 게시물의 논평을 할 수 없음!';
$string['guestnoeditprofile'] = '손님은 개인정보를 수정할 수 없음';
$string['guestnoeditprofileother'] = '손님의 개인정보는 수정될 수 없음';
$string['guestnorate'] = '손님은 게시물을 평가할 수 없음';
$string['guestsarenotallowed'] = '손님은 이 작업을 할 수 없음';
$string['hackdetected'] = '해커 침입이 탐지됨!';
$string['hashpoolproblem'] = '{$a} 에 잘못된 파일 지정';
$string['headersent'] = '헤더는 이미 전송되었음';
$string['idnumbertaken'] = '다른 강좌에서 이미 같은 ID가 쓰였음';
$string['idnumbertoolong'] = '아이디 번호가 너무 깁니다.';
$string['importformatnotimplement'] = '아직 이 형식의 가져오기는 적용되지 않음!';
$string['incorrectext'] = '바르지 않은 확장자';
$string['internalauthpassworderror'] = '내부 인증을 위한 누락된 암호 혹은 잘못된 암호 정책';
$string['invalidaccess'] = '본 페이지는 올바르게 접속되지 않았습니다.';
$string['invalidaccessparameter'] = '유효하지 않은 접속 매개 변수';
$string['invalidaction'] = '유효하지 않은 작동 매개 변수';
$string['invalidactivityid'] = '잘못된 활동 ID';
$string['invalidadminsettingname'] = '잘못된 관리 설정 ({$a})';
$string['invalidargorconf'] = '적절한 인수가 제공되지 않았거나 서버 설정이 잘못 되었음';
$string['invalidarguments'] = '적절한 인수가 제공되지 않음';
$string['invalidblockinstance'] = '{$a} 에 대한 잘못된 블록 인스턴스';
$string['invalidbulkenrolop'] = '잘못된 대량 등록 작업이 요청되었습니다.';
$string['invalidcategory'] = '잘못된 범주!';
$string['invalidcategoryid'] = '잘못된 범주 id!';
$string['invalidcomment'] = '덧글이 잘 못 되었음';
$string['invalidcommentarea'] = '잘못된 코멘트 영역';
$string['invalidcommentid'] = '잘못된 코멘트 아이디';
$string['invalidcommentitemid'] = '잘못된 코멘트 아이템아이디';
$string['invalidcommentparam'] = '잘못된 코멘트 파라메터';
$string['invalidcomponent'] = '잘못된 구성요소 이름';
$string['invalidconfirmdata'] = '잘못된 인증 데이터';
$string['invalidcontext'] = '잘못된 문맥';
$string['invalidcourse'] = '잘못된 강좌';
$string['invalidcourseid'] = '잘못된 강좌 아이디:({$a})를 입력하려고 함';
$string['invalidcourselevel'] = '바르지 않은 문맥 수준!';
$string['invalidcoursemodule'] = '잘못된 강좌모듈 아이디';
$string['invalidcoursenameshort'] = '잘못된 강좌 단축명';
$string['invaliddata'] = '제시된 자료가 바르지 않음';
$string['invaliddatarootpermissions'] = '잘못된 권한이 $CFG->dataroot 디렉토리에서 발견되었습니다. 관리자는 권한을 고쳐야합니다.';
$string['invaliddevicetype'] = '잘못된 기기 유형';
$string['invalidelementid'] = '잘못된 엘리먼트 id!';
$string['invalidentry'] = '바르지 않은 입력임!';
$string['invalidevent'] = '잘못된 일정';
$string['invalidfieldname'] = '"{$a}"는 쓸 수 없는 필드명임';
$string['invalidfiletype'] = '"{$a}"는 쓸 수 없는 파일형태임';
$string['invalidformatpara'] = '매개변수 선택 형식이 바르지 않음';
$string['invalidformdata'] = '잘못된 양식 데이터';
$string['invalidfunction'] = '잘못된 함수';
$string['invalidgradeitemid'] = '잘못된 성적 항목 id';
$string['invalidgroupid'] = '잘못된 모둠 id를 지정';
$string['invalidipformat'] = '잘못된 IP 주소 형식';
$string['invaliditemid'] = '틀린 항목 id';
$string['invalidkey'] = '틀린 키';
$string['invalidlegacy'] = '{$a} 유형에 대한 정규 역할 정의가 바르지 않음';
$string['invalidmd5'] = '변수 점검 오류 - 재시도 할 것';
$string['invalidmode'] = '잘못된 모드 ({$a})';
$string['invalidmodule'] = '잘못된 모듈';
$string['invalidmoduleid'] = '잘못된 모듈 ID : {$a}';
$string['invalidmodulename'] = '잘못된 모듈 명칭 : {$a}';
$string['invalidnum'] = '잘못된 수치';
$string['invalidnumkey'] = '$conditions 행열에는 숫자키를 포함할 수 없음. 코드를 수정하세요!';
$string['invalidoutcome'] = '틀린 학습성과 id';
$string['invalidpagesize'] = '잘못된  페이지 크기';
$string['invalidpasswordpolicy'] = '잘못된 암호 정책';
$string['invalidpaymentmethod'] = '잘못된 지불 방법: {$a}';
$string['invalidqueryparam'] = '오류: 쿼리 파라메터 갯수. {$a->expected} 필요, 입력된 수 {$a->actual}';
$string['invalidratingarea'] = '잘못된 등급 영역';
$string['invalidrecord'] = '데이터베이스 테이블 {$a} 에서 데이터 레코드를 찾지 못 함';
$string['invalidrecordunknown'] = '데이터베이스에서 데이터 레코드를 찾지 못 함';
$string['invalidrequest'] = '잘못된 요청';
$string['invalidrole'] = '잘못된 역할';
$string['invalidroleid'] = '잘못된 역할 ID';
$string['invalidscaleid'] = '잘못된 척도 id';
$string['invalidsection'] = '강좌 모듈에 잘못된 위치 정보 포함됨';
$string['invalidsesskey'] = 'sesskey가 틀렸기 때문에 서식이 접수되지 않음!';
$string['invalidshortname'] = '강좌의 잘못된 단축명임';
$string['invalidsourcefield'] = '초안 파일의 소스 필드가 잘 못되었습니다.';
$string['invalidstatedetected'] = '뭔가 잘 못 되었음: {$a} 일반적으로 이런 일은 있어서는 안됨';
$string['invalidurl'] = '잘못된 웹주소';
$string['invaliduser'] = '잘못된 사용자';
$string['invaliduserfield'] = '잘못된 사용자 필드: {$a}';
$string['invaliduserid'] = '잘못된 사용자 id';
$string['invalidusername'] = '사용자 이름에 사용할 수 없는 글자가 있습니다.';
$string['invalidxmlfile'] = '"{$a}"는 정확한 XML 파일이 아님';
$string['iplookupfailed'] = 'IP 주소 {$a} 에 대한 지리 정보를 찾을 수 없음';
$string['iplookupprivate'] = '사설 IP 주소의 검색내용을 표시할 수 없음';
$string['ipmismatch'] = 'IP 주소가 일치하지 않음';
$string['listcantmovedown'] = '마지막 항목이어서 항목을 아래로 옮기지 못 함';
$string['listcantmoveleft'] = '상위가 없어서 항목을 왼쪽으로 옮기지 못 함';
$string['listcantmoveright'] = '하위 항목으로 만들 항목이 없어서 항목을 오른쪽으로 옮길 수 없음. 주변의 하위 항목으로 이동하고 거기서 오른쪽으로 옮길 수 있음';
$string['listcantmoveup'] = '첫번째 항목이므로 항목을 위로 옮길 수 없음';
$string['listnochildren'] = '항목의 하위를 찾지 못함';
$string['listnoitem'] = '항목이 없음';
$string['listnopeers'] = '항목의 동항이 없음';
$string['listupdatefail'] = '위계 목록을 편집 중 DB 조작 실패';
$string['logfilenotavailable'] = '기록할 수 없음';
$string['loginasnoenrol'] = '강좌에서 타인명의로는 등록 또는 탈퇴를 할 수 없음';
$string['loginasonecourse'] = '이 강좌에 입장할 수 없습니다.<br /> 다른 강좌에 들어가기 전에 반드시 다른 역할로로그인한 세션을 종료하여야 합니다.';
$string['maxareabytes'] = '이 파일은 이 영역에 남아 있는 공간보다 크큽니다.';
$string['maxbytes'] = '파일이 처리할 수 있는 최대 크기보다 큼';
$string['messagingdisable'] = '이 사이트에서는 메시지 기능을 쓸 수 없음';
$string['mimetexisnotexist'] = '시스템이 mimeTeX를 구동하도록 설정되지 않음. <a href="http://moodle.org/download/mimetex/">http://moodle.org/download/mimetex/</a>에서 환경에 맞는 적절한 파일을 내려받거나 <a href="http://www.forkosh.com/mimetex.zip"> http://www.forkosh.com/mimetex.zip</a>에서 C 원본 코드를 내려받아 컴파일하여 moodle/filter/tex/ 경로에 넣어야 함.';
$string['mimetexnotexecutable'] = '맞춤 mimetex가 실행되지 않음!';
$string['missingfield'] = '필드 "{$a}" 가 없음';
$string['missingkeyinsql'] = '오류: 질의에 "{$a}" 매개변수 누락';
$string['missing_moodle_backup_xml_file'] = '백업에 XML 파일 {$a} 이 없습니다.';
$string['missingparam'] = '필수 매개변수 ({$a}) 누락';
$string['missingparameter'] = '매개변수 누락';
$string['missingrequiredfield'] = '필요한 항목이 빠져 있음';
$string['missinguseranditemid'] = '사용자 id와 항목 id 빠짐';
$string['missingvarname'] = '필수 변수명이 누락됨!';
$string['mixedtypesqlparam'] = '오류: sql 매개변수 질의가 혼합형임!!';
$string['mnetdisable'] = 'MNET을 이용할 수 없음';
$string['mnetlocal'] = '원격 MNET 사용자는 여기에 로그인 할 수 없음';
$string['moduledisable'] = '이 강좌에서는 모듈({$a})을 쓸 수 없음';
$string['moduledoesnotexist'] = '모듈이 존재하지 않음';
$string['moduleinstancedoesnotexist'] = '본 모듈의 인스턴스가 존재하지 않음';
$string['modulemissingcode'] = '모듈 {$a}가 이 기능을 수행하는데 필요한 코드를 가지고 있지 않음';
$string['multiplerecordsfound'] = '단 하나의 레코드만 필요한데, 복수의 레코드가 주어짐';
$string['multiplerestorenotallow'] = '재차 복구하는 것은 허용되지 않음!';
$string['mustbeloggedin'] = '이를 통해 로그인 해야만 함';
$string['mustbeteacher'] = '선생님만 이 페이지를 볼 수 있음';
$string['myisamproblem'] = '데이터베이스 테이블이 MyISAM 데이터베이스 엔진을 사용합니다. InnoDB와 같은 완전한 거래를 지원하는 ACID 컴플라이언트 엔진을 사용하는 것을 추천합니다.';
$string['needcopy'] = '먼저 복사를 해야 합니다!';
$string['needcoursecategroyid'] = '강좌 id나 범주가 반드시 지정되어야 함';
$string['needphpext'] = 'PHP 설정을 지원하려면  {$a} 를 추가할 필요가 있음';
$string['noadmins'] = '관리자가 없음!';
$string['noblocks'] = '블록이 없음!';
$string['nocapabilitytousethisservice'] = '사용자는 이 서비스를 이용하기 위해 요구되는 능력을 갖고 있지 않습니다.';
$string['nocategorydelete'] = '\'{$a}\' 범주를 삭제할 수 없음!';
$string['nocontext'] = '죄송하지만, 그 강좌는 제대로된 문맥이 아닙니다.';
$string['nodata'] = '자료없음';
$string['noexistingcategory'] = '범주가 존재하지 않음';
$string['nofile'] = '파일이 지정되지 않음';
$string['nofiltersenabled'] = '어떤 필터도 활성화되어 있지 않음';
$string['nofolder'] = '요청한 경로 없음';
$string['noformdesc'] = '이 활동에 대한 formslib 양식 설명서가 존재하지 않음';
$string['noguest'] = '손님은 안됩니다!';
$string['noinstances'] = '이 강좌에는 {$a}  인스턴스가 없습니다!';
$string['nologinas'] = '현재 사용자 ID로는 로그인 할 수 없음';
$string['nonmeaningfulcontent'] = '의미없는 내용';
$string['noparticipants'] = '강좌에 참여자가 아무도 없음';
$string['noparticipatorycms'] = '죄송하지만, 보고할만한 참여했던 강좌 모듈이 없습니다.';
$string['nopermissions'] = '죄송합니다만 그 ({$a})를 할만한 권한이 없습니다.';
$string['nopermissiontocomment'] = '본 어휘집에 덧글을 추가할 수 없음!';
$string['nopermissiontodelentry'] = '타인의 입력사항을 삭제할 수 없음!';
$string['nopermissiontoeditcomment'] = '타인의 덧글을 수정할 수 없음!';
$string['nopermissiontohide'] = '숨길 권한이 없음!';
$string['nopermissiontoimportact'] = '본 강좌에 활동을 가져올 수 있는 권한이 없음';
$string['nopermissiontolock'] = '잠글 권한이 없음!';
$string['nopermissiontomanagegroup'] = '모둠을 관리할 수 있는 권한이 없음';
$string['nopermissiontorate'] = '항목 순위를 매길 수 없음!';
$string['nopermissiontoshow'] = '볼 권한이 없음!';
$string['nopermissiontounlock'] = '잠김 해제할 권한이 없음!';
$string['nopermissiontoupdatecalendar'] = '죄송합니다. 달력 일정을 업데이트 할 권한을 가지고 있지 않습니다.';
$string['nopermissiontoviewgrades'] = '성적을 볼 수 없음';
$string['nopermissiontoviewletergrade'] = '문자 성적을 볼 권한이 없음';
$string['nopermissiontoviewpage'] = '이  페이지를 보도록 허용되지 않았습니다.';
$string['nosite'] = '최 상위 강좌를 찾을 수 없음!';
$string['nositeid'] = '사이트 ID 누락';
$string['nostatstodisplay'] = '표시할 데이터가 없음';
$string['notallowedtoupdateprefremotely'] = '원격으로는 개인설정을 업데이트할 수 없음';
$string['notavailable'] = '현재는 사용할 수 없음';
$string['notlocalisederrormessage'] = '{$a}';
$string['notmemberofgroup'] = '이 강좌의 모둠 구성원이 아님';
$string['notownerofkey'] = '이 키의 소유자가 아님';
$string['nousers'] = '그런 사용자는 없습니다!';
$string['onlyadmins'] = '관리자만이 그 일을 할 수 있음';
$string['onlyeditingteachers'] = '편집기능을 부여받은 선생님만 그 일을 할 수 있음';
$string['onlyeditown'] = '본인의 정보만 편집할 수 있음';
$string['orderidnotfound'] = '주문 ID {$a} 가 없음';
$string['pagenotexist'] = '흔치 않은 오류 발생(없는 페이지로 가려고 함)';
$string['pathdoesnotstartslash'] = '적절한 인수가 제공되지 않았으며, 경로는 슬래시로 시작되어서는 안됨!';
$string['pleasereport'] = '시간이 있다면 오류가 발생하였을 때 무엇을 하려고 하였는지를 우리에게 알려주십시요.';
$string['pluginrequirementsnotmet'] = '플러그인 "{$a->pluginname}" ({$a->pluginversion}) 이 설치될 수 없습니다. 새 버전의 무들이 필요합니다. (현재 {$a->currentmoodle} 버전을 사용하고 있으나, {$a->requiremoodle} 버전이 필요합니다).';
$string['prefixcannotbeempty'] = '<p>오류: 데이터베이스의 테이블 접두사는 생략될 수 없습니다. ({$a})</p>
<p>사이트 관리자가 이를 바로잡이야 합니다.</p>';
$string['prefixtoolong'] = '<p>오류: 데이터베이스의 테이블 접두사가 너무 깁니다. ({$a->dbfamily})</p>
<p>시이트 관리자가 이를 바로잡이야 합니다 {$a->dbfamily} 테이블 접두사의 최대 길이는 {$a->maxlength} 자 입니다.</p>';
$string['processingstops'] = '진행이 멈췄습니다. 남은 기록은 무시됩니다.';
$string['protected_cc_not_supported'] = '보호된 카트리지는 지원되지 않습니다.';
$string['querystringcannotbeempty'] = '질의 문자열은 공백이 될 수 없습니다.';
$string['redirecterrordetected'] = '지원하지 않는 경로 전환이 발견되었기 때문에, 스크립트 실행이 중지되었음';
$string['refoundto'] = '{$a} 에게 환불 가능';
$string['refoundtoorigi'] = '{$a} 전액 환불됨';
$string['remotedownloaderror'] = '서버로 구성요소를 다운로드하는데 실패하였습니다. 프록시 설정을 확인하십시요. PHP cURL 확장라이브러리를 추천합니다. <br /><br /> <a href="{$a->url}">{$a->url}</a> 파일을 수동으로 다운로드해서 서버의 "{$a->dest}"에 복사한 다음 거기서 압축을 해제하십시요.';
$string['remotedownloadnotallowed'] = '서버로 구성요소를 내려받는 것이 허용되지 않습니다. (allow_url_fopen 이 비활성화 됨).<br /><br /> 수동으로 <a href="{$a->url}">{$a->url}</a> 파일을 다운로드 하고, 서버의 "{$a->dest}"에 복사한 다음 거기서 압축을 해제하십시요.';
$string['reportnotavailable'] = '사이트 수준의 강좌에서만 이 유형의 보고서를 쓸 수 있음';
$string['requirecorrectaccess'] = '잘못된 url 혹은 포트';
$string['requireloginerror'] = '강좌 혹은 활동에 접속할 수 없음';
$string['restorechecksumfailed'] = '세션에 저장되었던 정보를 복구하던 중 약간의 문제가 발생하였습니다. php 저장영역 혹은 데이터베이스 용량의 한계를 점검해 보기 바랍니다. 복구가 중지됨.';
$string['restore_path_element_missingmethod'] = '복구 메쏘드 {$a}가 누락되었습니다. 개발자가 정의해야 합니다.';
$string['restore_path_element_noobject'] = '복구 객체 {$a} 는 객체가 아닙니다.';
$string['restrictedcontextexception'] = '죄송합니다만, 외부 기능의 실행은 문맥 위반입니다.';
$string['restricteduser'] = '죄송합니다. 현재 당신의 "{$a}" 계정으로는 그 일을 할 수 없습니다.';
$string['reverseproxyabused'] = '죄송합니다만 역 프록시가 활성화되어 있기 때문에 서버가 직접 접속할 수 없습니다.<br />서버 관리자에게 연락하시기 바랍니다.';
$string['rpcerror'] = 'MNET 교신에 실패! 다음의 내용을 관리자에게 전달해주기 바랍니다: {$a}';
$string['scheduledbackupsdisabled'] = '자동 백업이 서버관리자에 의해 비활성화 되었음';
$string['secretalreadyused'] = '암호 변경 확인 링크가 이미 사용되었으므로 암호는 변경되지 않습니다.';
$string['sectionnotexist'] = '영역이 존재하지 않음';
$string['sendmessage'] = '메세지 보내기';
$string['serverconnection'] = '서버 접속 오류';
$string['servicedonotexist'] = '그런 서비스가 없음';
$string['sessioncookiesdisable'] = 'require_key_login()의 사용이 바르지 않음 - 세션 쿠기를 비활성해야 함!';
$string['sessiondiskfull'] = '세션 파티션이 다 찻음. 현제 로그인 할 수 없음.<br /><br />관리자에게 통고 바람';
$string['sessionerroruser'] = '세션이 종료 되었습니다. 다시 로그인 하십시오.';
$string['sessionerroruser2'] = '로그인 세션에 영향을 줄만한 서버 오류가 발생했습니다. 다시 로그인 하시거나 인터넷 창을 다시 켜주십시오.';
$string['sessionipnomatch'] = '죄송합니다 당신의 아이피 주소가 처음 로그인 했을 때와 다릅니다. 이 보안 기능은 해커가 아이디를 도용해 이 사이트에 접속하는 것을 방지합니다. 정상적인 사용자들에게는 이 메시지가 나타나지 않을 것입니다. 도움을 원한다면 이 사이트의 운영자에게 문의하시기 바랍니다.';
$string['sessionipnomatch2'] = '죄송합니다. 당신의 아이피 주소가 처음 로그인 했을 때와 다릅니다. 이 보안 기능은 해커가 아이디를 도용해 이 사이트에 접속하는 것을 방지합니다. 이 메시지는 무선네트웍을 이용하거나 로밍 서비스를 이용할 때에도 나타날 수 있습니다. 좀 더 자세한 사항은 사이트 관리자에게 문의하기 바랍니다.<br /><br />계속 진행하고 싶으시면 F5키를 눌러 페이지를 업데이트하십시오.';
$string['shortnametaken'] = '이미 다른 강좌에서 같은 단측명이 사용되었음';
$string['socksnotsupported'] = 'PHP4는 SOCKS5 프록시를 지원하지 않음';
$string['spellcheckernotconf'] = '철자검색기가 설정되지 않음';
$string['sslonlyaccess'] = '죄송합니다만, 보안상 이유로 https 접속만 허용됩니다.';
$string['statscatchupmode'] = '현재 통계 수집중에 있습니다. 현재 {$a->daysdone} 일간의 자료가 처리되었고 {$a->dayspending} 가 처리 대기중에 있습니다. 잠시후 다시 확인해 주시기 바랍니다!';
$string['statsdisable'] = '통계가 활성화되어 있지 않음';
$string['statsnodata'] = '강좌 및 시한의 조합 조건에 맞는 자료가 없음';
$string['storedfilecannotcreatefiledirs'] = '이 곳에 파일 저장 경로를 만들 수 없습니다. 데이터 경로의 사용권한을 살펴 보기 바랍니다.';
$string['storedfilecannotread'] = '파일이 존재하지 않거나 파일 접근 권한에 문제가 있어 파일을 읽을 수 없음';
$string['storedfilenotcreated'] = '"{$a->contextid}/{$a->filearea}/{$a->itemid}{$a->filepath}{$a->filename}" 파일을 생성할 수 없음';
$string['storedfileproblem'] = '파일 ({$a})에 알 수 없는 예외 규정이 적용되어 있음';
$string['tagdisabled'] = '태그 사용 불가!';
$string['tagnotfound'] = '지정한 태그가 데이터베이스에 없음';
$string['targetdatabasenotempty'] = '대상 데이터베이스가 비어있지 않음. 안전성을 이유로 전송 취소';
$string['textconditionsnotallowed'] = '텍스트 컬럼 조건 비교가 허용되지 않습니다. 질의에 sql_compare_text() 를 사용하십시요.';
$string['themenotinstall'] = '테마가 설치되지 않았음!';
$string['TODO'] = '실행목록';
$string['tokengenerationfailed'] = '새로운 토큰을 생성할 수 없음';
$string['transactionvoid'] = '이미 취소되었기 때문에 거래를 취소할 수 없음';
$string['unenrolerror'] = '그 사람을 제명시키려 하는 중에 오류 발생';
$string['unicodeupgradeerror'] = '데이터베이스가 아직 유니코드가 아니지만 이 무들 버전으로는  여러분의 데이터베이스를 유니코드로 변환시킬 수 없습니다. 우선 무들을 1.7.x버전대로 판올림을 하시고 그곳의 관리자 페이지에서 유니코드로 변환해 주시기 바랍니다. 그 이후에나 무들 {$a} 로 이전해 갈 수 있을 것입니다.';
$string['unknowaction'] = '알 수 없는 활동!';
$string['unknowcategory'] = '범주를 알 수 없음!';
$string['unknowcontext'] = 'get_child_contexts에 없는 문맥 ({$a})';
$string['unknowformat'] = '알수없는 형식 ({$a})';
$string['unknownbackupexporterror'] = '가져오기를 위해 정보를 준비하는 중 알 수 없는 오류';
$string['unknownblockregion'] = '블록 영역 \'{$a}\'이 이 페이지에서 인식되지 않습니다.';
$string['unknowncontext'] = '알 수 없는 문맥';
$string['unknowncourse'] = '"{$a}"라는 알려지지 않은 강좌';
$string['unknowncourseidnumber'] = '알수 없는 강좌 ID "{$a}"';
$string['unknowncourserequest'] = '알 수 없는 강좌 요청';
$string['unknowncoursesection'] = '강좌 "{$a}"에 알 수 없는 강좌 섹션';
$string['unknownevent'] = '알수 없는 이벤트';
$string['unknownfiletype'] = '알 수 없는 필터유형';
$string['unknowngroup'] = '알 수 없는 모둠 "{$a}"';
$string['unknownhelp'] = '알 수 없는 도움말 {$a}';
$string['unknownjsinrequirejs'] = 'JS 라이브러리 {$a} 를 찾을 수 없음';
$string['unknownmodulename'] = '양식의 모듈명을 알 수 없음';
$string['unknownrole'] = '알 수 없는 역할 "{$a}"';
$string['unknownsortcolumn'] = '{$a} 난의 정렬 방법을 알 수 없음';
$string['unknownuseraction'] = '죄송합니다만, 이 사용자 활동을 이해할 수 없음';
$string['unknownuserselector'] = '알수없는 사용자 선택 프로그램';
$string['unknoworder'] = '미확인 주문';
$string['unknowparamtype'] = '알 수 없는 변수 유형 : {$a}';
$string['unknowquestiontype'] = '지원되지 않는 질문 유형 {$a}';
$string['unknowuploadaction'] = '오류: 알 수 없는 전송 처리 ({$a})';
$string['unspecifycourseid'] = '반드시 강좌 아이디, 단축명 혹은 ID 번호가 지정되어야 함';
$string['unsupportedevent'] = '지원되지 않는 일정 유형';
$string['unsupportedstate'] = '지원되지 않는 이수 상태';
$string['unsupportedwebserver'] = '죄송합니다만, 웝서버 프로그램 ({$a}) 는 지원하지 않습니다.';
$string['upgraderequires19'] = '오류: 무들의 새 버전이 서버에 설치되었습니다만, 안타깝께도 기존의 버전에서는 판올림을 지원하지 않습니다.<br />우선 최근의 1.9.x로 판올림하시기 바랍니다. 한편 전에 있던 버전을 재 설치해서 원래의 버전으로 되돌아 갈 수도 있습니다.';
$string['upgraderunning'] = '사이트가 판올림 중이므로, 나중에 다시 시도하기 바랍니다.';
$string['urlnotdefinerss'] = 'RSS 피드를 위한 URL이 정의되지 않음';
$string['useradmineditadmin'] = '관리자만이 다른 관리자 계정을 수정할 수 있습니다.';
$string['useradminodelete'] = '관리자 계정은 삭제될 수 없습니다.';
$string['userautherror'] = '알 수 없는 인증 플러그인';
$string['userauthunsupported'] = '인증 플러그인이 지원되지 않음';
$string['useremailduplicate'] = '주소 복제';
$string['usermustbemnet'] = 'MNET 접속 목록의 사용자는 원격 MNET 사용자와 일치해야만 함';
$string['usernotaddederror'] = '사용자 추가되지 않음 - 오류';
$string['usernotaddedregistered'] = '사용자 추가되지 않음 - 이미 등록됨';
$string['usernotavailable'] = '이 사용자 세부사항은 이용할 수 없음';
$string['usernotdeletedadmin'] = '사용자 삭제 실패 - 관리자 계정은 삭제 할 수 없음';
$string['usernotdeletederror'] = '사용자 삭제 실패 - 알 수 없는 오류';
$string['usernotdeletedmissing'] = '사용자 삭제 실패 - 사용자명이 없음';
$string['usernotdeletedoff'] = '사용자 삭제 실패 - 삭제가 허용되지 않음';
$string['usernotincourse'] = '이 사용자는 본 강좌에 입장할 수 없음!';
$string['usernotrenamedadmin'] = '관리자의 계정명은 바꿀 수 없음';
$string['usernotrenamedexists'] = '사용자 아이디 변경 못함 - 이미 사용중';
$string['usernotrenamedmissing'] = '사용자 아이디 변경 못함 - 이전 사용자 아이디를 찾을 수 없음';
$string['usernotrenamedoff'] = '사용자 아이디 변경 못함 - 아이다변경이 허용되지 않음';
$string['usernotupdatedadmin'] = '관리자 계정을 업데이트할 수 없음';
$string['usernotupdatederror'] = '사용자 업데이트 안됨 - 오류';
$string['usernotupdatednotexists'] = '사용자 업데이트 안됨 - 존재하지 않음';
$string['userquotalimit'] = '파일 저장 한계에 다다름';
$string['userselectortoomany'] = '복수선택 값이 false 라 할지라도 user_selector는 하나 이상의 선택된 사용자를 처리할 수 없음';
$string['wrongcall'] = '이 스크립트는 잘 못 호출되었음';
$string['wrongcontextid'] = '문맥 ID 부정확(찾을 수 없음)';
$string['wrongdestpath'] = '잘못된 목적 경로';
$string['wrongroleid'] = '부정확한 역할 ID!';
$string['wrongsourcebase'] = '잘못된 소스 URL  베이스';
$string['wrongusernamepassword'] = '잘못된 아이디/비밀번호';
$string['wrongzipfilename'] = '잘못된 ZIP 파일명';
$string['wscouldnotcreateecoursenopermission'] = '원본 오류 - 강좌를 생성할 수 없음 - 권한 없음';
$string['wwwrootmismatch'] = '잘못된 접속 발견, 본 서버는 "{$a}" 주소를 경유한 접속한 허용됩니다.<br />서버 관리자에게 문의하여 주시기 바랍니다.';
$string['wwwrootslash'] = 'config.php의 $CFG->wwwroot 에 마지막 슬래시가 포함되서는 안되는 데, 오류 발견. <br />서버 관리자에게 문의하여 주시기 바랍니다.';
$string['xmldberror'] = 'XMLDB 오류!';
$string['youcannotdeletecategory'] = '내용을 옮기거나 삭제할 수 있는 권한이 없기 때문에 \'{$a}\' 범주를 삭제할 수 없습니다.';
