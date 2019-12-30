<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">


            <div class="card">
                <div class="body">
                    <div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#info" aria-controls="info"
                                   role="tab" data-toggle="tab">شخصیت</a>
                            </li>
                            <li role="presentation">
                                <a href="#payments" aria-controls="payments"
                                   role="tab" data-toggle="tab">توانایی ذهنی</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="info">
                                <div class="col-xs-12">
                                    <div class="card rtl table-responsive">
                                        <table id="table-0" class="table table-bordered table-striped table-condensed">
                                            <thead>
                                            <tr>
                                                <?php $headers = $firstSheet[0]; ?>
                                                <?php $index = 0; foreach ($headers as $item) { $index +=1; ?>
                                                    <th class="fit">
                                                        <div>
                                                            <input id="input-<?php echo $index; ?>" type="text" class="search" />
                                                        </div>
                                                        <span><?php echo $item; ?></span>
                                                    </th>
                                                <?php } ?>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php unset($firstSheet[0]); foreach ($firstSheet as $item) { ?>
                                                <tr>
                                                    <?php $index = 0;  foreach ($item as $row) { $index +=1; ?>
                                                        <td data-input="input-<?php echo $index; ?>" class="fit">
                                                            <?php echo $row; ?>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in" id="payments">
                                <div class="col-xs-12">
                                    <div class="card rtl table-responsive">
                                        <table id="table-1" class="table table-bordered table-striped table-condensed">
                                            <thead>
                                            <tr>
                                                <?php $headers = $secondSheet[0]; ?>
                                                <?php $index = 0; foreach ($headers as $item) { $index +=1; ?>
                                                    <th class="fit">
                                                        <div>
                                                            <input id="input-1-<?php echo $index; ?>" type="text" class="search" />
                                                        </div>
                                                        <span><?php echo $item; ?></span>
                                                    </th>
                                                <?php } ?>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php unset($secondSheet[0]); foreach ($secondSheet as $item) { ?>
                                                <tr>
                                                    <?php $index = 0;  foreach ($item as $row) { $index +=1; ?>
                                                        <td data-input="input-1-<?php echo $index; ?>" class="fit">
                                                            <?php echo $row; ?>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>