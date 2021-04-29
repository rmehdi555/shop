@extends('web.master')
@section('content')

    <div id="container">
        <div class="container">
            <!-- Breadcrumb Start-->
        {{--<ul class="breadcrumb">--}}
        {{--<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.html" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>--}}
        {{--<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="category.html" itemprop="url"><span itemprop="title">الکترونیکی</span></a></li>--}}
        {{--<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="product.html" itemprop="url"><span itemprop="title">لپ تاپ ایلین ور</span></a></li>--}}
        {{--</ul>--}}
        <!-- Breadcrumb End-->
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-9">
                    <form method="POST" action="{{ route('login.sms') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="phone"
                                   class="col-md-4 col-form-label text-md-right">{{ __('web/public.phone') }} : </label>

                            <div class="col-md-10">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                       name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                <span>{{ __('web/public.user_name_help') }}</span>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('web/public.password') }}
                                : </label>

                            <div class="col-md-10">
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
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember"
                                           id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('web/public.remember_me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('web/public.btn_login') }}
                                </button>


                                    <a class="btn btn-link" href="{{ route('password.request.sms') }}">
                                        {{ __('web/public.forgot_yor_password') }}
                                    </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--Middle Part End -->






            @endsection


