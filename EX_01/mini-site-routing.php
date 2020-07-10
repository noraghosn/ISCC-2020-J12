<!doctype html>
<html>
    <meta charset= "utf-8">
<header>
    <nav> 
        <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/mini-site-routing.php?page=1"> Accueil </a>
        <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/mini-site-routing.php?page=2"> Page 1 </a>
        <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/mini-site-routing.php?page=3"> Page 2 </a>
        <a href="connexion.php"> Connexion </a>
        <a href="admin.php"> Admin </a>

    <title> mini-site-routing </title>
</header>
<body>
    <?php
    session_start();
    $_FILES ['Login'];
    $Login= $_POST['Login'];

        if ($_GET['page'] ==1)
        {
            echo '<h1> Accueil ! </h1>';
        }
        elseif ($_GET['page']==2)
        {
            echo '<h1> Page 2 ! </h1>';
        }
        elseif ($_GET['page']==3)
        {
            echo '<h1> Page 3 ! <h1>';
        }
        elseif ($_GET['page'] == 'connexion')
        {
            include ("connexion.php");
        }
        elseif ($_GET['page'] == 'admin')
        {
            include ("admin.php");
        }
        if (array_key_exists("id", $_SESSION))
        {
            echo '<p>Login :' .($_SESSION['id']). '</p>';
        }
        else 
        {
            echo $_COOKIE['id'];
            if (!isset($_COOKIE["id"]))
             {
             $_SESSION['id']=$_COOKIE['id'];
             }
        else 
        {
            echo '<a href="connexion.php"> Connexion /a>';
        }
        }
    ?>
</body>
<footer>
</footer>
</html>