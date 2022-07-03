@extends('layout.main')
@section('content')
<div class="card-body">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Danh Sách Loai Hàng</h3>
        </div>
        <form action="<?= BASE_URL . 'hang-hoa/luu-tao-moi' ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Danh Mục</label>
                <select name="iddm">

                    <?php foreach ($cate as $cas):  ?>
                    <option value="<?= $cas->iddm ?>"><?= $cas->ten_dm ?></option>
                    <?php endforeach  ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tên hàng hóa</label>
                <input type="text" class="form-control" name="ten_hh">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">hình</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Giá</label>
                <input type="number" class="form-control" class="form-control" name="gia">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <textarea class="form-control" class="form-control" name="mota" rows="3"
                    placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số lượng</label>
                <input type="number" class="form-control" name="soluong">
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
    $('.btn-remove').click(function(){
        console.log(1);
    });
</script>
@endsection