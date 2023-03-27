@extends('adminlte::page')

@section('title', __('Nav-Bar'))

@section('css')
    <link rel="stylesheet" href="{{asset('css/style-2.css')}}">
@stop

@section('content_header')
    <h1>{{__('Nav-Bar')}}</h1>
    <p class="text-muted">{{__('Edit all the information exists in Nav Bar section')}}</p>
@stop

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <br />
                        @if (session('flash_message'))
                        <ul class="alert alert-success">
                            {{session('flash_message')}}
                        </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/nav-bar/' . $navbar->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}

                            @include ('admin.nav-bar.form', ['formMode' => 'edit'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
