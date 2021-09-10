<?php
// echo 1; die;
var_dump($stock_edit[0]['']);
?>
<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li>
				<a href="<?=site_url('accounting/stock')?>"><i class="fas fa-list-ul"></i> <?php echo translate('stock') . " " . translate('discharge'); ?></a>
			</li>
<?php if (get_permission('account', 'is_add')){ ?>
			<li class="active">
				<a href="#create" data-toggle="tab"><i class="far fa-edit"></i> <?php echo translate('stock') . " " . translate('edit'); ?></a>
			</li>
<?php } ?>
		</ul>
		<div class="tab-content">
<?php if (get_permission('account', 'is_add')){ ?>
			<div class="tab-pane active" id="create">
                <?php echo form_open(site_url('accounting/update_stock'), array('class' => 'form-horizontal form-bordered frm-submit')); ?>
			    <section class="panel">
			        <div class="panel-body">
					<?php if (is_superadmin_loggedin()): ?>
					<div class="form-group">
						<label class="col-md-3 control-label"><?=translate('branch')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<?php
								$arrayBranch = $this->app_lib->getSelectList('branch');
								echo form_dropdown("branch_id", $arrayBranch, "", "class='form-control' id='branch_id'
								id='branch_id' data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity'");
							?>
							<span class="error"></span>
						</div>
					</div>
					<?php endif; ?>
					<div class="form-group">
						<label class="col-md-3 control-label"><?=translate('vendor') . " " . translate('name')?> <span class="required">*</span></label>
						<div class="col-md-6">
    						    <select class="form-control" id="vendor" name="vendor_id" data-plugin-selectTwo>
    						        <?php
    						        $result = $this->db->get('vendor')->result_array();
    						        foreach ($result as $row){
    						        ?>  
    						        <option value="<?=$row['id']?>"  <?php if($row['id'] === $stock_edit[0]['vendor_id']) { echo "selected"; }?>><?=$row['name']?></option>
    						        <?php
    						        }
    						        ?>
    						    </select>
							<span class="error"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"><?=translate('item') . " " . translate('name')?> <span class="required">*</span></label>
						<div class="col-md-6">
						    <select class="form-control" id="item" name="item_id" data-plugin-selectTwo>
						        <?php
						        $result = $this->db->get('item')->result_array();
						        foreach ($result as $row){
						        ?>  
						        <option value="<?=$row['id']?>" <?php if($row['id'] === $stock_edit[0]['item_id']) { echo "selected"; }?>><?=$row['item']?></option>
						        <?php
						        }
						        ?>
						    </select>
							<span class="error"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"><?php echo translate('quantity'); ?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="quantity" value="<?php echo $stock_edit[0]['quantity']; ?>" required/>
							<span class="error"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"><?php echo translate('rate'); ?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="rate" value="<?php echo $stock_edit[0]['rate']; ?>" required/>
							<span class="error"></span>
						</div>
					</div>
					<footer class="panel-footer mt-lg">
						<div class="row">
							<div class="col-md-2 col-md-offset-3">
								<button type="submit" name="add" value="add" class="btn btn-default btn-block" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
									<i class="fas fa-plus-circle"></i> <?php echo translate('save'); ?>
								</button>
							</div>
						</div>	
					</footer>
				</div>
			</section>
			<input type="hidden" name="id" value="<?=$stock_edit[0]['id']?>">
			<?php echo form_close(); ?>
		</div>
    <?php } ?>
		</div>
	</div>
</section>
<script>
    $(document).ready(function(){
        $('#branch_id').val('<?=$stock_edit[0]['branch_id']?>').trigger('change');
    });
</script>