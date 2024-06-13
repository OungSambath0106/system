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
                <div class="col-xs-6 col-md-3 col-sm-6 text-center">
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
                                        <a href="{{ route('admin.course.index') }}" class="text text-uppercase">Course List</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-6 col-md-3 col-sm-6 text-center">
                    <section class="card bg-info">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Total Lessons</h4>
                                        <div class="info">
                                            <strong class="amount">3</strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a href="{{ route('admin.course.index') }}" class="text text-uppercase">
                                            Lesson List
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-xs-6 col-md-3 col-sm-6 text-center">
                    <section class="card bg-success">
                        <div class="card-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Total Contacts</h4>
                                        <div class="info">
                                            <strong class="amount">{{ $totalcontacts }}</strong>

                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a href="{{ route('admin.course.index') }}"
                                            class="text text-uppercase">Recruitments
                                            List</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush
