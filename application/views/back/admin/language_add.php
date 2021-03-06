<div>
    <?php
    echo form_open(base_url() . 'admin/language_settings/do_add_lang/', array(
        'class' => 'form-horizontal',
        'method' => 'post',
        'id' => 'language_add',
        'enctype' => 'multipart/form-data'
    ));
    ?>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-1">
                <?php echo translate('language_name'); ?>
            </label>
            <div class="col-sm-6">
                <input type="text" name="language" id="demo-hor-1" 
                       class="form-control required" placeholder="<?php echo translate('language_name'); ?>" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label" for="demo-hor-2">
                <?php echo translate('language_icon'); ?>
            </label>
            <div class="col-sm-6">
                <span class="pull-left btn btn-default btn-file">
                    <?php echo translate('select_language_icon'); ?>
                    <input type="file" name="icon" id='imgInp' accept="image">
                </span>
                <br><br>
                <span id='wrap' class="pull-left" >
                    <img src="<?php echo base_url(); ?>uploads/others/photo_default.png" 
                         width="100%" id='blah' > 
                </span>
            </div>
        </div>
    </div>
</form>
</div>

<script>
    $(document).ready(function () {
        $("form").submit(function (e) {
            event.preventDefault();
        });
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#wrap').hide('fast');
                $('#blah').attr('src', e.target.result);
                $('#wrap').show('fast');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function () {
        readURL(this);
    });

    $(document).ready(function () {
        $("form").submit(function (e) {
            return false;
        });
    });
</script>