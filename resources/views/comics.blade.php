@extends('layouts.app')

@section('page_title')
    Comics
@endsection

@section('main_content')
<section class="comics-list">
    <div class="container">
      <div class="comics-wrapper">
        {{-- Start printing comics --}}
        @foreach ($comics_array as $comic)
        <div class="card">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" />
            <h4>{{$comic['title']}}</h4>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection

