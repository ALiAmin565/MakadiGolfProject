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
        <x-dash-board.side-bar-item icon="fa-solid fa-gauge" title="DashBoard" link="dashboard" />
        {{-- Home Page  --}}
        <x-dash-board.side-bar-item icon="fa-solid fa-house" title="Home Page" link="home-page.index" />

        {{-- Facilities --}}
        {{-- <x-dash-board.side-bar-item icon="mdi mdi-home menu-icon" title="Facilities" link="facilities.index" /> --}}
        {{-- Replace facilities inside dropDown --}}
        <x-dash-board.side-bar-item-array title="Facility Page" numberDropdown="one" icon="fa-solid fa-filter"
            :values="[
                [
                    'name' => 'Edit Facilities',
                    'action' => 'facilities.index',
                ],
            ]" />
        {{-- About --}}
        <x-dash-board.side-bar-item icon="fa-solid fa-circle-info" title="About Us Page"
            link="about-us-dashboard.index" />
        {{-- Contact Us --}}
        <x-dash-board.side-bar-item-array title="Contact Us Page" numberDropdown="two" icon="fa-solid fa-address-book"
            :values="[
                [
                    'name' => 'Edit Page',
                    'action' => 'contact-us-dashboard.index',
                ],
                [
                    'name' => 'List users',
                    'action' => 'getContactUsUsers.index',
                ],
            ]" />

        {{-- Gallery --}}
        {{-- <i class="fa-regular fa-images"></i> --}}
        <x-dash-board.side-bar-item icon="fa-regular fa-images" title="Gallery Page" link="gallery-dashboard.index" />
        {{-- Partners dropDown     --}}
        <x-dash-board.side-bar-item-array title="Bartners" numberDropdown="three" icon="fa-solid fa-handshake"
            :values="[
                [
                    'name' => 'Edit Partners',
                    'action' => 'partners.index',
                ],
            ]" />
        {{-- Awards --}}
        <x-dash-board.side-bar-item-array title="Awards" numberDropdown="four" icon="fa-solid fa-award "
            :values="[
                [
                    'name' => 'Edit Awards',
                    'action' => 'awards.index',
                ],
            ]" />
        {{-- Holes --}}
        <x-dash-board.side-bar-item-array title="Holes" numberDropdown="one" icon="fa-solid fa-filter"
            :values="[
                [
                    'name' => 'Edit Holes Info',
                    'action' => 'john-sanford-holes.index',
                ],
            ]" />


    </ul>
</nav>
