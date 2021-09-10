<?php $widget = (is_superadmin_loggedin() ? 2 : 3); 
// var_dump($_SESSION);
// var_dump($test_result); 
// var_dump($query); 
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
					<div class="col-md-3 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('section')?> <span class="required">*</span></label>
							<?php
								$arraySection = $this->app_lib->getSections(set_value('class_id'), false);
								echo form_dropdown("section_id", $arraySection, set_value('section_id'), "class='form-control' id='section_id' required
								data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
							?>
						</div>
					</div>
					<div class="col-md-3 mb-sm">
						<div class="form-group">
							<label class="control-label"><?=translate('result_type')?> <span class="required">*</span></label>
							<select id="result_type" name="result_type" class="form-control" data-plugin-selectTwo>
							    <option value="" selected disabled>Select</option>
							    <option value="monthly">Monthly</option>
							    <option value="subject_wise">Subjectwise</option>
							    <option value="all">All</option>
							</select>
						</div>
					</div>
					<div class="col-md-3 mb-sm" id="month_div" style="display:none;">
						<div class="form-group">
							<label class="control-label"><?=translate('month')?> <span class="required">*</span></label>
							<select id="month" name="month" class="form-control" data-plugin-selectTwo>
							    <option value="" selected disabled>Select</option>
							    <option value="1">January</option>
							    <option value="2">February</option>
							    <option value="3">March</option>
							    <option value="4">April</option>
							    <option value="5">May</option>
							    <option value="6">June</option>
							    <option value="7">July</option>
							    <option value="8">August</option>
							    <option value="9">September</option>
							    <option value="10">October</option>
							    <option value="11">November</option>
							    <option value="12">December</option>
							</select>
						</div>
					</div>
					<div class="col-md-3" id="subject_div" style="display:none;">
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
	</div>
</div>

<?php
if($test_result){
    ?>
<section class="panel appear-animation" data-appear-animation="<?php echo $global_config['animations'];?>" data-appear-animation-delay="100">
    <div class="container">

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>SN</th>
                <th>Exam Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $sn = 1;
            foreach($test_result as $result){?>
            <tr>
                <td><?=$sn++?></td>
                <td><?=$result['name']?></td>
                <td><button class="btn btn-circle btn-default icon" onclick="outputModal('<?=$result['name']?>','<?=$result['branch_id']?>','<?=$result['class_id']?>','<?=$result['section_id']?>','<?=$result['subject_id']?>')"><i class="fas fa-eye"></i></button></td>       
            </tr>
            <?php } ?>
        </tbody>
    </table>

      <?php
} else {
    echo "<h1 class='text-center'>No test taken on this day</h1>";
}

?>
    </div>
</section>
<div class="zoom-anim-dialog modal-block modal-block-lg mfp-hide" id="modal">
	<section class="panel" id='quick_view'></section>
</div>

<script src="https://unpkg.com/nepali-date-picker@2.0.1/dist/jquery.nepaliDatePicker.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.1/dist/nepaliDatePicker.min.css" crossorigin="anonymous" />
<script>
    $(document).on('change','#result_type',function(){
        if($('#result_type').val() === 'monthly'){
            $('#subject_div').hide();
            $('#month_div').show();
        } else if($('#result_type').val() === 'subject_wise'){
            $('#subject_div').show();
            $('#month_div').hide();
        } else{
            $('#subject_div').hide();
            $('#month_div').hide();
        }
    });
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
		<?php 
		if($result_type){
		    ?>
		    $('#result_type').val('<?=$result_type?>').trigger('change');
		    <?php
		}
		?>

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
		$('#marksheet').DataTable({
			"dom": '<"row"<"col-sm-6"l><"col-sm-6"f>><"table-responsive"t>p',
			"lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
			"pageLength": 10,
			"columnDefs": [
				{targets: [1,-1], orderable: false}
			],
		});
	});
	function outputModal(name,branch_id, class_id, section_id, subject_id){
    $.ajax({
        url: base_url + 'test/testStudentResultModal',
        type: 'POST',
        data: {
            name: name,
            branch_id: branch_id,
            class_id: class_id,
            section_id: section_id,
            subject_id: subject_id
        },
        dataType: "html",
        success: function (data) {
            console.log(data);
            $('#quick_view').html(data);
            mfp_modal('#modal');
        }
    });
	}
</script>