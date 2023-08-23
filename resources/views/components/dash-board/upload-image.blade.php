@props(['title', 'name', 'value', 'multiple'=>false ,'readonly' => false, 'disabled' => false])
<div class="mb-3">
    <label for="{{ $title }}" class="form-label">{{ $title }}</label>
    <input class="form-control" type="file" name="{{ $name }}" id="{{ $title }}"
        value="{{ $value }}" @if ($readonly) readonly @endif
        @if ($disabled) disabled @endif @if ($multiple) multiple @endif>
</div>
