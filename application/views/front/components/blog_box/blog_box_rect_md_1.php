<div class="thumbnail news_box_rect_1 md hover2">
    <div class="caption top">
        <h4 class="caption-title">
            <a href="<?php echo $this->Crud_model->blog_link($blog_id);?>">
                <?php echo word_limiter($title,20);?>
            </a>
        </h4>
        <div class="media-meta">
            <a href="#">
            	<i class="fa fa-user"></i>
				<?php echo $this->Crud_model->get_type_name_by_id('user',$blog_uploader_id,'firstname');?>
            </a>
            <span class="divider">|</span>
            <a href="<?php echo base_url(); ?>home/blog/0/0/<?php echo date("Y-m-d",$date);?>/<?php echo date("Y-m-d",$date);?>">
            	<i class="fa fa-clock-o"></i>
				<?php echo date("F j, Y",$date);?>
            </a>
            <span class="divider">|</span>
            <!-- <span class="read_later" onclick="to_readlater(<?php echo $blog_id; ?>,event)" data-toggle="tooltip" title="<?php echo translate('read_later'); ?>" data-placement="right">
                <i class="fa fa-bookmark"></i>
                           </span> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="media">
                <span class="media-link">
                    <?php 
                        $img = json_decode($img_features,true);
						$i =0;
                        foreach($img as $row){
							$i++;
                            if($i == 1){
                    ?>
                        <img class="img-thumbnail img-responsive image_delay" src="<?php echo img_loading(); ?>" data-src="<?php echo $this->Crud_model->file_view('blog',$blog_id,'','','thumb','src','multi','one');?>" alt=""/>
                    <?php }}?>
                </span> 
            </div>
        </div>
        <div class="col-md-8 pad-l-0 hidden-sm hidden-xs">
            <div class="caption down">
                <div class="caption-text">
                    <?php echo word_limiter($summary,60);?>
                </div>
                <div class="rm-btn pull-right">
                    <a class="btn btn-readmore btn-icon-left" href="<?php echo $this->Crud_model->blog_link($blog_id);?>">
                        <i class="fa fa-file-text-o"></i>
                        <?php echo translate('read_more');?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>