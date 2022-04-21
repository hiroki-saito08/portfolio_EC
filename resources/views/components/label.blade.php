@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm login-logout-form']) }}>
    {{ $value ?? $slot }}
</label>
