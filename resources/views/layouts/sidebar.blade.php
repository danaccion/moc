<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/home') }}" class="brand-link">
<<<<<<< HEAD
        @if(auth()->check())
            @if(auth()->user()->role == 'member')
                <img 
                    src="{{ asset( 'images/users/' . auth()->user()->id . '/profile_photo/' . auth()->user()->photo ) }}"
                    alt="{{ config('app.name') }} Logo"
                    class="brand-image img-circle elevation-3"
                >
            @else
                <img 
                    src="https://meetovercoffee.design4web.dk/wp-content/uploads/2022/12/logo-full_2.svg"
                    alt="{{ config('app.name') }} Logo"
                    class="brand-image img-circle elevation-3"
                >
            @endif
        @endif
=======
        <img src="https://meetovercoffee.design4web.dk/wp-content/uploads/2022/12/logo-full_2.svg"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
