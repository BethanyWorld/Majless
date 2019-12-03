<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ui/ModelQuery');
    }

    public function index(){
        /*$json = '{ "_id" : { "$binary" : "0CSsLVgWlUayO+rku8noNw==", "$type" : "03" }, "Code" : null, "Name" : "حسین رمضانی", "RegistrationDateTime" : { "$date" : "2019-09-24T15:54:28.253+0000" }, "Nationality" : { "Name" : "ایران" }, "NationalCode" : { "Code" : "1292650834", "IsForigenPersonAccepted" : true }, "PassportNo" : null, "BirthCertificateNo" : null, "CertificationCity" : { "_t" : "City", "Name" : null, "State" : { "ProvincePart" : { "Province" : { "Country" : { "Name" : "ایران" }, "Name" : null }, "Name" : null }, "Name" : null } }, "BirthDate" : { "$date" : "1987-09-04T00:00:00.000+0000" }, "BirthCity" : { "_t" : "City", "Name" : null, "State" : { "ProvincePart" : { "Province" : { "Country" : { "Name" : "ایران" }, "Name" : "اصفهان" }, "Name" : "اصفهان " }, "Name" : null } }, "FullName" : { "FirstName" : "حسین", "LastName" : "رمضانی" }, "PreLastName" : null, "FatherName" : "هوشنگ", "Gender" : 1, "Allegiance" : null, "Religion" : 1, "MaritalStatus" : 2, "Weight" : 0, "Height" : 0, "Email" : null, "Address" : { "City" : { "_t" : "City", "Name" : "تهران", "State" : { "ProvincePart" : { "Province" : { "Country" : { "Name" : "ایران" }, "Name" : "تهران" }, "Name" : "تهران" }, "Name" : "مرکزی" } }, "ResidenceAddress" : "خ ولیعصر" }, "TermOfResidence" : 0, "PostalCode" : null, "PhoneNumbers" : [ "02188527014" ], "CellPhoneNumbers" : [ { "_id" : "09131653476", "IsPrimary" : true } ], "CriminalHistory" : null, "MilitaryStatus" : { "_t" : "ExemptOtherSubcomponent", "_id" : { "$binary" : "xMgwSOqFT0iG5preVMoNTA==", "$type" : "03" }, "CreateDateTime" : { "$date" : "2019-09-24T16:06:22.222+0000" }, "LastModificationDateTime" : { "$date" : "2019-09-24T16:06:22.222+0000" }, "Other" : "مواردخاص" }, "AcademyTypes" : [  ], "Certificates" : [  ], "JobHistories" : [ { "_id" : { "$binary" : "4MFgiW5sBUSRtcSjOnCX3g==", "$type" : "03" }, "JobTitle" : "مدیرعامل", "CategoriedJobTitle" : { "_t" : "CategoriedJobTitle", "Code" : 0 }, "OrganizationName" : "پتروشیمی پتروانتخاب اصفهان", "InsuranceHistory" : 0, "CutoffReason" : "", "EmploymentType" : 0, "CreateDateTime" : { "$date" : "2019-09-24T16:06:56.973+0000" }, "LastModificationDateTime" : { "$date" : "2019-09-24T16:06:56.973+0000" }, "BeginMonth" : 0, "BeginYear" : 0, "EndMonth" : 0, "EndYear" : 0 } ], "EducationalInformation" : [ { "_id" : { "$binary" : "URvsDw0pSkmHHrpEJaCchg==", "$type" : "03" }, "EducationalAttainment" : { "_t" : "EducationalAttainment", "SubcomponentType" : 12 }, "AcademicGrade" : 0.0, "AcademyType" : { "_t" : "AcademyType", "SubcomponentType" : 1, "UniversityName" : "پژوهشکده امام خمینی" }, "Department" : 4, "Science" : 35, "OtherScience" : null, "Studying" : false, "CreateDateTime" : { "$date" : "2019-09-24T16:05:58.893+0000" }, "LastModificationDateTime" : { "$date" : "2019-09-24T16:05:58.893+0000" }, "EnteringYear" : "", "ExitYear" : "" }, { "_id" : { "$binary" : "Id1p6j7jiUa4zbya8IgkJA==", "$type" : "03" }, "EducationalAttainment" : { "_t" : "EducationalAttainment", "SubcomponentType" : 14 }, "AcademicGrade" : 0.0, "AcademyType" : { "_t" : "AcademyType", "SubcomponentType" : 1, "UniversityName" : "پژوهشکده امام خمینی" }, "Department" : 4, "Science" : 35, "OtherScience" : "", "Studying" : false, "CreateDateTime" : { "$date" : "2019-09-24T16:05:58.893+0000" }, "LastModificationDateTime" : { "$date" : "2019-09-24T16:05:58.893+0000" }, "EnteringYear" : "", "ExitYear" : "" } ], "Health" : { "_t" : "Healthy", "CreateDateTime" : { "$date" : "2019-09-24T15:54:28.253+0000" }, "LastModificationDateTime" : { "$date" : "2019-09-24T15:54:28.253+0000" } }, "ArtisticSkills" : [  ], "SocialActivityHistories" : [  ], "VocationalSkills" : [  ], "ComputerSkills" : [  ], "SportSkills" : [  ], "LanguageSkills" : [  ], "ResearchSkills" : [  ], "QuranSkills" : [  ], "OtherSkills" : [ { "_id" : { "$binary" : "9AV4XfRO10WMGDLVbpxNyw==", "$type" : "03" }, "SkillNameType" : "تحلیلی/ اجرایی", "SkillLevel" : 2, "LearningType" : 1, "CreateDateTime" : { "$date" : "2019-09-24T16:09:45.336+0000" }, "LastModificationDateTime" : { "$date" : "2019-09-24T16:09:45.336+0000" } } ], "PoliticalRecords" : [  ], "JobFeatures" : null, "sendSms" : false, "UserTypes" : [ 1, 2, 3 ], "sendSmsDateTime" : { "$date" : "0001-01-01T00:00:00.000+0000" }, "ImageId" : { "$binary" : "j2Se3//cGEKWWRoG1+9/Qw==", "$type" : "03" }, "CreateDateTime" : { "$date" : "2019-09-24T15:54:28.253+0000" }, "LastModificationDateTime" : { "$date" : "2019-09-24T16:02:44.514+0000" }, "PersonnelCode" : null, "NativeLanguage" : null, "LastReadDateTime" : { "$date" : "0001-01-01T00:00:00.000+0000" }, "FatherBirthplace" : { "_t" : "City", "Name" : "", "State" : { "ProvincePart" : { "Province" : { "Country" : { "Name" : "ایران" }, "Name" : "خوزستان" }, "Name" : "آبادان" }, "Name" : "" } }, "MotherBirthplace" : { "_t" : "City", "Name" : "", "State" : { "ProvincePart" : { "Province" : { "Country" : { "Name" : "ایران" }, "Name" : "اصفهان" }, "Name" : "اصفهان " }, "Name" : "" } }, "Constituency" : { "_t" : "City", "Name" : "", "State" : { "ProvincePart" : { "Province" : { "Country" : { "Name" : "ایران" }, "Name" : "اصفهان" }, "Name" : "اصفهان " }, "Name" : "" } } }
';
        $input = json_decode($json , true);
        $arr['CandidateFirstName'] = $input['FullName']['FirstName'];
        $arr['CandidateLastName'] = $input['FullName']['LastName'];
        $ncode = $input['NationalCode']['Code'];
        if($ncode == null){
            $ncode = '0600000044';
        }
        $arr['CandidateNationalCode']= $ncode;
        $arr['CandidatePhone'] = $input['CellPhoneNumbers'][0]['_id'];
        $arr['CandidateScore'] = 0;
        $arr['CandidateStateId'] = 8;
        $arr['CandidateCityId'] = 548;
        $arr['CandidateElectionId'] = 59;
        $arr['CandidatePassword'] = md5($arr['CandidatePhone']);
        $arr['CandidateStatus'] = 'CandidateRegister';
        var_dump($arr);
        echo "<hr>";
        var_dump($input);
        $this->db->insert('candidate' , $arr);*/


        $organizationDB = $this->load->database('blogDB', TRUE);
        $uploadDir = base_url('blog/wp-content/uploads');
        $sql = " SELECT
        p1.*,
        wm2.meta_value
    FROM 
        wp_posts p1
    LEFT JOIN 
        wp_postmeta wm1
        ON (
            wm1.post_id = p1.id 
            AND wm1.meta_value IS NOT NULL
            AND wm1.meta_key = \"_thumbnail_id\"              
        )
    LEFT JOIN 
        wp_postmeta wm2
        ON (
            wm1.meta_value = wm2.post_id
            AND wm2.meta_key = \"_wp_attached_file\"
            AND wm2.meta_value IS NOT NULL  
        )
    WHERE
        p1.post_status=\"publish\" 
        AND p1.post_type=\"post\"
    ORDER BY 
        p1.post_date DESC";
        $posts = $organizationDB->query($sql)->result_array();

        $data['noImg'] = $this->config->item('defaultImage');
        $data['pageTitle'] = $this->config->item('defaultPageTitle').' صفحه اصلی';
        $data['sidebar_map'] = $this->load->view('ui/v3/about_us/sidebar_map', NULL, TRUE);
        $data['sidebar_pages'] = $this->load->view('ui/v3/about_us/sidebar_pages', NULL, TRUE);
        $data['posts']  = $posts;

        $this->load->view('ui/v3/static/header', $data);
        $this->load->view('ui/v3/home/index' , $data);
        $this->load->view('ui/v3/home/index_css');
        $this->load->view('ui/v3/home/index_js' , $data);
        $this->load->view('ui/v3/static/footer', $data);
    }
}
