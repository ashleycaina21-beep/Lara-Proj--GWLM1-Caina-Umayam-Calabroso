
@extends('layouts.app')

@section('title', 'NOIR Café | Beyond the Ordinary')


@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}?v=51">
<link rel="stylesheet" href="{{ asset('css/noir-final.css') }}?v=2">
@endpush


@section('content')

<main class="noir-experience">

    <!-- FULL SCREEN CINEMATIC HERO -->
    <section class="noir-stage" aria-label="NOIR Café cinematic introduction">

        <div class="noir-films" aria-hidden="true">
            <video class="noir-film is-active"
                   muted autoplay playsinline loop preload="auto">
                <source src="{{ asset('videos/coffee-pour.mp4') }}" type="video/mp4">
            </video>

            <video class="noir-film"
                   muted playsinline loop preload="metadata">
                <source src="{{ asset('videos/coffee-blend.mp4') }}" type="video/mp4">
            </video>

            <video class="noir-film"
                   muted playsinline loop preload="metadata">
                <source src="{{ asset('videos/latte-art.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="noir-vignette" aria-hidden="true"></div>
        <div class="noir-grain" aria-hidden="true"></div>
        <div class="noir-glow noir-glow-one" aria-hidden="true"></div>
        <div class="noir-glow noir-glow-two" aria-hidden="true"></div>

        <div class="noir-stage-content">

            <div class="noir-stage-kicker">
                <span class="noir-kicker-line"></span>
                BUTUAN CITY · EST. 2026
            </div>

            <h1 class="noir-masthead">
                <span>NOIR</span>
                <span>CAFÉ</span>
            </h1>

            <div class="noir-stage-bottom">
                <div class="noir-intro">
                    <span class="noir-overline">THE ART OF SLOW LIVING</span>
                    <h2>Where every sip<br>becomes a story.</h2>
                    <p>
                        Bold flavors. Quiet moments.
                        A coffee experience beyond the ordinary.
                    </p>
                    <a class="noir-discover" href="#noir-collection">
                        DISCOVER THE COLLECTION
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>

                <div class="noir-scene-panel">

                    <strong class="noir-scene-name" aria-live="polite" aria-atomic="true">THE FIRST POUR</strong>
                    <div class="noir-scene-actions">
                        <button class="noir-arrow noir-prev"
                                type="button" aria-label="Previous scene">
                            &#8592;
                        </button>
                        <span class="noir-scene-count">01 / 03</span>
                        <button class="noir-arrow noir-next"
                                type="button" aria-label="Next scene">
                            &#8594;
                        </button>
                    </div>
                    <div class="noir-progress">
                        <span class="noir-progress-fill"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="noir-scroll-cue" aria-hidden="true">
            SCROLL TO EXPLORE <span>↓</span>
        </div>
    </section>

    <!-- COFFEE COLLECTION -->

<section class="noir-collection" id="noir-collection">

    <div class="noir-collection-head noir-reveal">
        <div>
            <p class="noir-section-kicker">
                01 / OUR SIGNATURES
            </p>

            <h2>
                Crafted in <em>darkness.</em><br>
                Served with soul.
            </h2>
        </div>

        <p class="noir-collection-intro">
            Three expressions of coffee.
            One unmistakable NOIR experience.
        </p>
    </div>

    <div class="noir-collection-grid">

        <!-- PRODUCT 1 -->
        <article class="noir-product noir-reveal">
            <div class="noir-product-media">
                <img
                    src="{{ asset('images/midnight-espresso.jpg') }}"
                    alt="Midnight Espresso"
                    loading="lazy"
                >
                <span class="noir-product-index">01</span>
            </div>

            <div class="noir-product-info">
                <div>
                    <h3>Midnight Espresso</h3>
                    <p>Pure intensity. Bold espresso, timeless character.</p>
                </div>
                <span>NOIR ORIGINAL</span>
            </div>
        </article>

        <!-- PRODUCT 2 -->
        <article class="noir-product noir-reveal">
            <div class="noir-product-media">
                <img
                    src="{{ asset('images/caramel-eclipse.jpg') }}"
                    alt="Caramel Eclipse"
                    loading="lazy"
                >
                <span class="noir-product-index">02</span>
            </div>

            <div class="noir-product-info">
                <div>
                    <h3>Caramel Eclipse</h3>
                    <p>Golden caramel. Velvety sweetness in every sip.</p>
                </div>
                <span>NOIR SIGNATURE</span>
            </div>
        </article>

        <!-- PRODUCT 3 -->
        <article class="noir-product noir-reveal">
            <div class="noir-product-media">
                <img
                    src="{{ asset('images/velvet-iced-latte.jpg') }}"
                    alt="Velvet Iced Latte"
                    loading="lazy"
                >
                <span class="noir-product-index">03</span>
            </div>

            <div class="noir-product-info">
                <div>
                    <h3>Velvet Iced Latte</h3>
                    <p>Chilled perfection. Smooth, creamy, effortlessly refined.</p>
                </div>
                <span>BARISTA'S CHOICE</span>
            </div>
        </article>

    </div>
</section>


    <!-- ENDING STATEMENT -->
    <section class="noir-ending">
        <div class="noir-reveal">
            <p>MORE THAN A CUP OF COFFEE</p>
            <h2>Enter the <em>NOIR</em> state of mind.</h2>
            <a href="{{ route('about') }}">EXPLORE OUR STORY ↗</a>
        </div>
    </section>

</main>

@endsection

@push('scripts')
<script defer src="{{ asset('js/home.js') }}?v=60"></script>
@endpush
