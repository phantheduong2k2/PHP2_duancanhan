<?php

use App\Controllers\CategoryController;
use App\Controllers\ProductController;
use App\Controllers\UserController;
use App\Controllers\CartController;
use Illuminate\Contracts\Auth\UserProvider;
use Phroute\Phroute\RouteCollector;

function applyRoute($url)
{
  $router = new RouteCollector();
  $router->get('test-layout', function () {
    return view('layout.main');
  });


  // filter check login
 
  $router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'users/layoutLogin');
        die;
    }
});

  // Trang leyout admin
  $router->get('homepage', [ProductController::class, 'proShowNew']);

  $router->group(['prefix' => 'hang-hoa', ], function ($router) {
    $router->get('/', [ProductController::class, 'index']);

    //----------Trang chủ hàng hóa adim-------------------
    $router->get('hang-hoa', [ProductController::class, 'index']);
    $router->get('xoa', [ProductController::class, 'remove']);

    //----------------------- Tạo mới---------------------------
    $router->get('tao-moi', [ProductController::class, 'addFrom']);
    $router->post('luu-tao-moi', [ProductController::class, 'saveAdd']);

    // ---------------------câp nhât--------------------
    $router->get('cap-nhat/{id}?', [ProductController::class, 'editForm']);
    $router->post('luu-cap-nhat/{id}?', [ProductController::class, 'saveUpdateForm']);

    // ---------------------------Chi tiết hàng hóa---------------------
    $router->get('chi-tiet-hang-hoa/{id}?', [ProductController::class, 'detailPro']);
   
    // --------------------Show tất cả sản phẩm------------------------------
    $router->get('all', [ProductController::class, 'proShow']);
    $router->get(['/{id}?', 'product.index'], [ProductController::class, 'index']);
    // --------------------------------HÀNG HÓA-------------------------------------------

   
  });
  // ---------------------------DANH MỤC---------------------------------------

  // ---------------------danh sách danh mục admin---------
  $router->get('danh-muc', [CategoryController::class, 'index']);

  // -----------------------tạo mới-------------------
  $router->get('danh-muc/tao-moi', [CategoryController::class, 'addForm']);
  $router->post('danh-muc/luu-tao-moi', [CategoryController::class, 'saveAddForm']);
  // ---------------------------xóa----------------------
  $router->get('danh-muc/xoa', [CategoryController::class, 'remove']);
  // -------------------cập nhật--------------------------
  $router->get('danh-muc/cap-nhat/{id}?', [CategoryController::class, 'editForm']);
  $router->post('danh-muc/luu-cap-nhat/{id}?', [CategoryController::class, 'saveUpdateForm']);

  // -------------------------Users--------------------------------------------------------

  $router->get('users', [UserController::class, 'index']);
  $router->get('users/tao-moi', [UserController::class, 'addForm']);
  $router->post('users/luu-tao-moi', [UserController::class, 'saveForm']);
  $router->get('users/xoa', [UserController::class, 'remove']);
  $router->get('users/cap-nhat/{id}', [UserController::class, 'editForm']);
  $router->post('users/luu-cap-nhat/{id}', [UserController::class, 'saveEdit']);

  // -------------------------Login-----------------------------------------------------

  $router->get('users/layoutLogin', [UserController::class, 'layoutLogin']);
  $router->get('users/addNew', [UserController::class, 'layoutAddNew']);
  $router->post('users/saveNew', [UserController::class, 'saveAddNew']);
  $router->post('users/check', [UserController::class, 'checkLogin']);
  $router->get('users/logout', [UserController::class, 'logout']);

  // -------------------------Card------------------------------------------------------
  $router->group(['prefix' => 'cart', 'before' => 'auth' ], function ($router) {
    $router->get('show', [CartController::class, 'Cart']);
    $router->get('showCt/{id}?', [CartController::class, 'CartCt']);
    $router->get('xoa', [CartController::class, 'remove']);
  });

  $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
  $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));


  echo $response;
}
