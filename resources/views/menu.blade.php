@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/menu.css') }}?v=1">

<main class="noir-menu">

    <section class="menu-hero">
        <p class="menu-eyebrow">NOIR CAFÉ / THE COLLECTION</p>
        <h1>OUR <em>MENU.</em></h1>
        <p class="menu-subtitle">
            Every cup tells a story. Discover bold flavors,
            timeless classics, and handcrafted creations.
        </p>
        <span class="menu-hero-line"></span>
    </section>

    <section class="menu-content">

        <div class="menu-section-heading">
            <span>01 / OUR SIGNATURES</span>
            <h2>Crafted with <em>passion.</em></h2>
        </div>

        <div class="menu-grid">

            <article class="menu-card">
                <div class="menu-card-image">
                    <img src="{{ asset('images/midnight-espresso.jpg') }}"
                         alt="Midnight Espresso">
                    <span class="menu-number">01</span>
                </div>
                <div class="menu-card-info">
                    <span class="menu-tag">NOIR ORIGINAL</span>
                    <h3>Midnight Espresso</h3>
                    <p>Bold, rich espresso with a timeless finish.</p>
                    <strong>₱120</strong>
                </div>
            </article>

            <article class="menu-card">
                <div class="menu-card-image">
                    <img src="{{ asset('images/caramel-eclipse.jpg') }}"
                         alt="Caramel Eclipse">
                    <span class="menu-number">02</span>
                </div>
                <div class="menu-card-info">
                    <span class="menu-tag">NOIR SIGNATURE</span>
                    <h3>Caramel Eclipse</h3>
                    <p>Velvety coffee with golden caramel sweetness.</p>
                    <strong>₱165</strong>
                </div>
            </article>

            <article class="menu-card">
                <div class="menu-card-image">
                    <img src="{{ asset('images/velvet-iced-latte.jpg') }}"
                         alt="Velvet Iced Latte">
                    <span class="menu-number">03</span>
                </div>
                <div class="menu-card-info">
                    <span class="menu-tag">BARISTA'S CHOICE</span>
                    <h3>Velvet Iced Latte</h3>
                    <p>Chilled espresso with smooth, creamy milk.</p>
                    <strong>₱175</strong>
                </div>
            </article>

        </div>

        <div class="menu-section-heading menu-second-heading">
            <span>02 / ESPRESSO BAR</span>
            <h2>The <em>classics.</em></h2>
        </div>

        <div class="menu-grid">

            <article class="menu-card">

<div class="menu-card-image">
    <img src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&amp;fit=crop&amp;w=900" alt="Classic Americano">
</div>

                <div class="menu-card-info">
                    <span class="menu-tag">ESPRESSO BAR</span>
                    <h3>Classic Americano</h3>
                    <p>Rich espresso balanced with hot water.</p>
                    <strong>₱130</strong>
                </div>
            </article>

            <article class="menu-card">

<div class="menu-card-image">
    <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&amp;fit=crop&amp;w=900" alt="Spanish Latte">
</div>

                <div class="menu-card-info">
                    <span class="menu-tag">CUSTOMER FAVORITE</span>
                    <h3>Spanish Latte</h3>
                    <p>Espresso blended with sweet, creamy milk.</p>
                    <strong>₱160</strong>
                </div>
            </article>

            <article class="menu-card">

<div class="menu-card-image">
    <img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?auto=format&amp;fit=crop&amp;w=900" alt="Dark Mocha">
</div>

                <div class="menu-card-info">
                    <span class="menu-tag">CHOCOLATE SERIES</span>
                    <h3>Dark Mocha</h3>
                    <p>Intense espresso meets rich dark chocolate.</p>
                    <strong>₱170</strong>
                </div>
            </article>

        </div>

        <div class="menu-section-heading menu-second-heading">
            <span>03 / COLD & NON-COFFEE</span>
            <h2>Beyond <em>coffee.</em></h2>
        </div>

        <div class="menu-grid">

            <article class="menu-card">

<div class="menu-card-image">
    <img src="https://images.unsplash.com/photo-1517701604599-bb29b565090c?auto=format&amp;fit=crop&amp;w=900" alt="Vanilla Cold Brew">
</div>

                <div class="menu-card-info">
                    <span class="menu-tag">COLD BREW</span>
                    <h3>Vanilla Cold Brew</h3>
                    <p>Slow-steeped coffee with soft vanilla notes.</p>
                    <strong>₱165</strong>
                </div>
            </article>

            <article class="menu-card">

<div class="menu-card-image">
    <img src="https://images.unsplash.com/photo-1515823064-d6e0c04616a7?auto=format&amp;fit=crop&amp;w=900" alt="Matcha Latte">
</div>

                <div class="menu-card-info">
                    <span class="menu-tag">NON-COFFEE</span>
                    <h3>Matcha Latte</h3>
                    <p>Earthy matcha balanced with creamy milk.</p>
                    <strong>₱180</strong>
                </div>
            </article>

            <article class="menu-card">


<div class="menu-card-image">
    <img
        src="https://images.unsplash.com/photo-1517578239113-b03992dcdd25?auto=format&amp;fit=crop&amp;w=900"
        alt="Signature Chocolate"
        onerror="this.onerror=null;this.src='https://placehold.co/900x900/2C1E19/F5EBDD?text=Signature+Chocolate';"
    >
</div>


                <div class="menu-card-info">
                    <span class="menu-tag">NON-COFFEE</span>
                    <h3>Signature Chocolate</h3>
                    <p>Luxurious chocolate with a silky finish.</p>
                    <strong>₱150</strong>
                </div>
            </article>

        </div>

    </section>

    <section class="menu-ending">
        <p>THE NOIR EXPERIENCE</p>
        <h2>Life begins after <em>coffee.</em></h2>
        <a href="{{ url('/') }}">BACK TO HOME</a>
    </section>

</main>
@endsection
