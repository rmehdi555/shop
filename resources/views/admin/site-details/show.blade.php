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
                            <h2>{{__('admin/public.edit')}}</h2>
                        </div>
                        <div class="body">

                                @include('admin.section.errors')
                                <div class="form-group">
                                    <label>{{__('admin/public.title')}} :</label>
                                    <input type="text" name="title" class="form-control" value="{{$siteDetails->title}}" required>
                                </div>
                                <div class="form-group">
                                    <label>{{__('admin/public.key')}} :</label>
                                    <input type="text" name="key" class="form-control" value="{{$siteDetails->key}}" required>
                                </div>

                                <?php
                                $allLang=\App\Providers\MyProvider::get_languages();
                                foreach ($allLang as $kay => $value)
                                {
                                ?>
                                <div class="form-group">
                                    <label>{{__('admin/public.value')}} ({{$kay}}) :</label>
                                    <textarea name="value_{{$kay}}" id="ckeditor" class="form-control ckeditor" rows="5" cols="30" required>{{\App\Providers\MyProvider::_text($siteDetails->value,$kay)}}</textarea>
                                </div>
                                <?php
                                }
                                ?>
                                <div class="form-group">
                                    <label>{{__('admin/public.images')}} :</label>
                                    <input type="file" name="images" class="form-control" value="{{old('images')}}" >
                                </div>
                                @if($siteDetails->type=="image" and $siteDetails->images!=[])

                                    <div class="media">
                                        <img class="media-object " src="{{$siteDetails->images["thumb"]}}" alt="">
                                        {{--<div class="media-body">--}}
                                        {{--<span class="name">Joge Lucky</span>--}}
                                        {{--<span class="message">Sales Lead</span>--}}
                                        {{--<span class="badge badge-outline status"></span>--}}
                                        {{--</div>--}}
                                    </div>

                                @endif



                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.status')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="status" class="multiselect multiselect-custom" >
                                            <option value="0">{{__('admin/public.inactive')}}</option>
                                            <option value="1" {{$siteDetails->status?"selected":""}}>{{__('admin/public.active')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.type')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="type" class="multiselect multiselect-custom" >
                                            <option value="text">{{__('admin/public.text')}}</option>
                                            <option value="image" {{($siteDetails->type=="image")?"selected":""}}>{{__('admin/public.image')}}</option>
                                        </select>
                                    </div>
                                </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection