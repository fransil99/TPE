<?php
require_once 'model/userModel.php';
require_once 'view/authView.php';

class AuthController
{
    private $view;
    private $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->view = new AuthView();
    }

    public function showFormLogin()
    {
        $this->view->showFormLogin();
    }

    public function validateUser()
    {
        if (!empty(['email']) && (['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model->getUserByEmail($email);
        }
        if (!empty($user)) {
            if (password_verify($password, $user->password)) {
                // inicio una session para este usuario
                echo "entro al segundo if";
                session_start();
                $_SESSION['USER_PASSWORD'] = $user->password;
                $_SESSION['USER_EMAIL'] = $user->email;
                $_SESSION['IS_LOGGED'] = true;
                header("Location: " . BASE_URL . 'home');
                
            }
        } else {
            $this->view->showFormLogin("El usuario o la contraseña no existe.");
        }
        //agarro el user

        // verifico que el usuario existe y que las contraseñas son iguales
    }

    public function generateHash(){
        $hash = password_hash('admin', PASSWORD_BCRYPT);
        echo $hash;
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . "login");
    }
}
