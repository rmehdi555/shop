@extends('admin.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>{{__('admin/public.products_list')}}</h2>
                    </div>
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>{{__('admin/public.products_list')}}</h2>
                        </div>
                        <div class="body">

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                    <tr>
                                        <th>{{__('admin/public.id')}}</th>
                                        <th>{{__('admin/public.title')}}</th>
                                        <th>{{__('admin/public.priority')}}</th>
                                        <th>{{__('admin/public.status')}}</th>
                                        <th>{{__('admin/public.actions')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr class="gradeA">
                                            <td>{{$product->id}}</td>
                                            <td>{{\App\Providers\MyProvider::_text($product->title)}}</td>
                                            <td>{{$product->priority}}</td>
                                            <td>{{$product->status?__('admin/public.active'):__('admin/public.inactive')}}</td>
                                            <td class="actions">

                                                <form action="{{ route('products.destroy', $product->id) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('products.show',$product->id) }}"
                                                       class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-show"
                                                       data-toggle="tooltip"
                                                       data-original-title="{{__('admin/public.show')}}"><i
                                                                class="icon-eye" aria-hidden="true"></i></a>
                                                    <a href="{{ route('products.edit',$product->id) }}"
                                                       class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                       data-toggle="tooltip"
                                                       data-original-title="{{__('admin/public.edit')}}"><i
                                                                class="icon-pencil" aria-hidden="true"></i></a>
                                                    <button type="submit"
                                                            class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                            data-toggle="tooltip"
                                                            data-original-title="{{__('admin/public.remove')}}"><i
                                                                class="icon-trash" aria-hidden="true"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>{{__('admin/public.id')}}</th>
                                        <th>{{__('admin/public.title')}}</th>
                                        <th>{{__('admin/public.priority')}}</th>
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