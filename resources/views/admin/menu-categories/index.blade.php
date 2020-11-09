@extends('admin.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>{{__('admin/public.menu_categories_list')}}</h2>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        {{--<ul class="breadcrumb justify-content-end">--}}
                            {{--<li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
            </div>




            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>{{__('admin/public.menu_categories_list')}}</h2>
                        </div>
                        <div class="body">
                            {{--<a href="{{ route('menuCategories.create') }}" id="addToTable" class="btn btn-primary m-b-15" type="button">--}}
                                {{--<i class="icon wb-plus" aria-hidden="true"></i> {{__('admin/public.menu_add')}}--}}
                            {{--</a>--}}
                            {{--<div class="table-responsive">--}}
                                {{--<table class="table table-bordered table-hover table-striped" id="addrowExample">--}}
                                    {{--<thead>--}}
                                    {{--<tr>--}}
                                        {{--<th>Name</th>--}}
                                        {{--<th>Position</th>--}}
                                        {{--<th>Office</th>--}}
                                        {{--<th>Actions</th>--}}
                                    {{--</tr>--}}
                                    {{--</thead>--}}
                                    {{--<tbody>--}}
                                    {{--<?php--}}
                                    {{--for($i=0;$i<10;$i++)--}}
                                    {{--{--}}
                                    {{--?>--}}
                                    {{--<tr class="gradeA">--}}
                                        {{--<td>Tiger Nixon</td>--}}
                                        {{--<td>System Architect</td>--}}
                                        {{--<td>Edinburgh</td>--}}
                                        {{--<td class="actions">--}}
                                            {{--<button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"--}}
                                                    {{--data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer" aria-hidden="true"></i></button>--}}
                                            {{--<button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"--}}
                                                    {{--data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close" aria-hidden="true"></i></button>--}}
                                            {{--<button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"--}}
                                                    {{--data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil" aria-hidden="true"></i></button>--}}
                                            {{--<button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"--}}
                                                    {{--data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash" aria-hidden="true"></i></button>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                    {{--<?php--}}
                                    {{--}--}}
                                    {{--?>--}}


                                    {{--</tbody>--}}
                                    {{--<tfoot>--}}
                                    {{--<tr>--}}
                                        {{--<th>Name</th>--}}
                                        {{--<th>Position</th>--}}
                                        {{--<th>Office</th>--}}
                                        {{--<th>Actions</th>--}}
                                    {{--</tr>--}}
                                    {{--</tfoot>--}}
                                {{--</table>--}}
                            {{--</div>--}}

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th>{{__('admin/public.id')}}</th>
                                        <th>{{__('admin/public.title')}}</th>
                                        <th>{{__('admin/public.parent_id')}}</th>
                                        <th>{{__('admin/public.status')}}</th>
                                        <th>{{__('admin/public.actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allMenuCategories as $menuCategories)
                                        <tr class="gradeA">
                                            <td>{{$menuCategories->id}}</td>
                                            <td>{{\App\Providers\MyProvider::_text($menuCategories->title)}}</td>
                                            <td>{{$menuCategories->parent_id}}</td>
                                            <td>{{$menuCategories->status?__('admin/public.active'):__('admin/public.inactive')}}</td>
                                            <td class="actions">

                                                <form action="{{ route('menuCategories.destroy', $menuCategories->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('menuCategories.show',$menuCategories->id) }}" class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-show"
                                                       data-toggle="tooltip" data-original-title="{{__('admin/public.show')}}"><i class="icon-eye" aria-hidden="true"></i></a>
                                                    <a href="{{ route('menuCategories.edit',$menuCategories->id) }}" class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                       data-toggle="tooltip" data-original-title="{{__('admin/public.edit')}}"><i class="icon-pencil" aria-hidden="true"></i></a>
                                                    <button type="submit" class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                            data-toggle="tooltip" data-original-title="{{__('admin/public.remove')}}"><i class="icon-trash" aria-hidden="true"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach



                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>{{__('admin/public.id')}}</th>
                                        <th>{{__('admin/public.title')}}</th>
                                        <th>{{__('admin/public.parent_id')}}</th>
                                        <th>{{__('admin/public.status')}}</th>
                                        <th>{{__('admin/public.actions')}}</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection