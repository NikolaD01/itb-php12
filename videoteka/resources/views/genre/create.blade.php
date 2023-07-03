

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Genres') .": ". __('Add') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('genre.store')}}">
                        @csrf
                        <div class="mb-3 row">
                            <label for="name_en" class="col-sm-2 col-form-label">{{__('Name EN')}}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name_en') is-invalid @enderror" id="name_en" name="name_en"  value="{{ old('name_en') }}">
                              @error('name_en')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="name_sr" class="col-sm-2 col-form-label">{{__('Name SR')}}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_sr" name="name_sr"  value="{{ old('name_sr') }}">
                                @error('name_sr')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            <div>
                        </div>

                        <div class="mb-3 row">
                            <div class="btn-group" role="group">
                            <div class="col-12">
                              <button type="submit" class="btn btn-success">{{__('Save')}}</button>
                              <a href="{{ route('genre.index') }}" class="btn btn-secondary float-end">{{ __('Cancel') }}</a>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

