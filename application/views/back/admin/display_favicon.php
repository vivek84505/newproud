<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo translate('select_favicon'); ?></h3>
        </div>
        <?php
        echo form_open(base_url() . 'admin/favicon_settings/', array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => '',
            'enctype' => 'multipart/form-data'
        ));
        ?>
        <div class="form-group margin-top-10">
            <label class="col-sm-3 control-label margin-top-10" for="demo-hor-inputemail"><?php echo translate('favicon'); ?></label>
            <div class="col-sm-9">
                <div class="col-sm-2">
                    <?php $ext = $this->db->get_where('ui_settings', array('type' => 'fav_ext'))->row()->value; ?>
                    <img class="img-responsive img-md img-circle img-border" src="<?php echo base_url(); ?>uploads/others/favicon.<?php echo $ext; ?>" id="blah" >
                </div>
                <div class="col-sm-2">
                    <span class="pull-left btn btn-default btn-file margin-top-10">
                        <?php echo translate('select_favicon'); ?>
                        <input type="file" name="fav" class="form-control" id="imgInp">
                    </span>
                </div>
                <div class="col-sm-5"></div>
            </div>
        </div>
        <br />
        <div class="panel-footer text-right">
            <span class="btn btn-success btn-labeled fa fa-check submitter enterer"  data-ing='<?php echo translate('saving'); ?>' data-msg='<?php echo translate('favicon_updated!'); ?>'>
                <?php echo translate('save'); ?>
            </span>
        </div>
        </form>	
    </div>              
</div>
<script>
    $(document).ready(function () {
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
    });
</script>