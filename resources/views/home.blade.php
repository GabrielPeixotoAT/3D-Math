@extends('layouts.app')

@section('subtitle', ' - Home')

@section('content')
<section class="u-align-center u-clearfix u-image u-shading u-section-1 parallax-box parallax-one"
    src="" id="sec-7982"
    data-image-width="1000" data-image-height="750">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-title u-text-1">3D MATH</h1>
        <p class="u-large-text u-text u-text-default u-text-variant u-text-2">O lugar perfeito para encontrar modelos
            matemáticos de alta qualidade.</p>
        <a href=" {{ route('aboutIndex') }} "
            class="u-border-2 u-border-palette-2-base u-btn u-button-style u-hover-palette-2-base u-none u-text-white u-text-palette-2-base u-btn-1">SAIBA
            MAIS</a>
    </div>
</section>

@guest
<section class="u-align-center u-clearfix u-section-2" id="sec-1996">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Novo Usuário?</h2>
        <div class="u-form u-form-1">
          <div class="u-form-group u-form-submit u-align-center">
              <a href=" {{route('register') }}" class="u-btn u-btn-submit u-button-style">CADASTRE-SE</a>
          </div>
          <div class="u-form-group u-form-submit u-align-center">
              <a href=" {{route('login') }}" class="">Já tenho conta.</a>
          </div>
          <input type="hidden" value="" name="recaptchaResponse">
          <input type="hidden" name="formServices" value="cc160b87be88e86df69fb5c0fa0b0798">
        </div>
    </div>
</section>
@endguest

