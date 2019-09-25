 <section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">
                <div class="row col-xs-12 card info-box">
                    <div class="body">
                        <div class="col-xs-12">
                            <label for="inputContactSubject">فیلتر بر اساس:</label>
                            <select name="inputContactSubject" id="inputContactSubject">
                                <option value="">همه</option>
                                <option value="PeopleReport">گزارش مردمی</option>
                                <option value="CS">انتقاد یا پیشنهاد</option>
                                <option value="Other">سایر</option>
                            </select>
                            &nbsp;&nbsp;
                            <label for="inputContactVisited">مشاهده شده/نشده:</label>
                            <select name="inputContactVisited" id="inputContactVisited">
                                <option value="">همه</option>
                                <option value="1">مشاهده شده</option>
                                <option value="0">مشاهده نشده</option>
                            </select>
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
                                    <th>نام و نام خانوداگی</th>
                                    <th class="fit">عنوان</th>
                                    <th class="fit">موضوع</th>
                                    <th class="fit">وضعیت</th>
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
