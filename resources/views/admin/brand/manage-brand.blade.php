@extends('admin.master')

@section('body')
    <div class="col-lg-10 offset-1">
        <div class="card">
            <div class="card-body">
                <h3 class="text-success text-center" id="xyxy">{{Session::get('message')}}</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>SL. No</th>
                        <th>Brand name</th>
                        <th>Brand description</th>
                        <th>Publication status</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$brand->brand_name}}</td>
                            <td>{{$brand->brand_description}}</td>
                            <td>{{$brand->publication_status == 1?'Published' : 'Unpublished'}}</td>
                            <td>
                                @if($brand->publication_status == 1)
                                    <a href="{{route('unpublished-brand',['id'=>$brand->id])}}" class="btn btn-warning">
                                        <span><i class="fa fa-arrow-down"></i> </span>
                                    </a>
                                @else
                                    <a href="{{route('published-brand',['id'=>$brand->id])}}" class="btn btn-info">
                                        <span><i class="fa fa-arrow-up"></i></span>
                                    </a>
                                @endif
                                <a href="{{route('edit-brand',['id'=>$brand->id])}}" class="btn btn-success">
                                    <span><i class="fa fa-edit"></i></span>
                                </a>
                                <a href="{{route('delete-brand',['id'=>$brand->id])}}" class="btn btn-danger">
                                    <span><i class="fa fa-trash"></i></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection