@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
<div class="jumbo">
    <img src="{{ asset('images/jumbotron.jpg') }}" alt="">
</div>

<div class="background comics-container">
    <div class="container">
        <div class="card-container font-xxl flex justify-spaceBetween wrap">
            @foreach ($comics as $comic)
                <div class="product-container">
                    <div class="img-container">
                        <img src="{{$comic['thumb']}}" :alt="{{$comic['series']}}">
                    </div>
            
                    <h2 class="font-xs white-text text-uppercase">
                        {{$comic['series']}}
                    </h2>
                </div>
            @endforeach
        </div>

        <span class="title-box font-sm white-text text-uppercase">
            current series
        </span>

        <div class="button-container text-center">
            <a href="#" class="white-text text-uppercase">
                load more
            </a>
        </div>
    </div>
</div>
<div>
    <div class="background-container banner-container">
        <div class="container">
            <ul class="flex align-center justify-spaceAround">
                <li>
                    <a href="#" class="flex align-center">
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}">
                        <span class="font-xxs white-text text-uppercase">
                            digital comics
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex align-center">
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}">
                        <span class="font-xxs white-text text-uppercase">
                            dc merchandise
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex align-center">
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}">
                        <span class="font-xxs white-text text-uppercase">
                            subscriptions
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex align-center">
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}">
                        <span class="font-xxs white-text text-uppercase">
                            comic shop locator
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex align-center">
                        <img src="{{ asset('images/buy-dc-power-visa.svg') }}">
                        <span class="font-xxs white-text text-uppercase">
                            dc power visa
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection