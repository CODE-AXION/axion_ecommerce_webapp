<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Item extends Model
{
    public $table="cart_items"; 
    protected $fillable = ['product_id','user_id','session_id'];
    use HasFactory;
}
