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
                            <form id="basic-form" action="{{ route('currencyConvert.update',$item->id) }}"
                                  method="POST" enctype="multipart/form-data" novalidate>
                                @csrf
                                @method('PATCH')
                                @include('admin.section.errors')
                                <div class="form-group">
                                    <label>{{__('admin/public.exFrom')}} :</label>
                                    <input type="text" name="exFrom" class="form-control" value="{{$item->exFrom}}"
                                           disabled>
                                </div>
                                <div class="form-group">
                                    <label>{{__('admin/public.exTo')}} :</label>
                                    <input type="text" name="exTo" class="form-control" value="{{$item->exTo}}"
                                           disabled>
                                </div>
                                <div class="form-group">
                                    <label>{{__('admin/public.rate')}} :</label>
                                    <input type="text" name="rate" class="form-control" value="{{$item->rate}}"
                                           required>
                                </div>




                                <div class="form-group col-lg-4 col-md-12">
                                    <label>{{__('admin/public.status')}} :</label>
                                    <div class="multiselect_div">
                                        <select id="single-selection" name="status"
                                                class="multiselect multiselect-custom">
                                            <option value="0">{{__('admin/public.inactive')}}</option>
                                            <option value="1" {{$item->status?"selected":""}}>{{__('admin/public.active')}}</option>
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