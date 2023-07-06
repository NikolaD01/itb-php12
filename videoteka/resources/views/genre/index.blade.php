@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
        @if(session('alertMsg'))
        <div class="alert alert-{{session('alertType')}} alert-dismissible fade show" role="alert">
          {{__(session('alertMsg'))}}  
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
          <div class="row">
            <a href="{{ route('genre.create') }} "class="btn btn-primary">{{ __('Create') }}</a>
          </div>
          <div class="card">
              <div class="card-header">{{ __('Genres') }}</div>

              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">{{__('No.')}}</th>
                      <th schop="col">id</th>
                      <th schop="col">{{__("Name EN")}}</th>
                      <th schop="col">{{__("Name SR")}}</th>
                      <th schop="col">#</th>
                    </tr>
                    @foreach ($data as $g)
                      <tr>
                        <td>{{ ($data->currentPage() -1 ) * $data->perPage() + $loop->iteration}}</td>
                        <td>{{ $g->id }}</td>
                        <td>{{ $g->name_en}}</td>
                        <td>{{ $g->name_sr}}</td>
                        <td>
                          <div class="btn-group" role="group" >
                            <a href="{{ route('genre.edit', ['genre'=>$g->id]) }} "class="btn btn-success btn-sm">{{ __('Edit') }}</a>
                            <form method="POST"action="{{ route('genre.destroy', ['genre'=>$g->id]) }}">
                              @method('delete')
                              @csrf
                              <button type="submit" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                            </form>
                          </div>
                        </td>
                      </tr>  
                    @endforeach
                  </thead>
                </table>
                {{ $data->links() }}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection