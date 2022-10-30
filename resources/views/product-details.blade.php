@extends('app')

@section('content')

<section class="u-align-center u-clearfix u-section-6" id="sec-db75">
    <h1 class="u-text u-text-default u-text-1">Detalhes</h1>
</section>
    <section class="u-align-center u-clearfix u-section-7" id="sec-1d0c">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-product u-shape-rectangle u-product-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-carousel u-gallery u-layout-thumbnails u-lightbox u-no-transition u-product-control u-show-text-none u-thumbnails-position-bottom u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-6016">
              <div class="u-carousel-inner u-gallery-inner" role="listbox">
                <div class="u-active u-carousel-item u-gallery-item">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="{{$product->FileAddress}}">
                  </div>
                </div>
              </div>
            </div>
            <h2 class="u-product-control u-text u-text-1">
              <a class="u-product-title-link">{{$product->Name}}</a>
            </h2>
            <div class="u-product-control u-product-price u-product-price-1">
              <div class="u-price-wrapper u-spacing-10">
                <div class="u-old-price" style="text-decoration: line-through !important;">R${{$product->Price + 9.99}}</div>
                <div class="u-price u-text-palette-2-base" style="font-size: 1.5rem; font-weight: 700;">R${{$product->Price}}</div>
              </div>
            </div>
            <div class="u-product-control u-product-desc u-text u-text-2">
              <p>{{$product->Description}}</p>
            </div>
            <div class="u-product-control u-product-desc u-text u-text-2">
              <p>Categoria: {{$product->Category}}</p>
            </div>
            <a href="#" class="u-black u-btn u-button-style u-product-control u-btn-1">Add to Cart</a>
          </div>
        </div>
      </div>
    </section>

<section class="u-clearfix u-grey-5 u-section-5" id="sec-02c1">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout" style="">
                <div class="u-layout-row" style="">
                    <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1"
                        src="">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                            <h2 class="u-align-center u-text u-text-default u-text-1">Pesquise por Categoria</h2>
                            <p class="u-align-center u-text u-text-2">Descubra nossos produtos navegando por categorias.
                            </p>
                            <a href="#"
                                class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Ver
                                Modelos</a>
                        </div>
                    </div>
                    <div class="u-align-center u-container-style u-image u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-image-1"
                        src="" data-image-width="720" data-image-height="405">
                        <div class="u-container-layout u-valign-middle u-container-layout-2" src=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection