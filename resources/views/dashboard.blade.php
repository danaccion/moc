@extends('layouts.user')
@section('title', 'Dashboard')
@section('content')
    <!-- Networks -->
    <div class="container pt-5">
        <div class="row align-items-start">
            @foreach($networks as $network)
                <div class="col-lg-2">
                    <div class="py-3 text-center border border-secondary-subtle rounded">
                        <!--<a href="#" class="text-black-50 text-decoration-none">Aktieportefoljen</a>-->
                        <a href="#" class="text-black-50 text-decoration-none">{{ $network->network->name }}</a>
                    </div>
                </div>
            @endforeach
            <!--<div class="col-lg-2">
                <div class="py-3 text-center border border-secondary-subtle rounded">
                    <a href="#" class="text-black-50 text-decoration-none">MOC Danm</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="py-3 text-center border border-secondary-subtle rounded">
                    <a href="#" class="text-black-50 text-decoration-none">MOC EU</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="py-3 text-center border border-secondary-subtle rounded">
                    <a href="#" class="text-black-50 text-decoration-none">Ivaerksaetterriget</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="py-3 text-center border border-secondary-subtle rounded">
                    <a href="#" class="text-black-50 text-decoration-none">Sonderjyske</a>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="py-3 text-center border border-secondary-subtle rounded">
                    <a href="#" class="text-black-50 text-decoration-none">SDG17</a>
                </div>
            </div>-->
        </div>
    </div>

    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                
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
                        <img id="imgPreview" src="{{ auth()->user()->photo ? asset('photos/' . auth()->user()->photo) : 'https://dummyimage.com/500x500/dee2e6/6c757d.jpg' }}" class="profile-pic img-fluid rounded-circle" alt="...">
                        
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
                        
                        @error('photo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <h1 class="lh-base fw-bold pt-4">Henrik Hahn-Nissen</h2>
                        <p class="fs-4">Copenhagen Area Capital Region, Denmark</p>
                    </div>
                    <h4 class="fw-bold mt-4">Title</h4>
                    <div class="fs-5 mb-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    </div>
                    <h4 class="fw-bold">Resume</h4>
                    <div class="fs-5 mb-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="fs-5 mb-4 border-bottom border-2 pb-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div class="row mt-4 pt-3">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Hvad kan jeg gore for netvaerket?:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Hvad kan jeg gore for netvaerket?:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Mine Interesser:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 fs-5 fw-bold">
                            <p>Top of mind:</p>
                        </div>
                        <div class="col-8 fs-5 ps-5">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
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
@endpush