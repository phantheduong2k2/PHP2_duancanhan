<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = 'hang_hoa';
    protected $fillable = ['ten_hh', 'gia','mota', 'soluong', 'iddm'];
    public $timestamps = false;
}
?>