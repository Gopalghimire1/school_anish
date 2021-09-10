<?php $widget = (is_superadmin_loggedin() ? 3 : 4); ?>
<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#list" data-toggle="tab"><i class="fas fa-list-ul"></i> <?php echo translate('shuffle') . " " . translate('roll'); ?></a>
			</li>
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
							<label class="control-label"><?=translate('shuffle_type')?> <span class="required">*</span></label>
							<select id="shuffle_type" name="shuffle_type" class="form-control" data-plugin-selectTwo>
							    <option value="" selected disabled>Select</option>
							    <option value="date">Date Modified</option>
							    <option value="alphabet">Aplabetical Order</option>
							</select>
						</div>
					</div>
					</div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-md-2 col-md-offset-3">
								<button type="submit" class="btn btn-default btn-block" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
									<i class="fas fa-plus-circle"></i> <?php echo translate('shuffle'); ?>
								</button>
							</div>
						</div>	
					</div>
				<?=form_close();?>
				</section>
				<?php if($students) { ?>
				<section class="panel">
				    <div style="width:25%;margin-left:auto;margin-right:auto;">
				    <table class="table table-bordered table-striped">
				        <thead>
				            <tr>
				                <th>Roll Number</th>
				                <th>Student's Name</th>
				            </tr>
				        </thead>
				        <tbody>
				            <?php foreach($students as $student){ ?>
				            <tr>
				                <th><?= $student['roll']?></th>
				                <th><?= $student['first_name'] ." ". $student['middle_name'] ." ". $student['last_name']?></th>
				            </tr>
				            <?php } ?>
				        </tbody>
				    </table>
				    </div>
				</section>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	$(document).ready(function () {
		$('#branch_id').on('change', function() {
			var branchID = $(this).val();
			getClassByBranch(branchID);
			getExamByBranch(branchID);
			$('#subject_id').html('').append('<option value=""><?=translate("select")?></option>');
		});
	})
</script>