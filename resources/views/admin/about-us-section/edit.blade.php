@extends('adminlte::page')

@section('title', __('Edit About Us'))

@section('content_header')
    <h1>{{__('Edit About Us')}}</h1>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <a href="{{ url('/admin/about-us-section') }}" title="Back" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> {{__('Back')}}</a>
                        <br />
                        <br />

                        <form method="POST" action="{{ url('/admin/about-us-section/' . $aboutussection->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.about-us-section.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
