<?php



$servername = "localhost";
$username = "root";
$password = "";
$showAlert = false;

$database = "db";
try {

    // On se connecte à MySQL

    $bdd = new PDO('mysql:host=localhost;dbname=db', 'root', '');
} catch (Exception $e) {

    // En cas d'erreur, on affiche un message et on arrête tout

    die('Erreur : ' . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $username = "abdoul";
    if (isset($_POST["password"])) {


        $password = $_POST["password"];

        $req = $bdd->query("SELECT *FROM  users WHERE username = '" . $username . "'");
        $result = $req->fetch();
        if ($password == $result['password']) {
            $showAlert = true;
            header("HTTP/1.1 200 OK");
        } else {
            header("HTTP/1.1 404 Not Found");
        }
    }
}

?>

<!doctype html>

<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, 
            shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>

    <?php


    if ($showAlert) {

        echo ' <div class="mt-5 text-center   alert alert-success 
                alert-dismissible fade show" role="alert">

                <strong>Success!</strong>  welcome home ' . $username . '
                <button type="button" class="close"
                    data-dismiss="alert" aria-label="Close"> 
                    <span aria-hidden="true">×</span> 
                </button> 
            </div> ';
    } else {

        echo ' <div class="mt-5 text-center alert alert-danger 
                alert-dismissible fade show" role="alert"> incorrect password
         </div>';
    }


    ?>
    <script src="
    https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="
    sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="
    https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script src="
    https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>