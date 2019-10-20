<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* آدرس اصلی برنامه */
$config['base_url'] = 'http://localhost:8080/Majless/';
//$config['base_url'] = 'http://majles11.com/';
$config['index_page'] = '';
$config['uri_protocol'] = 'REQUEST_URI';
$config['url_suffix'] = '';
$config['language'] = 'persian';
$config['charset'] = 'UTF-8';
$config['enable_hooks'] = FALSE;
$config['subclass_prefix'] = 'MY_';
$config['composer_autoload'] = FALSE;
/* کاراکتر های مجاز در آدرس بار سایت */
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-()';
$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';
$config['allow_get_array'] = TRUE;
$config['log_threshold'] = 0;
$config['log_path'] = '';
$config['log_file_extension'] = '';
$config['log_file_permissions'] = 0644;
$config['log_date_format'] = 'Y-m-d H:i:s';
$config['error_views_path'] = '';
$config['cache_path'] = '';
$config['cache_query_string'] = FALSE;
$config['encryption_key'] = 'bpYzH4olFrJDHuvihqEM0AIdotzljyuQ';
$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'ci_session';
$config['sess_expiration'] = 144000;
//$config['sess_save_path'] = NULL;
$config['sess_save_path'] = sys_get_temp_dir();
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;
$config['cookie_prefix'] = '';
$config['cookie_domain'] = '';
$config['cookie_path'] = '/';
$config['cookie_secure'] = FALSE;
$config['cookie_httponly'] = TRUE;
$config['standardize_newlines'] = FALSE;

$config['global_xss_filtering'] = FALSE;
$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = 'csrf_majless';
$config['csrf_cookie_name'] = 'csrf_cookie_majless';
$config['csrf_expire'] = 144000;
$config['csrf_regenerate'] = TRUE;
$config['csrf_exclude_uris'] = array();
$config['compress_output'] = FALSE;
$config['time_reference'] = 'local';
$config['rewrite_short_tags'] = FALSE;
$config['proxy_ips'] = '';
/*******************************************/
/* تصویر لوگو پیش فرض برای تمامی تصاویر برنامه */
$config['defaultImage'] = $config['base_url'] . 'assets/ui/v3/images/profile.jpg';
$config['gifLoader'] = $config['base_url'] . 'assets/ui/v4/images/loader.gif';
/* عنوان پیش فرض سایت */
$config['defaultPageTitle'] = 'مجلس - ';
/* تعداد سطر های پیش فرض جهت نمایش در پتل ها */
$config['defaultPageSize'] = 6;
/* مسیر آپلود فایل های کاربران برای نمایندگی */
$config['upload_path'] = './uploads/';
/* وضعیت های نامزد انتخاباتی */
$config['EnumCandidateStatus'] = array(
    'CandidateRegister' => 'ثبت نام اولیه',
    'CandidateResumeCompleted' => 'تکمیل رزومه',
    'CandidateResumeAccepted' => 'تایید رزومه',
    'CandidateResumeRejected' => 'رد رزومه',
    'CandidateHasNotContinueCondition' => 'عدم احراز سایر شرایط',
    'CandidateHasContinueCondition' => 'در انتظار نمره دهی',
    'CandidateResumeMarked' => 'امتیاز بندی رزومه',
    'CandidateExamFirstStep' => 'آزمون مرحله اول',
    'CandidateExamFirstStepReject' => 'عدم موفقیت در آزمون مرحله اول',
    'CandidateExamSecondStep' => 'آزمون مرحله دوم',
    'CandidateExamSecondStepReject' => 'عدم موفقیت در آزمون مرحله دوم',
    'CandidateAssessment' => 'کانون ارزیابی',
    'CandidateAccepted' => 'تایید نهایی'
);
$config['EnumExamType'] = array(
    'FirstStep' => 'مرحله اول',
    'SecondStep' => 'مرحله دوم',
    'Evaluation' => 'کانون ارزیابی'
);
$config['api'] = array(
    'SMS' => 'http://new.moarefin.ir:8080/api/Messages',
    'PersonalInformationWeb' => 'http://new.moarefin.ir:8080/api/PersonalInformationWeb?',
    'MilitaryWeb' => 'http://new.moarefin.ir:8080/api/MilitaryWeb?',
    'PoliticalRecordWeb' => 'http://new.moarefin.ir:8080/api/PoliticalRecordWeb?',
    'ResearchSkillWeb' => 'http://new.moarefin.ir:8080/api/ResearchSkillWeb?',
    'OtherSkillWeb' => 'http://new.moarefin.ir:8080/api/OtherSkillWeb?',
    'LegalConditionsWeb' => 'http://new.moarefin.ir:8080/api/LegalConditionsWeb?',
    'EducationalInfoReportWeb' => 'http://new.moarefin.ir:8080/api/EducationalInfoReportWeb?',
    'JobHistoryWeb' => 'http://new.moarefin.ir:8080/api/JobHistoryWeb?',
);
$config['EnumResumeProfile'] = array(
    'Gender' => array('Male' => 'آقا', 'Female' => 'خانم'),
    'MaritalStatus' => array('Married' => 'متاهل', 'Single' => 'مجرد'),
    'Months' => array('Married' => 'متاهل', 'Single' => 'مجرد'),
    'Religion' => array('Undefined' => 'نامشخص', 'IslamShia' => 'اسلام-شیعه', 'IslamSoni' => 'اسلام-سنی', 'Cristian' => 'مسیحی', 'Jush' => 'یهودی', 'Zartosht' => 'زرتشت', 'Other' => 'سایر'),
    'SkillLevel' => array(
        'Beginner' => 'مبتدی',
        'SemiProfessional' => 'نیمه حرفه ای',
        'Professional' => 'حرفه ای'
    ),
    'SkillLearnType' => array('Experimental' => 'تجربی عملی', 'TrainingCourse' => 'دوره آموزشی'),
    'ShamsiMonths' => array(
        'Farvardin' => 'فروردین',
        'Ordibehsht' => 'اردیبهشت',
        'Khordad' => 'خرداد',
        'Tir' => 'تیر',
        'Mordad' => 'مرداد',
        'Shahrivar' => 'شهریور',
        'Mehr' => 'مهر',
        'Aban' => 'آبان',
        'Azar' => 'آذر',
        'Dey' => 'دی',
        'Bahman' => 'بهمن',
        'Esfand' => 'اسفند',
    ),
    'ArticleLevelType' => array(
        'Scopus' => 'علمی تخصصی',
        'ScientificTaroviji' => 'علمی ترویجی',
        'ScientificResearch' => 'علمی پژوهشی',
        'ISC' => 'ISC',
        'ISI' => 'ISI',
    ),
    'TranslateType' => array(
        'Article' => 'مقاله',
        'Book' => 'کتاب',
    ),
    'ConferenceLevelType' => array(
        'International' => 'بین المللی',
        'Internal' => 'داخلی',
    ),
    'AcceptanceOfferType' => array(
        'Lecture' => 'سخنرانی',
        'Poster' => 'پوستر',
        'PrintArticle' => 'چاپ مقاله',
        'AbstractPrinting' => 'چاپ چکیده',
    ),
);
/* استان پیش فرض تهران است */
$config['defaultStateId'] = 8;