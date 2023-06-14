@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5">                
                <div class="col-md-6 linked-in">
                    <h2 class="text-center fw-bold lh-lg">Nyheder fra MOC Danmark</h2>
                    <!--<img class="card-img-top mb-4 rounded-3" src="https://dummyimage.com/600x650/dee2e6/6c757d.jpg" alt="..." />
                    <img class="card-img-top mb-4 rounded-3" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." />
                    <img class="card-img-top mb-4 rounded-3" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." />
                    <img class="card-img-top mb-4 rounded-3" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." />
                    <img class="card-img-top mb-4 rounded-3" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." />-->
                    <div id="fb-root"></div>
                    <div class="fb-page" data-href="https://www.facebook.com/meetovercoffee.net" data-tabs="timeline" data-width="500" data-height="650" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/meetovercoffee.net" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/meetovercoffee.net">Meet over Coffee</a></blockquote></div>
                </div>
                <div class="col-md-6">
                    <div class="text-center border-bottom border-2 pb-4">
<<<<<<< HEAD
                        <img id="imgPreview" src="{{ auth()->user()->photo ? asset('images/users/' . auth()->user()->id . '/profile_photo/' . auth()->user()->photo) : 'https://dummyimage.com/500x500/dee2e6/6c757d.jpg' }}" class="profile-pic img-fluid rounded-circle" alt="...">
=======
                        <img id="imgPreview" src="{{ auth()->user()->photo ? asset('photos/' . auth()->user()->photo) : 'https://dummyimage.com/500x500/dee2e6/6c757d.jpg' }}" class="profile-pic img-fluid rounded-circle" alt="...">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                        
                        @if (!auth()->user()->photo)
                            <form method="post" action="{{ route('user.photo.change') }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row mx-auto g-3 mb-3 mt-3">
                                    <div class="col-auto">
                                        <input class="form-control form-control-sm @error('photo') is-invalid @enderror" id="photo" name="photo" type="file" value="{{ old('photo') }}">
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-primary btn-sm">Upload Photo</button>
                                    </div>
                                </div>
                            </form>
                        @endif
                        
                        @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <h1 class="lh-base fw-bold pt-4">{{ $user->name }}</h2>
                        <p class="fs-4">{{ optional($user->profile)->address }}</p>
                    </div>
                    <h4 class="fw-bold mt-4">Title</h4>
                    <div class="fs-5 mb-4">
                        <p>{{ optional($user->profile)->title }}</p>
                    </div>
                    <h4 class="fw-bold">Resume</h4>
                    <div class="fs-5 mb-4 border-bottom">
                        <p>{{ optional($user->profile)->resume }}</p>
                    </div>
                    <div class="row mt-4 pt-3">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Hvad kan jeg gore for netvaerket?:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>
                                @if ( isset(auth()->user()->profile->can_do_for_network) )
                                    @foreach ( json_decode( auth()->user()->profile->can_do_for_network ) as $value )
                                        {{ $value . ', ' }}
                                    @endforeach
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Hvad kan netvaerket gore for mig?:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>
                                @if ( isset(auth()->user()->profile->can_network_do_for_me) )
                                    @foreach ( json_decode( auth()->user()->profile->can_network_do_for_me ) as $value )
                                        {{ $value . ', ' }}
                                    @endforeach
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Mine Interesser:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>
                                @if ( isset( auth()->user()->profile->my_interest ) )
                                    @foreach ( json_decode( auth()->user()->profile->my_interest ) as $value )
                                        {{ $value . ', ' }}
                                    @endforeach
                                @endif
                            </p>
                        </div>
                    </div>
<<<<<<< HEAD
                    <div class="row border-bottom mb-4">
=======
                    <div class="row">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                        <div class="col-4 fs-5 fw-bold">
                            <p>Top of mind:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>
                                @if ( isset( auth()->user()->profile->important_topic ) )
                                    @foreach ( json_decode( auth()->user()->profile->important_topic ) as $value )
                                        {{ $value . ', ' }}
                                    @endforeach
                                @endif
                            </p>
                        </div>
                    </div>
<<<<<<< HEAD

                    <h4 class="fw-bold">Kontaktoplysninger</h4>

                    <div class="row">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Virksomhedsnavn:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>
                                {{ optional($user->profile)->company_name }}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Adress:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>
                                {{ optional($user->profile)->company_address }}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Adresse 2:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>
                                {{ optional($user->profile)->company_address_2 }}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Postnummer:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>
                                {{ optional($user->profile)->zip_code }}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 fs-5 fw-bold">
                            <p>By:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>
                                {{ optional($user->profile)->town }}
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Land:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>
                                {{ optional($user->profile)->country }}
                            </p>
                        </div>
                    </div>

=======
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                </div> 
            </div>
        </div>
    </section>
    <!-- Related items section-->
@endsection

@push('third_party_scripts')
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0&appId=348215839447281&autoLogAppEvents=1" nonce="9fl2Z8jJ"></script>
@endpush

@push('page_scripts')
    <script>
        $(document).ready(() => {
            $("#photo").change(function () {
                const file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#imgPreview")
                            .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
    
    @if(session()->has('success'))
        <script>
            toastr.success('{{ session()->get("success") }}')
        </script>
    @endif
@endpush