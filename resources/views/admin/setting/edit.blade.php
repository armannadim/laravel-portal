@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Site Setting</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit site setting</li>
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
                                <h3 class="card-title">Edit Setting</h3>
                                <a href="{{ route('setting.index') }}" class="btn btn-primary">Go Back</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                    <!-- form start -->
                                    <form action="{{ route('setting.update', 'id='. $setting->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            @include('includes.errors')
                                            <input type="hidden" name="id" value="{{ $setting->id }}">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="site_name">Site Name</label>
                                                        <input type="text" name="site_name" class="form-control" value="{{  old('site_name', $setting->site_name) }}" placeholder="Enter site name">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <label for="image">Logo</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="logo" id="logo">
                                                        <label class="custom-file-label" for="logo">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="facebook">Facebook</label>
                                                        <input type="text" name="facebook" class="form-control" value="{{  old('facebook', $setting->facebook) }}" placeholder="Enter facebook url.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="twitter">Twitter</label>
                                                        <input type="text" name="twitter" class="form-control" value="{{ old('twitter', $setting->twitter)  }}" placeholder="Enter twitter url.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="instagram">Instagram</label>
                                                        <input type="text" name="instagram" class="form-control" value="{{ old('instagram', $setting->instagram) }}" placeholder="Enter instagram url.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="linkedin">LinkedIn</label>
                                                        <input type="text" name="linkedin" class="form-control" value="{{   old('linkedin', $setting->linkedin) }}" placeholder="Enter linkedin url.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="youtube">Youtube</label>
                                                        <input type="text" name="youtube" class="form-control" value="{{  old('youtube', $setting->youtube) }}" placeholder="Enter youtube url.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" name="email" class="form-control" value="{{  old('email', $setting->email) }}" placeholder="Enter email.">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="text" name="phone" class="form-control" value="{{  old('phone', $setting->phone) }}" placeholder="Organization phone number.">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="copyright">Copyright</label>
                                                        <input type="text" name="copyright" class="form-control" value="{{  old('copyright', $setting->copyright) }}" placeholder="Enter copy right text.">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="about_site">Description</label>
                                                <textarea type="text" name="about_site" class="form-control" placeholder="Description">{{ $setting->about_site }}</textarea>
                                            </div>

                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Setting</button>
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
