@extends('index')
<main id="main" class="main">
    <div class="container my-4">
        <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <!-- Grid row -->
            <div class="form-group row">
                <!-- Default input -->
                <label for="inputEmail3" class="col-sm-2 col-form-label"> Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="" name="pro_name">
                </div>
            </div>
            <span style="color:red;font-size:15px;">
                @error('pro_name')
                {{$message}}
                @enderror
            </span><br>
            <!-- Grid row -->
            <!-- Grid row -->
            <div class="form-group row">
                <!-- Default input -->
                <label for="price" class="col-sm-2 col-form-label">weight</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPassword3" placeholder="" name="pro_price">
                </div>
            </div>
            <span style="color:red;font-size:15px;">
                @error('pro_price')
                {{$message}}
                @enderror
            </span>
            <br>
            <!-- Grid row -->
            <!-- Grid row -->
            <div class="form-group row">
                <!-- Default input -->
                <label for="detail" class="col-sm-2 col-form-label">type</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="" name="pro_detail">
                </div>
            </div>
            <span style="color:red;font-size:15px;">
                @error('pro_detail')
                {{$message}}
                @enderror
            </span>
            <br>
            <!-- Grid row -->
            <!-- Grid row -->
            <div class="form-group row">
                <!-- Default input -->
                <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="" name="pro_brand">
                </div>
            </div>
            <span style="color:red;font-size:15px;">
                @error('pro_brand')
                {{$message}}
                @enderror
            </span>
            <br>
            <!-- Grid row -->
            <!-- Grid row -->
            <div class="form-group row">
                <!-- Default input -->
                <label for="qty" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="" name="pro_qty">
                </div>
            </div>
            <span style="color:red;font-size:15px;">
                @error('pro_qty')
                {{$message}}
                @enderror
            </span>
            <br>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="form-group row">
                <div class="col-sm-10">
                    <center><button type="submit" class="btn btn-primary btn-md">ADD</button></center>
                </div>
            </div>
            <!-- Grid row -->
        </form>
        <!-- Default horizontal form -->
    </div>
</main>
</body>
</html>