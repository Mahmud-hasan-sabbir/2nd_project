@extends('front.master')

@section('title')
    manage product page
@endsection
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center text-success">Manage product table</h2>
                        </div>
                        <div class="card-body">
                            <p class="text-success text-center">{{ Session::has('message') ? Session::get('message') :'' }}</p>
                           <table class="table table-bordered table-hover">
                               <thead>
                                    <tr>
                                        <th>SL NO</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>

                                    </tr>
                               </thead>
                               <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td><img src="{{ $product->image }}" alt="" height="70" width="70"></td>
                                        <td>
                                            <a href="{{ route('edit-product',['id'=>$product->id]) }}" class="btn btn-success btn-sm">Edit</a>
                                            <a href="{{ route('delete-product',['id'=>$product->id]) }}" class="btn btn-danger btn-sm" onclick=" return confirm('are you sure delete product')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                               </tbody>
                           </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

