<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    use HasFactory;
    protected $table = 'times'; // ชื่อตารางในฐานข้อมูล

    protected $fillable = ['start_time	', 'end_time']; // ระบุคอลัมน์ที่ต้องการดึงข้อมูลมา}
}
