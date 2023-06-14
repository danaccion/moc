@extends('layouts.user')
@section('title', 'Tilmelding')

@push('third_party_stylesheets')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css"/>
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
@endpush

@push('page_css')
    <style>
        #imageUpload
        {
            display: none;
        }

        .profileImage
        {
            cursor: pointer;
        }

        #img-container {
            width: 150px;
            height: 150px;
            overflow: hidden;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            -o-border-radius: 50%;
            border-radius: 50%;
        }

        #img-container img {
            width: 150px;
            height: 150px;
        }
    </style>
@endpush

@section('content')
    <div class="bs-stepper">
        <div class="bs-stepper-header" role="tablist">
            <!-- your steps here -->
<<<<<<< HEAD
            <div class="step" data-target="#register-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="register-part" id="register-trigger">
                    <span class="bs-stepper-circle">1</span>
                    <span class="bs-stepper-label">Create profil</span>
                </button>
            </div>
            
            <div class="line"></div>

            <div class="step" data-target="#information-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                    <span class="bs-stepper-circle">2</span>
=======
            <div class="step" data-target="#information-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                    <span class="bs-stepper-circle">1</span>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                    <span class="bs-stepper-label">Min profil</span>
                </button>
            </div>
            
            <div class="line"></div>
            
            <div class="step" data-target="#pricing-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="pricing-part" id="pricing-part-trigger">
<<<<<<< HEAD
                    <span class="bs-stepper-circle">3</span>
                    <span class="bs-stepper-label">Bestilling</span>
=======
                    <span class="bs-stepper-circle">2</span>
                    <span class="bs-stepper-label">Pricing</span>
                </button>
            </div>
            
            <div class="line"></div>
            
            <div class="step" data-target="#finish-part">
                <button type="button" class="step-trigger" role="tab" aria-controls="finish-part" id="finish-part-trigger">
                    <span class="bs-stepper-circle">3</span>
                    <span class="bs-stepper-label">Finish</span>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                </button>
            </div>
        </div>
    
        <div class="bs-stepper-content">
            <!-- your steps content here -->
            <form class="mx-auto" action="{{ route('tilmelding.store') }}" method="POST"> 
                @csrf
                @method('POST')
<<<<<<< HEAD

                <div id="register-part" class="content" role="tabpanel" aria-labelledby="register-trigger">
                    @include('components.stepper.step1')
                </div>
=======
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                
                <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                    @include('components.stepper.step2')
                </div>
                
                <div id="pricing-part" class="content" role="tabpanel" aria-labelledby="pricing-part-trigger">
<<<<<<< HEAD
                    @include('components.stepper.step4')
                    @include('components.stepper.step3')
                </div>
=======
                    @include('components.stepper.step3')
                </div>

                <div id="finish-part" class="content" role="tabpanel" aria-labelledby="finish-part-trigger">
                    @include('components.stepper.step4')
                </div>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
            </form>
        </div>
    </div>
@endsection

@push('third_party_scripts')
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
@endpush

@push('page_scripts')
    <!-- multiple select tag -->
    <script>
        $(document).ready(function(){
            $("#submit").click(function() {
                $.ajax({
                    type: "POST",
                    url: "https://api.pensopay.com/v1/payments",
                    headers: {
                        accept: 'application/json',
                        'content-type': 'application/json',
                        authorization: 'Bearer e2068b5b7781bc240a36b5d54ca77f17562bba0bcadc92131519f83a213fb856'
                    },
                    data: JSON.stringify({
                        testmode: true,
                        order_id: "99999",
                        facilitator: "creditcard",
                        amount: 500,
                        currency: "DKK",
                    }),
                    success: function(data) {
                        alert(data);
                    },
                });
            });

            var stepper = new Stepper($('.bs-stepper')[0]);
            
            $('.next').click(function() {
                stepper.next();
            });

            $('.prev').click(function() {
                stepper.previous();
            });
<<<<<<< HEAD

            $('#viewProfile').click(function() {
                stepper.next();
            });

            $('#viewProfile').trigger('click');

            $(".forms_of_meeting").select2({
                placeholder: "Fysiske møder", //placeholder
                tags: true,
                tokenSeparators: ['/',',',';'," "],
                createTag: function(params) {
                    $('#virtualMeeting').prop('checked', false);
                    var term = $.trim(params.term);

                    if (term === '') {
                    return null;
                    }

                    return {
                    id: term,
                    text: term,
                    newTag: true // add additional parameters
                    }
                }
            });
            
            $('#canDoForNetwork').on('select2:select', function (e) {
                var data = e.params.data;
                $('.can-do-for-network').append(data.text + ', ');
            });

            $('#canNetworkDoForMe').on('select2:select', function (e) {
                var data = e.params.data;
                $('.can-network-do-for-me').append(data.text + ', ');
            });

            $('#myInterest').on('select2:select', function (e) {
                var data = e.params.data;
                $('.my-interest').append(data.text + ', ');
            });

            $('#importantTopic').on('select2:select', function (e) {
                var data = e.params.data;
                $('.important-topic').append(data.text + ', ');
            });

            $(".multiselect").select2({
                tags: true,
                tokenSeparators: ['/',',',';'," "]
            });

            $(".profileImage").click(function(e) {
                $("#imageUpload").click();
            });

            $("#imageUpload").change(function(){
                fasterPreview( this );
            });

            $("#virtualMeeting").click(function() {
                $(".forms_of_meeting").val(null).trigger('change');
            });

            $("#name").on("input", function() {
                $(".name").text($(this).val());
            });

            $("#title").on("input", function() {
                $(".title").text($(this).val());
            });

            $("#resume").on("input", function() {
                $(".resume").text($(this).val());
            });

            $("#buy").on("click", function() {
                if ($("#terms").prop("checked") != true) {
                    alert("Please accept therms");
                }
            });
        })

        function joinNetwork(e, network, userId) {
            /*$.ajax({
=======
        })

        function joinNetwork(e, networkId, userId) {
            $.ajax({
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                type: "POST",
                url: "{{ route('join') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    network_id: networkId,
                    user_id: userId
                },
                success: function(data) {
                    toastr.success(data.message);
                    $(e).attr('disabled', true);
                },
                error: function(message) {
                    toastr.error(message);
                    $(this).attr('disabled', false);
                }
<<<<<<< HEAD
            });*/
            const joined = sessionStorage.getItem( 'joinedNetworks' );
            const selected = JSON.parse(joined);
            selected.push( network.name );
            //console.log(selected);
            console.log(joined);
            sessionStorage.setItem( 'joinedNetworks', JSON.stringify( selected ) );
        }

        function fasterPreview( uploader ) {
            if ( uploader.files && uploader.files[0] ){
                $('.profileImage').attr('src', 
                    window.URL.createObjectURL(uploader.files[0]) );
            }
=======
            });
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
        }
    </script>
@endpush