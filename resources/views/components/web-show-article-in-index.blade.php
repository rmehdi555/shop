<div class="section-title">
    <h3><a href="{{ route('web.show.news.category',config('app.newsId.article')) }}"><span>{{__('web/public.articles')}}</span></a></h3>
</div>
@foreach($articles as $item)
    <div class="news-item">
        <div class="ni-pic">
            <img src="{{$item->images['images'][64]}}" alt="">
        </div>
        <div class="ni-text">
            <h5><a href="{{ route('web.show.news',$item->id) }}"> {{\App\Providers\MyProvider::_text($item->title)}}</a></h5>
            <ul>
                <li><i class="fa fa-calendar"></i> {{empty($item->updated_at)? \App\Providers\MyProvider::show_date($item->created_at,'Y/n/j') : \App\Providers\MyProvider::show_date($item->updated_at,'Y/n/j')}}</li>
            </ul>
        </div>
    </div>
@endforeach

