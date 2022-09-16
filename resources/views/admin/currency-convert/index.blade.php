@extends('admin.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>{{__('admin/public.currency_convert_list')}}</h2>
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
                            <h2>{{__('admin/public.currency_convert_list')}}</h2>
                        </div>
                        <div class="body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                <tr>
                                    <th>{{__('admin/public.id')}}</th>
                                    <th>{{__('admin/public.exFrom')}}</th>
                                    <th>{{__('admin/public.exTo')}}</th>
                                    <th>{{__('admin/public.rate')}}</th>
                                    <th>{{__('admin/public.status')}}</th>
                                    <th>{{__('admin/public.actions')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr class="gradeA">
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->exFrom}}</td>
                                        <td>{{$item->exTo}}</td>
                                        <td>{{$item->rate}}</td>
                                        <td>{{$item->status?__('admin/public.active'):__('admin/public.inactive')}}</td>
                                        <td class="actions">

                                            <a href="{{ route('currencyConvert.edit',$item->id) }}"
                                               class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                               data-toggle="tooltip"
                                               data-original-title="{{__('admin/public.edit')}}"><i class="icon-pencil"
                                                                                                    aria-hidden="true"></i></a>

                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>{{__('admin/public.id')}}</th>
                                    <th>{{__('admin/public.exFrom')}}</th>
                                    <th>{{__('admin/public.exTo')}}</th>
                                    <th>{{__('admin/public.rate')}}</th>
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