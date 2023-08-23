<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        {{-- Profile --}}
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="nav-profile-image">
                    <img src="{{ asset('assets/images/faces/face1.jpg') }}" alt="profile">
                    <span class="login-status online"></span>
                    <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                    <span class="font-weight-bold mb-2">David Grey. H</span>
                    <span class="text-secondary text-small">Project Manager</span>
                </div>
            </a>
        </li>
        {{-- DashBoard  --}}
        <x-dash-board.side-bar-item icon="menu-icon mdi mdi-adjust" title="DashBoard" link="dashboard" />
        {{-- Home Page  --}}
        <x-dash-board.side-bar-item icon="mdi mdi-home menu-icon" title="Home Page" link="home-page.index" />
        {{-- About --}}
        {{-- @php
            $arrayOne = [
                [
                    'name' => 'GM Introduction',
                    'action' => 'introduction',
                ],
                [
                    'name' => 'Meet The Team',
                    'action' => '##',
                ],
                [
                    'name' => "Egypt's No.1 Golf Course",
                    'action' => '#',
                ],
            ];
        @endphp
        <x-dash-board.side-bar-item-array title="About Pages" numberDropdown="one"
            icon="mdi mdi-information-variant menu-icon" :values=$arrayOne /> --}}
        {{-- Facilities --}}
        {{-- @php
            $arrayTwo = [
                [
                    'name' => 'Club House',
                    'action' => '###',
                ],
                [
                    'name' => 'Food & Beverage',
                    'action' => '##',
                ],
                [
                    'name' => 'Golf Shop',
                    'action' => '#',
                ],
                [
                    'name' => 'Published Rates',
                    'action' => '#',
                ],
                [
                    'name' => 'Academy',
                    'action' => '#',
                ],
                [
                    'name' => 'Winter PGA Training Camps',
                    'action' => '#',
                ],
                [
                    'name' => 'Madinat Makadi Resort, Golf & Spa',
                    'action' => '#',
                ],
            ];
        @endphp
        <x-dash-board.side-bar-item-array title="Facilities Pages" numberDropdown="two"
            icon="mdi mdi-information-variant menu-icon" :values=$arrayTwo /> --}}

        <x-dash-board.side-bar-item icon="mdi mdi-home menu-icon" title="Facilities" link="facilities.index" />
        {{-- Gallery --}}
        {{-- <x-dash-board.side-bar-item icon="mdi mdi-home menu-icon" title="Gallery Page" link="GelleryPage.index" /> --}}


    </ul>
</nav>
