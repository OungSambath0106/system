@extends('backends.master')
@section('contents')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Edit Email Config') }}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <form method="POST" action="{{ route('admin.update_email_config') }}">
                        @csrf
                        <div class="card ">
                            <div class="card-header">
                                <h3 class="card-title">{{ __('General Info') }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 ">
                                        <label class="" for="MAIL_MAILER">{{ __('Mail Mailer') }}</label>
                                        <input type="text" id="MAIL_MAILER" name="MAIL_MAILER"
                                            value="{{ env('MAIL_MAILER') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="MAIL_HOST">{{ __('Mail Host:') }}</label><br>
                                        <input type="text" id="MAIL_HOST" name="MAIL_HOST" value="{{ env('MAIL_HOST') }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="MAIL_PORT">{{ __('Mail Port:') }}</label><br>
                                        <input type="number" id="MAIL_PORT" name="MAIL_PORT" value="{{ env('MAIL_PORT') }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="MAIL_USERNAME">{{ __('Mail Username:') }}</label><br>
                                        <input type="text" id="MAIL_USERNAME" name="MAIL_USERNAME"
                                            value="{{ env('MAIL_USERNAME') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="MAIL_PASSWORD">{{ __('Mail Password:') }}</label><br>
                                        <input type="password" id="MAIL_PASSWORD" name="MAIL_PASSWORD"
                                            value="{{ env('MAIL_PASSWORD') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="MAIL_ENCRYPTION">{{ __('Mail Encryption:') }}</label><br>
                                        <input type="text" id="MAIL_ENCRYPTION" name="MAIL_ENCRYPTION"
                                            value="{{ env('MAIL_ENCRYPTION') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="MAIL_FROM_ADDRESS">{{ __('Mail From Address:') }}</label><br>
                                        <input type="email" id="MAIL_FROM_ADDRESS" name="MAIL_FROM_ADDRESS"
                                            value="{{ env('MAIL_FROM_ADDRESS') }}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6 ">
                                        <label for="MAIL_FROM_NAME">{{ __('Mail From Name:') }}</label><br>
                                        <input type="text" id="MAIL_FROM_NAME" name="MAIL_FROM_NAME"
                                            value="{{ env('MAIL_FROM_NAME') }}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                @if (auth()->user()->can('emailconfig.update'))
                                    <button type="submit" class="btn btn-primary float-right">
                                        <i class="fa fa-save"></i>
                                        {{ __('Save') }}
                                    </button>
                                @endif

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
