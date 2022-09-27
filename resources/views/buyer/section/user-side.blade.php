<section class="padding-top-index">
</section>
<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
            <!-- Profile -->
            <div class="w3-card w3-round w3-white">
                <div class="w3-container">

                    <p class="w3-center"><img src="{{asset('web/2021/img/avatar.jpg')}}" class="w3-circle"
                                              style="height:106px;width:106px" alt="Avatar"></p>
                    <h4 class="w3-center">{{$user->name}} {{$user->family}}</h4>
                    <hr>
                    <a href="{{ route('buyer.panel') }}"><i
                                class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>{{__('buyer/public.profile_edit')}}</a>
                    <hr>
                    <a href="{{ route('buyer.payments.index') }}"><i
                                class="fa fa-book fa-fw w3-margin-right w3-text-theme"></i>{{__('buyer/public.payments_list')}}</a>
                    <hr>
                    <a href="{{ route('logout') }}" ><i
                                class="fa fa-close fa-fw w3-margin-right w3-text-theme"></i>{{__('user/public.btn_logout')}}
                    </a>
                    <hr>
                </div>
            </div>
            <br>
            <!-- Accordion -->

        </div>



