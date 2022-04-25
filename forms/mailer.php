<?php



/* Namespace alias. */

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



if(isset($_POST['fish'])&&isset($_POST['tel'])&&isset($_POST['son'])&&isset($_POST['sana'])&&isset($_POST['zakaz']))

{

$fish=$_POST['fish'];

$tel=$_POST['tel'];

$son=$_POST['son'];

$sana=$_POST['sana'];

$zakaz=$_POST['zakaz'];

$suz="Buyurtma! Buyurtmachi:".$fish." tomonidan Buyurtma sanasi:".$sana.", buyurtma joy soni:".$son.", buyurtmalar:".$zakaz.", buyurtmachi telefon raqami:".$tel;

// echo $suz;

// mail("0DAAC58A-F944-B83E-DED2-97AF7B7AC0E6+998904275596@sms.ru","from:Sender","Buyurtma!".$fish." sana:".$sana."joy soni".$son."tel:".$tel."buyurtmalar:".$zakaz);



require 'PHPMailer-master/PHPMailer-master/src/Exception.php';

require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';

require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';





$mail = new PHPMailer(TRUE);







try {

   

   $mail->setFrom('shamrestaurant@mail.ru', 'Xaridor');

   $mail->addAddress('sham16.61@mail.ru', $name);

   $mail->isHTML(true);/*Set email format to HTML (default = true)*/

   $mail->Subject = "Buyurtma!";

   $mail->Body = $suz;

   

   /* SMTP parameters. */

   

   /* Tells PHPMailer to use SMTP. */

   $mail->isSMTP();

   

   /* SMTP server address. */

   $mail->Host = 'smtp.mail.ru';



   /* Use SMTP authentication. */

   $mail->SMTPAuth = TRUE;

   

   /* Set the encryption system. */

   $mail->SMTPSecure = 'tls';

   

   /* SMTP authentication username. */

   $mail->Username = 'shamrestaurant@mail.ru';

   

   /* SMTP authentication password. */

   $mail->Password = 'shambusham2020';

   

   /* Set the SMTP port. */

   $mail->Port = 587;

   

   /* Finally send the mail. */

   $mail->send();

}

catch (Exception $e)

{

   echo $e->errorMessage();

echo "<br>";

echo "30 sekunddan ko`p kutilish bo`lganligi sababli, xavfsizlik uchun so`rov to`xtaladi.";

}

catch (\Exception $e)

{

   echo $e->getMessage();



}

header('Location:index.html');



} 

else

{

 header('Location:index.html');

}







if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))

{

  

$name=$_POST['name'];

$email=$_POST['email'];

$subject=$_POST['subject'];

$message=$_POST['message'];



require 'PHPMailer-master/PHPMailer-master/src/Exception.php';

require 'PHPMailer-master/PHPMailer-master/src/PHPMailer.php';

require 'PHPMailer-master/PHPMailer-master/src/SMTP.php';





$mail = new PHPMailer(TRUE);







try {

   

   $mail->setFrom('shamrestaurant@mail.ru', 'Xaridor');

   $mail->addAddress('sham16.61@mail.ru', $name);

   $mail->isHTML(true);/*Set email format to HTML (default = true)*/

   $mail->Subject = $subject;

   $mail->Body = '<a href="mailto:'.$email.'">Xaridor bilan bog`lanish</a><br/>'.$message ;

   

   /* SMTP parameters. */

   

   /* Tells PHPMailer to use SMTP. */

   $mail->isSMTP();

   

   /* SMTP server address. */

   $mail->Host = 'smtp.mail.ru';



   /* Use SMTP authentication. */

   $mail->SMTPAuth = TRUE;

   

   /* Set the encryption system. */

   $mail->SMTPSecure = 'tls';

   

   /* SMTP authentication username. */

   $mail->Username = 'shamrestaurant@mail.ru';

   

   /* SMTP authentication password. */

   $mail->Password = 'shambusham2020';

   

   /* Set the SMTP port. */

   $mail->Port = 587;

   

   /* Finally send the mail. */

   $mail->send();

}

catch (Exception $e)

{

   echo $e->errorMessage();

echo "<br>";

echo "30 sekunddan ko`p kutilish bo`lganligi sababli, xavfsizlik uchun so`rov to`xtaladi.";

}

catch (\Exception $e)

{

   echo $e->getMessage();



}

header('Location:index.html');



} 

else

{

 header('Location:index.html');

}





?>









