@extends('layout.app')

@section('content')

<aside id="fh5co-hero" class="js-fullheight">
    <div class="flexslider js-fullheight">
        <ul class="slides">
           <li style="background-image: url(images/slide_2.jpg);">
               <div class="overlay-gradient"></div>
               <div class="container">
                   <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                       <div class="slider-text-inner">
                           <h2>Contact</h2>
                           <p class="fh5co-lead">Messages reçus</p>
                       </div>
                   </div>
               </div>
           </li>
          </ul>
      </div>
</aside>

<div class="fh5co-contact animate-box">
    <div class="container">
        @foreach ($contacts as $contact)
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h4>{{ $contact->name }}</h4>
                <p> {{ $contact->message }} </p>
            </div>	
        @endforeach

    </div>
</div>

@endsection