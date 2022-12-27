@extends('front.master')

@section('title')
    Add product page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-success">Add product form</h2>
                        </div>
                        <div class="card-body">
                            <p class="text-center text-success">{{ Session::has('message') ? Session::get('message'):'' }}</p>
                            <form action="{{ route('save-product') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="product_name" placeholder="Product name">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Price</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" name="product_price" placeholder="Product price">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Description</label>
                                    <div class="col-md-8">
                                        <textarea name="product_description" id="" cols="30" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="product_image" >
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="form-control btn btn-success" name="btn" value="Create Add Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
