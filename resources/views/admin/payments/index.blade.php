@extends('admin.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>ایجاد درخواست رکورد پرداختی برای خریدار</h2>
                        </div>
                        <form id="basic-form" action="{{ route('admin.payments.store') }}" method="post"
                              enctype="multipart/form-data"
                              novalidate>
                            @csrf
                            @include('admin.section.errors')
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-3 col-md-12">
                                        <label>{{__('admin/public.buyer')}} :</label>
                                        <div class="multiselect_div">
                                            <select id="single-selection" name="user_id"
                                                    class="multiselect multiselect-custom">
                                                @foreach($buyers as $item)
                                                    <option value="{{$item->id}}">{{$item->phone}}
                                                        - {{\App\Providers\MyProvider::_text($item->name)}} {{\App\Providers\MyProvider::_text($item->family)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-12">
                                        <label>{{__('admin/public.price')}} : (ریال)</label>
                                        <input type="number" name="price" class="form-control"
                                               value="{{old('price')}}"
                                               required>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-12">
                                        <label>{{__('admin/public.description_admin')}} :</label>
                                        <input type="text" name="description_admin" class="form-control"
                                               value="{{old('description_admin')}}"
                                               >
                                    </div>
                                    <div class="form-group col-lg-3 col-md-12">
                                        <br>
                                        <button type="submit"
                                                class="btn btn-primary">{{__('admin/public.submit')}}</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>{{__('admin/public.payments_list')}}</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th>{{__('admin/public.id')}}</th>
                                        <th>{{__('admin/public.name')}}</th>
                                        <th>{{__('admin/public.family')}}</th>
                                        <th>{{__('admin/public.phone')}}</th>
                                        <th>{{__('admin/public.type')}}</th>
                                        <th>{{__('admin/public.price')}}</th>
                                        <th>{{__('admin/public.created_at')}}</th>
                                        <th>{{__('admin/public.description_admin')}}</th>
                                        <th>{{__('admin/public.status')}}</th>
                                        <th>{{__('admin/public.actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($payments as $item)
                                        <tr class="gradeA">
                                            <td>{{$item->id}}</td>
                                            <td>{{\App\Providers\MyProvider::_text($item->user->name??'')}}</td>
                                            <td>{{\App\Providers\MyProvider::_text($item->user->family??'')}}</td>
                                            <td>{{$item->user->phone??''}}</td>
                                            <td>{{__('admin/public.payment_type_'.$item->type)}}</td>
                                            <td>{{\App\Providers\MyProvider::convert_number_to_persian(number_format($item->price))}}</td>
                                            <td>{{\App\Providers\MyProvider::show_date($item->created_at,'H:i Y/m/d')}}</td>
                                            <td>{{$item->description_admin??''}}</td>
                                            <td>{{__('admin/public.payment_status_'.$item->status)}}</td>
                                            <td class="actions">

                                                {{--<form action="{{ route('admin.payments.update', $item->id) }}" method="POST">--}}
                                                    {{--@csrf--}}
                                                    {{--@method('DELETE')--}}
                                                    {{--<a href="{{ route('news.show',$item->id) }}"--}}
                                                       {{--class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-show"--}}
                                                       {{--data-toggle="tooltip"--}}
                                                       {{--data-original-title="{{__('admin/public.show')}}"><i--}}
                                                                {{--class="icon-eye" aria-hidden="true"></i></a>--}}
                                                    {{--<a href="{{ route('news.edit',$item->id) }}"--}}
                                                       {{--class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"--}}
                                                       {{--data-toggle="tooltip"--}}
                                                       {{--data-original-title="{{__('admin/public.edit')}}"><i--}}
                                                                {{--class="icon-pencil" aria-hidden="true"></i></a>--}}
                                                    {{--<button type="submit"--}}
                                                            {{--class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"--}}
                                                            {{--data-toggle="tooltip"--}}
                                                            {{--data-original-title="{{__('admin/public.update')}}"><i--}}
                                                                {{--class="icon-trash" aria-hidden="true"></i></button>--}}
                                                {{--</form>--}}

                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>{{__('admin/public.id')}}</th>
                                        <th>{{__('admin/public.name')}}</th>
                                        <th>{{__('admin/public.family')}}</th>
                                        <th>{{__('admin/public.phone')}}</th>
                                        <th>{{__('admin/public.type')}}</th>
                                        <th>{{__('admin/public.price')}}</th>
                                        <th>{{__('admin/public.created_at')}}</th>
                                        <th>{{__('admin/public.description_admin')}}</th>
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