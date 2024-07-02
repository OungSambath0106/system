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
                            <h4>{{ $totalusers }}</h4>
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

                <section class=" col-md-12 ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        {{ __('Top Views') }}
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
                                    <canvas id="bar-chartTopviews" style="height: 400px;"></canvas>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        {{ __('Top Views of Month') }}
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
                                    <canvas id="bar-chartcountbymonth" style="height: 400px;"></canvas>
                                </div>

                            </div>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        Top Views of month
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
                                    <canvas id="myChart" width="1448" height="730px"
                                        style="display: block; height: 579px; width: 1159px;"></canvas>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </section>
                {{-- <section class="card col-md-12 ">
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
                </section> --}}
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('bar-chartTopviews').getContext('2d');
            var rankedLessons = @json($rankedLessons); // Convert PHP array to JavaScript array

            var lessonTitles = [];
            var lessonViews = [];

            // Extract lesson titles and views for top 5 lessons
            rankedLessons.forEach(function(lesson) {
                lessonTitles.push(lesson.title);
                lessonViews.push(lesson.total_views);
            });

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        'Top 1', 'Top 2', 'Top 3', 'Top 4', 'Top 5'
                    ],
                    datasets: [{
                        label: 'Top Lessons Views',
                        data: lessonViews,
                        backgroundColor: [
                            'rgba(31, 58, 147, 1)',
                            'rgba(37, 116, 169, 1)',
                            'rgba(92, 151, 191, 1)',
                            'rgb(200, 247, 197)',
                            'rgb(77, 175, 124)',
                            'rgb(30, 130, 76)'
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    var index = tooltipItem.dataIndex;
                                    var value = tooltipItem.raw;
                                    return lessonTitles[index] + ': ' + value;
                                }
                            }
                        }
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('bar-chartcountbymonth').getContext('2d');
            var topLessons = @json($topLessons); // Convert PHP array to JavaScript array
            var viewsByMonth = @json($viewsByMonth);

            var lessonTitles = [];
            var lessonViews = [];

            // Extract lesson titles and views for top 5 lessons
            topLessons.forEach(function(lesson) {
                lessonTitles.push(lesson.title);
                lessonViews.push(lesson.total_views);
            });

            // Initialize an array to store total views by month (Jan to Dec)
            var dataByMonth = Array(12).fill(0);

            // Map the viewsByMonth data to the correct month index
            viewsByMonth.forEach(function(item) {
                dataByMonth[item.month - 1] = item.total_views;
            });

            // Configuration options for the chart
            var config = {
                type: 'bar',
                data: {
                    labels: [
                        'Top 1', 'Top 2', 'Top 3', 'Top 4', 'Top 5'
                    ],
                    datasets: [{
                        label: 'Top Lessons by Views',
                        data: lessonViews,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)', // Red
                            'rgba(54, 162, 235, 0.5)', // Blue
                            'rgba(255, 206, 86, 0.5)', // Yellow
                            'rgba(75, 192, 192, 0.5)', // Teal
                            'rgba(153, 102, 255, 0.5)' // Purple
                        ],

                    }, {
                        label: 'Views by Month',
                        data: dataByMonth,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    var dataset = tooltipItem.dataset;
                                    var index = tooltipItem.dataIndex;
                                    var label = dataset.label ? dataset.label : '';
                                    var value = dataset.data[index];
                                    if (label === 'Views by Month') {
                                        return 'Views in Month ' + (index + 1) + ': ' + value;
                                    } else {
                                        return lessonTitles[index] + ': ' + value;
                                    }
                                }
                            }
                        },
                        legend: {
                            display: false // Hide the legend
                        }
                    }
                }
            };

            // Initialize the chart
            var myChart = new Chart(ctx, config);
        });
    </script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('bar-chartcountbymonth').getContext('2d');
            var topLessons = @json($topLessons); // Convert PHP array to JavaScript array
            var viewsByMonth = @json($viewsByMonth);

            var lessonTitles = [];
            var lessonViews = [];

            // Extract lesson titles and views for top 5 lessons
            topLessons.forEach(function(lesson) {
                lessonTitles.push(lesson.title);
                lessonViews.push(lesson.total_views);
            });

            // Initialize an array to store total views by month (Jan to Dec)
            var dataByMonth = Array(12).fill(0);

            // Map the viewsByMonth data to the correct month index
            viewsByMonth.forEach(function(item) {
                dataByMonth[item.month - 1] = item.total_views;
            });

            // Configuration options for the chart
            var config = {
                type: 'bar',
                data: {
                    labels: [
                        'Top 1', 'Top 2', 'Top 3', 'Top 4', 'Top 5'
                    ],
                    datasets: [{
                        label: 'Top Lessons by Views',
                        data: lessonViews,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)', // Red
                            'rgba(54, 162, 235, 0.5)', // Blue
                            'rgba(255, 206, 86, 0.5)', // Yellow
                            'rgba(75, 192, 192, 0.5)', // Teal
                            'rgba(153, 102, 255, 0.5)' // Purple
                        ],

                    }, {
                        label: 'Views by Month',
                        data: dataByMonth,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    var dataset = tooltipItem.dataset;
                                    var index = tooltipItem.dataIndex;
                                    var label = dataset.label ? dataset.label : '';
                                    var value = dataset.data[index];
                                    if (label === 'Views by Month') {
                                        var monthNames = ['January', 'February', 'March', 'April', 'May',
                                            'June', 'July', 'August', 'September', 'October',
                                            'November', 'December'
                                        ];
                                        return 'Views in ' + monthNames[index] + ': ' + value;
                                    } else {
                                        return lessonTitles[index] + ': ' + value;
                                    }
                                }
                            }
                        },
                        legend: {
                            display: false // Hide the legend
                        }
                    }
                }
            };

            // Initialize the chart
            var myChart = new Chart(ctx, config);
        });
    </script> --}}
@endpush
