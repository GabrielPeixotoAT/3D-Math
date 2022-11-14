<button {{ $attributes->merge(['type' => 'submit', 'class' => 'u-btn u-btn-submit u-button-style']) }}>
    {{ $slot }}
</button>
