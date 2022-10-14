
<?php

//var_dump($_SERVER ['REQUEST_URI']);
//Donne des noms != pour chaque page
//switch ($_SERVER ['REQUEST_URI']){
//    case "/home.php":
//
//        break;
//    case "/aboutmeB.php";
//
//        break;
//    case "/contactB.php";
//        $title = "Contact";
//        $desc = "Formulaire de contact";
//        break;
//}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $desc ?>">
    <link rel="stylesheet" href="styleB.css" />
    <title><?php echo $title ?></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>


</head>
<body>

<!--Navbar-->
<ul class="nav justify-content-between">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php?page=home"><button type="button" value="text"
                                                                                    class="btn-grad">Home</button></a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php?page=aboutme"><button type="button" value="text"
                                                                                      class="btn-grad">About me</button></a>
    </li>
</ul>