@extends('layout.main')

@section('content')
        <div class="card-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Danh Sách Loai Hàng</h3>
                </div>
                <div class="card">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <th>id</th>
                            <th>Tên</th>
                            <th>Mật Khẩu</th>
                            <th>Hình</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Vai trò</th>
                            <th>Chức năng</th>
                        </thead>
                        <tbody>
                            <?php foreach ($Uses as $Ue) : ?>
                                <tr>
                                    <td><?= $Ue->id ?></td>
                                    <td><?= $Ue->name?></td>
                                    <td><?= $Ue->password?></td>
                                    <td><img src="<?= BASE_URL  ?><?= $Ue->image ?>" alt="" width="50px"></td>
                                    <td><?= $Ue->email?></td>
                                    <td><?= $Ue->phone?></td>
                                    <td><?= $Ue->diachi?></td>
                                    <td><?= $Ue->vaitro?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?= BASE_URL . 'users/cap-nhat/' . $Ue->id ?>">Sửa</a>
                                        <a class="btn btn-primary" href="<?= BASE_URL . 'users/xoa?id=' . $Ue->id ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="<?= BASE_URL . 'users/tao-moi' ?>""> <input type=" button" name="themmoi" class="btn btn-primary" value="NHẬP THÊM"></a>
                </div>
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