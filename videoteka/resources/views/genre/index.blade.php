@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="row">
            <a href="{{ route('genre.create') }} "class="btn btn-primary">{{ __('Create') }}</a>
          </div>
          <div class="card">
              <div class="card-header">{{ __('Genres') }}</div>

              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th schop="col">id</th>
                      <th schop="col">{{__("Name EN")}}</th>
                      <th schop="col">{{__("Name SR")}}</th>
                      <th schop="col">#</th>
                    </tr>
                    @foreach ($data as $g)
                      <tr>
                        <td>{{ $g->id }}</td>
                        <td>{{ $g->name_en}}</td>
                        <td>{{ $g->name_sr}}</td>
                        <td>
                          <a href="{{ route('genre.edit', ['genre'=>$g->id]) }} "class="btn btn-success btn-sm">{{ __('Edit') }}</a>
                        </td>
                      </tr>  
                    @endforeach
                  </thead>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection