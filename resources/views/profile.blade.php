@extends('layouts.profile')

@section('title', 'Профил')

@section('content')                            
<ol class="breadcrumb">
    <li class=""><a href="{{ url('/') }}">Home</a></li>
    <li class="active"><a href="{{ url('/profile/dashboard') }}">Dashboard</a></li>
</ol>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="info-tile tile-orange">
                <div class="tile-icon"><i class="ti ti-shopping-cart-full"></i></div>
                <div class="tile-heading"><span>Orders</span></div>
                <div class="tile-body"><span>2,150</span></div>
                <div class="tile-footer"><span class="text-success">22.5% <i class="fa fa-level-up"></i></span></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-tile tile-success">
                <div class="tile-icon"><i class="ti ti-bar-chart"></i></div>
                <div class="tile-heading"><span>Revenues</span></div>
                <div class="tile-body"><span>$75,100</span></div>
                <div class="tile-footer"><span class="text-danger">12.7% <i class="fa fa-level-down"></i></span></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-tile tile-info">
                <div class="tile-icon"><i class="ti ti-stats-up"></i></div>
                <div class="tile-heading"><span>Earnings</span></div>
                <div class="tile-body"><span>$40,150</span></div>
                <div class="tile-footer"><span class="text-success">5.2% <i class="fa fa-level-up"></i></span></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="info-tile tile-danger">
                <div class="tile-icon"><i class="ti ti-bar-chart-alt"></i></div>
                <div class="tile-heading"><span>Visitors</span></div>
                <div class="tile-body"><span>12,600</span></div>
                <div class="tile-footer"><span class="text-danger">10.5% <i class="fa fa-level-down"></i></span></div>
            </div>
        </div>
    </div>

    <div data-widget-group="group1">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info" data-widget='{"id" : "wiget9", "draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>Social Stats</h2>
                        <div class="panel-ctrls button-icon-bg" 
                            data-actions-container="" 
                            data-action-collapse='{"target": ".panel-body"}'
                            data-action-colorpicker=''
                            data-action-refresh-demo='{"type": "circular"}'
                            >
                        </div>
                    </div>
                    <div class="panel-editbox" data-widget-controls=""></div>
                    <div class="panel-body">
                        <div id="socialstats" style="height: 272px;" class="mt-sm mb-sm"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-bluegray" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>Earnings Stats</h2>
                        <div class="panel-ctrls button-icon-bg" 
                            data-actions-container="" 
                            data-action-collapse='{"target": ".panel-body"}'
                            data-action-colorpicker=''
                            data-action-refresh-demo='{"type": "circular"}'
                            >
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="earnings" style="height: 272px;" class="mt-sm mb-sm"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-gray" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>Recent Activities</h2>
                        <div class="panel-ctrls button-icon-bg" 
                            data-actions-container="" 
                            data-action-collapse='{"target": ".panel-body"}'
                            data-action-colorpicker=''
                            data-action-refresh-demo='{"type": "circular"}'
                            >
                        </div>
                    </div>
                <!--<div class="panel-body">
                        <ul class="mini-timeline">
                            <li class="mini-timeline-lime">
                                <div class="timeline-icon"></div>
                                <div class="timeline-body">
                                    <div class="timeline-content">
                                        <a href="#/" class="name">Vincent Keller</a> added new task <a href="#/">Admin Dashboard UI</a>
                                        <span class="time">4 mins ago</span>
                                    </div>
                                </div>
                            </li>

                            <li class="mini-timeline-deeporange">
                                <div class="timeline-icon"></div>
                                <div class="timeline-body">
                                    <div class="timeline-content">
                                        <a href="#/" class="name">Shawna Owen</a> added <a href="#/" class="name">Alonzo Keller</a> and <a href="#/" class="name">Mario Bailey</a> to project <a href="#/">Wordpress eCommerce Template</a>
                                        <span class="time">6 mins ago</span>
                                    </div>
                                </div>
                            </li>

                            <li class="mini-timeline-info">
                                <div class="timeline-icon"></div>
                                <div class="timeline-body">
                                    <div class="timeline-content">
                                        <a href="#/" class="name">Christian Delgado</a> commented on thread <a href="#/">Frontend Template PSD</a>
                                        <span class="time">12 mins ago</span>
                                    </div>
                                </div>
                            </li>

                            <li class="mini-timeline-indigo">
                                <div class="timeline-icon"></div>
                                <div class="timeline-body">
                                    <div class="timeline-content">
                                        <a href="#/" class="name">Jonathan Smith</a> added <a href="#/" class="name">Frend Pratt</a> and <a href="#/" class="name">Robin Horton</a> to project <a href="#/">Material Design Admin Template</a>
                                        <span class="time">6 hours ago</span>
                                    </div>
                                </div>
                            </li>
                            <li class="mini-timeline-default">
                                <div class="timeline-body ml-n">
                                    <div class="timeline-content">
                                        <button type="button" data-loading-text="Loading..." class="loading-example-btn btn btn-sm btn-default">See more</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div> -->
                    <div class="panel-body scroll-pane" style="height: 320px;">
                        <div class="scroll-content">
                            <ul class="mini-timeline">
                                <li class="mini-timeline-lime">
                                    <div class="timeline-icon"></div>
                                    <div class="timeline-body">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">Vincent Keller</a> added new task <a href="#/">Admin Dashboard UI</a>
                                            <span class="time">4 mins ago</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="mini-timeline-deeporange">
                                    <div class="timeline-icon"></div>
                                    <div class="timeline-body">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">Shawna Owen</a> added <a href="#/" class="name">Alonzo Keller</a> and <a href="#/" class="name">Mario Bailey</a> to project <a href="#/">Wordpress eCommerce Template</a>
                                            <span class="time">6 mins ago</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="mini-timeline-info">
                                    <div class="timeline-icon"></div>
                                    <div class="timeline-body">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">Christian Delgado</a> commented on thread <a href="#/">Frontend Template PSD</a>
                                            <span class="time">12 mins ago</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="mini-timeline-indigo">
                                    <div class="timeline-icon"></div>
                                    <div class="timeline-body">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">Jonathan Smith</a> added <a href="#/" class="name">Frend Pratt</a> and <a href="#/" class="name">Robin Horton</a> to project <a href="#/">Material Design Admin Template</a>
                                            <span class="time">6 hours ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="mini-timeline-lime">
                                    <div class="timeline-icon"></div>
                                    <div class="timeline-body">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">Vincent Keller</a> added new task <a href="#/">Admin Dashboard UI</a>
                                            <span class="time">4 mins ago</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="mini-timeline-deeporange">
                                    <div class="timeline-icon"></div>
                                    <div class="timeline-body">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">Shawna Owen</a> added <a href="#/" class="name">Alonzo Keller</a> and <a href="#/" class="name">Mario Bailey</a> to project <a href="#/">Wordpress eCommerce Template</a>
                                            <span class="time">6 mins ago</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="mini-timeline-info">
                                    <div class="timeline-icon"></div>
                                    <div class="timeline-body">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">Christian Delgado</a> commented on thread <a href="#/">Frontend Template PSD</a>
                                            <span class="time">12 mins ago</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="mini-timeline-indigo">
                                    <div class="timeline-icon"></div>
                                    <div class="timeline-body">
                                        <div class="timeline-content">
                                            <a href="#/" class="name">Jonathan Smith</a> added <a href="#/" class="name">Frend Pratt</a> and <a href="#/" class="name">Robin Horton</a> to project <a href="#/">Material Design Admin Template</a>
                                            <span class="time">6 hours ago</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="mini-timeline-default">
                                    <div class="timeline-body ml-n">
                                        <div class="timeline-content">
                                            <button type="button" data-loading-text="Loading..." class="loading-example-btn btn btn-sm btn-default">See more</button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-white" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>New Members</h2>
                        <div class="panel-ctrls button-icon-bg" 
                            data-actions-container="" 
                            data-action-refresh-demo='{"type": "circular"}'
                            >
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul class="widget-avatar">
                            <li><img src="{{ asset('/assets/profile/demo/avatar/avatar_01.png') }}" alt=""/></li>
                            <li><img src="{{ asset('/assets/profile/demo/avatar/avatar_02.png') }}" alt=""/></li>
                            <li><img src="{{ asset('/assets/profile/demo/avatar/avatar_03.png') }}" alt=""/></li>
                            <li><img src="{{ asset('/assets/profile/demo/avatar/avatar_04.png') }}" alt=""/></li>
                            <li><img src="{{ asset('/assets/profile/demo/avatar/avatar_05.png') }}" alt=""/></li>
                        </ul>
                        <button class="btn btn-block btn-primary">View More</button>
                    </div>
                </div>

                <div class="panel panel-white" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>Online Now</h2>
                        <div class="panel-ctrls button-icon-bg" 
                            data-actions-container="" 
                            data-action-refresh-demo='{"type": "circular"}'
                            >
                        </div>
                    </div>
                    <div class="panel-body">
                        <ul class="widget-avatar">
                            <li data-status="online"><img src="{{ asset('/assets/profile/demo/avatar/avatar_01.png') }}" alt=""/></li>
                            <li data-status="online"><img src="{{ asset('/assets/profile/demo/avatar/avatar_02.png') }}" alt=""/></li>
                            <li data-status="online"><img src="{{ asset('/assets/profile/demo/avatar/avatar_03.png') }}" alt=""/></li>
                            <li data-status="away"><img src="{{ asset('/assets/profile/demo/avatar/avatar_04.png') }}" alt=""/></li>
                            <li data-status="busy"><img src="{{ asset('/assets/profile/demo/avatar/avatar_05.png') }}" alt=""/></li>
                        </ul>
                        <button class="btn btn-block btn-success">Contact List</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">

                <div class="panel panel-midnightblue widget-progress" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>Progress</h2>
                        <div class="panel-ctrls button-icon-bg" 
                            data-actions-container="" 
                            data-action-refresh-demo='{"type": "circular"}'
                            >
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="easypiechart mb-md" id="progress" data-percent="37">
                            <span class="percent-non"></span>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="tabular">
                            <div class="tabular-row">
                                <div class="tabular-cell">
                                    <span class="status-total">Total</span>
                                    <span class="status-value">100</span>
                                </div>
                                <div class="tabular-cell">
                                    <span class="status-pending">Pending</span>
                                    <span class="status-value">63</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget-weather">
                    <div class="pull-left">
                        <span class="weather-location">Toronto, CA</span>
                        <span class="weather-desc">Sunny</span>
                    </div>
                    <div class="pull-right">
                        <span class="weather-temp">16<span>ºC</span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>Visitor Stats</h2>
                        <div class="panel-ctrls button-icon-bg" 
                            data-actions-container="" 
                            data-action-collapse='{"target": ".panel-body"}'
                            data-action-colorpicker=''
                            data-action-refresh-demo='{"type": "circular"}'
                            >
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="spark-container mb-xl">
                                    <div class="pull-left">
                                        <h2 class="title" style="color: #cddc39">Pageviews</h2>
                                        <h3 class="number">19,600</h3>
                                    </div>
                                    <div class="pull-right">
                                        <h2 class="title" style="color: #ff5722; text-align: right;">Sessions</h2>
                                        <h3 class="number">1,200</h3>
                                    </div>

                                    <div class="spark-pageviews"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="newvsreturning" style="height: 144px" class="mt-md mb-md"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="spark-container">
                                    <h2 class="title">Users</h2>
                                    <h3 class="number">700</h3>
                                    <div class="spark-users"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spark-container">
                                    <h2 class="title">Avg. Duration</h2>
                                    <h3 class="number">00:04:36</h3>
                                    <div class="spark-avgduration"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spark-container">
                                    <h2 class="title">Page/Session</h2>
                                    <h3 class="number">4.20</h3>
                                    <div class="spark-pagesession"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="spark-container">
                                    <h2 class="title">Bounce Rate</h2>
                                    <h3 class="number">52.10%</h3>
                                    <div class="spark-bouncerate"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-teal" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>Browsers</h2>
                        <div class="panel-ctrls button-icon-bg" 
                            data-actions-container="" 
                            data-action-collapse='{"target": ".panel-body"}'
                            data-action-colorpicker=''
                            data-action-refresh-demo='{"type": "circular"}'
                            >
                        </div>
                    </div>
                    <div class="panel-body no-padding">
                        <table class="table browsers m-n">
                            <tbody>
                                <tr>
                                    <td>Google Chrome</td>
                                    <td class="text-right">43.7%</td>
                                    <td class="vam" style="width: 56px;">
                                        <div class="progress m-n">
                                          <div class="progress-bar progress-bar-teal" style="width: 100%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Firefox</td>
                                    <td class="text-right">20.5%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                          <div class="progress-bar progress-bar-teal" style="width: 50%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Opera</td>
                                    <td class="text-right">14.6%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                          <div class="progress-bar progress-bar-teal" style="width: 40%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Safari</td>
                                    <td class="text-right">9.1%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                          <div class="progress-bar progress-bar-teal" style="width: 25%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Internet Explorer</td>
                                    <td class="text-right">5.3%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                          <div class="progress-bar progress-bar-teal" style="width: 12.5%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Torch</td>
                                    <td class="text-right">2.9%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                          <div class="progress-bar progress-bar-teal" style="width: 9%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Maxthon</td>
                                    <td class="text-right">2.3%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                          <div class="progress-bar progress-bar-teal" style="width: 6%"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Others</td>
                                    <td class="text-right">1.6%</td>
                                    <td class="vam">
                                        <div class="progress m-n">
                                          <div class="progress-bar progress-bar-teal" style="width: 3%"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-realtime" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>Real-Time</h2>
                        <div class="panel-ctrls mr-n">
                            <div class="mt-md mb-md">
                                <input type="checkbox" class="js-switch-success switchery-xs" checked />
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <span class="rightnow">Right Now</span>
                        <span class="number">20</span>
                        <span class="activeuser">active Users right now</span>
                        <div id="realtime-updates" style="height: 112px" class="centered"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-white" data-widget='{"draggable": "false"}'>
                    <div class="panel-heading">
                        <h2>World Map</h2>
                        <div class="panel-ctrls button-icon-bg" 
                            data-actions-container="" 
                            data-action-collapse='{"target": ".panel-body"}'
                            data-action-colorpicker=''
                            data-action-refresh-demo='{"type": "circular"}'
                            >
                        </div>
                    </div>
                    <div class="panel-body">
                        <div id="worldmap" style="height: 272px; width: 100%;" class="mt-sm mb-sm"></div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div> <!-- .container-fluid --> 
@stop