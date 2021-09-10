<?php
// var_dump($students); die;
$name = $this->input->post('name');
$class_id = $this->input->post('class_id');
$section_id = $this->input->post('section_id');
$subject_id = $this->input->post('subject_id');
$branch_id = $this->input->post('branch_id');
$students = $this->db->query('SELECT enroll.*, student.first_name, student.last_name, student.register_no, student.category_id, test.marks as get_mark, test.name, test.pass_marks, test.full_marks,test.absent as get_abs, test.date as test_date, subject.name as subject_name FROM `test` left join enroll on enroll.student_id = test.student_id left join student on student.id = test.student_id left join subject on subject.id = test.subject_id where test.name = "'.$name.'" and test.subject_id = "'.$subject_id.'" and test.class_id = "'.$class_id.'" and test.section_id = "'.$section_id.'" and test.branch_id = "'.$branch_id.'"')->result_array();
// var_dump($students); die;
// echo json_encode($students);die;
?>
<section class="panel">
<header class="panel-heading">
    <h4 class="panel-title"><i class="fas fa-list-ul"></i>Student Results</h4>
</header>
<div class="panel-body">
    Full Marks: <?= $students[0]['full_marks'] ?>
    Pass Marks: <?= $students[0]['pass_marks'] ?>
<table class="table table-bordered table-striped">
    <thead>
    <tr>
        <th>SN</th>
        <th>Student Name</th>
        <th>Roll</th>
        <th>Date</th>
        <th>Subject</th>
        <th>Marks</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if($students){
    $sn = 1;
    foreach($students as $student){
        ?>
        <tr>
            <td><?= $sn++ ?></td>
            <td><?= $student['first_name'].' '.$student['last_name'] ?></td>
            <td><?= $student['roll'] ?></td>
            <td><?= $student['test_date'] ?></td>
            <td><?= $student['subject_name'] ?></td>
            <td><?= $student['get_mark'] ?></td>
        </tr>
    <?php
    }
    }
     ?>
    </tbody>
</table>
</div>
<footer class="panel-footer"><div class="text-right">
    <button class="btn btn-default modal-dismiss"><i class="fas fa-times"> close</i></button>
</footer>
</section><?php die;?>