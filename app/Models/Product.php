<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
   
    public function invoice()
    {
        return $this->belongsToMany(Invoice::class, 'invoice_product')->withPivot('quantity','price','discount','total');
    }

   
}
