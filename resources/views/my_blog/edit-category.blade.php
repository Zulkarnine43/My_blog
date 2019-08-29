@extends('admin.master');

@section('title')
    register

@endsection


@section('body')


    <!--banner-->

    <!--content-->
    <div class="content">
        <!--login-->
        <div class="login">
            <div class="main-agileits">
                <div class="form-w3agile form1">
                    <h3>Register</h3>

                    <!--<form action="{{route('update',['id'=>$regis->id)}}]" method="POST">*/-->

                    <form action="{{route('up')}}" method="POST">
                        <div class="key">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <input  type="text"  name="Username" value = "{{ $regis->Username }}" >
                            <input  type="hidden"  name="id" value = "{{ $regis->id }}" >
                            <div class="clearfix"></div>
                        </div>
                        <div class="key">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <input  type="text"  name="email" value = "{{ $regis->email }}">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input  type="password"  name="Password" value = "{{ $regis->Password }}">
                            <div class="clearfix"></div>
                        </div>
                        <div class="key">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            <input  type="password"  name="ConfirmPassword" value = "{{ $regis->ConfirmPassword }}">
                            <div class="clearfix"></div>
                        </div>
                        <input type="submit" name="btn" value="Update">
                    </form>
                </div>

            </div>
        </div>
        <!--login-->
    </div>
@endsection