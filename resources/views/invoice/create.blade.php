@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Invoice</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('invoices.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="seller_name" class="col-md-4 col-form-label text-md-right">Seller Name</label>

                            <div class="col-md-6">
                                <input id="seller_name" type="text" class="form-control @error('seller_name') is-invalid @enderror" name="seller_name" value="{{ old('seller_name') }}" required autocomplete="seller_name" autofocus>

                                @error('seller_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="buyer_name" class="col-md-4 col-form-label text-md-right">Buyer Name</label>

                            <div class="col-md-6">
                                <input id="buyer_name" type="text" class="form-control @error('buyer_name') is-invalid @enderror" name="buyer_name" value="{{ old('buyer_name') }}" required autocomplete="buyer_name">

                                @error('buyer_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invoice_number" class="col-md-4 col-form-label text-md-right">Invoice Number</label>

                            <div class="col-md-6">
                                <input id="invoice_number" type="text" class="form-control @error('invoice_number') is-invalid @enderror" name="invoice_number" value="{{ old('invoice_number') }}" required autocomplete="invoice_number">

                                @error('invoice_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="invoice_date" class="col-md-4 col-form-label text-md-right">Invoice Date</label>

                            <div class="col-md-6">
                                <input id="invoice_date" type="date" class="form-control @error('invoice_date') is-invalid @enderror" name="invoice_date" value="{{ old('invoice_date') }}" required autocomplete="invoice_date">

                                @error('invoice_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <hr>

                        <h5>Products/Services on Sale</h5>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product ID</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price per Quantity</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price * Quantity</th>
                                    <th scope="col">VAT</th>
                                    <th scope
                                </tr>
                            </thead>
                            <tbody id="products_table_body">
                                <tr id="product_row_1">
                                    <td>1</td>
                                    <td>
                                        <select name="product_id[]" class="form-control">
                                            @foreach($products as $product)
                                                <option value="{{ $product->id }}">{{ $product->id }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="product_name[]" class="form-control" value="{{ old('product_name.0') }}" required>
                                    </td>
                                    <td>
                                        <input type="number" name="price_per_quantity[]" class="form-control" value="{{ old('price_per_quantity.0') }}" required>
                                    </td>
                                    <td>
                                        <input type="number" name="quantity[]" class="form-control" value="{{ old('quantity.0') }}" required>
                                    </td>
                                    <td>
                                        <input type="number" name="price[]" class="form-control" value="{{ old('price.0') }}" required>
                                    </td>
                                    <td>
                                        <input type="number" name="vat[]" class="form-control" value="{{ old('vat.0') }}" required>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Invoice
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        var product_row_count = 1;

        function addProductRow() {
            product_row_count++;

            var row = '<tr id="product_row_'+product_row_count+'">'+
                        '<td>'+product_row_count+'</td>'+
                        '<td>'+
                            '<select name="product_id[]" class="form-control">'+
                                '@foreach($products as $product)'+
                                    '<option value="{{ $product->id }}">{{ $product->id }}</option>'+
                                '@endforeach'+
                            '</select>'+
                        '</td>'+
                        '<td>'+
                            '<input type="text" name="product_name[]" class="form-control" value="{{ old('product_name') }}" required>'+
                        '</td>'+
                        '<td>'+
                            '<input type="number" name="price_per_quantity[]" class="form-control" value="{{ old('price_per_quantity') }}" required>'+
                        '</td>'+
                        '<td>'+
                            '<input type="number" name="quantity[]" class="form-control" value="{{ old('quantity') }}" required>'+
                        '</td>'+
                        '<td>'+
                            '<input type="number" name="price[]" class="form-control" value="{{ old('price') }}" required>'+
                        '</td>'+
                        '<td>'+
                            '<input type="number" name="vat[]" class="form-control" value="{{ old('vat') }}" required>'+
                        '</td>'+
                    '</tr>';

            $('#products_table_body').append(row);
        }

        $(document).ready(function() {
            $('#add_product_row_button').on('click', function() {
                addProductRow();
            });
        });
    </script>
@endpush
