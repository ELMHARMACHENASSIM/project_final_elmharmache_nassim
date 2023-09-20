@extends('layouts.index')
@section('content')
        <!-- breadcrumb start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item">
                                <h2>Login</h2>
                                <p>Home <span>-</span> Tracking Order</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb start-->
    
        <!--================login_part Area =================-->
        <section class="login_part padding_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_text text-center">
                            <div class="login_part_text_iner">
                                <h2>New to our Shop?</h2>
                                <p>There are advances being made in science and technology
                                    everyday, and a good example of this is the</p>
                                <a href="{{route('reguser.index')}}" class="btn_3">Create an Account</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3>Welcome Back ! <br>
                                    Please Sign in now</h3>
                                <form class="row contact_form" action="{{ route('login') }}" method="post" novalidate="novalidate">
                                    @csrf
                                    <div class="col-md-12 form-group p_star">
                                        <input type="email" class="form-control" id="email" name="email" :value="__('Email')" 
                                            placeholder="email">
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="password" name="password" :value="__('Password')"
                                            placeholder="Password">
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                    </div>
                                    <div class="col-md-12 form-group">
                                        <div class="creat_account d-flex align-items-center">
                                            <input type="checkbox" id="remember_me" name="selector">
                                            <label for="f-option">Remember me</label>
                                        </div>
                                        <button type="submit" value="submit" class="btn_3">
                                            log in
                                        </button>
                                        <div>
                                            @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>

                                        @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================login_part end =================-->
@endsection