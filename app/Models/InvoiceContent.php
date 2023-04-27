<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceContent extends Model
{
    use HasFactory;

    protected $fillable =[
        'invoice_id',
        'service_id',
        'unit',
        'quantity',
        'price',
        'amount',
        'vat',
        
       
        

    ];


    public function invoice(){
        return $this->belongsTo(Invoice::class);
    }
}
