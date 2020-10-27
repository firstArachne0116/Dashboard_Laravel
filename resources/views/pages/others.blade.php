@extends('layouts.dashboard')

@section('content')
<div class="u-body">
        <!-- End Breadcrumb -->
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <h1 class="h3">Other Components</h1>
                <ol class="breadcrumb bg-transparent small p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">UI Components</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->
    
        <!-- Progress Bars -->
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="h3 card-header-title">Progress Bars</h2>
                    </div>
    
                    <div class="card-body">
                        <div class="progress mb-3" style="height: 6px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
    
                        <div class="progress mb-3" style="height: 6px;">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
    
                        <div class="progress mb-3" style="height: 6px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
    
                        <div class="progress mb-3" style="height: 6px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
    
                        <div class="progress mb-3" style="height: 6px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
    
                        <div class="progress mb-3" style="height: 6px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
    
                        <div class="progress mb-3" style="height: 6px;">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 40%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h2 class="h3 card-header-title">Progress Bars Sizes</h2>
                    </div>
    
                    <div class="card-body">
                        <div class="progress mb-3" style="height: 2px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
    
                        <div class="progress mb-3" style="height: 4px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
    
                        <div class="progress mb-3" style="height: 8px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
    
                        <div class="progress mb-3">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Progress Bars -->
    
        <!-- Badges -->
        <div class="row demo-badge">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="h3 card-header-title">Badges</h2>
                    </div>
    
                    <div class="card-body">
                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-secondary">Secondary</span>
                        <span class="badge badge-success">Success</span>
                        <span class="badge badge-danger">Danger</span>
                        <span class="badge badge-warning">Warning</span>
                        <span class="badge badge-info">Info</span>
                        <span class="badge badge-light">Light</span>
                        <span class="badge badge-dark">Dark</span>
    
                        <span class="badge badge-dark d-inline-flex align-items-center">
                        Tag Type
                        <button type="button" class="close badge-close ml-2" aria-label="Close" data-dismiss="badge">
                                <span aria-hidden="true">×</span>
                        </button>
                        </span>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <div class="card-header">
                        <h2 class="h3 card-header-title">Soft Badges</h2>
                    </div>
    
                    <div class="card-body">
                        <span class="badge badge-soft-primary">Primary</span>
                        <span class="badge badge-soft-secondary">Secondary</span>
                        <span class="badge badge-soft-success">Success</span>
                        <span class="badge badge-soft-danger">Danger</span>
                        <span class="badge badge-soft-warning">Warning</span>
                        <span class="badge badge-soft-info">Info</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Badges -->
    
        <!-- Pagination -->
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3 card-header-title">Pagination</h2>
            </div>
    
            <div class="card-body">
                <!-- Pagination -->
                <div class="row justify-content-between align-items-center mb-4">
                    <div class="col-sm">
                        <nav aria-label="Bootstrap Pagination Example">
                            <ul class="pagination mb-0">
                                <li class="page-item">
                                    <a class="page-link" href="#">← <span class="ml-1 d-none d-xl-inline-block">Previous</span></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">5</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><span class="mr-1 d-none d-xl-inline-block">Next</span> →</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
    
                    <div class="col-sm text-sm-right mt-3 mt-sm-0">
                        <span class="u-font-size-90 text-muted">Page 2 of 5</span>
                    </div>
                </div>
                <!-- End Pagination -->
            </div>
        </div>
        <!-- End Pagination -->
    
        <!-- Pager -->
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3 card-header-title">Pager</h2>
            </div>
    
            <div class="card-body">
                <nav aria-label="Bootstrap Pager Example">
                    <ul class="list-unstyled d-flex justify-content-between align-items-center mb-0">
                        <li>
                            <a href="#!" class="btn btn-primary pager-btn disabled"><span class="mr-1">←</span> Previous</a>
                        </li>
                        <li>
                            <span class="text-muted"><span class="d-none d-sm-inline-block">Page</span> 1 of 5</span>
                        </li>
                        <li>
                            <a href="#!" class="btn btn-primary pager-btn">Next <span class="ml-1">→</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- End Pager -->
    
        <!-- Tabs & Accordions -->
        <div class="card">
            <div class="card-header">
                <h2 class="h3 card-header-title">Tabs &amp; Accordions</h2>
            </div>
    
            <div class="card-body">
                <div class="alert alert-soft-info fade show" role="alert">
                    <i class="fa fa-info-circle alert-icon mr-3"></i>
                    <span>
                        For Tabs and Accordions examples please check out <a class="text-info font-weight-bold" href="/cards">Cards page</a>.
                    </span>
                </div>
            </div>
        </div>
        <!-- End Tabs & Accordions -->
    </div>
@endsection