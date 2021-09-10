
<?php
//echo $photo;
?>
<section class="pannel">
    <div class="panel-body">
        <?php echo form_open_multipart($this->uri->uri_string()); ?>
        	<div class="col-md-12">
        		<div class="form-group">
        			<label for="input-file-now"><?=translate('profile_picture')?></label>
        			<input type="file" name="signature_photo" class="dropify" data-default-file="<?=($photo)?site_url($photo):get_image_url('staff')?>"/>
        			<span class="error"><?php echo form_error('user_photo'); ?></span>
        		</div>
        	</div>
        	<div class="col-md-3">
        	    <button type="submit" name="submit" class="form-control btn btn-default">Upload</button>
        	</div>
    	<?php echo form_close(); ?>
	</div>
</section>