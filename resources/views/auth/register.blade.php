@extends('layouts.app')

@php
$phoneData = json_decode(file_get_contents('http://country.io/phone.json'), true);
$namesData = json_decode(file_get_contents('http://country.io/names.json'), true);
ksort($phoneData);
asort($namesData);
@endphp

@section('content')
<div class="container">
    <div class="row align-items-center justify-content-between full-height-app py-5">
        <div class="col-lg-6">
            @if (count($errors->all()) > 0)
                <div class="alert alert-danger">
                    <ul class="pb-0 mb-0">
                        @foreach ($errors->all() as $message)
                        <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1 class="text-center text-montserrat font-weight-bold mb-3 text-green">Sign Up</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">
                    @component('components.ui.form-group', ['id' => 'first-name', 'type' => 'text', 'required' => 'required', 'class' => 'col-6 pr-1', 'icon' => 'fas fa-user', 'name' => 'first_name', 'placeholder' => 'First Name']) value="{{ old('first_name') }}" @endcomponent
                    @component('components.ui.form-group', ['id' => 'last-name', 'type' => 'text', 'required' => 'required', 'class' => 'col-6 pl-1', 'icon' => 'fas fa-user', 'name' => 'last_name', 'placeholder' => 'Last Name']) value="{{ old('last_name') }}" @endcomponent
                    <div class="form-group col-4 pr-1">
                        <select id="country" name="country" class="form-control border-0 bg-black-10 h-100">
                            <option>Select your country</option>
                            @foreach ($namesData as $key => $value)
                            <option value="{{ $phoneData[$key] }}" country="{{ $key }}" @if (old('country') === $phoneData[$key]) selected @endif>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="country_code" id="country-code" value="{{ old('country_code') }}" required>
                    <div class="form-group col-8 pl-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text border-0 rounded-0 bg-black-10">
                                    <label for="phone" class="m-0"><i class="fas fa-phone fa-fw"></i></label>
                                </div>
                            </div>
                            <div class="input-group-prepend">
                                <input type="text" id="code" name="code" class="input-group-text border-0 rounded-0 bg-black-10" value="{{ old('code') }}" style="width: 4rem;" placeholder="Code" readonly required>
                            </div>
                            <input id="phone" type="tel" class="form-control text-fa border-0 bg-black-10 py-4 px-3 @error('phone') border is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="{{ __('Phone Number') }}" required autocomplete="phone">
                        </div>

                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @component('components.ui.form-group', ['id' => 'email', 'type' => 'email', 'required' => 'required', 'class' => 'col-6 pr-1', 'icon' => 'fas fa-at', 'name' => 'email', 'placeholder' => 'E-Mail Address']) value="{{ old('email') }}" @endcomponent
                    @component('components.ui.form-group', ['id' => 'sponsor', 'type' => 'text', 'class' => 'col-6 pl-1', 'icon' => 'fas fa-user-friends', 'name' => 'sponsor', 'placeholder' => 'Sponsor ID']) @if (Request::query('ref')) readonly value="{{ Request::query('ref') }}" @else value="{{ old('sponsor') }}" @endif @endcomponent
                    @component('components.ui.form-group', ['id' => 'password', 'type' => 'password', 'required' => 'required', 'class' => 'col-6 pr-1', 'icon' => 'fas fa-key', 'name' => 'password', 'placeholder' => 'Password']) value="{{ old('password') }}" @endcomponent
                    @component('components.ui.form-group', ['id' => 'password-confirmation', 'type' => 'password', 'required' => 'required', 'class' => 'col-6 pl-1', 'icon' => 'fas fa-lock', 'name' => 'password_confirmation', 'placeholder' => 'Confirm Password']) value="{{ old('password_confirmation') }}" @endcomponent

                    <div class="form-group col-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="terms" id="terms" {{ old('terms') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="terms">{{ __('I have read and accepted Privacy policy and Terms and Conditions') }}</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="password alert alert-danger">
                            <div class="row">
                                <div id="uppercase" class="text-purered col-sm-6"><i class="fas fa-times-circle text-x-small"></i> An uppercase letter</div>
                                <div id="lowercase" class="text-purered col-sm-6"><i class="fas fa-times-circle text-x-small"></i> A lowercase letter</div>
                                <div id="number" class="text-purered col-sm-6"><i class="fas fa-times-circle text-x-small"></i> A number</div>
                                <div id="special" class="text-purered col-sm-6"><i class="fas fa-times-circle text-x-small"></i> A special character</div>
                                <div id="minimum" class="text-purered col-sm-6"><i class="fas fa-times-circle text-x-small"></i> At least 8 characters</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="form-group col-6">
                                <button type="submit" class="btn btn-green btn-block py-3 font-weight-bold">
                                    {{ __('Register') }}
                                    <i class="fas fa-fw fa-user-plus mr-3"></i>
                                </button>
                            </div>

                            <div class="form-group col-6">
                                @if (Route::has('login'))
                                    <a class="text-green" href="{{ route('login') }}">
                                        {{ __('I already have an account.') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <div class="col-lg-6 order-first order-lg-2">
            <div class="position-relative">
                <img src="{{ asset('images/Groupe 196.png') }}" alt="First pic sign in" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(function () {
        $('#country').change(function () {
            const current = $(this);
            const value = current.val();
            const country = current.find('option:selected').attr('country');
            $('#code').val(value);
            $('#country-code').val(country);
            console.log(country);
        });
        $('#password').keyup(function () {
            const current = $(this);
            const value = current.val();

            const uppercaseRegex = /[A-Z]/g;
            const lowercaseRegex = /[a-z]/g;
            const numberRegex = /[0-9]/g;
            const specialRegex = /[!@#\$%\^\&*\)\(+=._-]/g;

            const uppercase = $('#uppercase');
            const lowercase = $('#lowercase');
            const number = $('#number');
            const special = $('#special');
            const minimum = $('#minimum');

            const passwordBlock = $('.password.alert');

            const uppercaseTest = uppercaseRegex.test(value);
            const lowercaseTest = lowercaseRegex.test(value);
            const numberTest = numberRegex.test(value);
            const specialTest = specialRegex.test(value);
            const minimumTest = value.length > 7;

            if (uppercaseTest && lowercaseTest && numberTest && specialTest && minimumTest) passwordBlock.removeClass('alert-danger').addClass('alert-success');
            else passwordBlock.removeClass('alert-success').addClass('alert-danger');

            if (uppercaseTest) uppercase.removeClass('text-purered').addClass('text-green').find('.fas').removeClass('fa-times-circle').addClass('fa-check-circle');
            else uppercase.addClass('text-purered').removeClass('text-green').find('.fas').addClass('fa-times-circle').removeClass('fa-check-circle');

            if (lowercaseTest) lowercase.removeClass('text-purered').addClass('text-green').find('.fas').removeClass('fa-times-circle').addClass('fa-check-circle');
            else lowercase.addClass('text-purered').removeClass('text-green').find('.fas').addClass('fa-times-circle').removeClass('fa-check-circle');

            if (numberTest) number.removeClass('text-purered').addClass('text-green').find('.fas').removeClass('fa-times-circle').addClass('fa-check-circle');
            else number.addClass('text-purered').removeClass('text-green').find('.fas').addClass('fa-times-circle').removeClass('fa-check-circle');

            if (specialTest) special.removeClass('text-purered').addClass('text-green').find('.fas').removeClass('fa-times-circle').addClass('fa-check-circle');
            else special.addClass('text-purered').removeClass('text-green').find('.fas').addClass('fa-times-circle').removeClass('fa-check-circle');

            if (minimumTest) minimum.removeClass('text-purered').addClass('text-green').find('.fas').removeClass('fa-times-circle').addClass('fa-check-circle');
            else minimum.addClass('text-purered').removeClass('text-green').find('.fas').addClass('fa-times-circle').removeClass('fa-check-circle');
        });
    });
</script>
@endsection
