<li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic{{ $numberDropdown }}" aria-expanded="false"
        aria-controls="ui-basic{{ $numberDropdown }}">
        <span class="menu-title">{{ $title }}</span>
        <i class="menu-arrow"></i>
        <i class="{{ $icon }}"></i>
    </a>
    <div class="collapse" id="ui-basic{{ $numberDropdown }}">
        <ul class="nav flex-column sub-menu">
            @foreach ($values as $value )
            <li class="nav-item"> <a class="nav-link" href={{ route($value['action']) }}>{{ $value['name'] }}</a>
            </li>
            @endforeach
            </li>
        </ul>
    </div>
</li>
