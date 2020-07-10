<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="admin.php">
    <p>
    <input type="file" name="photo">
    <input type="submit" name="upload" value="Uploader">
    <strong> Note:</strong> Seul les formats jpeg, png et jpg ne sont autorisés. La taille maximale est de 2Mo.
    </p>

    <?php
session_start();

    if (filesize(string['photo'])>2097152)
    {
        echo "<p> La taille de la photo est trop élevée.</p>";
    }

    if (filetype (string ['photo']!= jpeg, jpg, png))
    {
        echo "<p>Le format n'est pas accepté.</p>";
    }

    $nombredecaractères=strlen(['photo']);
    if ($nombredecaractères < 4)
    {
        echo "<p> Le nombre de caractères n'est pas suffisant. </p>" ;
    }
    $_SESSION['titre'];
    $_SESSION['description'];

    ?>
<p> Nouvel utilisateur : </p>
    <p> 
    <label for="Login"> Login:</label> 
    <input type="text" name= "Login" id="Login" placeholder="blaze" style="width: 250px;" style="height: 30px;"/>
</p>
<p> 
    <label for="Mot de passe"> Mot de passe:</label> 
    <input type="text" name= "Mot de passe" id="Mot de passe" placeholder="23xo..." style="width: 250px;" style="height: 30px;"/>
</p>
</form>


<?php
    function connect_to_database (){
        $servername= "localhost";
        $username= "root";
        $password="root";
        $databasename= "base-site-rooting";

        try{
            $pdo=new PDO ("mysql:host=$servername; dbname=$databasename", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

            echo "Connected successfully <br>";
            return $pdo;
        }

        catch (PDOException $e) {
            echo "Connection failed:". $e->getMessage();
        }
    }
        
        $pdo=connect_to_database();

    function test($pdo){

     $users=$pdo->query("SELECT * FROM utilisateurs")->fetchAll();

     $Login= $_POST['Login'];
     $Password=$_POST ['Password'];

     $b=1;
     foreach ($users as $user) {
         if ($Login == $user ['loginn'])
             {
             $b=0;
             }
        }
     if ($b== 1){
        
        function insert_data($pdo){
            try{
                $requete="INSERT TO utilisateurs(id, loginn, passwordd, imgpathh)
                VALUES ('', '$Login', '$Password', '')";
                $pdo->exec($requete);
                echo "Identifiant créé.";
            }
            catch (PDOException $e) {
                echo "Erreur insert". $e->getMessage();
            }
        }
     }
    }
test($pdo);
insert_data($pdo);

?>