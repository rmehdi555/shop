@extends('buyer.master')
@section('content')

    <!-- Middle Column -->
    <div class="w3-col m7">

        <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
            <h4>ویرایش پروفایل کاربری</h4><br>
            <hr class="w3-clear">
            <div class="w3-col m12">
                <div class="w3-card w3-round w3-white">
                    <div class="w3-container w3-padding">
                        <form action="{{ route('buyer.profile.save') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="phone">شماره همراه : </label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                       value="{{$user->phone}}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="name">نام : </label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}"
                                       placeholder="نام خود را وارد کنید ...">
                            </div>
                            <div class="form-group">
                                <label for="family">نام خانوادگی : </label>
                                <input type="text" class="form-control" name="family" id="family"
                                       value="{{$user->family}}" placeholder="نام خانوادگی خود را وارد کنیید ...">
                            </div>
                            <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection