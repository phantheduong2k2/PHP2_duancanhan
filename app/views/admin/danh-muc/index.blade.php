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
                            <th>Tên danh muc</th>
                            <th>Chức năng</th>
                        </thead>
                        <tbody>
                            <?php foreach ($cate as $Ca) : ?>
                                <tr>
                                    <td><?= $Ca->id ?></td>
                                    <td><?= $Ca->ten_dm ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?= BASE_URL . 'danh-muc/cap-nhat/' . $Ca->id ?>">Sửa</a>
                                        <a class="btn btn-primary" href="{{BASE_URL . 'danh-muc/xoa/' . $Ca->id }}">Xóa</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="<?= BASE_URL . 'danh-muc/tao-moi' ?>""> <input type=" button" name="themmoi" class="btn btn-primary" value="NHẬP THÊM"></a>
                </div>
            </div>
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