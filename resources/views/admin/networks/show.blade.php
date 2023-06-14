@extends('layouts.app')

@push('third_party_stylesheets')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<!-- Theme style -->
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
            <h1>View Network</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Network</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
<<<<<<< HEAD
                        <h3 class="card-title">{{ $network->name }} &nbsp</h3>
                        <a href="{{ route('network.profile', $network->slug) }}" class="text-muted text-sm">Click here to view page</a>
=======
                        <h3 class="card-title">{{ $network->name }}</h3>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                                    Import Members
                                </button>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Description:</label>
                                    {{ $network->description }}
                                </div>
                            </div>

                            @if($network->logo)
                                <div class="col-md-6">
                                    <img id="imgPreview" src="{{ asset('photos/' . $network->logo) }}" class="logo-pic img-fluid rounded-circle" alt="...">
                                </div>
                            @endif
                        </div>

                    <div class="row">
                        @if($network->primary_color)
                            <div class="col-md-4">
                                <label for="primaryColor">Primary Color</label>
                                <div class="p-3 mb-3" id="primaryColor" style="background-color: {{ $network->primary_color }}"></div>
                            </div>
                        @endif

                        @if($network->secondary_color)
                        <div class="col-md-4">
                            <label for="secondaryColor">Secondary Color</label>
                            <div class="p-3 mb-3" style="background-color: {{ $network->secondary_color }}"></div>
                        </div>
                        @endif

                        @if($network->tertiary_color)
                        <div class="col-md-4">
                            <label for="tertiaryColor">Tertiary Color</label>
                            <div class="p-3 mb-3" style="background-color: {{ $network->tertiary_color }}"></div>
                        </div>
                        @endif
                    </div>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Member Name</th>
                            <th>Email</th>
                            <th>Joined Date</th>
                            <th>Country</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($network->members as $member)
                        <tr>
<<<<<<< HEAD
                            <td>{{ optional($member->user)->name }}</td>
                            <td>{{ optional($member->user)->email }}</td>
=======
                            <td>{{ $member->user->name }}</td>
                            <td>{{ $member->user->email }}</td>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                            <td>{{ \Carbon\Carbon::parse($member->created_at)->diffInDays(\Carbon\Carbon::now()) }} days ago</td>
                            <td></td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Member Name</th>
                            <th>Email</th>
                            <th>Created</th>
                            <th>Country</th>
                        </tr>
                    </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('admin.members.import', $network->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                
                <div class="modal-header">
                    <h4 class="modal-title">Import Members</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <div class="custom-file">
<<<<<<< HEAD
                            <input type="file" name="file" class="custom-file-input" id="customFile" required="required">
=======
                            <input type="file" name="file" class="custom-file-input" id="customFile">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
@endsection

@push('third_party_scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
@endpush

@push('page_scripts')
    <script>
        $(function () {
            $("#example1").DataTable({
<<<<<<< HEAD
            "responsive": true, "lengthChange": false, "autoWidth": false
=======
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>

<<<<<<< HEAD
    @if ($errors->any() || session()->has('error'))
        @if (session()->has('error'))
            <script>
                toastr.error('{{ session()->get("error") }}')
            </script>
        @endif
        @foreach ($errors->all() as $error)
            <script>
                toastr.error('{{ $error }}')
            </script>
        @endforeach
    @endif

=======
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
    @if(session()->has('success'))
        <script>
            toastr.success('{{ session()->get("success") }}')
        </script>
    @endif
@endpush