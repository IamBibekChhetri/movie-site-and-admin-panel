@extends('admin.layout.master')
@section('content')
<h1>Welcome VIVEK</h1>
<div class="section-block">
    <!-- metric row -->
    <div class="metric-row">
        <div class="col-lg-3">
            <div class="panel panel-primary">
                <!-- .metric -->
                <a href="{{asset('admin/releaseMovie')}}" class="metric metric-bordered align-items-center">
                    <h2 class="metric-label text-danger"> Total Release Movies </h2>
                    <p class="metric-value h3">
                        <sub><i class="fa fa-film fa-fw text-danger"></i></sub> <span class="value">

                     <!-- Count here total release movies  -->

                        </span>
                    </p>
                </a> <!-- /.metric -->
            </div><!-- /metric column -->
        </div>

        <div class="col-lg-3">
            <!-- .metric -->
            <a href="{{asset('admin/upcomingMovie')}}" class="metric metric-bordered align-items-center">
                <h2 class="metric-label text-success">Total Upcoming Movies </h2>
                <p class="metric-value h3">
                    <sub><i class="fa fa-film fa-fw text-success"></i></sub> <span class="value">



                    </span>
                </p>
            </a> <!-- /.metric -->
        </div><!-- /metric column -->
        <div class="col-lg-3">
            <!-- .metric -->
            <a href="{{asset('admin/trailor')}}" class="metric metric-bordered align-items-center">
                <h2 class="metric-label text-warning">Total Trailor </h2>
                <p class="metric-value h3">
                    <sub><i class="fas fa-video text-warning"></i></sub> <span class="value">



                    </span>
                </p>
            </a> <!-- /.metric -->
        </div><!-- /metric column -->

        <div class="col-lg-3">
            <!-- .metric -->
            <a href="{{asset('admin/user')}}" class="metric metric-bordered align-items-center">
                <h2 class="metric-label text-danger">Total User </h2>
                <p class="metric-value h3">
                    <sub><i class="fa fa-user text-danger fa-fw"></i> </span></sub> <span class="value">



                    </span>
                </p>
            </a> <!-- /.metric -->
        </div><!-- /metric column -->

        @endsection