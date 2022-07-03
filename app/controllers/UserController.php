<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;

class UserController
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', ['Uses' => $users]);
        // render('index', ['page'=>'user/index','Uses'=>$users]);

    }
    public function addForm()
    {
        return view('admin.user.insert');
    }
    public function saveForm()
    {
        $model = new User();

        $imgFile = $_FILES['image'];
        $filename = $model->image;
        if ($imgFile['size'] > 0) {
            $filename = uniqid() . '-' . $imgFile['image'];
            move_uploaded_file($imgFile['tmp_name'], './app/content/upload/' . $filename);
            $filename = './app/content/upload/' . $filename;
        }
       $requestData = $_POST;
       $model->fill($requestData);
       $save = $model->save();
        header('location: ' . BASE_URL . 'users');
        die;
    }

    public function remove()
    {
        $id = $_GET['id'];
        User::destroy($id);
        header('location: ' . BASE_URL . 'users');
    }

    public function editForm($id)
    {  
        // $model = User::where(['id', '=', $id])->first();
        $model = User::find($id)->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'hang-hoa');
            die;
        }
        return view('admin.user.update', ['model' => $model]);
        // render('index', ['page'=>'user/update','model'=>$model]);
    }

    public function saveEdit($id)
    {
        $model = User::find($id)->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'users');
            die;
        }
        // $imgFile = $_FILES['image'];
        // $filename = $model->image;
        // if ($imgFile['size'] > 0) {
        //     $filename = uniqid() . '-' . $imgFile['image'];
        //     move_uploaded_file($imgFile['tmp_name'], './app/content/upload/' . $filename);
        //     $filename = './app/content/upload/' . $filename;
        // }
        $requestData = $_POST;
        $model->fill($requestData);
        $save = $model->save();
        header('location: ' . BASE_URL . 'users');
        die;
    }

    public function layoutLogin()
    {
        render('login/layoutLogin', ['page' => 'homepage/login/login']);
    }

    public function checkLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = User::where('email',  $email)->first();
        if($user['email'] == $email){
            if ($user['password'] == $password) {
                $_SESSION['auth'] = [
                    "id" => $user->id,
                    "name" => $user->name,
                    "email" => $user->email,
                    "password" => $user->password,
                    "vaitro" => $user->vaitro
                ];
                header('location: ' . BASE_URL . 'homepage');
                die;
            }else{
                header('location: ' . BASE_URL . 'users/layoutLogin?msg=Đăng nhập không thành công!');
                die;
            }
        }else{
            header('location: ' . BASE_URL . 'users/layoutLogin?msg=Đăng nhập không thành công!');
        }
    }
    // -----------------end check Login-----------------------------

    public function logout()
    {
        unset($_SESSION["auth"]);
        header('location: ' . BASE_URL . 'homepage');
    }

    public function layoutAddNew()
    {
        render('login/layoutAddLogin', ['page' => 'homepage/login/add']);
    }
    public function saveAddNew()
    {
        $model = new User();
        $requestData = $_POST;
        $model->find($requestData);
       $save = $model->save();
        header('location: ' . BASE_URL . 'users/layoutLogin');
    }
}
