@extends('web.master')
@section('content')
    <section class="padding-top-index">
    </section>
    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form">
                        <h2>{{ __('web/public.login') }} </h2>
                        <form method="POST" action="{{ route('login.sms') }}">
                            @csrf
                            <div class="group-in">
                                <label for="phone">{{ __('web/public.phone') }} :</label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                       name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                <span>{{ __('web/public.user_name_help') }}</span>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="group-in">
                                <label for="password">{{ __('web/public.password') }}
                                    : </label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">
                                    {{--<span>{{ __('web/public.password_help') }}</span>--}}
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            {{--<div class="">--}}
                                {{--<input class="form-check-input" type="checkbox" name="remember"--}}
                                       {{--id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

                                {{--<label class="form-check-label" for="remember">--}}
                                    {{--{{ __('web/public.remember_me') }}--}}
                                {{--</label>--}}
                            {{--</div>--}}


                                <button type="submit" >
                                    {{ __('web/public.btn_login') }}
                                </button>
                            <br>

                                <a class="btn btn-link" href="{{ route('password.request.sms') }}">
                                    {{ __('web/public.forgot_yor_password') }}
                                </a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2>{{__('web/public.contact_us')}}</h2>

                        <div class="ci-address">
                            <h5></h5>
                            <ul>
                                <li><i class="fa fa-envelope"></i> {{\App\Providers\MyProvider::_text($siteDetailsProvider["email"]->value)}}</li>
                                <li><i class="fa fa-copy"></i> <a href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["mobile"]->value)}}" class="call-phone">{{\App\Providers\MyProvider::_text($siteDetailsProvider["mobile"]->value)}}</a></li>
                                <li><i class="fa fa-thumb-tack"></i> {{\App\Providers\MyProvider::_text($siteDetailsProvider["address"]->value)}}</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->



            @endsection


