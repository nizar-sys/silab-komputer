<?php
$email_penerima = $_POST['email'];
$nama_penerima = $_POST['nama'];
$isi_pesan = $_POST['isi'];
$subjek = $_POST['subjek'];

include('class.phpmailer.php');
include('class.smtp.php');
$mail = new PHPMailer(); 
$mail->Host = "ssl://smtp.gmail.com";
$mail->Mailer = "smtp"; 
$mail->SMTPAuth = true; 
$mail->Username = "agustinaina084@gmail.com"; 
$mail->Password = "4426896@"; 
$webmaster_email = "agustinaina084@gmail.com"; 
$email = $email_penerima; 
$name = $nama_penerima;
$mail->From = $webmaster_email;
$mail->FromName = "Lab. Informatika "; 
$mail->AddAddress($email,$name);
$mail->AddReplyTo($webmaster_email,"Lab. Informatika "); 
$mail->WordWrap = 50;
//$mail->AddAttachment("module.txt");
//$mail->AddAttachment("new.jpg");
$mail->IsHTML(true);
$mail->Subject = $subjek;
$mail->Body = $isi_pesan;
$mail->AltBody = "This is the body when user views in plain text format";
if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "email berhasil dikirim";
}
?>