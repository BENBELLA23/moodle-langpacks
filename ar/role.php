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
 * Strings for component 'role', language 'ar', version '3.11'.
 *
 * @package     role
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addinganewrole'] = 'إضافة دور جديد';
$string['addrole'] = 'إضافة دور جديد';
$string['advancedoverride'] = 'التجاوز المتقدم للأدوار';
$string['allow'] = 'سماح';
$string['allowassign'] = 'السماح بتعيين الأدوار';
$string['allowed'] = 'مسموح';
$string['allowoverride'] = 'السماح بتجاوز الأدوار';
$string['allowroletoassign'] = 'إسمح للمستخدمين من ذوي دور {$a->fromrole} بتعيين دور {$a->targetrole}';
$string['allowroletooverride'] = 'إسمح للمستخدمين من ذوي دور {$a->fromrole} بتجاوز دور {$a->targetrole}';
$string['allowroletoswitch'] = 'السماخ للمسخدمين من دور  {$a->fromrole} بتبديل دورهم إلى دور {$a->targetrole}';
$string['allowroletoview'] = 'إسمح للمستخدمين من ذوي دور {$a->fromrole} بمعاينة دور {$a->targetrole}';
$string['allowswitch'] = 'السماح بتبديل الأدوار';
$string['allowview'] = 'السماح بمعاينة الأدوار';
$string['allsiteusers'] = 'كل مستخدمي الموقع';
$string['analytics:listinsights'] = 'استعراض الرؤى';
$string['analytics:listowninsights'] = 'استعراض رؤاه الخاصة';
$string['analytics:managemodels'] = 'إدارة النماذج';
$string['archetype'] = 'النموذج الأصلي للدور';
$string['archetype_help'] = 'النموذج الأصلي للدور يحدد الصلاحيات عند إعادة تعيين الدور إلى وضعه الافتراضي. هو أيضاً يحدد أي صلاحيات جديدة للدور عند ترقية الموقع.';
$string['archetypecoursecreator'] = 'نموذج أصل: منشيء المقرر الدراسي';
$string['archetypeeditingteacher'] = 'نموذج أصل: معلم (يحرر)';
$string['archetypefrontpage'] = 'نموذج أصل: مستخدم مصادق عليه في صفحة الواجهة';
$string['archetypeguest'] = 'نموذج أصل: ضيف';
$string['archetypemanager'] = 'نموذج أصل: مدير';
$string['archetypestudent'] = 'نموذج أصل: طالب';
$string['archetypeteacher'] = 'نموذج أصل: معلم (لا يحرر)';
$string['archetypeuser'] = 'نموذج أصل: مستخدم مصادق عليه';
$string['assignanotherrole'] = 'تعيين دور آخر';
$string['assignedroles'] = 'الأدوار التي تم تعيينها';
$string['assignerror'] = 'وقع خطأ عند تعيين دور {$a->role} إلى المستخدم {$a->user}.';
$string['assignglobalroles'] = 'تعيين أدوار النظام';
$string['assignmentcontext'] = 'سياق التعيين';
$string['assignmentoptions'] = 'خيارات التعيين';
$string['assignrole'] = 'تعيين الدور';
$string['assignrolenameincontext'] = 'تعيين دور \'{$a->role}\' في {$a->context}';
$string['assignroles'] = 'إسناد أدوار';
$string['assignroles_help'] = 'عند تعيين الدور إلى مستخدم ضمن سياق، أنت تمنحه الصلاحيات المضمنة في ذلك الدور عند السياق الحالي وكل السياقات التابعة له. على سبيل المثال، إذا تم تعيين دور الطالب لمستخدم ما في مقرر دراسي، سيكون له أيضاً دور الطالب في كل النشاطات والكتل داخل ذلك المقرر.';
$string['assignrolesin'] = 'تعيين الأدوار في {$a}';
$string['assignrolesrelativetothisuser'] = 'تعيين الأدوار المتعلقة بهذا المستخدم';
$string['backtoallroles'] = 'عودة إلى قائمة كل الأدوار';
$string['backup:anonymise'] = 'إخفاء هويات المستخدمين عند حفظ بياناتهم احتياطياً';
$string['backup:backupactivity'] = 'الحفظ الاحتياطي للأنشطة';
$string['backup:backupcourse'] = 'النسخ الاحتياطي للمقررات الدراسية';
$string['backup:backupsection'] = 'الحفظ الاحتياطي للمقاطع';
$string['backup:backuptargetimport'] = 'الحفظ الاحتياطي للاستيراد';
$string['backup:configure'] = 'تهيئة خيارات الحفظ الاحتياطي';
$string['backup:downloadfile'] = 'تنزيل الملفات من مناطق الحفظ الاحتياطي';
$string['backup:userinfo'] = 'الحفظ الاحتياطي لبيانات المستخدمين';
$string['badges:awardbadge'] = 'منح شارة إلى مستخدم';
$string['badges:configurecriteria'] = 'تحديد/تحرير معايير اكتساب الشارة';
$string['badges:configuredetails'] = 'تحديد/تحرير تفاصيل الشارة';
$string['badges:configuremessages'] = 'تهيئة رسائل الشارة';
$string['badges:createbadge'] = 'إنشاء/تكرار الشارات';
$string['badges:deletebadge'] = 'حذف الشارات';
$string['badges:earnbadge'] = 'إكتساب شارة';
$string['badges:manageglobalsettings'] = 'إدارة الإعدادات العامة للشارات';
$string['badges:manageownbadges'] = 'معاينة وإدارة ما اكتسبه من شارات';
$string['badges:revokebadge'] = 'سحب الشارة من مستخدم';
$string['badges:viewawarded'] = 'معاينة المستخدمين الذين اكتسبوا شارة معينة دون أن يكون قادراً على منح شارة';
$string['badges:viewbadges'] = 'معاينة الشارات المتاحة بدون اكتسابها';
$string['badges:viewotherbadges'] = 'معاينة الشارات العامة في الملفات الشخصية للمستخدمين';
$string['block:edit'] = 'تحرير إعدادات الكتلة';
$string['block:view'] = 'معاينة الكتلة';
$string['blog:create'] = 'إنشاء مدخلات جديدة في المدونة';
$string['blog:manageentries'] = 'تحرير وإدارة المدخلات';
$string['blog:manageexternal'] = 'تحرير وإدارة المدونات الخارجية';
$string['blog:search'] = 'البحث في مدخلات المدونة';
$string['blog:view'] = 'معاينة مدخلات المدونة';
$string['blog:viewdrafts'] = 'معاينة مسودة مدخلات المدونة';
$string['calendar:manageentries'] = 'إدارة أي مدخلات في التقويم';
$string['calendar:managegroupentries'] = 'إدارة المدخلات الجماعية في التقويم';
$string['calendar:manageownentries'] = 'إدارة مدخلات التقويم العائدة له';
$string['capabilities'] = 'الإمكانيات';
$string['capability'] = 'الإمكانية';
$string['category:create'] = 'إنشاء تصنيفات';
$string['category:delete'] = 'حذف تصنيفات ';
$string['category:manage'] = 'إدارة التصنيفات';
$string['category:update'] = 'تحديث التصنيفات ';
$string['category:viewcourselist'] = 'معاينة تصنيف المقررات الدراسية والمقررات التي فيها';
$string['category:viewhiddencategories'] = 'معاينة التصنيفات المخفية';
$string['category:visibility'] = 'مشاهدة التصنيفات المخفية';
$string['checkglobalpermissions'] = 'فحص صلاحيات النظام';
$string['checkpermissions'] = 'فحص الصلاحيات';
$string['checkpermissionsin'] = 'فحص الصلاحيات في [{$a}]';
$string['checksystempermissionsfor'] = 'فحص صلاحيات النظام لـ {$a->fullname}';
$string['checkuserspermissionshere'] = 'فحص صلاحيات {$a->fullname} في {$a->contextlevel}';
$string['chooseroletoassign'] = 'الرجاء اختيار دور لإسناده';
$string['cohort:assign'] = 'إضافة وحذف أعضاء الدفعات';
$string['cohort:manage'] = 'إنشاء، حذف ونقل الدفعات';
$string['cohort:view'] = 'معاينة الدفعات على مستوى الموقع';
$string['comment:delete'] = 'حذف التعليقات';
$string['comment:post'] = 'نشر التعليقات';
$string['comment:view'] = 'معاينة التعليقات';
$string['competency:competencygrade'] = 'وضع تقييم الكفاءة';
$string['competency:competencymanage'] = 'إدارة إطارات عمل الكفاءة';
$string['competency:competencyview'] = 'معاينة إطارات عمل الكفاءة';
$string['competency:coursecompetencyconfigure'] = 'تهيئة إعدادات كفاءة المقرر الدراسي';
$string['competency:coursecompetencygradable'] = 'تلقي علامات الكفاءة';
$string['competency:coursecompetencymanage'] = 'إدارة كفاءات المقرر الدراسي';
$string['competency:coursecompetencyview'] = 'معاينة كفاءات المقرر الدراسي';
$string['competency:evidencedelete'] = 'حذف الدليل';
$string['competency:plancomment'] = 'التعليق على خطة التعلم';
$string['competency:plancommentown'] = 'التعليق على خطة تعلمه';
$string['competency:planmanage'] = 'إدارة خطط التعلم';
$string['competency:planmanagedraft'] = 'إدارة مسودات خطط التعلم';
$string['competency:planmanageown'] = 'إدارة خطط تعلمه';
$string['competency:planmanageowndraft'] = 'إدارة مسوداته لخطط التعلم';
$string['competency:planrequestreview'] = 'إلتماس مراجعة خطة التعلم';
$string['competency:planrequestreviewown'] = 'إلتماس مراجعة خطة تعلمه';
$string['competency:planreview'] = 'مراجعة خطة التعلم';
$string['competency:planview'] = 'معاينة كل خطط التعلم';
$string['competency:planviewdraft'] = 'معاينة مسودات خطط التعلم';
$string['competency:planviewown'] = 'معاينة خطط تعلمه';
$string['competency:planviewowndraft'] = 'معاينة مسوداته لخطط التعلم';
$string['competency:templatemanage'] = 'إدارة قوالب خطط التعلم';
$string['competency:templateview'] = 'معاينة قوالب خطط التعلم';
$string['competency:usercompetencycomment'] = 'التعليق على كفاءة المستخدم';
$string['competency:usercompetencycommentown'] = 'التعليق على كفاءته';
$string['competency:usercompetencyrequestreview'] = 'إلتماس مراجعة كفاءة المستخدم';
$string['competency:usercompetencyrequestreviewown'] = 'إلتماس مراجعة كفاءته';
$string['competency:usercompetencyreview'] = 'تقييم كفاءة المستخدم';
$string['competency:usercompetencyview'] = 'معاينة كفاءة المستخدم';
$string['competency:userevidencemanage'] = 'إدارة الدليل على التعلم المسبق';
$string['competency:userevidencemanageown'] = 'إدارة دليله على التعلم المسبق';
$string['competency:userevidenceview'] = 'معاينة الدليل على التعلم المسبق لمستخدم';
$string['confirmaddadmin'] = 'هل أنت متأكد من رغبتك في إضافة المستخدم <strong>{$a}</strong> بمثابة مشرف جديد على الموقع؟';
$string['confirmdeladmin'] = 'هل تريد بالفعل إزالة المستخدم "<strong>{$a}</strong>" من مجموعة مدراء النظام؟';
$string['confirmroleprevent'] = 'هل تريد بالفعل إزالة <strong>"{$a->role}"</strong> من قائمة الأدوار المتاحة لها إمكانية "{$a->cap}" في السياق "{$a->context}"؟';
$string['confirmroleunprohibit'] = 'هل تريد بالفعل إزالة <strong>"{$a->role}"</strong> من قائمة الأدوار المحظورة من إمكانية "{$a->cap}" في السياق "{$a->context}"؟';
$string['confirmunassign'] = 'هل أنت متأكد من رغبتك في إزالة هذا الدور من هذا المستخدم؟';
$string['confirmunassignno'] = 'إلغاء';
$string['confirmunassigntitle'] = 'تأكيد تغيير الدور';
$string['confirmunassignyes'] = 'إزالة';
$string['contentbank:access'] = 'الوصول إلى بنك المحتوى';
$string['contentbank:deleteanycontent'] = 'حذف أي محتوى من بنك المحتوى';
$string['contentbank:deleteowncontent'] = 'حذف المحتوى من بنك المحتوى الخاص به';
$string['contentbank:downloadcontent'] = 'تنزيل المحتوى من بنك المحتوى';
$string['contentbank:manageanycontent'] = 'إدارة أي محتوى في بنك المحتوى';
$string['contentbank:manageowncontent'] = 'إدارة المحتوى في بنك المحتوى الخاص به';
$string['contentbank:upload'] = 'رفع محتوى جديد إلى بنك المحتوى';
$string['contentbank:useeditor'] = 'إنشاء أو تحرير المحتوى باستعمال محرر لنوع المحتوى';
$string['contentbank:viewunlistedcontent'] = 'معاينة المحتوى غير المُدرج من بنك المحتوى';
$string['context'] = 'السياق';
$string['contextrolenotallowed'] = 'دور <b>{$a}</b> غير مسموح به في هذا السياق.';
$string['course:activityvisibility'] = 'إخفاء/إظهار الأنشطة';
$string['course:bulkmessaging'] = 'إرسال رسالة لأشخاص عديدين';
$string['course:changecategory'] = 'تغيير تصنيف المقرر الدراسي';
$string['course:changefullname'] = 'تغيير الاسم الكامل للمقرر';
$string['course:changeidnumber'] = 'تغيير مُعرَّف المقرر الدراسي';
$string['course:changelockedcustomfields'] = 'تغيير الحقول المخصصة المقفولة';
$string['course:changeshortname'] = 'تغيير الاسم المختصر للمقرر';
$string['course:changesummary'] = 'تغيير ملخص المقرر الدراسي';
$string['course:configurecustomfields'] = 'تهيئة الحقول المخصصة';
$string['course:configuredownloadcontent'] = 'تهيئة تنزيل محتوى المقرر الدراسي';
$string['course:create'] = 'إنشاء المقررات الدراسية';
$string['course:creategroupconversations'] = 'إنشاء محادثات جماعية';
$string['course:delete'] = 'حذف المقررات الدراسية';
$string['course:downloadcoursecontent'] = 'تنزيل محتوى المقرر الدراسي';
$string['course:enrolconfig'] = 'تهيئة عينات الانضمام في المقررات الدراسية';
$string['course:enrolreview'] = 'مراجعة انضمامات المقرر الدراسي';
$string['course:ignoreavailabilityrestrictions'] = 'تجاهل تقييدات الإتاحة';
$string['course:ignorefilesizelimits'] = 'استعمال ملفات ذات حجوم أكبر من أي قيود لحجم الملف';
$string['course:isincompletionreports'] = 'أن يظهر في تقارير الإكمال';
$string['course:manageactivities'] = 'إدارة الأنشطة';
$string['course:managefiles'] = 'إدارة الملفات';
$string['course:managegrades'] = 'إدارة التقديرات';
$string['course:managegroups'] = 'إدارة المجموعات';
$string['course:managescales'] = 'إدارة المقاييس';
$string['course:markcomplete'] = 'تأشير المستخدمين بأنهم مكتملون في إكمال المقرر الدراسي';
$string['course:movesections'] = 'نقل المقاطع';
$string['course:overridecompletion'] = 'تجاوز حالة إكمال النشاط';
$string['course:recommendactivity'] = 'التوصية بالنشاطات في منتقي النشاطات';
$string['course:renameroles'] = 'إعادة تسمية الأدوار';
$string['course:request'] = 'طلب مقررات دراسية جديدة';
$string['course:reset'] = 'إعادة تعيين المقرر الدراسي';
$string['course:reviewotherusers'] = 'تقييم المستخدمين الآخرين';
$string['course:sectionvisibility'] = 'التحكم في إظهار المقطع';
$string['course:setcurrentsection'] = 'تحديد المقطع الحالي';
$string['course:setforcedlanguage'] = 'فرض لغة المقرر الدراسي';
$string['course:tag'] = 'تغيير وسوم المقرر الدراسي';
$string['course:togglecompletion'] = 'تأشير النشاطات على أنها مكتملة يدوياً';
$string['course:update'] = 'تحديث إعدادات المقرر الدراسي';
$string['course:useremail'] = 'تمكين/تعطيل عنوان البريد الالكتروني';
$string['course:view'] = 'معاينة المقررات الدراسية بدون الانضمام إليها';
$string['course:viewcoursegrades'] = 'معاينة تقديرات المقرر الدراسي';
$string['course:viewhiddenactivities'] = 'معاينة الأنشطة المخفية';
$string['course:viewhiddencourses'] = 'معاينة المقررات الدراسية المخفية';
$string['course:viewhiddensections'] = 'معاينة المقاطع المخفية';
$string['course:viewhiddenuserfields'] = 'معاينة حقول المستخدم المخفية';
$string['course:viewparticipants'] = 'معاينة المشاركين';
$string['course:viewscales'] = 'معاينة المقاييس';
$string['course:viewsuspendedusers'] = 'معاينة المستخدمين المعلقين';
$string['course:visibility'] = 'إخفاء/إظهار المقررات الدراسية';
$string['createrolebycopying'] = 'أنشئ دور جديد عن طريق نسخ {$a}';
$string['createthisrole'] = 'أنشئ هذا الدور';
$string['currentcontext'] = 'السياق الحالي';
$string['currentrole'] = 'الدور الحالي';
$string['customroledescription'] = 'الوصف المخصص';
$string['customroledescription_help'] = 'أوصاف الأدوار القياسية تظهر باللغة المحلية تلقائياً إذا كان الوصف المخصص فارغاً.';
$string['customrolename'] = 'الاسم الكامل المخصص';
$string['customrolename_help'] = 'أسماء الأدوار القياسية تظهر باللغة المحلية تلقائياً إذا كان الاسم المخصص فارغاً. ينبغي عليك وضع الاسم الكامل لكل الأدوار المخصصة.';
$string['defaultrole'] = 'الدور الافتراضي';
$string['defaultx'] = 'افتراضي: {$a}';
$string['defineroles'] = 'تعريف الأدوار';
$string['deletecourseoverrides'] = 'حذف كل التجاوزات في المقرر الدراسي';
$string['deletelocalroles'] = 'حذف كافة تعيينات الأدوار المحلية';
$string['deleterolesure'] = '<p>هل أنت متأكد من رغبتك في حذف الدور "{$a->name} ({$a->shortname})"؟</p><p>حالياً هذا الدور معيَّن لـ {$a->count} مستخدم.</p>';
$string['deletexrole'] = 'حذف {$a} الدور';
$string['duplicaterole'] = 'نسخ الدور';
$string['duplicaterolesure'] = '<p>هل أنت متأكد من رغبتك في إنشاء نسخة من دور "{$a->name} ({$a->shortname})"؟</p>';
$string['editingrolex'] = 'تحرير الدور "{$a}"';
$string['editrole'] = 'تحرير الدور';
$string['editxrole'] = 'تحرير دور {$a}';
$string['errorbadrolename'] = 'اسم الدور خاطئ';
$string['errorbadroleshortname'] = 'الاسم المختصر للدور خاطئ';
$string['errorexistsrolename'] = 'اسم الدور موجود مسبقاً';
$string['errorexistsroleshortname'] = 'اسم الدور موجود مسبقاً';
$string['errorroleshortnametoolong'] = 'الاسم المختصر ينبغي أن لا يزيد عن 100 حرف';
$string['eventcapabilityassigned'] = 'إمكانية تم تعيينها';
$string['eventcapabilityunassigned'] = 'إمكانية تم إلغاء تعيينها';
$string['eventroleallowassignupdated'] = 'سماح بتعيين دور';
$string['eventroleallowoverrideupdated'] = 'سماح بتجاوز دور';
$string['eventroleallowswitchupdated'] = 'سماح بتبديل دور';
$string['eventroleallowviewupdated'] = 'سماح بمعاينة دور';
$string['eventroleassigned'] = 'دور تم تعيينه';
$string['eventrolecapabilitiesupdated'] = 'إمكانيات دور تم تحديثها';
$string['eventroledeleted'] = 'دور تم حذفه';
$string['eventroleunassigned'] = 'دور تم إلغاء تعيينه';
$string['eventroleupdated'] = 'دور تم تحديثه';
$string['existingadmins'] = 'مشرفو الموقع الحاليون';
$string['existingusers'] = '{$a} من المستخدمين موجودون';
$string['explanation'] = 'تفسير';
$string['export'] = 'تصدير';
$string['extusers'] = 'المستخدمون الموجودون';
$string['extusersmatching'] = 'المستخدمون الموجودون المطابقون \'{$a}\'';
$string['filter:manage'] = 'إدارة إعدادات المنقحات المحلية';
$string['frontpageuser'] = 'المستخدم المصادق عليه في صفحة الواجهة';
$string['frontpageuserdescription'] = 'كل المستخدمين مسجلي الدخول في مقرر صفحة الواجهة.';
$string['globalrole'] = 'دور النظام';
$string['globalroleswarning'] = 'تحذير! أي أدوار تمنحها من هذه الصفحة ستطبق على المستخدمين المعنيين على امتداد النظام بأكمله، بما في ذلك صفحة الواجهة وكل المقررات الدراسية.';
$string['gotoassignroles'] = 'إذهب لتعيين الأدوار لهذا {$a->contextlevel}';
$string['gotoassignsystemroles'] = 'إذهب لتعيين أدوار النظام';
$string['grade:edit'] = 'تحرير التقديرات';
$string['grade:export'] = 'تصدير التقديرات';
$string['grade:hide'] = 'إخفاء/إظهار التقديرات أو مفرداتها';
$string['grade:import'] = 'استيراد التقديرات';
$string['grade:lock'] = 'تأمين التقديرات أو مفرداتها';
$string['grade:manage'] = 'إدارة مفردات التقييم';
$string['grade:managegradingforms'] = 'إدارة الطرق المتقدمة لمنح التقديرات';
$string['grade:manageletters'] = 'إدارة تقديرات الأحرف';
$string['grade:manageoutcomes'] = 'إدارة مخرجات التقديرات';
$string['grade:managesharedforms'] = 'إدارة الطرق المتقدمة لمنح التقديرات من القوالب';
$string['grade:override'] = 'تخطي الدرجات';
$string['grade:sharegradingforms'] = 'مشاركة نموذج منح التقديرات المتقدم بمثابة قالب';
$string['grade:unlock'] = 'إلغاء تأمين التقديرات أو مفرداتها';
$string['grade:view'] = 'معاينة تقديراته';
$string['grade:viewall'] = 'معاينة تقديرات المستخدمين الآخرين';
$string['grade:viewhidden'] = 'معاينة تقديراته المخفية';
$string['h5p:deploy'] = 'نشر محتوى H5P';
$string['h5p:setdisplayoptions'] = 'ضبط خيارات عرض H5P';
$string['h5p:updatelibraries'] = 'إدارة أنواع محتوى H5P';
$string['highlightedcellsshowdefault'] = 'الصلاحيات المبرزة في الجدول أدناه هي الافتراضيات للنموذج الأصلي من الدور المحدد أعلاه.';
$string['highlightedcellsshowinherit'] = 'الخلايا المبرزة في الجدول أدناه تظهر الصلاحيات (إن وجدت) التي ستستورث. بمعزل عن الإمكانيات التي تريد فعلياً تغيير صلاحياتها، عليك ترك كل شيء مضبوط على وراثة';
$string['inactiveformorethan'] = 'غير نشيط لأكثر من {$a->timeperiod}';
$string['ingroup'] = 'في المجموعة "{$a->group}"';
$string['inherit'] = 'موروث';
$string['invalidpresetfile'] = 'ملف تعريف الدور غير صالح';
$string['legacy:admin'] = 'دور موروث: مدير';
$string['legacy:coursecreator'] = 'دور موروث: منشئ مقررات دراسية';
$string['legacy:editingteacher'] = 'دور موروث: معلم (محرر)';
$string['legacy:guest'] = 'دور موروث: ضيف';
$string['legacy:student'] = 'دور موروث: طالب';
$string['legacy:teacher'] = 'دور موروث: معلم (غير قادر على التحرير)';
$string['legacy:user'] = 'دور متوارث: المستخدم الموثوق';
$string['legacytype'] = 'نوع الدور الموروث';
$string['listallroles'] = 'اظهر قائمة  كل الأدوار';
$string['localroles'] = 'الأدوار المعينة محلياً';
$string['mainadmin'] = 'المشرف الرئيسي';
$string['mainadminset'] = 'حدد المشرف الرئيسي';
$string['manageadmins'] = 'إدارة مشرفي الموقع';
$string['manager'] = 'مدير';
$string['managerdescription'] = 'يمكن للمدراء الوصول إلى المقررات الدراسية والتعديل فيها، لكنهم عادة ما لا يكونون مشاركين فيها.';
$string['manageroles'] = 'إدارة الأدوار';
$string['maybeassignedin'] = 'أنواع السياقات التي يمكن فيها إسناد هذا الدور';
$string['morethan'] = 'أكثر من {$a}';
$string['multipleroles'] = 'أدوار متعددة';
$string['my:configsyspages'] = 'تهيئة قوالب النظام لصفحات لوحة التحكم';
$string['my:manageblocks'] = 'إدارة كتل صفحة لوحة التحكم';
$string['neededroles'] = 'الأدوار ذات الصلاحية';
$string['nocapabilitiesincontext'] = 'لا توجد إمكانيات متاحة في هذا السياق';
$string['noneinthisx'] = 'لا أحد من نوع {$a}';
$string['noneinthisxmatching'] = 'لا مستخدمين يطابقون \'{$a->search}\' في هذا {$a->contexttype}';
$string['norole'] = 'بلا دور';
$string['noroleassignments'] = 'هذا المستخدم لا يمتلك أي دور في أي مكان من هذا الموقع.';
$string['noroles'] = 'بلا أدوار';
$string['notabletoassignroleshere'] = 'منح الأدوار في هذا السياق لم يتم تمكينه من قبل المشرف.';
$string['notabletooverrideroleshere'] = 'لا يمكنك تجاوز صلاحيات أي دور هنا';
$string['notes:manage'] = 'إدارة الملاحظات';
$string['notes:view'] = 'معاينة الملاحظات';
$string['notset'] = 'غير مُعد';
$string['novisibleroles'] = 'لا أدوار';
$string['overrideanotherrole'] = 'تجاوز دور آخر';
$string['overridecontext'] = 'تجاوز السياق';
$string['overridepermissions'] = 'تجاوز الصلاحيات';
$string['overridepermissions_help'] = 'تجاوز الصلاحيات يسمح بتمكين أو منع إمكانيات مختارة في سياق معين.';
$string['overridepermissionsforrole'] = 'تجاوز صلاحيات دور \'{$a->role}\' في {$a->context}';
$string['overridepermissionsin'] = 'تجاوز الصلاحيات في {$a}';
$string['overrideroles'] = 'تجاوز الأدوار';
$string['overriderolesin'] = 'تجاوز الأدوار في {$a}';
$string['overrides'] = 'التجاوزات';
$string['overridesbycontext'] = 'التجاوزات (حسب السياق)';
$string['payment:manageaccounts'] = 'إدارة الحسابات';
$string['payment:viewpayments'] = 'معاينة المدفوعات';
$string['permission'] = 'الصلاحية';
$string['permission_help'] = 'الصلاحيات هي إعدادات الإمكانيات. هناك 4 خيارات:

