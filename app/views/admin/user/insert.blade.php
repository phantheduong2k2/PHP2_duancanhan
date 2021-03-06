@extends('layout.main')

@section('content')
        <div class="card-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Danh Sách Loai Hàng</h3>
                </div>
                <form action="<?= BASE_URL . 'users/luu-tao-moi' ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mật khẩu</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hình</label>
                        <input type="file" class="form-control"  name="image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                       <input type="email"  class="form-control" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Số điện thoại</label>
                        <input type="number" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Địa chỉ</label>
                        <input type="text" class="form-control" name="diachi">
                    </div>
                    <div class="form-group">
                    <label for="">Vai trò</label>
                    <div class="form-special">
                        <input type="radio" name="vaitro" value="0" checked> Nhân Viên
                        <input type="radio" name="vaitro" value="1"> Admin
                    </div>
                </div>
                    <div class="card-footer">
                    <button class="btn btn-primary"  type="submit">Lưu</button>
            </div>
                </form>
            </div>
        </div>
        @endsection
        @section('page-script')
        <script>
            $('.btn-remove').click(function(){
                console.log(1);
            });
        </script>
        @endsection