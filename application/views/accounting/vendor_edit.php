<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li>
				<a href="<?=site_url('accounting/vendor')?>"><i class="fas fa-list-ul"></i> <?php echo translate('vendor') . " " . translate('list'); ?></a>
			</li>
<?php if (get_permission('account', 'is_add')){ ?>
			<li class="active">
				<a href="#create" data-toggle="tab"><i class="far fa-edit"></i> <?php echo translate('create') . " " . translate('vendor'); ?></a>
			</li>
<?php } ?>
		</ul>
		<div class="tab-content">
			<div id="list" class="tab-pane active">
			<?php if (get_permission('account', 'is_add')){ ?>
			<div class="tab-pane" id="create">
				<?php echo form_open($this->uri->uri_string(), array('class' => 'form-horizontal form-bordered frm-submit')); ?>
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
							<input type="text" class="form-control" name="name" value="<?php echo $vendor_edit[0]['name']; ?>" placeholder="Name.." required/>
							<span class="error"></span>
						</div>
					</div>
					<?php $phoneArray = json_decode($vendor_edit[0]['phone']);
					if($phoneArray){
					    foreach($phoneArray as $phone){ ?>
					<div class="form-group">
						<label class="col-md-3 control-label"><?=translate('phone') . " " . translate('number')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="phone[]" value='<?php echo $phone; ?>' placeholder="Phone.." required/>
							<div id="add_more_contact" class="btn btn-sm btn-info"><i class="fas fa-plus"></i></div>
							<span class="error"></span>
						</div>
					</div>
					<?php }
					}
					?>
					<div class="form-group">
						<label class="col-md-3 control-label"><?php echo translate('address1'); ?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="address1" name="address1" placeholder="Address1.." value="<?php echo $vendor_edit[0]['address1']; ?>" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"><?php echo translate('address2'); ?></label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="address2" name="address2" placeholder="Address2(optional).." value="<?php echo $vendor_edit[0]['address2']; ?>" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"><?php echo translate('email'); ?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="email" class="form-control" name="email" value="<?php echo $vendor_edit[0]['email']; ?>" placeholder="Email.." required/>
							<input type="hidden" name="id" value="<?=$vendor_edit[0]['id']?>">
							<span class="error"></span>
						</div>
					</div>
					<footer class="panel-footer mt-lg">
						<div class="row">
							<div class="col-md-2 col-md-offset-3">
								<button type="submit" class="btn btn-default btn-block" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
									<i class="fas fa-plus-circle"></i> <?php echo translate('update'); ?>
								</button>
							</div>
						</div>	
					</footer>
				<?php echo form_close(); ?>
		        </div>
<?php } ?>
			</div>
		</div>
	</div>
</section>
<script>
    $(document).on('click','#add_more_contact',function(){
       let html = ` <div class="form-group">
						<label class="col-md-3 control-label"><?=translate('phone') . " " . translate('number')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="phone[]" value="<?php echo set_value('phone'); ?>" placeholder="Phone.." required/>
							<span class="error"></span>
						</div>
						<div id="remove_contact" class="btn btn-sm btn-danger"><i class="fas fa-minus"></i></div>
					</div> `;
		$('#add_more_contact').parent().parent().after(html);
    });
    $(document).on('click','#remove_contact',function(){
        $(this).parent().remove();
    });
</script>