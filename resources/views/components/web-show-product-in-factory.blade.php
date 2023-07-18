
<table class="table table-striped table-responsive-stack " id="tableOne-{{isset($products[0]->id)?$products[0]->id:1}}">
    <thead class="thead-dark">

    <tr>

        <th class="hidden-mobile-view th-td-8">{{__('web/public.category')}}</th>
        <th class="th-td-16">{{__('web/public.title')}}</th>
        <th class="th-td-8">{{__('web/public.size')}}</th>
        <th class="th-td-8">{{__('web/public.factory')}}</th>
        <th class="th-td-8">{{__('web/public.standard')}}</th>
        <th class=" th-td-8">{{__('web/public.place_of_delivery')}}</th>
        <th class="hidden-mobile-view th-td-8">{{__('web/public.unit')}}</th>
        <th class="th-td-8">{{__('web/public.updated_at')}}</th>
        <th class="th-td-8">{{__('web/public.price')}}</th>
        <th class="hidden-mobile-view th-td-8">{{__('web/public.price_change')}}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)


        <tr>
            <td class="hidden-mobile-view th-td-8">{{$product->category->title}}</td>
            <td class="th-td-16"><a href="{{ route('web.show.product',$product->slug) }}"
                                    class="title-link-in-list">{{\App\Providers\MyProvider::_text($product->title)}} </a>
            </td>
            <td class="th-td-8">{{empty($product->sizeDetails->title)?"_":$product->sizeDetails->title}}</td>
            <td class="th-td-8">{{empty($product->factoryDetails->title)?"_":$product->factoryDetails->title}}</td>
            <td class="th-td-8">{{empty($product->standardDetails->title)?"_":$product->standardDetails->title}}</td>
            <td class="th-td-8">{{__('web/public.product_place_of_delivery_'.$product->place_of_delivery)}}</td>
            <td class="hidden-mobile-view th-td-8">{{empty($product->unit)?"_":__('web/public.unit_'.$product->unit)}}</td>
            <td class="th-td-8">{{empty($product->updated_at)? \App\Providers\MyProvider::show_date($product->created_at,'Y/n/j') : \App\Providers\MyProvider::show_date($product->updated_at,'Y/n/j')}}</td>


            @php

                if(session('Local_Currency')=="USD" AND $product->price_usd!=0) $price=$product->price_usd.' '.__('web/public.currency_name_'.session('Local_Currency'));
                elseif(session('Local_Currency')=="EUR" AND $product->price_euro!=0) $price=$product->price_euro.' '.__('web/public.currency_name_'.session('Local_Currency'));
                else $price = \App\Providers\MyProvider::exToLocalDiscount($product->price,$product->discount).' '. __('web/public.currency_name_'.session('Local_Currency'));

            @endphp



            @if($product->price==0)
                <td class="th-td-8">
                        <span style="background-color: #17a2b8;border-radius: 5px;">
                        <a href="tel:{{\App\Providers\MyProvider::_text($siteDetailsProvider["phone_call_number"]->value)}}"
                           target="_blank" rel="nofollow"
                           class="call-for-price"
                           style="color: #ffffff;padding: 0 10px;">{{__('web/public.call_for_price')}}</a>
                        </span>
                </td>
                <td class="hidden-mobile-view  th-td-8">-</td>
            @elseif($product->price<$product->price_old)
                <td class="th-td-8">
                    <span class="color-done-price" style="font-weight: bold;">{{$price}}</span>
                </td>
                <td class="hidden-mobile-view  th-td-8">
                    <span class="slicknav_arrow color-done-price">▼</span><span
                            class="color-done-price">{{\App\Providers\MyProvider::showChangePrice(($product->price_old-$product->price)/$product->price_old*100)}}
                        %</span>
                </td>

            @else
                <td class="th-td-8">
                    <span class="color-up-price" style="font-weight: bold;">{{$price}}</span>

                <td class="hidden-mobile-view  th-td-8">
                    <span class="slicknav_arrow color-up-price">▲</span><span
                            class="color-up-price">{{\App\Providers\MyProvider::showChangePrice(($product->price-$product->price_old)/$product->price*100)}}
                        %</span>
                </td>

            @endif

        </tr>


    @endforeach


    </tbody>
</table>
