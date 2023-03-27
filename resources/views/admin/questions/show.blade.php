@extends('adminlte::page')

@section('title', $question->question)

@section('content_header')
<h1>{{$question->question}}</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">

                    <a href="{{ url('/admin/questions') }}" title="Back" class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"></i> {{__('Back')}}</a>
                    <br />
                    <br />

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th> {{__('Question')}} </th>
                                    <td> {{ $question->question }} </td>
                                </tr>
                                <tr>
                                    <th> {{__('Answer')}} </th>
                                    <td> {{ $question->answer }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
