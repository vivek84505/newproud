<div class="row">
    <?php
        if ($p_set == 'ok') {
    ?>
        <div class="cc-selector col-md-4 col-md-offset-2">
            <input id="paypal" type="radio" style="display:block;" checked name="payment_type" value="ccavenue"/>
            <label class="drinkcard-cc" style="margin-bottom:0px; width:100%; overflow:hidden; height:200px;" for="ccavenue" onclick="radio_check('paypal')">
                <img class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo base_url(); ?>uploads/others/ccavenue.png" width="100%" height="100%" style=" text-align-last:center;" alt="<?php echo translate('ccavenue');?>" />
            </label>
        </div>
    <?php
        }
        if ($s_set == 'ok') {
    ?>
        <div class="cc-selector col-md-4">
            <input id="stripe" type="radio" style="display:block;" name="payment_type" value="payu"/>
            <label class="drinkcard-cc" id="customButtong" style="margin-bottom:0px; width:100%; overflow:hidden; height:200px;" for="stripe" onclick="radio_check('stripe')">
                <img class="image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo base_url(); ?>uploads/others/payu-banner.png" width="100%" height="100%" style=" text-align-last:center;" alt="<?php echo translate('stripe');?>" />
            </label>
        </div>
        <script>
            $(document).ready(function(e) {
                var handler = StripeCheckout.configure({
                    key: '<?php echo $this->db->get_where('business_settings' , array('type' => 'stripe_publishable_key'))->row()->value; ?>',
                    image: '<?php echo base_url(); ?>template/front/assets/img/stripe.png',
                    token: function(token) {
                        // Use the token to create the charge with a server-side script.
                        // You can access the token ID with `token.id`
                        $('#payment_form').append("<input type='hidden' name='stripeToken' value='" + token.id + "' />");
                        if($( "#paypal" ).length){
                            $( "#paypal" ).prop( "checked", false );
                        }
                        $( "#stripe" ).prop( "checked", true );
                        notify('<?php echo translate('your_card_details_verified!'); ?>','success','bottom','right');
                        setTimeout(function(){
                            $('#payment_form').submit();
                        }, 500);
                    }
                });

             
                // Close Checkout on page navigation
                $(window).on('popstate', function() {
                    handler.close();
                });
            });
        </script>
    <?php
        }
    ?>
</div>
<script>
    function radio_check(id){
        $( "#paypal" ).prop( "checked", false );
        $( "#stripe" ).prop( "checked", false );
        $( "#"+id ).prop( "checked", true );

    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
        load_iamges();
    })
</script>
