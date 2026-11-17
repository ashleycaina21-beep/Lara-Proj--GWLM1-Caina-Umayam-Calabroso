
@extends('layouts.app')

@section('title', 'About | NOIR Café')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/noir-final.css') }}?v=1">
<link rel="stylesheet" href="{{ asset('css/about.css') }}?v=2">
@endpush

@section('content')
<div class="noir-inner-page">
  <div class="noir-inner-wrap">

    <p class="noir-inner-eyebrow">Behind the brew</p>

    <h1 class="noir-inner-title">Our <em>Story.</em></h1>

    <p class="noir-inner-lead">
      NOIR Café is a fictional specialty café concept created for a collaborative Laravel project.
      Inspired by the beauty of everyday rituals, NOIR brings together bold flavors,
      thoughtful design, and moments worth savoring.
    </p>

    <!-- READ MORE / READ LESS -->
    <div id="extra-story" hidden>
      <p class="noir-inner-lead">
        At NOIR Café, we believe that coffee is more than just a drink.
        It is an experience that brings people together, inspires creativity,
        and transforms ordinary moments into lasting memories.
        Every cup reflects our passion for quality, craftsmanship,
        and meaningful connections.
      </p>
    </div>

    <button
      type="button"
      id="read-more"
      aria-expanded="false"
      aria-controls="extra-story"
>
      READ MORE
    </button>

    <div class="noir-inner-grid">

      <section class="noir-inner-card">
        <h2>Our Mission</h2>
        <p>
          To create a welcoming coffee experience where craftsmanship,
          creativity, and genuine human connection come together.
        </p>
      </section>

      <section class="noir-inner-card">
        <h2>Our Vision</h2>
        <p>
          To build a distinctive café concept that celebrates excellent coffee,
          intentional moments, and an inclusive community.
        </p>
      </section>

    </div>

    <h2 class="noir-inner-subhead">
      The people behind <em style="color:#C9A46A">NOIR.</em>
    </h2>

    <div class="noir-team-grid">

      <article class="noir-team-card">
        <div class="noir-team-mark">01</div>
        <h3>Caiña</h3>
        <p>GROUP MEMBER</p>
      </article>

      <article class="noir-team-card">
        <div class="noir-team-mark">02</div>
        <h3>Umayam</h3>
        <p>GROUP MEMBER</p>
      </article>

      <article class="noir-team-card">
        <div class="noir-team-mark">03</div>
        <h3>Calabroso</h3>
        <p>GROUP MEMBER</p>
      </article>

    </div>

  </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/about.js') }}?v=2" defer></script>
@endpush
