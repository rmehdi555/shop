<div class="section-title">
    <span><a href="{{ route('web.show.news.category','مقالات') }}}">مقالات میلگرد و آهن آلات</a></span>
</div>
@foreach($articles as $item)
    <div class="news-item">
        <div class="ni-pic">
            <img src="{{asset($item->images['images'][64])}}" alt="{{\App\Providers\MyProvider::_text($item->title)}}">
        </div>
        <div class="ni-text">
            <h1><a href="{{ route('web.show.news',$item->slug) }}"> {{\App\Providers\MyProvider::_text($item->title)}}</a></h1>
            <ul>
                <li>
                    <i class="fa fa-calendar"></i> انتشار {{ \App\Providers\MyProvider::show_date($item->created_at,'Y/n/j') }}
                    <i class="fa fa-calendar"></i> آخرین به روز رسانی {{ \App\Providers\MyProvider::show_date($item->updated_at,'Y/n/j') }}
                </li>
            </ul>
        </div>
    </div>

@endforeach
<br>
<div class="points-table">
 <a href="{{ route('web.show.news.category','مقالات') }}"
       class="p-all view-all-index-link">مشاهده مقالات بیشتر ...</a>
 </div>

