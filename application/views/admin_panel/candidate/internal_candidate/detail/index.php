 <section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="fit">نوع درخواست</th>
                                    <th>نام و نام خانوادگی</th>
                                    <th class="fit">استان</th>
                                    <th class="fit">شهر</th>
                                    <th class="fit">محدوده درخواست</th>
                                    <th class="fit">وضعیت</th>
                                </tr>
                                </thead>
                                <tbody class="table-rows">
                                    <tr>
                                        <td class="fit"><?php echo pipeSupervisorType($request['SupervisionType']); ?></td>
                                        <td><?php echo $request['CandidateFirstName']." ".$request['CandidateLastName']; ?></td>
                                        <td class="fit"><?php echo $request['StateName']; ?></td>
                                        <td class="fit"><?php echo $request['CityName']; ?></td>
                                        <td class="fit text-center"><?php echo pipeInternalElectionType($request['ElectionScale']); ?></td>
                                        <td class="text-center"><?php echo resumeForViewPipe($request['AcceptanceStatus']); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-12 alert alert-danger">
                                داوطلب فوق را جهت ورود به فهرست رای دهی تعیین وضعیت کنید
                            </div>
                            <div class="row col-xs-12">
                                <br>
                                <div class="row col-xs-12">
                                    <label>توضیحات</label>
                                    <input
                                            <?php setInputValue($request['Description']) ?>
                                            type="text"
                                            class="form-control"
                                            id="inputDescription" />
                                    <br>
                                </div>
                                <button
                                        data-title="تایید"
                                        data-row-id="<?php echo $request['RowId']; ?>"
                                        data-action="Accept"
                                        class="btn btn-success set-status">
                                    تایید داوطلب
                                </button>
                                &nbsp;&nbsp;&nbsp;
                                <button
                                        data-title="رد"
                                        data-row-id="<?php echo $request['RowId']; ?>"
                                        data-action="Reject"
                                        class="btn btn-danger set-status">
                                    رد داوطلب
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
