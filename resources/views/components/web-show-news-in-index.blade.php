<div class="section-title">
    <h1><a href="{{ route('web.show.news.category','اخبار') }}"><span>{{__('web/public.news')}}</span></a></h1>
</div>
@foreach($news as $item)
    <div class="news-item">
        <div class="ni-pic">
            <img src="{{$item->images['images'][64]}}" alt="{{\App\Providers\MyProvider::_text($item->title)}}">
        </div>
        <div class="ni-text">
            <h1><a href="{{ route('web.show.news',$item->slug) }}"> {{\App\Providers\MyProvider::_text($item->title)}}</a></h1>
            <ul>
                <li><i class="fa fa-calendar"></i> {{ \App\Providers\MyProvider::show_date($item->created_at,'Y/n/j') }}</li>
            </ul>
        </div>
    </div>
@endforeach
<br>
<div class="points-table">
 <a href="{{ route('web.show.news.category','اخبار') }}"
       class="p-all view-all-index-link">مشاهده اخبار بیشتر ...</a>
 </div>
