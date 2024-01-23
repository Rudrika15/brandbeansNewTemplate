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
                <h4 class="">Assign Roles</h4>
            </div>
            <div class="">
                <a href="{{ route('users.assignRole') }}" class="btn btnback btn-sm" style="background-color: #002E6E; color:white;">BACK</a>
                <!-- /.sub-menu -->
            </div>
        </div>
        <!-- /.dropdown js__dropdown -->
        <div class="card-content">

            <div class="table-responsive">

                <form action="{{ route('users.assignRoleCreateCode') }}" method="post">

                    @csrf
                    {{-- {{ $user }} --}}
                    <input type="hidden" name="userId" value="{{ $user->id }}">
                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" readonly id="" />


                    <div class="mb-3">
                        <label for="" class="form-label">Roles</label>
                        {!! Form::select('roles[]', $roles, $userRole, ['class' => 'form-control', 'multiple']) !!}
                        <small id="helpId" class="form-text text-muted">Use CTRL+Click for select multiple roles</small>
                    </div>

                    <div class="mb-3" style="align-content: ">
                        <button type="submit" style="background-color: #002E6E; color:white;" class="btn btnback btn-sm">Submit</button>
                    </div>
                </form>
            </div>




        </div>
        <!-- /.card-content -->
    </div>



@endsection
