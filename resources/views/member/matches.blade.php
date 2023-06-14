@extends('layouts.app')
@section('title', 'My Networks')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Matches</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Matches</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
<<<<<<< HEAD
                <div class="card-title custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Match status</label>
                </div>

=======
                <h3 class="card-title">Mine Match</h3>
                
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 20%">
                                Member Name
                            </th>
                            <th style="width: 30%">
                                Networks
                            </th>
                            <th>
                                Match Probability
                            </th>
                            <th style="width: 8%" class="text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $ctr = 0; @endphp
                        @foreach ( $topUsers as $id => $score )
                            @php
                                $ctr++;
                                $user = \App\Models\User::findOrFail($id);
                            @endphp
                            <tr>
                                <td>{{ $ctr }}</td>
                                <td>
                                    <a>{{ $user->name }}</a>
                                    <br/>
                                    <!--<small>Created 01.01.2019</small>-->
                                </td>
                                <td>
                                    <!--<ul class="list-inline">
                                        <li class="list-inline-item">
                                            <img alt="Logo" class="table-Logo" src="../../dist/img/Logo.png">
                                        </li>
                                        <li class="list-inline-item">
                                            <img alt="Logo" class="table-Logo" src="../../dist/img/Logo2.png">
                                        </li>
                                        <li class="list-inline-item">
                                            <img alt="Logo" class="table-Logo" src="../../dist/img/Logo3.png">
                                        </li>
                                        <li class="list-inline-item">
                                            <img alt="Logo" class="table-Logo" src="../../dist/img/Logo4.png">
                                        </li>
                                    </ul>-->
                                </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="{{ $score }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $score }}%">
                                </div>
                            </div>
                            <small>
                                {{ $score }}% Match
                            </small>
                        </td>
                        <td class="project-state">
                            <button type="submit" class="btn btn-success">Set a meeting</button>
                        </td>
                    </tr>
                    @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
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