@extends('admin.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            {{--<div class="block-header">--}}
            {{--<div class="row">--}}
            {{--<div class="col-lg-5 col-md-8 col-sm-12">--}}
            {{--<h2>Jquery Datatable</h2>--}}
            {{--</div>--}}
            {{--<div class="col-lg-7 col-md-4 col-sm-12 text-right">--}}
            {{--<ul class="breadcrumb justify-content-end">--}}
            {{--<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}




            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>{{__('admin/public.create')}}</h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" action="{{ route('news.store') }}" method="post" enctype="multipart/form-data" novalidate>
                                @csrf
                                @include('admin.section.errors')
                                <?php
                                $allLang=\App\Providers\MyProvider::get_languages();
                                foreach ($allLang as $kay => $value)
                                {
                                ?>
                                <div class="form-group">
                                    <label>{{__('admin/public.title')}} ({{$kay}}):</label>
                                    <input type="text" name="title_{{$kay}}" class="form-control" value="{{old('title_'.$kay)}}" required>
                                </div>
                                <?php
                                }
                                $allLang=\App\Providers\MyProvider::get_languages();
                                foreach ($allLang as $kay => $value)
                                {
                                ?>
                                <div class="form-group">
                                    <label>{{__('admin/public.description')}} ({{$kay}}):</label>
                                    <textarea name="description_{{$kay}}" id="description_{{$kay}}" class="form-control" rows="5" cols="30" required>{{old('description_'.$kay)}}</textarea>

                                </div>
                                <?php
                                }
                                $allLang=\App\Providers\MyProvider::get_languages();
                                foreach ($allLang as $kay => $value)
                                {
                                ?>
                                <div class="form-group">
                                    <label>{{__('admin/public.body')}} ({{$kay}}):</label>
                                    <textarea name="body_{{$kay}}" class="form-control ckeditor" rows="5" cols="30" required>{{old('body_'.$kay)}}</textarea>

                                </div>
                                <?php
                                }
                                ?>
                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.news_categories_id')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="news_categories_id" class="multiselect multiselect-custom" >
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{\App\Providers\MyProvider::_text($category->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>{{__('admin/public.images')}} :</label>
                                    <input type="file" name="images" class="form-control" value="{{old('images')}}" required>
                                </div>
                                <div class="form-group">
                                    <label>{{__('admin/public.priority')}} :</label>
                                    <input type="number" name="priority" class="form-control" value="{{old('priority')}}" required>
                                </div>

                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.status')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="status" class="multiselect multiselect-custom" >
                                            <option value="1">{{__('admin/public.active')}}</option>
                                            <option value="0">{{__('admin/public.inactive')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.type')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="type" class="multiselect multiselect-custom" >
                                            <option value="normal">{{__('admin/public.normal')}}</option>
                                            <option value="special">{{__('admin/public.special')}}</option>
                                            <option value="offer">{{__('admin/public.offer')}}</option>
                                        </select>
                                    </div>
                                </div>


                                <hr>
                                <h3>سئو</h3>

                                <div class="form-group">
                                    <label>{{__('admin/public.seo_title')}} :</label>
                                    <input type="text" name="seo_title" class="form-control"  required>
                                </div>
                                <div class="form-group">
                                    <label>{{__('admin/public.seo_description')}} :</label>
                                    <textarea name="seo_description" id="seo_description" class="form-control" rows="5" cols="30" required></textarea>

                                </div>
                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.seo_follow')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="seo_follow" class="multiselect multiselect-custom" >
                                            <option value="1">{{__('admin/public.seo_follow_follow')}}</option>
                                            <option value="0">{{__('admin/public.seo_follow_no_follow')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.seo_index')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="seo_index" class="multiselect multiselect-custom" >
                                            <option value="1" >{{__('admin/public.seo_index_index')}}</option>
                                            <option value="0">{{__('admin/public.seo_index_no_index')}}</option>
                                        </select>
                                    </div>
                                </div>



                                <br>
                                <button type="submit" class="btn btn-primary">{{__('admin/public.submit')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection