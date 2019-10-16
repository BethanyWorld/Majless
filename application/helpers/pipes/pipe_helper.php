<?phpfunction seoUrl($url){    return str_ireplace(" ", "-", $url);}function setInputValue($value){    echo "value='".$value."'";}function setOptionSelected($value , $compare){    if($value == $compare) echo "selected";}function isCheckBoxChecked($value , $compare){    if($value == $compare) echo "checked";}function image_url($url){    return base_url('uploads/') . $url;}function formatDate($date){    return "<span style='direction: ltr;'>" . explode(" ", $date)[0] . "</span>";}/* For Panels*/function contactFormSubject($subject){    switch ($subject) {        case 'PeopleReport':            return "گزارش مردمی";            break;        case 'CS':            return "انتقاد یا پیشنهاد";            break;        case 'Other':            return "سایر";            break;    }}function contactFormVisited($visited){    switch ($visited) {        case 0:            return "<span class='label label-danger'>مشاهده نشده</span>";            break;        case 1:            return "<span class='label label-success'>مشاهده شده</span>";            break;    }}function contentStatus($status){    switch ($status) {        case 0:            return "<label class='label label-default'>در صف انتظار</label>";            break;        case 1:            return "<label class='label label-success'>تایید شده</label>";            break;        case -1:            return "<label class='label label-danger'>رد شده</label>";            break;    }}/* End For Panels*/function candidateRoles($roles){    switch ($roles) {        case 'Candidate':            return "<label class='label label-default'>نامزد انتخاباتی</label>";            break;        case 'Elite':            return "<label class='label label-default'>نخبه</label>";            break;        case 'Sponsor':            return "<label class='label label-default'>حامی</label>";            break;    }}function candidateStatus($status){    switch ($status) {        case 'CandidateRegister':            return "<label class='label label-default' style='background: #ffae00;'>ثبت نام اولیه</label>";            break;        case 'CandidateResumeCompleted':            return "<label class='label label-default' style='background: #ff8d7b;'>تکمیل رزومه</label>";            break;        case 'CandidateResumeAccepted':            return "<label class='label label-default' style='background: #08e609;'>تایید رزومه</label>";            break;        case 'CandidateResumeRejected':            return "<label class='label label-default' style='background: red;'>رد رزومه</label>";            break;        case 'CandidateHasNotContinueCondition':            return "<label class='label label-default' style='background: #ff545d;'>عدم احراز سایر شرایط</label>";            break;        case 'CandidateHasContinueCondition':            return "<label class='label label-default' style='background: #ff545d;'>در انتظار نمره دهی</label>";            break;        case 'CandidateResumeMarked':            return "<label class='label label-default' style='background: #53a5ff;'>امتیاز بندی رزومه</label>";            break;        case 'CandidateExamFirstStep':            return "<label class='label label-default' style='background: #00a633;'>آزمون مرحله اول</label>";            break;        case 'CandidateExamFirstStepReject':            return "<label class='label label-danger' style='background: #ff545d;'>عدم موفقیت در آزمون مرحله اول</label>";            break;        case 'CandidateExamSecondStep':            return "<label class='label label-default' style='background: #005116;'>آزمون مرحله دوم</label>";            break;        case 'CandidateExamSecondStepReject':            return "<label class='label label-danger' style='background: #ff545d;'>عدم موفقیت در آزمون مرحله دوم</label>";            break;        case 'CandidateAssessment':            return "<label class='label label-danger'>کانون ارزیابی</label>";            break;        case 'CandidateAccepted':            return "<label class='label label-default' style='background: #ffeb00;'>معرفی در فهرست نمایندگان</label>";            break;        case 'CandidateAssessmentReject':            return "<label class='label label-danger' style='background: #ff545d;'>عدم موفقیت در آزمون کانون ارزیابی</label>";            break;    }}function candidateExamStatus($status){    switch ($status) {        case 'Pend':            return "<label class='label label-default'>رزور شده</label>";            break;        case 'Absence':            return "<label class='label label-danger'>ثبت غیبت</label>";            break;        case 'Presence':            return "<label class='label label-info'>ثبت حضور</label>";            break;        case 'Done':            return "<label class='label label-success'>تایید شده</label>";            break;    }}function generateCandidateStatus($status){    switch ($status) {        case 'CandidateRegister':            ?>            <li class="c-progress-steps__step done">ثبت نام اولیه</li>            <li class="c-progress-steps__step current">تکمیل رزومه</li>            <li class="c-progress-steps__step">تایید روزمه</li>            <li class="c-progress-steps__step">تایید شرایط قانونی</li>            <li class="c-progress-steps__step">امتیاز بندی رزومه</li>            <li class="c-progress-steps__step">آزمون مرحله اول</li>            <li class="c-progress-steps__step">آزمون مرحله دوم</li>            <li class="c-progress-steps__step">کانون ارزیابی</li>            <li class="c-progress-steps__step">معرفی در فهرست نمایندگان</li>            <?php            break;        case 'CandidateResumeCompleted':            ?>            <li class="c-progress-steps__step done">ثبت نام اولیه</li>            <li class="c-progress-steps__step done">تکمیل رزومه</li>            <li class="c-progress-steps__step current">تایید روزمه</li>            <li class="c-progress-steps__step">تایید شرایط قانونی</li>            <li class="c-progress-steps__step">امتیاز بندی رزومه</li>            <li class="c-progress-steps__step">آزمون مرحله اول</li>            <li class="c-progress-steps__step">آزمون مرحله دوم</li>            <li class="c-progress-steps__step">کانون ارزیابی</li>            <li class="c-progress-steps__step">معرفی در فهرست نمایندگان</li>            <?php            break;        case 'CandidateResumeAccepted':        case 'CandidateHasNotContinueCondition':            ?>            <li class="c-progress-steps__step done">ثبت نام اولیه</li>            <li class="c-progress-steps__step done">تکمیل رزومه</li>            <li class="c-progress-steps__step done">تایید روزمه</li>            <li class="c-progress-steps__step current">تایید شرایط قانونی</li>            <li class="c-progress-steps__step">امتیاز بندی رزومه</li>            <li class="c-progress-steps__step">آزمون مرحله اول</li>            <li class="c-progress-steps__step">آزمون مرحله دوم</li>            <li class="c-progress-steps__step">کانون ارزیابی</li>            <li class="c-progress-steps__step">معرفی در فهرست نمایندگان</li>            <?php            break;        case 'CandidateHasContinueCondition':            ?>            <li class="c-progress-steps__step done">ثبت نام اولیه</li>            <li class="c-progress-steps__step done">تکمیل رزومه</li>            <li class="c-progress-steps__step done">تایید روزمه</li>            <li class="c-progress-steps__step done">تایید شرایط قانونی</li>            <li class="c-progress-steps__step current">امتیاز بندی رزومه</li>            <li class="c-progress-steps__step">آزمون مرحله اول</li>            <li class="c-progress-steps__step">آزمون مرحله دوم</li>            <li class="c-progress-steps__step">کانون ارزیابی</li>            <li class="c-progress-steps__step">معرفی در فهرست نمایندگان</li>            <?php            break;        case 'CandidateResumeMarked':            ?>            <li class="c-progress-steps__step done">ثبت نام اولیه</li>            <li class="c-progress-steps__step done">تکمیل رزومه</li>            <li class="c-progress-steps__step done">تایید روزمه</li>            <li class="c-progress-steps__step done">تایید شرایط قانونی</li>            <li class="c-progress-steps__step done">امتیاز بندی رزومه</li>            <li class="c-progress-steps__step current">آزمون مرحله اول</li>            <li class="c-progress-steps__step">آزمون مرحله دوم</li>            <li class="c-progress-steps__step">کانون ارزیابی</li>            <li class="c-progress-steps__step">معرفی در فهرست نمایندگان</li>            <?php            break;        case 'CandidateExamFirstStep':            ?>            <li class="c-progress-steps__step done">ثبت نام اولیه</li>            <li class="c-progress-steps__step done">تکمیل رزومه</li>            <li class="c-progress-steps__step done">تایید روزمه</li>            <li class="c-progress-steps__step done">امتیاز بندی رزومه</li>            <li class="c-progress-steps__step done">آزمون مرحله اول</li>            <li class="c-progress-steps__step current">آزمون مرحله دوم</li>            <li class="c-progress-steps__step">کانون ارزیابی</li>            <li class="c-progress-steps__step">معرفی در فهرست نمایندگان</li>            <?php            break;        case 'CandidateExamSecondStep':            ?>            <li class="c-progress-steps__step done">ثبت نام اولیه</li>            <li class="c-progress-steps__step done">تکمیل رزومه</li>            <li class="c-progress-steps__step done">تایید روزمه</li>            <li class="c-progress-steps__step done">امتیاز بندی رزومه</li>            <li class="c-progress-steps__step done">آزمون مرحله اول</li>            <li class="c-progress-steps__step done">آزمون مرحله دوم</li>            <li class="c-progress-steps__step current">کانون ارزیابی</li>            <li class="c-progress-steps__step">معرفی در فهرست نمایندگان</li>            <?php            break;        case 'CandidateAssessment':            ?>            <li class="c-progress-steps__step done">ثبت نام اولیه</li>            <li class="c-progress-steps__step done">تکمیل رزومه</li>            <li class="c-progress-steps__step done">تایید روزمه</li>            <li class="c-progress-steps__step done">امتیاز بندی رزومه</li>            <li class="c-progress-steps__step done">آزمون مرحله اول</li>            <li class="c-progress-steps__step done">آزمون مرحله دوم</li>            <li class="c-progress-steps__step done">کانون ارزیابی</li>            <li class="c-progress-steps__step current">معرفی در فهرست نمایندگان</li>            <?php            break;        case 'CandidateAccepted':            ?>            <li class="c-progress-steps__step done">ثبت نام اولیه</li>            <li class="c-progress-steps__step done">تکمیل رزومه</li>            <li class="c-progress-steps__step done">تایید روزمه</li>            <li class="c-progress-steps__step done">امتیاز بندی رزومه</li>            <li class="c-progress-steps__step done">آزمون مرحله اول</li>            <li class="c-progress-steps__step done">آزمون مرحله دوم</li>            <li class="c-progress-steps__step done">کانون ارزیابی</li>            <li class="c-progress-steps__step done">کانون ارزیابی</li>            <li class="c-progress-steps__step done">معرفی در فهرست نمایندگان</li>            <?php            break;    }}function examType($type){    switch ($type) {        case 'FirstStep':            return "<label class='label label-default'>مرحله اول</label>";            break;        case 'SecondStep':            return "<label class='label label-default'>مرحله دوم</label>";            break;        case 'Evaluation':            return "<label class='label label-success'>کانون ارزیابی</label>";            break;    }}?>