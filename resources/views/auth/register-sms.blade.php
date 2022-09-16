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
                        <h2>{{__('web/public.register')}} </h2>
                        <p>{{__('web/messages.register_1')}} <a href="{{ route('login') }}"> {{__('web/messages.register_2')}} </a> {{__('web/messages.register_3')}}</p>
                        <form class="form-horizontal" method="POST" action="{{ route('register.sms') }}">
                            @csrf
                            <h4>{{__('web/public.register_user_info')}}</h4>
                            @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {{--<div class="group-in">--}}
                                {{--<label for="input-firstname" >{{__('web/public.name')}}</label>--}}
                                    {{--<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

                                    {{--@error('name')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@enderror--}}
                            {{--</div>--}}
                            {{--<div class="group-in">--}}
                                {{--<label for="input-firstname" >{{__('web/public.family')}}</label>--}}

                                    {{--<input id="family" type="text" class="form-control @error('family') is-invalid @enderror" name="family" value="{{ old('family') }}" required autocomplete="family" autofocus>--}}

                                    {{--@error('family')--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $message }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@enderror--}}

                            {{--</div>--}}

                            <div class="group-in">
                                <label for="input-telephone" >{{__('web/public.phone')}}</label>

                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>

                            <legend>{{__('web/public.register_user_password')}}</legend>
                            <div class="group-in">
                                <label for="input-password" >{{__('web/public.password')}}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="group-in">
                                <label for="input-confirm" >{{__('web/public.re_password')}}</label>

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            </div>

                            <button type="submit" >
                                {{__('web/public.register')}}
                            </button>



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







@endsection
