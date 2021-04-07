
@extends('web.master')
@section('content')

    <section class="padding-top-index">
    </section>
    <!-- Latest Section Begin -->
    <section class="latest-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3>Club <span>Ranking</span></h3>
                    </div>
                    <div class="points-table">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="th-o">Pos</th>
                                <th>Team</th>
                                <th class="th-o">P</th>
                                <th class="th-o">W</th>
                                <th class="th-o">L</th>
                                <th class="th-o">PTS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($newProducts))
                                @foreach($newProducts as $product)
                                    <tr>
                                        <th class="th-o"><a href="{{ route('web.show.product',$product->id) }}"><img src="{{$product->images["images"]["200"]}}" alt="{{\App\Providers\MyProvider::_text($product->title)}}" title="{{\App\Providers\MyProvider::_text($product->title)}}" class="img-responsive" /></a></th>
                                        <th><a href="{{ route('web.show.product',$product->id) }}">{{\App\Providers\MyProvider::_text($product->title)}}</a></th>
                                        <th class="th-o">P</th>
                                        <th class="th-o">W</th>
                                        <th class="th-o">L</th>
                                        <th class="th-o">PTS</th>
                                    </tr>
                                @endforeach

                            @endif

                            <tr>
                                <td>4</td>
                                <td class="team-name">
                                    <img src="img/flag/flag-4.jpg" alt="">
                                    <span>Cambodia</span>
                                </td>
                                <td>17</td>
                                <td>2</td>
                                <td>7</td>
                                <td>64</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="team-name">
                                    <img src="img/flag/flag-5.jpg" alt="">
                                    <span>Uzbekistan</span>
                                </td>
                                <td>17</td>
                                <td>2</td>
                                <td>6</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="team-name">
                                    <img src="img/flag/flag-6.jpg" alt="">
                                    <span>Turkme</span>
                                </td>
                                <td>161</td>
                                <td>1</td>
                                <td>8</td>
                                <td>57</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="team-name">
                                    <img src="img/flag/flag-7.jpg" alt="">
                                    <span>Sri Lanka</span>
                                </td>
                                <td>15</td>
                                <td>4</td>
                                <td>8</td>
                                <td>52</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="team-name">
                                    <img src="img/flag/flag-8.jpg" alt="">
                                    <span>Myanmar</span>
                                </td>
                                <td>14</td>
                                <td>3</td>
                                <td>7</td>
                                <td>48</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#" class="p-all">View All</a>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3>Club <span>Ranking</span></h3>
                    </div>
                    <div class="points-table ">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="th-o">Pos</th>
                                <th>Team</th>
                                <th class="th-o">P</th>
                                <th class="th-o">W</th>
                                <th class="th-o">L</th>
                                <th class="th-o">PTS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($newProducts))
                                @foreach($newProducts as $product)
                                    <tr>
                                        <th class="th-o"><a href="{{ route('web.show.product',$product->id) }}"><img src="{{$product->images["images"]["200"]}}" alt="{{\App\Providers\MyProvider::_text($product->title)}}" title="{{\App\Providers\MyProvider::_text($product->title)}}" class="img-responsive" /></a></th>
                                        <th><a href="{{ route('web.show.product',$product->id) }}">{{\App\Providers\MyProvider::_text($product->title)}}</a></th>
                                        <th class="th-o">P</th>
                                        <th class="th-o">W</th>
                                        <th class="th-o">L</th>
                                        <th class="th-o">PTS</th>
                                    </tr>
                                @endforeach

                            @endif

                            <tr>
                                <td>4</td>
                                <td class="team-name">
                                    <img src="img/flag/flag-4.jpg" alt="">
                                    <span>Cambodia</span>
                                </td>
                                <td>17</td>
                                <td>2</td>
                                <td>7</td>
                                <td>64</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="team-name">
                                    <img src="img/flag/flag-5.jpg" alt="">
                                    <span>Uzbekistan</span>
                                </td>
                                <td>17</td>
                                <td>2</td>
                                <td>6</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="team-name">
                                    <img src="img/flag/flag-6.jpg" alt="">
                                    <span>Turkme</span>
                                </td>
                                <td>161</td>
                                <td>1</td>
                                <td>8</td>
                                <td>57</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td class="team-name">
                                    <img src="img/flag/flag-7.jpg" alt="">
                                    <span>Sri Lanka</span>
                                </td>
                                <td>15</td>
                                <td>4</td>
                                <td>8</td>
                                <td>52</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="team-name">
                                    <img src="img/flag/flag-8.jpg" alt="">
                                    <span>Myanmar</span>
                                </td>
                                <td>14</td>
                                <td>3</td>
                                <td>7</td>
                                <td>48</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="#" class="p-all">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Section End -->
@endsection