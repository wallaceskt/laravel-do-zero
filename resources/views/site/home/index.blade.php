@extends('layouts.site')

@section('content')

<header>

    <div class="hero">

        <div class="main-wrapper">

            <div class="hero__content">

                <h1 class="disply-large">Varius, noster devatios etiam imperium de velox, fortis adiurator</h1>
                <a href="javascript:;" class="button button_sublte button_large" role="button">Cur Triticum potus?</a>

            </div>

            <section class="docked-bar flex-container">

                <div class="hero__information">

                    <p>Rusticus, barbatus pess sed mire tractare de pius, camerarius lixa.</p>

                </div>

                <div class="talk-to-us">

                    <img src="{{ asset('images/Phone-Icon.svg') }}" alt="Ícone de telefone">
                    <a href="tel:(85) 999654321" title="Clique no número do telefone para ligar">(85) 999654321</a>

                </div>

            </section>

        </div>

    </div>

</header>

<section class="category gray-background">

    <div class="main-wrapper flex-container">

        <section class="cultivation__category">

            <picture>
                <source media="(max-width: 768px)" srcset="{{ asset('images/rachel-moenning-zjxYwd4HOu0-unsplash.jpg') }}">
                <img src="{{ asset('images/rachel-moenning-zjxYwd4HOu0-unsplash.jpg') }}" alt="Animais, bovino, suino e aves" width="297" height="447">
            </picture>

            <div class="infos__category">

                <h2 class="title-large">Abnoba barbatus animalis est. <strong>antenna</strong></h2>
                <hr class="thick_divider">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua!</p>
                <a href="{{ route('site.products') }}" class="button button_accent button_large" role="button">Est alter victrix, cesaris.</a>
                
            </div>

            <div class="dots">

                <img src="{{ asset('images/home-dots-pattern.svg') }}" alt="" class="home-pattern">

            </div>

        </section>

        <section class="animal__category">

            <picture>
                <source media="(max-width: 768px)" srcset="{{ asset('images/andrew-neel-ute2XAFQU2I-unsplash.jpg') }}">
                <img src="{{ asset('images/andrew-neel-ute2XAFQU2I-unsplash.jpg') }}" alt="Animais, bovino, suino e aves" width="297" height="447">
            </picture>

            <div class="infos__category">

                <h2 class="title-large">Abarctor, armarium, et clabulare. <strong>barcas</strong></h2>
                <hr class="thick_divider">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua!</p>
                <a href="{{ route('site.products') }}" class="button button_accent button_large" role="button">Est alter victrix, cesaris.</a>
                
            </div>

            <div class="dots">

                <img src="{{ asset('images/home-dots-pattern.svg') }}" alt="" class="home-pattern">

            </div>

        </section>

    </div>

</section>

<section class="blog">

    <div class="main-wrapper">

        <div class="blog__container">

            <div class="blog__introduction">

                <h2 class="title-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="{{ '/blog' }}" role="button">Fraticinida, humani</a>

            </div>

            <article class="card__post">

                <a href="javascript:;">
                    <div class="post__cover">
                        
                        <img src="{{ asset('images/safar-safarov-MSN8TFhJ0is-unsplash.jpg') }}" alt="">
                    
                    </div>

                    <header class="card__post__header">

                        <time class="post__date" datetime="2019-03-29">18 de julho de 2019</time>
                        <h3 class="body-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>

                    </header>
                </a>

            </article>

            <article class="card__post">

                <a href="javascript:;">
                    <div class="post__cover">
                        
                        <img src="{{ asset('images/roman-synkevych-vXInUOv1n84-unsplash.jpg') }}" alt="">
                    
                    </div>

                    <header class="card__post__header">

                        <time class="post__date" datetime="2019-03-29">18 de julho de 2019</time>
                        <h3 class="body-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>

                    </header>
                </a>

            </article>

            <article class="card__post">

                <a href="javascript:;">
                    <div class="post__cover">
                        
                        <img src="{{ asset('images/max-duzij-qAjJk-un3BI-unsplash.jpg') }}" alt="">
                    
                    </div>

                    <header class="card__post__header">

                        <time class="post__date" datetime="2019-03-29">18 de julho de 2019</time>
                        <h3 class="body-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>

                    </header>
                </a>

            </article>

        </div>

    </div>

    <div class="pattern"></div>

</section>

<div class="gray-background testimonials__mobile">

    <div class="main-wrapper flex-container">

        <section class="testimonials">

            <h2 class="title-large">Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit.</h2>

            <section class="flex-container">

                <article class="quote">

                    <div class="avatar__testimonial">

                        <img src="{{ asset('images/Avatar-testimonial.png') }}" alt="">

                    </div>

                    <blockquote>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </blockquote>

                    <footer>

                        <h4 class="title-medium">Lorem ipsum dolor.</h4>
                        <p>Lorem ipsum dolor?</p>

                    </footer>

                </article>

                <article class="quote">

                    <div class="avatar__testimonial">

                        <img src="{{ asset('images/Avatar-testimonial.png') }}" alt="">

                    </div>

                    <blockquote>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                    </blockquote>

                    <footer>

                        <h4 class="title-medium">Lorem ipsum dolor.</h4>
                        <p>Lorem ipsum dolor?</p>

                    </footer>

                </article>

            </section>

        </section>

    </div>

</div>

<section class="cta__home">

    <div class="cta__wrapper">

        <h2 class="title-large">Lorem ipsum dolor sit amet consectetur adipiscing</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="{{ '/produtos' }}" role="button" class="button button_accent">Lorem ipsum dolor.</a>

    </div>

    <div class="pattern"></div>

</section>

@endsection