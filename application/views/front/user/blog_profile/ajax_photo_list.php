<!-- photo list  -->
<?php
	$i=0;
	foreach($blog_photo_profile as $row){
		$i++;
?>
	<?php
    	if($i%3==1){
    ?>
    	<div class="row mar-lr--5">
    <?php
    	}
    ?>
        <div class="col-md-4 pad-lr-5 mar-t-5">
            <?php
                echo $this->Html_model->photo_box('blog',$row);
            ?>
        </div>
    <?php
        if($i%3==0){
    ?>
    	</div>
    <?php
        }
    ?>
<?php
	}
?>
<?php
	if($i%3!==0){
		echo '</div>';
	}
?>
<!-- /photo list -->

<!-- Pagination -->
<div class="pagination-wrapper">
    <?php echo $this->ajax_pagination->create_links();  ?>
</div>
<!-- /Pagination -->
<script>
    $(document).ready(function(){
        load_iamges();
        $('#profile_blog_title').html("<?=translate('posted_photos')?>");
    });
</script>