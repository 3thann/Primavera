@extends('layout.app')

@section('content')

<header id="fh5co-header" role="banner">
    <div class="container">
        <div class="header-inner">
            <h1><a href="{{ route('generics.index') }}">Prima Vera</a></h1>
            <nav role="navigation">
                <ul>
                    <li class="header-bar-text"><a href="{{ route('generics.index') }}">Accueil</a></li>
                    <li class="header-bar-text"><a href="{{ route('project.index') }}">Nos projets</a></li>
                    <li class="header-bar-text"><a href="{{ route('generics.about') }}">À propos</a></li>
                    <li class="header-bar-text active"><a href="{{ route('contact.index') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="animate-box">
    <div class="col-md-6 col-md-offset-3 mt-5 mb-4 text-center">
        <h2>Contact personnel</h2>
    </div>
</div>

<div class="fh5co-contact animate-box">
    <div class="container">
        @foreach ($contacts as $contact)
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <div class="card">
                    <div class="card-header">
                      {{ $contact->name }}
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <p>{{ $contact->message }}</p>
                        <footer class="blockquote-footer">{{ $contact->name }} | {{ $contact->email }}</footer>
                      </blockquote>
                    </div>
                  </div>
            </div>	
        @endforeach

    </div>
</div>




@endsection