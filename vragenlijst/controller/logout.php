<?php
session_start();
session_destroy();

header("Location: http://localhost/githubtest/vragenlijst/view/login_form.php");
?>