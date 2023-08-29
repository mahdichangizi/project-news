{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    @include('auth.layout.head-tag')
    <title>Password Reset</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vazir-font/dist/font-face.css">
</head>

<body>

<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="{{ asset('auth/assets/images/img-01.png') }}" alt="IMG">
                </div>

                <form method="post" action="{{ route('password.store') }}" class="login100-form validate-form">
                    @csrf


        <input type="hidden" name="token" value="{{ $request->route('token') }}">


                    <span class="login100-form-title">
                        Password Reset
                    </span>



                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email" value="{{ $request->email }}">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('email')
                    <div class="alert alert-danger" role="alert" dir="rtl" style="border-radius: 25px;">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="float: left;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror



                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('password')
                    <div class="alert alert-danger" role="alert" dir="rtl" style="border-radius: 25px;">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="float: left;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror


                    <div class="wrap-input100 validate-input" data-validate="password_confirmation is required">
                        <input class="input100" type="password" name="password_confirmation" placeholder="password_confirmation">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    @error('password_confirmation')
                    <div class="alert alert-danger" role="alert" dir="rtl" style="border-radius: 25px;">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="float: left;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @enderror


                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Send Email
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>

    @include('auth.layout.script')
</body>

</html>



