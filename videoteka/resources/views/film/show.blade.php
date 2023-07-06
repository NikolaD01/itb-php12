@extends('layouts.app')
@section('content')

<p><strong>Naziv filma :</strong>{{$film->name}}</p>
<p><strong>Godina filma :</strong>{{$film->year}}</p>
<p><strong>Vreme trajnja filma :</strong>{{$film->running_h . " h " . $film->running_m . " min"}}</p>
<p><strong>Ocena filma :</strong>{{$film->rating}}</p>
<p><strong>Zanr :</strong> 
  
  @foreach($film->genres->sortby('name') as $g)
    {{ $g->name_sr }}
  @endforeach
</p>
@endsection

