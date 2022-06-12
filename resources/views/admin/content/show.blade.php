@extends('layouts.adminbase')
@section('title', 'Show Content:' . $data->title)

@section('content')
    <div class="main-panel">
        <!-- partial -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Show Content: {{ $data->title }}</h1>
                <div class="row mb-2">

                    <div class="col-sm-3">
                        <a href="{{ route('admin.content.edit', ['id' => $data->id]) }}"
                            class="btn btn-warning btn-rounded btn-sm" style="width: 100px">Edit</a>
                    </div>
                    <div class="col-sm-3">
                        <a href="{{ route('admin.content.destroy', ['id' => $data->id]) }}"
                            onclick="return confirm('Deleting!! Are you sure ?')" class="btn btn-danger btn-rounded btn-sm"
                            style="width: 100px">Delete</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Show Content</li>
                        </ol>
                    </div>

                </div>
            </section>


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail Data</h4>

                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>{{ $data->id }}</th>
                                </tr>

                                <tr>
                                    <th>Title</th>
                                    <th>{{ $data->title }}</th>
                                </tr>
                                <tr>
                                    <th>Tür</th>
                                    @if ($data->menu_id == 10)
                                        <th>Kiraci</th>
                                    @elseif ($data->menu_id == 11)
                                        <th>Ev Sahibi</th>
                                    @endif
                                </tr>








                                <tr>
                                    <th>Description</th>
                                    <th>{{ $data->description }}</th>
                                </tr>
                                <tr>
                                    <th>Detail</th>
                                    <th>{{ $data->detail }}</th>
                                </tr>
                                <tr>
                                    <th>News</th>
                                    <th>{{ $data->news }}</th>
                                </tr>
                                <tr>
                                    <th>Anounce</th>
                                    <th>{{ $data->anounce }}</th>
                                </tr>

                                <tr>
                                    <th>Image</th>
                                    <td>
                                        @if ($data->image)
                                            <img src="{{ Storage::url($data->image) }}">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>{{ $data->status }}</th>
                                </tr>
                                <tr>
                                    <th>Created Date</th>
                                    <th>{{ $data->created_at }}</th>
                                </tr>
                                <tr>
                                    <th>Update Date</th>
                                    <th>{{ $data->updated_at }}</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>



        <!-- content-wrapper ends -->

    @endsection
