<?php 

class AuthController
{
    public function validUser(LoginRequest $loginRequest)
    {
        $loginModel = new AuthModel();
        $result = $loginModel->findUserByUsernameAndPassword($loginRequest);
        return $result;
    }

    public function registerUser(User $user)
    {
        $loginModel = new AuthModel();
        return $loginModel->saveUser($user);
    }

}

?>