<?php
//variable settring
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['phone_no'];
$Message = $_REQUEST['Message'];

//check input field
if(empty($name) || empty($email) || empty($contact))
{
    echo "please fill all the fields";
} 
else
{
    $body="Name :".$name."\nEmail :".$email."\nContact : ".$contact."\nMessage: ".$Message;
    mail("monish.vibes@gmail.com ", "Technocolabs Indore" , $body , "From: $name
    <$email>" );
    mail($email, "Technocolabs Indore","Thanks you for contact us,\nOur team soon response you","From: monish.vibes@gmail.com");

    echo "<script>alert('your message sent successfully');
    </script>";
    header("location: index.html");
}
?>

<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://google.com/thank-you';
}, false );
</script>

