@props(['title', 'name', 'value', 'readonly' => false, 'disabled' => false])
<div class="mb-3">
    <label for="{{ $title }}" class="form-label">{{ $title }}</label>
    <input type="text" class="form-control" id="{{ $title }}" name="{{ $name }}"
        placeholder="Enter Your Data" value="{{ $value }}"   @if ($readonly) readonly @endif
        @if ($disabled) disabled @endif>
</div>



