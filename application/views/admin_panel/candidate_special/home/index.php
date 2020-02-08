 <section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card info-box">
                    <div class="body">
                        <div class="col-xs-12">
                            <label for="inputCandidateState">استان:</label>
                            <select name="inputCandidateState" id="inputCandidateState">
                                <option value="">همه</option>
                                <?php foreach ($states as $item) {?>
                                    <option value="<?php echo $item['StateId']; ?>">
                                        <?php echo $item['StateName']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <label for="inputCandidateFullName">نام یا نام خانوادگی:</label>
                            <input type="text"
                                   style="width: 100px;"
                                   name="inputCandidateFullName"
                                   id="inputCandidateFullName"/>
                            <button type="button"
                                    id="searchButton"
                                    class="btn btn-info btn-circle waves-effect waves-circle waves-float pull-left btn-search">
                                <i class="material-icons">search</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="fit">#</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th class="fit">استان</th>
                                    <th class="fit">حوزه انتخاباتی</th>
                                    <th class="fit">تصویر</th>
                                    <th class="fit">وضعیت</th>
                                    <th class="fit">تغییر صلاحیت</th>
                                    <th class="fit">دریافت پوستر</th>
                                    <th class="fit">جزئیات</th>
                                    <th class="fit">حذف</th>
                                </tr>
                                </thead>
                                <tbody class="table-rows"></tbody>
                            </table>
                        </div>
                        <div class="col-xs-12">
                            <div class="pagination-holder clearfix">
                                <div id="light-pagination" class="pagination light-theme simple-pagination">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







 <?php $_DIR = base_url('assets/ui/v4/'); ?>
 <div style="height: 1px ;width: 1px;overflow: hidden;position: relative">
     <div class="hidden-box1" id="hidden-box1">
         <div class="modal-border">
             <div class="inner-border-div">
                 <img src="<?php echo $_DIR; ?>images/Story-bg.png">
                 <div class="candidate-image-div">
                     <img src="<?php echo $_DIR; ?>images/Story-man.png" class="inner-candidate-image">
                     <div style="padding: 15px 0;">
                         <div class="candidate-text-invite">
                             <p style="line-height: 60px !important;">
                                 دعوت می&hairsp;کنیم از
                             </p>
                         </div>
                         <div class="candidate-name">
                             <h1 class="modalCandidateName"></h1>
                         </div>
                         <div class="candidate-name">
                             <h3>حوزه انتخابیه</h3>
                             <h3 class="modalCandidateArea"></h3>
                         </div>
                         <div class="candidate-text-invite">
                             <p style="line-height: 60px !important;">
                                 برای شرکت در
                             </p>
                             <p style="line-height: 60px !important;">
                                 چالش شایستگی و شفافیت جنبش
                                 <a> #از_ما</a>
                             </p>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
     <div class="hidden-box2" id="hidden-box2">
         <div class="modal-border">
             <div class="inner-border-div">
                 <img src="<?php echo $_DIR; ?>images/post-bg.png">
                 <div class="candidate-image-div">
                     <img src="<?php echo $_DIR; ?>images/post-man.png" class="inner-candidate-image">
                     <div class="">
                         <div class="candidate-text-invite">
                             <p>
                                 دعوت می&hairsp;کنیم از
                             </p>
                         </div>
                         <div class="candidate-name">
                             <h1 class="modalCandidateName"></h1>
                         </div>
                         <div class="candidate-name">
                             <h3>حوزه انتخابیه</h3>
                             <h3 class="modalCandidateArea"></h3>
                         </div>س
                         <div class="candidate-text-invite">
                             <p>
                                 برای شرکت در
                             </p>
                             <p>
                                 چالش شایستگی و شفافیت جنبش
                                 <a> #از_ما</a>
                             </p>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>

 <!-- Modal -->
 <div class="modal fade candidate-modal" id="myModal" role="dialog" data-backdrop="false">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close pull-left close-icon close-modal" data-dismiss="modal">&times;
                 </button>
                 <h4 class="modal-title rtl">
                     داوطلب مورد نظر و
                     <a target="_blank" href="https://www.instagram.com/azmaa_net/">
                         azmaa_net@
                     </a>
                     را منشن کنید
                 </h4>
             </div>
             <div class="modal-body">
                 <div class="show-box" id="show-box"></div>
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn pull-left close-btn close-modal" data-dismiss="modal">بستن</button>
                 <!--                <a type="button" class="btn pull-left receive-btn" id="receiveFile" href="javascript:void(0);">دریافت-->
                 <!--                    فایل</a>-->
             </div>
         </div>
     </div>
 </div>

 <div style="display: inline-block" class="loading-text hidden">
     <p style="text-align: right;font-size: 14px;font-weight: 900;">مناسب برای پست و استوری اینستاگرام</p>
 </div>
 <div class="col-xs-12 text-center loading-demo hidden" style="direction: rtl;">
     لطفا منتظر بمانید...
 </div>


 <script src="<?php echo $_DIR; ?>js/dom-to-image.js"></script>