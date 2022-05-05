@extends('layouts.main')

@section('title', ' - Comics')
    
@section('main-content')
    <div>
        <div class="products-wrapper">
            <div id="products">
            <a class="buttons" id="current-series" href="#">Current Series</a>
            @foreach ($comics as $index => $comicsElement)
            <div class="products-card">
                <img src="{{ $comicsElement["thumb"] }}" alt="{{ $comicsElement["title"] }}">
                {{-- <p>{{ $comicsElement["title"] }}</p> --}}
                <a href="{{ route("single-product", ["index" => $index]) }}">{{ $comicsElement["series"] }}</a>
                
            </div>
            @endforeach
            <a class="buttons" id="load-series" href="#">Load more</a>
            </div>
        </div>
        <div id="products-links">
            <div id="links-to-shop">
                    
                <div class="single-link">
                    <img src="{{ asset("images/buy-comics-digital-comics.png") }}" alt="testo">
                    <p>Digital Comics</p>
                </div>
                <div class="single-link">
                    <img src="{{ asset("images/buy-comics-merchandise.png") }}" alt="testo">
                    <p>DC Merchandise</p>
                </div>
                <div class="single-link">
                    <img src="{{ asset("images/buy-comics-shop-locator.png") }}" alt="testo">
                    <p>Subcription</p>
                </div>
                <div class="single-link">
                    <img src="{{ asset("images/buy-comics-subscriptions.png") }}" alt="testo">
                    <p>Comic shop locator</p>
                </div>
                <div class="single-link">
                    <img src="{{ asset("images/buy-dc-power-visa.svg") }}" alt="testo">
                    <p>Dc power visa</p>
                </div>

            </div>
        </div>

    </div>
    
@endsection