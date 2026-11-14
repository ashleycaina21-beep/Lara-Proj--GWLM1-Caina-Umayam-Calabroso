@extends('layouts.app')
@section('title', 'Contact | NOIR Café')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/noir-final.css') }}?v=1">
@endpush
@section('content')
<main class="noir-inner-page">
  <div class="noir-inner-wrap">
    <p class="noir-inner-eyebrow">Let's connect</p>
    <h1 class="noir-inner-title">Get in <em>Touch.</em></h1>
    <p class="noir-inner-lead">Questions, ideas, or a collaboration in mind? Explore our contact form prototype below.</p>
    <div class="noir-contact-grid">
      <section class="noir-inner-card noir-contact-meta">
        <h2>Visit NOIR</h2>
        <div><small>ABOUT OUR CAFÉ</small><p>NOIR Café is a fictional café concept developed as a Laravel group project.</p></div>
        <div><small>PROJECT SETTING</small><p>Butuan City, Philippines</p></div>
        <div><small>CONTACT STATUS</small><p>noirCAFE@gmail.com
        </p></div>
      </section>
      <section class="noir-inner-card">
        <h2>Send a message</h2>
        <form id="noir-demo-contact" class="noir-contact-form">
          <div class="noir-field"><label for="noir-fullname">Full name</label><input id="noir-fullname" name="name" type="text" autocomplete="name" required maxlength="120" placeholder="Your full name"></div>
          <div class="noir-field"><label for="noir-email">Email address</label><input id="noir-email" name="email" type="email" autocomplete="email" required maxlength="200" placeholder="you@example.com"></div>
          <div class="noir-field wide"><label for="noir-subject">Subject</label><input id="noir-subject" name="subject" type="text" required maxlength="160" placeholder="How can we help?"></div>
          <div class="noir-field wide"><label for="noir-message">Message</label><textarea id="noir-message" name="message" required maxlength="3000" placeholder="Write your message..."></textarea></div>
          <button class="noir-form-button" type="submit">PREVIEW MESSAGE ↗</button>
          <p class="noir-form-note">This is a front-end demo. Submitting validates the fields but does not send or save your message.</p>
          <p class="noir-form-feedback" id="noir-form-feedback" role="status" aria-live="polite"></p>
        </form>
      </section>
    </div>
  </div>
</main>
@endsection
@push('scripts')
<script defer src="{{ asset('js/noir-final.js') }}?v=1"></script>
@endpush
