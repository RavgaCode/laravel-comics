@extends('layouts.app')

@section('page_title')
    Home
@endsection

@section('main_content')
    {{-- Comics list --}}
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
  {{-- Blue band --}}
  <section class="blue-band">
    <div class="container">
            <ul>
                <li>
                    <a href="#">
                        <img src="img/buy-comics-digital-comics.png" alt="logo digital comics">
                        <span>Digital comics</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/buy-comics-merchandise.png" alt="logo DC merchandise">
                        <span>DC Merchandise</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/buy-comics-subscriptions.png" alt="logo subscriptions">
                        <span>Subscription</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/buy-comics-shop-locator.png" alt="logo DC shop">
                        <span>Comics Shop Locator</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/buy-dc-power-visa.svg" alt="logo power visa">
                        <span>DC Power Visa</span>
                    </a>
                </li>
            </ul>
    </div>
  </section>
@endsection