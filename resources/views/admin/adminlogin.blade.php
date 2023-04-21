@extends('admin.main')

@section('content')
    
    <body class="login-page">
        <div
            class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
        >
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-7">
                        <img src="{{asset('assets/images/login-page-img.png')}}" alt="" />
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="login-box bg-white box-shadow border-radius-10">
                            <div class="login-title">
                                <h2 class="text-center text-primary">Login To DeskApp</h2>
                            </div>
                            @if(Session::has('message'))
                                           <div class="alert alert-danger" role="alert">
                                                <strong>{{Session::get('message')}}</strong>
                                            </div>
                                       @endif



                            <form method="POST" action="{{ route('admin-login') }}">
                                @csrf
                                <!--div class="select-role">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn active">
                                            <input type="radio" name="options" id="admin" />
                                            <div class="icon">
                                                <img
                                                    src="{{asset('assets/images/briefcase.svg')}}"
                                                    class="svg"
                                                    alt=""
                                                />
                                            </div>
                                            <span>I'm</span>
                                            Manager
                                        </label>
                                        <label class="btn">
                                            <input type="radio" name="options" id="user" />
                                            <div class="icon">
                                                <img
                                                    src="{{asset('assets/images/person.svg')}}"
                                                    class="svg"
                                                    alt=""
                                                />
                                            </div>
                                            <span>I'm</span>
                                            Employee
                                        </label>
                                    </div>
                                </div-->
                                <div class="input-group custom">
                                    <input
                                        type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                        placeholder="Username" autocomplete="email" autofocus
                                    />
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"
                                            ><i class="icon-copy dw dw-user1"></i
                                        ></span>
                                    </div>
                                   
                                       
                                   
                                    @error('email')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-group custom">
                                    <input
                                        type="password"
                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                        placeholder="**********"
                                    name="password" autocomplete="current-password"/>
                                    <div class="input-group-append custom">
                                        <span class="input-group-text"
                                            ><i class="dw dw-padlock1"></i
                                        ></span>
                                    </div>
                                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="row pb-30">
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox">
                                            <input
                                                type="checkbox"
                                                class="custom-control-input"
                                                id="customCheck1"
                                            />
                                            <label class="custom-control-label" for="customCheck1"
                                                >Remember</label
                                            >
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="forgot-password">
                                            <a href="forgot-password">Forgot Password</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="input-group mb-0">
                                            <!--
                                            use code for form submit
                                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                                        -->
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                        <div
                                            class="font-16 weight-600 pt-10 pb-10 text-center"
                                            data-color="#707373"
                                        >
                                            OR
                                        </div>
                                        <div class="input-group mb-0">

                                                If You have no accouct.Please contact with Manager Department.They will provide email and your password.
                                                Thanks for Support!
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
@endsection
