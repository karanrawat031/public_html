<?php
session_start();
require_once 'lib/PHPMailerAutoload.php';
$error=[];
if(isset($_POST['name'], $_POST['email'], $_POST['message'])){
	echo 'all set';
	$fields=[
		'name'=> $_POST['name'],
		'email'=> $_POST['email'],
		'message'=> $_POST['message']
	];
	foreach ($fields as $field => $data) {
		if(empty($data)){
			$error[]='The'. ' ' . $field . ' field is required.';

	}
		}
	if(empty($error)){
	        $m=new PHPMailer;
	        $m->isSMTP();
	        $m->SMTPDebug   = 2; 
	        $m->Host='smtp.gmail.com';
  	        $m->SMTPAuth=true;
	        $m->Username='karanrawat031@gmail.com';
	        $m->Password='yashgusain';
	        $m->SMTPSecure='tls';
	        $m->Port=587;
                $m->Priority    = 1;
	        $m->isHTML(true);
	        $m->Subject="Contact Form Submitted";
	        $m->Body='From: ' . $fields['name'] . '(' . $fields['email'] . ')<p>'  . $fields['message'] . '</p>';
		    $m->FromName='Contact';
		    $m->AddReplyTo($fields['email'],$fields['name']);
		    $m->AddAddress('karanrawat031@gmail.com','Karan Rawat');
		    if($m->send()){
            $error[]="It's done, We'll get back to you shortly :)";  
		    }else{ 
            $error[]="Could Not Send The Email. Try Again Later ;(";
		    }	
		}

}else
$error[] = 'Some thing went wrong SIR';

$_SESSION['error']= $error;
$_SESSION['fields']= $fields;	

header('Location: contactfe.php');


?>