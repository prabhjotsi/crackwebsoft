@extends('adminlte::page')

@section('title', __('Question'))

@section('css')
    <link rel="stylesheet" href="{{asset('css/style-2.css')}}">
@stop

@section('content_header')
<h1>{{__('Question')}}</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('/admin/questions/create') }}" class="btn btn-success btn-sm" title="Add New Question">
                        <i class="fa fa-plus" ></i> {{__('Add New')}}
                    </a>

                    <form method="GET" action="{{ url('/admin/questions') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="{{__('Search...')}}" value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>

                    <br />
                    <br />
                    @if (session('flash_message'))
                    <ul class="alert alert-success">
                        {{session('flash_message')}}
                    </ul>
                    @endif
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{__('#')}}</th>
                                    <th>{{__('Question')}}</th>
                                    <th>{{__('Answer')}}</th>
                                    <th>{{__('Actions')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($questions as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->question }}</td>
                                    <td>{{ $item->answer ? substr($item->answer, 0, 50) . '...' : ''}}</td>
                                    <td>
                                        <a href="{{ url('/admin/questions/' . $item->id . '/edit') }}" title="Edit Question"><i class="fas fa-edit text-secondary" ></i></a>
                                        <a href="{{ url('/admin/questions/' . $item->id) }}" title="View Question"><i class="fa fa-eye" ></i></a>

                                        <form method="POST" action="{{ url('/admin/questions' . '/' . $item->id) }}" accept-charset="UTF-8" class="del-btn">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-link text-danger p-0 del-trash" title="Delete Question" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $questions->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
