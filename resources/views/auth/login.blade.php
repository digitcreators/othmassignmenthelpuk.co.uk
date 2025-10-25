@extends('layouts.web')

@section('title', 'Login')
@section('description', '')
@section('canonical', config('app.url') . Request::path())
@section('noindex')
@endsection
@section('content')
</div>

    <div class="px-5 container mx-auto lg:px-4 py-6">
        <div class="flex flex-col space-y-4 my-2 md:my-0 lg:flex-row lg:mx-4">

            <div class="panel w-full sm:w-[70%] lg:w-[35%] mx-auto ">
                <form action="{{ route('login') }}" method="POST"
                    class="border-4 border-primary shadow-md rounded-lg px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-2  ">
                    @csrf
                    <div class="bg-primary-one py-2 px-5 rounded-t-lg">
                        <p class="text-3xl text-center text-primary font-semibold">
                            {{ trans('global.login') }}
                        </p>
                    </div>
                    @if (session('success'))
                        <div class="mt-3 bg-[#8feede] border-t-4 border-primary-one rounded text-teal-900 text-sm shadow-md"
                            role="alert">
                            <div class="py-2">
                                <p class="text-center font-bold">{{ session('success') }}</p>
                            </div>
                        </div>
                    @elseif (session('error'))
                        <div class="mt-3 bg-white border-t-4 border-red-500 rounded  shadow-md" role="alert">
                            <div class="py-2">
                                <p class="text-center text-red-500  font-bold">{{ session('error') }}</p>
                            </div>
                        </div>
                    @endif
                    <div class="mb-2">
                        <input id="email" type="email" class="form-input @error('email') error-field @enderror"
                            required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}"
                            name="email" value="{{ old('email', null) }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red-400">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="">
                        <input id="password" type="password" class="form-input @error('password') error-field @enderror"
                            required autocomplete="password" autofocus placeholder="{{ trans('global.login_password') }}"
                            name="password" value="{{ old('password', null) }}">
                        @error('password')
                            <div class="invalid-feedback text-white">Please enter your password!</div>
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember" class="text-black">{{ trans('global.remember_me') }}</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn-primary text-white">
                        {{ trans('global.login') }}
                    </button>

                    <p class="text-center">
                        <span class="px-2 text-black">or continue with</span>
                    </p>

                    <div class="flex w-full space-x-1 mx-auto justify-center">
                        <a href="{{ route('register') }}"
                            class="py-3 w-1/2 btn-primary flex justify-center items-center space-x-2">
                            <i class="fa fa-user text-white" ></i>
                            <span class="text-white">
                                Register
                            </span>
                        </a>

                    </div>
                </form>
                @if (Route::has('password.request'))
                    <a class="mt-2 font-bold  float-right text-black" href="{{ route('password.request') }}">
                        {{ trans('global.forgot_password') }}
                    </a>
                @endif
            </div>
        </div>
    </div>
@endsection
