<?php
session_start();
session_destroy();

header("Location: http://localhost:81/vragenlijst/view/login_form.php");
?>