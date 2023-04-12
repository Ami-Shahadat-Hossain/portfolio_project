<?php
$_username=$_POST['name'];
$_email=$_POST['email'];
$_phonenumber=$_POST['phonenumber'];
$_message=$_POST['message'];

if((!empty($_username) || !empty($_email) || !empty($_phonenumber) || !empty($_message))){
    echo "Submitted your message successfully";
}else{
    echo "Please fill the form correctly";
}
