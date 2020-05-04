@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card">
                <div class="card-header">
                <p class="card-header-title">{{ __('Login') }}</p>
                </div>

                <div class="card-content">
                <div class="content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="field">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                            <div class="control">
                                <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="help is-danger" role="alert">{{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label for="password" class="label">{{ __('Password') }}</label>

                            <div class="control">
                                <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="help is-danger" role="alert">{{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field">
                            <div class="control">
                                <label class="checkbox" for="remember">
                                    <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="field is-grouped">
                            <div class="control">
                                <button type="submit" class="button is-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                                @if (Route::has('password.request'))
                                <div class="control">
                                    <a class="button is-danger" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                                @endif
                        </div>
                    </form>
                    </div>
                </div>
            </div>
</div>
@endsection
