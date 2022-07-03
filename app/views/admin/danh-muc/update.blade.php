@extends('layout.main')

@section('content')
        <div class="card-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Danh Sách Loai Hàng</h3>
                </div>
                <form action="<?= BASE_URL . 'danh-muc/luu-cap-nhat/' . $model->id ?>" method="post">
                    <div>
                        <label for="">Tên danh mục</label>
                        <input type="text" name="ten_dm" value="<?= $model->ten_dm ?>">
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Lưu</button>
                    </div>
                </form>
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