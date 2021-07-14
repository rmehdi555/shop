<div class="section-title">
    <h3> <a href="{{ route('web.show.category',$category->id) }}"><span>{{\App\Providers\MyProvider::_text($category->title)}}</span></a></h3>
</div>
<table class="table table-striped table-responsive-stack " id="tableOne{{$category->id}}">
    <thead class="thead-dark">
    <tr>
        <th class="hidden-mobile-view th-td-8" >{{__('web/public.code')}}</th>
        <th class="th-td-50">{{__('web/public.title')}}</th>
        <th class="hidden-mobile-view th-td-8" >{{__('web/public.size')}}</th>
        <th class="hidden-mobile-view th-td-8" >{{__('web/public.standard')}}</th>
        <th class="hidden-mobile-view th-td-10" >{{__('web/public.unit')}}</th>
        <th class="th-td-16">{{__('web/public.price')}}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($category->products as $product)


        <tr>
            <td class="hidden-mobile-view th-td-8" >{{$product->id}}</td>
            <td class="th-td-50"><a href="{{ route('web.show.product',$product->id) }}" class="title-link-in-list">{{\App\Providers\MyProvider::_text($product->title)}} </a></td>
            <td class="hidden-mobile-view th-td-8" >{{empty($product->size)?"_":$product->size}}</td>
            <td class="hidden-mobile-view th-td-8" >{{empty($product->standard)?"_":$product->standard}}</td>
            <td class="hidden-mobile-view th-td-10" >{{empty($product->unit)?"_":__('web/public.unit_'.$product->unit)}}</td>
            <td class="th-td-16">@if($product->price==0) <a href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone"]->value)}}" target="_blank" rel="nofollow"  class="call-for-price">{{__('web/public.call_for_price')}}</a>
                @elseif(session('Local_Currency')=="USD" AND $product->price_usd!=0){{$product->price_usd}}{{__('web/public.currency_name_'.session('Local_Currency'))}}
                @elseif(session('Local_Currency')=="EUR" AND $product->price_euro!=0){{$product->price_euro}}{{__('web/public.currency_name_'.session('Local_Currency'))}}
                @else {{\App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount)}}{{__('web/public.currency_name_'.session('Local_Currency'))}}@endif</td>
        </tr>

    @endforeach



    </tbody>
</table>
