@extends('admin.master')

@section('body')
    <div class="offset-1 col-lg-10">
        <div class="card">
            <div class="card-header">
                <strong>Add Brand</strong>
                <h3 class="text-center text-success">{{Session::get('message')}}</h3>
            </div>
            <div class="card-body card-block">
                <form action="{{route('update-brand')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Add Brand</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="brand_name" class="form-control" value="{{$brand->brand_name}}"></div>
                        <div><input type="hidden" name="id" class="form-control" value="{{$brand->id}}"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Brand Description</label></div>
                        <div class="col-12 col-md-9"><input type="text" name="brand_description" class="form-control" value="{{$brand->brand_description}}"></div>
                    </div>
                    <div class="col col-md-3"><label class=" form-control-label">Publication Status</label></div>
                    <div class="col col-md-9">
                        <div class="form-check-inline form-check">
                            <label for="inline-radio1" class="form-check-label ">
                                <input type="radio" id="inline-radio1" name="publication_status" value="1" {{$brand->publication_status == 1 ? 'checked' : ''}} class="form-check-input">Published
                            </label>
                            <label for="inline-radio2" class="form-check-label ">
                                <input type="radio" id="inline-radio2" name="publication_status" value="0" {{$brand->publication_status == 0 ? 'checked' : ''}} class="form-check-input">Unpublished
                            </label>
                        </div>
                    </div>
                    <div>
                        <input type="submit" name="btn" class="btn btn-primary btn-sm" value="Update">
                    </div>
                </form>
            </div>


        </div>
    </div>
@endsection
