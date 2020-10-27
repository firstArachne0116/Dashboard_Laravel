@extends('layouts.dashboard')

@section('content')

<div class="u-body">
        <!-- End Breadcrumb -->
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <h1 class="h3">Alerts</h1>
              <ol class="breadcrumb bg-transparent small p-0">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">UI Components</li>
              </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->

        <!-- Default Colors -->
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3 card-header-title">Default Colors</h2>
            </div>

            <div class="card-body">
                <!-- Success -->
                <div class="alert alert-success fade show" role="alert">
                    <i class="fa fa-check-circle alert-icon mr-3"></i>
                    <span>This is a success — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Success -->

                <!-- Warning -->
                <div class="alert alert-warning fade show" role="alert">
                    <i class="fa fa-exclamation-circle alert-icon mr-3"></i>
                    <span>This is a warning — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Warning -->

                <!-- Danger -->
                <div class="alert alert-danger fade show" role="alert">
                    <i class="fa fa-minus-circle alert-icon mr-3"></i>
                    <span>This is a error — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Danger -->

                <!-- Info -->
                <div class="alert alert-info fade show" role="alert">
                    <i class="fa fa-info-circle alert-icon mr-3"></i>
                    <span>This is a info alert — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Info -->

                <!-- Primary -->
                <div class="alert alert-primary fade show" role="alert">
                    <i class="far fa-handshake alert-icon mr-3"></i>
                    <span>This is a primary alert — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Primary -->

                <!-- Secondary -->
                <div class="alert alert-secondary fade show" role="alert">
                    <i class="far fa-thumbs-up alert-icon mr-3"></i>
                    <span>This is a secondary alert — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Secondary -->

                <!-- Light -->
                <div class="alert alert-light fade show" role="alert">
                    <i class="far fa-hand-peace alert-icon mr-3"></i>
                    <span>This is a light alert — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Light -->

                <!-- Dark -->
                <div class="alert alert-dark mb-5 fade show" role="alert">
                    <i class="far fa-hand-pointer alert-icon mr-3"></i>
                    <span>This is a dark alert — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Dark -->
            </div>
        </div>
        <!-- End Default Colors -->

        <!-- Soft Colors -->
        <div class="card">
            <div class="card-header">
                <h2 class="h3 card-header-title">Soft Colors</h2>
            </div>

            <div class="card-body">
                <!-- Soft Success -->
                <div class="alert alert-soft-success fade show" role="alert">
                    <i class="fa fa-check-circle alert-icon mr-3"></i>
                    <span>This is a success — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Soft Success -->

                <!-- Soft Warning -->
                <div class="alert alert-soft-warning fade show" role="alert">
                    <i class="fa fa-exclamation-circle alert-icon mr-3"></i>
                    <span>This is a warning — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Soft Warning -->

                <!-- Soft Danger -->
                <div class="alert alert-soft-danger fade show" role="alert">
                    <i class="fa fa-minus-circle alert-icon mr-3"></i>
                    <span>This is a error — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Soft Danger -->

                <!-- Soft Info -->
                <div class="alert alert-soft-info fade show" role="alert">
                    <i class="fa fa-info-circle alert-icon mr-3"></i>
                    <span>This is a info alert — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Soft Info -->

                <!-- Soft Primary -->
                <div class="alert alert-soft-primary fade show" role="alert">
                    <i class="far fa-handshake alert-icon mr-3"></i>
                    <span>This is a primary alert — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Soft Primary -->

                <!-- Soft Secondary -->
                <div class="alert alert-soft-secondary fade show" role="alert">
                    <i class="far fa-thumbs-up alert-icon mr-3"></i>
                    <span>This is a secondary alert — check it out!</span>
                    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- End Soft Secondary -->
            </div>
        </div>
        <!-- End Soft Colors -->
    </div>
@endsection