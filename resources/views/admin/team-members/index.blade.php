@extends('adminlte::page')

@section('title', __('Team Members'))

@section('css')
    <link rel="stylesheet" href="{{asset('css/style-2.css')}}">
@stop

@section('content_header')
<h1>{{__('Team Members')}}</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ url('/admin/team-members/create') }}" class="btn btn-success btn-sm" title="Add New TeamMember">
                        <i class="fa fa-plus" aria-hidden="true"></i> {{__('Add New')}}
                    </a>

                    <form method="GET" action="{{ url('/admin/team-members') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Position')}}</th>
                                    <th>{{__('Social Link')}}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{__('Actions')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teammembers as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->position }}</td>
                                    <td><a href="{{ $item->social_link }}">{{ $item->social_link }}</a> </td>
                                    <td><img src="{{asset('storage/' . $item->image)}}" class="img-loop"> </td>
                                    <td>
                                        <a href="{{ url('/admin/team-members/' . $item->id . '/edit') }}" title="Edit TeamMember" ><i class="fas fa-edit text-secondary" ></i></a>

                                        <form method="POST" action="{{ url('/admin/team-members' . '/' . $item->id) }}" accept-charset="UTF-8" class="del-btn">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-link text-danger p-0 del-trash" title="Delete TeamMember" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fas fa-trash-alt"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> {!! $teammembers->appends(['search' => Request::get('search')])->render() !!} </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
