<?php
$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'Sinj' && $_POST['motdepasse'] === 'Patou2004') {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /index.php');
        exit();
    } else {
        $erreur = "Identifiants incorrects";
    }
}
   
?>
<?php if ($erreur): ?>
    <div class="alert-alert-danger">
        <?= $erreur ?>
    </div>
    <?php endif ?>



    <?php
$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'Chab' && $_POST['motdepasse'] === 'Posto') {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /index.php');
        exit();
    } 
}
   
?>
<?php if ($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
    <?php endif ?>
    
    
    <?php
$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'Benji' && $_POST['motdepasse'] === 'Auben1475') {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /index.php');
        exit();
    } 
}
   
?>
<?php if ($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
    <?php endif ?>


        
    <?php
$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'mx_bfs' && $_POST['motdepasse'] === 'sinjélaiéfferdelumiaire') {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /index.php');
        exit();
    } 
}
   
?>
<?php if ($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
    <?php endif ?>





    <?php
$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'Nica' && $_POST['motdepasse'] === 'tono') {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: /index.php');
        exit();
    } 
}
   
?>
<?php if ($erreur): ?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
    <?php endif ?>