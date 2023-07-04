

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('People') .": ". __('Edit') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('person.update', ['person'=>$person->id])}}">
                      @method('PUT')
                      @csrf
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">{{__('Name')}}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"  value="{{ old('name', $person->name) }}">
                              @error('name')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="surname" class="col-sm-2 col-form-label">{{__('Surname')}}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="surname" name="surname"  value="{{ old('surname',$person->surname) }}">
                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                            <div>
                        </div>

                        <div class="mb-3 row">
                            <label for="b_date" class="col-sm-2 col-form-label">{{__('Birthday Date')}}</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="b_date" name="b_date"  value="{{ old('b_date',$person->b_date) }}">
                                @error('surname')
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
                              <a href="{{ route('person.index') }}" class="btn btn-secondary float-end">{{ __('Cancel') }}</a>
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

