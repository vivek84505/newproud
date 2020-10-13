<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="300">
	<title><?php echo translate('Login');?> | <?php echo $this->db->get_where('general_settings',array('type' => 'system_name'))->row()->value;?></title>
	<?php
		$control = 'admin';
	?>
	<!--STYLESHEET-->
	<!--Roboto Font [ OPTIONAL ]-->
	<link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300,500" rel="stylesheet" type="text/css">
	<!--Bootstrap Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/bootstrap.min.css" rel="stylesheet">
	<!--Activeit Stylesheet [ REQUIRED ]-->
	<link href="<?php echo base_url(); ?>template/back/css/activeit.min.css" rel="stylesheet">	
	<!--Font Awesome [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!--Demo [ DEMONSTRATION ]-->
	<link href="<?php echo base_url(); ?>template/back/css/demo/activeit-demo.min.css" rel="stylesheet">

	<!--SCRIPT-->
	<script src="<?php echo base_url(); ?>template/back/js/jquery-2.1.1.min.js"></script>
	<!--Page Load Progress Bar [ OPTIONAL ]-->
	<link href="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.css" rel="stylesheet">
	<script src="<?php echo base_url(); ?>template/back/plugins/pace/pace.min.js"></script>
	<!--<?php $ext =  $this->db->get_where('ui_settings',array('type' => 'fav_ext'))->row()->value; $this->benchmark->mark_time();?>-->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>uploads/others/favicon.<?php echo $ext; ?>">
</head>

<body>
	<div id="container" class="cls-container" 
    style="background:url(<?php echo base_url(); ?>uploads/others/install.jpg);">
		<!-- BACKGROUND IMAGE -->
		<div id="bg-overlay"></div>
		<!-- LOGIN FORM -->
		<div class="cls-content">
			<div class="cls-content-sm panel panel-colorful panel-login" style="margin-top: 50px !important;">
				<div class="panel-body">
                	<a class="box-inline" href="<?php echo base_url(); ?><?php echo $this->session->userdata('title'); ?>">
						<img src="<?php echo base_url(); ?>uploads/others/logo_live.png" class="log_icon">
					</a>
                    <hr>
					<p class="pad-btm"><?php echo translate('sign_in_to_your_account');?></p>
					<?php
						echo form_open(base_url() . ''.$control.'/login/', array(
							'method' => 'post',
							'id' => 'login'
						));
					?>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user" style="color:#000 !important"></i></div>
								<input type="text" name="email" class="form-control email" placeholder="<?php echo translate('email'); ?>">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-key" style="color:#000 !important"></i></div>
								<input type="password" name="password" class="form-control pass" placeholder="<?php echo translate('password'); ?>">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-6 text-left">
                            	<div class="pad-ver">
				<a href="#" onclick="ajax_modal('forget_form','<?php echo translate('forget_password'); ?>','<?php echo translate('email_sent_with_new_password!'); ?>','forget','')" class="btn-link mar-rgt" style="color:#000 !important;"><?php echo translate('forgot_password');?> ?</a>
			</div>
							</div>
							<div class="col-xs-6">
								<div class="form-group text-right">
									<span class="btn btn-login btn-labeled fa fa-unlock-alt snbtn" onclick="form_submit('login')">
                                    	<?php echo translate('sign_in');?>
                                    </span>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
        
        <div class="cls-content" style="padding:0px !important;padding-top:0px !important;">
			<div class="cls-content-sm panel panel-colorful panel-login" style="margin-top: 0px !important; width:450px !important;">
				<div class="panel-body">
                	<div class="table-responsive">
                	<table class="table table-bordered">
                    	<tr>
                        	<td style="border-color:#ccc !important;">Admin</td>
                        	<td style="border-color:#ccc !important;">admin@classified.com</td>
                        	<td style="border-color:#ccc !important;">1234</td>
                        	<td style="border-color:#ccc !important;">
                            	<div class="btn btn-info btn-xs admina">copy</div>
                            </td>
                        </tr>
                        <tr>
                        	<td style="border-color:#ccc !important;">Manager</td>
                        	<td style="border-color:#ccc !important;">manager@classified.com</td>
                        	<td style="border-color:#ccc !important;">1234</td>
                        	<td style="border-color:#ccc !important;">
                            	<div class="btn btn-info btn-xs managera">copy</div>
                            </td>
                        </tr>
                        <tr>
                        	<td style="border-color:#ccc !important;">Accountant</td>
                        	<td style="border-color:#ccc !important;">accountant@classified.com</td>
                        	<td style="border-color:#ccc !important;">1234</td>
                        	<td style="border-color:#ccc !important;">
                            	<div class="btn btn-info btn-xs accounta">copy</div>
                            </td>
                        </tr>
                    </table>
<script>
$(document).ready(function(){
	$('.admina').click(function(){
		$('.email').val('admin@classified.com');
		$('.pass').val('1234');
	});
	$('.managera').click(function(){
		$('.email').val('manager@classified.com');
		$('.pass').val('1234');
	});
	$('.accounta').click(function(){
		$('.email').val('accountant@classified.com');
		$('.pass').val('1234');
	});
});
</script>
                    <p>N:B : We just made these admin for demo purposes.Any user can add/delete more admin as they needed with permission</p>
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                    <div id="fb-root"></div>
					<script>
                    (function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                    </script>


                	</div>
				</div>
			</div>
		</div>
        
	</div>
	<!--jQuery [ REQUIRED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/jquery-2.1.1.min.js"></script>
    
	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/bootstrap.min.js"></script>
    
	<!--Activeit Admin [ RECOMMENDED ]-->
	<script src="<?php echo base_url(); ?>template/back/js/activeit.min.js"></script>

	<!--Background Image [ DEMONSTRATION ]-->
	<script src="<?php echo base_url(); ?>template/back/js/demo/bg-images.js"></script>
    
	<!--Bootbox Modals [ OPTIONAL ]-->
	<script src="<?php echo base_url(); ?>template/back/plugins/bootbox/bootbox.min.js"></script>

	<!--Demo script [ DEMONSTRATION ]-->
	<script src="<?php echo base_url(); ?>template/back/js/ajax_login.js"></script>
	
	<script>
        var base_url = '<?php echo base_url(); ?>';
        var cancdd = '<?php echo translate('cancelled'); ?>';
        var req = '<?php echo translate('this_field_is_required'); ?>';
		var sing = '<?php echo translate('signing_in...'); ?>';
		var nps = '<?php echo translate('new_password_sent_to_your_email'); ?>';
		var lfil = '<?php echo translate('login_failed!'); ?>';
		var wrem = '<?php echo translate('wrong_e-mail_address!_try_again'); ?>';
		var lss = '<?php echo translate('login_successful!'); ?>';
		var sucss = '<?php echo translate('SUCCESS!'); ?>';
		var rpss = "<?php echo translate('reset_password'); ?>";
        var user_type = '<?php echo $control; ?>';
        var module = 'login';
		var unapproved = '<?php echo translate('account_not_approved._wait_for_approval.'); ?>';
		
		window.addEventListener("keydown", checkKeyPressed, false);
		 
		function checkKeyPressed(e) {
		    if (e.keyCode == "13") {
		        $('.snbtn').click();
		    }
		}
    </script>
</body>
</html>
