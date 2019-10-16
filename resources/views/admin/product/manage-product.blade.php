@extends('admin.master')

@section('body')
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <h3 class="text-success text-center" id="xyxy">{{Session::get('message')}}</h3>
                <table class="table table-bordered" width="">
                    <tr>
                        <th>SL. No</th>
                        <th>Category name</th>
                        <th>Brand name</th>
                        <th>Product name</th>
                        <th>Product price</th>
                        <th>Product quantity</th>
                        <th>Product image</th>
                        <th>Publication status</th>
                        <th width="">Action</th>
                    </tr>
                    <tr>
                        @php($i=1)
                        @foreach($products as $product)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$product->add_category}}</td>
                            <td>{{$product->brand_name}}</td>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->product_price}}</td>
                            <td>{{$product->product_quantity}}</td>
                            <td><img src="{{asset($product->product_image)}}"> </td>
                            <td>{{$product->publication_status == 1?'Published' : 'Unpublished'}}</td>
                            <td>
                                @if($product->publication_status == 1)
                                    <a href="{{route('unpublished-product',['id'=>$product->id])}}" class="btn btn-warning">
                                        <span><i class="fa fa-arrow-down"></i> </span>
                                    </a>
                                @else
                                    <a href="{{route('published-product',['id'=>$product->id])}}" class="btn btn-info">
                                        <span><i class="fa fa-arrow-up"></i></span>
                                    </a>
                                @endif
                                <a href="{{route('edit-product',['id'=>$product->id])}}" class="btn btn-success">
                                    <span><i class="fa fa-edit"></i></span>
                                </a>
                                <a href="{{route('delete-product',['id'=>$product->id])}}" class="btn btn-danger">
                                    <span><i class="fa fa-trash"></i></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection