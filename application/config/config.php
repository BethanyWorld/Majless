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
$config['defaultPageTitle'] = 'جنبش از ما - ';
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
$config['Badges'] = array(
    'GoldenMerit' => 'نشان شایستگی طلایی',
    'SilverMerit' => 'نشان شایستگی نقره ای',
    'GoldenTransparency' => 'نشان شفافیت طلایی',
    'SilverTransparency' => 'نشان شفافیت نقره ای',
    'Obligation' => 'نشان تعهدنامه'
);
$config['api'] = array(
    'SMS' => $config['base_url'].'Home/sendSMS',
    'SMS-OLD' => 'http://new.moarefin.ir:8080/api/Messages',
    'PersonalInformationWeb' => 'http://new.moarefin.ir:8080/api/PersonalInformationWeb?',
    'MilitaryWeb' => 'http://new.moarefin.ir:8080/api/MilitaryWeb?',
    'PoliticalRecordWeb' => 'http://new.moarefin.ir:8080/api/PoliticalRecordWeb?',
    'ResearchSkillWeb' => 'http://new.moarefin.ir:8080/api/ResearchSkillWeb?',
    'OtherSkillWeb' => 'http://new.moarefin.ir:8080/api/OtherSkillWeb?',
    'LegalConditionsWeb' => 'http://new.moarefin.ir:8080/api/LegalConditionsWeb?',
    'EducationalInfoReportWeb' => 'http://new.moarefin.ir:8080/api/EducationalInfoReportWeb?',
    'JobHistoryWeb' => 'http://new.moarefin.ir:8080/api/JobHistoryWeb?'
);
$config['EnumResumeProfile'] = array(
    'Gender' => array('Male' => 'آقا', 'Female' => 'خانم'),
    'MaritalStatus' => array('Married' => 'متاهل', 'Single' => 'مجرد'),
    'Months' => array('Married' => 'متاهل', 'Single' => 'مجرد'),
    'Religion' => array(
        'Undefined' => 'نامشخص',
        'IslamShia' => 'اسلام-شیعه',
        'IslamSoni' => 'اسلام-سنی',
        'Cristian' => 'مسیحی',
        'Jush' => 'یهودی',
        'Zartosht' => 'زرتشت',
        'Other' => 'سایر'
    ),
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
        'Esfand' => 'اسفند'
    ),
    'ArticleLevelType' => array(
        'Scopus' => 'علمی تخصصی',
        'ScientificTaroviji' => 'علمی ترویجی',
        'ScientificResearch' => 'علمی پژوهشی',
        'ISC' => 'ISC',
        'ISI' => 'ISI'
    ),
    'TranslateType' => array(
        'Article' => 'مقاله',
        'Book' => 'کتاب'
    ),
    'ConferenceLevelType' => array(
        'International' => 'بین المللی',
        'Internal' => 'داخلی'
    ),
    'AcceptanceOfferType' => array(
        'Lecture' => 'سخنرانی',
        'Poster' => 'پوستر',
        'PrintArticle' => 'چاپ مقاله',
        'AbstractPrinting' => 'چاپ چکیده'
    ),
    /* For Candidate Academic Background */
    'AcademicStudyStatus' => array(
        'Student' => 'دانشجو',
        'Graduated' => 'فارغ التحصیل'
    ),
    'CandidateGrade' => array(
        'ZirDiplom' => 'زیر دیپلم',
        'Diplom' => 'دیپلم',
        'Kardani' => 'کاردانی',
        'Karshenasi' => 'کارشناسی',
        'KarshenasiArshad' => 'کارشناسی ارشد',
        'KarshenasiArshadPeyvasteh' => 'کارشناسی ارشد پیوسته',
        'DoctoryHerfei' => 'دکترای حرفه ای',
        'DoctoryTakhasosi' => 'دکترای تخصصی',
        'FogDoctory' => 'فوق دکتری',
        'Hozeh1' => 'حوزه سطح یک',
        'Hozeh2' => 'حوزه سطح دو',
        'Hozeh3' => 'حوزه سطح سه',
        'Hozeh4' => 'حوزه سطح چهار'
    ),
    'CandidateUniversityLevelType' => array(
        'PayamNooruniversityLevelType' => ' پیام نور',
        'SeminaryLevelType' => ' حوزه علمیه ',
        'AbroadLevelType' => ' خارج از کشور ',
        'AzadUniversityLevelType' => ' دانشگاه آزاد ',
        'GovernmentdailyLevelType' => ' دولتی - روزانه',
        'GovernmentnightLevelType' => ' دولتی - شبانه',
        'VirtualgovernmentLevelType' => 'دولتی - مجازی',
        'GovernmentCampus' => ' دولتی - پردیس خودگردان ',
        'AppliedScienceLevelType' => ' علمی کاربردی ',
        'profitLevelType' => ' غیر انتفاعی ',
        'Others' => 'سایر'
    ),
    'CandidateSchoolMajor' => array(
        'Ensani' => 'انسانی',
        'Tajrobi' => 'تجربی',
        'Riazi' => 'تجربی',
        'Fani' => 'فنی',
        'Maref' => 'معارف اسلامی',
        'Kardanesh' => 'کارودانش'
    ),
    'CandidateDepartment' => array(
        'VeterinaryMedicineDepartment' => 'دامپزشکی',
        'ForeignLanguagesDepartment' => ' زبان های خارجی',
        'HumanitiesDepartment' => 'علوم انسانی ',
        'ScienceDepartment' => ' علوم پایه ',
        'TechnicalEngineeringDepartment' => ' فنی مهندسی ',
        'ArtDepartment' => 'هنر',
        'MedicalDepartment' => 'پزشکی',
        'AgricultureNaturalResourcesDepartment' => 'کشاورزی و منابع طبیعی'
    ),
    /* Social Caltural Enums */
    'CandidateActivityFieldType' => array(
        'Charity' => 'انجمن خیریه',
        'Mobilization' => 'بسیج',
        'University' => 'دانشگاه',
        'Semen' => 'سمن',
        'Councils' => 'شورایاری',
        'CulturalCenter' => 'فرهنگسرا',
        'JihadistActivities' => 'فعالیت های جهادی',
        'Schools' => 'مدارس',
        'TheMosque' => 'مسجد',
        'RedCrescent' => 'هلال احمر',
        'ReligiousCommittees' => 'هئیت های مذهبی',
        'Others' => 'سایر'
    ),
    'CandidateMemberShipType' => array(
        'Official' => 'رسمی',
        'Voluntary' => 'داوطلبانه'
    ),
    'CandidateBasijType' => array(
        'Urban' => 'شهری',
        'schools' => 'مدارس',
        'University' => 'دانشگاه',
        'Others' => 'سایر'
    ),
    'CandidateMobilMembershipType' => array(
        'Normal' => 'عادی',
        'Active' => 'فعال',
        'Kadr' => 'کادر',
        'Others' => 'سایر'
    ),
    /* Military Enums */
    'CandidateMilitaryStatus' => array(
        'Exempt' => 'معاف',
        'CardService' => 'دارای کارت پایان خدمت',
        'Serving' => 'درحال خدمت',
        'Included' => 'مشمول',
        'BuyService' => 'خرید خدمت'
    ),
    'CandidateExemptTitle' => array(
        'Educational' => 'تحصیلی',
        'Medical' => 'پزشکی',
        'Guarantee' => 'کفالت',
        'Others' => 'سایر'
    ),
    'CandidateMilitaryEndArea' => array(
        'Army' => 'ارتش',
        'Corps' => 'سپاه',
        'Police' => 'نیروی انتظامی',
        'DepartmentDefense' => 'وزارت دفاع',
        'Others' => 'سایر'
    ),
    /* Politic Enums */
    'CandidatePoliticActivityType' => array(
        'Group' => 'حزب',
        'CandidatesCampaign' => 'ستاد های انتخاباتی نامزدها'
//        'SupervisoryBoard' => ' نظارت و اجرایی ستاد انتخابات',
//        'Media' => 'رسانه',
//        'Others' => 'سایر'
    ),
    'CandidatePoliticElectionType' => array(
        'President' => 'ریاست جمهوری',
        'Parliament' => 'مجلس',
        'CouncilExperts' => 'مجلس خبرگان',
        'CityCouncil' => 'شورای شهر'
    ), 
    'CandidateHeadquarterActivityTitle' => array(
        'SupervisoryBoard' => ' نطارت شورای نگهبان',
        'ExecutiveCommittee' => 'هیئت اجرایی وزارت کشور'
    ),
    'CandidateMediaType' => array(
        'Voice' => 'صدا و سیما',
        'Journals' => 'سایت خبری',
        'NewSite' => 'شبکه اجتماعی',
        'SocialNetwork' => 'نگهبان',
        'Others' => 'سایر'
    ),
    /* For Finance Info */
    'RealEstateType'=> array(
        'Residential' => 'مسکونی',
        'Official' => 'اداری',
        'Commercial' => 'تجاری',
        'Industrial' => 'صنعتی',
        'Agriculture' => 'کشاورزی'
    ),
    'OwnershipType' => array(
        'Buy' => 'خرید',
        'Inheritance' => 'ارث',
        'gift' => 'هدیه / هبه',
        'Dowry' => 'مهریه',
        'Compensation' => 'جبران خسارت'
    ),
    'Extent' => array(
        'SquareMeters' => 'متر مربع',
        'Hektar' => 'هکتار'
    ),
    'TypeOfVehicle' => array(
        'Motorcycle' => 'موتور سیکلت',
        'Bike' => 'دوچرخه',
        'Vehicles' => 'خودرو سبک',
        'HeavyVehicles' => 'خودرو سنگین',
        'Other' => 'سایر',
    ),
    'GoodsType' => array(
        'Decorative' => 'لوکس یا تزئینی',
        'Coins' => 'مسکوکات',
        'Jewelry' => 'شمش/طلا/جواهر',
        'PreciousMetals' => 'فلزات قیمتی',
        'ForeignCurrency' => 'ارز خارجی',
        'Livestock' => 'دام و طیور',
        'OtherCommercialGoods' => 'سایر کالاهای تجاری'
    ),
    'FeeType' => array(
        'Book' => 'کتاب',
        'Invention' => 'اختراع / اکتشاف',
        'Art' => 'اثر هنری'
    )
);
/* استان پیش فرض تهران است */
$config['defaultStateId'] = 8;