 <section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 rtl">

                <div class="col-xs-12 rtl">
                    <div class="row col-xs-12 card info-box">
                        <div class="body">
                            <div class="col-xs-12">
                                <label for="inputAgentState">عنوان دانشگاه:</label>
                                <input type="text" id="inputUniversityName" />
                                <button type="button"
                                        id="searchButton"
                                        class="btn btn-info btn-circle waves-effect waves-circle waves-float pull-left btn-search">
                                    <i class="material-icons">search</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row col-xs-12 card">
                    <div class="body">
                        <div class="col-xs-12 table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th class="fit">#</th>
                                    <th>عنوان دانشگاه</th>
                                    <th class="fit">وضعیت</th>
                                    <th class="fit">ویرایش</th>
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
