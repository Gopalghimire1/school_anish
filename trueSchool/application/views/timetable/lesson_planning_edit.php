<?php 
// echo 1; die;
//var_dump($lesson_planning);
?>
<div class="row">
<?php if (get_permission('assign_class_teacher', 'is_add')  || is_teacher_loggedin()): ?>
	<div class="col-md-4 offset-md-4">
		<section class="panel">
			<header class="panel-heading">
				<h4 class="panel-title"><i class="far fa-edit"></i> <?=translate('class_teacher_allocation')?></h4>
			</header>
			<?php echo form_open('timetable/lesson_planning_edit');?>
				<div class="panel-body">
					<?php if (is_superadmin_loggedin()): ?>
					<div class="form-group">
						<label class="control-label"><?=translate('branch')?> <span class="required">*</span></label>
						<input  class="form-control" value="<?=$lesson_planning[0]['branch_name']?>" disabled>
						<span class="error"></span>
					</div>
					<?php endif; ?>
					<div class="form-group">
						<label class="control-label"><?=translate('class')?> <span class="required">*</span></label>
						<input class="form-control" type="text" value="<?=$lesson_planning[0]['class_name']?>" disabled>
						<span class="error"></span>
					</div>
					<div class="form-group">
						<label class="control-label"><?=translate('section')?> <span class="required">*</span></label>
						<input  class="form-control" value="<?=$lesson_planning[0]['section_name']?>" disabled>
						<span class="error"></span>
					</div>
					<div class="form-group mb-md">
						<label class="control-label"><?=translate('teacher')?> <span class="required">*</span></label>
						<input  class="form-control" value="<?=$lesson_planning[0]['teacher_name']?>" disabled>
						<span class="error"></span>
					</div>
					<div class="form-group mb-md">
						<label class="control-label"><?=translate('subject')?> <span class="required">*</span></label>
						<input  class="form-control" value="<?=$lesson_planning[0]['subject_name']?>" disabled>
						<span class="error"></span>
					</div>							
					<div class="form-group mb-md">
						<label class="control-label"><?=translate('topic')?> <span class="required">*</span></label>
						<input class="form-control" type="text" id="topic" name="topic" value="<?=$lesson_planning[0]['topic']?>">
						<span class="error"></span>
					</div>			
					<div class="form-group mb-md">
						<label class="control-label"><?=translate('start_date')?> <span class="required">*</span></label>
						<?php if($this->session->userdata('date_type') === 'ad'){ ?>
						    <input class="form-control" type="text" data-plugin-datepicker id="start_date" name="start_date" value="<?=$lesson_planning[0]['start_date']?>">
						<?php } else { 
    						$birthday = explode('-',($lesson_planning[0]['start_date']));
                            $dateConvert = new DateConvert();
                            $date = $dateConvert->get_nepali_date($birthday[0],$birthday[1],$birthday[2]);
                            $lesson_planning[0]['start_date'] = englishToNepali($date['y']).'-'.englishToNepali($date['m']).'-'.englishToNepali($date['d']);?>
						    <input class="form-control" type="text" id="nepaliDatepicker" name="start_date" value="<?=$lesson_planning[0]['start_date']?>">
						<?php } ?>
						<span class="error"></span>
					</div>
					<div class="form-group mb-md">
						<label class="control-label"><?=translate('end_date')?> <span class="required">*</span></label>
						<?php if($this->session->userdata('date_type') === 'ad'){ ?>
						    <input class="form-control" type="text" data-plugin-datepicker id="end_date" name="start_date" value="<?=$lesson_planning[0]['end_date']?>">
						<?php } else { 
    						$birthday = explode('-',($lesson_planning[0]['end_date']));
                            $dateConvert = new DateConvert();
                            $date = $dateConvert->get_nepali_date($birthday[0],$birthday[1],$birthday[2]);
                            $lesson_planning[0]['end_date'] = englishToNepali($date['y']).'-'.englishToNepali($date['m']).'-'.englishToNepali($date['d']);
						    ?>
						    <input class="form-control" type="text" id="nepaliDatepicker2" name="end_date" value="<?=$lesson_planning[0]['end_date']?>">
						    <input type="hidden" name="id" value="<?=$lesson_planning[0]['id']?>">
						<?php } ?>
						<span class="error"></span>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col-md-12">
			                <button type="submit" name="save" value="1" class="btn btn-default pull-right" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing">
			                    <i class="fas fa-plus-circle"></i> <?=translate('save') ?>
			                </button>
						</div>	
					</div>
				</div>
			<?php echo form_close();?>
		</section>
	</div>
<?php endif; ?>
<script src="https://unpkg.com/nepali-date-picker@2.0.1/dist/jquery.nepaliDatePicker.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://unpkg.com/nepali-date-picker@2.0.1/dist/nepaliDatePicker.min.css" crossorigin="anonymous" />
<script>
	$(document).ready(function () {
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
    	    $('#nepaliDatepicker2').nepaliDatePicker({
    	        dateFormat: "%y-%m-%d",
                closeOnDateSelect: true
    	    });
        });
	});
</script>