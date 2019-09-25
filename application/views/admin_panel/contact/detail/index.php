<?php $_DIR = base_url('assets/empanel/'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card">
                    <div class="body">
                        <table>
                            <thead>
                                <tr>
                                    <th>نام و نام خانوداگی</th>
                                    <th>عنوان</th>
                                    <th>موضوع</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <input type="hidden"
                                           value="<?php echo $contact['RowId']; ?>"
                                           id="inputContactRowId" name="inputContactRowId" />
                                    <td><?php echo $contact['ContactFullName']; ?></td>
                                    <td><?php echo $contact['ContactTitle']; ?></td>
                                    <td><?php echo contactFormSubject($contact['ContactSubject']); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="content col-xs-12">
                            <?php echo $contact['ContactContent']; ?>
                        </div>
                        <div class="content row col-xs-12">
                            <button type="button" id="changeContactVisitToVisited"
                                    class="btn btn-primary waves-effect">ذخیره به عنوان مشاهده شده</button>
                            <button type="button" id="changeContactVisitToUnVisited"
                                    class="btn btn-danger waves-effect">ذخیره به عنوان مشاهده نشده</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
