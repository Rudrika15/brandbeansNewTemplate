@extends('layouts.app')

@section('header', 'User')
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
                <h4 class="">User</h4>
            </div>
            <div class="">
                <a href="{{ route('users.create') }}" class="btn btnback btn-sm" style="background-color: #002E6E; color:white;">ADD</a>
                <!-- /.sub-menu -->
            </div>
        </div>
        <!-- /.dropdown js__dropdown -->
        <div class="card-content">

            <div class="text-end" style="padding: 10px;">
                <form action="{{ route('users.index') }}" method="GET">
                    <div class="row">
                        <div class="col-md-4">
                            <select name="roleSearch" class="form-control" id="">
                                <option disabled selected>--Search Role wise--</option>

                                @foreach ($userRoles as $item)
                                    <option>{{ $item->name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div style="padding-top: 5px">
                        <button type="submit" class="btn btn-sm btn-violet">Submit</button>
                        <a href="{{ route('users.index') }}" class="btn btn-sm btn-secondary">Reset</a>
                    </div>
                </form>
            </div>
            <div class="table-responsive">
                <table id="" class="table table-bordered">
                    <thead>
                        <tr>
                            <?php
                            $i = 1;
                            ?>
                            <th> Sr No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Roles</th>
                            <th width="30%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $user)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->mobileno }}</td>
                                <td>
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $v)
                                            <label class="badge badge-success" style="color: black">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td>
                                    <!-- <a class="btn btn-info btn-sm" href="{{ route('users.show', $user->id) }}">Show</a> -->
                                    {{-- <a class="btn btn-primary btn-sm" href="{{ route('users.edit', $user->id) }}">Edit</a> --}}
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                    <a class="btn btn-info btn-sm" href="{{ route('accountpost.show', $user->id) }}">Details</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $data->links() }}
        </div>
        <!-- /.card-content -->
    </div>

@endsection
