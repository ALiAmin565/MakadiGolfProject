 @props(['title', 'name', 'value', 'readonly' => false, 'disabled' => false])

<div class="mb-3">
    <label for="{{ $title }}" class="form-label">{{ $title }}</label>
    <textarea
        class="form-control"
        name="{{ $name }}"
        id="{{ $title }}"
        placeholder="Enter Your Data"
        rows="5"
        @if($readonly) readonly @endif
        @if($disabled) disabled @endif
    >{{ $value }}</textarea>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#{{ $title }}'))
        .catch(error => {
            console.error(error);
        });
</script>
