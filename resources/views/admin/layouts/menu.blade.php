<li class="nav-item {{ Request::is('categories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.categories.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categories</span>
    </a>
</li>
<li class="nav-item {{ Request::is('services*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.services.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Services</span>
    </a>
</li>
<li class="nav-item {{ Request::is('jobeurs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.jobeurs.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Jobeurs</span>
    </a>
</li>
<li class="nav-item {{ Request::is('posts*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.posts.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Posts</span>
    </a>
</li>
<li class="nav-item {{ Request::is('demendes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('admin.demendes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Demendes</span>
    </a>
</li>
