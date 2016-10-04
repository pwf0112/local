@extends('inc.base')

@section('header')
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">系统测试</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    {{--<li class=""><a href="#">占位</a></li>--}}
                    {{--<li><a href="#">占位</a></li>--}}
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">收银机 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">添加收银机</a></li>
                            {{--<li><a href="#">Another action</a></li>--}}
                            {{--<li><a href="#">Something else here</a></li>--}}
                            {{--<li class="divider"></li>--}}
                            {{--<li><a href="#">Separated link</a></li>--}}
                            {{--<li class="divider"></li>--}}
                            {{--<li><a href="#">One more separated link</a></li>--}}
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="检索">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> 彭未峰 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">BUG反馈</a></li>
                            <li><a href="#">退出</a></li>
                            {{--<li><a href="#">Something else here</a></li>--}}
                            <li class="divider"></li>
                            <li><a href="#">关于系统</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@stop

@section('content')

@stop