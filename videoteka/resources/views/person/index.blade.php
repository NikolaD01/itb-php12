@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="row">
            <a href="{{ route('person.create') }} "class="btn btn-primary">{{ __('Create') }} </a>
          </div>
          <div class="card">
              <div class="card-header">{{ __('People') }}</div>
              @php var_dump($data) @endphp
              <div class="card-body">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th schop="col">id</th>
                      <th schop="col">{{__("Name")}}</th>
                      <th schop="col">{{__("Surname")}}</th>
                      <th schop="col">{{__("Birthday Date")}}</th>
                      <th schop="col">#</th>
                    </tr>
                    @foreach ($data as $g)
                      <tr>
                        <td>{{ $g->id }}</td>
                        <td>{{ $g->name}}</td>
                        <td>{{ $g->surname}}</td>
                        <td>{{ $g->b_date}}</td>
                        <td>
                          <a href="{{ route('person.edit', ['person'=>$g->id]) }} "class="btn btn-success btn-sm">{{ __('Edit') }}</a>
                          <form method="POST "action="{{ route('person.edit', ['person'=>$g->id]) }}">
                            @method('delete')
                          </form>
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