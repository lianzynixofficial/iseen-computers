@extends('layouts.public')

@section('title', 'I Seen Computer | Designing,Typing & Printing Services')

@push('styles')
    @vite('resources/css/home.css')
@endpush

@section('content')

    @include('frontend.partials.navbar')

    <main class="home-page">

        {{-- Hero Section --}}
        <section class="home-hero">

            <div class="home-hero-background" aria-hidden="true">

                <div class="hero-background-slide is-active"></div>
                <div class="hero-background-slide"></div>
                <div class="hero-background-slide"></div>

            </div>

            <div class="home-hero-container">

                <div class="home-hero-content">

                    <p class="home-hero-eyebrow">
                        I SEEN COMPUTER
                    </p>

                    <h1 class="home-hero-title">
                        Creative Design.
                        <br>
                        Quality Printing.
                        <br>
                        Reliable Service.
                    </h1>

                    <p class="home-hero-description">
                        Professional designing, typing, printing and digital
                        services for individuals, students, businesses and
                        organizations.
                    </p>

                    <div class="home-hero-actions">

                        <a href="{{ route('contact') }}" class="hero-btn hero-btn-primary">
                            Contact Us
                        </a>

                        <a href="#services" class="hero-btn hero-btn-secondary">
                            Explore Services
                        </a>

                    </div>

                </div>


                <div class="home-hero-visual">

                    <img
                        src="{{asset('images/women-holding-paper-high-angle.webp') }}"
                        alt="Woman holding printed material for I Seen Computer"
                        class="home-hero-image"
                    >

                </div>

            </div>

        </section>

        <section id="services" class="home-services">

            <div class="home-section-container">

                <div class="services-header reveal">

                    <div>
                        <p class="section-eyebrow">
                            WHAT WE DO
                        </p>

                        <h2>
                            Everything You Need, All in One Place.
                        </h2>
                    </div>

                    <p class="services-intro">
                        From creative designs and professional printing to typing
                        and everyday digital assistance, I Seen Computer provides
                        practical services for students, professionals, businesses
                        and individuals.
                    </p>

                </div>


                <div class="services-showcase">

                    {{-- Main Service --}}
                    <article class="service-feature service-feature-blue reveal">

                        <div class="service-feature-content">

                            <span class="service-feature-number">
                                01
                            </span>

                            <h3>
                                Creative Designing
                            </h3>

                            <p>
                                Posters, invitations, certificates, business materials
                                and creative designs made for your requirements.
                            </p>

                            <ul class="service-feature-list">
                                <li>Posters & Flyers</li>
                                <li>Invitations</li>
                                <li>Business Designs</li>
                            </ul>

                            <a href="#contact" class="service-feature-link">
                                Get a Design
                                <span>→</span>
                            </a>

                        </div>

                        <div class="service-feature-visual">
                            <span class="service-orb"></span>
                            <span class="service-grid-pattern"></span>

                            <div class="service-visual-text">
                                DESIGN
                            </div>
                        </div>

                    </article>


                    {{-- Printing --}}
                    <article class="service-feature service-feature-red reveal">

                        <div class="service-feature-content">

                            <span class="service-feature-number">
                                02
                            </span>

                            <h3>
                                Professional Printing
                            </h3>

                            <p>
                                Clear and reliable printing for documents, projects,
                                study materials and business requirements.
                            </p>

                            <a href="#contact" class="service-feature-link">
                                Print with Us
                                <span>→</span>
                            </a>

                        </div>

                        <div class="service-feature-visual">
                            <span class="service-orb"></span>
                            <span class="service-grid-pattern"></span>

                            <div class="service-visual-text">
                                PRINT
                            </div>

                        </div>

                    </article>


                    {{-- Digital --}}
                    <article class="service-feature service-feature-gold reveal">

                        <div class="service-feature-content">

                            <span class="service-feature-number">
                                03
                            </span>

                            <h3>
                                Typing & Digital Services
                            </h3>

                            <p>
                                Document typing, formatting and everyday digital
                                assistance when you need it.
                            </p>

                            <a href="#contact" class="service-feature-link">
                                Get Started
                                <span>→</span>
                            </a>

                        </div>

                        <div class="service-feature-visual">
                            <span class="service-orb"></span>
                            <span class="service-grid-pattern"></span>

                            <div class="service-visual-text">
                                DIGITAL
                            </div>

                        </div>

                    </article>

                </div>

            </div>

        </section>

        <section id="about" class="home-about">

            <div class="home-section-container home-about-container">

                <div class="home-about-visual reveal">

                    <img
                        src="{{asset('images/women-holding-paper-high-angle.webp') }}"
                        alt="Woman holding printed material for I Seen Computer"
                        class="home-about-image"
                    >

                </div>


                <div class="home-about-content reveal">

                    <p class="section-eyebrow">
                        ABOUT I SEEN COMPUTER
                    </p>

                    <h2>
                        Simple Solutions.
                        <br>
                        Reliable Service.
                    </h2>

                    <p>
                        I Seen Computer brings together essential designing,
                        printing, typing and digital services to provide practical
                        solutions for everyday personal, educational and business
                        needs.
                    </p>

                    <p>
                        Our focus is simple: provide quality work, dependable
                        service and convenient solutions in one place.
                    </p>

                    <div class="home-about-points">

                        <div class="about-point">
                            <span class="about-point-number">01</span>

                            <div>
                                <h3>Quality Work</h3>

                                <p>
                                    Careful attention to every design, document and
                                    printing requirement.
                                </p>
                            </div>
                        </div>

                        <div class="about-point">
                            <span class="about-point-number">02</span>

                            <div>
                                <h3>Reliable Service</h3>

                                <p>
                                    Practical support for personal, academic and
                                    business needs.
                                </p>
                            </div>
                        </div>

                        <div class="about-point">
                            <span class="about-point-number">03</span>

                            <div>
                                <h3>Multiple Services</h3>

                                <p>
                                    Essential services brought together in one
                                    convenient place.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section class="home-why-choose">

            <div class="home-section-container">

                <div class="why-choose-header reveal">

                    <p class="section-eyebrow">
                        WHY CHOOSE US
                    </p>

                    <h2>
                        Everything You Need,
                        <br>
                        All in One Place.
                    </h2>

                </div>

                <div class="why-choose-grid reveal">

                    <article class="why-choose-card">

                        <span class="why-choose-number">
                            01
                        </span>

                        <h3>
                            Multiple Services
                        </h3>

                        <p>
                            Designing, printing, typing and digital services
                            available to support different everyday needs.
                        </p>

                    </article>


                    <article class="why-choose-card">

                        <span class="why-choose-number">
                            02
                        </span>

                        <h3>
                            Quality & Care
                        </h3>

                        <p>
                            Every project is handled with attention to detail
                            and a focus on delivering reliable results.
                        </p>

                    </article>


                    <article class="why-choose-card">

                        <span class="why-choose-number">
                            03
                        </span>

                        <h3>
                            Simple & Convenient
                        </h3>

                        <p>
                            Get practical solutions for personal, academic
                            and business requirements in one place.
                        </p>

                    </article>


                    <article class="why-choose-card">

                        <span class="why-choose-number">
                            04
                        </span>

                        <h3>
                            Reliable Support
                        </h3>

                        <p>
                            A straightforward service experience focused on
                            helping you get things done.
                        </p>

                    </article>

                </div>

            </div>

        </section>

        <section class="home-featured-services">

            <div class="home-section-container">

                <div class="featured-services-header reveal">

                    <div>

                        <p class="section-eyebrow">
                            FEATURED SERVICES
                        </p>

                        <h2>
                            Solutions for Every
                            <br>
                            Important Task.
                        </h2>

                    </div>

                    <p class="featured-services-intro">
                        Explore some of the key services offered by I Seen Computer,
                        from creative work and professional printing to everyday
                        document and digital requirements.
                    </p>

                </div>


                <div class="featured-services-grid reveal">

                    <a href="#" class="featured-service-card">

                        <div class="featured-service-image">

                            <img
                                src="{{ asset('images/women-holding-paper-high-angle.webp') }}"
                                alt="Creative designing services"
                            >

                        </div>

                        <div class="featured-service-content">

                            <span class="featured-service-label featured-blue">
                                DESIGN
                            </span>

                            <h3>
                                Creative Designing
                            </h3>

                            <span class="featured-service-arrow">
                                →
                            </span>

                        </div>

                    </a>


                    <a href="#" class="featured-service-card">

                        <div class="featured-service-image">

                            <img
                                src="{{ asset('images/women-holding-paper-high-angle.webp') }}"
                                alt="Professional printing services"
                            >

                        </div>

                        <div class="featured-service-content">

                            <span class="featured-service-label featured-red">
                                PRINT
                            </span>

                            <h3>
                                Professional Printing
                            </h3>

                            <span class="featured-service-arrow">
                                →
                            </span>

                        </div>

                    </a>


                    <a href="#" class="featured-service-card">

                        <div class="featured-service-image">

                            <img
                                src="{{ asset('images/women-holding-paper-high-angle.webp') }}"
                                alt="Typing and digital services"
                            >

                        </div>

                        <div class="featured-service-content">

                            <span class="featured-service-label featured-gold">
                                DIGITAL
                            </span>

                            <h3>
                                Typing & Digital Services
                            </h3>

                            <span class="featured-service-arrow">
                                →
                            </span>

                        </div>

                    </a>

                </div>

            </div>

        </section>

        <section id="homeCta" class="home-cta">

        <div class="home-section-container">

            <div class="home-cta-content reveal">

                <p class="section-eyebrow">
                    LET'S WORK TOGETHER
                </p>

                <h2>
                    Have Something You Need
                    <br>
                    Designed, Printed or Prepared?
                </h2>

                <p>
                    Get in touch with I Seen Computer for reliable designing,
                    printing, typing and digital services.
                </p>

                <a
                    href="{{ route('contact') }}"
                    class="home-cta-button"
                >
                    Contact Us
                    <span>→</span>
                </a>

            </div>

        </div>

    </section>

    </main>

@include('frontend.partials.footer')

@endsection

@push('scripts')
    @vite('resources/js/home.js')
@endpush
