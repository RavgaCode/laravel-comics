@extends('layouts.app')

@section('page_title')
    Comics
@endsection

@section('main_content')
{{-- STARTING SPECIFIC COMIC SECTION--}}
<section id="comics">
    {{-- Blue band comic cover img --}}
    <div class="top-cover-band">
        <div class="container">
            <div class="cover-container">
                <img src="{{ $current_comic['thumb'] }}" alt="{{ $current_comic['title'] }}">

                <span>Comic book</span>
                <span>View gallery</span>
            </div>
        </div>
    </div>
    {{-- Comic Description & Price --}}
    <div class="description-section">
        <div class="container">
            <div class="description-columns">
                {{-- Description Col --}}
                <div class="left-col">
                    <h1>{{ $current_comic['title'] }}</h1>
                    <div class="comics-price">
                        {{-- Price Info --}}
                        <div class="price">
                            <span>U.S. Price: {{ $current_comic['price'] }}</span>
                            <span>Available</span>
                        </div>
                        {{-- Availability --}}
                        <div class="availability">
                            <span>Check availability</span>
                        </div>
                    </div>
                    {{-- Description --}}
                    <p>{{ $current_comic['description'] }}</p>
                </div>
                {{-- Adv Col --}}
                <div class="right-col">
                    <img src="{{ asset('images/superman-apply.jpg') }}" alt="advertise img">
                </div>
            </div>
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

