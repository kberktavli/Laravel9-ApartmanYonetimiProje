@extends('layouts.adminbase')
@section('title', 'Edit Content:'.$data->title)

@section('content')
    <div class="main-panel">
        <!-- partial -->
        <div class="content-wrapper">
            <h1>Edit Content: {{$data->title}}</h1>
            <div class="card-header">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-description">  </p>
                            <form role="form" class="forms-sample" action="{{route('admin.content.update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select class="form-control select2" name="menu_id" style="...">
                                        @foreach ($datalist as $rs)
                                            <option value="{{ $rs->id }}" @if($rs->id ==$data->menu_id) selected="selected" @endif>
                                                {{ \App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs, $rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keywords</label>
                                    <input type="text" class="form-control" name="keywords"  value="{{$data->keywords}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input type="text" class="form-control" name="description"  value="{{$data->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Detail</label>
                                    <textarea name="" id="" cols="30" rows="10" class="form-control" name="detail" value="{{$data->detail}}"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">News</label>
                                    <input type="text" class="form-control" name="news" placeholder="News" value="{{$data->news}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Anounce</label>
                                    <input type="text" class="form-control" name="anounce" placeholder="Anounce" value="{{$data->anounce}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" placeholder="Keywords" value="{{$data->keywords}}">
                                </div>
                                <div class="form-group">
                                    <label>İmage</label>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="form-control file-upload-info" name="image"
                                            placeholder="Upload Image" value="{{$data->image}}">

                                    </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Status</label>
                                    <select class="form-control" id="exampleFormControlSelect2" name="status">
                                      <option selected>{{$data->status}}</option>
                                      <option>True</option>
                                      <option>False</option>
                                    </select>
                                  </div>

                                <button type="submit" class="btn btn-primary mr-2">Update Data</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <!-- content-wrapper ends -->

    @endsection
