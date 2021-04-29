
@extends('web.master')
@section('content')

    <section class="padding-top-index">
    </section>

    <!-- Latest Section Begin -->
    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($products20))
                <div class="col-lg-6">

                    <div class="section-title">
                        <h3> <span>{{\App\Providers\MyProvider::_text($categoryName[20]->title)}}</span></h3>
                    </div>

                        <table class="table table-striped table-responsive-stack " id="tableOne1">
                            <thead class="thead-dark">
                            <tr>
                                <th>{{__('web/public.code')}}</th>
                                <th>{{__('web/public.title')}}</th>
                                <th>{{__('web/public.size')}}</th>
                                <th>{{__('web/public.standard')}}</th>
                                <th>{{__('web/public.unit')}}</th>
                                <th>{{__('web/public.price')}}</th>
                            </tr>
                            </thead>
                            <tbody>

                                @foreach($products20 as $product)

                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{\App\Providers\MyProvider::_text($product->title)}}</td>
                                        <td>{{empty($product->size)?"_":$product->size}}</td>
                                        <td>{{empty($product->standard)?"_":$product->standard}}</td>
                                        <td>{{empty($product->unit)?"_":$product->unit}}</td>
                                        <td>{{\App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</td>
                                    </tr>

                                @endforeach



                            </tbody>
                        </table>

                    </div>



                @endif

                    @if(isset($products21))
                        <div class="col-lg-6">

                            <div class="section-title">
                                <h3> <span>{{\App\Providers\MyProvider::_text($categoryName[21]->title)}}</span></h3>
                            </div>

                            <table class="table table-striped table-responsive-stack " id="tableOne2">
                                <thead class="thead-dark">
                                <tr>
                                    <th>{{__('web/public.code')}}</th>
                                    <th>{{__('web/public.title')}}</th>
                                    <th>{{__('web/public.size')}}</th>
                                    <th>{{__('web/public.standard')}}</th>
                                    <th>{{__('web/public.unit')}}</th>
                                    <th>{{__('web/public.price')}}</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($products21 as $product)

                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{\App\Providers\MyProvider::_text($product->title)}}</td>
                                        <td>{{empty($product->size)?"_":$product->size}}</td>
                                        <td>{{empty($product->standard)?"_":$product->standard}}</td>
                                        <td>{{empty($product->unit)?"_":$product->unit}}</td>
                                        <td>{{\App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</td>
                                    </tr>

                                @endforeach



                                </tbody>
                            </table>

                        </div>



                    @endif
            </div>
        </div>
    </section>
    <!-- Latest Section End -->


    <section class="latest-section">
        <div class="container">
            <div class="row">
                @if(isset($products22))
                    <div class="col-lg-6">

                        <div class="section-title">
                            <h3> <span>{{\App\Providers\MyProvider::_text($categoryName[22]->title)}}</span></h3>
                        </div>

                        <table class="table table-striped table-responsive-stack " id="tableOne3">
                            <thead class="thead-dark">
                            <tr>
                                <th>{{__('web/public.code')}}</th>
                                <th>{{__('web/public.title')}}</th>
                                <th>{{__('web/public.size')}}</th>
                                <th>{{__('web/public.standard')}}</th>
                                <th>{{__('web/public.unit')}}</th>
                                <th>{{__('web/public.price')}}</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products22 as $product)

                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{\App\Providers\MyProvider::_text($product->title)}}</td>
                                    <td>{{empty($product->size)?"_":$product->size}}</td>
                                    <td>{{empty($product->standard)?"_":$product->standard}}</td>
                                    <td>{{empty($product->unit)?"_":$product->unit}}</td>
                                    <td>{{\App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</td>
                                </tr>

                            @endforeach



                            </tbody>
                        </table>

                    </div>



                @endif

                @if(isset($products23))
                    <div class="col-lg-6">

                        <div class="section-title">
                            <h3> <span>{{\App\Providers\MyProvider::_text($categoryName[23]->title)}}</span></h3>
                        </div>

                        <table class="table table-striped table-responsive-stack " id="tableOne4">
                            <thead class="thead-dark">
                            <tr>
                                <th>{{__('web/public.code')}}</th>
                                <th>{{__('web/public.title')}}</th>
                                <th>{{__('web/public.size')}}</th>
                                <th>{{__('web/public.standard')}}</th>
                                <th>{{__('web/public.unit')}}</th>
                                <th>{{__('web/public.price')}}</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products23 as $product)

                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{\App\Providers\MyProvider::_text($product->title)}}</td>
                                    <td>{{empty($product->size)?"_":$product->size}}</td>
                                    <td>{{empty($product->standard)?"_":$product->standard}}</td>
                                    <td>{{empty($product->unit)?"_":$product->unit}}</td>
                                    <td>{{\App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}</td>
                                </tr>

                            @endforeach



                            </tbody>
                        </table>

                    </div>



                @endif
            </div>
        </div>
    </section>
@endsection