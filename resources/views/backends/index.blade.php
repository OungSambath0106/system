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
            color: rgb(87, 158, 255);
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


                <div class="col-lg-3 col-sm-6">
                    <div
                        class="small-box bg-white d-flex p-3 justify-content-between align-items-center dashboard_summary_box dashboard_shadow">
                        <div class="rounded-circle bg-light p-2" style="height: 70px; width: 70px;">
                            <div style="padding:13px;">
                                <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke="#579EFF" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" d="M1 2h16v11H1z" />
                                    <path fill="none" stroke="#579EFF" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-miterlimit="10"
                                        d="M4 5.5v5s3-1 5 0v-5s-2-2-5 0zM9 5.5v5s3-1 5 0v-5s-2-2-5 0z" />
                                    <path fill="#579EFF" stroke="#579EFF" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-miterlimit="10" d="M8.5 14l-3 3h7l-3-3z" />
                                </svg>
                            </div>
                        </div>
                        <div class="inner text-right">
                            {{-- <h3>{{ App\helpers\AppHelper::dashboardQuery()['total_event'] }}</h3> --}}
                            <h4>{{ $totalcourses }}</h4>
                            <p class="m-0 text-uppercase">{{ __('Total Course') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div
                        class="small-box bg-white d-flex p-3 justify-content-between align-items-center dashboard_summary_box dashboard_shadow">
                        <div class="rounded-circle bg-light p-2" style="height: 70px; width: 70px;">
                            <div style="padding:12px;">
                                <?xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 12V4C20 2.89543 19.1046 2 18 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V18.5"
                                        stroke="#579EFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13 2V14L16.8182 11L20 14V5" stroke="#579EFF" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="inner text-right">
                            {{-- <h3>{{ App\helpers\AppHelper::dashboardQuery()['total_both'] }}</h3> --}}
                            <h4>{{ $totallessons }}</h4>
                            <p class="m-0 text-uppercase">{{ __('Total Lessons') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div
                        class="small-box bg-white d-flex p-3 justify-content-between align-items-center dashboard_summary_box dashboard_shadow">
                        <div class="rounded-circle bg-light p-1" style="height: 70px; width: 70px;">
                            <div style="padding: 10px">
                                <svg viewBox="0 0 24 24" x="0px" y="0px" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="6" r="4" stroke="#579EFF" stroke-width="1" />
                                    <path
                                        d="M19.9975 18C20 17.8358 20 17.669 20 17.5C20 15.0147 16.4183 13 12 13C7.58172 13 4 15.0147 4 17.5C4 19.9853 4 22 12 22C14.231 22 15.8398 21.8433 17 21.5634"
                                        stroke="#579EFF" stroke-width="1" stroke-linecap="round" />
                                </svg>
                            </div>
                        </div>
                        <div class="inner text-right">
                            <h4>{{ 10 }}</h4>
                            <p class="m-0 text-uppercase">{{ __('Total User') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div
                        class="small-box bg-white d-flex p-3 justify-content-between align-items-center dashboard_summary_box dashboard_shadow">
                        <div class="rounded-circle bg-light p-2" style="height: 70px; width: 70px;">
                            <div style="padding:10px;">
                                <?xml version="1.0" encoding="utf-8"?>

                                <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                                <svg fill="#579EFF" version="1.1" id="XMLID_276_" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
                                    <g id="contact-us">
                                        <g>
                                            <path d="M4,24v-5H0V0h23v19h-9.3L4,24z M2,17h4v3.7l7.3-3.7H21V2H2V17z" />
                                        </g>
                                        <g>
                                            <rect x="5" y="8" width="3" height="3" />
                                        </g>
                                        <g>
                                            <rect x="10" y="8" width="3" height="3" />
                                        </g>
                                        <g>
                                            <rect x="15" y="8" width="3" height="3" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="inner text-right">
                            <h4>{{ $totalunreadcontacts }}</h4>
                            <p class="m-0 text-uppercase">{{ __('Contact Us') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="far fa-chart-bar"></i>
                                Bar Chart
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="bar-chart" style="height: 300px; padding: 0px; position: relative;"><canvas
                                    class="flot-base" width="527" height="375"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 421.6px; height: 300px;"></canvas><canvas
                                    class="flot-overlay" width="527" height="375"
                                    style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 421.6px; height: 300px;"></canvas>
                                <div class="flot-svg"
                                    style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;">
                                    <svg style="width: 100%; height: 100%;">
                                        <g class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                            style="position: absolute; inset: 0px;"><text x="83.13203048706055" y="294"
                                                class="flot-tick-label tickLabel"
                                                style="position: absolute; text-align: center;">February</text><text
                                                x="158.14999885559084" y="294" class="flot-tick-label tickLabel"
                                                style="position: absolute; text-align: center;">March</text><text
                                                x="227.91875019073487" y="294" class="flot-tick-label tickLabel"
                                                style="position: absolute; text-align: center;">April</text><text
                                                x="295.2519527435303" y="294" class="flot-tick-label tickLabel"
                                                style="position: absolute; text-align: center;">May</text><text
                                                x="20.69218711853027" y="294" class="flot-tick-label tickLabel"
                                                style="position: absolute; text-align: center;">January</text><text
                                                x="357.73203163146974" y="294" class="flot-tick-label tickLabel"
                                                style="position: absolute; text-align: center;">June</text></g>
                                        <g class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                            style="position: absolute; inset: 0px;"><text x="8.952343940734863" y="269"
                                                class="flot-tick-label tickLabel"
                                                style="position: absolute; text-align: right;">0</text><text
                                                x="8.952343940734863" y="205.5" class="flot-tick-label tickLabel"
                                                style="position: absolute; text-align: right;">5</text><text x="1"
                                                y="15" class="flot-tick-label tickLabel"
                                                style="position: absolute; text-align: right;">20</text><text x="1"
                                                y="142" class="flot-tick-label tickLabel"
                                                style="position: absolute; text-align: right;">10</text><text x="1"
                                                y="78.5" class="flot-tick-label tickLabel"
                                                style="position: absolute; text-align: right;">15</text></g>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('bar-chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Category 1', 'Category 2', 'Category 3'],
                datasets: [{
                    label: 'Total Views',
                    data: [1500, 3000, 1200],
                    backgroundColor: 'skyblue'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>
@endpush
