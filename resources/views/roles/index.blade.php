@extends('layouts.app')

@section('header', 'Roles')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <div class="box-content card danger">
        <!-- /.box-title -->
        <div class="" style="padding: 12px 10px 12px 10px; display: flex; justify-content: space-between; background-color: #03ACF0; color:white;">
            <div class="">
                <h4 class="">Role Managment </h4>
            </div>
            <div class="">
                @can('role-create')
                    <a href="{{ route('roles.create') }}" class="btn btnback btn-sm" style="background-color: #002E6E; color:white;">ADD</a>
                    <!-- /.sub-menu -->
                @endcan
            </div>
        </div>
        <!-- /.dropdown js__dropdown -->
        <div class="card-content">

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th width="280px">Action</th>
                </tr>
                {{ $roles }}
                @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('roles.show', $role->id) }}">Show</a>
                            <a class="btn btn-sm btn-primary" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                            @can('role-edit')
                            @endcan
                            @if ($role->name != 'Admin')
                                @can('role-delete')
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                @endcan
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>


        </div>
        <!-- /.card-content -->
    </div>


@endsection
