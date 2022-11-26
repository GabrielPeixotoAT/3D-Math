@extends('layouts.app')

@section('subtitle', ' - Contato')

@section('content')

<<section class="u-align-center u-clearfix u-section-8" id="sec-1802">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Entrar em Contato</h2>
        <p class="u-text u-text-2">Preencha este formulário com os dados requeridos e envie para nossa equipe.
        </p>
        <br>
        <div class="u-expanded-width u-list u-list-1">
            <div class="col-6 offset-3">
                <form method="POST" action="">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Nome')" />

                        <input type="text" id="name" name="name" value="{{ Auth::user()->name }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle block mt-1 w-full" required readonly>

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />

                        <input type="email" id="email" name="email" value="{{ Auth::user()->email }}"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle block mt-1 w-full" required readonly>

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Category -->
                    <div>
                        <br>
                        <x-input-label for="category" :value="__('Cateogria da sua requisição')" />

                        <select name="category" id="category" class="u-border-1 u-border-grey-30 u-input u-input-rectangle block mt-1 w-full">
                            <option value="0">Selecione uma categoria</option>
                            <option value="1">Sugerir modelo 3D</option>
                            <option value="2">Tirar alhguma dúvida</option>
                            <option value="3">Relatar um problema</option>
                            <option value="4">Solicitar mais informações de modelos</option>
                        </select>

                        <x-input-error :messages="$errors->get('category')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="message" :value="__('Mensagem')" />

                        <textarea name="message" id="message" cols="57" rows="5"
                            class="u-border-1 u-border-grey-30 u-input u-input-rectangle"></textarea>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Enviar') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
