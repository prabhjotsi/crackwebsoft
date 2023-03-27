@extends('adminlte::page')

@section('title', __('About Us'))

@section('css')
    <link rel="stylesheet" href="{{asset('css/style-2.css')}}">
@stop

@section('content_header')
    <h1>{{__('About Us')}}</h1>
    <p class="text-muted">{{ __('Edit all the information exists in about us pages\'s about us section')}}</p>
@stop

@section('content')
  @if ($aboutussection)
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('about-us-section.edit' , $aboutussection->id) }}" title="Edit About Us Section"><i class="fas fa-edit text-secondary m-2" ></i></a>
                    <a  href="{{ route('about-us-features.index') }}" title="Features"><i class="fas fa-th" ></i></i> {{__('Features')}}</a>

                    <br/>
                    <br/>
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <th> {{__('Sub Title')}} </th><td> {{ $aboutussection->sub_title }} </td>
                          </tr>
                          <tr>
                            <th> {{__('Tile')}} </th><td> {{ $aboutussection->title }} </td>
                          </tr>
                          <tr>
                            <th> {{__('Description')}} </th><td> {{ $aboutussection->description }} </td>
                          </tr>
                          <tr>
                            <th> {{__('Image')}} </th><td> <img src="{{asset('storage/' . $aboutussection->image)}}" class="img-show"> </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endif
@endsection
