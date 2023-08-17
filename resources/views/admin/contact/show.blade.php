@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
                        <li class="breadcrumb-item active">Create Category</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-content-center">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Read Message</h3>
                                <a href="{{ route('contact.index') }}" class="btn btn-primary">Go Back to contact list</a>
                            </div>
                        </div>
                        <!-- /.card-header -->

                        <div class="card-body">
                            <table class="table table-bordered table-primary">
                                <tbody>
                                <tr>
                                    <th style="width:200px;">Name</th>
                                    <td>{{ $message->name }}</td>
                                </tr>
                                <tr>
                                    <th style="width:200px;">email</th>
                                    <td>{{ $message->email }}</td>
                                </tr> <tr>
                                    <th style="width:200px;">Subject</th>
                                    <td>{{ $message->subject }}</td>
                                </tr>
                                <tr>
                                    <th style="width:200px;">Date</th>
                                    <td>{{ $message->created_at->format('d M, Y h:m') }}</td>
                                </tr>
                                <tr>
                                    <th style="width:200px;">Message</th>
                                    <td>{{ $message->message }}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>


                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
