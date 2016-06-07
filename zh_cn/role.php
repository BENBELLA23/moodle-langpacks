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
 * Strings for component 'role', language 'zh_cn', branch 'MOODLE_31_STABLE'
 *
 * @package   role
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = '新建一个角色';
$string['addrole'] = '添加一个新角色';
$string['advancedoverride'] = '高级修改角色';
$string['allow'] = '允许';
$string['allowassign'] = '允许分配角色';
$string['allowed'] = '允许';
$string['allowoverride'] = '允许修改角色';
$string['allowroletoassign'] = '允许属于角色{$a->fromrole}的用户分配{$a->targetrole}角色';
$string['allowroletooverride'] = '允许属于角色{$a->fromrole}的用户修改{$a->targetrole}角色';
$string['allowroletoswitch'] = '允许属于角色{$a->fromrole}的用户切换到角色{$a->targetrole}';
$string['allowswitch'] = '允许角色切换';
$string['allsiteusers'] = '所有用户';
$string['archetype'] = '角色原型';
$string['archetypecoursecreator'] = '原型：课程创建者';
$string['archetypeeditingteacher'] = '原型：有编辑权教师';
$string['archetypefrontpage'] = '原型：首页的已认证用户';
$string['archetypeguest'] = '原型：访客';
$string['archetype_help'] = '角色原型决定一个角色被重置到缺省时的权限。它还决定网站升级时为角色创建哪些新权限。';
$string['archetypemanager'] = '原型：管理员';
$string['archetypestudent'] = '原型：学生';
$string['archetypeteacher'] = '原型：无编辑权教师';
$string['archetypeuser'] = '原型：已认证用户';
$string['assignanotherrole'] = '分配另一个角色';
$string['assignedroles'] = '已分配角色';
$string['assignerror'] = '分配角色{$a->role}给用户{$a->user}时发生错误。';
$string['assignglobalroles'] = '分配系统角色';
$string['assignmentcontext'] = '分配场景';
$string['assignmentoptions'] = '分配选项';
$string['assignrole'] = '分配角色';
$string['assignrolenameincontext'] = '在{$a->context}中分配“{$a->role}”角色';
$string['assignroles'] = '分配角色';
$string['assignroles_help'] = '通过在某个场景中分配角色给某个用户，您可以给予用户该角色拥有的权限，但只限在当前场景和所有它包含的低级场景中。例如，如果一个用户在某课程中被分配为学生角色，那么他在课程的所有活动和版块中的角色都是学生。';
$string['assignrolesin'] = '在{$a}中分配角色';
$string['assignrolesrelativetothisuser'] = '分配针对此用户的角色';
$string['backtoallroles'] = '回到所有角色列表';
$string['backup:anonymise'] = '备份时隐去用户数据';
$string['backup:backupactivity'] = '备份活动';
$string['backup:backupcourse'] = '备份课程';
$string['backup:backupsection'] = '备份小节';
$string['backup:backuptargethub'] = '面向hub备份';
$string['backup:backuptargetimport'] = '面向导入备份';
$string['backup:configure'] = '配置备份选项';
$string['backup:downloadfile'] = '从备份区下载文件';
$string['backup:userinfo'] = '备份用户数据';
$string['badges:awardbadge'] = '给用户颁发奖章';
$string['badges:configurecriteria'] = '设置/编辑获得奖章的条件';
$string['badges:configuredetails'] = '设置/编辑奖章细节';
$string['badges:configuremessages'] = '配置奖章信息';
$string['badges:createbadge'] = '创建/复制勋章';
$string['badges:deletebadge'] = '删除勋章';
$string['badges:earnbadge'] = '获得奖章';
$string['badges:manageglobalsettings'] = '管理奖章设置';
$string['badges:manageownbadges'] = '查看管理自己获得的奖章';
$string['badges:viewawarded'] = '查看获得该奖章的用户（不需要获得）';
$string['badges:viewbadges'] = '查看可用奖章（不需要获得）';
$string['badges:viewotherbadges'] = '在其他用户资料中查看公开的奖章';
$string['block:edit'] = '编辑版块设置';
$string['block:view'] = '查看版块';
$string['blog:create'] = '新建博客条目';
$string['blog:manageentries'] = '编辑和管理条目';
$string['blog:manageexternal'] = '编辑和管理外部博客';
$string['blog:search'] = '搜索博客';
$string['blog:view'] = '浏览博客条目';
$string['blog:viewdrafts'] = '查看博客草稿';
$string['calendar:manageentries'] = '管理任何日历项';
$string['calendar:managegroupentries'] = '管理组日历项';
$string['calendar:manageownentries'] = '管理自己的日历项';
$string['capabilities'] = '权限';
$string['capability'] = '权限';
$string['category:create'] = '新建类别';
$string['category:delete'] = '删除类别';
$string['category:manage'] = '管理类别';
$string['category:update'] = '更新类别';
$string['category:viewhiddencategories'] = '查看隐藏类别';
$string['category:visibility'] = '查看隐藏类别';
$string['checkglobalpermissions'] = '检查系统权限';
$string['checkpermissions'] = '检查权限';
$string['checkpermissionsin'] = '检查{$a}的权限';
$string['checksystempermissionsfor'] = '检查{$a->fullname}的系统权限';
$string['checkuserspermissionshere'] = '检查{$a->fullname}在此{$a->contextlevel}中拥有的权限';
$string['chooseroletoassign'] = '请选择一个要分配的角色';
$string['cohort:assign'] = '添加/删除群成员';
$string['cohort:manage'] = '建立、删除和移动群';
$string['cohort:view'] = '查看全站群';
$string['comment:delete'] = '删除评论';
$string['comment:post'] = '发表评论';
$string['comment:view'] = '阅读评论';
$string['community:add'] = '使用社区版块搜索课程中心寻找课程';
$string['community:download'] = '从社区版块下载课程';
$string['competency:competencymanage'] = '管理能力框架';
$string['competency:competencyview'] = '审查能力框架';
$string['competency:coursecompetencymanage'] = '管理课程能力';
$string['competency:coursecompetencyview'] = '查看课程能力';
$string['competency:templatemanage'] = '管理学习计划模板';
$string['competency:templateview'] = '查看学习计划模板列表';
$string['confirmaddadmin'] = '您真的要让用户<strong>{$a}</strong>成为新的网站管理员吗？';
$string['confirmdeladmin'] = '您真的要取消用户<strong>{$a}</strong>的网站管理员资格吗？';
$string['confirmroleprevent'] = '您确定要不允许角色<strong>{$a->role}</strong>在“{$a->context}”中使用{$a->cap}权限吗？';
$string['confirmroleunprohibit'] = '您确定要从禁止在场景{$a->context}中使用{$a->cap}权限的角色列表中删除角色<strong>{$a->role}</strong>吗？';
$string['confirmunassign'] = '您确定要从此用户身上删除此角色吗？';
$string['confirmunassignno'] = '放弃';
$string['confirmunassigntitle'] = '确认角色改变';
$string['confirmunassignyes'] = '删除';
$string['context'] = '场景';
$string['course:activityvisibility'] = '隐藏/显示活动';
$string['course:bulkmessaging'] = '给多人发送信息';
$string['course:changecategory'] = '修改课程分类';
$string['course:changefullname'] = '修改课程全称';
$string['course:changeidnumber'] = '修改课程编号';
$string['course:changeshortname'] = '修改课程简称';
$string['course:changesummary'] = '修改课程简介';
$string['course:create'] = '创建课程';
$string['course:delete'] = '删除课程';
$string['course:enrolconfig'] = '配置课程中的选课实例';
$string['course:enrolreview'] = '审查选课';
$string['course:ignorefilesizelimits'] = '使用超过任何文件大小限制的文件';
$string['course:isincompletionreports'] = '在进度报告中显示';
$string['course:manageactivities'] = '管理活动';
$string['course:managefiles'] = '管理文件';
$string['course:managegrades'] = '管理成绩';
$string['course:managegroups'] = '管理组';
$string['course:managescales'] = '管理等级';
$string['course:markcomplete'] = '课程完成时标记用户为完成';
$string['course:movesections'] = '移动小节';
$string['course:publish'] = '将课程发布到hub';
$string['course:request'] = '申请创建新课程';
$string['course:reset'] = '重置课程';
$string['course:reviewotherusers'] = '评论其他用户';
$string['course:sectionvisibility'] = '控制小节可见性';
$string['course:setcurrentsection'] = '设置当前小节';
$string['course:update'] = '更新课程设置';
$string['course:useremail'] = '启用/禁用Email地址';
$string['course:view'] = '查看没有用户的课程';
$string['course:viewcoursegrades'] = '浏览课程成绩';
$string['course:viewhiddenactivities'] = '浏览隐藏的活动';
$string['course:viewhiddencourses'] = '浏览隐藏的课程';
$string['course:viewhiddensections'] = '浏览隐藏的小节';
$string['course:viewhiddenuserfields'] = '浏览隐藏的用户域';
$string['course:viewparticipants'] = '浏览成员';
$string['course:viewscales'] = '浏览等级';
$string['course:viewsuspendedusers'] = '查看已休学的用户';
$string['course:visibility'] = '隐藏/显示课程';
$string['createrolebycopying'] = '复制{$a}为一个新角色';
$string['createthisrole'] = '创建这个角色';
$string['currentcontext'] = '当前场景';
$string['currentrole'] = '当前角色';
$string['customroledescription'] = '自定义角色描述';
$string['customroledescription_help'] = '若自定义角色描述留空，自动套用标准角色描述。';
$string['customrolename'] = '自定义角色全称';
$string['customrolename_help'] = '若自定义角色名称留空，会自动套用标准角色。你必须提供对自定义角色提供全称。';
$string['defaultrole'] = '默认角色';
$string['defaultx'] = '缺省：{$a}';
$string['defineroles'] = '定义角色';
$string['deletecourseoverrides'] = '删除课程中所有角色修改';
$string['deletelocalroles'] = '删除所有局部角色分配';
$string['deleterolesure'] = '您确定要删除角色“{$a->name} ({$a->shortname})”？</p><p>当前此角色已经分配給{$a->count}个用户了。';
$string['deletexrole'] = '删除{$a}角色';
$string['duplicaterole'] = '克隆角色';
$string['duplicaterolesure'] = '确定想克隆角色"{$a->name} ({$a->shortname})"吗?</p>';
$string['editingrolex'] = '正在编辑角色“{$a}”';
$string['editrole'] = '编辑角色';
$string['editxrole'] = '编辑{$a}角色';
$string['errorbadrolename'] = '不正确的角色名';
$string['errorbadroleshortname'] = '无效的角色简称';
$string['errorexistsrolename'] = '角色名已经存在';
$string['errorexistsroleshortname'] = '角色名已经存在';
$string['eventroleallowassignupdated'] = '允许角色指派';
$string['eventroleallowoverrideupdated'] = '允许角色覆盖';
$string['eventroleallowswitchupdated'] = '允许角色切换';
$string['eventroleassigned'] = '指派角色';
$string['eventrolecapabilitiesupdated'] = '更新角色权限';
$string['eventroledeleted'] = '删除角色';
$string['eventroleunassigned'] = '取消角色指派';
$string['existingadmins'] = '当前网站管理员';
$string['existingusers'] = '已有{$a}个用户';
$string['explanation'] = '解释';
$string['export'] = '导出';
$string['extusers'] = '已有用户';
$string['extusersmatching'] = '符合“{$a}”的已有用户';
$string['filter:manage'] = '管理本地过滤器设置';
$string['frontpageuser'] = '首页已认证用户';
$string['frontpageuserdescription'] = '首页课程中所有已经登录的用户。';
$string['globalrole'] = '系统角色';
$string['globalroleswarning'] = '警告！您在此页分配的任何角色都将成为该用户的全站角色，在全站有效，包括首页和所有课程。';
$string['gotoassignroles'] = '跳转到为此{$a->contextlevel}分配角色';
$string['gotoassignsystemroles'] = '跳转到分配系统角色';
$string['grade:edit'] = '编辑成绩';
$string['grade:export'] = '导出成绩';
$string['grade:hide'] = '隐藏/显示成绩或项目';
$string['grade:import'] = '导入成绩';
$string['grade:lock'] = '锁定成绩和项目';
$string['grade:manage'] = '管理成绩项';
$string['grade:managegradingforms'] = '管理高级评分方法';
$string['grade:manageletters'] = '管理字母成绩';
$string['grade:manageoutcomes'] = '管理成绩成果';
$string['grade:managesharedforms'] = '管理高级评分方法模板';
$string['grade:override'] = '覆盖成绩';
$string['grade:sharegradingforms'] = '将该高级评分表单作为模板共享';
$string['grade:unlock'] = '解除成绩和项目的锁定';
$string['grade:view'] = '查看自己的成绩';
$string['grade:viewall'] = '查看其他人的成绩';
$string['grade:viewhidden'] = '查看成绩所有者的隐藏成绩';
$string['highlightedcellsshowdefault'] = '下表中被选择的权限是上面所选角色原型的缺省权限。';
$string['highlightedcellsshowinherit'] = '下表中高亮显示的权限是继承来的权限。除了确实要修改的权限以外，都应该设为继承。';
$string['inactiveformorethan'] = '超过{$a->timeperiod}，停止';
$string['ingroup'] = '在组"{$a->group}"';
$string['inherit'] = '继承';
$string['invalidpresetfile'] = '无效的角色定义文件';
$string['legacy:admin'] = '旧版角色：管理员';
$string['legacy:coursecreator'] = '旧版角色：课程创建者';
$string['legacy:editingteacher'] = '旧版角色：教师（有编辑权）';
$string['legacy:guest'] = '旧版角色：访客';
$string['legacy:student'] = '旧版角色：学生';
$string['legacy:teacher'] = '旧版角色：教师（无编辑权）';
$string['legacytype'] = '旧版角色类型';
$string['legacy:user'] = '旧版角色：已验证用户';
$string['listallroles'] = '列出全部角色';
$string['localroles'] = '局部分配的角色';
$string['mainadmin'] = '主管理员';
$string['mainadminset'] = '设置主管理员';
$string['manageadmins'] = '管理网站管理员';
$string['manager'] = '管理员';
$string['managerdescription'] = '管理员可以访问并修改课程，但他们通常不参与课程。';
$string['manageroles'] = '管理角色';
$string['maybeassignedin'] = '可分配此角色的场景';
$string['morethan'] = '多于{$a}';
$string['multipleroles'] = '多角色';
$string['my:configsyspages'] = '配置我的Moodle页面的系统模板';
$string['my:manageblocks'] = '管理我的Moodle页面的版块';
$string['neededroles'] = '有权限的角色';
$string['nocapabilitiesincontext'] = '在此环境中没有有效的能力';
$string['noneinthisx'] = '此{$a}中没有用户';
$string['noneinthisxmatching'] = '在{$a->contexttype}中没有用户匹配“{$a->search}”';
$string['norole'] = '没有角色';
$string['noroleassignments'] = '此用户在本站任何地方都没有被分配任何角色。';
$string['noroles'] = '没有角色';
$string['notabletoassignroleshere'] = '您不能在此分配任何角色';
$string['notabletooverrideroleshere'] = '您不能在这里覆盖任何角色的权限';
$string['notes:manage'] = '管理备注';
$string['notes:view'] = '查看备注';
$string['notset'] = '未设置';
$string['overrideanotherrole'] = '修改另一个角色';
$string['overridecontext'] = '修改场景';
$string['overridepermissions'] = '修改权限';
$string['overridepermissionsforrole'] = '修改角色“{$a->role}”在{$a->context}中的权限';
$string['overridepermissions_help'] = '通过修改权限可以在指定的场景中允许或阻止做某件事情。';
$string['overridepermissionsin'] = '覆盖{$a}的权限设置';
$string['overrideroles'] = '修改角色';
$string['overriderolesin'] = '在{$a}中覆盖角色';
$string['overrides'] = '修改';
$string['overridesbycontext'] = '腐败（按场景）';
$string['permission'] = '权限';
$string['permission_help'] = '权限是关于能力的设置。有四个选项：

* 无设置
* 允许 - 有使用此能力的权限
* 阻止 - 无使用此能力的权限，即使在更高级的环境中被允许
* 禁止 - 权限被完全禁止使用，并且在任何低级别（更特定）的环境中都不能覆盖这个设置';
$string['permissions'] = '权限';
$string['permissionsforuser'] = '用户{$a}的权限';
$string['permissionsincontext'] = '{$a}中的权限';
$string['portfolio:export'] = '导出到portfolio';
$string['potentialusers'] = '{$a}个潜在的用户';
$string['potusers'] = '可选用户';
$string['potusersmatching'] = '匹配“{$a}”的潜在用户';
$string['prevent'] = '阻止';
$string['prohibit'] = '禁止';
$string['prohibitedroles'] = '禁止';
$string['question:add'] = '添加新试题';
$string['question:config'] = '配置试题类型';
$string['question:editall'] = '编辑所有试题';
$string['question:editmine'] = '编辑自己的试题';
$string['question:flag'] = '试答时标记题目';
$string['question:managecategory'] = '编辑题目类别';
$string['question:moveall'] = '移动所有试题';
$string['question:movemine'] = '移动自己所有的试题';
$string['question:useall'] = '使用所有试题';
$string['question:usemine'] = '使用自己所有的试题';
$string['question:viewall'] = '查看所有试题';
$string['question:viewmine'] = '查看自己所有的试题';
$string['rating:rate'] = '添加评分';
$string['rating:view'] = '查看收到的总评分';
$string['rating:viewall'] = '查看每个评分的原始数据';
$string['rating:viewany'] = '查看每个人收到的总评分';
$string['resetrole'] = '重置';
$string['resettingrole'] = '重置角色"{$a}"';
$string['restore:configure'] = '配置恢复选项';
$string['restore:createuser'] = '恢复时创建用户';
$string['restore:restoreactivity'] = '恢复活动';
$string['restore:restorecourse'] = '恢复课程';
$string['restore:restoresection'] = '恢复小节';
$string['restore:restoretargethub'] = '从面向中心服务器的文件恢复';
$string['restore:restoretargetimport'] = '从面向导入的文件恢复';
$string['restore:rolldates'] = '允许在恢复时回滚活动配置日期';
$string['restore:uploadfile'] = '上传文件到备份区';
$string['restore:userinfo'] = '恢复用户数据';
$string['restore:viewautomatedfilearea'] = '从自动备份中恢复课程';
$string['risks'] = '风险';
$string['roleallowheader'] = '允许角色：';
$string['roleallowinfo'] = '选择一个角色，将其加入到允许在场景“{$a->context}”使用“{$a->cap}”权限的角色列表中：';
$string['role:assign'] = '分配角色给用户';
$string['roleassignments'] = '角色分配';
$string['roledefinitions'] = '角色定义';
$string['rolefullname'] = '名称';
$string['roleincontext'] = '{$a->context}中的{$a->role}';
$string['role:manage'] = '新建和管理角色';
$string['role:override'] = '修改其他角色的权限';
$string['roleprohibitheader'] = '禁止角色';
$string['roleprohibitinfo'] = '选择一个角色，将其加入到禁止在场景“{$a->context}”使用“{$a->cap}”权限的角色列表中：';
$string['rolerepreset'] = '使用角色设置';
$string['roleresetdefaults'] = '缺省';
$string['roleresetrole'] = '使用角色或原型';
$string['role:review'] = '检查其他人的权限';
$string['rolerisks'] = '角色风险';
$string['roles'] = '角色';
$string['role:safeoverride'] = '修改其它用户的安全的权限';
$string['roleselect'] = '选择角色';
$string['rolesforuser'] = '用户{$a}的角色';
$string['roles_help'] = '角色是系统权限的集合，通过角色可以将特定情境下的一组权限指派给一组特定的用户。';
$string['roleshortname'] = '简称';
$string['roleshortname_help'] = '角色简称是一种简易辨识方式，只可以使用ASCII字母数字。不要更改标准角色的简称。';
$string['role:switchroles'] = '切换到其他角色';
$string['roletoassign'] = '被分配的角色';
$string['roletooverride'] = '被替换的角色';
$string['safeoverridenotice'] = '警告：因您只能修改安全的权限，高危权限已被锁定。';
$string['selectanotheruser'] = '选择另一个用户';
$string['selectauser'] = '选择一个用户';
$string['selectrole'] = '选择角色';
$string['showallroles'] = '显示全部角色';
$string['showthisuserspermissions'] = '显示该用户的权限';
$string['site:accessallgroups'] = '访问所有组';
$string['siteadministrators'] = '网站管理员';
$string['site:approvecourse'] = '核准建课请求';
$string['site:backup'] = '备份课程';
$string['site:config'] = '修改网站配置';
$string['site:doanything'] = '允许做任何事';
$string['site:doclinks'] = '显示到站外文档的链接';
$string['site:forcelanguage'] = '覆盖课程语言';
$string['site:import'] = '把其他课程导入此课程';
$string['site:manageblocks'] = '管理页面中的版块';
$string['site:mnetloginfromremote'] = '通过MNet从远程应用登录';
$string['site:mnetlogintoremote'] = '通过MNet漫游到一个远程应用';
$string['site:readallmessages'] = '阅读网站上的全部信息';
$string['site:restore'] = '恢复课程';
$string['site:sendmessage'] = '给任何用户发送消息';
$string['site:trustcontent'] = '提交的内容可信';
$string['site:uploadusers'] = '从文件上传新用户';
$string['site:viewfullnames'] = '始终可看用户的全名';
$string['site:viewparticipants'] = '浏览成员';
$string['site:viewreports'] = '浏览报表';
$string['site:viewuseridentity'] = '在列表中查看全部用户身份';
$string['tag:create'] = '创建新标签';
$string['tag:edit'] = '编辑标签';
$string['tag:editblocks'] = '在标签页中编辑版块';
$string['tag:flag'] = '标记为不恰当';
$string['tag:manage'] = '管理所有标签';
$string['thisnewrole'] = '这个新角色';
$string['thisusersroles'] = '此用户分配的角色';
$string['unassignarole'] = '撤销{$a}角色';
$string['unassignconfirm'] = '您确定要删除用户“{$a->user}”的“{$a->role}”角色吗？';
$string['unassignerror'] = '取消用户{$a->user}的{$a->role}角色时出错。';
$string['user:changeownpassword'] = '更改密码';
$string['user:create'] = '创建用户';
$string['user:delete'] = '删除用户';
$string['user:editmessageprofile'] = '修改用户消息传递方式';
$string['user:editownmessageprofile'] = '编辑自己的用户消息档案';
$string['user:editownprofile'] = '编辑个人资料';
$string['user:editprofile'] = '编辑用户资料';
$string['user:ignoreuserquota'] = '不管用户配额限制';
$string['user:loginas'] = '作为其他用户登录';
$string['user:manageblocks'] = '管理其他用户个人资料页的版块';
$string['user:manageownblocks'] = '管理自己的公开个人资料页的版块';
$string['user:manageownfiles'] = '在私人文件区管理文件';
$string['user:managesyspages'] = '配置公开个人资料页的缺省布局';
$string['user:readuserblogs'] = '查看用户所有博客';
$string['user:readuserposts'] = '查看用户所有帖子';
$string['usersfrom'] = '来自{$a}的用户';
$string['usersfrommatching'] = '来自{$a->contextname}与“{$a->search}”匹配的用户';
$string['usersinthisx'] = '此{$a}中的用户';
$string['usersinthisxmatching'] = '在{$a->contexttype}中匹配“{$a->search}”的用户';
$string['userswithrole'] = '全站某角色用户';
$string['userswiththisrole'] = '属于此角色的用户';
$string['user:update'] = '更新用户资料';
$string['user:viewalldetails'] = '查看用户详细信息';
$string['user:viewdetails'] = '浏览用户资料';
$string['user:viewhiddendetails'] = '浏览用户隐藏的个人信息';
$string['user:viewlastip'] = '查看用户最近一次IP地址';
$string['user:viewuseractivitiesreport'] = '查看用户活动报表';
$string['user:viewusergrades'] = '浏览用户成绩';
$string['useshowadvancedtochange'] = '用“显示高级选项”修改';
$string['viewingdefinitionofrolex'] = '查看角色“{$a}”的定义';
$string['viewrole'] = '浏览角色详细信息';
$string['webservice:createmobiletoken'] = '为移动设备创建网络服务令牌';
$string['webservice:createtoken'] = '创建一个网络服务密钥';
$string['whydoesuserhavecap'] = '为什么{$a->fullname}在场景{$a->context}中有{$a->capability}权限？';
$string['whydoesusernothavecap'] = '为什么{$a->fullname}在场景{$a->context}中没有{$a->capability}权限？';
$string['xroleassignments'] = '给{$a}分配的角色';
$string['xuserswiththerole'] = '属于"{$a->role}"角色的用户';
