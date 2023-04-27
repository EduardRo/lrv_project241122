<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Http\Requests\StoreInvoiceRequest;
use App\Http\Requests\UpdateInvoiceRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\InvoiceProduct;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = DB::table('invoices')->get();
        return $invoices;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //adaugat de chat gbt
        return view('invoices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //adaugate de chatgbt
         // Get all the input data from the form
    $input = $request->all();
    
    // Separate the data that corresponds to the invoices table
    $invoiceData = [
        'seller_name' => $input['seller_name'],
        'seller_address' => $input['seller_address'],
        'seller_city' => $input['seller_city'],
        'seller_zip' => $input['seller_zip'],
        'seller_country' => $input['seller_country'],
        'buyer_name' => $input['buyer_name'],
        'buyer_address' => $input['buyer_address'],
        'buyer_city' => $input['buyer_city'],
        'buyer_zip' => $input['buyer_zip'],
        'buyer_country' => $input['buyer_country'],
        'invoice_number' => $input['invoice_number'],
        'invoice_date' => $input['invoice_date']
    ];
    
    // Separate the data that corresponds to the invoice_products_services table
    $invoiceProductData = [];
    for ($i = 1; $i <= $input['product_row_count']; $i++) {
        $productData = [
            'product_id' => $input['product_id_' . $i],
            'quantity' => $input['product_quantity_' . $i],
            'price' => $input['product_price_' . $i],
            'vat' => $input['product_vat_' . $i]
        ];
        $invoiceProductData[] = $productData;
    }
    
    // Save the invoice data to the database
    $invoice = Invoice::create($invoiceData);
    
    // Save the invoice product data to the database
    foreach ($invoiceProductData as $productData) {
        $productData['invoice_id'] = $invoice->id;
        InvoiceProduct::create($productData);
    }
    
    // Redirect the user back to the invoice index page
    return redirect()->route('invoices.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInvoiceRequest  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
