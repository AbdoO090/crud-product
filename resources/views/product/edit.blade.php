<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>  <title>Task Laravel</title>
    </head>
    <body>
  <!-- Basic Forms -->
         <div class="box">
             <div class="box-header with-border">
                 <h4 class="box-title">Update Product </h4>

             </div>
             <!-- /.box-header -->
             <div class="box-body">
                 <div class="row">
                     <div class="col">
                         <form method="post" action="{{ route('product-update') }}" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="id" value="{{ $products->id }}">

                             <div class="row">
                                 <div class="col-12">


                                     <div class="row"> <!-- start 1st row  -->
                                         <div class="col-md-4">
                                             <div class="form-group">
                                                 <h5>Product Name <span class="text-danger">*</span></h5>
                                                 <div class="controls">
                                                     <input type="text" name="name" class="form-control"
                                                         required="" value="{{ $products->name }}">
                                                     @error('name')
                                                         <span class="text-danger">{{ $message }}</span>
                                                     @enderror
                                                 </div>
                                             </div>

                                         </div> <!-- end col md 4 -->
                                         <div class="col-md-4">

                                             <div class="form-group">
                                                 <h5>Product Price <span class="text-danger">*</span></h5>
                                                 <div class="controls">
                                                     <input type="text" name="price" class="form-control"
                                                         required="" value="{{ $products->price }}">
                                                     @error('price')
                                                         <span class="text-danger">{{ $message }}</span>
                                                     @enderror
                                                 </div>
                                             </div>

                                         </div> <!-- end col md 4 -->
                                         <div class="col-md-4">

                                             <div class="form-group">
                                                 <h5>Product Quantity <span class="text-danger">*</span></h5>
                                                 <div class="controls">
                                                     <input type="text" name="quantity" class="form-control"
                                                         required="" value="{{ $products->quantity }}">
                                                     @error('quantity')
                                                         <span class="text-danger">{{ $message }}</span>
                                                     @enderror
                                                 </div>
                                             </div>

                                         </div> <!-- end col md 4 -->

                                             <div class="row"> <!-- start 7th row  -->
                                                 <div class="col-md-6">

                                                     <div class="form-group">
                                                         <h5> Description  <span
                                                                 class="text-danger">*</span>
                                                         </h5>
                                                         <div class="controls">
                                                             <textarea name="description" id="textarea" class="form-control" required="" placeholder="Textarea text" value="{{ $products->description }}"></textarea>
                                                         </div>
                                                     </div>

                                                 </div> <!-- end col md 6 -->
                                                 <div class="text-xs-right">
                                                    <input type="submit" class="btn btn-primary mb-5"
                                                        value="Update Product">
                                                </div>
                         </form>

                     </div>
                     <!-- /.col -->
                 </div>
                 <!-- /.row -->
             </div>
             <!-- /.box-body -->
         </div>

         <!-- /.box -->
         @if (Session::has('message'))
         <script>
             swal("Message", "{{Session::get('message')}}" ,'success',{
             button:true,
             button:"Ok",
             });
         </script>
        </body>
        </html>
