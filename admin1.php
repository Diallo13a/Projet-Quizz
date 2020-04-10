<?php
    session_start();
    $_SESSION['login']='OUMAR';
    $_SESSION['mtpass']='passer';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-image: url("img-bg.jpg")}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
 
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
  border-radius: 10px 0px 0px 10px;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
  border-radius: 0px 10px 10px 0px;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color:#99ff33 ;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 25%;
  height: 50px;
  opacity: 0.9;
  border-radius:10px;
  margin-left:px;
}

.btn:hover {
  opacity: 1;
}
#conteneur{
   
}
</style>
</head>
<body>
<div id="conteneur">
<form action="admin1.php" style="max-width:500px;margin:auto" method="post">
  <h1 style="text-align:center ; color:white">Se connecter en Admin</h1>

  <div style="background-color:black;border-radius:10px 10px 10px 10px ; opacity:0.9; height:; margin-top:150px" id="noir">
  <div style="background-color:white;border-radius:10px 10px 10px 10px ; opacity:0.9; height:200px; margin-top:150px" id="blanc">
  <div class="input-container">
    <input class="input-field" type="text" placeholder="Login" name="login">
    <img style="background-color:white" class="icon" src="./App2/icone-user.png">
  </div>

  <div class="input-container">
    <input class="input-field" type="password" placeholder="Password" name="mtpass">
    <img style="background-color:white" class="icon" src="./App2/icone-password.png">
  </div>

  <button type="submit" name="bouton" class="btn">Connexion</button>
  <a style="margin-left:80px" href="inscrire.php">S'inscrire pour jouer?</a>
  </div>
  </div>
</form>
</div>
<?php
            $log=$_SESSION['login'];
            $mp=$_SESSION['mtpass'];
            if (isset($_POST['bouton'])) {
            if (isset($_POST['login']) AND isset($_POST['mtpass'])) // On a le login et le mot de passe
                {
                    if ($_POST['login']=='OUMAR' AND $_POST['mtpass']=='passer') {
                        # code...
                        header('location:essai.php');
                    } else {
                        # code...
                        echo 'login ou mot de passe incorect!';
                    }
                    
               //echo 'Bonjour ' . $_POST['login'] . ' '  . ' !';
               

                }
            
            else // Il manque des paramètres, on avertit le visiteur
                {
               
                }
            }

        ?>

                            
      

</body>
</html>
