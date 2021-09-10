<?php 
// echo 1; die;
//var_dump($_SESSION);
?>
<div class="row">
<?php if (get_permission('assign_class_teacher', 'is_add') || is_teacher_loggedin()): ?>
	<div class="col-md-3">
		<section class="panel">
			<header class="panel-heading">
				<h4 class="panel-title"><i class="far fa-edit"></i> <?=translate('class_teacher_allocation')?></h4>
			</header>
			<?php echo form_open('timetable/lesson_planning', array('class' => 'frm-submit'));?>
				<div class="panel-body">
					<?php if (is_superadmin_loggedin()): ?>
					<div class="form-group">
						<label class="control-label"><?=translate('branch')?> <span class="required">*</span></label>
						<?php
							$arrayBranch = $this->app_lib->getSelectList('branch');
							echo form_dropdown("branch_id", $arrayBranch, set_value('branch_id'), "class='form-control' id='branch_id'
							data-width='100%' data-plugin-selectTwo data-minimum-results-for-search='Infinity'");
						?>
						<span class="error"></span>
					</div>
					<?php endif; ?>
					<div class="form-group">
						<label class="control-label"><?=translate('class')?> <span class="required">*</span></label>
						<?php
							$arrayClass = $this->app_lib->getClass($branch_id);
							echo form_dropdown("class_id", $arrayClass, set_value('class_id'), "class='form-control' id='class_id' onchange='getSectionByClass(this.value,0)'
							data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
						?>
						<span class="error"></span>
					</div>
					<div class="form-group">
						<label class="control-label"><?=translate('section')?> <span class="required">*</span></label>
						<?php
							$arraySection = $this->app_lib->getSections(set_value('class_id'));
							echo form_dropdown("section_id", $arraySection, set_value('section_id'), "class='form-control' id='section_id' 
							data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' ");
						?>
						<span class="error"></span>
					</div>
					<?php if(!is_teacher_loggedin()){ ?>
					<div class="form-group mb-md">
						<label class="control-label"><?=translate('teacher')?> <span class="required">*</span></label>
						<select id="staff_id" name="staff_id" class='form-control' data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' >
						    <option value="" selected disabled>Select Subject first</option>
						</select>
						<span class="error"></span>
					</div>
					<?php } ?>
					<div class="form-group mb-md">
						<label class="control-label"><?=translate('subject')?> <span class="required">*</span></label>
						<select id="subject_id" name="subject_id" class='form-control' data-plugin-selectTwo data-width='100%' data-minimum-results-for-search='Infinity' >
						    <option value="" selected disabled>Select Section first</option>
						</select>
						<span class="error"></span>
					</div>							
					<div class="form-group mb-md">
						<label class="control-label"><?=translate('topic')?> <span class="required">*</span></label>
						<input class="form-control" type="text" id="topic" name="topic">
						<span class="error"></span>
					</div>			
					<div class="form-group mb-md">
						<label class="control-label"><?=translate('start_date')?> <span class="required">*</span></label>
						<?php if($this->session->userdata('date_type') === 'ad'){ ?>
						    <input class="form-control" type="text" data-plugin-datepicker id="start_date" name="start_date" value="<?=date('Y-m-d',strtotime('today'))?>">
						<?php } else { ?>
						    <input class="form-control" type="text" id="nepaliDatepicker" name="start_date">
						<?php } ?>
						<span class="error"></span>
					</div>
					<div class="form-group mb-md">
						<label class="control-label"><?=translate('end_date')?> <span class="required">*</span></label>
						<?php if($this->session->userdata('date_type') === 'ad'){ ?>
						    <input class="form-control" type="text" data-plugin-datepicker id="end_date" name="start_date" value="<?=date('Y-m-d',strtotime('+ 3 days'))?>">
						<?php } else { ?>
						    <input class="form-control" type="text" id="nepaliDatepicker2" name="end_date">
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
	<div class="col-md-<?php if (get_permission('assign_class_teacher', 'is_add')  || is_teacher_loggedin()){ echo "9"; }else{ echo "12"; } ?>">
		<section class="panel">
			<header class="panel-heading">
				<h4 class="panel-title"><i class="fas fa-list-ul"></i> <?=translate('class_teacher') . " " . translate('list')?></h4>
			</header>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover table-condensed mb-none  table-export">
						<thead>
							<tr>
							    <th>#</th>
							    <?php if(is_superadmin_loggedin()){
							        echo "<th>".translate('branch')."</th>";
							    } ?>
							    <?php if(!is_teacher_loggedin()){
							        echo "<th>".translate('teacher')."</th>";
							    } ?>
								<th><?=translate('class')?></th>
								<th><?=translate('section')?></th>
								<th><?=translate('subject')?></th>
								<th><?=translate('topic')?></th>
								<th><?=translate('start_date')?></th>
								<th><?=translate('end_date')?></th>
								<th><?=translate('completed')?></th>
								<th><?=translate('action')?></th>
							</tr>
						</thead>
						<tbody>
							<?php
							$count = 1;
							if ($lesson_planning){
								foreach ($lesson_planning as $result):
							?>
							<tr>
							    <td><?php echo $count++;?></td>
							    <?php if(is_superadmin_loggedin()){
							        echo "<td>".$result['branch_name']."</td>";
							    }?>
							    <?php if(!is_teacher_loggedin()){
							        echo "<td>".$result['teacher_name']."</td>";
							    }?>
								<td><?php echo $result['class_name'];?></td>
								<td><?php echo $result['section_name'];?></td>
								<td><?php echo $result['subject_name'];?></td>
								<td><?php echo $result['topic'];?></td>
								<td>
								    <?php
							        if($this->session->userdata('date_type') === 'bs'){
                						$birthday = explode('-',($result['start_date']));
                                        $dateConvert = new DateConvert();
                                        $date = $dateConvert->get_nepali_date($birthday[0],$birthday[1],$birthday[2]);
                                        $result['start_date'] = englishToNepali($date['y']).'-'.englishToNepali($date['m']).'-'.englishToNepali($date['d']);
							        }
                                    echo $result['start_date']; 
							        ?>
							    </td>
								<td>
								    <?php
							        if($this->session->userdata('date_type') === 'bs'){
                						$birthday = explode('-',($result['end_date']));
                                        $dateConvert = new DateConvert();
                                        $date = $dateConvert->get_nepali_date($birthday[0],$birthday[1],$birthday[2]);
                                        $result['end_date'] = englishToNepali($date['y']).'-'.englishToNepali($date['m']).'-'.englishToNepali($date['d']);
							        }
							        echo $result['end_date']; 
							        ?>
						        </td>
								<td <?=($result['completed'])?"class='bg-success'":"class='bg-danger'" ?>>
								    <?=($result['completed'])?"Yes":"No"?>
    						        <?php if (get_permission('assign_class_teacher', 'is_edit') || is_teacher_loggedin()): 
    						            if(!$result['completed']){
    						                echo "<button class='btn btn-success btn-sm btn-circle icon' onclick='mark_completed(".$result['id'].")'><small>Complete</small></button>";
    						            }
						            endif; ?>
							    </td>
								<td>
								<?php if (get_permission('assign_class_teacher', 'is_edit') || is_teacher_loggedin()): ?>
									<!-- update link -->
									<a href="<?=site_url('timetable/lesson_planning_edit/' . $result['id'])?>" class="btn btn-circle btn-default icon">
										<i class="fas fa-pen-nib"></i>
									</a>
								<?php endif; ?>
								<?php if (get_permission('assign_class_teacher', 'is_delete') || is_teacher_loggedin()): ?>
									<!-- delete link -->
									<?=btn_delete('timetable/lesson_planning_delete/' . $result['id'])?>
								<?php endif; ?>
								</td>
							</tr>
							<?php
								endforeach; 
							}else {
								echo '<tr><td colspan="8"><h5 class="text-danger text-center">' . translate('no_information_available') . '</td></tr>';
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
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
		$(document).on('change', '#branch_id', function(e) {	
			var branchID = $(this).val();
			getClassByBranch(branchID);
		});
	});
	
	$('#section_id').on('change', function() {
	        <?php 
                if(is_superadmin_loggedin()){ echo "let branch_id = $('#branch_id').val();"; 
            }?>
			var classID = $('#class_id').val();
			var sectionID =$(this).val();
			$.ajax({
    	        <?php 
                    if(is_teacher_loggedin()){ 
                        echo "url: '".base_url()."timetable/getSubjectByTeacherClassSection',"; 
                    } else {
                        echo "url: '".base_url()."timetable/getTeacherByClassSection',";
                    }
                ?>
				type: 'POST',
				data: {
					class_id: classID,
					section_id: sectionID
					<?php if(is_superadmin_loggedin()){ echo ',branch_id: branch_id'; }?>
				},
				success: function (data) {
                let result = JSON.parse(data);
                <?php
                    if(is_teacher_loggedin()){ 
                        echo "$('#subject_id').html(result);"; 
                    } else {
                        echo "$('#staff_id').html(result);";
                    }
                ?>
				}
			});
		});
    $(document).on('change','#staff_id',function(){
        let class_id = $('#class_id').val();
        let section_id = $('#section_id').val();
        let staff_id = $('#staff_id').val();
        <?php if(is_superadmin_loggedin()){ echo "let branch_id = $('#branch_id').val();"; }?>
        $.ajax({
            url : '<?=site_url('timetable/getSubjectByTeacherClassSection')?>',
            data: { class_id: class_id, section_id:section_id, staff_id: staff_id<?php if(is_superadmin_loggedin()){ echo ',branch_id: branch_id'; }?> },
            method: 'post',
            success: function(data){
                let result = JSON.parse(data);
                // console.log(result);
                $('#subject_id').html(result);
            },
            error: function(){
                alert('error retreiving teacher data!');
            }
        })
    })
    function mark_completed(id){
        $.ajax({
            url: '<?=site_url('timetable/complete_lesson')?>',
            method: 'post',
            data: { id:id },
            success: function(data){
                result = Number(JSON.parse(data));
                if(result){
                    location.reload();
                }
                else{
                    alert('Error completing lesson');
                }
            },
            error: function(){
                alert('Error');
            }
        });
    }
</script>