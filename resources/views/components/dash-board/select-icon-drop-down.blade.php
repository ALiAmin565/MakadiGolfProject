@props(['name','label' ,'readonly' => false, 'disabled' => false])
<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <select id="{{ $name }}" name="{{ $name }}" @if($disabled) disabled @endif class="form-select">
        {{ $slot }}
    </select>
</div>
