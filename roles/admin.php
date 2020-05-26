<?php
session_start();

require "../check.php";

if (!($user->isAdmin())){
    exit(header("Location: /error404/"));
}
?>
<?php if ($_SESSION["deletion"] == true) : ?>
    <p style="color: green;"> <?php echo "User №". $_SESSION["id_deleted"] ." successfully deleted! "; ?> </p>
<?php endif;?>
<?php
require "../change_lang.php";
require "../create.php";
require "../read.php";
?>
