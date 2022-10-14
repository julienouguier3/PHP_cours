<?php
//Methode GET ==> URL
if ($_GET['page'] == 'home'){
    $title = "Home";
    $desc ="Le portfolio du dev web et applis";

    include 'home.php';
}
elseif ($_GET['page'] == 'aboutme'){
    $title = "About_me";
    $desc = "about_me";

    include 'aboutmeB.php';
}
elseif ($_GET['page'] == 'contact'){
    $title = "Contact";
    $desc = "Formulaire de contact";

    if(strlen ($_POST['message'])< 5 && isset($_POST['message'])){
        $Error_message = "*Enter a message";
    }
    if (strlen($_POST['reason']) == 0 && isset($_POST['reason'])) {
        $Error_message ="*Choose a option";
    }
    if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) && isset($_POST['email'])){
        $Error_message ="*Your email";
    }
    if (strlen($_POST ['Fname']) == 0 && isset($_POST['Fname'])){
        $Error_message = "Your First name";
    }
    if (strlen($_POST ["Lname"]) == 0 && isset($_POST['Lname'])){
        $Error_message = "*Your Last name";
    }


    include "contactB.php";
}


