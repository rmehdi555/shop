<div class="section-title">
    <h3>
        <a href="{{ route('web.show.category',$category->slug) }}"><span>{{\App\Providers\MyProvider::_text($category->title)}}</span></a>
    </h3>
</div>
<table class="table table-striped table-responsive-stack " id="tableOne{{$category->id}}">
    <thead class="thead-dark">
    <tr>
        <th class="hidden-mobile-view th-td-8">{{__('web/public.code')}}</th>
        <th class="th-td-36">{{__('web/public.title')}}</th>
        <th class="hidden-mobile-view th-td-8">{{__('web/public.size')}}</th>
        <th class="th-td-8">{{__('web/public.place_of_delivery')}}</th>
        <th class="hidden-mobile-view th-td-8">{{__('web/public.unit')}}</th>
        <th class=" th-td-16">{{__('web/public.updated_at')}}</th>
        <th class="th-td-16">{{__('web/public.price')}}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($category->activeProducts(50) as $product)


        <tr>
            <td class="hidden-mobile-view .news-item .ni-pic img th-td-8">{{$product->id}}</td>
            <td class="th-td-36"><a href="{{ route('web.show.product',$product->slug) }}"
                                    class="title-link-in-list">{{\App\Providers\MyProvider::_text($product->title)}} </a>
            </td>
            <td class="hidden-mobile-view th-td-8">{{empty($product->size)?"_":$product->size}}</td>
            <td class=" th-td-8">{{__('web/public.product_place_of_delivery_'.$product->place_of_delivery)}}</td>
            <td class="hidden-mobile-view th-td-8">{{empty($product->unit)?"_":__('web/public.unit_'.$product->unit)}}</td>
            <td class=" th-td-16">{{empty($product->updated_at)? \App\Providers\MyProvider::show_date($product->created_at,'Y/n/j') : \App\Providers\MyProvider::show_date($product->updated_at,'Y/n/j')}}</td>

            <td class="th-td-16">
                @if($product->price==0)
                    <span style="background-color: #17a2b8;border-radius: 5px;">
                @elseif($product->price<$product->price_old)
                            <span class="color-done-price">
                        <span class="slicknav_arrow">▼</span>
                                @else($product->price!=0 and $product->price>=$product->price_old)
                                    <span class="color-up-price" >
                                  <span class="slicknav_arrow">▲</span>

                                        @endif

                                        @if($product->price==0) <a
                                                href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_number"]->value)}}"
                                                target="_blank" rel="nofollow"
                                                class="call-for-price" style="color: #ffffff;padding: 0 10px;">{{__('web/public.call_for_price')}}</a>
                                        @elseif(session('Local_Currency')=="USD" AND $product->price_usd!=0){{$product->price_usd}}   {{__('web/public.currency_name_'.session('Local_Currency'))}}
                                        @elseif(session('Local_Currency')=="EUR" AND $product->price_euro!=0){{$product->price_euro}}   {{__('web/public.currency_name_'.session('Local_Currency'))}}
                                        @else {{\App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount)}}   {{__('web/public.currency_name_'.session('Local_Currency'))}}@endif

                </span>

            </td>
        </tr>

    @endforeach


    </tbody>
</table>
