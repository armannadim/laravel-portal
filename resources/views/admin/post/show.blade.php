@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
                        <li class="breadcrumb-item active">Show Post</li>
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
                                <h3 class="card-title">View Post</h3>
                                <div class="text-right">
                                <a href="{{ route('post.edit', [$post->id]) }}" class="btn btn-success">Edit Post</a>
                                <a href="{{ route('post.index') }}" class="btn btn-primary">Go Back</a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table ">
                                <tbody>
                                <tr>
                                    <th style="width:200px">Image</th>
                                    <td>
                                        <div style="max-width: 200px;max-height: 200px;overflow: hidden">
                                            <img src="{{ asset($post->image) }}" class="img-fluid">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:200px">Title</th>
                                    <td>
                                        {{ $post->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:200px">Slug</th>
                                    <td>
                                        {{ $post->slug }}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:200px">Category Name</th>
                                    <td>
                                        {{ $post->category->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:200px">Author Name</th>
                                    <td>
                                        {{ $post->user->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:200px">Description</th>
                                    <td>
                                        {!! $post->description !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th style="width:200px">Tags</th>
                                    <td>
                                        @foreach($post->tags as $tag)
                                            <span class="badge badge-primary">{{ $tag->name }}</span>
                                        @endforeach

                                    </td>
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
