@extends('layout.main')

@section('content')
        <div class="card-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Danh Sách Loai Hàng</h3>
                </div>
                <div class="card">
                    <select name="iddm">
                        <option value="0" selected>Tất cả</option>
                        
                      
                        @foreach ($cate as $cas)
                        <option value="<?= $cas->iddm ?>"><?= $cas->ten_dm ?></option>
                        @endforeach
                    </select>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <th>Mã hàng hóa</th>
                            <th>Tên hàng hóa</th>
                            <th>Hình</th>
                            <th>Giá</th>
                            <th>Mô tả</th>
                            <th>Số lượng</th>
                            <th>Chức năng</th>
                        </thead>
                        <tbody>
                        
                            <?php foreach ($product as $Pro):  ?>
                                <tr>
                                    <td><?= $Pro->id ?></td>
                                    <td><?= $Pro->ten_hh ?></td>
                                    <td><img src="<?= BASE_URL . $Pro->image?>" alt="" width="50px"></td>
                                    <td><?= $Pro->gia ?></td>
                                    <td><?= $Pro->mota ?></td>
                                    <td><?= $Pro->soluong ?></td>
                                    <td>
                                        <a class="btn btn-primary"
                                            href="{{ BASE_URL . 'hang-hoa/cap-nhat/' . $Pro->id }}">Sửa</a>
                                        <a class="btn btn-primary"
                                            href="{{BASE_URL . 'hang-hoa/xoa?id=' . $Pro->id }}">Xóa</a>
                                    </td>
                                </tr>
                                <?php endforeach  ?>
                          
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="<?= BASE_URL . 'hang-hoa/tao-moi' ?>"> <input type="button" name="themmoi"
                            class="btn btn-primary" value="NHẬP THÊM"></a>
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