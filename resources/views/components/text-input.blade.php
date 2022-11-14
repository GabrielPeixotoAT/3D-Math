@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'u-border-1 u-border-grey-30 u-input u-input-rectangle']) !!}>
