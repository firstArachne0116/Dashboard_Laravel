@extends('layouts.dashboard')

@section('content')

<div class="u-body">
        <!-- End Breadcrumb -->
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <h1 class="h3">Tooltips &amp; Popovers</h1>
                <ol class="breadcrumb bg-transparent small p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">UI Components</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->
    
        <!-- Tooltips -->
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3 card-header-title">Tooltips</h2>
            </div>
    
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-4 mb-md-0">
                        <a class="link-muted d-block text-center" href="#!" title="" data-toggle="tooltip" data-placement="top" data-original-title="Tooltip on top">
                            <img class="img-fluid d-block mb-3" src="{{ asset('img/ui-kit/tooltips/tooltip-top.jpg') }}" alt="Htmlstream">
                            <span class="font-weight-semibold">Tooltip on top</span>
                        </a>
                    </div>
    
                    <div class="col-md-3 mb-4 mb-md-0">
                        <a class="link-muted d-block text-center" href="#!" title="" data-toggle="tooltip" data-placement="right" data-original-title="Tooltip on right">
                            <img class="img-fluid d-block mb-3" src="{{ asset('img/ui-kit/tooltips/tooltip-right.jpg') }}" alt="Htmlstream">
                            <span class="font-weight-semibold">Tooltip on right</span>
                        </a>
                    </div>
    
                    <div class="col-md-3 mb-4 mb-md-0">
                        <a class="link-muted d-block text-center" href="#!" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Tooltip on bottom">
                            <img class="img-fluid d-block mb-3" src="{{ asset('img/ui-kit/tooltips/tooltip-bottom.jpg') }}" alt="Htmlstream">
                            <span class="font-weight-semibold">Tooltip on bottom</span>
                        </a>
                    </div>
    
                    <div class="col-md-3 mb-4 mb-md-0">
                        <a class="link-muted d-block text-center" href="#!" title="" data-toggle="tooltip" data-placement="left" data-original-title="Tooltip on left">
                            <img class="img-fluid d-block mb-3" src="{{ asset('img/ui-kit/tooltips/tooltip-left.jpg') }}" alt="Htmlstream">
                            <span class="font-weight-semibold">Tooltip on left</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Tooltips -->
    
        <!-- Popovers -->
        <div class="card">
            <div class="card-header">
                <h2 class="h3 card-header-title">Popovers</h2>
            </div>
    
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 mb-4 mb-md-0">
                        <a class="link-muted d-block text-center" title="" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-container="body" data-placement="top" data-content="Stream UI Kit - Forever Free, Open Source, Easy to Use!" data-original-title="Popover on top">
                            <img class="img-fluid d-block mb-2" src="{{ asset('img/ui-kit/popovers/popover-top.jpg') }}" alt="Htmlstream">
                            <span class="font-weight-semibold">Popover on top</span>
                        </a>
                    </div>
    
                    <div class="col-md-3 mb-4 mb-md-0">
                        <a class="link-muted d-block text-center" title="" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-container="body" data-placement="right" data-content="Stream UI Kit - Forever Free, Open Source, Easy to Use!" data-original-title="Popover on right">
                            <img class="img-fluid d-block mb-2" src="{{ asset('img/ui-kit/popovers/popover-right.jpg') }} " alt="Htmlstream">
                            <span class="font-weight-semibold">Popover on right</span>
                        </a>
                    </div>
    
                    <div class="col-md-3 mb-4 mb-md-0">
                        <a class="link-muted d-block text-center" title="" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-container="body" data-placement="bottom" data-content="Stream UI Kit - Forever Free, Open Source, Easy to Use!" data-original-title="Popover on bottom">
                            <img class="img-fluid d-block mb-2" src="{{ asset('img/ui-kit/popovers/popover-bottom.jpg') }} " alt="Htmlstream">
                            <span class="font-weight-semibold">Popover on bottom</span>
                        </a>
                    </div>
    
                    <div class="col-md-3">
                        <a class="link-muted d-block text-center" title="" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-container="body" data-placement="left" data-content="Stream UI Kit - Forever Free, Open Source, Easy to Use!" data-original-title="Popover on left">
                            <img class="img-fluid d-block mb-2" src="{{ asset('img/ui-kit/popovers/popover-left.jpg') }} " alt="Htmlstream">
                            <span class="font-weight-semibold">Popover on left</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Popovers -->
    </div>
@endsection