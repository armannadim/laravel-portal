@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Faq List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Faq</li>
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
                                <h3 class="card-title">Faq list</h3>
                                <a href="{{ route('faq.create') }}" class="btn btn-primary">Create Faq</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Order</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($faqs->count())
                                @foreach($faqs as $faq)
                                <tr>
                                    <td>{{ $faq->id }}</td>
                                    <td>{{ $faq->order }}</td>
                                    <td>{{ $faq->question }}</td>
                                    <td>{{ $faq->answer }}</td>
                                    <td class="d-flex">
                                        <!--<a href="{{ route('faq.show', [$faq->id]) }}" class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a>-->
                                        <a href="{{ route('faq.edit', [$faq->id]) }}" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('faq.destroy',[$faq->id]) }}"  method="POST">
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
                                        <h5 class="text-center">No faqs found.</h5>
                                    </td>
                                </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            {{ $faqs->links() }}
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
