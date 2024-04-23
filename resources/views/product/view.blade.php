<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>  <title>Task Laravel</title>
        <style>
            /* Style for search container */
.search-container {
    display: flex;
    align-items: center;
}

/* Style for search input */
.search-input {
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-left: 8px; /* Adjust margin as needed */
}

/* Style for search button */
.search-button {
    padding: 8px 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Hover effect for search button */
.search-button:hover {
    background-color: #0056b3;
}
        </style>
    </head>
    <body>

<h3 style="position:relative">Product List </h3>
<a href="{{ route('add-product') }}" class="btn btn-info" >Create Product</a>

<form action="{{ route('products.search') }}" class="text-xs-right" method="GET" >
    <div class="search-container">
<button class="search-button">Search</button>
<input type="text" class="search-input" placeholder="Search products">
</div>
 </form>

  <table class="table">
    <thead>
        <tr>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Price </th>
            <th>Quantity </th>
            <th>Description </th>

            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $item)
        <tr>
            <td>
            <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->name }}" style="max-width: 100px;">
            </td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->price }} EGP</td>
        <td>{{ $item->quantity }}  Pic</td>
        <td>{{ $item->description }} </td>


        <td width="30%">
        <a href="{{ route('product.edit',$item->id) }}" class="btn btn-primary" title="Product Details Data">Update </a>
        <a href="{{ route('product.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
        Delete</a>
        </td>
        </tr>
        @endforeach

    </tbody>

  </table>
  {{ $products->links() }}

</body>
</html>
