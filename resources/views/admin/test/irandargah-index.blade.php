@extends('admin.master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2>تست درگاه ایران درگاه</h2>
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
                            <h2>{{__('admin/public.slider_list')}}</h2>
                        </div>
                        <div class="body">

                            <form id="basic-form" action="{{ route('admin.test.irandargah.send') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                @include('admin.section.errors')
                                <div class="form-group">
                                    <label>مبلغ ( ریال ) :</label>
                                    <input type="number" name="amount" class="form-control"
                                           value="{{old('amount')}}" required>
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