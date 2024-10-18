@extends('admin.layout')
@section('page_content')

<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>All Users<small>(registered)</small></h2>
                    <div class="nav navbar-right panel_toolbox">
                        <a href="{{route('admin.adduser')}}">
                            <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Add User">
                                Add User
                            </button>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th>View User</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @if ($allusers->isEmpty())
                                        <tr>
                                            <td colspan="7" class="text-center">No data available</td>
                                        </tr>
                                        @else
                                        @foreach ($allusers as $user)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $user->name ?? 'Not Available'}}</td>
                                            <td>{{ $user->email ?? 'Not Available' }}</< /td>
                                            <td>{{ $user->state ?? 'Not Available' }}</< /td>
                                            <td>{{ $user->city ?? 'Not Available' }}</< /td>
                                            <td>{{ $user->status ? 'Active' : 'In-active' }}</< /td>
                                            <td>
                                                <a href="">
                                                    <button data-toggle="tooltip" data-placement="top"
                                                        title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="">
                                                    <button type="button"
                                                        class="btn btn-primary">view</button></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection