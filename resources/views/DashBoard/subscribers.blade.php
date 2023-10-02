<x-dash-board.layouts.app>
    @push('styles')
        <style>
            /* Popup Styles */
            .popup {
                display: none;
                position: relative;
                bottom: 50%;
                left: 25%;
                width: 50%;
                height: 50%;
                /* background-color: rgba(0, 0, 0, 0.7); */
                z-index: 1;
            }

            .popup-content {
                background-color: #fff;
                position: relative;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
                z-index: 10;
            }

            .popup-close {
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 24px;
                cursor: pointer;
            }

            div.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
                display: none;
            }

            /* flex justify-between flex-1 sm:hidden */

            nav.flex.items-center.justify-between {
               text-align: center;
            }
        </style>
    @endpush
    <div class="content-wrapper">
        <h1 class="text-center"> List of users </h1>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Tickets</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Full Name </th>
                                        <th> Phone Number </th>
                                        <th> Email </th>
                                        <th> Last Update </th>
                                        <th> Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscribers as $subscriber)
                                        <tr>
                                            <td> {{ $loop->iteration }} </td>
                                            <td>
                                                {{ $subscriber->firstname . ' ' . $subscriber->lastname }}
                                            </td>
                                            <td> {{ $subscriber->number }} </td>
                                            <td> {{ $subscriber->email }}</td>
                                            <td> {{ $subscriber->created_at }}</td>
                                            <td>
                                                <label class="badge badge-gradient-danger show-popup-label"
                                                    style="cursor: pointer;"
                                                    data-subscriber-message="{{ $subscriber->message }}">Show</label>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pagination" style="justify-content: space-around;">
                        <ul class="pagination-boxes">
                            <!-- Previous Page Link -->
                            @if ($subscribers->onFirstPage())
                                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                    <span aria-hidden="true">&lsaquo;</span>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $subscribers->url(1) }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                                </li>
                            @endif
                    
                            <!-- Pagination Elements -->
                            @foreach ($subscribers->getUrlRange(1, $subscribers->lastPage()) as $page => $url)
                                @if ($page == $subscribers->currentPage())
                                    <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                    
                            <!-- Next Page Link -->
                            @if ($subscribers->hasMorePages())
                                <li>
                                    <a href="{{ $subscribers->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                                </li>
                            @else
                                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                    <span aria-hidden="true">&rsaquo;</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                    {{-- {{ $subscribers->links() }} <!-- This will display the pagination links --> --}}
                </div>
            </div>
        </div>
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="popup-close" id="popup-close">&times;</span>
                <p id="popup-message"></p>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            // Function to show the popup with a given message
            function showPopup(message = '') {
                // Set the message content
                document.getElementById('popup-message').innerHTML = message;
                document.getElementById('popup-message').style.wordBreak = 'break-all';
                // Show the popup
                document.getElementById('popup').style.display = 'block';
                // middle the popup
                document.getElementById('popup').style.justifyContent = 'center';
                document.getElementById('popup').style.alignItems = 'center';
            }
            // Function to hide the popup
            function hidePopup() {
                document.getElementById('popup').style.display = 'none';
            }

            // Add a click event listener to the "Show" button in your table
            var showButtons = document.querySelectorAll('.show-popup-label');
            showButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Fetch the message from the database (you'll need to implement this)
                    var message = button.getAttribute('data-subscriber-message');

                    // Show the popup with the fetched message
                    showPopup(message);
                });
            });

            // Add a click event listener to the popup close button
            document.getElementById('popup-close').addEventListener('click', hidePopup);
        </script>
    @endpush
</x-dash-board.layouts.app>
