@extends('layouts.adminbase')
@section('title', 'Menu List')

@section('content')
    <div class="main-panel">
        <!-- partial -->
        <div class="content-wrapper">
            <h1>Menu List</h1>

            <div class="card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Menu List</h4>
                        </p>
                        <div class="container">
                            <div class="strech-card">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">Id</th>
                                            <th>Tittle</th>
                                            <th>Keywords</th>
                                            <th>Description</th>
                                            <th>İmage</th>
                                            <th>Status</th>
                                            <th style="width: 40px">Edit</th>
                                            <th style="width: 40px">Delete</th>
                                            <th style="width: 40px">Show</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $rs)
                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ $rs->title }}</td>
                                                <td>{{ $rs->keywords }}</td>
                                                <td>{{ $rs->description }}</td>
                                                <td>{{ $rs->image }}</td>
                                                <td>{{ $rs->status }}</td>
                                                <td><a href="/admin/menu/edit/{{ $rs->id }}"
                                                        class="btn btn-warning btn-rounded btn-sm">Edit</a></td>
                                                <td><a href="/admin/menu/delete/{{ $rs->id }}"
                                                        class="btn btn-danger btn-rounded btn-sm">Delete</a>
                                                </td>
                                                <td><a href="/admin/menu/show/{{ $rs->id }}"
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
