@props(['disabled' => false])

@php
    $class = $errors->has($attributes->get('name')) ? 'w-full rounded py-1.5 px-3 border border-red-600 focus:outline-none focus:ring-1 focus:ring-red-300' : 'w-full rounded py-1.5 px-3 border border-purple-500 focus:outline-none focus:ring-1 focus:ring-purple-300';
@endphp

<input {{ $attributes->merge(['class' => $class]) }} value={{ $valuel ?? $slot }}>

@error($attributes->get('name'))
    <div class="text-sm text-red-600">
        {{ $message }}
    </div>
@enderror