* غير مطروق
* السماح - منح الصلاحية للإمكانية
* المنع - الصلاحية مرفوعة عن الإمكانية، حتى لو كانت متاحة ضمن سياق أعلى
* الحظر - الصلاحية مرفوضة بالكامل ولا يمكن تجاوزها عند أي سياق أدنى (أكثر تحديداً)';
$string['permissions'] = 'الصلاحيات';
$string['permissionsforuser'] = 'صلاحيات المستخدم {$a}';
$string['permissionsincontext'] = 'الصلاحيات في {$a}';
$string['portfolio:export'] = 'التصدير إلى المحافظ';
$string['potentialusers'] = '{$a} مستخدمين محتملين';
$string['potusers'] = 'المستخدمون المحتملون';
$string['potusersmatching'] = 'المستخدمون المحتملون الذين يطابقون \'{$a}\'‏';
$string['prevent'] = 'منع';
$string['privacy:metadata:preference:showadvanced'] = 'معاملة زر تبديل النمط المتقدم';
$string['privacy:metadata:role_assignments'] = 'تعيينات الدور';
$string['privacy:metadata:role_assignments:component'] = 'الإضافة المسؤولة عن تعيين الدور، يكون فارغاً عند التعيين اليدوي';
$string['privacy:metadata:role_assignments:itemid'] = 'مُعرَّف عينة الانضمام/المصادقة المسؤولة عن تعيين الدور هذا';
$string['privacy:metadata:role_assignments:modifierid'] = 'مُعرَّف المستخدم الذي أنشأ أو عدل تعيين الدور';
$string['privacy:metadata:role_assignments:roleid'] = 'مُعرَّف الدور';
$string['privacy:metadata:role_assignments:tableexplanation'] = 'هذا الجدول يخزن الأدوار المعينة عند كل سياق';
$string['privacy:metadata:role_assignments:timemodified'] = 'تاريخ إنشاء تعيين الدور أو تعديله';
$string['privacy:metadata:role_assignments:userid'] = 'مُعرَّف المستخدم';
$string['privacy:metadata:role_capabilities'] = 'إمكانيات الدور';
$string['privacy:metadata:role_capabilities:capability'] = 'اسم الإمكانية';
$string['privacy:metadata:role_capabilities:modifierid'] = 'مُعرَّف المستخدم الذي أنشأ الإمكانية أو عدلها';
$string['privacy:metadata:role_capabilities:permission'] = 'صلاحيات الإمكانية: وراثة، سماح، منع، أو حظر';
$string['privacy:metadata:role_capabilities:roleid'] = 'مُعرَّف الدور';
$string['privacy:metadata:role_capabilities:tableexplanation'] = 'الإمكانيات وإمكانيات التجاوز لدور معين ضمن سياق معين';
$string['privacy:metadata:role_capabilities:timemodified'] = 'تاريخ إنشاء الإمكانية أو تعديلها';
$string['privacy:metadata:role_cohortroles'] = 'الأدوار إلى الدفعة';
$string['prohibit'] = 'حظر';
$string['prohibitedroles'] = 'محظور';
$string['question:add'] = 'إضافة أسئلة جديدة';
$string['question:config'] = 'تهيئة أنواع الأسئلة';
$string['question:editall'] = 'تحرير كل الأسئلة';
$string['question:editmine'] = 'تحرير أسئلته';
$string['question:flag'] = 'وضع علم على الأسئلة عند محاولتها';
$string['question:managecategory'] = 'تحرير أصناف الأسئلة';
$string['question:moveall'] = 'نقل كل الأسئلة';
$string['question:movemine'] = 'نقل أسئلته';
$string['question:tagall'] = 'وضع وسم على كل الأسئلة';
$string['question:tagmine'] = 'وضع وسم على أسئلته';
$string['question:useall'] = 'استعمال كل الأسئلة';
$string['question:usemine'] = 'استعمال أسئلته';
$string['question:viewall'] = 'معاينة كل الأسئلة';
$string['question:viewmine'] = 'معاينة أسئلته';
$string['rating:rate'] = 'إضافة تقييمات إلى العناصر';
$string['rating:view'] = 'معاينة التقييم الكلي الذي تلقيته';
$string['rating:viewall'] = 'معاينة كل التقييمات الخام المقدمة من الأفراد';
$string['rating:viewany'] = 'معاينة إجمالي التقييمات التي تلقاها أي أحد';
$string['resetrole'] = 'إعادة التعيين';
$string['resettingrole'] = 'إعادة الدور \'{$a}\' إلى وضعه الافتراضي';
$string['restore:configure'] = 'تهيئة خيارات الاستعادة';
$string['restore:createuser'] = 'إنشاء المستخدمين عند الاستعادة';
$string['restore:restoreactivity'] = 'استعادة الأنشطة';
$string['restore:restorecourse'] = 'استعادة المقررات الدراسية';
$string['restore:restoresection'] = 'استعادة المقاطع';
$string['restore:restoretargetimport'] = 'الاستعادة من ملفات معدة للاستيراد';
$string['restore:rolldates'] = 'تدوير تواريخ تهيئة النشاط عند الاستعادة';
$string['restore:uploadfile'] = 'رفع الملفات إلى مناطق الحفظ الاحتياطي';
$string['restore:userinfo'] = 'استعادة بيانات المستخدم';
$string['restore:viewautomatedfilearea'] = 'استعادة المقررات الدراسية من الحفظ الاحتياطي التلقائي';
$string['risks'] = 'المخاطر';
$string['role:assign'] = 'تعيين الأدوار للمستخدمين';
$string['role:manage'] = 'إنشاء وإدارة الأدوار';
$string['role:override'] = 'تجاوز صلاحيات الآخرين';
$string['role:review'] = 'مراجعة صلاحيات الآخرين';
$string['role:safeoverride'] = 'تجاوز الصلاحيات الآمنة للآخرين';
$string['role:switchroles'] = 'التبديل إلى أدوار أخرى';
$string['roleallowheader'] = 'السماح بدور:';
$string['roleallowinfo'] = 'إختر الدور الذي تريد إضافته إلى قائمة الإدوار المسموح لها في السياق "{$a->context}"، بالإمكانية "{$a->cap}":';
$string['roleassignments'] = 'إسنادات الدور';
$string['roledefinitions'] = 'تعريف الدور';
$string['rolefullname'] = 'تسمية الدور';
$string['roleincontext'] = '{$a->role} في {$a->context}';
$string['roleprohibitheader'] = 'حظر الدور';
$string['roleprohibitinfo'] = 'إختر الدور الذي تريد إضافته إلى قائمة الأدوار المحظور لها في السياق {$a->contect}، الإمكانية {$a->cap}:';
$string['rolerepreset'] = 'استعمال الضبط المسبق للدور';
$string['roleresetdefaults'] = 'الافتراضيات';
$string['roleresetrole'] = 'استعمال الدور أو النموذج الأصلي';
$string['rolerisks'] = 'مخاطر الدور';
$string['roles'] = 'الأدوار';
$string['roles_help'] = 'الدور هو مجموعة من الصلاحيات المُعرَّفة على مستوى النظام بأكمله والتي يمكنك تعيينها إلى مستخدمين معينين ضمن سياقات معينة.';
$string['roleselect'] = 'إختر الدور';
$string['rolesforuser'] = 'أدوار المستخدم {$a}';
$string['roleshortname'] = 'الاسم المختصر';
$string['roleshortname_help'] = 'الاسم المختصر للدور هو مُعرَّف واطئ المستوى ينبغي أن تقتصر حروفه على الأرقام والمحارف اللاتينية بترميز ASCII.';
$string['roletoassign'] = 'دور للإسناد';
$string['roletooverride'] = 'دور لتخطي';
$string['safeoverridenotice'] = 'ملاحظة: الإمكانيات ذات المخاطر الأعلى مقفولة لأنك مسموح لك فقط بتجاوز الإمكانيات الآمنة.';
$string['search:query'] = 'إجراء البحث على مستوى الموقع';
$string['selectanotheruser'] = 'إختر مستخدماً آخر';
$string['selectauser'] = 'إختر المستخدم';
$string['selectrole'] = 'اختر دور';
$string['showallroles'] = 'إظهار جميع الأدوار';
$string['showthisuserspermissions'] = 'إظهار صلاحيات هذا المستخدم';
$string['site:accessallgroups'] = 'الوصول إلى كل المجموعات';
$string['site:approvecourse'] = 'الموافقة على إنشاء المقرر الدراسي';
$string['site:backup'] = 'حفظ المقررات الدراسية إحتياطياً';
$string['site:config'] = 'تغيير إعدادات الموقع';
$string['site:configview'] = 'معاينة شجرة إشراف الموقع (لكن ليس كل الصفحات فيه)';
$string['site:deleteanymessage'] = 'حذف أي رسائل في الموقع';
$string['site:deleteownmessage'] = 'حذف الرسائل المرسلة إلى المستخدم أو المرسلة منه';
$string['site:doanything'] = 'مسموح له بعمل أي شيء';
$string['site:doclinks'] = 'إظهار الروابط لوثائق خارج الموقع';
$string['site:forcelanguage'] = 'تجاوز لغة المقرر الدراسي';
$string['site:import'] = 'استيراد مقررات دراسية أخرى إلى المقرر';
$string['site:maintenanceaccess'] = 'الوصول إلى الموقع حتى في نمط الصيانة';
$string['site:manageallmessaging'] = 'إضافة، إزالة، حظر وإلغاء حظر عناوين الاتصال لأي مستخدم';
$string['site:manageblocks'] = 'إدارة الكتل في صفحة';
$string['site:managecontextlocks'] = 'إدارة تجميد السياقات';
$string['site:messageanyuser'] = 'تجاوز تفضيلات الخصوصية لمراسلات أي مستخدم';
$string['site:mnetloginfromremote'] = 'الدخول من تطبيق بعيد عبر شبكة مودل';
$string['site:mnetlogintoremote'] = 'التجوال إلى تطبيق بعيد عبر شبكة مودل';
$string['site:readallmessages'] = 'قراءة كل الرسائل في الموقع';
$string['site:restore'] = 'المقررات الدراسية التي تم إعادتها';
$string['site:senderrormessage'] = 'إرسال رسالة إلى مسؤول الدعم من صفحة الخطأ';
$string['site:sendmessage'] = 'إرسال الرسائل لأي مستخدم';
$string['site:trustcontent'] = 'الثقة بالمحتوى المقدم';
$string['site:uploadusers'] = 'رفع مستخدمين جدد من ملف';
$string['site:viewanonymousevents'] = 'معاينة الأحداث غير المشخصنة في التقارير';
$string['site:viewfullnames'] = 'معاينة الأسماء الكاملة للمستخدمين دائماً';
$string['site:viewparticipants'] = 'معاينة المشاركين';
$string['site:viewreports'] = 'معاينة التقارير';
$string['site:viewuseridentity'] = 'معاينة هوية المستخدم الكاملة في القوائم';
$string['siteadministrators'] = 'مشرفو الموقع';
$string['tag:edit'] = 'تحرير الوسوم الموجودة';
$string['tag:editblocks'] = 'تحرير الكتل في صفحات الوسوم';
$string['tag:flag'] = 'تأشير الوسوم بعلم للدلالة على أنها غير لائقة';
$string['tag:manage'] = 'إدارة كافة الوسوم';
$string['thisnewrole'] = 'هذا الدور الجديد';
$string['thisusersroles'] = 'إسنادات الأدوار لهذا المستخدم';
$string['unassignarole'] = 'ألغ إسناد الدور {$a}';
$string['unassignconfirm'] = 'هل تريد حقاً رفع دور "{$a->role}" من المستخدم "{$a->user}"؟';
$string['unassignerror'] = 'وقع خطأ عند رفع دور "{$a->role}" من المستخدم "{$a->user}".';
$string['user:changeownpassword'] = 'تغيير كلمة مروره';
$string['user:create'] = 'إنشاء المستخدمين';
$string['user:delete'] = 'حذف المستخدمين';
$string['user:editmessageprofile'] = 'تحرير خيارات التراسل للمستخدم';
$string['user:editownmessageprofile'] = 'تحرير الملف الشخصي للمراسلات الخاصة به';
$string['user:editownprofile'] = 'تحرير ملفه الشخصي';
$string['user:editprofile'] = 'تحرير الملف الشخصي لمستخدم';
$string['user:ignoreuserquota'] = 'تجاهل حد حصة المستخدم';
$string['user:loginas'] = 'الدخول كمستخدم آخر';
$string['user:manageblocks'] = 'إدارة الكتل على الصفحات الشخصية للمستخدمين الآخرين';
$string['user:manageownblocks'] = 'إدارة الكتل في ملف المستخدم الشخصي المشاع له';
$string['user:manageownfiles'] = 'إدارة الملفات في مناطق الملفات الشخصية الخاصة به';
$string['user:managesyspages'] = 'تهيئة تخطيط الصفحة الافتراضي للملفات الشخصية المشاعة';
$string['user:readuserblogs'] = 'مشاهدة كل مدونات المستخدمين';
$string['user:readuserposts'] = 'مشاهدة مشاركات كل المستخدمين في المنتديات';
$string['user:update'] = 'تحديث الملفات الشخصية للمستخدمين';
$string['user:viewalldetails'] = 'معاينة كامل معلومات المستخدم';
$string['user:viewdetails'] = 'معاينة الملفات الشخصية للمستخدمين';
$string['user:viewhiddendetails'] = 'معاينة التفاصيل المخفية للمستخدمين';
$string['user:viewlastip'] = 'معاينة آخر عنوان IP للمستخدم';
$string['user:viewuseractivitiesreport'] = 'مشاهدة تقارير نشاط المستخدم';
$string['user:viewusergrades'] = 'معاينة تقديرات المستخدم';
$string['usersfrom'] = 'المستخدمين من {$a}';
$string['usersfrommatching'] = 'المستخدمون من {$a->contextname} المطابقون لـ \'{$a->search}\'';
$string['usersinthisx'] = 'المستخدمون في هذا {$a}';
$string['usersinthisxmatching'] = 'المستخدمون في هذا {$a->contexttype} المطابقون لـ \'{$a->search}\'';
$string['userswithrole'] = 'كل المستخدم بدور ';
$string['userswiththisrole'] = 'حائزو الدور';
$string['useshowadvancedtochange'] = 'استعمل \'إظهار الخيارات المتقدمة\' للقيام بالتغيير';
$string['viewingdefinitionofrolex'] = 'استعراض تعريف الدور "{$a}"';
$string['viewrole'] = 'معاينة تفاصيل الدور';
$string['webservice:createmobiletoken'] = 'إنشاء ترميز خدمة الويب لوصول الجوالات';
$string['webservice:createtoken'] = 'إنشاء ترميز خدمة الويب';
$string['webservice:managealltokens'] = 'إدارة ترميزات خدمة الويب لكل المستخدمين';
$string['whydoesuserhavecap'] = 'لماذا يمتلك {$a->fullname} الإمكانية {$a->capability} في السياق {$a->context}؟';
$string['whydoesusernothavecap'] = 'لماذا لا يمتلك {$a->fullname} الإمكانية {$a->capability} في السياق {$a->context}؟';
$string['xroleassignments'] = 'تعيينات الأدوار لـ {$a}';
$string['xuserswiththerole'] = 'المستخدمين المعينين لهذا الدور
"{$a->role}": {$a->number}';
