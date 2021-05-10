<?php
include '../database/config.php';


if(isset($_POST['forget'])) {
    
        
    if(empty($_POST['mail'])) {
        
        $error_message ='Check The Mail';
    } else {
        
        $mail = strip_tags($_POST['mail']);
       
        $statement = $pdo->prepare("SELECT * FROM tbl_users WHERE email=?");
        $statement->execute(array($mail));
        $total = $statement->rowCount();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $row) {
            $cust_status = $row['role'];
            $row_password = $row['password'];
            $fourdigitrandom = rand(1000,9999); 
            
    
     $message='Your PassWord Is '.$fourdigitrandom.' ';
	$app_name = "Mock Me";
	$from_mail ="mallikumar1998@gmail.com";
	$reply_to ="mallikumar1998@gmail.com";
	
	//send email
	$headers = "From: ".$app_name."<".$from_mail.">\n";
	$headers .= "Reply-To: ".$reply_to."\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";
		if(!mail($mail,'password Change',$message,$headers)){

			 echo"<script>alert('Your Message Sent Failed Please Try Again !');window.location = '../forgot_pw.php';</script>"; 
			
			
}

		else {
		    $npassword=$fourdigitrandom;
		    
		$statement = $pdo->prepare("UPDATE tbl_users SET password=? WHERE email=?");
		$statement->execute(array($npassword,$mail));
		    
		    	 echo"<script>alert('Your Message Sent Successfully Check Mail !');window.location = '../login.php';</script>"; 
	
			
		}		

        }
        
        }
    }

?>


