<x-dash-board.layouts.app>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" id="selectAll">Select All</button>
                <button type="button" class="btn btn-secondary" id="deselectAll">Deselect All</button>
                <button type="button" class="btn btn-gradient-danger" id="deleteSelected" >Delete Selected</button>
                <button type="button" class="btn btn-primary"> <a href="{{ route('awards.create') }}"
                        style="text-decoration:none;color:white;">Add Award</a></button>
            </div>
        </div>
        <br>
        <div class="row">
            @foreach ($awards as $award)
                <div class="col-md-4 stretch-card grid-margin">

                    <div class="card card-img-holder text-black">
                        <h6 class="card-text m-2">
                            <input type="checkbox" name="selectedAwards[]" class="form-check-input"
                                value="{{ $award->id }}">
                        </h6>
                        <div class="card-body">
                            <img src="assetsFront/images/awards/{{ $award->image }}" class="card-img-absolute"
                                alt="{{ $award->name }}" style="object-fit: contain;width: 50%;" />
                            <h4 class="mb-5">{{ $award->name }}</h4>
                            <h6 class="card-text">
                                <a href="{{ route('awards.edit', $award->id) }}"
                                    style="text-decoration: none; color:white;"
                                    class="btn btn-gradient-primary me-2">Edit</a>
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </div>
    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Add JavaScript to handle form submission
                const selectAllButton = document.getElementById("selectAll");
                const deselectAllButton = document.getElementById("deselectAll");
                const deleteSelectedButton = document.getElementById("deleteSelected");

                selectAllButton.addEventListener("click", function() {
                    checkAllCheckboxes(true);
                });

                deselectAllButton.addEventListener("click", function() {
                    checkAllCheckboxes(false);
                });

                deleteSelectedButton.addEventListener("click", function() {
                    const selectedPartners = document.querySelectorAll(
                        'input[name="selectedAwards[]"]:checked');
                    if (selectedPartners.length > 0) {
                        const facilityIds = Array.from(selectedPartners).map(checkbox => checkbox.value);
                        const form = document.createElement("form");
                        form.setAttribute("method", "POST");
                        form.setAttribute("action", "{{ route('awards-dash-board-delete-multiple') }}");
                        form.classList.add("d-none"); // Hide the form

                        const csrfTokenInput = document.createElement("input");
                        csrfTokenInput.setAttribute("type", "hidden");
                        csrfTokenInput.setAttribute("name", "_token");
                        csrfTokenInput.setAttribute("value", "{{ csrf_token() }}");
                        const methodInput = document.createElement("input");
                        methodInput.setAttribute("type", "hidden");
                        methodInput.setAttribute("name", "_method");
                        methodInput.setAttribute("value", "DELETE");

                        facilityIds.forEach(function(facilityId) {
                            const input = document.createElement("input");
                            input.setAttribute("type", "hidden");
                            input.setAttribute("name", "selectedAwards[]");
                            input.setAttribute("value", facilityId);
                            form.appendChild(input);
                        });

                        form.appendChild(csrfTokenInput);
                        form.appendChild(methodInput);
                        document.body.appendChild(form);
                        form.submit();
                    } else {
                        // Handle the case where no checkboxes are selected
                        alert("No facilities selected for deletion.");
                    }
                });

                function checkAllCheckboxes(checked) {
                    const checkboxes = document.querySelectorAll('input[name="selectedAwards[]"]');
                    checkboxes.forEach(function(checkbox) {
                        checkbox.checked = checked;
                    });
                }

                function uncheckAllCheckboxes() {
                    checkAllCheckboxes(false);
                }
            });
        </script>
    @endpush
</x-dash-board.layouts.app>