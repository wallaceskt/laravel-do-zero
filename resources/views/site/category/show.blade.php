@extends('layouts.site')

@section('content')

<header class="common-header">

    <div class="header-wrapper">

        {{-- <h1 class="title-large">With apples drink teriyaki.</h1> --}}

    </div>

    <div class="pattern__header"></div>

</header>

<div class="products__general main-wrapper">

    <aside class="product__selected">

        <article class="card__product card__product-category">

            <a href="products-detail.php">

                <div class="card__cover">

                    <img src="{{ asset($category->image) }}"><!--  style="width: 322px;" -->

                </div>

                <header class="card__product-header">

                    <h1 class="title-medium">{{ $category->name }}</h1>
                    <p>{{ $category->description }}</p>

                </header>

            </a>

        </article>

        <a class="back-to-products" href="{{ route('site.products')}}">Voltar</a>

    </aside>

    <section class="products__list">

        <header>

            <h2 class="title-large">Cum quadra ridetis, omnes visuses imitari regius, brevis brodiumes.</h2>
            <p>Ususs favere! Tabes grandis palus est. Sunt mensaes magicae fatalis, placidus genetrixes. Cum musa unda, omnes amores attrahendam pius, noster particulaes.</p>

        </header>

        @foreach($category->products as $product)
        <article class="product">

            <a class="clickable-area" href="javascript:;">

                <header class="product__header">

                    <h3 class="title-medium">{{ $product->name }}</h3>
                    <!-- Tooggle item -->
                    <span class="collapse__icon"></span>

                </header>

                @if($product->exclusive)
                    <img class="exclusive__label" src="{{ asset('images/Exclusivo-label.png') }}" alt="Etiqueta de produto exclusivo">
                @endif

            </a>

            <section class="product__content">

                <div class="product__desciption">

                    {{ $product->description }}

                </div>

            </section>

        </article>
        @endforeach

    </section>

</div>

<style>
.card__product-category {
    height: auto !important;
    max-height: fit-content !important;
}

.card__product a .card__cover {
    max-height: 100% !important;
    max-width: fit-content;
    overflow: hidden;
}
section .product__desciption {
    max-height: fit-content;
    padding: 20px 0 !important;
}
.product__content {
    padding: 0 18px !important;
    /* background-color: white; */
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}

.collapse__icon::after {
    /* content: '\02795'; // Unicode character for "plus" sign (+)
    font-size: 13px;
    color: #777; */
    content: url('../images/collapse-closed.svg');
    float: right;
    margin-left: 5px;
}

.active .collapse__icon::after {
    /*content: "\2796";  Unicode character for "minus" sign (-) */
    content: url('../images/collapse-open.svg');
}
</style>

<script>
var acc = document.getElementsByClassName("clickable-area");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
    } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
    }
    });
}
</script>

@endsection