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
 * Strings for component 'tool_dataprivacy', language 'zh_cn', version '3.8'.
 *
 * @package     tool_dataprivacy
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitiesandresources'] = '活动和资源';
$string['addcategory'] = '增加类别';
$string['addnewdefaults'] = '添加一个新的默认模块';
$string['addpurpose'] = '‎添加用途‎';
$string['addroleoverride'] = '‎添加角色覆盖‎';
$string['approve'] = '‎批准‎';
$string['approverequest'] = '‎批准请求‎';
$string['automaticdeletionrequests'] = '‎创建自动数据删除请求‎';
$string['automaticdeletionrequests_desc'] = '如果启用，将为手动删除的任何用户帐户自动创建数据删除请求。';
$string['bulkapproverequests'] = '批准请求';
$string['bulkdenyrequests'] = '拒绝请求';
$string['cachedef_contextlevel'] = '场景级别用途和类别';
$string['cachedef_purpose'] = '数据用途';
$string['cachedef_purpose_overrides'] = '数据隐私工具中的用途覆盖';
$string['cancelrequest'] = '取消请求';
$string['cancelrequestconfirmation'] = '您真的想取消该数据请求吗？';
$string['cannotreset'] = '无法重置此请求。只有被拒绝的请求才能被重置。';
$string['categories'] = '类别';
$string['categorieslist'] = '数据类别列表';
$string['category'] = '类别';
$string['category_help'] = '数据注册表中的一个类别描述了数据的类型。可以添加新类别，或者如果选择继承，则应用来自上级场景的数据类别。场景是(从低到高)：版块>活动模块>课程>课程类别>网站。';
$string['categorycreated'] = '已创建类别';
$string['categorydefault'] = '默认类别';
$string['categorydefault_help'] = '默认类别是应用于任何新实例的数据类别。如果选择继承，则应用来自上级场景的数据类别。场景是(从低到高):版块>活动模块>课程>课程类别>用户>网站。';
$string['categoryupdated'] = '已上传类别';
$string['close'] = '关闭';
$string['compliant'] = '遵循';
$string['confirmapproval'] = '您确定要批准这个数据请求吗?';
$string['confirmbulkapproval'] = '您确定要批量批准所选的数据请求吗?';
$string['confirmbulkdenial'] = '您确定要批量拒绝所选的数据请求吗?';
$string['confirmcompletion'] = '您确定要把这个用户查询标记为完成吗?';
$string['confirmcontextdeletion'] = '您确定要删除所选场景吗?这还将删除它们各自的子场景的所有用户数据。';
$string['confirmdenial'] = '您确定要拒绝这个数据请求吗?';
$string['confirmrequestresubmit'] = '您确定要取消当前 {$a->type} 对 {$a->username} 的请求并重新提交吗?';
$string['contactdataprotectionofficer'] = '联系私隐官';
$string['contactdataprotectionofficer_desc'] = '如果启用，用户将能够联系私隐官，并通过其个人档案页面上的链接提出数据请求。';
$string['contactdpoviaprivacypolicy'] = '官请联络私隐政策内所述的私隐专员。';
$string['contextlevelname10'] = '网站';
$string['contextlevelname30'] = '用户';
$string['contextlevelname40'] = '课程类别';
$string['contextlevelname50'] = '课程';
$string['contextlevelname70'] = '活动模块';
$string['contextlevelname80'] = '版块';
$string['contextpurposecategorysaved'] = '用途和分类已保存。';
$string['createcategory'] = '创建数据类别';
$string['createdeletedatarequest'] = '创建数据删除请求';
$string['createnewdatarequest'] = '创建一个新的数据请求';
$string['createpurpose'] = '创建数据用途';
$string['creationauto'] = '自动';
$string['creationmanual'] = '手动';
$string['datadeletion'] = '数据删除';
$string['datadeletionpagehelp'] = '保留期限已过的数据列在这里。请检查并确认数据删除，然后由“删除过期场景”计划任务执行。';
$string['dataprivacy:downloadallrequests'] = '为每个人下载导出的数据';
$string['dataprivacy:downloadownrequest'] = '下载您自己导出的数据';
$string['dataprivacy:makedatadeletionrequestsforchildren'] = '请求删除未成年人的数据';
$string['dataprivacy:makedatarequestsforchildren'] = '为未成年人提供数据请求';
$string['dataprivacy:managedataregistry'] = '管理数据注册表';
$string['dataprivacy:managedatarequests'] = '管理数据请求';
$string['dataprivacy:requestdelete'] = '为您自己请求数据删除';
$string['dataprivacy:requestdeleteforotheruser'] = '‎代表其他用户请求删除数据‎';
$string['dataregistry'] = '数据注册表';
$string['dataregistryinfo'] = '数据注册表允许为站点上的所有内容设置类别(数据类型)和用途(处理数据的原因)——从用户和课程到活动和版块。对于每个用途，可以设定一个保留期限。当保留期限已过，数据被标记和列出删除，等待管理员确认。';
$string['datarequestcreatedforuser'] = '为{$a}创建的数据请求';
$string['datarequestcreatedfromscheduledtask'] = '从计划任务(已删除的预先存在用户)自动创建。';
$string['datarequestcreatedupondelete'] = '在用户删除时自动创建。';
$string['datarequestemailsubject'] = '数据请求：{$a}';
$string['datarequests'] = '数据请求';
$string['dataretentionexplanation'] = '此摘要显示用于保留用户数据的默认类别和用途。某些地区可能有比此处列出的类别和用途更具体的类别和用途。‎';
$string['dataretentionsummary'] = '‎数据保留摘要‎';
$string['datecomment'] = '[{$a->date}]:
 {$a->comment}';
