<?php
namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Model;
class Category extends Model{
    protected $table = 'danhmuc';
    protected $fillable = ['ten_dm'];
    public $timestamps = false;
}
?>