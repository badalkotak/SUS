<?php
include("dbcon.php");
// error_reporting(0);

$fname=$_REQUEST['fname'];
$fname=trim($fname);
$lname=$_REQUEST['lname'];
$lname=trim($lname);
$email=$_REQUEST['email'];
$email=trim($email);
$workshop=$_REQUEST['menu1'];
$get_workshop=mysqli_query($con,"SELECT * FROM Workshop WHERE id='$workshop'");
while($get_w=mysqli_fetch_array($get_workshop))
{
	$wname=$get_w['name'];
	$sys=$get_w['Sys_name'];
}

$fname=mysqli_real_escape_string($con,$fname);
$lname=mysqli_real_escape_string($con,$lname);
$email=mysqli_real_escape_string($con,$email);

function generatePassword($length = 4) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }
  
    return $result;
}
$pass=generatePassword();

if($fname=="" || $lname=="" || $email=="")
{
	echo "<script>alert('Please input all the fields!');window.location.href='researcher.php';</script>";
}
else
{
	if($insert=mysqli_query($con,"INSERT INTO `Researcher`(`fname`, `lname`, `email`,`passwd`,`workshop`) VALUES ('$fname','$lname','$email','$pass','$workshop')"))
	{
		session_start();
//ini_set("display_errors",true);
//error_reporting(E_ALL);

include("../../../PhpMailer/PHPMailerAutoload.php");         #Used for sending emails(PHP Mailer)


// $frmname		=	$_POST['frmname'];
// $frmphone	   =	$_POST['frmphone'];
// $frmemail		=	$_POST['frmemail'];
// $frmmessage	=	$_POST['frmmessage'];



	 $message = "Name: $fname $lname<br>Username: $email<br>Password: $pass<br>Workshop: $wname<br>Link: www.e-gyaan.in/IITB/SUS/Researcher/<br>SUS Form: www.e-gyaan.in/IITB/SUS/forms/$sys";

			

			$tmp_str_subject = "Login Details of IITB SUS Portal";
			
			$tmp_arr_to = $email;
			//$tmp_arr_to = array("salian.abhishek@gmail.com");
			$tmp_str_date = date("j, m, Y");
		
			$tmp_arr_file = "";
			$tmp_str_msgContent = $message;
			$tmp_str_from = $frmemail;

			

 
/*else 
{
	header('Location: enquiry.html?errmsg=c');
}
*/


function sendmsg_function($tmp_str_to, $tmp_str_subject, $tmp_str_text, $tmp_str_from,$tmp_arr_file)
{
/*########################################################################################

   Name        : sendmsg_function
   Purpose     : sends an e-mail with attchment
   Inputs      : tmp_str_to        -> to address
                        tmp_str_subject   -> subject
                        tmp_str_text      -> text message
                        tmp_strfrom       ->from address
                        tmp_str_file      -> filename
                        tmp_str_type      -> filetype
   Outputs     :
   Calls       :
   Called By   : pdfmail_function
########################################################################################*/

   #Set the flag used to false
   $tmp_str_flag = FALSE;
   
   $mailfromname=$tmp_str_from;
   #set global variables
   //global $glb_str_housestyle,$glb_admin_mailfromname,$glb_Admin_MailFrom;
   $tmp_str_from = 'info@e-gyaan.in';
   //$mailfromname = "sandeep@imageonline.co.in";
	
	

    #########################--IMPROVED EMAIL START--####################
    //Create a new PHPMailer instance
	$mail = new PHPMailer;	
	//$mail->SMTPDebug = 2;
	$mail->Debugoutput = 'html';
	$mail->Host = 'localhost';
	$mail->isSMTP();
	//Whether to use SMTP authentication
	$mail->SMTPAuth = false;
	//Username to use for SMTP authentication - use full email address for gmail
	//$mail->Username = "";
	//Password to use for SMTP authentication
	//$mail->Password = "";
	//Set who the message is to be sent from
	$mail->setFrom($tmp_str_from, $tmp_str_from);
	//Set an alternative reply-to address
	$mail->addReplyTo($tmp_str_from, $tmp_str_from);
	//Set who the message is to be sent to
	$mail->addAddress($tmp_str_to, $tmp_str_to);
	//Set the subject line
	$mail->Subject = $tmp_str_subject;
	$mail->isHTML(true);
	//Replace the plain text body with one created manually
	$mail->Body = $tmp_str_text;
	//send the message, check for errors
	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
		exit;
	} else {
		echo "Message sent!";
	}
}


// foreach($tmp_arr_to as $tmp_str_to)
// 			{
				
// 			}
			$tmp_bln_flag = sendmsg_function($email, $tmp_str_subject, $tmp_str_msgContent, $tmp_str_from,$tmp_arr_file);
			//header("Location:index.html");
		echo "<script>alert('Researcher Added!');window.location.href='researcher.php';</script>";
	}
	else
	{
		echo "<script>alert('Problem in adding researcher!');window.location.href='researcher.php';</script>";
	}
}
?>