<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable =[
        'customer_id',
        'serie',
        'no',
        'status',
       
        

    ];


    public function invoice_contents(){
        return $this->hasMany(InvoiceContent::class);
    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

   
}
