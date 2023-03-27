@extends('adminlte::page')

@section('title', __('Edit Feature'))

@section('content_header')
    <h1>{{__('Edit Feature')}}</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/admin/features') }}" title="Back" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" ></i> {{__('Back')}}</a>
                        <br />
                        <br />

                        <form method="POST" action="{{ url('/admin/features/' . $feature->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.features.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
