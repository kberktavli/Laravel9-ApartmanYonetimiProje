@extends('layouts.adminbase')
@section('title', 'Content List')

@section('content')
    <div class="main-panel">
        <!-- partial -->
        <div class="content-wrapper">
            <a href="{{route('admin.content.create')}}" class="btn-rounded btn btn-success btn-lg" style="width: 200px" >Add Content</a>


            <div class="card">
                <div class="card">
                    <div class="card-body"><p>
                        <h4 class="card-title">Content List</h4>
                        </p>
                        <div class="container">
                            <div class="strech-card">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Menu</th>
                                            <th style="width: 10px">Id</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Detail</th>
                                            <th>News</th>
                                            <th>Anounce</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th style="width: 40px">Edit</th>
                                            <th style="width: 40px">Delete</th>
                                            <th style="width: 40px">Show</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $rs)
                                            <tr>
                                                <td>{{ \App\Http\Controllers\AdminPanel\MenuController::getParentsTree($rs,$rs->menu_id)}}</td>
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ $rs->title }}</td>
                                                <td>{{$rs->description}}</td>
                                                <td>{{ $rs->detail }}</td>
                                                <td>{{ $rs->news }}</td>
                                                <td>{{$rs->anounce}}</td>
                                                <td>{{ $rs->status}}</td>
                                                <td>
                                                    @if ($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}">
                                                    @endif
                                                   </td>
                                                   <td><a href="{{route('admin.content.edit',['id'=>$rs->id])}}"
                                                    class="btn btn-warning btn-rounded btn-sm">Edit</a></td>
                                            <td><a href="{{route('admin.content.destroy',['id'=>$rs->id])}}"
                                                    class="btn btn-danger btn-rounded btn-sm">Delete</a>
                                            </td>
                                            <td><a href="{{route('admin.content.show',['id'=>$rs->id])}}"
                                                    class="btn btn-success btn-rounded btn-sm">Show</a>
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
        </div>
        <!-- content-wrapper ends -->

    @endsection
