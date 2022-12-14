@extends('layouts.app')

@section('subtitle', ' - Catálogo')

@section('content')

<section class="u-align-center u-clearfix u-section-4" id="carousel_1ba5">
  <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1">
    <h2 class="u-text u-text-1">Catálogo</h2>
    <p class="u-text u-text-2">Bem-vindo ao nosso catálogo.&nbsp;<br>Você pode navegar pelos nossos modelos ou pesquisar por um modelo específico.
    </p>
    <div class="u-expanded-width u-list u-list-1">
      <div class="u-repeater u-repeater-1">
        @if ($products->count() > 0)
          @foreach ($products as $product)
          <div class="u-container-style u-list-item u-repeater-item" style="margin-bottom: 30px;">
            <a class="clear-link" href="{{ route('product', $product->ProductID) }}" class="product-item">
              <div class="u-container-layout u-similar-container u-valign-bottom u-container-layout-1">
                <img src="{{$product['FileAddress']}}" alt=""
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
          @else
          <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
            <div class="u-layout" style="">
                <div class="u-layout-row" style="">
                    <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1"
                        src="">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                            <h2 class="u-align-center u-text u-text-default u-text-1">Não encontramos nenhum produto para mostrar.</h2>
                            <p class="u-align-center u-text u-text-2">Parece que nosso servidor nã o encontrou nenhum produto, tente recarregar a página para tentar resolver.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
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
                            <h2 class="u-align-center u-text u-text-default u-text-1">Não encontrou o que procurava?</h2>
                            <p class="u-align-center u-text u-text-2">Caso você tenha uma sujestão ou uma pedido especial que queira passar para nossa equipe, entre em contato conosco.
                            </p>
                            <a href="{{ route('contactIndex') }}"
                                class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Entrar em contato</a>
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
