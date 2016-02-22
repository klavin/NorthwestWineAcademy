<?php 
$errors = '';
$myemail = 'yourname@website.com';//<-----Put Your email address here.
if(empty($_POST['Alison_bridge'])  || 
   empty($_POST['felicia_1']) ||
   empty($_POST['marcos_1']) ||
   empty($_POST['shawn_chair']) ||
   empty($_POST['Suzette_hand']) ||
   empty($_POST['Alison_mthood']) ||
   empty($_POST['Felicia_2']) ||
   empty($_POST['marcos_2']) ||
   empty($_POST['shawn_chairs']) ||
   empty($_POST['Alison_path']) ||
   empty($_POST['felicia_3']) ||
   empty($_POST['marcos_3']) ||
   empty($_POST['shawn_fern']) ||
   empty($_POST['Alison_road']) ||
   empty($_POST['marcos_4']) ||
   empty($_POST['shawn_flowers']) ||
   empty($_POST['Alison_road2']) ||
   empty($_POST['marcos_5']) ||
   empty($_POST['Alison_sky']) ||
   empty($_POST['marcos_6']) ||
   empty($_POST['marcos_7']) ||
   empty($_POST['Alison_water']) ||
   empty($_POST['ALison_storm']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message'];

$Alison_bridge = $_POST['Alison_bridge']; 
$felicia_1 = $_POST['felicia_1'];
$marcos_1 = $_POST['marcos_1'];
$shawn_chair = $_POST['shawn_chair'];
$Suzette_hand = $_POST['Suzette_hand'];
$Alison_mthood = $_POST['Alison_mthood'];
$Felicia_2 = $_POST['Felicia_2'];
$marcos_2 = $_POST['marcos_2'];
$shawn_chairs = $_POST['shawn_chairs'];
$Alison_path = $_POST['Alison_path'];
$felicia_3 = $_POST['felicia_3'];
$marcos_3 = $_POST['marcos_3'];
$shawn_fern = $_POST['shawn_fern'];
$Alison_road = $_POST['Alison_road'];
$marcos_4 = $_POST['marcos_4'];
$shawn_flowers = $_POST['shawn_flowers'];
$Alison_road2 = $_POST['Alison_road2'];
$marcos_5 = $_POST['marcos_5'];
$Alison_sky = $_POST['Alison_sky'];
$marcos_6 = $_POST['marcos_6'];
$marcos_7 = $_POST['marcos_7'];
$Alison_water = $_POST['Alison_water'];
$ALison_storm = $_POST['ALison_storm'];

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission";
	$email_body = 
        $Alison_bridge, 
        $felicia_1,
        $marcos_1,
        $shawn_chair,
        $Suzette_hand,
        $Alison_mthood,
        $Felicia_2,
        $marcos_2,
        $shawn_chairs,
        $Alison_path,
        $felicia_3,
        $marcos_3,
        $shawn_fern,
        $Alison_road,
        $marcos_4,
        $shawn_flowers,
        $Alison_road2,
        $marcos_5,
        $Alison_sky,
        $marcos_6,
        $marcos_7,
        $Alison_water,
        $ALison_storm; 
	

	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: contact-form-thank-you.html');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>