@extends('backend.master')
@section('body')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Add Bootstrap CSS Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Form</title>
    </head>

    <body>

        <div class="container mt-5">
            <span class="text-center">@include('backend.notification')</span>
            <h2>Product Form</h2>
            <form method="post" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3 col-6 ">
                    <label for="categoryName" class="form-label ">Category Name</label>
                    <select class="form-control" name="category_id" onchange="setSubCategory(this.value)">
                        <option value="" disabled selected>--select category--</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{$product->category_id==$category->id?'selected':''}}>{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-6 ">
                    <label class="form-label ">Product Name</label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}" placeholder="Enter Product Name">
                </div>
                <div class="mb-3 col-6 ">
                    <label class="form-label ">Product Price</label>
                    <input type="number" class="form-control" name="price" value="{{$product->price}}" placeholder="Enter Product Price">
                </div>
                <div class="mb-3 col-6 ">
                    <label class="form-label ">Product Quantity</label>
                    <input type="number" class="form-control" name="quantity" value="{{$product->quantity}}" placeholder="Enter Product Quantity">
                </div>
                <div class="mb-3 col-6">
                    <label for="title" class="form-label">Product Image</label>
                    <input type="file" class="form-control" name="image" accept="images/*" aria-describedby=""/>
                </div>

                <button type="submit" class="btn btn-primary ms-2 ">Submit</button>
            </form>
        </div>

        <!-- Add Bootstrap JS and Popper.js Links (if needed) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>
@endsection
