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
                        <li class="breadcrumb-item active">Create Post</li>
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
                                <h3 class="card-title">Edit Post</h3>
                                <a href="{{ route('post.index') }}" class="btn btn-primary">Go Back</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                    <!-- form start -->
                                    <form action="{{ route('post.update',$post->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" value="{{ $post->id }}" name="id">
                                        <div class="card-body">
                                            @include('includes.errors')

                                            <div class="form-group">
                                                <label for="name">Post Title</label>
                                                <input type="text" name="title" class="form-control" id="title"
                                                       value="{{ $post->title }}" placeholder="Post title">
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Post Category</label>
                                                <select name="category_id" class="form-control" id="category_id">
                                                    <option value="">Select Category</option>
                                                    @foreach($categories as $c)
                                                        <option value="{{ $c->id }}" @if($post->category_id == $c->id) selected @endif >{{ $c->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <label for="image">Image</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="image" id="image">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-4 text-right">
                                                        <div style="max-width:100px;max-height:100px;overflow: hidden;margin-left:auto">
                                                            <img src="{{ asset($post->image) }}" class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-control">
                                                <label for="tags">Choose Tags</label>
                                                <div class="d-flex flex-wrap">
                                                    @foreach($tags as $t)
                                                        <div class="custom-control custom-checkbox" style="margin-right: 20px;">
                                                            <input class="custom-control-input" name="tags[]" type="checkbox" id="tag{{ $t->id }}" value="{{ $t->id }}"
                                                                   @foreach($post->tags as $pt)
                                                                   @if($t->id == $pt->id)
                                                                   checked
                                                                @endif
                                                                @endforeach>
                                                            <label for="tag{{ $t->id }}" class="custom-control-label">{{ $t->name }}</label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!--<div class="description">Summernote</div>-->
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea type="text" name="description" class="form-control" id="description" placeholder="Description">{{$post->description}}</textarea>
                                            </div>

                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

@section('style')
    <link rel="stylesheet" href="{{ asset('admin')}}/plugins/summernote/summernote-bs4.min.css">
@endsection

@section('script')
    <script src="{{ asset('admin') }}/plugins/summernote/summernote-bs4.min.js"></script>

    <script>
        $('#description').summernote({
            placeholder: "Write post here ",
            tabsize: 2,
            height: 400
        });
    </script>
@endsection
