<?php
session_start();
ini_set('display_errors', 1); ini_set('log_errors',1); error_reporting(E_ALL); mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$staff=$_SESSION['id'];
$servername = "mysql.ct.mitindia.edu";
$username = "ctalumni_chair";
$password = "mitctalumni2019";
$dbname = "ctalumni";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$reg=$_POST['reg'];
$pass = $_POST['pass'];
$sem= 1;
$update = 0;
$type = $_POST['type'];
$sqlname = "SELECT * FROM `StudentDetails` WHERE `reg_no` = '$reg'";
$mailID= "";
$name = "";
$result = mysqli_query($conn,$sqlname);
	if(mysqli_num_rows($result)>0)
	{
		while($r=mysqli_fetch_array($result)){
			$name = $r['name'];
			$mailID = $r['email'];
		}
	}
$sql1="CREATE TABLE `$reg`( `ccode` VARCHAR(100) NOT NULL , `cname` VARCHAR(100) NOT NULL , `credits` INT NOT NULL , `grade` VARCHAR(50) NOT NULL , `sem` INT NOT NULL, PRIMARY KEY(ccode,sem) )";

$sql2="INSERT INTO `student`(`regno`, `name`,`type`, `pass`, `sem`, `update`, `fa`) VALUES ('$reg','$name','$type','$pass','$sem','$update','$staff')";
echo $sql1;
echo $sql2;
if(mysqli_query($conn,$sql1)&&mysqli_query($conn,$sql2)){
        //echo("Error description: " . mysqli_error($conn));
}
//echo "Succ";

/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ctstudentprofile@gmail.com';                 // SMTP username
    $mail->Password = 'ctmit1234';                           // SMTP password
    //$mail->Username = 'act@mitindia.edu';                 // SMTP username
    //$mail->Password = '68Q<mgZ4';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ctstudentprofile@gmail.com', 'donotreply@CToffice');
    $mail->addAddress($mailID);     // Add a recipient
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    //Attachments
	//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
 	//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true); 
    $mail->Subject = 'CT Student Profile - Account Created';
    $message = '<html><body>';
    $message .= "Hi ";
    $message .= $name;
    $message .= "<BR>Your Membership is approved. Don't share this mail to fellow students. <br> ";
	$message .= "<br>Register number: <b>";
	$message .= $reg;
	$message .= "</b><br/> Your password is<b> ";
	$message .= $pass;
	$message .= "</b><br>";
	$message .= "<br><b>Use these credentials to login. Kindly reset your password after logging in.</b>";
	$message .= '</body></html>';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

*/


?>