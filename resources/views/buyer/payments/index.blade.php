@extends('buyer.master')
@section('content')
    <title>قیمت میلگرد امروز| آسن</title>
    <meta name="description"
          content="قیمت آهن آلات: مشاهده قیمت و خرید میلگرد و آهن آلات "/>
    <meta property="og:title" content="قیمت میلگرد امروز؛ اطلاع از قیمت روز آهن آلات + خرید میلگرد| آسن"/>
    <meta property="og:description"
          content="قیمت آهن آلات: مشاهده قیمت و خرید میلگرد و آهن آلات "/>

    <meta name="keywords" content="آسن, assen, قیمت آهن,قیمت روز میلگرد,میلگرد,کمترین قیمت آهن,قیمت میلگرد,قیت تیرآهن,قیمت ورق آهنی,قیمت فلزات,بازار آهن,شرکت آسن">
    <!-- Middle Column -->
    <div class="w3-col m7">

        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <h4>{{__('buyer/public.payments_list')}}</h4><br>
            <hr class="w3-clear">
            {{--<div class="w3-col m12">--}}
                {{--<div class="w3-container w3-padding">--}}
                    {{--<form action="{{ route('buyer.payments.store') }}" method="post">--}}
                        {{--@csrf--}}
                        {{--@if(count($errors) > 0)--}}
                            {{--<div class="alert alert-danger">--}}
                                {{--<ul>--}}
                                    {{--@foreach($errors->all() as $error)--}}
                                        {{--<li>{{ $error }}</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--@endif--}}
                        {{--<div class="form-group m-4">--}}
                            {{--<label for="phone">شماره همراه : </label>--}}
                            {{--<input type="text" class="form-control" name="phone" id="phone"--}}
                                   {{--value="{{$user->phone}}" disabled>--}}
                        {{--</div>--}}

                        {{--<div class="form-group m-4">--}}
                            {{--<label for="name">نام : </label>--}}
                            {{--<input type="text" class="form-control" name="name" id="name" value="{{$user->name}}"--}}
                                   {{--placeholder="نام خود را وارد کنید ...">--}}
                        {{--</div>--}}
                        {{--<div class="form-group m-4">--}}
                            {{--<label for="family">نام خانوادگی : </label>--}}
                            {{--<input type="text" class="form-control" name="family" id="family"--}}
                                   {{--value="{{$user->family}}" placeholder="نام خانوادگی خود را وارد کنیید ...">--}}
                        {{--</div>--}}
                        {{--<div class="form-group m-4">--}}
                            {{--<label for="email">ایمیل : </label>--}}
                            {{--<input type="email" class="form-control" name="email" id="email"--}}
                                   {{--value="{{$user->email}}" placeholder="ایمیل خود را وارد کنیید ...">--}}
                        {{--</div>--}}
                        {{--<button type="submit" class="btn btn-primary">ذخیره تغییرات</button>--}}
                    {{--</form>--}}
                {{--</div>--}}

                <table class="table table-striped table-responsive-stack" id="tableOne">
                    <thead>
                    <tr>
                        <th>{{__('buyer/public.id')}}</th>
                        <th>{{__('buyer/public.create_at')}}</th>
                        <th>{{__('buyer/public.price')}}</th>
                        <th>{{__('buyer/public.payment_type')}}</th>
                        <th>{{__('buyer/public.description_admin')}}</th>
                        <th>{{__('buyer/public.status')}}</th>
                        <th>{{__('buyer/public.action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($payments as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{\App\Providers\MyProvider::show_date($item->created_at,'H:i Y/m/d')}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{__('buyer/public.payment_type_'.$item->type)}}</td>
                            <td>{{$item->description_admin??''}}</td>
                            <td>{{__('buyer/public.payment_status_'.$item->status)}}</td>
                            @switch($item->status)
                                @case(1)
                                <td>
                                    <form class="form-horizontal" method="POST" action="{{ route('buyer.payments.pay') }}">
                                        @csrf
                                        <input type="hidden" name="payment_id" value="{{$item->id}}">
                                        <button type="submit" class="btn btn-info">{{__('buyer/public.payment_pay_online')}}</button>
                                    </form>
                                </td>
                                @break
                            @endswitch

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

@endsection