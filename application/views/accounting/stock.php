<?php $widget = (is_superadmin_loggedin() ? 3 : 4); 
// var_dump($students1);
// var_dump($students2);
?>
<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#list" data-toggle="tab"><i class="fas fa-list-ul"></i> <?php echo translate('stock') . " " . translate('discharge'); ?></a>
			</li>
<?php if (get_permission('account', 'is_add')){ ?>
			<li>
				<a href="#create" data-toggle="tab"><i class="far fa-edit"></i> <?php echo translate('stock') . " " . translate('add'); ?></a>
			</li>
<?php } ?>
		</ul>
		<div class="tab-content">
			<div id="list" class="tab-pane active">
			    <section class="panel">
				<?php echo form_open($this->uri->uri_string(), array('class' => 'validate')); ?>
			        <div class="panel-body">
					<?php if (is_superadmin_loggedin()): ?>
					<div class="col-md-<?php echo $widget; ?> mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('branch')?> <span class="required">*</span></label>
							<?php
								$arrayBranch = $this->app_lib->getSelectList('branch');
								echo form_dropdown("branch_id", $arrayBranch, set_value('branch_id'), "class='form-control' id='branch_id'
								data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity'");
							?>
						</div>
					</div>
					<?php endif; ?>
					<div class="col-md-<?php echo $widget; ?> mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('class')?> <span class="required">*</span></label>
							<?php
								$arrayClass = $this->app_lib->getClass($branch_id);
								echo form_dropdown("class_id", $arrayClass, set_value('class_id'), "class='form-control' id='class_id' onchange='getSectionByClass(this.value,0)'
								required data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
							?>
						</div>
					</div>
					<div class="col-md-<?php echo $widget; ?> mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('section')?> <span class="required">*</span></label>
							<?php
								$arraySection = $this->app_lib->getSections(set_value('class_id'), false);
								echo form_dropdown("section_id", $arraySection, set_value('section_id'), "class='form-control' id='section_id' required
								data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
							?>
						</div>
					</div>
					<div class="col-md-<?php echo $widget; ?> mb-sm">
						<div class="form-group">
						<label class="control-label"><?php echo translate('item'); ?></label>
						    <select class="form-control" id="item" name="item_id" data-plugin-selectTwo required>
						        <option value="" selected disabled>Select</option>
						        <?php
						        foreach ($itemlist as $row){
						        ?>  
						        <option value="<?=$row['id']?>"><?=$row['item']?></option>
						        <?php
						        }
						        ?>
						    </select>
							<span class="error"></span>
						</div>
					</div>
					</div>
					<footer class="panel-footer mt-lg">
						<div class="row">
							<div class="col-md-2 col-md-offset-3">
								<button type="submit" name="submit_discharge" class="btn btn-default btn-block" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
									<i class="fas fa-plus-circle"></i> <?php echo translate('submit'); ?>
								</button>
							</div>
						</div>	
					</footer>
				<?php echo form_close(); ?>
				</section>
				<?php 
				if($students1 || $students2){ ?>
				<section class="panel appear-animation" data-appear-animation="<?php echo $global_config['animations'];?>" data-appear-animation-delay="100">
				    <div class="panel-body">
				        <table class="table table-condensed table-striped  table-hover table-condensed table-export mt-md">
				            <thead>
				                <tr>
				                    <th>Student Name</th>
				                    <th>Roll No.</th>
				                    <th>Item</th>
				                    <th>Action</th>
				                </tr>
				            </thead>
				            <tbody>
				                <?php if($students2){
				                foreach($students2 as $student){
				                ?>
				                <tr>
				                    <td><?=$student['first_name'] .' '. $student['middle_name'] .' '. $student['last_name']?></td>
				                    <td><?=$student['roll']?></td>
				                    <td><?=$item['item']?></td>
				                    <td>
				                        <button onclick="assign_student(<?=$branch_id?>,<?=$student['id']?>,<?=$item['id']?>)" class="btn btn-sm btn-primary ">Assign</button>
				                    </td>
				                </tr>
				                <?php } 
				                } ?>
				                <?php if($students1){
				                foreach($students1 as $student){
				                ?>
				                <tr>
				                    <td><?=$student['first_name'] .' '. $student['middle_name'] .' '. $student['last_name']?></td>
				                    <td><?=$student['roll']?></td>
				                    <td><?=$item['item']?></td>
				                    <td>
				                        <button class="btn btn-sm" readonly>Assigned</button>
				                    </td>
				                </tr>
				                <?php } 
				                } ?>
				            </tbody>
				        </table>
				    </div>
				</section>
				<?php }  else { ?>
				    <section class="panel appear-animation" data-appear-animation="<?php echo $global_config['animations'];?>" data-appear-animation-delay="100">
				        <div class="text-center"><h4>No results to display.</h4></div>
				    </section>
				<?php } ?>
			</div>
<?php if (get_permission('account', 'is_add')){ ?>
			<div class="tab-pane" id="create">
                <?php echo form_open(site_url('accounting/stock_discharge'), array('class' => 'form-horizontal form-bordered frm-submit')); ?>
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
    						        foreach ($vendorlist as $row){
    						        ?>  
    						        <option value="<?=$row['id']?>"><?=$row['name']?></option>
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
						        foreach ($itemlist as $row){
						        ?>  
						        <option value="<?=$row['id']?>"><?=$row['item']?></option>
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
							<input type="number" class="form-control" name="quantity" value="<?php echo set_value('quantity'); ?>" required/>
							<span class="error"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"><?php echo translate('rate'); ?> <span class="required">*</span></label>
						<div class="col-md-6">
							<input type="number" class="form-control" name="rate" value="<?php echo set_value('rate'); ?>" required/>
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
				<?php echo form_close(); ?>
				<?php 
				if($stocks){
				    foreach($stocks as $stock){ ?>
				    <table class="table table-bordered">
				        <thead>
				            <tr>
				                <th>Vendor</th>
				                <th>Item</th>
				                <th>Quantity</th>
				                <th>Price</th>
				                <th>Actions</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td><?=$stock['name']?></td>
				                <td><?=$stock['item']?></td>
				                <td><?=$stock['quantity']?></td>
				                <td><?=$stock['rate']?></td>
				                <td>
				                    <a href="<?=site_url('accounting/update_stock/'.$stock['id'])?>" class="btn btn-sm btn-circle btn-default icon"><i class="fas fa-pen"></i></a>
				                    <a href="<?=site_url('accounting/delete_stock/'.$stock['id'])?>" class="btn btn-sm btn-circle btn-danger icon"><i class="fas fa-trash-alt"></i></a>
				                </td>
				            </tr>
				        </tbody>
			        </table>
				    <?php 
				    }
				} ?>
			</div>
			</div>
<?php } ?>
		</div>
	</div>
</section>
<script>
    function assign_student(branch_id, student_id, item_id){
        $.post('<?=site_url("accounting/stock_discharge")?>',{branch_id: branch_id, student_id: student_id, item_id: item_id}).done(function(data){
            if(Number(data)){
                location.reload();
            }
            else{
                alert('failure');
            }
            console.log(data);
        }).fail(function(){
            alert('Failed to assign item to student');
        });
    }
	$(document).ready(function () {
		$(document).on('change', '#branch_id', function() {
			var branchID = $(this).val();
			getClassByBranch(branchID);

			$.ajax({
				url: "<?=base_url('ajax/getDataByBranch')?>",
				type: 'POST',
				data: {
					table: 'subject',
					branch_id: branchID
				},
				success: function (data) {
					$('#subject_holder').html(data);
				}
			});
		});
	});
</script>