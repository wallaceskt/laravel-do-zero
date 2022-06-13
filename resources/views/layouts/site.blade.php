<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta name="theme-color" content="blue">
    <meta name="description" content="Camerarius, raptus devatios inciviliter anhelare de festus, clemens luna.">
    <meta name="author" itemprop="MMPX">
    <title>Plasmators assimilant in audax hamburg! Sunt animalises perdere teres, altus calceuses.</title>

    <!-- Adicionar favicon em todas as versões -->
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">

    <!-- Link & Scripts -->
    <link rel="stylesheet" href="https://use.typekit.net/nbc5nyh.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="shortcut icon" type="image/svg" sizes="16x16" id="favicon" href="{{ asset('images/Frame.svg') }}">
    <link rel="shortcut icon" type="image/svg" sizes="32x32" id="favicon" href="{{ asset('images/Frame.svg') }}">
    <link rel="shortcut icon" type="image/svg" sizes="48x48" id="favicon" href="{{ asset('images/Frame.svg') }}">

    <link rel="apple-touch-icon" sizes="48x48" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="96x96" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="256x256" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="348x348" href="{{ asset('images/Frame.svg') }}">
    <link rel="apple-touch-icon" sizes="512x512" href="{{ asset('images/Frame.svg') }}">

    <link rel="stylesheet" href="{{ asset('lightbox/css/lightbox.css') }}">

    <style>
        .cultivation__category .infos__category {
            left: 120px;
        }

        .animal__category .infos__category {
            right: 120px;
        }

        /* .cultivation__category .home-pattern {
            left: 123px;
            bottom: -50px;
            z-index: -1;
        } */

        .dots {
            width: 130px;
            height: 111px;
            position: absolute;
            z-index: 0;
        }

        .cultivation__category .dots {
            left: 243px;
            bottom: 10px;
        }

        .animal__category .dots {
            right: 251px;
            top: 10px;
        }

        /* .animal__category .home-pattern {
            position: absolute;
            right: 123px;
            top: -50px;
            z-index: -1;
        } */
    </style>
</head>

<body>

    <!-- Topo -->
    <nav>
        <div class="main-wrapper">

            <div class="flex-container">

                <a href="{{ route('site.home') }}" class="logotipo">
                    <img src="{{ asset('images/Asset_1.svg') }}" alt="logo">
                </a>

                <ul class="navigation__itens" id="menu">
                    <li>
                        <a href="{{ route('site.home') }}">Página principal <span class="border-effect"></span></a>
                    </li>
                    <li>
                        <a href="{{ route('site.products') }}">Produtos <span class="border-effect"></span></a>
                    </li>
                    <li>
                        <a href="{{ route('site.blog') }}">Blog <span class="border-effect"></span></a>
                    </li>
                    <li>
                        <a href="{{ route('site.about') }}">Sobre <span class="border-effect"></span></a>
                    </li>
                    <li>
                        <a href="{{ route('site.contact') }}">Contato <span class="border-effect"></span></a>
                    </li>
                </ul>

                <!-- Hamburger menu -->
                <div id="toggle">

                    <div class="span" id="one"></div>
                    <div class="span" id="two"></div>
                    <div class="span" id="three"></div>

                </div>

            </div>

        </div>
    </nav>

    <!-- Hamburger menu list -->
    <div id="resize">

        <ul id="menu">
            <li><a href="{{ url('/') }}" class="title-menium">Página principal</a></li>
            <li><a href="{{ route('site.products') }}" class="title-menium">Produtos</a></li>
            <li><a href="{{ route('site.blog') }}" class="title-menium">Blog</a></li>
            <li><a href="{{ route('site.about') }}" class="title-menium">Sobre</a></li>
            <li><a href="{{ route('site.contact') }}" class="title-menium">Contato</a></li>
        </ul>

    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="main_footer">

        <div class="dots_pattern"></div>

        <div class="main-wrapper flex-container">

            <div class="quality-badge">

                <p>Lorem ipsum dolor?</p>
                <p>Lorem ipsum dolor dorem?</p>

            </div>

            <ul>
                <li class="footer__links">
                    <h4 class="title-small">Redes Sociais</h4>
                    <a href="{{ route('site.blog') }}">Blog</a>
                    <a href="http://www.facebook.com" target="_blank">Facebook</a>
                    <a href="http://www.youtube.com" target="_blank">Youtube</a>
                </li>
                <li class="footer__links">
                    <h4 class="title-small">Empresa</h4>
                    <a href="{{ route('site.products') }}">Nossos produtos</a>
                    <a href="{{ route('site.about') }}">Sobre nós</a>
                    <a href="{{ route('site.contact') }}">Entre em contato</a>
                </li>
                <li class="footer__links">
                    <h4 class="title-small">Contatos</h4>
                    <a href="tel:(85) 999654321" title="Clique no número do telefone para ligar">Telefone</a>
                    <a href="mailto:wallacesales@gmail.com" title="Clique no e-mail para enviar um e-mail automático">E-mail</a>
                </li>
            </ul>

        </div>

    </footer>

    <section class="sub__footer">

        <div class="main-wrapper flex-container">

            <a href="#">
                <img src="{{ asset('images/Lock-icon.svg') }}" alt="Ícone de cadeado">CMS
            </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
            <a href="http://www.mmpx.com.br" target="_blank">Design by <strong>MMPX</strong></a>

        </div>

    </section>

</body>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Lightbox -->
<script src="{{ asset('lightbox/js/lightbox.js') }}"></script>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script>
    $("#toggle").click(function() {
        $(this).toggleClass("on")
        $("#resize").toggleClass("active")
    });
</script>

</html>