$string['daterequested'] = '请求日期';
$string['daterequesteddetail'] = '请求日期：';
$string['defaultexpired'] = '所有用户的数据';
$string['defaultexpiredexcept'] = '所有用户的数据，但不包括拥有下列任何角色的用户：<br> {$a->unexpired}';
$string['defaultsinfo'] = '默认类别和用途应用于未设置的所有新实例和现有实例。';
$string['defaultssaved'] = '默认保存';
$string['defaultswarninginfo'] = '警告：更改这些默认值可能会影响现有实例的保留期。';
$string['defaultunexpired'] = '仅用于拥有以下角色的用户的数据：<br> {$a->expired}';
$string['defaultunexpiredwithexceptions'] = '只适用于拥有下列任何一种角色的用户：<br> {$a->expired} 除非他们还拥有以下任何一种角色：<br> {$a->unexpired}';
$string['deletecategory'] = '删除类别';
$string['deletecategorytext'] = '您确定要删除 "{$a}" 类别吗?';
$string['deletedefaults'] = '删除默认值:：{$a}';
$string['deletedefaultsconfirmation'] = '您确定要删除{$a}模块的默认类别和用途吗?';
$string['deleteexistingdeleteduserstask'] = '为之前存在的已删除用户创建删除数据请求';
$string['deleteexpiredcontextstask'] = '删除过期的场景';
$string['deleteexpireddatarequeststask'] = '删除过期的数据请求导出文件';
$string['deletemyaccount'] = '删除我的账号';
$string['deletepurpose'] = '删除用途';
$string['deletepurposetext'] = '您确定要删除用途“{$a}”吗?';
$string['deny'] = '拒绝';
$string['denyrequest'] = '拒绝请求';
$string['deprecated'] = '弃用';
$string['deprecatedexplanation'] = '这个插件使用的是一个旧版本的隐私接口，应该更新。';
$string['download'] = '下载';
$string['downloadexpireduser'] = '下载已经过期。如果要导出您的个人数据，请重新提出请求。';
$string['dporolemapping'] = '私隐官角色映射';
$string['dporolemapping_desc'] = '‎私隐官可以管理数据请求。能力工具/数据隐私：必须允许管理数据请求，才能将角色列为私隐官角色映射选项。 ‎';
$string['duplicaterole'] = '角色已经指定';
$string['editcategories'] = '编辑类别';
$string['editcategory'] = '编辑类别';
$string['editdefaults'] = '编辑默认值: {$a}';
$string['editmoduledefaults'] = '编辑模块默认值';
$string['editpurpose'] = '编辑用途';
$string['editpurposes'] = '编辑用途';
$string['effectiveretentionperiodcourse'] = '{$a}(课程结束日期后)';
$string['effectiveretentionperioduser'] = '{$a}(自用户上次访问该站点以来)';
$string['emailsalutation'] = '亲爱的{$a},';
$string['errorcannotrequestdeleteforother'] = '您没有权限为该用户创建删除请求。';
$string['errorcannotrequestdeleteforself'] = '您没有权限为自己创建删除请求。';
$string['errorcontexthasunexpiredchildren'] = '场景“{$a}”仍然有尚未过期的子场景。没有场景被标记为要删除。';
$string['errorinvalidrequestcreationmethod'] = '无效的请求创建方法！';
$string['errorinvalidrequeststatus'] = '无效的请求状态！';
$string['errorinvalidrequesttype'] = '无效的请求类型！';
$string['errornocapabilitytorequestforothers'] = '用户 {$a->requestedby}不具备代表用户 {$a->userid} 提出数据请求的能力';
$string['errornoexpiredcontexts'] = '没有需要处理的过期场景';
$string['errorrequestalreadyexists'] = '您已经有一个正在进行的请求。';
$string['errorrequestnotfound'] = '请求未找到';
$string['errorrequestnotwaitingforapproval'] = '请求未等待批准。它要么还没有准备好，要么已经被处理了。';
$string['errorsendingmessagetodpo'] = '试图向{$a}发送消息时遇到错误。';
$string['exceptionnotificationbody'] = '<p>调用时发生异常 <b>{$a->fullmethodname}</b>.<br>这意味着这个插件<b>{$a->component}</b> 没有完成对数据的处理。 以下异常信息会发送给插件开发者：</p><pre>{$a->message}<br> {$a->backtrace}</pre>';
$string['exceptionnotificationsubject'] = '处理隐私数据时发生异常';
$string['expandplugin'] = '展开和折叠插件。';
$string['expandplugintype'] = '展开和折叠插件类型。';
$string['expiredretentionperiodtask'] = '‎过期的保留期‎';
$string['expiredrolewithretention'] = '{$a->retention} (过期)';
$string['expiry'] = '过期';
$string['explanationtitle'] = '本页使用的图标及其含义。';
$string['external'] = '额外的';
$string['externalexplanation'] = '一个额外的插件安装在这个网站上。';
$string['filteroption'] = '{$a->category}: {$a->name}';
$string['frontpagecourse'] = '首页课程';
$string['gdpr_art_6_1_a_description'] = '数据主体已同意为一个或多个特定用途而处理其个人数据';
$string['gdpr_art_6_1_a_name'] = '同意 (GDPR Art. 6.1(a))';
$string['gdpr_art_6_1_b_description'] = '处理对于数据主体所属的合约的履行，或为了在订立合约前应数据主体的要求而采取的步骤，是必需的';
$string['gdpr_art_6_1_b_name'] = '协议 (GDPR Art. 6.1(b))';
$string['gdpr_art_6_1_c_description'] = '处理对于遵守财务主任应遵守的法律义务是必要的';
$string['gdpr_art_6_1_c_name'] = '法律义务(GDPR Art 6.1(c))';
$string['gdpr_art_6_1_d_description'] = '为了保护数据主体或另一个自然人的切身利益，处理是必要的';
$string['gdpr_art_6_1_d_name'] = '切身利益 (GDPR Art. 6.1(d))';
$string['gdpr_art_6_1_e_description'] = '处理工作是为了执行一项为公众利益或行使财务主任所赋予的官方权力而进行的工作所必需的';
$string['gdpr_art_6_1_e_name'] = '公共任务 (GDPR Art. 6.1(e))';
$string['gdpr_art_6_1_f_description'] = '为了控制人或第三方追求的合法利益，处理是必要的，除非这种利益被需要保护的数据主体的利益或基本权利和自由所覆盖，特别是当数据主体是儿童时。';
$string['gdpr_art_6_1_f_name'] = '正当权益(GDPR Art. 6.1(f))';
$string['gdpr_art_9_2_a_description'] = '‎数据主体已明确同意出于一个或多个特定用途处理这些个人数据，除非联盟或成员国法律规定，《GDPR》第9条第1款所述禁止不得由数据主体解除 ‎';
$string['gdpr_art_9_2_a_name'] = '明确同意(GDPR Art. 9.2(a))';
$string['gdpr_art_9_2_b_description'] = '在联邦或成员国法律授权或根据会员国法律对数据主体的基本权利和利益提供适当保障的会员国法律下，处理对于履行控制人或数据主体在就业和社会保障和社会保护法领域的义务和行使特定权利是必要的。';
$string['gdpr_art_9_2_b_name'] = '就业和社会保障法(GDPR Art. 9.2(b))';
$string['gdpr_art_9_2_c_description'] = '在数据主体在身体上或法律上无能力给予同意的情况下，处理数据对保障数据主体或另一个自然人的切身利益是必要的';
$string['gdpr_art_9_2_c_name'] = '保护切身利益(GDPR Art. 9.2(c))';
$string['gdpr_art_9_2_d_description'] = '处理工作由基金会、协会或任何其他具有政治、哲学、宗教或工会目的的非营利机构在适当保障下进行，但处理仅涉及成员或该机构前成员或与该机构有定期接触的人，且未经数据的同意，不得在该机构之外披露个人数据主体';
$string['gdpr_art_9_2_d_name'] = '与基金会、协会或其他非营利性机构的成员/密切联系有关的合法活动(GDPR Art. 9.2(d))';
$string['gdpr_art_9_2_e_description'] = '处理涉及由数据主体明显公开的个人数据';
$string['gdpr_art_9_2_e_name'] = '由数据主体公布的资料';
$string['gdpr_art_9_2_f_description'] = '处理是建立、行使或辩护法律要求或法院以其司法能力行事所必需的';
$string['gdpr_art_9_2_f_name'] = '法律索赔和诉讼(GDPR Art. 9.2(f))';
$string['gdpr_art_9_2_g_description'] = '出于重大公共利益的原因，根据联盟或成员国法律，处理工作必须与所追求的目标相称，尊重数据保护权的本质，并规定适当和具体的措施，以保障数据主体的基本权利和利益';
$string['gdpr_art_9_2_g_name'] = '重大公共利益(GDPR Art. 9.2(g))';
$string['gdpr_art_9_2_h_description'] = '为了预防或职业医学的目的，为了评估雇员的工作能力、医疗诊断、提供保健或社会护理或治疗，或根据联盟或会员国法律或根据与保健专业人员的合同管理保健或社会护理系统和服务，并且必须进行处理，并遵守《GDPR》第9条第3款所述的条件和保障措施';
$string['gdpr_art_9_2_h_name'] = '医疗用途(GDPR Art. 9.2(h))';
$string['gdpr_art_9_2_i_description'] = '出于公共卫生领域公共利益的原因，有必要进行处理，例如根据《联盟法》或《会员国法》保护健康领域的健康和安全，例如防止对健康构成严重的跨界威胁，或确保保健和药品或医疗器械的高质量和安全标准，该法律规定了适当和具体的措施，以保障数据主体的权利和自由， 特别是专业保密';
$string['gdpr_art_9_2_i_name'] = '公共卫生 (GDPR Art. 9.2(i))';
$string['gdpr_art_9_2_j_description'] = '根据基于联盟或会员国法律的第89（1）条，为了公共利益、科学或历史研究目的或统计目的进行存档是必要的处理，该条应与所追求的目标相称，尊重数据保护权的本质，并规定适当和具体的措施，以保障数据主体的基本权利和利益';
$string['gdpr_art_9_2_j_name'] = '公共利益，或科学/历史/统计研究 (GDPR Art. 9.2(j))';
$string['hide'] = '全部折叠';
$string['httpwarning'] = '从本网站下载的任何数据都不能被加密。请与您的系统管理员联系，并要求他们在这个网站上安装SSL。';
$string['inherit'] = '继承';
$string['lawfulbases'] = '合法基础';
$string['lawfulbases_help'] = '选择至少一项可作为处理个人数据的合法依据的选项。有关这些法律依据的详情，请参阅<a href="https://gdpr-info.eu/art-6-gdpr/" target="_blank">GDPR Art. 6.1</a>';
$string['markcomplete'] = '标记为完成';
$string['markedcomplete'] = '您的查询已被私隐专员标记为完成。';
$string['message'] = '消息';
$string['messagelabel'] = '消息：';
$string['messageprovider:contactdataprotectionofficer'] = '数据请求';
$string['messageprovider:datarequestprocessingresults'] = '数据请求处理结果';
$string['messageprovider:notifyexceptions'] = '数据请求异常通知';
$string['moduleinstancename'] = '{$a->instancename} ({$a->modulename})';
$string['mypersonaldatarequests'] = '我的个人数据请求';
$string['nameandparent'] = '{$a->parent} / {$a->name}';
$string['nameemail'] = '{$a->name} ({$a->email})';
$string['nchildren'] = '{$a}孩子们';
$string['newrequest'] = '新的请求';
$string['noactivitiestoload'] = '没有活动';
$string['noassignedroles'] = '此场景没有分配角色';
$string['noblockstoload'] = '没有版块';
$string['nocategories'] = '还没有类别';
$string['nocoursestoload'] = '没有活动';
$string['nodatarequests'] = '没有数据请求';
$string['nodatarequestsmatchingfilter'] = '没有匹配给定筛选器的数据请求';
$string['noexpiredcontexts'] = '此场景级别没有已过期的数据。';
$string['nopersonaldatarequests'] = '您没有任何个人数据请求';
$string['nopurposes'] = '还没有用途';
$string['nosubjectaccessrequests'] = '您不需要处理任何数据请求';
$string['nosystemdefaults'] = '网站的用途和类别尚未确定。';
$string['notset'] = '未设置(使用默认值)';
$string['notyetexpired'] = '{$a}(未到期)';
$string['overrideinstances'] = '使用自定义值重置实例';
$string['pluginname'] = '数据隐私';
$string['pluginname_help'] = '数据隐私插件';
$string['pluginregistry'] = '插件隐私注册表';
$string['pluginregistrytitle'] = '插件隐私合规注册表';
$string['privacy'] = '隐私';
$string['privacy:metadata:preference:tool_dataprivacy_request-filters'] = '当前应用于数据请求页面的过滤器。';
$string['privacy:metadata:preference:tool_dataprivacy_request-perpage'] = '用户希望在一个页面上看到的数据请求数量';
$string['privacy:metadata:request'] = '为本网站而提出的个人数据请求(主体账号及删除请求)的信息。';
$string['privacy:metadata:request:comments'] = '任何与请求相关的用户评论。';
$string['privacy:metadata:request:dpocomment'] = '本网站的隐私专员对有关请求所作的任何评论。';
$string['privacy:metadata:request:requestedby'] = '发出请求的用户的ID(如果是代表另一个用户发出的)。';
$string['privacy:metadata:request:timecreated'] = '显示用户何时发出请求的时间戳。';
$string['privacy:metadata:request:userid'] = '请求所属用户的ID';
$string['privacyofficeronly'] = '只有被分配了隐私专员角色({$a})的用户才能访问这些内容';
$string['privacyrequestexpiry'] = '数据请求到期';
$string['privacyrequestexpiry_desc'] = '批准的数据请求将在到期之前可供下载的时间。如果设置为零，则没有时间限制。';
$string['protected'] = '受保护的';
$string['protectedlabel'] = '保留这些数据比用户要求被遗忘有更高的法律先例。这些数据只有在保留期结束后才会被删除。';
$string['purpose'] = '用途';
$string['purpose_help'] = '用途是描述处理数据的原因。可以添加新的用途，或者如果选择了继承，则应用来自上级场景的用途。场景是(从低到高)：版块>活动模块>课程>课程类别>用户>网站。';
$string['purposecreated'] = '创建用途';
$string['purposedefault'] = '默认用途';
$string['purposedefault_help'] = '默认用途是应用于任何新实例的用途。如果选择了继承，则应用来自上级场景的用途。场景是(从低到高)：版块>活动模块>课程>课程类别>用户>网站。';
$string['purposeoverview'] = '用途描述存储数据的预期使用和保留政策。用途中还描述了存储和保留这些数据的根据。';
$string['purposes'] = '用途';
$string['purposeslist'] = '数据用途列表';
$string['purposeupdated'] = '更新用途';
$string['replyto'] = '回复';
$string['requestactions'] = '活动';
$string['requestapproved'] = '请求已被批准';
$string['requestby'] = '申请人';
$string['requestbydetail'] = '申请人：';
$string['requestcomments'] = '评论';
$string['requestcomments_help'] = '此框允许您输入关于数据请求的更多细节。';
$string['requestcreation'] = '创作';
$string['requestdenied'] = '请求被拒绝了';
$string['requestemailintro'] = '您已收到数据请求：';
$string['requestfor'] = '用户';
$string['requestmarkedcomplete'] = '请求已被标记为完成';
$string['requestorigin'] = '网站';
$string['requestsapproved'] = '请求已被批准';
$string['requestsdenied'] = '这些请求被拒绝了';
$string['requeststatus'] = '状态';
$string['requestsubmitted'] = '您的请求已提交给隐私专员';
$string['requesttype'] = '类型';
$string['requesttype_help'] = '选择一个您联系隐私专员的理由。请注意，删除所有个人数据会导致您不能再登入本网站。';
$string['requesttypedelete'] = '删除我所有的个人数据';
$string['requesttypedeleteshort'] = '删除';
$string['requesttypeexport'] = '导出我所有的个人数据';
$string['requesttypeexportshort'] = '导出';
$string['requesttypeothers'] = '一般询盘';
$string['requesttypeothersshort'] = '消息';
$string['requesttypeuser'] = '{$a->typename} ({$a->user})';
$string['requireallenddatesforuserdeletion'] = '认为没有结束日期的课程是活跃的';
$string['requireallenddatesforuserdeletion_desc'] = '在计算用户有效期时，要考虑以下几个因素:*将用户的最后登录时间与用户的保留期限进行比较;*用户是否积极参与任何课程。在检查某一课程的活跃注册情况时，如果该课程没有截止日期，则使用此设置来确定该课程是否被视为活跃。如果课程没有结束日期，并且启用了此设置，则无法删除用户。';
$string['requiresattention'] = '需要注意。';
$string['requiresattentionexplanation'] = '这个插件没有实现Moodle的隐私API。如果这个插件存储任何个人数据，它将无法通过Moodle的隐私系统导出或删除。';
$string['resubmitrequest'] = '为 {$a->username} 重新提交 {$a->type}请求';
$string['resubmitrequestasnew'] = '作为新的请求重新提交';
$string['resubmittedrequest'] = '对{$a->username}的现有 {$a->type} 请求被取消并重新提交';
$string['resultdeleted'] = '您最近要求删除您在{$a}中的帐户和个人数据。此过程已完成，您将无法再登录。';
$string['resultdownloadready'] = '您最近请求的{$a}中的个人数据副本现在可以从以下链接下载。';
$string['retentionperiod'] = '保留期';
$string['retentionperiod_help'] = '保留期限指定数据应该保留的时间长度。当保留期限已过，数据被标记和列出删除，等待管理员确认。';
$string['retentionperiodnotdefined'] = '没有规定保留期限';
$string['retentionperiodzero'] = '没有保留期限';
$string['reviewdata'] = '回顾数据';
$string['role'] = '角色';
$string['role_help'] = '覆盖应应用于的角色。';
$string['roleoverride'] = '角色覆盖';
$string['roleoverrideoverview'] = '可以为特定的用户角色重写默认的保留政策，从而允许您指定更长或更短的保留政策。只有当用户的所有角色都已过期时，该用户才会过期。';
$string['roleoverrides'] = '角色覆盖';
$string['selectbulkaction'] = '请选择一个批量操作。';
$string['selectdatarequests'] = '请选择数据请求。';
$string['selectuserdatarequest'] = '选择{$a->username}的{$a->requesttype}数据请求。';
$string['send'] = '发送';
$string['sensitivedatareasons'] = '敏感的个人数据处理原因';
$string['sensitivedatareasons_help'] = '选择一个或多个可适用的理由，豁免处理与此用途有关的敏感个人数据。有关更多信息，请参阅<a href="https://gdpr-info.eu/art-9-gdpr/" target="_blank">GDPR Art. 9.2</a>';
$string['setdefaults'] = '设置默认值';
$string['showdataretentionsummary'] = '‎显示数据保留摘要‎';
$string['showdataretentionsummary_desc'] = '‎如果启用，则页面页脚和用户个人档案中将显示指向数据保留摘要的链接。‎';
$string['statusapproved'] = '批准';
$string['statusawaitingapproval'] = '等待批准';
$string['statuscancelled'] = '已取消';
$string['statuscomplete'] = '完成';
$string['statusdeleted'] = '删除';
$string['statusdetail'] = '状态：';
$string['statusexpired'] = '已过期';
$string['statuspending'] = '待定中';
$string['statuspreprocessing'] = '预处理中';
$string['statusprocessing'] = '处理中';
$string['statusready'] = '下载好了';
$string['statusrejected'] = '被拒绝';
$string['subjectscope'] = '主体范围';
$string['subjectscope_help'] = '主体范围列出了可能在此场景中分配的角色。';
$string['summary'] = '注册中心配置概述';
$string['systemconfignotsetwarning'] = '网站用途和类别尚未定义。如果这些没有定义，则在处理删除请求时将删除所有数据。';
$string['tobedeleted'] = '要删除的数据';
$string['unexpiredrolewithretention'] = '{$a->retention} (未到期的)';
$string['user'] = '用户';
$string['userlistexplanation'] = '此插件有基本的提供程序，但也应该实现用户列表(userlist)提供程序，以完全支持隐私功能。';
$string['userlistnoncompliant'] = '用户列表(userlist)提供程序缺失';
$string['viewrequest'] = '浏览请求';
$string['visible'] = '全部展开';
