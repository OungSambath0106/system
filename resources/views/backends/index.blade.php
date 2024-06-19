@extends('backends.master')
@section('page_title')
    Admin Dashboard
@endsection
@push('css')
    <style>
        .amount {
            font-size: 40px !important;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        h4 {
            font-family: Arial, Helvetica, sans-serif;
            color: white;
        }

        .summary-footer a {
            color: white;
        }

        .summary-footer a:hover {
            text-decoration: underline !important;
            color: white;
        }
    </style>
@endpush
@section('contents')
    <div class="section-body">
        <div class="col-md-12 ">
            <div class="row justify-content-center p-4 ">
                <div class="col-xs-6 col-md-4 col-sm-6 text-center">
                    <section class="card bg-warning">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title ">Total Courses</h4>
                                        <div class="info">
                                            <strong class="amount">{{ $totalcourses }}</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a href="{{ route('admin.course.index') }}" class="text text-uppercase">Course
                                            List</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-6 col-md-4 col-sm-6 text-center">
                    <section class="card bg-success">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Total Lessons</h4>
                                        <div class="info">
                                            <strong class="amount">{{ $totallessons }}</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a href="{{ route('admin.lesson.index') }}" class="text text-uppercase">Lessons
                                            List</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-6 col-md-4 col-sm-6 text-center">
                    <section class="card bg-danger">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Total Unread Contact</h4>
                                        <div class="info">
                                            <strong class="amount">{{ $totalunreadcontacts }}</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a href="{{ route('admin.contact.index') }}" class="text text-uppercase">Contact
                                            List</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <section class="card col-md-12 ">
                    <div class="card-body ">
                        <div class="chartjs-size-monitor"
                            style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink"
                                style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="myChart" width="1448" height="723"
                            style="display: block; height: 579px; width: 1159px;" class="chartjs-render-monitor"></canvas>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
