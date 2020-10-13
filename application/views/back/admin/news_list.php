<script src="<?php echo base_url(); ?>template/back/plugins/bootstrap-table/extensions/export/bootstrap-table-export.js">
</script>
<div class="panel-body" id="demo_s">
    <table id="events-table" class="table table-striped"  data-url="<?php echo base_url(); ?>admin/news/list_data" data-side-pagination="server" data-pagination="true" data-page-list="[5, 10, 20, 50, 100, 200]"  data-show-refresh="true" data-search="true"  data-show-export="true" >
        <thead>
            <tr>
                <th data-field="image" data-align="center" data-sortable="true">
                    <?php echo translate('image'); ?>
                </th>
                <th data-field="title" data-align="center" data-sortable="true">
                    <?php echo translate('title'); ?>
                </th>
                <th data-field="category" data-align="center" data-sortable="true">
                    <?php echo translate('category_/_subcategory'); ?>
                </th>
                <th data-field="date" data-align="center" data-sortable="false">
                    <?php echo translate('date'); ?>
                </th>
                <th data-field="status" data-align="center" data-sortable="false">
                    <?php echo translate('publish_status'); ?>
                </th>
                <th data-field="breaking_news" data-align="center" data-sortable="false">
                    <?php echo translate('breaking_news'); ?>
                </th>
                <th data-field="visitor" data-align="center" data-sortable="false">
                    <?php echo translate('visitors'); ?>
                </th>
                <th data-field="speciality" data-align="center" data-sortable="false">
                    <?php echo translate('news_speciality'); ?>
                </th>
                <th data-field="options" data-align="center" data-sortable="false">
                    <?php echo translate('options'); ?>
                </th>
            </tr>
        </thead>
    </table>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#events-table').bootstrapTable({
            /*
             onAll: function (name, args) {
             console.log('Event: onAll, data: ', args);
             }
             onClickRow: function (row) {
             $result.text('Event: onClickRow, data: ' + JSON.stringify(row));
             },
             onDblClickRow: function (row) {
             $result.text('Event: onDblClickRow, data: ' + JSON.stringify(row));
             },
             onSort: function (name, order) {
             $result.text('Event: onSort, data: ' + name + ', ' + order);
             },
             onCheck: function (row) {
             $result.text('Event: onCheck, data: ' + JSON.stringify(row));
             },
             onUncheck: function (row) {
             $result.text('Event: onUncheck, data: ' + JSON.stringify(row));
             },
             onCheckAll: function () {
             $result.text('Event: onCheckAll');
             },
             onUncheckAll: function () {
             $result.text('Event: onUncheckAll');
             },
             onLoadSuccess: function (data) {
             $result.text('Event: onLoadSuccess, data: ' + data);
             },
             onLoadError: function (status) {
             $result.text('Event: onLoadError, data: ' + status);
             },
             onColumnSwitch: function (field, checked) {
             $result.text('Event: onSort, data: ' + field + ', ' + checked);
             },
             onPageChange: function (number, size) {
             $result.text('Event: onPageChange, data: ' + number + ', ' + size);
             },
             onSearch: function (text) {
             $result.text('Event: onSearch, data: ' + text);
             }
             */
        }).on('all.bs.table', function (e, name, args) {
            //alert('1');
            //set_switchery();
        }).on('click-row.bs.table', function (e, row, $element) {

        }).on('dbl-click-row.bs.table', function (e, row, $element) {

        }).on('sort.bs.table', function (e, name, order) {

        }).on('check.bs.table', function (e, row) {

        }).on('uncheck.bs.table', function (e, row) {

        }).on('check-all.bs.table', function (e) {

        }).on('uncheck-all.bs.table', function (e) {

        }).on('load-success.bs.table', function (e, data) {
            set_switchery();
            $('[data-toggle="tooltip"]').tooltip();
        }).on('load-error.bs.table', function (e, status) {

        }).on('column-switch.bs.table', function (e, field, checked) {

        }).on('page-change.bs.table', function (e, size, number) {

        }).on('search.bs.table', function (e, text) {

        });        
    });
    
</script>

<script>

    function set_switchery() {
        $(".aiz_switchery").each(function () {
            new Switchery($(this).get(0), {
                color: 'rgb(100, 189, 99)', secondaryColor: '#cc2424', jackSecondaryColor: '#c8ff77'});
            var changeCheckbox = $(this).get(0);
            var false_msg = $(this).data('fm');
            var true_msg = $(this).data('tm');
            changeCheckbox.onchange = function () {
                $.ajax({url: base_url + '' + user_type + '/' + module + '/' + $(this).data('set') + '/' + $(this).data('id') + '/' + changeCheckbox.checked,
                    success: function (result) {
                        if (changeCheckbox.checked == true) {
                            $.activeitNoty({
                                type: 'success',
                                icon: 'fa fa-check',
                                message: true_msg,
                                container: 'floating',
                                timer: 3000
                            });
                            sound('published');
                        } else {
                            $.activeitNoty({
                                type: 'danger',
                                icon: 'fa fa-check',
                                message: false_msg,
                                container: 'floating',
                                timer: 3000
                            });
                            sound('unpublished');
                        }
                    }
                });
            };
        });
    }
    
</script>