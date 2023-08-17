@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Member</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('member.index') }}">Member</a></li>
                        <li class="breadcrumb-item active">Member profile</li>
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
                                <h3 class="card-title">Member profile</h3>
                                <a href="{{ route('member.index') }}" class="btn btn-primary">Go Back</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-2">
                                    <div class="card">
                                        <div class="card-body text-center" style="margin:auto;">
                                            <img src="{{ asset($member->image) }}" alt="" class="img-fluid img-circle elevation-2">
                                            <h5>{{ $member->name }}</h5>
                                            <p>{{ $member->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-10">
                                    <!-- form start -->
                                    <form action="{{ route('member.profile.update', $member->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                                        <input type="hidden" name="id" value="{{ $member->id }}">
                                        @csrf
                                        <div class="card-body">
                                            @include('includes.errors')
                                            <div class="row">
                                                <div class="col-12 col-lg-6">

                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" class="form-control" id="name" value="{{$member->name}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" class="form-control" id="email" value="{{$member->email}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password">Email <small class="text-info">Enter password if you want to change.</small></label>
                                                        <input type="password" name="password" class="form-control" id="password" value="">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <div class="form-group">
                                                        <label for="image">Member image</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="image" id="image">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea type="text" name="description" rows="5" class="form-control" id="description" placeholder="Description">{{$member->name}}</textarea>
                                                    </div>

                                                </div>

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
