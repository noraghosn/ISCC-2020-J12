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

        function afficher($pdo){

        $users=$pdo->query("SELECT * FROM utilisateurs")->fetchAll();

        $Login= $_POST['Login'];
        $Password=$_POST ['Password'];

        $b=0;
        foreach ($users as $user) {
       if ($Login == $user ['loginn'])
       {
        if ($Password== $user['passwordd'])
        {
            echo $user ['loginn']."<br>";
            echo $user ['passwordd']."<br>";
            echo "Vous êtes connectés.";
            $_SESSION= $user['loginn'];
            $_COOKIE= $user['imgpathh'];
            $b=1;
        }
        
}
}
if ($b==O){
    echo "<p> Mauvais couple identifiant / mot de passe. </p>";
        echo '<a href="connexion.php"> Connexion</a>';
}
}

afficher($pdo);



?>