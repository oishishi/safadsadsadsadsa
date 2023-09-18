<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class value extends Model
{
    protected $table = 'value'; // ชื่อตารางในฐานข้อมูล

    protected $fillable = ['voltage', 'current','date']; // ระบุคอลัมน์ที่ต้องการดึงข้อมูลมา}
}