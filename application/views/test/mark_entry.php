<?php $widget = (is_superadmin_loggedin() ? 2 : 3); 
// var_dump($_SESSION);
				// var_dump($student); die;
				
?>
<div class="row">
	<div class="col-md-12">
		<section class="panel">
		<?php echo form_open($this->uri->uri_string(), array('class' => 'validate'));?>
			<header class="panel-heading">
				<h4 class="panel-title"><?=translate('select_ground')?></h4>
			</header>
			<div class="panel-body">
				<div class="row mb-sm">
					<?php if (is_superadmin_loggedin()): ?>
					<div class="col-md-2 mb-sm">
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
					<div class="col-md-3 mb-sm">
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
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label"><?=translate('subject')?> <span class="required">*</span></label>
							<?php
								if(!empty(set_value('class_id'))) {
									$arraySubject = array("" => translate('select'));
									$query = $this->subject_model->getSubjectByClassSection(set_value('class_id'), set_value('section_id'));
									$subjects = $query->result_array();
									foreach ($subjects as $row){
										$subjectID = $row['subject_id'];
										$arraySubject[$subjectID] = $row['subjectname'];
									}
								} else {
									$arraySubject = array("" => translate('select_class_first'));
								}
								echo form_dropdown("subject_id", $arraySubject, set_value('subject_id'), "class='form-control' id='subject_id' required
								data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
							?>
						</div>
					</div>
					<div class="col-md-<?php echo $widget; ?> mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('date')?> <span class="required">*</span></label>
							<?php if($this->session->userdata('date_type') === 'bs'){ ?>
							    <input type='text' name="date" class="form-control" id="nepaliDatepicker" required>
							<?php } else{ ?>
							    <input type='text' name="date" class="form-control" id="date" data-plugin-datepicker value="<?=date('Y-m-d')?>" required>
							<?php } ?>							
						</div>
					</div>
				</div>
			</div>
			<footer class="panel-footer">
				<div class="row">
					<div class="col-md-offset-10 col-md-2">
						<button type="submit" name="search" value="1" class="btn btn btn-default btn-block"> <i class="fas fa-filter"></i> <?=translate('filter')?></button>
					</div>
				</div>
			</footer>
			<?php echo form_close();?>
		</section>
		
		<?php if (isset($student)): ?>
		<section class="panel appear-animation" data-appear-animation="<?php echo $global_config['animations'];?>" data-appear-animation-delay="100">
			<?php echo form_open('test/mark_save', array('class' => 'frm-submit-msg'));
				$data = array(
					'class_id' => $class_id,
					'section_id' => $section_id,
					'date' => $date,
					'subject_id' => $subject_id,
					'session_id' => get_session_id(),
					'branch_id' => $branch_id
				);
				echo form_hidden($data);
			?>
			<header class="panel-heading">
				<h4 class="panel-title"><i class="fas fa-users"></i> <?=translate('mark_entries')?></h4>
			</header>
			<div class="panel-body">
				<?php if (count($student)){ ?>
				<div class="row">
				    <div class="col-md-6">Test Name:<input type='text' name="name" class="form-control" value="<?=$student[0]['name']?>" required></div>
				    <div class="col-md-3">Full Marks: <input type='number' name="full_marks" class="form-control" value="<?=$student[0]['full_marks']?>" required></div>
				    <div class="col-md-3">Pass Marks: <input type='number' name="pass_marks" class="form-control" value="<?=$student[0]['pass_marks']?>" required></div>
			    </div>
				<div class="table-responsive mt-md mb-lg">
					<table class="table table-bordered table-condensed mb-none">
						<thead>
							<tr>
								<th><?=translate('sl')?></th>
								<th><?=translate('student_name')?></th>
								<th><?=translate('category')?></th>
								<th><?=translate('register_no')?></th>
								<th><?=translate('roll')?></th>
								<th>IsAbsent</th>
								<th>Marks</th>
							</tr>
						</thead>
						<tbody>
							<?php $count = 1; foreach ($student as $key => $row): ?>
							<tr>
								<input type="hidden" name="mark[<?=$key?>][student_id]" value="<?=$row['student_id']?>">
								<td><?php echo $count++; ?></td>
								<td><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
								<td><?php echo get_type_name_by_id('student_category', $row['category_id']); ?></td>
								<td><?php echo $row['register_no']; ?></td>
								<td><?php echo $row['roll']; ?></td>
								<td>
									<div class="checkbox-replace"> 
										<label class="i-checks"><input type="checkbox" name="mark[<?=$key?>][absent]" <?=($row['get_abs'] == '1' ? 'checked' : ''); ?>><i></i></label>
									</div>
								</td>
								<td class="min-w-sm">
									<div class="form-group">
										<input type="text" class="form-control" autocomplete="off" name="mark[<?=$key?>][assessment][<?=$id?>]" value="<?=$row['get_mark']?>">
										<span class="error"></span>
									</div>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<?php } else { echo '<div class="alert alert-subl mt-md text-center">' . translate('no_information_available') . '</div>'; } ?>
			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col-md-offset-10 col-md-2">
						<button type="submit" class="btn btn-default btn-block" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
							<i class="fas fa-plus-circle"></i> <?=translate('save')?>
						</button>
					</div>
				</div>
			</div>
			<?php echo form_close(); ?>
		</section>
		<?php endif; ?>
	</div>
</div>
	
<script src="https://unpkg.com/nepali-date-picker@2.0.1/dist/jquery.nepaliDatePicker.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.1/dist/nepaliDatePicker.min.css" crossorigin="anonymous" />
<script>
    $(document).ready(function(){
        $('#nepaliDatepicker').nepaliDatePicker({
	        dateFormat: "%y-%m-%d",
            closeOnDateSelect: true
	    });
	    let nep_date = (calendarFunctions.getBsDateByAdDate(<?=date('Y')?>, <?=date('m')?>, <?=date('d')?>));
	    let nepDay = calendarFunctions.getNepaliNumber(nep_date.bsDate);
	    let nepMonth = calendarFunctions.getNepaliNumber(nep_date.bsMonth);
	    let nepYear = calendarFunctions.getNepaliNumber(nep_date.bsYear);
	    $('#nepaliDatepicker').val(nepYear+'-'+nepMonth+'-'+nepDay);
		$('#branch_id').on('change', function() {
			var branchID = $(this).val();
			getClassByBranch(branchID);
			getExamByBranch(branchID);
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
	});
</script>	