<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link  {{ Request::is('faculty*') ? 'active' : '' }}" aria-current="page"
                href="{{ url('faculty') }}">คณะวิชา</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ Request::is('teacher*') ? 'active' : '' }}" href="{{ url('teacher') }}">อาจารย์</a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ Request::is('student*') ? 'active' : '' }}" href="{{ url('student') }}">นักศึกษา</a>
        </li>

    </ul>
</div>
