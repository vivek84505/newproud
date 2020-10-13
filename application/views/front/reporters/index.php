<?php
	$reporters_page = json_decode($this->Crud_model->get_settings_value('ui_settings','reporters_page','value'),true);
?>
<!-- CONTENT AREA -->
<div class="content-area">
    <!-- PAGE WITH SIDEBAR -->
    <section class="page-section with-sidebar pad-t-15 reporters">
        <div class="container">
            <div class="row mar-lr--5">
                <?php include 'sidebar.php';?>
                <!-- CONTENT -->
                <div class="col-md-9 content pad-lr-5" id="content">
                    <span class="btn btn-theme-transparent pull-left hidden-lg hidden-md" style="position:relative; z-index:100;padding: 5px 12px; border-radius:4px;width: 100%; margin-bottom: 15px;" onClick="open_sidebar();">
                        <i class="fa fa-bars"></i>
                    </span>
                    <ol class="breadcrumb breadcrumb-custom hidden-sm hidden-xs">
                        <li>
                        	<a href="<?php echo base_url(); ?>">
                            	<i class="fa fa-home"></i>
                            </a>
                        </li>
                        <li class="active">
                            <span>
                                <?php echo translate('all_reporters'); ?>
                            </span>
                        </li>
                    </ol>
                    <div id="result">
                    </div>
                    <!-- /advertisement space -->
                    <div class="advertise_space2">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                                <?php echo $this->Html_model->advertise_rect('all_reporter_2'); ?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pad-t-15">
                                <?php echo $this->Html_model->advertise_rect('all_reporter_3'); ?>
                            </div>
                        </div>
                    </div>
                    <!-- /advertisement space -->
                    <?php
						echo $this->Html_model->bottom_part($reporters_page['page_bottom']);
					?>
                </div>
                <!-- /CONTENT -->
            </div>
        </div>
    </section>
    <!-- /PAGE WITH SIDEBAR -->
</div>
<!-- /CONTENT AREA-->
<script>
function get_reporters(){
	$("#result").load("<?php echo base_url()?>home/get_reporters_list/");
}
$(document).ready(function(){
	close_sidebar();
	get_reporters();

	setTimeout(function(){
		set_reporter_box();
	},1000);
});
function open_sidebar(){
	$('.sidebar').removeClass('close_now');
	$('.sidebar').addClass('open');
}
function close_sidebar(){
	$('.sidebar').removeClass('open');
	$('.sidebar').addClass('close_now');
}
function set_reporter_box(){
	var max_height_image = 0;
	$('.reporter_box_1 .media').each(function(){
        var current_height_image= parseInt($(this).css('height'));
		if(current_height_image >= max_height_image){
			max_height_image = current_height_image;
		}
    });
	$('.reporter_box_1 .media').css('height',max_height_image);
}
</script>
<style>
.reporters .social-icons a:hover {
	color:inherit;
}
.sidebar.close_now{
	position: relative;
	left:0px;
	opacity:1;
}
@media(max-width: 991px) {
	.sidebar.open{
		opacity:1;
		position: fixed;
		z-index: 9999;
		top: -30px;
		background: #f5f5f5;
		height: 100vh;
		overflow-y: auto;
		padding-top: 50px;
		left:0px;
		overflow-x: hidden;
                transition: all .6s ease-out;
	}
	.sidebar.close_now{
		position: fixed;
		left:-500px;
		opacity:0;
	}
	.view_select_btn{
		margin-top: 10px !important;
	}
}
</style>
