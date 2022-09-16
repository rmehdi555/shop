@extends('web.master')
@section('content')

    <section class="blog-hero-section set-bg" data-setbg="{{$item->images['images']['original']}}" style="background-image: url({{$item->images['images']['original']}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bh-text">
                        <h2>{{\App\Providers\MyProvider::_text($item->title)}}</h2>
                        <ul>
                            <li><i class="fa fa-calendar"></i> {{empty($item->updated_at)? \App\Providers\MyProvider::show_date($item->created_at,'Y/n/j') : \App\Providers\MyProvider::show_date($item->updated_at,'Y/n/j')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 left-blog-pad">
                    <div class="bd-text">
                        {!! \App\Providers\MyProvider::_text($item->body) !!}

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="bs-categories">
                            <div class="section-title sidebar-title">
                                <h5>{{__('web/public.category')}}</h5>
                            </div>
                            <ul>
                                @foreach($category as $item)
                                    <li>
                                        <a href="{{ route('web.show.news.category',$item->id) }}">{{\App\Providers\MyProvider::_text($item->title)}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection