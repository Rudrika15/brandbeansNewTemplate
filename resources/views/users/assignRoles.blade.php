@extends('layouts.app')

@section('header', 'User')
@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif




    <div class="box-content card">
        <!-- /.box-title -->
        <div class="" style="padding: 12px 10px 12px 10px; display: flex; justify-content: space-between; background-color: #03ACF0; color:white;">
            <div class="">
                <h4 class="">User List</h4>
            </div>
            <div class="">
                {{-- <a href="{{ route('users.index') }}" class="btn btnback btn-sm" style="background-color: #002E6E; color:white;">BACK</a> --}}
                <!-- /.sub-menu -->
            </div>
        </div>
        <!-- /.dropdown js__dropdown -->
        <div class="card-content">

            <div class="table-responsive">
                <table class="table table-primary">
                    <div class="">
                        <form action="{{ route('users.assignRole') }}" method="GET">
                            <div class="row" style="padding-bottom:20px ">
                                <div class="col-md-4 " style="padding-top:10px ">
                                    <select name="roleSearch" class="form-control" id="">
                                        <option disabled selected>--Search Role wise--</option>

                                        @foreach ($userRoles as $item)
                                            <option>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4 " style="padding-top:10px ">
                                    <input type="text" name="userName" placeholder="Search by User Name" class="form-control">
                                </div>
                                <div class="col-md-4 " style="padding-top:10px ">
                                    <input type="text" name="userEmail" placeholder="Search by User Email" class="form-control">
                                </div>
                                <div class="col-md-4 " style="padding-top:10px ">
                                    <input type="text" name="mobileNumber" placeholder="Search by User Mobile Number" class="form-control">
                                </div>
                                <div class="col-md-4 " style="padding-top:10px ">
                                    <select name="package" class="form-control" id="">
                                        <option disabled selected>--Search Package wise--</option>
                                        <option value="Free">Free</option>
                                        <option value="Silver">Silver</option>
                                    </select>
                                </div>
                                <div class="col-md-4 " style="padding-top:10px ">
                                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                                    <a href="{{ route('users.assignRole') }}" class="btn btn-sm btn-secondary">Reset</a>
                                </div>
                            </div>

                        </form>
                    </div>
                    <thead>
                        <tr>
                            <th scope="col">Action</th>
                            <th scope="col">Roles</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile Number</th>
                            <th scope="col">Package</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                            <tr class="">
                                <td scope="row"><a class="btn btn-violet btn-xs" href="{{ route('users.assignRoleCreate', $user->id) }}">Assign Role</a></td>
                                <td>
                                    @if (!empty($user->getRoleNames()))
                                        @foreach ($user->getRoleNames() as $v)
                                            <label class="badge badge-success" style="color: black">{{ $v }}</label>
                                        @endforeach
                                    @endif
                                </td>
                                <td scope="row">{{ $user->name }}</td>
                                <td scope="row">{{ $user->email }}</td>
                                <td scope="row">{{ $user->mobileno }}</td>
                                <td scope="row">{{ $user->package }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>


            {{ $users->links() }}

        </div>
        <!-- /.card-content -->
    </div>



@endsection
