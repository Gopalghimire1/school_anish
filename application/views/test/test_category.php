<div class="col-md-5">
    <?php echo form_open('test/test_category', array('class' => 'form-horizontal form-bordered frm-submit')); ?>
    <section class="panel">
        <header class="panel-heading">
            <h4 class="panel-title"><i class="far fa-edit"></i> <?php echo translate('add') . " " . translate('category') . " " . translate('category'); ?></h4>
        </header>
        <div class="panel-body">
		    <div class="form-group">
			    <label class="col-md-4 control-label"><?=translate('category') . " " . translate('name')?> <span class="required">*</span></label>
				<div class="col-md-6">
					<input type="text" class="form-control" name="test_category" value="<?php echo set_value('test_category'); ?>" placeholder="Category.." required/>
					<span class="error"></span>
    			</div>
	    	</div>
        </div>
        <footer class="panel-footer">
			<div class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-default pull-right" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
						<i class="fas fa-plus-circle"></i> <?php echo translate('save'); ?>
    				</button>
	    		</div>
		    </div>
        </footer>
    </section>
    <?php echo form_close(); ?>
</div>
<div class="col-md-7">
    <section class="panel">
        <header class="panel-heading">
            <h4 class="panel-title"><i class="far fa-edit"></i> <?php echo translate('category') . " " . translate('list') . " " . translate('category'); ?></h4>
        </header>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sn = 1;
                    if($test_category){ 
                    foreach($test_category as $category){
                    ?>
                    <tr>
                        <td><?=$sn++?></td>
                        <td><?=$category['test_category']?></td>
                        <td>
                            <?php echo btn_delete('test/test_category_delete/' . $category['id']); ?>
                        </td>
                    </tr>
                    <?php } } else{ ?>
                    <?php echo '<tr><td colspan="3" class="text-center"><h5>No result to display</h5><td></tr>'; } ?>
                </tbody>
            </table>
        </div>
        <footer class="panel-footer"></footer>
    </section>
</div>