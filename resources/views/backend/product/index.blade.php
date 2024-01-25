@extends('backend.master')
@section('body')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Add Bootstrap CSS Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Table</title>
    </head>

    <body>

        <div class="container mt-5 ms-5">
            <span class="text-center">@include('backend.notification')</span>
            <h2>Product Table</h2>
            <table class="table col-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="ps-5">Category Name</th>
                        <th class="ps-5">Product Name</th>
                        <th class="ps-5">Product Price</th>
                        <th class="ps-5">Product Quantity</th>
                        <th class="ps-5">Product Image</th>
                        <th class="ps-5">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample Data - Replace with your actual data -->
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="ps-5">{{ $product->category->category_name }}</td>
                            <td class="ps-5">{{ $product->name }}</td>
                            <td class="ps-5">{{ $product->price }}</td>
                            <td class="ps-5">{{ $product->quantity }}</td>
                            <td class="ps-5"><img src="{{ asset($product->image) }}" alt="not found" height="70"
                                    width="70"></td>

                            <td>
                                <div class="d-flex gap-2 justify-content-center">
                                    <a href="{{ route('product.edit', $product->id) }}"
                                        class="btn btn-sm btn-outline-success"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Add Bootstrap JS and Popper.js Links (if needed) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>
@endsection
