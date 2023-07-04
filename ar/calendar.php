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
 * Strings for component 'calendar', language 'ar', version '4.1'.
 *
 * @package     calendar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = 'حدث النشاط';
$string['addevent'] = 'إضافة أحداث';
$string['advancedoptions'] = 'خيارات متقدمة';
$string['allday'] = 'كل اليوم';
$string['annually'] = 'سنوياً';
$string['calendar'] = 'التقويم';
$string['calendarexporturl'] = 'رابط التقويم';
$string['calendarheading'] = 'التقويم {$a}';
$string['calendarpreferences'] = 'تفضيلات التقويم';
$string['calendartypes'] = 'أنواع التقويم';
$string['calendarurl'] = 'رابط التقويم: {$a}';
$string['calendarurlcopiedtoclipboard'] = 'رابط التقويم تم نسخه إلى الحافظة';
$string['category'] = 'التصنيف';
$string['categoryevent'] = 'حدث التصنيف';
$string['categoryevents'] = 'أحداث التصنيف';
$string['clickhide'] = 'أنقر للإخفاء';
$string['clickshow'] = 'انقر للعرض';
$string['colactions'] = 'الإجراءات';
$string['colcalendar'] = 'التقويم';
$string['collastupdated'] = 'آخر تحديث';
$string['colpoll'] = 'فترة التحديث';
$string['commontasks'] = 'الخيارات';
$string['confirmeventdelete'] = 'هل أنت متأكد من رغبتك في حذف الحدث "{$a}"؟';
$string['confirmeventseriesdelete'] = 'يعتبر الحدث "{$a->name}" جزءاً من سلسلة. هل تريد حذف هذا الحدث فقط، أم كل الأحداث في السلسلة البالغة {$a->count} ؟';
$string['confirmsubscriptiondelete'] = 'هل أنت متأكد من رغبتك في حذف اشتراك التقويم "{$a}"؟';
$string['copycalendarurl'] = 'نسخ رابط التقويم';
$string['copyurl'] = 'نسخ الرابط';
$string['course'] = 'المساق';
$string['coursecalendar'] = 'تقويم {$a}';
$string['courseevent'] = 'حدث المساق';
$string['courseevents'] = 'أحداث المساق';
$string['courses'] = 'المقررات الدراسية';
$string['customexport'] = 'نطاق مخصص ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'يومياً';
$string['day'] = 'اليوم';
$string['dayeventsmany'] = '{$a->num} من الأحداث، {$a->day}';
$string['dayeventsnone'] = 'لا أحداث، {$a}';
$string['dayeventsone'] = 'حدث واحد، {$a}';
$string['daynext'] = 'اليوم التالي';
$string['dayprev'] = 'اليوم السابق';
$string['dayviewfor'] = 'معاينة اليوم عن:';
$string['dayviewtitle'] = 'معاينة اليوم: {$a}';
$string['daywithnoevents'] = 'لا أحداث لهذا اليوم.';
$string['default'] = 'الافتراضي';
$string['deleteallevents'] = 'حذف كل الأحداث';
$string['deleteevent'] = 'حذف الحدث';
$string['deleteevents'] = 'حذف الأحداث';
$string['deleteoneevent'] = 'حذف هذا الحدث';
$string['detailedmonthviewfor'] = 'معاينة شهرية مفصلة عن:';
$string['detailedmonthviewtitle'] = 'معاينة شهرية مفصلة: {$a}';
$string['durationminutes'] = 'المدة بالدقائق';
$string['durationnone'] = 'بدون مدة زمنية';
$string['durationuntil'] = 'حتى';
$string['editevent'] = 'تحرير الحدث';
$string['erroraddingevent'] = 'فشلت إضافة الحدث';
$string['errorbadsubscription'] = 'لم يتم العثور على اشتراك التقويم';
$string['errorbeforecoursestart'] = 'لا يمكن جعل الحدث قبل تاريخ بدء المساق';
$string['errorcannotimport'] = 'لا يمكنك إنشاء اشتراك التقويم في هذا الوقت.';
$string['errorhasuntilandcount'] = 'قد يظهر إما UNTIL أو COUNT في قاعدة التكرار، ولكن كل من UNTIL و COUNT MUST NOT تحدثان في نفس قاعدة التكرار.';
$string['errorinvalidbydayprefix'] = 'يمكن أن تكون قيم الأعداد الصحيحة التي تسبق قواعد BYDAY موجودة فقط لقاعدة التكرار MONTHLY أو YEARLY.';
$string['errorinvalidbydaysuffix'] = 'القيم الصالحة لأجزاء يوم الأسبوع من القاعدة BYDAY هي MO، TU، WE، TH، FR، SA و SU';
$string['errorinvalidbyhour'] = 'القيم الصالحة لقاعدة BYHOUR هي من 0 إلى 23.';
$string['errorinvalidbyminute'] = 'القيم الصالحة لقاعدة BYMINUTE هي من 0 إلى 59.';
$string['errorinvalidbymonth'] = 'القيم الصالحة لقاعدة BYMONTH هي من 1 إلى 12.';
$string['errorinvalidbymonthday'] = 'القيم الصالحة لقاعدة BYMONTHDAY هي من 1 إلى 31 أو 31- إلى 1-.';
$string['errorinvalidbysecond'] = 'القيم الصالحة لقاعدة BYSECOND هي من 0 إلى 59.';
$string['errorinvalidbysetpos'] = 'القيم الصالحة لقاعدة BYSETPOS هي من 1 إلى 366 أو -366 إلى -1.';
$string['errorinvalidbyweekno'] = 'القيم الصالحة لقاعدة BYWEEKNO هي من 1 إلى 53 أو -53 إلى -1.';
$string['errorinvalidbyyearday'] = 'القيم الصالحة للقاعدة BYYEARDAY هي 1 إلى 366 أو -366 إلى -1.';
$string['errorinvaliddate'] = 'تاريخ غير صالح';
$string['errorinvalidicalurl'] = 'عنوان رابط iCal المعطى غير صالح.';
$string['errorinvalidinterval'] = 'يجب أن تكون قيمة قاعدة INTERVAL عدداً صحيحاً موجباً.';
$string['errorinvalidminutes'] = 'حدد المدة بالدقائق وذلك بوضع رقم ما بين 1 و 999.';
$string['errorinvalidrepeats'] = 'حدد عدد الأحداث وذلك بوضع رقم ما بين 1 و 99.';
$string['errormustbeusedwithotherbyrule'] = 'يجب استخدام قاعدة BYSETPOS فقط مع جزء قاعدة BYxxx آخر.';
$string['errornodescription'] = 'الوصف مطلوب';
$string['errornoeventname'] = 'الاسم مطلوب';
$string['errornonyearlyfreqwithbyweekno'] = 'قاعدة BYWEEKNO صالحة فقط لقواعد YEARLY.';
$string['errorrequiredurlorfile'] = 'يتطلب استيراد التقويم إما رابطاً أو ملفاً.';
$string['errorrrule'] = 'يبدو أن قاعدة التكرار التي تم تمريرها خاطئة.';
$string['errorrruleday'] = 'تحتوي قاعدة التكرار على معامل يوم غير صالح.';
$string['errorrrulefreq'] = 'تحتوي قاعدة التكرار على معامل تردد غير صالح.';
$string['eventcalendareventcreated'] = 'تم إنشاء حدث التقويم';
$string['eventcalendareventdeleted'] = 'تم حذف حدث التقويم';
$string['eventcalendareventupdated'] = 'تم تحديث حدث التقويم';
$string['eventdate'] = 'التاريخ';
$string['eventdescription'] = 'الوصف';
$string['eventduration'] = 'المدة';
$string['eventendtime'] = 'وقت الانتهاء';
$string['eventendtimewrapped'] = '{$a} (وقت الانتهاء)';
$string['eventinstanttime'] = 'الوقت';
$string['eventkind'] = 'نوع الحدث';
$string['eventname'] = 'عنوان الحدث';
$string['eventnameandcategory'] = '{$a->category}: {$a->name}';
$string['eventnameandcourse'] = '{$a->course}: {$a->name}';
$string['eventnamelocation'] = 'موقع {$a->name}: {$a->location}';
$string['eventnone'] = 'لا توجد أحداث';
$string['eventrepeat'] = 'التكرار';
$string['events'] = 'الأحداث';
$string['eventsall'] = 'كل الأحداث';
$string['eventsdeleted'] = 'أحداث {$a} تم حذفها';
$string['eventsfor'] = 'أحداث {$a}';
$string['eventsimported'] = 'أحداث {$a} تم استيرادها';
$string['eventskey'] = 'مفتاح الأحداث';
$string['eventsource'] = 'مصدر الحدث';
$string['eventspersonal'] = 'أحداثي الشخصية';
$string['eventsrelatedtocategories'] = 'الأحداث المتعلقة بالتصنيفات';
$string['eventsrelatedtocourses'] = 'الأحدات المتعلقة بالمقررات الدراسية';
$string['eventsrelatedtogroups'] = 'الأحداث المتعلقة بالمجموعات';
$string['eventsskipped'] = 'أحداث {$a} تم تخطيها';
$string['eventstarttime'] = 'وقت البدء';
$string['eventstoexport'] = 'الأحداث المزمع تصديرها';
$string['eventsubscriptioncreated'] = 'تم إنشاء اشتراك التقويم';
$string['eventsubscriptiondeleted'] = 'تم حذف اشتراك التقويم';
$string['eventsubscriptioneditwarning'] = 'حدث التقويم هذا هو جزء من الاشتراك. سيتم فقد أي تغييرات تجريها على هذا الحدث في حالة حذف الاشتراك.';
$string['eventsubscriptionupdated'] = 'تم تحديث اشتراك التقويم';
$string['eventsupdated'] = 'أحداث {$a} تم تحديثها';
$string['eventtime'] = 'الوقت';
$string['eventtype'] = 'نوع الحدث';
$string['eventtypecategory'] = 'التصنيف';
$string['eventtypecourse'] = 'المساق';
$string['eventtypegroup'] = 'المجموعة';
$string['eventtypemodule'] = 'الوحدة';
$string['eventtypeother'] = 'أخرى';
$string['eventtypesite'] = 'الموقع';
$string['eventtypeuser'] = 'المستخدم';
$string['eventview'] = 'تفاصيل الأحداث';
$string['expired'] = 'انتهى';
$string['explain_site_timeformat'] = 'يمكنك إختيار إما تنسيق 12 أو 24 ساعة للموقع ككل. لو قمت باختيار "الافتراضي"، سيتم اختيار التنسيق تلقائياً تبعاً للغة التي تستعملها في الموقع. هذا الإعداد يمكن تجاوزه عبر تفضيلات المستخدم.';
$string['export'] = 'صدّر';
$string['exportbutton'] = 'صدّر';
$string['exportcalendar'] = 'تصدير التقويم';
$string['exporthelp'] = '<p>يعطي عنوان رابط التقويم رابطًا متغيرًا لاستيراد الأحداث إلى تقويمات أخرى. أي أحداث جديدة، متغيرة أو محذوفة في التقويم المصدري <strong>سوف</strong> تنعكس في التقويمات الأخرى.</p>
<p>تصدير التقويم يسمح لك بإنشاء نسخة احتياطية للأحداث، والتي يمكن استيرادها إلى تقاويم أخرى. التحديثات الجارية في التقويم المصدري <strong>لن تنعكس</strong> في التقاويم الأخرى.</p>';
$string['forcecalendartype'] = 'فرض التقويم';
$string['fri'] = 'جمع';
$string['friday'] = 'الجمعة';
$string['fullcalendar'] = 'التقويم الكامل';
$string['generateurlbutton'] = 'إجلب عنوان رابط التقويم';
$string['gotoactivity'] = 'إذهب إلى النشاط';
$string['gotocalendar'] = 'اذهب إلى التقويم';
$string['group'] = 'المجموعة';
$string['groupevent'] = 'حدث المجموعة';
$string['groupevents'] = 'أحداث المجموعة';
$string['hideeventtype'] = 'إخفاء أحداث {$a}';
$string['hourly'] = 'كل ساعة';
$string['importcalendar'] = 'استيراد التقويم';
$string['importcalendarexternal'] = 'أتريد استيراد تقويم خارجي؟';
$string['importcalendarfrom'] = 'الاستيراد من';
$string['importcalendarheading'] = 'استيراد التقويم...';
$string['importfromfile'] = 'ملف التقويم (.ics)';
$string['importfrominstructions'] = 'يرجى إما تقديم رابط للتقويم الخارجي أو رفع ملف.';
$string['importfromurl'] = 'رابط التقويم';
$string['invalideventtype'] = 'نوع الحدث الذي حددته غير صالح.';
$string['invalidtimedurationminutes'] = 'المدة بالدقائق التي أدخلتها غير صالحة الرجاء أدخل المدة بالدقائق أكبر من الصفر أو اختر بلا مدة';
$string['invalidtimedurationuntil'] = 'الوقت والتاريخ اللذان اخترتهما للمدة "حتى" هي قبل وقت "بدء الحدث". رجاءً صحح هذا قبل المتابعة.';
$string['iwanttoexport'] = 'صدّر';
$string['less'] = 'أقل';
$string['managesubscriptions'] = 'استيراد/تصدير التقاويم';
$string['manyevents'] = '{$a} أحداث';
$string['mon'] = 'اثن';
$string['monday'] = 'الاثنين';
$string['monthly'] = 'شهرياً';
$string['monthlyview'] = 'معاينة شهرية';
$string['monthnext'] = 'الشهر القادم';
$string['monthprev'] = 'الشهر السابق';
$string['monththis'] = 'هذا الشهر';
$string['more'] = 'المزيد';
$string['moreevents'] = '{$a} إضافية';
$string['namewithsource'] = '{$a->name} ({$a->source})';
$string['never'] = 'مطلقاً';
$string['newevent'] = 'حدث جديد';
$string['nocalendarsubscriptions'] = 'لا توجد لديك اشتراكات في التقويم بعد. هل تريد {$a}';
$string['notitle'] = 'بلا عنوان';
$string['noupcomingevents'] = 'لا توجد أحداث قادمة';
$string['oneevent'] = 'حدث 1';
$string['pollinterval'] = 'فترة التحديث';
$string['pollinterval_help'] = 'كم مرة ترغب أن يقوم التقويم بتحديث الأحداث الجديدة .';
$string['pref_lookahead'] = 'المعاينة المسبقة للأحداث القادمة';
$string['pref_lookahead_help'] = 'يحدد هذا أقصى عدد من الأيام قبل بدء الحدث المستقبلي ليتم عرضه بمثابة حدث قادم. الأحداث التي تبدأ خارج هذا المجال لن يتم عرضها في الأحداث القادمة. رجاءً لاحظ أنه <strong>لا توجد ضمانة</strong> لعرض كل الأحداث التي تبدأ ضمن هذا المجال؛ إن كان هناك الكثير منها (أكثر من الحد الأقصى) فعندها لن يتم عرض الأحداث الأبعد.';
$string['pref_maxevents'] = 'الحد الاقصى للأحداث القادمة';
$string['pref_maxevents_help'] = 'هذا الإعداد لضبط الحد الأقصى الذي يمكن عرضه من الأحداث القادمة. إذا اخترت رقماً كبيراً هنا من الممكن أن يأخذ عرض الأحداث القادمة مساحة كبيرة من شاشتك.';
$string['pref_persistflt'] = 'تذكر إعدادات المرشح';
$string['pref_persistflt_help'] = 'عن تفعيل هذا الخيار، سيتذكر مودل إعدادات مرشح الأحداث الأخيرة ويستعيدها تلقائياً عند كل تسجيل دخول.';
$string['pref_startwday'] = 'أول أيام الأسبوع';
$string['pref_startwday_help'] = 'ستظهر الأسابيع في التقويم على أنها تبدأ باليوم الذي تختاره هنا.';
$string['pref_timeformat'] = 'تنسيق عرض الوقت';
$string['pref_timeformat_help'] = 'يمكن الاختيار ما بين تنسيق الساعة بشكل 12 أو 24 ساعة. إذا اخترت "الافتراضي"، فسيتم الاختيار بشكل تلقائي وفقاً للغة التي تستعملها في الموقع.';
$string['preferences'] = 'التفضيلات';
$string['preferences_available'] = 'تفضيلاتك الشخصية';
$string['preferredcalendar'] = 'التقويم المفضل';
$string['privacy:metadata:calendar:event'] = 'يمكن لمكون التقويم تخزين تفاصيل أحداث تقويم المستخدم داخل النواة الفرعية للنظام.';
$string['privacy:metadata:calendar:event:description'] = 'وصف حدث التقويم';
$string['privacy:metadata:calendar:event:eventtype'] = 'نوع الحدث لحدث التقويم';
$string['privacy:metadata:calendar:event:name'] = 'اسم حدث التقويم';
$string['privacy:metadata:calendar:event:timeduration'] = 'مدة حدث التقويم';
$string['privacy:metadata:calendar:event:timestart'] = 'وقت بدء حدث التقويم';
$string['privacy:metadata:calendar:event_subscriptions'] = 'يمكن لمكون التقويم تخزين تفاصيل اشتراكات تقويم المستخدم ضمن النواة الفرعية للنظام.';
$string['privacy:metadata:calendar:event_subscriptions:eventtype'] = 'نوع الحدث لاشتراك التقويم';
$string['privacy:metadata:calendar:event_subscriptions:name'] = 'اسم اشتراك التقويم';
$string['privacy:metadata:calendar:event_subscriptions:url'] = 'عنوان الرابط الخاص باشتراك التقويم';
$string['privacy:metadata:calendar:preferences:calendar_savedflt'] = 'تفضيل المستخدم لطريقة عرض نوع حدث التقويم';
$string['recentupcoming'] = 'الحديثة والستين يوماً المقبلة';
$string['repeatedevents'] = 'الأحداث المتكررة';
$string['repeateditall'] = 'أيضاً نفذ التغييرات على أحداث {$a} الأخرى بهذا النمط المتكرر.';
$string['repeateditthis'] = 'طبق هذه التغييرات على هذا الحدث فقط';
$string['repeatevent'] = 'تكرار هذا الحدث';
$string['repeatnone'] = 'لا تكرار';
$string['repeatweeksl'] = 'التكرار أسبوعياً، عند إنشائها جميعاً';
$string['repeatweeksr'] = 'أحداث';
$string['requiresaction'] = '{$a} يتطلب إجراءً';
$string['sat'] = 'سبت';
$string['saturday'] = 'السبت';
$string['showeventtype'] = 'إظهار أحداث {$a}';
$string['shown'] = 'أُظهِر';
$string['site'] = 'الموقع';
$string['siteevent'] = 'حدث على مستوى الموقع';
$string['siteevents'] = 'أحداث الموقع';
$string['spanningevents'] = 'الأحداث القادمة';
$string['subscriptionname'] = 'اسم التقويم';
$string['subscriptionremoved'] = 'تمت إزالة اشتراك التقويم {$a}';
$string['subscriptions'] = 'الاشتراكات';
$string['subscriptionsource'] = 'مصدر الحدث: {$a}';
$string['subscriptionupdated'] = 'تم تحديث اشتراك التقويم \'{$a}\'';
$string['sun'] = 'أحد';
$string['sunday'] = 'الأحد';
$string['thu'] = 'خمس';
$string['thursday'] = 'الخميس';
$string['timeformat_12'] = '12 ساعة (ص/م)';
$string['timeformat_24'] = '24 ساعة';
$string['timeperiod'] = 'الفترة الزمنية';
$string['today'] = 'اليوم';
$string['todayplustitle'] = 'اليوم {$a}';
$string['tomorrow'] = 'غدًا';
$string['tt_deleteevent'] = 'حذف الحدث';
$string['tt_editevent'] = 'تحرير الحدث';
$string['tue'] = 'ثلا';
$string['tuesday'] = 'الثلاثاء';
$string['typecategory'] = 'حدث الفئة';
$string['typeclose'] = 'إغلاق الحدث';
$string['typecourse'] = 'حدث المساق';
$string['typedue'] = 'الحدث المستحق';
$string['typegradingdue'] = 'تقييم الحدث المستحق';
$string['typegroup'] = 'حدث المجموعة';
$string['typeopen'] = 'حدث مفتوح';
$string['typesite'] = 'حدث على مستوى الموقع';
$string['typeuser'] = 'حدث للمستخدم';
$string['upcomingevents'] = 'الأحداث القادمة';
$string['upcomingeventsfor'] = 'الأحداث القادمة لـ:';
$string['urlforical'] = 'عنوان رابط تصدير iCalendar، من أجل الاشتراك في التقويم.';
$string['user'] = 'المستخدم';
$string['userevent'] = 'حدث المستخدم';
$string['userevents'] = 'أحداث المستخدمين';
$string['viewupcomingactivitiesdue'] = 'معاينة النشاطات القادمة المستحقة';
$string['wed'] = 'أرب';
$string['wednesday'] = 'الأربعاء';
$string['weekly'] = 'أسبوعياً';
$string['weeknext'] = 'الأسبوع القادم';
$string['weekthis'] = 'هذا الأسبوع';
$string['when'] = 'عند';
$string['whendate'] = 'متى: {$a}';
$string['yesterday'] = 'أمس';
$string['youcandeleteallrepeats'] = 'هذا الحدث هو جزء من سلسلة أحداث متكررة. تستطيع حذف هذا الحدث فقط، أو كل أحداث {$a} في هذه السلسة فوراً.';
$string['yoursubscriptions'] = 'التقاويم المستوردة';
