@extends('front.master')

@section('title')
    Edit product page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-success">Edit product form</h2>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('update-product',['id'=>$product->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product name</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" value="{{ $product->name }}" name="product_name" placeholder="Product name">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Price</label>
                                    <div class="col-md-8">
                                        <input type="number" class="form-control" value="{{ $product->price }}" name="product_price" placeholder="Product price">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Description</label>
                                    <div class="col-md-8">
                                        <textarea name="product_description"   cols="30" rows="5" class="form-control">{{ $product->description }}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" class="form-control" name="product_image" >
                                        <img src="{{ asset($product->image) }}" alt="" height="90" width="120">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="form-control btn btn-success" name="btn" value="Update Product">
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

