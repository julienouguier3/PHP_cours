<?php
//Start new session
session_start();



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
elseif ($_GET['page'] == 'contact') {
    $title = "Contact";
    $desc = "Formulaire de contact";

    $Error_message = "*Veuillez remplir les cases ";
    if (strlen($_POST ['Fname']) == 0 && isset($_POST['Fname'])) {
        $Error_message .= "First name, ";
    }
    if (strlen($_POST ["Lname"]) == 0 && isset($_POST['Lname'])) {
        $Error_message .= "Last name, ";
    }
    if (strlen($_POST['message']) <= 5 && isset($_POST['message'])) {
        $Error_message .= "Message, ";
    }
    if (strlen($_POST['reason']) == 0) {
        $Error_message .= "Option, ";
        if (($_SESSION['reason'])=="Option One"){
            $optionOne = "Work";
                                }
        if (($_SESSION['reason'])=="Option Two"){
            $optionTwo = "Trip";
        }
        if (($_SESSION['reason'])=="Option Three"){
            $optionThree = "Other";
        }
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && isset($_POST['email'])) {
        $Error_message .= "Email";
    }

    include "contactB.php";
}else{
    include 'home.php';
}
$_SESSION['Fname'] = $_POST['Fname'];
$_SESSION['Lname'] = $_POST['Lname'];
$_SESSION['message'] = $_POST['message'];
$_SESSION['reason'] = $_POST['reason'];
$_SESSION['email'] = $_POST['email'];

//if (isset($_SESSION['Lname'])){
//    echo 'Lastname : ' .$_SESSION['Lname']. "<br>";
//    unset($_SESSION['Lname']);
//}
//======Enregistre champs du formulaire dans un fichier.txt=======//
file_put_contents(__DIR__."/stockage/retourForm.txt",
    "\n" . "Firstname : ".$_SESSION['Fname']."\n" .
    "Lastname : ". $_SESSION['Lname'] ."\n".
    "Message ". $_SESSION['message'] ."\n".
    "Pourquoi ? " . $_SESSION['reason'] ."\n".
    "Email " . $_SESSION['email']);
session_unset();