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
                            <form id="basic-form" action="{{ route('siteDetails.update',$siteDetails->id) }}"
                                  method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                @method('PATCH')
                                @include('admin.section.errors')
                                <div class="form-group">
                                    <label>{{__('admin/public.title')}} :</label>
                                    <input type="text" name="title" class="form-control" value="{{$siteDetails->title}}"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label>{{__('admin/public.key')}} :</label>
                                    <input type="text" name="key" class="form-control" value="{{$siteDetails->key}}"
                                           required>
                                </div>

                                <?php
                                $allLang = \App\Providers\MyProvider::get_languages();
                                foreach ($allLang as $kay => $value)
                                {
                                ?>
                                @if($siteDetails->type=="number")
                                    <div class="form-group">
                                        <label>{{__('admin/public.value')}} ({{$kay}}) :</label>
                                        <input type="number" name="value_{{$kay}}" class="form-control"
                                               value="{{\App\Providers\MyProvider::_text($siteDetails->value,$kay)}}"
                                               required>
                                    </div>
                                @elseif($siteDetails->type=="textarea")
                                    <div class="form-group">
                                        <label>{{__('admin/public.value')}} ({{$kay}}) :</label>
                                        <textarea name="value_{{$kay}}" id="ckeditor" class="form-control ckeditor"
                                                  rows="5" cols="30"
                                                  required>{{\App\Providers\MyProvider::_text($siteDetails->value,$kay)}}</textarea>
                                    </div>
                                @else
                                    <div class="form-group">
                                        <label>{{__('admin/public.value')}} ({{$kay}}) :</label>
                                        <input type="text" name="value_{{$kay}}" class="form-control"
                                               value="{{\App\Providers\MyProvider::_text($siteDetails->value,$kay)}}"
                                               required>
                                    </div>
                                @endif
                                <?php
                                }
                                ?>
                                <div class="form-group">
                                    <label>{{__('admin/public.images')}} :</label>
                                    <input type="file" name="images" class="form-control" value="{{old('images')}}">
                                </div>
                                @if($siteDetails->type=="image" and $siteDetails->images!=[])

                                    <div class="media">
                                        <img class="media-object " src="{{$siteDetails->images["thumb"]}}" alt="">
                                    </div>

                                @endif


                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.status')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="status"
                                                class="multiselect multiselect-custom">
                                            <option value="0">{{__('admin/public.inactive')}}</option>
                                            <option value="1" {{$siteDetails->status?"selected":""}}>{{__('admin/public.active')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.type')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="type"
                                                class="multiselect multiselect-custom">
                                            <option value="text">{{__('admin/public.text')}}</option>
                                            <option value="image" {{($siteDetails->type=="image")?"selected":""}}>{{__('admin/public.image')}}</option>
                                            <option value="number" {{($siteDetails->type=="number")?"selected":""}}>{{__('admin/public.number')}}</option>
                                            <option value="textarea" {{($siteDetails->type=="textarea")?"selected":""}}>{{__('admin/public.textarea')}}</option>
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