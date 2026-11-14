@extends('layouts.app')
@section('title', 'About | NOIR Café')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/noir-final.css') }}?v=1">
@endpush
@section('content')
<main class="noir-inner-page">
  <div class="noir-inner-wrap">
    <p class="noir-inner-eyebrow">Behind the brew</p>
    <h1 class="noir-inner-title">Our <em>Story.</em></h1>
    <p class="noir-inner-lead">NOIR Café is a fictional specialty café concept created for a collaborative Laravel project. Inspired by the beauty of everyday rituals, NOIR brings together bold flavors, thoughtful design, and moments worth savoring.</p>
    <div class="noir-inner-grid">
      <section class="noir-inner-card">
        <h2>Our Mission</h2>
        <p>To create a welcoming coffee experience where craftsmanship, creativity, and genuine human connection come together.</p>
      </section>
      <section class="noir-inner-card">
        <h2>Our Vision</h2>
        <p>To build a distinctive café concept that celebrates excellent coffee, intentional moments, and an inclusive community.</p>
      </section>
    </div>
    <h2 class="noir-inner-subhead">The people behind <em style="color:#C9A46A">NOIR.</em></h2>
    <div class="noir-team-grid">
      <article class="noir-team-card"><div class="noir-team-mark">01</div><h3>Caiña</h3><p>GROUP MEMBER</p></article>
      <article class="noir-team-card"><div class="noir-team-mark">02</div><h3>Umayam</h3><p>GROUP MEMBER</p></article>
      <article class="noir-team-card"><div class="noir-team-mark">03</div><h3>Calabroso</h3><p>GROUP MEMBER</p></article>
    </div>
  </div>
</main>
@endsection
