@props(['name', 'label', 'readonly' => false, 'disabled' => false, 'multiple' => false])
<div>
    <label for="{{ $name }}">{{ $label }}</label>
    <select id="{{ $name }}" name="{{ $name }}" @if ($disabled) disabled @endif
        class="form-select" @if ($multiple) multiple @endif>
        {{ $slot }}
    </select>
</div>
