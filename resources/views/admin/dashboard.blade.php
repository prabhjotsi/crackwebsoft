@extends('adminlte::page')

@section('title', __('Dashboard'))

@section('content_header')
<h1>{{__('Dashboard')}}</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- small box -->
            <div class="small-box bg-light">
                <div class="inner">
                    <h3>{{ $services }}</h3>

                    <p class="text-info">{{ __('Services') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-cogs text-info"></i>
                </div>
                <a href="{{ route('services.index') }}" class="small-box-footer bg-light">{{ __('More Info') }} <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!-- small box -->
            <div class="small-box bg-light">
                <div class="inner">
                    <h3>{{ $team_members }}</h3>

                    <p class="text-info">{{ __('Team Members') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users-cog text-info"></i>
                </div>
                <a href="{{ route('team-members.index') }}" class="small-box-footer bg-light">{{ __('More Info') }} <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!-- small box -->
            <div class="small-box bg-light">
                <div class="inner">
                    <h3>{{ $mainfeatures }}</h3>

                    <p class="text-info">{{ __('Main Features') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-tags text-info"></i>
                </div>
                <a href="{{ route('main-feature.index') }}" class="small-box-footer bg-light">{{ __('More Info') }} <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!-- small box -->
            <div class="small-box bg-light">
                <div class="inner">
                    <h3>{{ $contacts }}</h3>

                    <p class="text-info">{{ __('Contacts') }}</p>
                </div>
                <div class="icon">
                    <i class="fas fa-address-book text-info"></i>
                </div>
                <a href="{{ route('contacts.index') }}" class="small-box-footer bg-light">{{ __('More Info') }} <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-9">
          <div class="card">
              <div class="card-header border-0">
                  <h3 class="text-info text-center">{{ __('Team Members') }}</h3>
                  <div class="card-tools">
                  </div>
              </div>
              <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                      <thead>
                          <tr>
                              <th>{{ __('Image') }}</th>
                              <th>{{ __('Name') }}</th>
                              <th>{{ __('Position') }}</th>
                              <th>{{ __('More') }}</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($team_member as $key => $item)
                          <tr>
                              <td><img src="{{ asset('storage/' . $item->image)}}" class="img-circle img-size-50 mr-2"> </td><td>{{ $item->name }}</td>
                              <td>{{ $item->position }}</td>
                              <td><a href="{{ route('team-members.index')}}" class="text-muted"><i class="fas fa-search"></i></a></td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
