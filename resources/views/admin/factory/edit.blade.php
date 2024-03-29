@extends('admin.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">


            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>{{__('admin/public.edit')}}</h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" action="{{ route('factory.update',$factory->id) }}" method="post"
                                  enctype="multipart/form-data" novalidate>
                                @csrf
                                @method('PATCH')
                                @include('admin.section.errors')
                                <?php
                                $allLang = \App\Providers\MyProvider::get_languages();
                                foreach ($allLang as $kay => $value)
                                {
                                ?>
                                <div class="form-group">
                                    <label>{{__('admin/public.title')}}:</label>
                                    <input type="text" name="title_{{$kay}}" class="form-control"
                                           value="{{\App\Providers\MyProvider::_text($factory->title,$kay)}}" required>
                                </div>
                                <?php
                                }
                                ?>

                                <div class="form-group">
                                    <label>{{__('admin/public.tag_title')}}:</label>
                                    <input type="text" name="tag_title" class="form-control"
                                           value="{{$factory->tag_title}}" required>
                                </div>
                                <div class="form-group">
                                    <label>{{__('admin/public.slug')}}:</label>
                                    <input type="text" name="slug" class="form-control"
                                           value="{{$factory->slug}}" required>
                                </div>

                                <?php

                                $allLang = \App\Providers\MyProvider::get_languages();
                                foreach ($allLang as $kay => $value)
                                {
                                ?>
                                <div class="form-group">
                                    <label>{{__('admin/public.body')}} ({{$kay}}):</label>
                                    <textarea name="body_{{$kay}}" class="form-control ckeditor" rows="5" cols="30"
                                              required>{{\App\Providers\MyProvider::_text($factory->body,$kay)}}</textarea>

                                </div>
                                <?php
                                }
                                ?>

                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.product_categories_id')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="product_categories_id"
                                                class="multiselect multiselect-custom">
                                            @foreach($productCategories as $category)
                                                <option value="{{$category->id}}" {{($factory->product_categories_id==$category->id)?"selected":""}}>{{\App\Providers\MyProvider::_text($category->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>{{__('admin/public.images')}} :</label>
                                    <input type="file" name="images" class="form-control" value="{{old('images')}}">
                                </div>
                                <div class="media">
                                    <img class="media-object " src="{{$factory->images["thumb"]??null}}" alt="">
                                </div>
                                <div class="form-group">
                                    <label>{{__('admin/public.priority')}} :</label>
                                    <input type="number" name="priority" class="form-control"
                                           value="{{$factory->priority}}" required>
                                </div>


                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.status')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="status"
                                                class="multiselect multiselect-custom">
                                            <option value="0">{{__('admin/public.inactive')}}</option>
                                            <option value="1" {{$factory->status?"selected":""}}>{{__('admin/public.active')}}</option>
                                        </select>
                                    </div>
                                </div>


                                <hr>
                                <h3>سئو</h3>

                                <div class="form-group">
                                    <label>{{__('admin/public.seo_title')}} :</label>
                                    <input type="text" name="seo_title" class="form-control"
                                           value="{{$factory->seo_title}}" required>
                                </div>
                                <div class="form-group">
                                    <label>{{__('admin/public.seo_description')}} :</label>
                                    <textarea name="seo_description" id="seo_description" class="form-control" rows="5"
                                              cols="30" required>{{$factory->seo_description}}</textarea>

                                </div>
                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.seo_follow')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="seo_follow"
                                                class="multiselect multiselect-custom">
                                            <option value="0">{{__('admin/public.seo_follow_no_follow')}}</option>
                                            <option value="1" {{$factory->seo_follow?"selected":""}}>{{__('admin/public.seo_follow_follow')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.seo_index')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="seo_index"
                                                class="multiselect multiselect-custom">
                                            <option value="0">{{__('admin/public.seo_index_no_index')}}</option>
                                            <option value="1" {{$factory->seo_index?"selected":""}}>{{__('admin/public.seo_index_index')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>{{__('admin/public.seo_canonical')}} :</label>
                                    <textarea name="seo_canonical" id="seo_canonical" class="form-control" rows="5"
                                              cols="30">{{$factory->seo_canonical}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>{{__('admin/public.schema')}} :</label>
                                    <textarea name="schema" id="schema" class="form-control" rows="5"
                                              cols="30">{{$factory->schema}}</textarea>
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