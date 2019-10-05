 <section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card info-box">
                    <div class="body">
                        <div class="col-xs-12">
                            <label for="inputCandidateStatus">وضعیت:</label>
                            <select name="inputCandidateStatus" id="inputCandidateStatus">
                                <option value="">همه</option>
                                <?php foreach ($enumCandidateStatus as $key => $value) { ?>
                                    <option value="<?php echo $key; ?>">
                                        <?php echo $value; ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <label for="inputCandidateState">استان:</label>
                            <select name="inputCandidateState" id="inputCandidateState">
                                <option value="">همه</option>
                                <?php foreach ($states as $item) { ?>
                                    <option value="<?php echo $item['StateId']; ?>">
                                        <?php echo $item['StateName']; ?>
                                    </option>
                                <?php } ?>
                            </select>
                            <label for="inputCandidateNationalCode">کد ملی:</label>
                            <input type="text"
                                   name="inputCandidateNationalCode"
                                   style="width: 100px;"
                                   id="inputCandidateNationalCode"/>
                            <label for="inputCandidateFullName">نام و نام خانوادگی:</label>
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
                                    <th class="fit">کد ملی</th>
                                    <th class="fit">امتیاز</th>
                                    <th class="fit">استان</th>
                                    <th class="fit">شهر</th>
                                    <th class="fit">حوزه انتخاباتی</th>
                                    <th class="fit">وضعیت</th>
                                    <th class="fit">جزئیات</th>
<!--                                    <th class="fit">حذف</th>-->
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
