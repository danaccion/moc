@extends('layouts.app')

@push('third_party_stylesheets')
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
@endpush

@push('page_css')
    <style>
        .logo-pic {
            height: 250px !important;
            object-fit: cover;
        }
    </style>
@endpush

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit a Network</h1>
                    </div>
                    
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit a Network</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">* Required fields</h3>

                        <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('networks.update', $network->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img id="imgPreview" src="{{ $network->logo ? asset('images/networks/' . $network->id . '/logo/' . $network->logo) : 'https://dummyimage.com/250x250/dee2e6/6c757d.jpg' }}" class="logo-pic img-fluid" alt="...">
                                    </div>

                                    <div class="form-group">
                                        <label for="logo">Upload Network Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="hidden" name="selectedFile" value="{{ $network->logo }}">
                                                <input type="file" class="custom-file-input" id="logo" name="logo">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="networkName">Network Name</label>
                                        <input type="text" id="networkName" class="form-control" name="name" value="{{ $network->name }}" placeholder="Network name" required="required">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" class="form-control" name="description" placeholder="Description">{{ $network->description }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="networkAdmin">Set Network Admin</label>
                                        <input type="email" id="networkAdmin" class="form-control" name="email" value="{{ optional($network->admin)->email }}" placeholder="Network admin email">
                                        <div id="userList" style="display:none"></div>
                                    </div>

                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Color Picker -->
                                            <div class="form-group">
                                            <label>Primary Color:</label>

                                            <div id="primaryColor" class="input-group">
                                                <input type="text" name="primary_color" value="{{ $network->primary_color }}" class="form-control">

                                                <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-square"></i></span>
                                                </div>
                                            </div>
                                            <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->
                                        </div>

                                        <div class="col-md-4">
                                            <!-- Color Picker -->
                                            <div class="form-group">
                                            <label>Secondary Color:</label>

                                            <div id="secondaryColor" class="input-group">
                                                <input type="text" name="secondary_color" value="{{ $network->secondary_color }}" class="form-control">

                                                <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-square"></i></span>
                                                </div>
                                            </div>
                                            <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->
                                        </div>

                                        <div class="col-md-4">
                                            <!-- Color Picker -->
                                            <div class="form-group">
                                            <label>Tertiary Color:</label>

                                            <div id="tertiaryColor" class="input-group">
                                                <input type="text" name="tertiary_color" value="{{ $network->tertiary_color }}" class="form-control">

                                                <div class="input-group-append">
                                                <span class="input-group-text"><i class="fas fa-square"></i></span>
                                                </div>
                                            </div>
                                            <!-- /.input group -->
                                            </div>
                                            <!-- /.form group -->
                                        </div>
                                    </div>
<<<<<<< HEAD

                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Network price</label>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">$</span>
                                                </div>
                                                <input type="text" class="form-control" name="price" placeholder="">
                                            </div>
                                        </div>
                                    </div>
=======
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('third_party_scripts')
    <!-- bootstrap color picker -->
    <script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
@endpush
@push('page_scripts')
    <script>
        $(document).ready(function() {
            //color picker with addon
            $('#primaryColor').colorpicker()
            $('#secondaryColor').colorpicker()
            $('#tertiaryColor').colorpicker()


            $('#primaryColor').on('colorpickerChange', function(event) {
            $('#primaryColor .fa-square').css('color', event.color.toString());
            })

            $('#secondaryColor').on('colorpickerChange', function(event) {
            $('#secondaryColor .fa-square').css('color', event.color.toString());
            })

            
            $('#tertiaryColor').on('colorpickerChange', function(event) {
            $('#tertiaryColor .fa-square').css('color', event.color.toString());
            })

            $("#logo").change(function () {
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

            /*var searchInput = $("#networkAdmin");
            var userList = $("#userList");

            searchInput.on("input", function() {
                var input = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "{{ route('user.search') }}",
                    data: {q: input},
                    success: function(users) {
                        userList.empty();
                        $.each(users, function(i, user) {
                            userList.append("<div>" + user.name + "</div>");
                        });
                        userList.show();
                        /*if (user) {
                            $("#userName").text(user.name);
                        } else {
                            $("#userName").text("No match found.");
                        }
                    }
                });
            });

            searchInput.on("blur", function() {
                userList.hide();
            });

            userList.on("click", "div", function() {
                searchInput.val($(this).text());
                userList.hide();
            });*/
        });
    </script>

    @if ($errors->any() || session()->has('error'))
        @if (session()->has('error'))
            <script>
<<<<<<< HEAD
                toastr.error('{{ session()->get("error") }}')
=======
                toastr.success('{{ session()->get("error") }}')
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
            </script>
        @endif
        @foreach ($errors->all() as $error)
            <script>
<<<<<<< HEAD
                toastr.error('{{ $error }}')
=======
                toastr.success('{{ $error }}')
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
            </script>
        @endforeach
    @endif

    @if(session()->has('success'))
        <script>
            toastr.success('{{ session()->get("success") }}')
        </script>
    @endif
@endpush