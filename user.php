

<?php
  session_start();
  include 'dbh.php';

  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérification de la longueur du mot de passe
    if (strlen($_POST["pass"]) < 8) {
        // Si le mot de passe est trop court, affiche un message d'erreur et arrête le script
        echo "Le mot de passe doit contenir au moins 8 caractères.";
        exit; // Arrête l'exécution du script
    }
    
    $fname = strtolower($_POST['fname']);
    $lname =  strtolower($_POST['lname']);
    $name = $fname." ".$lname;
    $phn =  $_POST['phn'];
    $email =  $_POST['mail'];
    $username =  $_POST['mail'];
    $password =  $_POST['pass'];
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = $date."/".$month."/".$year;


    $sql = "INSERT INTO user1(username, passwd, name, phone, email, DOB)
    values('$username','$password','$name','$phn','$email','$dob')";
    $result = $conn->query($sql);

    header("Location: user-login.php");
  }
?>
