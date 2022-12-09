@extends('buyer.master')
@section('content')
    <title>قیمت میلگرد امروز| شرکت آسن</title>
    <meta name="description"
          content="قیمت آهن آلات: مشاهده قیمت و خرید میلگرد و آهن آلات "/>
    <meta property="og:title" content="قیمت میلگرد امروز؛ اطلاع از قیمت روز آهن آلات + خرید میلگرد| آسن"/>
    <meta property="og:description"
          content="قیمت آهن آلات: مشاهده قیمت و خرید میلگرد و آهن آلات "/>

    <meta name="keywords" content="آسن, assen, قیمت آهن,قیمت روز میلگرد,میلگرد,کمترین قیمت آهن,قیمت میلگرد,قیت تیرآهن,قیمت ورق آهنی,قیمت فلزات,بازار آهن,شرکت آسن">
    <!-- Middle Column -->
    <div class="w3-col m7">

        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <h4>{{__('buyer/public.profile_edit')}}</h4><br>
            <hr class="w3-clear">
            <div class="w3-col m12">

                <div class="w3-container w3-padding">
                    <form action="{{ route('buyer.profile.save') }}" method="post">
                        @csrf
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group m-4">
                            <label for="phone">{{__('buyer/public.phone')}} : </label>
                            <input type="text" class="form-control" name="phone" id="phone"
                                   value="{{$user->phone}}" disabled>
                        </div>

                        <div class="form-group m-4">
                            <label for="name">{{__('buyer/public.name')}} : </label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}"
                                   placeholder="نام خود را وارد کنید ...">
                        </div>
                        <div class="form-group m-4">
                            <label for="family">{{__('buyer/public.family')}} : </label>
                            <input type="text" class="form-control" name="family" id="family"
                                   value="{{$user->family}}" placeholder="نام خانوادگی خود را وارد کنیید ...">
                        </div>
                        <div class="form-group m-4">
                            <label for="email">{{__('buyer/public.email')}} : </label>
                            <input type="email" class="form-control" name="email" id="email"
                                   value="{{$user->email}}" placeholder="ایمیل خود را وارد کنیید ...">
                        </div>
                        <button type="submit" class="btn btn-primary">{{__('buyer/public.save_edit')}}</button>
                    </form>
                </div>

            </div>
        </div>

@endsection