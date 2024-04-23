<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>  <title>Task Laravel</title>
    </head>
    <body>

         <!-- /.box -->
         <form action="{{ route('product-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h5>Product Name <span class="text-danger">*</span></h5>
            <div class="controls">
                <input type="text" name="name" class="form-control"
                    >
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <h5>Product Quantity <span class="text-danger">*</span></h5>
                    <div class="controls">
                         <input type="text" name="quantity" class="form-control"  >
                         @error('quantity')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
           <h5>Product Price <span class="text-danger">*</span></h5>
                    <div class="controls">
                         <input type="text" name="price" class="form-control"  >
                         @error('price')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
            <h5> Description  <span class="text-danger">*</span></h5>
                    <div class="controls">
                      <textarea name="description" id="textarea" class="form-control"  placeholder="Textarea text"></textarea>
                       @error('description')
                      <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
            <h5>Product Image <span class="text-danger">*</span></h5>
                    <div class="controls">
                        <input type="file" name="image">
                        @error('image')
                         <span class="text-danger">{{ $message }}</span>
                         @enderror
                    </div>
                    <div class="text-xs-right">
                        <input type="submit" class="btn btn-rounded btn-primary mb-5"
                            value="Add Product">
                    </div>
        </form>
        @if (Session::has('message'))
        <script>
            swal("Message", "{{Session::get('message')}}" ,'success',{
            button:true,
            button:"Ok",
            });
        </script>


        @endif
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        </body>
        </html>
