@extends('admin.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>{{__('admin/public.product_categories_list')}}</h2>
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
                            <h2>{{__('admin/public.product_categories_list')}}</h2>
                        </div>
                        <div class="body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th>{{__('admin/public.id')}}</th>
                                        <th>{{__('admin/public.title')}}</th>
                                        <th>{{__('admin/public.parent_id')}}</th>
                                        <th>{{__('admin/public.priority')}}</th>
                                        <th>{{__('admin/public.status')}}</th>
                                        <th>نمایش روی سایت</th>
                                        <th>{{__('admin/public.actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allProductCategories as $productCategories)
                                        <tr class="gradeA">
                                            <td>{{$productCategories->id}}</td>
                                            <td>{{\App\Providers\MyProvider::_text($productCategories->title)}}</td>
                                            <td>{{$productCategories->parent_id}}</td>
                                            <td>{{$productCategories->priority}}</td>
                                            <td>{{$productCategories->status?__('admin/public.active'):__('admin/public.inactive')}}</td>
                                            <td><a href="{{ route('web.show.category',$productCategories->slug) }}"  target=”_blank”>نمایش روی سایت</a></td>
                                            <td class="actions">

                                                <form action="{{ route('productCategories.destroy', $productCategories->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('productCategories.show',$productCategories->id) }}" class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-show"
                                                       data-toggle="tooltip" data-original-title="{{__('admin/public.show')}}"><i class="icon-eye" aria-hidden="true"></i></a>
                                                    <a href="{{ route('productCategories.edit',$productCategories->id) }}" class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
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