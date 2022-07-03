<?php
namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductController  {
    public function index(){
        $Products = Product::all();
        $cats = Category::all();
        
        return view('admin.hang-hoa.index', ['product'=>$Products, 'cate'=>$cats]);  
        // render('index', ['page'=>'hang-hoa/index', 'product'=>$Products, 'cate'=>$cats]);
        
    }
    public function proShow(){
        $Products = Product::all();
        $cats = Category::all();
        
    //   include_once './app/views/hang-hoa/index.php';
        render('layoutPro', ['page'=>'product', 'product'=>$Products, 'cate'=>$cats]);
        
    }


    public function proShowNew(){
       
        $newprpduct = Product::select('hang_hoa.*')->orderBy('id', 'desc')->limit(5)->get();
        $cats = Category::all();
    //   include_once './app/views/hang-hoa/index.php';
    render('layoutClient', ['page'=>'homepage/index', 'product'=> $newprpduct, 'cate'=>$cats]);  
        
    }
    
    public function remove(){
        $id = $_GET['id'];
            Product::destroy($id);
            header('location: ' . BASE_URL . 'hang-hoa');
    }

    public function addFrom(){
        $cats = Category::all();
        // include_once "./app/views/hang-hoa/insert.php";
        return view('admin.hang-hoa.insert', ['cate'=>$cats]);  
    }

    public function saveAdd(){
        $model = new Product();
       
        $imgFile = $_FILES['image'];
        $filename = $model->image;
        if($imgFile['size'] > 0){
           $filename = uniqid(). '-' . $imgFile['image'];
           move_uploaded_file($imgFile['tmp_name'], './app/content/upload/' . $filename);
           $filename = './app/content/upload/' . $filename;
        }
        $requestData = $_POST;
        $model->image = $filename;
        $model->fill($requestData);
        $model->save();
        header('location: ' . BASE_URL . 'hang-hoa');
        die;
    }
    
    public function editForm($id){
        $model = Product::find($id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'hang-hoa');
            die;
        }
        $cats = Category::all();
    //   include_once './app/views/hang-hoa/index.php';
    return view('admin.hang-hoa.update', ['model'=>$model, 'cate'=>$cats]); 
        // render('index', ['page'=>'hang-hoa/update','model'=>$model, 'cate'=>$cats]);
    }
    public function saveUpdateForm($id){
        $model = Product::find($id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'hang-hoa');
            die;
        }
        $requestData = $_POST;
        $model->fill($requestData);
       $save = $model->save();
        header('location: ' . BASE_URL . 'hang-hoa');
        die;
    }

    public function detailPro($id){
        $model = Product::find($id)->first();
        if(!$model){
            header('location: ' . BASE_URL . 'hang-hoa');
            die;
        }
        $Products = Product::all();
        $cats = Category::all();
    //   include_once './app/views/hang-hoa/index.php';
        render('layoutDatail', ['page'=>'detailPro','model'=>$model,'Product'=>$Products, 'cate'=>$cats]);
    }

}
?>