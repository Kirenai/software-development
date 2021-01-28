<?php
include_once "../app/model/UserModel.php";
class UserController
{
    public function getAllUsers()
    {
        $userModel = new UserModel();
        $result = $userModel->findAllUsers();
        return $result;
    }

    public function getUserById(int $id)
    {
        $userModel = new UserModel();
        return $userModel->findUserById($id);
    }

    public function updateUser(User $user, $id)      
    {
        $userModel = new UserModel();
        return $userModel->update($user, $id);
    }

    public function deleteUser($id)
    {
        $userModel = new UserModel();
        return $userModel->delete($id);
    }

    public function deleteAllUsers()
    {
        $userModel = new UserModel();
        return $userModel->deleteAll();
    }
}