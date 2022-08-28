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
    {{-- TALENT & SPEC SECTION --}}
    <div class="talent-section">
        <div class="container">
            <div class="talent-columns">
                {{-- Talent Col --}}
                <div class="left-col">
                    <h3>Talent</h3>
                    {{-- Artists list--}}
                    <div class="submenu-columns">
                        <div class="submenu-name">Art by:</div>
                        <div class="submenu-list">
                            @foreach ($current_comic['artists'] as $artist)
                            <a href="#">
                                {{ $artist }}{{ !$loop->last ? ',' : '' }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                    {{-- Writers list --}}
                    <div class="submenu-columns">
                        <div class="submenu-name">Written by:</div>
                        <div class="submenu-list">
                            @foreach ($current_comic['writers'] as $writer)
                            <a href="#">
                                {{ $writer }}{{ !$loop->last ? ',' : '' }}
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{-- Spec Col --}}
                <div class="right-col">
                    <h3>Specs</h3>
                    <div class="submenu-columns">
                        <div class="submenu-name">Series:</div>
                        <div class="submenu-info">
                            <span>
                                {{ $current_comic['series'] }}
                            </span>
                        </div>
                    </div>
                    <div class="submenu-columns">
                        <div class="submenu-name">U.S. Price:</div>
                        <div class="submenu-info">
                            <span>
                                {{ $current_comic['price'] }}
                            </span>
                        </div>
                    </div>
                    <div class="submenu-columns">
                        <div class="submenu-name">On Sale Date:</div>
                        <div class="submenu-info">
                            <span>
                                {{ $current_comic['sale_date'] }}
                            </span>
                        </div>
                    </div>
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

