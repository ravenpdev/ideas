@props(['disabled' => false])

@php
    $class = $errors->has($attributes->get('name')) ? 'w-full rounded py-1.5 px-3 border border-red-600 focus:outline-none focus:ring-red-300 focus:ring-1' : 'w-full rounded py-1.5 px-3 border border-slate-300 focus:outline-none focus:ring-purple-300 focus:ring-1';
@endphp

<textarea {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['class' => $class]) }}>{{ $value ?? $slot }}</textarea>

@error($attributes->get('name'))
    <div class="text-sm text-red-600">
        {{ $message }}
    </div>
@enderror
