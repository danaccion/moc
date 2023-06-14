<section class="pt-5">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 fs-5">
            <div class="col-md-12 align-self-center py-5 view-profile-container">
                <div class="row align-self-center text-center">
                    <div class="col-12">
                        <div class="img-container">
<<<<<<< HEAD
                            @if (auth()->check() && auth()->user()->photo)
                                <img 
                                    src="{{ asset('images/users/' . auth()->user()->id . '/profile_photo/' . auth()->user()->photo) }}" 
                                    style="width: 400px; height: 400px" 
                                    class="profileImage img-fluid rounded-circle" alt="..."
                                >
                            @else
                                <img 
                                    src="{{ 'https://dummyimage.com/400x400/dee2e6/6c757d.jpg' }}" 
                                    style="width: 400px; height: 400px" 
                                    class="profileImage img-fluid rounded-circle" alt="..."
                                >
                            @endif
                        </div>
                        <h1 class="lh-base fw-bold pt-4 name">{{ auth()->check() ? auth()->user()->name : '' }}</h2>
=======
                            <img 
                                src="{{ auth()->user()->photo ? asset('images/users/' . auth()->user()->id . '/profile_photo/' . auth()->user()->photo) : 'https://dummyimage.com/400x400/dee2e6/6c757d.jpg' }}" 
                                style="width: 400px; height: 400px" 
                                class="profileImage img-fluid rounded-circle" alt="..."
                            >
                        </div>
                        <h1 class="lh-base fw-bold pt-4 name">{{ auth()->user()->name }}</h2>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                    </div>
                </div> 
                <hr class="solid-divider my-4">
                <div>
                    <h4>Title</h4>
<<<<<<< HEAD
                    <p class="title">{{ auth()->check() ? optional(auth()->user()->profile)->title : '' }}</p>
                </div> 
                <div>
                    <h4>Resume</h4>
                    <p class="mb-4 resume">{{ auth()->check() ? optional(auth()->user()->profile)->resume : '' }}</p>
                </div>
                
                <hr class="solid-divider my-4">

=======
                    <p class="title">{{ auth()->user()->profile->title }}</p>
                </div> 
                <div>
                    <h4>Resume</h4>
                    <p class="mb-4 resume">{{ auth()->user()->profile->resume }}</p>
                </div> 
                <hr class="solid-divider my-4">  
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                <div class="row mt-4">
                    <div class="col-4 fs-5 fw-bold">
                        <p>Hvad kan jeg gøre for netvaerket?:</p>
                    </div>
                    <div class="col-8 fs-5 ps-2">
                        <p class="can-do-for-network">
<<<<<<< HEAD
                            @if ( isset( auth()->user()->profile->can_do_for_network ) )
                                @foreach ( json_decode( auth()->user()->profile->can_do_for_network ) as $value )
                                    {{ $value . ', ' }}
                                @endforeach
                            @endif
=======
                            @foreach ( json_decode( auth()->user()->profile->can_do_for_network ) as $value )
                                {{ $value . ', ' }}
                            @endforeach
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                        </p>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-4 fs-5 fw-bold">
                        <p>Hvad kan netvaerket gøre for mig?:</p>
                    </div>
                    <div class="col-8 fs-5 ps-2">
                        <p class="can-network-do-for-me">
<<<<<<< HEAD
                            @if ( isset( auth()->user()->profile->can_do_for_network ) )
                                @foreach ( json_decode( auth()->user()->profile->can_network_do_for_me ) as $value )
                                    {{ $value . ', ' }}
                                @endforeach
                            @endif
=======
                            @foreach ( json_decode( auth()->user()->profile->can_network_do_for_me ) as $value )
                                {{ $value . ', ' }}
                            @endforeach
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                        </p>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-4 fs-5 fw-bold">
                        <p>Mind Interesser:</p>
                    </div>
                    <div class="col-8 fs-5 ps-2">
                        <p class="my-interest">
<<<<<<< HEAD
                            @if ( isset( auth()->user()->profile->my_interest ) )
                                @foreach ( json_decode( auth()->user()->profile->my_interest ) as $value )
                                    {{ $value . ', ' }}
                                @endforeach
                            @endif
=======
                            @foreach ( json_decode( auth()->user()->profile->my_interest ) as $value )
                                {{ $value . ', ' }}
                            @endforeach
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                        </p>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-4 fs-5 fw-bold">
                        <p>Top of mind:</p>
                    </div>
                    <div class="col-8 fs-5 ps-2">
                        <p class="important-topic">
<<<<<<< HEAD
                            @if ( isset( auth()->user()->profile->important_topic ) )
                                @foreach ( json_decode( auth()->user()->profile->important_topic ) as $value )
                                    {{ $value . ', ' }}
                                @endforeach
                            @endif
                        </p>
                    </div>
                </div>
                
                <hr class="solid-divider my-4">

                <div class="row">
                    <div class="col-4 fs-5 fw-bold">
                        <p>Virksomhedsnavn:</p>
                    </div>
                    <div class="col-8 fs-5 ps-2">
                        <p class="company-name">{{ auth()->check() ? optional(auth()->user()->profile)->company_name : '' }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 fs-5 fw-bold">
                        <p>Adresse:</p>
                    </div>
                    <div class="col-8 fs-5 ps-2">
                        <p class="company-name">{{ auth()->check() ? optional(auth()->user()->profile)->company_address : '' }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 fs-5 fw-bold">
                        <p>Adresse 2:</p>
                    </div>
                    <div class="col-8 fs-5 ps-2">
                        <p class="company-name">{{ auth()->check() ? optional(auth()->user()->profile)->company_address_2 : '' }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 fs-5 fw-bold">
                        <p>Postnummer:</p>
                    </div>
                    <div class="col-8 fs-5 ps-2">
                        <p class="company-name">{{ auth()->check() ? optional(auth()->user()->profile)->zip_code : '' }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 fs-5 fw-bold">
                        <p>By:</p>
                    </div>
                    <div class="col-8 fs-5 ps-2">
                        <p class="company-name">{{ auth()->check() ? optional(auth()->user()->profile)->town : '' }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 fs-5 fw-bold">
                        <p>Land:</p>
                    </div>
                    <div class="col-8 fs-5 ps-2">
                        <p class="company-name">{{ auth()->check() ? optional(auth()->user()->profile)->country : '' }}</p>
                    </div>
                </div>
=======
                            @foreach ( json_decode( auth()->user()->profile->important_topic ) as $value )
                                {{ $value . ', ' }}
                            @endforeach
                        </p>
                    </div>
                </div>         
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
            </div>
        </div>

        <div class="row">
<<<<<<< HEAD
            <div class="col-md-6">
                <a href="{{ route('logout') }}" class="btn btn-light fw-bold px-4 py-2 mt-4 fs-5 border rounded-3"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Ud</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            
            <div class="col-md-6 text-end tilmelding-send mb-5 mt-4">
                <!--<a href="javascript:;" class="prev btn btn-outline-warning fs-5 px-4 py-3">
                    <i class="fa fa-angle-left fw-5" aria-hidden="true"></i>
                    Previous
                </a>-->
=======
            <div class="text-end tilmelding-send mb-5 mt-4">
                <a href="javascript:;" class="prev btn btn-outline-warning fs-5 px-4 py-3">
                    <i class="fa fa-angle-left fw-5" aria-hidden="true"></i>
                    Previous
                </a>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1

                <a href="javascript:;" class="next btn btn-outline-warning fs-5 px-4 py-3">
                    Next<i class="fa fa-angle-right fw-5" aria-hidden="true"></i>
                </a>
            </div> 
        </div>
    </div>
</section>