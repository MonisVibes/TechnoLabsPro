<?php
//variable settring
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['phone_no'];
$Message = $_REQUEST['Message'];

//check input field
if(empty($name) || empty($email) || empty($contact) || empty($Message))
{
    echo "please fill all the fields"
} 
else
{
    mail("technocolabs@gmail.com ", "Technocolabs Indore" , $Message , "From: $name
    <$email>" );

    echo "<script type= 'text/javascrip'>alert('your message sent successfully');
       
         window.history.log(-1);
    
    </script>";
}
?>