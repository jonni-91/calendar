@extends('person.app')
@section('head_title')Домашняя страница@endsection
@section('content')
    @include('component.left_bar')
    <!-- CONTENT -->
    <div id="content" data-uk-height-viewport="expand: true">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid uk-grid-divider uk-grid-medium uk-child-width-1-2 uk-child-width-1-4@l uk-child-width-1-5@xl" data-uk-grid>
                <div>
                    <span class="uk-text-small"><span data-uk-icon="icon:users" class="uk-margin-small-right uk-text-primary"></span>New Users</span>
                    <h1 class="uk-heading-primary uk-margin-remove  uk-text-primary">2.134</h1>
                    <div class="uk-text-small">
                        <span class="uk-text-success" data-uk-icon="icon: triangle-up">15%</span> more than last week.
                    </div>
                </div>
                <div>

                    <span class="uk-text-small"><span data-uk-icon="icon:social" class="uk-margin-small-right uk-text-primary"></span>Social Media</span>
                    <h1 class="uk-heading-primary uk-margin-remove uk-text-primary">8.490</h1>
                    <div class="uk-text-small">
                        <span class="uk-text-warning" data-uk-icon="icon: triangle-down">-15%</span> less than last week.
                    </div>

                </div>
                <div>

                    <span class="uk-text-small"><span data-uk-icon="icon:clock" class="uk-margin-small-right uk-text-primary"></span>Traffic hours</span>
                    <h1 class="uk-heading-primary uk-margin-remove uk-text-primary">12.00<small class="uk-text-small">PM</small></h1>
                    <div class="uk-text-small">
                        <span class="uk-text-success" data-uk-icon="icon: triangle-up"> 19%</span> more than last week.
                    </div>

                </div>
                <div>

                    <span class="uk-text-small"><span data-uk-icon="icon:search" class="uk-margin-small-right uk-text-primary"></span>Week Search</span>
                    <h1 class="uk-heading-primary uk-margin-remove uk-text-primary">9.543</h1>
                    <div class="uk-text-small">
                        <span class="uk-text-danger" data-uk-icon="icon: triangle-down"> -23%</span> less than last week.
                    </div>

                </div>
                <div class="uk-visible@xl">
                    <span class="uk-text-small"><span data-uk-icon="icon:users" class="uk-margin-small-right uk-text-primary"></span>Lorem ipsum</span>
                    <h1 class="uk-heading-primary uk-margin-remove uk-text-primary">5.284</h1>
                    <div class="uk-text-small">
                        <span class="uk-text-success" data-uk-icon="icon: triangle-up"> 7%</span> more than last week.
                    </div>
                </div>
            </div>
            <hr>
            <div class="uk-grid uk-grid-medium" data-uk-grid uk-sortable="handle: .sortable-icon">

                <!-- panel -->
                <div class="uk-width-1-2@l">
                    <div class="uk-card uk-card-default uk-card-small uk-card-hover">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4>Sales Chart</h4></div>
                                <div class="uk-width-expand uk-text-right panel-icons">
                                    <a href="#" class="uk-icon-link sortable-icon" title="Move" data-uk-tooltip data-uk-icon="icon: move"></a>
                                    <a href="#" class="uk-icon-link" title="Configuration" data-uk-tooltip data-uk-icon="icon: cog"></a>
                                    <a href="#" class="uk-icon-link" title="Close" data-uk-tooltip data-uk-icon="icon: close"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="chart-container">
                                <canvas id="chart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
                <!-- panel -->
                <div class="uk-width-1-2@l">
                    <div class="uk-card uk-card-default uk-card-small uk-card-hover">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4>Predictions Chart</h4></div>
                                <div class="uk-width-expand uk-text-right panel-icons">
                                    <a href="#" class="uk-icon-link sortable-icon" title="Move" data-uk-tooltip data-uk-icon="icon: move"></a>
                                    <a href="#" class="uk-icon-link" title="Configuration" data-uk-tooltip data-uk-icon="icon: cog"></a>
                                    <a href="#" class="uk-icon-link" title="Close" data-uk-tooltip data-uk-icon="icon: close"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="chart-container">
                                <canvas id="chart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
                <!-- panel -->
                <div class="uk-width-1-1 uk-width-1-3@l uk-width-1-2@xl">
                    <div class="uk-card uk-card-default uk-card-small uk-card-hover">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4>Activity Chart</h4></div>
                                <div class="uk-width-expand uk-text-right panel-icons">
                                    <a href="#" class="uk-icon-link sortable-icon" title="Move" data-uk-tooltip data-uk-icon="icon: move"></a>
                                    <a href="#" class="uk-icon-link" title="Configuration" data-uk-tooltip data-uk-icon="icon: cog"></a>
                                    <a href="#" class="uk-icon-link" title="Close" data-uk-tooltip data-uk-icon="icon: close"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="chart-container">
                                <canvas id="chart3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
                <!-- panel -->
                <div class="uk-width-1-2@s uk-width-1-3@l uk-width-1-4@xl">
                    <div class="uk-card uk-card-default uk-card-small uk-card-hover">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4>Distribution Chart</h4></div>
                                <div class="uk-width-expand uk-text-right panel-icons">
                                    <a href="#" class="uk-icon-link sortable-icon" title="Move" data-uk-tooltip data-uk-icon="icon: move"></a>
                                    <a href="#" class="uk-icon-link" title="Configuration" data-uk-tooltip data-uk-icon="icon: cog"></a>
                                    <a href="#" class="uk-icon-link" title="Close" data-uk-tooltip data-uk-icon="icon: close"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="chart-container">
                                <canvas id="chart4"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
                <!-- panel -->
                <div class="uk-width-1-2@s uk-width-1-3@l uk-width-1-4@xl">
                    <div class="uk-card uk-card-default uk-card-small uk-card-hover">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small">
                                <div class="uk-width-auto"><h4>Population Chart</h4></div>
                                <div class="uk-width-expand uk-text-right panel-icons">
                                    <a href="#" class="uk-icon-link sortable-icon" title="Move" data-uk-tooltip data-uk-icon="icon: move"></a>
                                    <a href="#" class="uk-icon-link" title="Configuration" data-uk-tooltip data-uk-icon="icon: cog"></a>
                                    <a href="#" class="uk-icon-link" title="Close" data-uk-tooltip data-uk-icon="icon: close"></a>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-body">
                            <div class="chart-container">
                                <canvas id="chart5"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /panel -->
            </div>
            <footer class="uk-section uk-section-small uk-text-center">
                <hr>
                <p class="uk-text-small uk-text-center">Copyright 2019 - <a href="https://github.com/zzseba78/Kick-Off">Created by KickOff</a> | Built with <a href="http://getuikit.com" title="Visit UIkit 3 site" target="_blank" data-uk-tooltip><span data-uk-icon="uikit"></span></a> </p>
            </footer>
        </div>
    </div>
    <!-- /CONTENT -->
    <!-- OFFCANVAS -->
    <div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
            <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
            <ul class="uk-nav uk-nav-default">
                <li class="uk-active"><a href="#">Active</a></li>
                <li class="uk-parent">
                    <a href="#">Parent</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Sub item</a></li>
                        <li><a href="#">Sub item</a></li>
                    </ul>
                </li>
                <li class="uk-nav-header">Header</li>
                <li><a href="#js-options"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: table"></span> Item</a></li>
                <li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: thumbnails"></span> Item</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: trash"></span> Item</a></li>
            </ul>
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <!-- /OFFCANVAS -->
@endsection
