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

        {{-- Facilities --}}
        {{-- <x-dash-board.side-bar-item icon="mdi mdi-home menu-icon" title="Facilities" link="facilities.index" /> --}}
        {{-- Replace facilities inside dropDown --}}    
        <x-dash-board.side-bar-item-array title="Facility Page" numberDropdown="one"
            icon="mdi mdi-information-variant menu-icon"
           :values="[[
                'name' => 'Edit Facilities',
                'action' => 'facilities.index',
            ]]" />
        {{-- About --}}
        <x-dash-board.side-bar-item icon="mdi mdi-home menu-icon"  title="About Us Page" link="about-us-dashboard.index" />
        {{-- Contact Us --}}
        <x-dash-board.side-bar-item-array title="Contact Us Page" numberDropdown="two"
            icon="mdi mdi-information-variant menu-icon"
            :values="[[
                'name' => 'Edit Page',
                'action' => 'contact-us-dashboard.index',
            ],[
                'name' => 'List users',
                'action' => 'getContactUsUsers.index',
            ],]" />

        {{-- Gallery --}}
        <x-dash-board.side-bar-item icon="mdi mdi-home menu-icon" title="Gallery Page" link="gallery-dashboard.index" />
        {{-- Partners dropDown     --}}
        <x-dash-board.side-bar-item-array title="Bartners" numberDropdown="three"
            icon="mdi mdi-information-variant menu-icon"
            :values="[[
                'name' => 'Edit Partners',
                'action' => 'partners.index',
            ]]" />

    </ul>
</nav>
