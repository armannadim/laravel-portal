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
                        <li class="breadcrumb-item active">Create Member</li>
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
                                <h3 class="card-title">Create Member</h3>
                                <a href="{{ route('member.index') }}" class="btn btn-primary">Go Back</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                    <!-- form start -->
                                    <form action="{{ route('member.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            @include('includes.errors')
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Enter name">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" name="email" class="form-control" placeholder="Enter email.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" name="phone" class="form-control" placeholder="Phone number.">
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="facebook">Facebook</label>
                                                        <input type="text" name="facebook" class="form-control" placeholder="Enter facebook url.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="twitter">Twitter</label>
                                                        <input type="text" name="twitter" class="form-control" placeholder="Enter twitter url.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="instagram">Instagram</label>
                                                        <input type="text" name="instagram" class="form-control" placeholder="Enter instagram url.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="linkedin">LinkedIn</label>
                                                        <input type="text" name="linkedin" class="form-control" placeholder="Enter linkedin url.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="membership_type">Membership Type</label>
                                                        <select class="form-control" name="membership_type">
                                                            <option>General Member</option>
                                                            <option>Governing Body Member</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="role">Role</label>
                                                        <select class="form-control" name="role">
                                                            <option>General Member</option>
                                                            <option>Working Member</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="image">Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="image" id="image">
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="brief_bio">Brief Bio <small class="text-info">Maximum 300 words.</small></label>
                                                        <textarea type="text" name="brief_bio" class="form-control" placeholder="Enter brief biography of the member"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="bio">Detail Bio</label>
                                                        <textarea type="text" id="bio" name="bio" class="form-control" placeholder="Enter biography of the member"></textarea>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Create Member</button>
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
        $('#bio').summernote({
            placeholder: "Write member biography here ",
            tabsize: 2,
            height: 400
        });
    </script>
@endsection
