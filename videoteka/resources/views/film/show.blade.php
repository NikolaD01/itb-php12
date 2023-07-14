@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="row">
      <div class="col-4 text-center my-5">
        <img src="{{ $film->imgSrc }}" alt="{{ $film->name }}" class="mb-2" style="width: 100px;" />
        <h5>{{ $film->name }}</h5>
        <p class="text-muted">{{ $film->year }}</p>
        <a href="{{route('film.edit', $film)}}" type="button" class="btn btn-info btn-sm">{{ __('Edit') }}</a>
      </div>
      <div class="col-8">
        <div class="card-body">
          <h5>{{ __('Information')}}</h5>
          <hr class="mt-0 mb-4">
          <div class="row">
            <div class="col-6 mb-3">
              <h6>{{ __('Rating')}}</h6>
              <p class="text-muted">{{ $film->rating}}</p>
            </div>
            <div class="col-6 mb-3">
              <h6>{{ __('Running time')}}</h6>
              <p class="text-muted">{{ $film->running_time}}</p>
            </div>
          </div>

          <div class="row">
            <div class="col-12 mb-3">
              <p class="mb-0">{{ __('Director')}}</p>
              <p class="text-muted">
              @foreach($film->directors as $w)
                    {{  $w->fullName}}
                @endforeach
            </p>
          </div>

          <div class="row">
            <div class="col-12 mb-3">
              <p class="mb-0">{{ __('Writer')}}</p>
              <p class="text-muted">
                @foreach($film->writers as $w)
                    {{  $w->fullName}}
                @endforeach
                </p>
          </div>

          <div class="row">
            <div class="col-12 mb-3">
              <p class="mb-0">{{ __('Stars')}}</p>
              <p class="text-muted">
              @foreach($film->stars as $w)
                    {{  $w->fullName}}
                @endforeach
            </p>
          </div>

          <h5>{{ __('Genres')}}</h5>
          <hr class="mt-0 mb-4">
          <div class="row">
            <div class="col-12 mb-3">
              <p class="text-muted">
                @foreach($film->genres->sortBy('name') as $g)   
                    {{$g->name}}
                @endforeach
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection