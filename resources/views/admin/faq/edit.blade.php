@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Faq</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('faq.index') }}">Faq</a></li>
                        <li class="breadcrumb-item active">Edit Faq</li>
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
                                <h3 class="card-title">Edit Faq</h3>
                                <a href="{{ route('faq.index') }}" class="btn btn-primary">Go Back</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                    <!-- form start -->
                                    <form action="{{ route('faq.update', $faq->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            @include('includes.errors')
                                            <input type="hidden" name="id" value="{{ $faq->id }}">
                                            <div class="row">
                                                <div class="col-2">
                                                    <div class="form-group">
                                                        <label for="order">Order</label>
                                                        <input type="number" name="order" class="form-control" id="order" value="{{ old('order', $faq->order) }}" placeholder="Order">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="question">Question</label>
                                                <input type="text" name="question" class="form-control" value="{{ old('question', $faq->question) }}" placeholder="Enter Faq name">
                                            </div>
                                            <div class="form-group">
                                                <label for="answer">Answer</label>
                                                <textarea type="text" name="answer" class="form-control" placeholder="Answer">{{ old('answer', $faq->answer)}}</textarea>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Update Faq</button>
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
