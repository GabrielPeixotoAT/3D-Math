@extends('layouts.app')

@section('subtitle', ' - Sobre')

@section('content')

<section class="u-align-center u-clearfix u-grey-5 u-section-8" id="sec-1802">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Sobre o Projeto</h2>
        <p class="u-text u-text-2">Este é um projeto interdisciplinar (PI) do curso de Análise e
            Desenvolvimento de Sistemas no IFBA campus Eunápolis.
        </p>
        <br>
        <div class="u-expanded-width u-list u-list-1">
            <div class="col-8 offset-2">
                <article>
                    <h4>Modelo de Negócios</h4>
                    <p>

                    </p>
                </article>
                <br>
                <article>
                    <h4>Objetivo</h4>
                    <p>

                    </p>
                </article>
                <br>
                <article>
                    <h4>Membros</h4>
                    <div class="u-expanded-width u-list u-list-1">
                        <div class="u-repeater u-repeater-4">
                            <div class="u-align-center u-container-style u-list-item u-repeater-item">
                                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                                    <div alt="foto" class="u-image u-image-circle u-image-1" src="{{ asset( 'images/membro-0.jpeg' ) }}" data-image-width="256"
                                        data-image-height="256"></div>
                                    <p class="u-text u-text-3">Daniel Franco</p>
                                </div>
                            </div>
                            <div class="u-align-center u-container-style u-list-item u-repeater-item">
                                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                                    <div alt="" class="u-image u-image-circle u-image-2" src="{{ asset( 'images/membro-1.jpeg' ) }}" data-image-width="256"
                                        data-image-height="256"></div>
                                    <p class="u-text u-text-6">Gabriel Peixoto</p>
                                </div>
                            </div>
                            <div class="u-align-center u-container-style u-list-item u-repeater-item">
                                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                                    <div alt="" class="u-image u-image-circle u-image-3" src="{{ asset( 'images/membro-2.jpg' ) }}" data-image-width="256"
                                        data-image-height="256"></div>
                                    <p class="u-text u-text-9">Joel Varconcelos</p>
                                </div>
                            </div>
                            <div class="u-align-center u-container-style u-list-item u-repeater-item">
                                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                                    <div alt="" class="u-image u-image-circle u-image-4" src="{{ asset( 'images/membro-3.jpeg' ) }}" data-image-width="256"
                                        data-image-height="256"></div>
                                    <p class="u-text u-text-9">Tales</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection
