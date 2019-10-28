<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper">
    <div class="row col-xs-12 col-md-3 pull-right"><?php echo $sidebar; ?></div>
    <div class="col-xs-12 col-md-9 pull-right table-responsive">
        <div class="row">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th class="fit text-center">ردیف</th>
                        <th class="text-center">عنوان محل آزمون</th>
                        <th class="fit text-center">آدرس محل برگزاری</th>
                        <th class="fit text-center">تصویر محل برگزاری</th>
                        <th class="fit text-center">استان</th>
                        <th class="fit text-center">تاریخ برگزاری</th>
                        <th class="fit text-center">زمان برگزاری</th>
                        <th class="fit text-center">انتخاب</th>
                    </tr>
                </thead>
                <tbody class="table-rows"></tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="gridSystemModalLabel"></h4>
            </div>
            <div class="modal-body rtl">
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>محل برگزاری آزمون</strong>:
                        <span class="place-title"></span>
                    </li>
                    <li class="list-group-item">
                        <strong>آدرس برگزاری آزمون</strong>:
                        <span class="place-address"></span>
                    </li>
                    <li class="list-group-item">
                        <strong>تاریخ</strong>:
                        <span class="date"></span>
                    </li>
                    <li class="list-group-item">
                        <strong>زمان</strong>:
                        <span class="time"></span>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">انصراف</button>
                <button type="button" class="btn btn-primary" id="reserveEvaluationExam">انتخاب آزمون</button>
            </div>
        </div>
    </div>
</div>