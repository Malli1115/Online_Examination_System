<?php
include '../../database/config.php';
include '../../includes/uniques.php';
$examid = mysqli_real_escape_string($conn, $_POST['exam_id']);
$question_id = 'QS-'.get_rand_numbers(6).'';
$question = mysqli_real_escape_string($conn, $_POST['question']);
$answer = mysqli_real_escape_string($conn, $_POST['answer']);


 $path = $_FILES['photo']['name'];
 $path_tmp = $_FILES['photo']['tmp_name'];
if($path != ''){
 $ext = pathinfo( $path, PATHINFO_EXTENSION );
 $final_name = 'photo-'.$question_id.'.'.$ext;
 move_uploaded_file( $path_tmp, '../../assets/uploads/'.$final_name );
}else{
   $final_name='';
}

if (isset($_GET['type'])) {
$question_type = $_GET['type'];	
if ($question_type == "mc") {	
$opt1 = mysqli_real_escape_string($conn, $_POST['opt1']);
$opt2 = mysqli_real_escape_string($conn, $_POST['opt2']);
$opt3 = mysqli_real_escape_string($conn, $_POST['opt3']);
$opt4 = mysqli_real_escape_string($conn, $_POST['opt4']);

 $path1 = $_FILES['fstimg']['name'];
 $path_tmp1 = $_FILES['fstimg']['tmp_name'];
 if($path1 != ''){
    $ext1 = pathinfo( $path1, PATHINFO_EXTENSION );
 $final_name1 = 'fstimg-'.$question_id.'.'.$ext1;
 move_uploaded_file( $path_tmp1, '../../assets/uploads/answer/'.$final_name1 );
 }else{$final_name1='';}
 

 $path2 = $_FILES['sedimg']['name'];
 $path_tmp2 = $_FILES['sedimg']['tmp_name'];
 if($path2 != ''){
    $ext2 = pathinfo( $path2, PATHINFO_EXTENSION );
 $final_name2 = 'sedimg-'.$question_id.'.'.$ext2;
 move_uploaded_file( $path_tmp2, '../../assets/uploads/answer/'.$final_name2 );
 }else{$final_name2='';}
 

 $path3 = $_FILES['trdimg']['name'];
 $path_tmp3 = $_FILES['trdimg']['tmp_name'];
 if($path3 != ''){
     $ext3 = pathinfo( $path3, PATHINFO_EXTENSION );
 $final_name3 = 'trdimg-'.$question_id.'.'.$ext3;
 move_uploaded_file( $path_tmp3, '../../assets/uploads/answer/'.$final_name3 );
 }else{$final_name3='';}


 $path4 = $_FILES['frtimg']['name'];
 $path_tmp4 = $_FILES['frtimg']['tmp_name'];
 if($path4 != ''){
    $ext4 = pathinfo( $path4, PATHINFO_EXTENSION );
 $final_name4 = 'frtimg-'.$question_id.'.'.$ext4;
 move_uploaded_file( $path_tmp4, '../../assets/uploads/answer/'.$final_name4 );
 }else{$final_name4='';}
 

$sql = "SELECT * FROM tbl_questions WHERE exam_id = '$examid' AND question = '$question'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
 header("location:../add-questions.php?rp=1185&eid=$examid");
    }
} else {

$sql = "INSERT INTO tbl_questions (question_id, exam_id, type, question,image, option1, option2, option3, option4, fstimg, sedimg, trdimg, frtimg, answer)
VALUES ('$question_id', '$examid', 'MC', '$question','$final_name', '$opt1', '$opt2', '$opt3', '$opt4', '$final_name1', '$final_name2',
 '$final_name3', '$final_name4', '$answer')";

if ($conn->query($sql) === TRUE) {
    header("location:../add-questions.php?rp=0357&eid=$examid");	
} else {
 header("location:../add-questions.php?rp=3903&eid=$examid");	
}

}


}else if($question_type == "fib") {
$sql = "SELECT * FROM tbl_questions WHERE exam_id = '$examid' AND question = '$question'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
header("location:../add-questions.php?rp=1185&eid=$examid");
    }
} else {

$sql = "INSERT INTO tbl_questions (question_id, exam_id, type, question,image, answer)
VALUES ('$question_id', '$examid', 'FB', '$question','$final_name', '$answer')";

if ($conn->query($sql) === TRUE) {
  header("location:../add-questions.php?rp=0357&eid=$examid");  	
} else {
 header("location:../add-questions.php?rp=3903&eid=$examid");
}


}


}else{
	
}
	
}else{
	
header("location:../");	
	
}


?>