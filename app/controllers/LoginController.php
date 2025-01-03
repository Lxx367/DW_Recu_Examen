<?php

require_once (dirname(__FILE__) . '\..\..\utils\SessionUtils.php');
require_once (dirname(__FILE__) . '\..\models\User.php');

$_loginController = new LoginController();

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["type"] == "login") {
    $_loginController->comprobarUser();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["type"] == "logout") {
    $_loginController->logout();
}

class LoginController {

    public function __construct() {
        
    }

    public function comprobarUser() {
        $userGestor = new User(1, "4VGestor", 1234, "GESTOR");
        $userAdmin = new User(1, "4VAdmin", 12345, "ADMIN");
        if ($_POST["input-user"] == $userGestor->getUserName() && $_POST["input-password"] == $userGestor->getPsswd()) {
            SessionUtils::setSession($_POST["input-user"], $userGestor->getTipoUser());
            header('Location: ../views/private/index.php');
        } elseif ($_POST["input-user"] == $userAdmin->getUserName() && $_POST["input-password"] == $userAdmin->getPsswd()) {
            SessionUtils::setSession($_POST["input-user"], $userAdmin->getTipoUser());
            header('Location: ../views/private/index.php');
        } else {
            header('Location: ../views/public/index.php?error=ErrorLogin');
        }
    }

    public function logout() {

        SessionUtils::destroySession();
        header('Location: ../views/public/index.php');
    }
}

?>
