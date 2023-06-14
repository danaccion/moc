@if (auth()->user()->role == 'member')
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('my.networks') }}" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>Mine netværk</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('my.matches') }}" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>Mine match</p>
    </a>
</li>
@endif

@if (auth()->user()->role == 'super admin')
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('networks.index') }}" class="nav-link">
        <i class="nav-icon fas fa-network-wired"></i>
        <p>
            Networks
        </p>
    </a>
</li>
@endif

@if (auth()->user()->role == 'network admin')
<<<<<<< HEAD
    @if (auth()->user()->networkAdmin->slug)
        <li class="nav-item">
            <a href="{{ route('network.profile', auth()->user()->networkAdmin->slug) }}" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>Home</p>
            </a>
        </li>
    @endif

=======
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
<li class="nav-item">
    <a href="{{ route('admin.members.index') }}" class="nav-link">
        <i class="nav-icon fas fa-users"></i>
        <p>Members</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.settings.index') }}" class="nav-link">
        <i class="nav-icon fas fa-cog"></i>
        <p>Settings</p>
    </a>
</li>
@endif