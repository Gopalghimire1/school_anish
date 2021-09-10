
<div class="row">
	<div class="col-md-12">
		<section class="panel">
			<div class="tabs-custom">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#"><i class="fas fa-list-ul"></i> <?=translate('attachments')?></a>
					</li>
				</ul>
				<div class="tab-content">
				    <div id="assignments" class="tab-pane active">
				        <?php echo form_open_multipart('assignments/add', array('class' => 'form-bordered form-horizontal frm-submit-data')); ?>
				<?php if (is_superadmin_loggedin()): ?>
					<div class="form-group">
						<label class="control-label col-md-3"><?=translate('branch')?> <span class="required">*</span></label>
						<div class="col-md-6">
							<?php
								$arrayBranch = $this->app_lib->getSelectList('branch');
								echo form_dropdown("branch_id", $arrayBranch, set_value('branch_id'), "class='form-control' id='branch_id'
								data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity'");
							?>
							<span class="error"></span>
						</div>
					</div>
				<?php endif; ?>
				<div class="form-group">
					<label class="col-md-3 control-label"><?=translate('class')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<?php
							$arrayClass = $this->app_lib->getClass($branch_id);
							echo form_dropdown("class_id", $arrayClass, set_value('class_id'), "class='form-control' id='class_id' onchange='getSectionByClass(this.value,0)'
							data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
						?>
						<span class="error"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><?=translate('section')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<?php
							$arraySection = $this->app_lib->getSections(set_value('class_id'), true);
							echo form_dropdown("section_id", $arraySection, set_value('section_id'), "class='form-control' id='section_id'
							data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
						?>
						<span class="error"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3 control-label"><?=translate('subject')?> <span class="required">*</span></label>
					<div class="col-md-6">
						<?php
							if(!empty(set_value('class_id'))) {
								$arraySubject = array("" => translate('select'));
								$assigns = $this->db->get_where('subject_assign', array('class_id' => set_value('class_id'), 'section_id' => set_value('section_id')))->result();
								foreach ($assigns as $row){
									$arraySubject[$row->subject_id] = get_type_name_by_id('subject', $row->subject_id);
								}
							} else {
								$arraySubject = array("" => translate('select_class_first'));
							}
							echo form_dropdown("subject_id", $arraySubject, set_value('subject_id'), "class='form-control' id='subject_id'
							data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
						?>
						<span class="error"></span>
					</div>
				</div>
						    <div class="form-group">
								<label class="col-md-3 control-label"><?=translate('title')?> <span class="required">*</span></label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="title" value="<?=set_value('title')?>"  required/>
									<span class="error"></span>
								</div>
							</div>
						    <div class="form-group">
							    <label class="control-label col-md-3"><?=translate('attachment_file')?> <span class="required">*</span></label>
							    <div class="col-md-6 mb-md">
								    <input type="file" name="attachment_file" class="dropify" data-height="120" data-allowed-file-extensions="*" required/>
								    <span class="error"></span>
							    </div>
						    </div>
						<footer class="panel-footer mt-lg">
							<div class="row">
								<div class="col-md-2 col-md-offset-3">
									<button type="submit" class="btn btn-default btn-block" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
										<i class="fas fa-plus-circle"></i> <?=translate('save')?>
									</button>
								</div>
							</div>	
						</footer>
					<?php echo form_close();?>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function () {
		$('#branch_id').on('change', function() {
			var branchID = $(this).val();
			getClassByBranch(branchID);
			$('#subject_id').html('').append('<option value=""><?=translate("select")?></option>');
		});

		$('#section_id').on('change', function() {
			var classID = $('#class_id').val();
			var sectionID =$(this).val();
			$.ajax({
				url: base_url + 'subject/getByClassSection',
				type: 'POST',
				data: {
					classID: classID,
					sectionID: sectionID
				},
				success: function (data) {
					$('#subject_id').html(data);
				}
			});
		});

		$('#published_later').on('change', function() {
			if($(this).is(':checked') ){
				var date_of_homework =$('#date_of_homework').val()
				$('#schedule_date').val(date_of_homework);
				$('#schedule_date').prop("disabled", false);
			} else {
				$('#schedule_date').val("");
				$('#schedule_date').prop("disabled", true);
			}
		});
	});
</script>					        