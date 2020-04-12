 <section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card info-box">
                    <div class="body">
                        <div class="col-xs-12">
                            <label for="inputSupervisionType">وضعیت:</label>
                            <select name="inputSupervisionType" id="inputSupervisionType">
                                <option value="">همه</option>
                                <?php foreach ($EnumResumeProfile['SupervisorType'] as $key => $value) { ?>
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
                            <a href="<?php echo base_url('Admin/InternalCandidate/votes') ?>">
                                مشاهده آرا
                            </a>
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
                                    <th class="fit">نوع درخواست</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th class="fit">استان</th>
                                    <th class="fit">شهر</th>
                                    <th class="fit">محدوده درخواست</th>
                                    <th class="fit">وضعیت درخواست</th>
                                    <th class="fit">جزئیات</th>
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