<section class="u-align-center u-clearfix u-section-4" id="carousel_1ba4">
    <div
        class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
        <h2 class="u-text u-text-1">Modelos em Destaque</h2>
        <p class="u-text u-text-2">Estes são os modelos mais vendidos da plataforma.&nbsp;<br>Veja os comentários de
            pessoas que já compraram nossos produtos.
        </p>
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                @foreach ($mostSell as $product)
                <div class="u-container-style u-list-item u-repeater-item">
                  <a class="clear-link" href="{{ route('product', $product->ProductID) }}">
                    <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1 product-item">
                        <img src="{{$product['FileAddress']}}" alt="Imagem de {{$product['Name']}}"
                            class="u-expanded-width u-image u-image-default u-image-1" data-image-width="700"
                            data-image-height="700">
                        <div class="u-align-center u-container-style u-group u-white u-group-1">
                            <div class="u-container-layout u-valign-top u-container-layout-2">
                                <h6 class="u-text u-text-default u-text-3">A partir de</h6>
                                <h3 class="u-text u-text-4">R$ {{$product['Price']}}</h3>
                                <h6 class="u-text u-text-default u-text-5">{{$product['Name']}}<br>
                                </h6>
                            </div>
                        </div>
                    </div>
                  </a>
                </div>
                @endforeach
            </div>
        </div>
        <a href="/catalog"
            class="u-active-black u-border-2 u-border-black u-btn u-button-style u-hover-black u-text-black u-text-hover-white u-gray u-btn-1"
            target="">Ver todos os modelos</a>
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
                        src="" style="background-image: url({{ asset( 'images/1a5a7fb35c074f928ca403a6d3b23b05.jpeg' ) }});" data-image-width="720" data-image-height="405">
                        <div class="u-container-layout u-valign-middle u-container-layout-2" src=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{--
    <section class="u-align-center u-clearfix u-section-6" id="sec-db75">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Produto Mais Vendido</h1>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-7" id="sec-1d0c">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-product u-shape-rectangle u-product-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-carousel u-gallery u-layout-thumbnails u-lightbox u-no-transition u-product-control u-show-text-none u-thumbnails-position-bottom u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-6016">
              <div class="u-carousel-inner u-gallery-inner" role="listbox">
                <div class="u-active u-carousel-item u-gallery-item">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0ibWFuIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4IiB2aWV3Qm94PSIwIDAgMjU2IDI1NiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjU2IDI1NiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cmVjdCBmaWxsPSIjQzZEOEUxIiB3aWR0aD0iMjU2IiBoZWlnaHQ9IjI1NiIvPg0KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xOTIuNyw1NGMwLDAsNS4zLDAuMywxMy4yLDkuMmM3LjksOC45LDE0LjMsMTksMTUuOCwyNS44DQoJYzEuNSw2LjgsMiwxMy42LDAuMywxNy41Yy0xLjgsMy45LTExLjQsMzQuNC0xMS43LDQzLjljLTAuMyw5LjUtMi42LDUzLTIuNiw1M2gtMTAuNWwtMi4xLTU3LjdjMCwwLTAuMy0xMC43LTMuOC0xMC43DQoJYy0zLjUsMC0xNi43LDQuNC0yOC45LDI3QzE1MCwxODQuNSwxNDMsMTk3LjUsMTM2LDIwMC44Yy03LDMuMy01Ny4zLDQuMi03MSwyLjFjLTEzLjctMi4xLTMxLjMtOS41LTMxLjMtOS41cy0zLjgtNy4xLDctMTAuMQ0KCWMxMC44LTMsNDEuOC0xMyw0OC4yLTE2LjljMy43LTIuMiwyOSw2LjksMzguOS01LjFjOS4xLTExLjEsMzcuMy03MSw0NS42LTgyLjlDMTgzLjQsNjQuMSwxOTAuOCw1NCwxOTIuNyw1NHoiLz4NCjwvc3ZnPg0K">
                  </div>
                  <div class="u-over-slide u-over-slide-1">
                    <h3 class="u-gallery-heading">Sample Title</h3>
                    <p class="u-gallery-text">Sample Text</p>
                  </div>
                </div>
                <div class="u-carousel-item u-gallery-item">
                  <div class="u-back-slide">
                    <img class="u-back-image u-expanded" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0ibWFuIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4IiB2aWV3Qm94PSIwIDAgMjU2IDI1NiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjU2IDI1NiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cmVjdCBmaWxsPSIjQzZEOEUxIiB3aWR0aD0iMjU2IiBoZWlnaHQ9IjI1NiIvPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0yMTIuMyw2MS41Yy04LjQtMTQuMy0xMi40LTE2LjItMTQuNi0xNS40Yy0yLjIsMC44LTI1LjksMjMuNS0zNC4zLDM1LjVzLTExLDI5LjMtMTAuNCwzNC43DQoJCQljMC42LDUuMywxLjcsNywxLjcsN3MtOC43LDE1LjktMTIuMSwyNGMtMy40LDguMS0xMi4xLDI0LjYtMTQuMywyNC4zYy0yLjItMC4zLTIyLjgtNy41LTI4LjQtOC45Yy01LjYtMS40LTE2LjktMy42LTIzLjMtMy40DQoJCQljMCwwLTguNCwxMS43LTE4LjUsMTYuOGMtMTAuMSw1LTI1LjMsMTUuNy0yNSwyMC43YzAuMyw1LDQuOCw5LjgsMTMuMiwxMC4zYzguNCwwLjYsNjQuMSwxLjQsODEuOCwwLjMNCgkJCWMxNy43LTEuMSwzNC42LTYuMSwzNi41LTkuNWMyLTMuNCw4LjQtMjIuMSwxMS4yLTMyLjdjMi44LTEwLjYsMTguMy0zMC41LDE4LjMtMzAuNXMzLjcsOC40LDMuOSwyMy44YzAuMywxNS40LDIuMiwzNi4zLDIuMiwzNi4zDQoJCQlsNi41LDAuOGwyLjUtMi4yYzAsMC0xLjEtNDAuOC0wLjYtNDkuMmMwLjYtOC40LDMuMS0yNC4zLDcuNi0yOS45YzQuNS01LjYsNi41LTguNCw2LjctMTMuMUMyMjMuMyw5Ni41LDIyMC43LDc1LjgsMjEyLjMsNjEuNXoNCgkJCSBNMTYzLjcsMTUzLjJjLTcuMywxMy40LTEyLjksMTcuNi0yMS4xLDE5Yy04LjEsMS40LTYuMiwwLjgtNi4yLDAuOHMxMi42LTE5LjksMTguMS0zMWMzLjgtNy43LDkuNy0yNy42LDI1LjItMzUuNQ0KCQkJQzE3OS43LDEwNi41LDE3MSwxMzkuOCwxNjMuNywxNTMuMnoiLz4NCgk8L2c+DQo8L2c+DQo8L3N2Zz4NCg==">
                  </div>
                  <div class="u-over-slide u-over-slide-1">
                    <h3 class="u-gallery-heading">Sample Title</h3>
                    <p class="u-gallery-text">Sample Text</p>
                  </div>
                </div>
              </div>
              <a class="u-carousel-control u-carousel-control-prev u-icon-circle u-opacity u-opacity-70 u-text-grey-60 u-text-hover-grey-75 u-carousel-control-1" href="#carousel-6016" role="button" data-u-slide="prev">
                <span aria-hidden="true">
                  <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
		c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
                </span>
              </a>
              <a class="u-carousel-control u-carousel-control-next u-icon-circle u-opacity u-opacity-70 u-text-grey-60 u-text-hover-grey-75 u-carousel-control-2" href="#carousel-6016" role="button" data-u-slide="next">
                <span aria-hidden="true">
                  <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
		c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
                </span>
              </a>
              <ol class="u-carousel-thumbnails u-spacing-20 u-carousel-thumbnails-1">
                <li class="u-active u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-6016" data-u-slide-to="0">
                  <img class="u-carousel-thumbnail-image u-image" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0ibWFuIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4IiB2aWV3Qm94PSIwIDAgMjU2IDI1NiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjU2IDI1NiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cmVjdCBmaWxsPSIjQzZEOEUxIiB3aWR0aD0iMjU2IiBoZWlnaHQ9IjI1NiIvPg0KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0xOTIuNyw1NGMwLDAsNS4zLDAuMywxMy4yLDkuMmM3LjksOC45LDE0LjMsMTksMTUuOCwyNS44DQoJYzEuNSw2LjgsMiwxMy42LDAuMywxNy41Yy0xLjgsMy45LTExLjQsMzQuNC0xMS43LDQzLjljLTAuMyw5LjUtMi42LDUzLTIuNiw1M2gtMTAuNWwtMi4xLTU3LjdjMCwwLTAuMy0xMC43LTMuOC0xMC43DQoJYy0zLjUsMC0xNi43LDQuNC0yOC45LDI3QzE1MCwxODQuNSwxNDMsMTk3LjUsMTM2LDIwMC44Yy03LDMuMy01Ny4zLDQuMi03MSwyLjFjLTEzLjctMi4xLTMxLjMtOS41LTMxLjMtOS41cy0zLjgtNy4xLDctMTAuMQ0KCWMxMC44LTMsNDEuOC0xMyw0OC4yLTE2LjljMy43LTIuMiwyOSw2LjksMzguOS01LjFjOS4xLTExLjEsMzcuMy03MSw0NS42LTgyLjlDMTgzLjQsNjQuMSwxOTAuOCw1NCwxOTIuNyw1NHoiLz4NCjwvc3ZnPg0K">
                </li>
                <li class="u-carousel-thumbnail u-carousel-thumbnail-1" data-u-target="#carousel-6016" data-u-slide-to="1">
                  <img class="u-carousel-thumbnail-image u-image" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0ibWFuIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjI1NnB4IiBoZWlnaHQ9IjI1NnB4IiB2aWV3Qm94PSIwIDAgMjU2IDI1NiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgMjU2IDI1NiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8cmVjdCBmaWxsPSIjQzZEOEUxIiB3aWR0aD0iMjU2IiBoZWlnaHQ9IjI1NiIvPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGZpbGw9IiM3Rjk2QTYiIGQ9Ik0yMTIuMyw2MS41Yy04LjQtMTQuMy0xMi40LTE2LjItMTQuNi0xNS40Yy0yLjIsMC44LTI1LjksMjMuNS0zNC4zLDM1LjVzLTExLDI5LjMtMTAuNCwzNC43DQoJCQljMC42LDUuMywxLjcsNywxLjcsN3MtOC43LDE1LjktMTIuMSwyNGMtMy40LDguMS0xMi4xLDI0LjYtMTQuMywyNC4zYy0yLjItMC4zLTIyLjgtNy41LTI4LjQtOC45Yy01LjYtMS40LTE2LjktMy42LTIzLjMtMy40DQoJCQljMCwwLTguNCwxMS43LTE4LjUsMTYuOGMtMTAuMSw1LTI1LjMsMTUuNy0yNSwyMC43YzAuMyw1LDQuOCw5LjgsMTMuMiwxMC4zYzguNCwwLjYsNjQuMSwxLjQsODEuOCwwLjMNCgkJCWMxNy43LTEuMSwzNC42LTYuMSwzNi41LTkuNWMyLTMuNCw4LjQtMjIuMSwxMS4yLTMyLjdjMi44LTEwLjYsMTguMy0zMC41LDE4LjMtMzAuNXMzLjcsOC40LDMuOSwyMy44YzAuMywxNS40LDIuMiwzNi4zLDIuMiwzNi4zDQoJCQlsNi41LDAuOGwyLjUtMi4yYzAsMC0xLjEtNDAuOC0wLjYtNDkuMmMwLjYtOC40LDMuMS0yNC4zLDcuNi0yOS45YzQuNS01LjYsNi41LTguNCw2LjctMTMuMUMyMjMuMyw5Ni41LDIyMC43LDc1LjgsMjEyLjMsNjEuNXoNCgkJCSBNMTYzLjcsMTUzLjJjLTcuMywxMy40LTEyLjksMTcuNi0yMS4xLDE5Yy04LjEsMS40LTYuMiwwLjgtNi4yLDAuOHMxMi42LTE5LjksMTguMS0zMWMzLjgtNy43LDkuNy0yNy42LDI1LjItMzUuNQ0KCQkJQzE3OS43LDEwNi41LDE3MSwxMzkuOCwxNjMuNywxNTMuMnoiLz4NCgk8L2c+DQo8L2c+DQo8L3N2Zz4NCg==">
                </li>
              </ol>
            </div>
            <h2 class="u-product-control u-text u-text-1">
              <a class="u-product-title-link" href="#">Título do Produto 1</a>
            </h2>
            <div class="u-product-control u-product-price u-product-price-1">
              <div class="u-price-wrapper u-spacing-10">
                <div class="u-old-price" style="text-decoration: line-through !important;">R$20.00</div>
                <div class="u-price u-text-palette-2-base" style="font-size: 1.5rem; font-weight: 700;">R$17.00</div>
              </div>
            </div>
            <div class="u-product-control u-product-desc u-text u-text-2">
              <p>Texto de amostra. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</p>
            </div>
            <a href="#" class="u-black u-btn u-button-style u-product-control u-btn-1">Add to Cart</a>
          </div>
        </div>
      </div>
    </section>
     --}}

