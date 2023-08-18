@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Member List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Member</li>
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
                                <h3 class="card-title">Member list</h3>
                                <a href="{{ route('member.create') }}" class="btn btn-primary">Create Member</a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th style="width:100px;">Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Membership Type</th>
                                    <th style="width: 40px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($members->count())
                                @foreach($members as $member)
                                <tr>
                                    <td class="align-middle">{{ $member->id }}</td>
                                    <td class="align-middle"><img src="{{ asset($member->image) }}" alt="" class="img-fluid img-circle" style="max-height: 70px;max-width: 70px"> </td>
                                    <td class="align-middle">{{ $member->name }}</td>
                                    <td class="align-middle">{{ $member->email }}</td>
                                    <td class="text-center align-middle">
                                        {{ $member->membership_type }}
                                    </td>
                                    <td class="d-flex align-middle">
                                        <a href="{{ route('member.show', [$member->id]) }}" class="btn btn-sm btn-success mr-1"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('member.edit', [$member->id]) }}" class="btn btn-sm btn-primary mr-1"><i class="fas fa-edit"></i></a>
                                        <form action="{{ route('member.destroy',[$member->id]) }}"  method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="6">
                                        <h5 class="text-center">No members found.</h5>
                                    </td>
                                </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            {{ $members->links() }}
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
