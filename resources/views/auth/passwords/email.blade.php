

@extends('layouts.web')

@section('title', 'Password Reset')
@section('description', '')
@section('canonical', config('app.url') . Request::path())
@section('noindex')
@endsection
@section('links')
    <script async src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')
    <div class="container mx-auto lg:px-4 py-6">
        <div class="flex flex-col space-y-4   my-2 md:my-0 lg:flex-row lg:mx-4">
          {{-- @include('partials.frontend.auth-form-view') --}}
            <div class="panel w-full sm:w-[70%] lg:w-[35%] mx-auto py-5 ">
               <div class="my-auto ">
                @if (session('status'))
                    <div class="bg-green-500 text-white py-2 text-center my-4 font-bold rounded-lg" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="rounded py-2 bg-red-100 text-red-600 padding-12 text-center my-4" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('password.email') }}" method="POST" class="border-4 border-primary shadow-md rounded-lg px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full my-auto ">
                    @csrf
                       <div class="bg-primary-one py-2 rounded-t-lg text-primary">
                        <p class="text-3xl text-center  font-semibold">
                            Send Reset Link
                        </p>
                    </div>
                    <div class="mb-1">
                        <input id="email" type="email"
                            class="form-input @error('email') error-field @enderror" required
                            autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" name="email"
                            value="{{ old('email', null) }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red-400">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- Google Recaptcha -->
                    <div class="w-full">
                        <div class="g-recaptcha my-2" data-sitekey={{config('services.recaptcha.key')}}></div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-flat text-white">
                        {{ trans('Send Password Reset Link') }}
                    </button>


                </form>
               </div>

            </div>
        </div>
    </div>
@endsection


