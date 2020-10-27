@extends('layouts.dashboard')

@section('content')

<div class="u-body">
        <!-- End Breadcrumb -->
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <h1 class="h3">Buttons</h1>
                <ol class="breadcrumb bg-transparent small p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">UI Components</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->
    
        <!-- Button Types -->
        <div class="card">
            <header class="card-header">
                <h2 class="h3 card-header-title mb-0">Button Types</h2>
            </header>
    
            <div class="card-body">
                <!-- Border Radius -->
                <div class="demo-btn-space">
                    <h3 class="h4 mb-3">Border Radius</h3>
                    <button type="button" class="btn btn-primary rounded-0">Square</button>
                    <button type="button" class="btn btn-primary">Default</button>
                    <button type="button" class="btn btn-primary btn-pill">Pilled</button>
                </div>
                <!-- End Border Radius -->
    
                <hr class="my-4">
    
                <!-- Types with Icons -->
                <div class="demo-btn-space">
                    <h3 class="h4 mb-3">Types with icons</h3>
                    <button type="button" class="btn btn-primary rounded-0">
                        <i class="fab fa-facebook-f mr-1"></i> Square
                    </button>
                    <button type="button" class="btn btn-primary">
                        <i class="fab fa-facebook-f mr-1"></i> Default
                    </button>
                    <button type="button" class="btn btn-primary btn-pill">
                        <i class="fab fa-facebook-f mr-1"></i> Pilled
                    </button>
                    <button type="button" class="btn btn-primary btn-circle">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                </div>
                <!-- End Types with Icons -->
    
                <hr class="my-4">
    
                <!-- Sizes -->
                <div class="demo-btn-space">
                    <h3 class="h4 mb-3">Sizes</h3>
                    <span class="mr-5">
                          <button type="button" class="btn btn-sm btn-primary">Small</button>
                          <button type="button" class="btn btn-primary">Regular</button>
                          <button type="button" class="btn btn-lg btn-primary">Large</button>
                        </span>
    
                    <span class="mr-5">
                          <button type="button" class="btn btn-sm btn-primary btn-circle">
                            <i class="fab fa-facebook-f"></i>
                          </button>
    
                          <button type="button" class="btn btn-primary btn-circle">
                            <i class="fab fa-facebook-f"></i>
                          </button>
    
                          <button type="button" class="btn btn-lg btn-primary btn-circle">
                            <i class="fab fa-facebook-f"></i>
                          </button>
                        </span>
                </div>
                <!-- End Sizes -->
    
                <hr class="my-4">
    
                <!-- Colors -->
                <div class="demo-btn-space">
                    <h3 class="h4 mb-3">Colors</h3>
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-secondary">Secondary</button>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                    <button type="button" class="btn btn-warning">Warning</button>
                    <button type="button" class="btn btn-info">Info</button>
                    <button type="button" class="btn btn-light">Light</button>
                    <button type="button" class="btn btn-dark">Dark</button>
                    <button type="button" class="btn btn-link">Link</button>
                </div>
                <!-- End Colors -->
    
                <hr class="my-4">
    
                <!-- Outline Colors -->
                <div class="demo-btn-space">
                    <h3 class="h4 mb-3">Outline Colors</h3>
                    <button type="button" class="btn btn-outline-primary">Primary</button>
                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                    <button type="button" class="btn btn-outline-success">Success</button>
                    <button type="button" class="btn btn-outline-danger">Danger</button>
                    <button type="button" class="btn btn-outline-warning">Warning</button>
                    <button type="button" class="btn btn-outline-info">Info</button>
                    <button type="button" class="btn btn-outline-light">Light</button>
                    <button type="button" class="btn btn-outline-dark">Dark</button>
                </div>
                <!-- End Outline Colors -->
    
                <hr class="my-4">
    
                <!-- Soft Colors -->
                <div class="demo-btn-space">
                    <h3 class="h4 mb-3">Soft Colors</h3>
                    <button type="button" class="btn btn-soft-primary">Primary</button>
                    <button type="button" class="btn btn-soft-secondary">Secondary</button>
                    <button type="button" class="btn btn-soft-success">Success</button>
                    <button type="button" class="btn btn-soft-danger">Danger</button>
                    <button type="button" class="btn btn-soft-warning">Warning</button>
                    <button type="button" class="btn btn-soft-info">Info</button>
                </div>
                <!-- End Soft Colors -->
    
                <hr class="my-4">
    
                <!-- Block -->
                <div class="demo-btn-space">
                    <h3 class="h4 mb-3">Block</h3>
                    <div class="row">
                        <div class="col-lg-6 mb-2 mb-lg-0">
                            <button type="button" class="btn btn-block btn-sm btn-primary">Small</button>
                            <button type="button" class="btn btn-block btn-primary">Default</button>
                            <button type="button" class="btn btn-block btn-lg btn-primary">Large</button>
                        </div>
    
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-block btn-sm btn-outline-primary">Small</button>
                            <button type="button" class="btn btn-block btn-outline-primary">Default</button>
                            <button type="button" class="btn btn-block btn-lg btn-outline-primary">Large</button>
                        </div>
                    </div>
                </div>
                <!-- Block -->
            </div>
        </div>
        <!-- End Button Types -->
    </div>
@endsection