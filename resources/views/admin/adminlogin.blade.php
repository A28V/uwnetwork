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
        <!-- welcome modal start -->
        <div class="welcome-modal">
            <button class="welcome-modal-close">
                <i class="bi bi-x-lg"></i>
            </button>
            <iframe
                class="w-100 border-0"
                src="https://embed.lottiefiles.com/animation/31548"
            ></iframe>
            <div class="text-center">
                <h3 class="h5 weight-500 text-center mb-2">
                    Open source
                    <span role="img" aria-label="gratitude">❤️</span>
                </h3>
                <div class="pb-2">
                    <a
                        class="github-button"
                        href="https://github.com/dropways/deskapp"
                        data-color-scheme="no-preference: dark; light: light; dark: light;"
                        data-icon="octicon-star"
                        data-size="large"
                        data-show-count="true"
                        aria-label="Star dropways/deskapp dashboard on GitHub"
                        >Star</a
                    >
                    <a
                        class="github-button"
                        href="https://github.com/dropways/deskapp/fork"
                        data-color-scheme="no-preference: dark; light: light; dark: light;"
                        data-icon="octicon-repo-forked"
                        data-size="large"
                        data-show-count="true"
                        aria-label="Fork dropways/deskapp dashboard on GitHub"
                        >Fork</a
                    >
                </div>
            </div>
            <div class="text-center mb-1">
                <div>
                    <a
                        href="https://github.com/dropways/deskapp"
                        target="_blank"
                        class="btn btn-light btn-block btn-sm"
                    >
                        <span class="text-danger weight-600">STAR US</span>
                        <span class="weight-600">ON GITHUB</span>
                        <i class="fa fa-github"></i>
                    </a>
                </div>
                <script
                    async
                    defer="defer"
                    src="https://buttons.github.io/buttons.js"
                ></script>
            </div>
            <a
                href="https://github.com/dropways/deskapp"
                target="_blank"
                class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
            >
                DOWNLOAD
                <i class="fa fa-download"></i>
            </a>
            <p class="font-14 text-center mb-1 d-none d-md-block">
                Available in the following technologies:
            </p>
            <div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
                <i class="fa fa-html5"></i>
            </div>
        </div>
        <button class="welcome-modal-btn">
            <i class="fa fa-download"></i> Download
        </button>
        <!-- welcome modal end -->
        <!-- js -->
        <script src="{{asset('assets/scripts/core.js')}}"></script>
        <script src="{{asset('assets/scripts/script.min.js')}}"></script>
        <script src="{{asset('assets/scripts/process.js')}}"></script>
        <script src="{{asset('assets/scripts/layout-settings.js')}}"></script>
        <!-- Google Tag Manager (noscript) -->
        <noscript
            ><iframe
                src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
                height="0"
                width="0"
                style="display: none; visibility: hidden"
            ></iframe
        ></noscript>
        <!-- End Google Tag Manager (noscript) -->
    </body>
@endsection
