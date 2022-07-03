<?php

namespace App\Controllers;

use App\Models\BaseModel;
use App\Models\Category;

class CategoryController
{
    public function index()
    {
        $Categorys = Category::all();

        //  render('index', ['page'=>'danh-muc/index', 'cate'=>$Categorys]);
        return view('admin.danh-muc.index', ['cate' => $Categorys]);
    }

    public function addForm()
    {
        return view('admin.danh-muc.insert');
        // render('index', ['page'=>'danh-muc/insert']);
    }

    public function saveAddForm()
    {
        $model = new Category();
        $requertData = $_POST;
        $model->fill($requertData);
        $model->save();
        header('location: ' . BASE_URL . 'danh-muc');
        die;
    }
    public function remove()
    {
        $iddm = $_GET['iddm'];
        Category::destroydm($iddm);
        header('location: ' . BASE_URL . 'danh-muc');
        die;
    }

    public function editForm($id)
    {
      
        // $model = Category::where(['iddm', '=', $iddm])->first();
      $model = Category::find($id)->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'danh-muc');
            die;
        }
        return view('admin.danh-muc.update', ['model' => $model]);
        // render('index', ['page'=>'danh-muc/update', 'model'=>$model ]);
    }

    public function saveUpdateForm($id)
    {
        $model = Category::find($id)->first();
        if (!$model) {
            header('location: ' . BASE_URL . 'danh-muc');
            die;
        }
       $requertData = $_POST;
       $model->fill($requertData);
      $save =  $model->save();
        header('location: ' . BASE_URL . 'danh-muc');
        die;
    }
}
