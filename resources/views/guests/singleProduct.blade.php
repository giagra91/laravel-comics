@extends('layouts.main')

@section('title', ' - Single comic')
    
@section('main-content')

    <div class="top-banner-product">
        <img src="{{ $comic["thumb"] }}" alt="">
    </div>
        
    <div class="comic-content-top">
        <div class="comic-container">
            <div class="left-comic-container">
                <h2>
                    {{ $comic["title"] }}
                </h2>
    
                <div class="comic-price">
                    <p>
                        U.S. Price: {{ $comic["price"] }}
                    </p>
                    <p class="uppercase">
                        Available
                    </p>
                </div>
                <p class="description">
                    {{ $comic["description"] }}
                </p>
            </div>
            <div class="right-comic-container">
                <img src="{{ asset("images/adv.jpg") }}" alt="">
            </div>
        </div>
    </div>
    <div class="comic-content-bottom">
        <div class="comic-container">
            <div class="talent">
                <h3>
                    Talent
                </h3>
                <div class="comic-infos">
                    <h5>
                        Art by:
                    </h5>
                    <div class="infos-width">
                        @foreach ($comic["artists"] as $artist)
                            <a href="#">{{ $artist }}</a>,
                        @endforeach
                    </div>
                </div>
                <div class="comic-infos">
                    <h5>
                        Written by:
                    </h5>
                    <div class="infos-width">
                        @foreach ($comic["writers"] as $writer)
                            <a href="#">{{ $writer }}</a>,
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="specs">
                <h3>
                    Specs
                </h3>
                <div class="comic-infos">
                    <h5>
                        Series:
                    </h5>
                    <div class="infos-width">
                        <a href="#" class="uppercase">
                            {{ $comic["series"] }}
                        </a>
                    </div>
                </div>
                <div class="comic-infos">
                    <h5>
                        U.S. Price:
                    </h5>
                    <div class="infos-width">
                        <p class="uppercase">
                            {{ $comic["price"] }}
                        </p>
                    </div>
                </div>
                <div class="comic-infos">
                    <h5>
                        On Sale Date:
                    </h5>
                    <div class="infos-width">
                        <p class="uppercase">
                            {{ $comic["sale_date"] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="links-to-buy">
        <div class="links-wrapper">
            <div class="shop-link">
                <span>Digital Comics</span>
                <img src="{{ asset("images/buy-comics-digital-comics.png") }}" alt="">
            </div>
            <div class="shop-link">
                <span>Shop Dc</span>
                <img src="{{ asset("images/buy-comics-subscriptions.png") }}" alt="">
            </div>
            <div class="shop-link">
                <span>Comic Shop Locator</span>
                <img src="{{ asset("images/buy-comics-shop-locator.png") }}" alt="">
            </div>
            <div class="shop-link">
                <span>Subscriptuons</span>
                <img src="{{ asset("images/buy-comics-merchandise.png") }}" alt="">
            </div>
        </div>
    </div>
    
@endsection