<section class="u-align-center u-clearfix u-section-8" id="sec-1802">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">O que os nossos clientes dizem?</h2>
        <p class="u-text u-text-2">Para ver mais comentários <a href=""
                class="u-active-none u-border-1 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-1"
                target="_blank">clique aqui</a>.
        </p>
        <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                        <div alt="" class="u-image u-image-circle u-image-m" src="" data-image-width="256"
                            data-image-height="256"></div>
                        <p class="u-text u-text-3">"A priori, os modelos 3D mostraram ter uma qualidade altíssima."</p>
                        <h5 class="u-text u-text-4">Celso Eduardo</h5>
                        <h6 class="u-text u-text-5">Professor</h6>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                        <div alt="" class="u-image u-image-circle u-image-f" src="" data-image-width="256"
                            data-image-height="256"></div>
                        <p class="u-text u-text-6">"Modelos exelentes, qualidade incrível, os alunos das disciplinas de
                            cálculo melhoraram consideravelmente a compreensão das geometrias com estes modelos."</p>
                        <h5 class="u-text u-text-7">Pâmela Santos</h5>
                        <h6 class="u-text u-text-8">Coordenadora</h6>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item">
                    <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                        <div alt="" class="u-image u-image-circle u-image-m" src="" data-image-width="256"
                            data-image-height="256"></div>
                        <p class="u-text u-text-9">"bão, pó comprar."</p>
                        <h5 class="u-text u-text-7">Um Usuário</h5>
                        <h6 class="u-text u-text-11">Professor</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="u-align-center u-grey-5 u-clearfix u-section-8" id="sec-1802">
  <div class="u-clearfix u-sheet u-sheet-1">
      <h2 class="u-text u-text-default u-text-1">Nossos Parceiros</h2>
      <p class="u-text u-text-2">Estas são as empresas que apoiam o nosso projeto. <a href=""
              class="u-active-none u-border-1 u-border-grey-75 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-link u-button-style u-hover-none u-none u-text-body-color u-btn-1"
              target="_blank">Clique aqui</a> para se tornar um apiador.
      </p>
      <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
              <div class="u-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                      <div alt="" class="u-image u-image-circle u-image-al-1" src="" data-image-width="256"
                          data-image-height="256"></div>
                      <h5 class="u-text u-text-4">Theropoda Games Studios</h5>
                      <h6 class="u-text u-text-5">Platina</h6>
                  </div>
              </div>
              <div class="u-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                      <div alt="" class="u-image u-image-circle u-image-al-2" src="" data-image-width="256"
                          data-image-height="256"></div>
                      <h5 class="u-text u-text-7">Blue Software</h5>
                      <h6 class="u-text u-text-8">Platina</h6>
                  </div>
              </div>
              <div class="u-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                      <div alt="" class="u-image u-image-circle u-image-al-3" src="" data-image-width="256"
                          data-image-height="256"></div>
                      <h5 class="u-text u-text-7">Impressoras da Bahia</h5>
                      <h6 class="u-text u-text-11">Platina</h6>
                  </div>
              </div>
              <div class="u-align-center u-container-style u-list-item u-repeater-item">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                    <div alt="" class="u-image u-image-circle u-image-al-4" src="" data-image-width="256"
                        data-image-height="256"></div>
                    <h5 class="u-text u-text-7">PXT Softworks</h5>
                    <h6 class="u-text u-text-8">Ouro</h6>
                </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                  <div alt="" class="u-image u-image-circle u-image-al-5" src="" data-image-width="256"
                      data-image-height="256"></div>
                  <h5 class="u-text u-text-7">CodeLab</h5>
                  <h6 class="u-text u-text-8">Ouro</h6>
              </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                <div alt="" class="u-image u-image-circle u-image-al-6" src="" data-image-width="256"
                    data-image-height="256"></div>
                <h5 class="u-text u-text-7">Quadline Solutions</h5>
                <h6 class="u-text u-text-8">Ouro</h6>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
@endsection
