@extends('layouts.dashboard')

@section('content')
<div class="u-body">
        <!-- End Breadcrumb -->
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <h1 class="h3">Cards</h1>
                <ol class="breadcrumb bg-transparent small p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">UI Components</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->
    
        <!-- Extended Cards -->
        <div class="row">
            <!-- Card with Header and Footer -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <header class="card-header">
                        <h2 class="h3 card-header-title">Card Header</h2>
                    </header>
    
                    <div class="card-body">
                        <h5 class="h4 card-title">Content Title</h5>
                        <p class="card-text">The purpose of your brochure may differ from business to business. Some are designed to display services, whereas others are focused on selling an idea. No matter what the focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must grab a viewer’s attention and hold it long enough to deliver the pertinent information.</p>
                    </div>
    
                    <footer class="card-footer">
                        <h2 class="h3 card-header-title">Card Footer</h2>
                    </footer>
                </div>
            </div>
            <!-- End Card with Header and Footer -->
    
            <!-- Cards with Icons -->
            <div class="col-md-6 mb-4">
                <div class="card h-100">
                    <header class="card-header d-flex align-items-center">
                        <h2 class="h3 card-header-title">Card with Icon</h2>
    
                        <!-- Card Header Icon -->
                        <ul class="list-inline ml-auto mb-0">
                            <li class="list-inline-item mr-3">
                                <a class="link-muted h3" href="#!">
                                    <i class="far fa-bell"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="link-muted h3" href="#!">
                                    <i class="fa fa-sliders-h"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Card Header Icon -->
                    </header>
    
                    <div class="card-body">
                        <h5 class="h4 card-title">Equal Height Card</h5>
                        <p>Make equal height card by just adding a class <code>.h-100</code> to <code>.card</code>.</p>
                    </div>
    
                    <footer class="card-footer d-flex align-items-center">
                        <a href="#">Link</a>
                        <div class="ml-auto">
                            <a class="btn btn-primary" href="#">Do something</a>
                        </div>
                    </footer>
                </div>
            </div>
            <!-- End Cards with Icons -->
        </div>
        <!-- End Extended Cards -->
    
        <!-- Advanced Cards -->
        <div class="row">
            <!-- Cards with Tabs -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-header d-md-flex align-items-center">
                        <h2 class="h3 card-header-title">Card Tabs</h2>
    
                        <!-- Tabs Nav -->
                        <ul class="nav nav-tabs card-header-tabs ml-md-auto mt-3 mt-md-0">
                            <li class="nav-item">
                                <a href="#panelWithTabsTab1" class="nav-link active" role="tab" aria-selected="true" data-toggle="tab">Active</a>
                            </li>
                            <li class="nav-item">
                                <a href="#panelWithTabsTab2" class="nav-link" role="tab" aria-selected="true" data-toggle="tab">Link</a>
                            </li>
                            <li class="nav-item">
                                <a href="#panelWithTabsTab3" class="nav-link" role="tab" aria-selected="true" data-toggle="tab">Link</a>
                            </li>
                        </ul>
                        <!-- End Tabs Nav -->
                    </div>
    
                    <div class="card-body">
                        <!-- Tabs Content -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="panelWithTabsTab1" role="tabpanel">
                                <h5 class="h4 card-title">Tabs Content 1</h5>
                                <p class="card-text">The purpose of your brochure may differ from business to business. Some are designed to display services, whereas others are focused on selling an idea. No matter what the focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must grab a viewer’s attention and hold it long enough to deliver the pertinent information.</p>
                            </div>
    
                            <div class="tab-pane fade" id="panelWithTabsTab2" role="tabpanel">
                                <h5 class="h4 card-title">Tabs Content 2</h5>
                                <p class="card-text">The purpose of your brochure may differ from business to business. Some are designed to display services, whereas others are focused on selling an idea. No matter what the focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must grab a viewer’s attention and hold it long enough to deliver the pertinent information.</p>
                            </div>
    
                            <div class="tab-pane fade" id="panelWithTabsTab3" role="tabpanel">
                                <h5 class="h4 card-title">Tabs Content 3</h5>
                                <p class="card-text">The purpose of your brochure may differ from business to business. Some are designed to display services, whereas others are focused on selling an idea. No matter what the focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must grab a viewer’s attention and hold it long enough to deliver the pertinent information.</p>
                            </div>
                        </div>
                        <!-- End Tabs Content -->
                    </div>
    
                    <footer class="card-footer">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="#">Link 1</a></li>
                            <li class="list-inline-item"><a href="#">Link 2</a></li>
                            <li class="list-inline-item"><a href="#">Link 3</a></li>
                        </ul>
                    </footer>
                </div>
            </div>
            <!-- End Cards with Tabs -->
    
            <!-- Card with Accordion -->
            <div class="col-md-6 mb-4">
                <div class="card">
                    <header class="card-header">
                        <h2 class="h3 card-header-title">Card Accordions</h2>
                    </header>
    
                    <div class="card-body p-0">
                        <div class="accordion" id="accordionExample">
                            <div class="card border-0">
                                <div id="headingOne" class="card-header">
                                    <a class="btn-block collapsed" href="#!" aria-expanded="false" aria-controls="collapseOne" data-toggle="collapse" data-target="#collapseOne">Accordion #1</a>
                                </div>
    
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="card-text">The purpose of your brochure may differ from business to business. Some are designed to display services, whereas others are focused on selling an idea. No matter what the focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must grab a viewer’s</p>
                                    </div>
                                </div>
                            </div>
    
                            <div class="card border-0">
                                <div id="headingTwo" class="card-header">
                                    <a class="btn-block" href="#!" aria-expanded="true" aria-controls="collapseTwo" data-toggle="collapse" data-target="#collapseTwo">Accordion #2</a>
                                </div>
    
                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p class="card-text">The purpose of your brochure may differ from business to business. Some are designed to display services, whereas others are focused on selling an idea. No matter what the focus of the brochure is, it needs to be readable, intriguing, and functional. The brochure must grab a viewer’s</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card with Accordion -->
        </div>
        <!-- End Advanced Cards -->
    
        <!-- Basic Card -->
        <div class="card mb-4">
            <div class="card-body">
                This is some text and <a href="#">a link</a> within a card body.
            </div>
        </div>
        <!-- End Basic Card -->
    
        <!-- Card Images -->
        <div class="row">
            <div class="col-md-6 col-xl-3 mb-4">
                <!-- Card Image -->
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/800x500/img1.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="h3 card-title">Card Title</h5>
                        <h6 class="card-subtitle text-muted text-uppercase mb-3">Card subtitle secondary</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- End Card Image -->
            </div>
    
            <div class="col-md-6 col-xl-3 mb-4">
                <!-- Card Header with Image  -->
                <div class="card">
                    <header class="card-header">
                        <h5 class="h3 card-title">Card Title</h5>
                        <h6 class="card-subtitle text-muted text-uppercase">Card subtitle secondary</h6>
                    </header>
                    <img class="card-img-top rounded-0" src="{{ asset('img/800x500/img1.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                        <a href="#" class="btn btn-block btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- End Card Header with Image  -->
            </div>
    
            <div class="col-md-6 col-xl-3 mb-4">
                <!-- Card Fotoer with Image  -->
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/800x500/img1.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. </p>
                    </div>
                    <footer class="card-footer">
                        <a href="#" class="btn btn-primary ml-auto">Go somewhere</a>
                    </footer>
                </div>
                <!-- End Card Fotoer with Image  -->
            </div>
    
            <div class="col-md-6 col-xl-3 mb-4">
                <!-- Mixed Card -->
                <div class="card">
                    <img class="card-img-top" src="{{ asset('img/800x500/img1.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="h3 card-title">Card Title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cool list item</li>
                        <li class="list-group-item">Another list item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="btn btn-block btn-primary">Go somewhere</a>
                    </div>
                </div>
                <!-- End Mixed Card -->
            </div>
        </div>
        <!-- End Card Images -->
    </div>

@endsection