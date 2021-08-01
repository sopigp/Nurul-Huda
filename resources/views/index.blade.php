@extends('header')
@extends('navbar')
@extends('footer')
@section('content')
                </div><!--//intro-->
                <div id="cards-wrapper" class="cards-wrapper row">
                    <div class="item item-green col-md-4 col-sm-6 col-xs-12">
                        <div class="item-inner">
                            <div class="icon-holder">
                                @foreach($master_data as $md)
                                <img src="{{url('/asset/content/masterdata.png')}}" width="65" height="50">
                            </div><!--//icon-holder-->
                            <h3 class="title">{!! $md->name !!}</h3>
                            <p class="intro">{!! $md->subject !!}</p>
                            <a class="link" href=""><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                                @endforeach
                    <div class="item item-blue col-md-4 col-sm-6 col-xs-12">
                        <div class="item-inner">
                            <div class="icon-holder">
                                @foreach($firefly as $fly)
                                <img src="{{url('/asset/content/firefly.png')}}" height="46">
                            </div><!--//icon-holder-->
                            <h3 class="title">{!! $fly->name !!}</h3>
                            <p class="intro">{!! $fly->subject !!}</p>
                            <a class="link" href="https://firefly.ppnh.my.id/public"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                                @endforeach
                    <div class="item item-blue col-md-4 col-sm-6 col-xs-12">
                        <div class="item-inner">
                            <div class="icon-holder">
                                @foreach($onedrive as $drive)
                                <img src="{{url('/asset/content/onedrive.png')}}" height="46">
                            </div><!--//icon-holder-->
                            <h3 class="title">{!! $drive->name !!}</h3>
                            <p class="intro">{!! $drive->subject !!}</p>
                            <a class="link" href="https://mambaululumgenito.sharepoint.com/sites/pPNH/"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                                @endforeach
                    <div class="item item-blue col-md-4 col-sm-6 col-xs-12">
                        <div class="item-inner">
                            <div class="icon-holder">
                                @foreach($wordpress as $wp)
                                <img src="{{url('/asset/content/wordpress.png')}}" height="46">
                            </div><!--//icon-holder-->
                            <h3 class="title">{!! $wp->name !!}</h3>
                            <p class="intro">{!! $wp->subject !!}</p>
                            <a class="link" href="https://ppnh.my.id/wp-admin"><span></span></a>
                        </div><!--//item-inner-->
                    </div><!--//item-->
                                @endforeach


@endsection

               

    