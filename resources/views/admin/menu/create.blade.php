@extends('layouts.adminbase')
@section('title', 'Add Menu')

@section('content')
    <div class="main-panel">
        <!-- partial -->
        <div class="content-wrapper">
            <h1>Add Menu</h1>
            <div class="card-header">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic form elements</h4>
                            <p class="card-description"> Basic form elements </p>
                            <form role="form" class="forms-sample" action="{{ route('admin.menu.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select class="form-control select2" name="parent_id" style="...">
                                        <option value="0" selected="selected">Main Menu</option>
                                        @foreach ($data as $rs)
                                            <option value="{{ $rs->id }}">
                                                {{ \App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs, $rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>




                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="file" class="form-control file-upload-info" name="image"
                                            placeholder="Upload Image">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Status</label>
                                    <select class="form-control" id="exampleFormControlSelect2" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>



        <!-- content-wrapper ends -->

    @endsection
