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

