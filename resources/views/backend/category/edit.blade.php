@extends('backend.master')
@section('body')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Add Bootstrap CSS Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Category Form</title>
    </head>

    <body>

        <div class="container mt-5">
            <span class="text-center">@include('backend.notification')</span>
            <h2>Category Form</h2>
            <form method="post" action="{{ route('category.update', $category->id) }}">
                @csrf
                @method('put')
                <div class="mb-3 col-6 ">
                    <label for="categoryName" class="form-label ">Name</label>
                    <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}"
                        id="categoryName" placeholder="Enter Category Name">
                </div>
                <button type="submit" class="btn btn-primary ms-2 ">Submit</button>
            </form>
        </div>

        <!-- Add Bootstrap JS and Popper.js Links (if needed) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    </body>

    </html>
@endsection
