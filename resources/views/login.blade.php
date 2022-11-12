@extends('app')

@section('subtitle', ' - Login')

@section('content')
<section class="u-align-center u-clearfix u-section-2" id="sec-1996">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Entrar</h2>
        <div class="u-form u-form-1">
            <form action=""
                class="u-clearfix u-form-vertical u-form-spacing-15 u-inner-form" style="padding: 15px;"
                source="email">
                <div class="u-form-email u-form-group u-label-none">
                    <label for="email-ef64" class="u-label">Email</label>
                    <input type="email" placeholder="Email" id="email-ef64" name="email"
                        class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required>
                </div>
                <div class="u-form-group u-form-password u-label-none">
                    <label for="name-ef64" class="u-label">Senha</label>
                    <input type="password" placeholder="Senha" id="pass-ef64" name="password"
                        class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required>
                </div>
                <br>
                <div class="u-form-group u-form-submit u-align-center">
                    <button type="submit" class="u-btn u-btn-submit u-button-style">Entrar</button>
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
                <input type="hidden" name="formServices" value="cc160b87be88e86df69fb5c0fa0b0798">
            </form>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
</section>
@endsection
