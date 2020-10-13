<?php
foreach ($category_data as $row) {
    ?>
    <div class="tab-pane fade active in" id="edit">
        <?php
        echo form_open(base_url() . 'admin/category/update/' . $row['news_category_id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'category_edit',
            'enctype' => 'multipart/form-data'
        ));
        ?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-4 control-label" for="demo-hor-1">
                    <?php echo translate('name'); ?>
                </label>
                <div class="col-sm-6">
                    <input type="text" name="name" value="<?php echo $row['name']; ?>" id="demo-hor-1" 
                           class="form-control required" placeholder="<?php echo translate('news_category_name'); ?>" >
                </div>
            </div>
        </div>
    </form>
    </div>
    <?php
}
?>

<script>
    $(document).ready(function () {
        $("form").submit(function (e) {
            return false;
        });
    });
</script>