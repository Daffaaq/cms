@extends('layouts.masterLayout')

@section('header')
<div class="container">
            <header class="tm-site-header">
                <h1 class="tm-site-name">Shelf</h1>
                <p class="tm-site-description">Your Online Bookstore</p>
                
                <nav class="navbar navbar-expand-md tm-main-nav-container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav" aria-controls="tmMainNav" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse tm-main-nav" id="tmMainNav">
                        <ul class="nav nav-fill tm-main-nav-ul">
                            <li class="nav-item"><a class="nav-link active" href="home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="catalogs">Catalogs</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Awards</a></li>
                            <li class="nav-item"><a class="nav-link" href="team">Our Team</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact-us">Contact Us</a></li>
                             @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </nav>
                
            </header>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tm-main-content">
                <section class="tm-margin-b-l">
                    <header>
                        <h2 class="tm-main-title">Welcome to our bookstore</h2>    
                    </header>
                    
                    <p>Shelf HTML template is provided by Tooplate. Please tell your friends about it. Thank you. Images are from Unsplash website. In tincidunt metus sed justo tincidunt sollicitudin. Curabitur magna tellus, condimentum vitae consectetur id, elementum sit amet erat.</p>
                    
                    <div class="tm-gallery">
                        <div class="row">
                            @foreach($function as $f)
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview.html">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/{{$f->image}}" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    
                                    <p class="tm-figcaption">{{$f->title}}</p>
                                </a>
                            </figure>
                            @endforeach
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview.html">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-02.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Integer ornare</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview.html">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-03.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Cras non augue</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview.html">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-04.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Dolor lacus</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview.html">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-05.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Quisque velit</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview.html">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-06.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Suspendisse suscipit</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview.html">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-07.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Facilisis justo</p>
                                </a>
                            </figure>
                            <figure class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
                                <a href="preview.html">
                                    <div class="tm-gallery-item-overlay">
                                        <img src="img/image-08.jpg" alt="Image" class="img-fluid tm-img-center">
                                    </div>
                                    <p class="tm-figcaption">Vivamus facilisis</p>
                                </a>
                            </figure>
                        </div>   
                    </div>
                    
                    <nav class="tm-gallery-nav">
                        <ul class="nav justify-content-center">
                            <li class="nav-item"><a class="nav-link active" href="#">1</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">2</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">3</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">4</a></li>                    
                        </ul>
                    </nav>
                </section>

                <section class="media tm-highlight tm-highlight-w-icon">

                    <div class="tm-highlight-icon">
                        <i class="fa tm-fa-6x fa-meetup"></i>    
                    </div>                    

                    <div class="media-body">
                        <header>
                            <h2>Need Help?</h2>
                        </header>
                        <p class="tm-margin-b">Curabitur magna tellus, condimentum vitae consectetur id, elementum sit amet erat. Phasellus arcu leo, sagittis fringilla nisi et, pulvinar vestibulum mi. Maecenas mollis ullamcorper est at dignissim.</p>
                        <a href="" class="tm-white-bordered-btn">Live Chat</a>
                    </div>                    
                </section>
            </div>
@endsection