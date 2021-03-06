@extends('layout.main')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh Sách Loai Hàng</h3>
        </div>
        <div class="card">
            <form action="<?= BASE_URL . 'hang-hoa/luu-cap-nhat/' . $model->id ?>" method="post"
                enctype="multipart/form-data">
                <div>
                    <label for="exampleInputEmail1">Danh mục</label>
                    <select name="iddm">
                        <?php foreach ($cate as $cas):  ?>
                        <option value="<?= $cas->id ?>"><?= $cas->ten_dm ?></option>
                        <?php endforeach  ?>
                    </select>
                </div>
                <div>
                    <label for="exampleInputEmail1">Tên hàng hóa</label>
                    <input type="text" class="form-control" name="ten_hh" value="<?= $model->ten_hh ?>">
                </div>
                <div>
                    <label for="exampleInputEmail1">hình</label>
                    <img src="<?= BASE_URL . $model->image?>" alt="" width="100px">
                    <input type="file" class="form-control" name="image" value="">
                </div>
                <div>
                    <label for="exampleInputEmail1">Giá</label>
                    <input type="text" class="form-control" name="gia" value="<?= $model->gia ?>">
                </div>
                <div>
                    <label for="exampleInputEmail1">Mô tả</label>
                    <input type="text" class="form-control" name="mota" value="<?= $model->mota ?>">
                </div>
                <div>
                    <label for="exampleInputEmail1">Số lượng</label>
                    <input type="text" class="form-control" name="soluong" value="<?= $model->soluong ?>">
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Lưu</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('page-script')
    <script>
        $('.btn-remove').click(function() {
            console.log(1);
        });
    </script>
@endsection
