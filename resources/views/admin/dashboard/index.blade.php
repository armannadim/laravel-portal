@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $memberCount }}</h3>
                            <p>Member Count</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-pen-square"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $newsCount }}</h3>
                            <p>News count</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-newspaper"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $postCount }}</h3>
                            <p>Blog Post Count</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-pen-square"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $messageCount }}</h3>
                            <p>Message Count</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <div class="card">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="fas fa-pen-square mr-1"></i>
                                Blog posts
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content p-0">

                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Tags</th>
                                            <th>Author</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($posts->count())
                                            @foreach($posts as $post)
                                                <tr>
                                                    <td>{{ $post->id }}</td>
                                                    <td>
                                                        <div style="max-width:70px;max-height: 70px;overflow: hidden">
                                                            <img src="{{ asset($post->image) }}" class="img-fluid">
                                                        </div>
                                                    </td>
                                                    <td>{{ $post->title }}</td>
                                                    <td>{{ $post->category->name }}</td>
                                                    <td>
                                                        @foreach($post->tags as $tag)
                                                            <span class="badge badge-primary">{{ $tag->name }}</span>
                                                        @endforeach
                                                    </td>
                                                    <td>{{ $post->user->name }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('post.show', [$post->id]) }}" class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a>
                                                        <a href="{{ route('post.edit', [$post->id]) }}" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                                        <form action="{{ route('post.destroy',[$post->id]) }}"  method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5">
                                                    <h5 class="text-center">No posts found.</h5>
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="col-lg-6 connectedSortable ui-sortable">
                    <div class="card">
                        <div class="card-header ui-sortable-handle" style="cursor: move;">
                            <h3 class="card-title">
                                <i class="fas fa-newspaper mr-1"></i>
                                Latest News
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content p-0">

                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Tags</th>
                                            <th>Author</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($news->count())
                                            @foreach($news as $n)
                                                <tr>
                                                    <td>{{ $n->id }}</td>
                                                    <td>
                                                        <div style="max-width:70px;max-height: 70px;overflow: hidden">
                                                            <img src="{{ asset($n->image) }}" class="img-fluid">
                                                        </div>
                                                    </td>
                                                    <td>{{ $n->title }}</td>
                                                    <td>{{ $n->category->name }}</td>
                                                    <td>
                                                        @foreach($n->tags as $tag)
                                                            <span class="badge badge-primary">{{ $tag->name }}</span>
                                                        @endforeach
                                                    </td>
                                                    <td>{{ $n->user->name }}</td>
                                                    <td class="d-flex">
                                                        <a href="{{ route('post.show', [$n->id]) }}" class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a>
                                                        <a href="{{ route('post.edit', [$n->id]) }}" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                                        <form action="{{ route('post.destroy',[$n->id]) }}"  method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5">
                                                    <h5 class="text-center">No news found.</h5>
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
