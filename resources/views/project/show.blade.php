@extends('layout.app')

@section('content')

<header id="fh5co-header" role="banner">
  <div class="container">
    <div class="header-inner">
      <h1><a href="{{ route('generics.index') }}">Prima Vera</a></h1>
      <nav role="navigation">
        <ul>
          <li class="header-bar-text"><a href="{{ route('generics.index') }}">Accueil</a></li>
          <li class="header-bar-text active"><a href="{{ route('project.index') }}">Nos projets</a></li>
          <li class="header-bar-text"><a href="{{ route('generics.about') }}">À propos</a></li>
          <li class="header-bar-text"><a href="{{ route('contact.index') }}">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>

<div style="background-color: #f2f2f2;">
<div class="container p-5">
  <div class="row h-100 d-flex justify-content-center align-items-center" style="background-color: #FFFFFF;">
    <div class="col-md-6" style="padding: 0;">
      <img src='images/{{ $project->image }}' width="100%" alt="Image du produit" class="img-fluid">
    </div>
    <div class="col-md-6 text-center">
      <h2 class="text-center mb-4 pb-4 h1">{{ $project->name }}</h2>
      <p class="text-wrap pl-perso pr-perso" style="word-wrap: break-word;">{{ $project->description }}</p>
    </div>
  </div>
</div>
</div>
@endsection