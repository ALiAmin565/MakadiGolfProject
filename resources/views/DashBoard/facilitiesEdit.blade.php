<x-dash-board.layouts.app>
    <div class="content-wrapper">
        @if (session()->has('success'))
            <div class="alert alert-primary text-center">{{ session()->get('success') }}</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-primary" id="selectAll">Select All</button>
                <button type="button" class="btn btn-secondary" id="deselectAll">Deselect All</button>
                <button type="button" class="btn btn-gradient-danger" id="deleteSelected">Delete Selected</button>
                <button type="button" class="btn btn-primary"> <a href="{{ route('facilities.create') }}"
                        style="text-decoration:none;color:white;">Add Facility</a></button>
            </div>
        </div>
        <br>
        <div class="row">
            @foreach ($facilities as $facility)
                <div class="col-md-4 stretch-card grid-margin">

                    <div class="card card-img-holder text-black">
                        <h6 class="card-text m-2">
                            <input type="checkbox" name="selectedFacilities[]" class="form-check-input"
                                value="{{ $facility->id }}">
                        </h6>
                        <div class="card-body">
                            <img src="assetsFront/images/facility/{{ $facility->image }}" class="card-img-absolute"
                                alt="{{ $facility->name }}" style="object-fit: contain;width: 50%;" />
                            <h4 class="mb-5">{{ $facility->name }}</h4>
                            <h6 class="card-text">
                                <a href="{{ route('facilities.edit', $facility->id) }}"
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
                    const selectedFacilities = document.querySelectorAll(
                        'input[name="selectedFacilities[]"]:checked');

                    if (selectedFacilities.length > 0) {
                        const confirmation = window.confirm(
                            "Are you sure you want to delete the selected facilities?");
                        if (confirmation) {
                            const facilityIds = Array.from(selectedFacilities).map(checkbox => checkbox.value);
                            const form = document.createElement("form");
                            form.setAttribute("method", "POST");
                            form.setAttribute("action", "{{ route('facilities-dash-board-delete-multiple') }}");
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
                                input.setAttribute("name", "selectedFacilities[]");
                                input.setAttribute("value", facilityId);
                                form.appendChild(input);
                            });

                            form.appendChild(csrfTokenInput);
                            form.appendChild(methodInput);
                            document.body.appendChild(form);
                            form.submit();
                        }
                    } else {
                        // Handle the case where no checkboxes are selected
                        alert("No facilities selected for deletion.");
                    }
                });

                function checkAllCheckboxes(checked) {
                    const checkboxes = document.querySelectorAll('input[name="selectedFacilities[]"]');
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
