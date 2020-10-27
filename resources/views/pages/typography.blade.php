@extends('layouts.dashboard')

@section('style')
    <style>
        /* Google Fonts */
        .demo-fonts-box {
          padding: 30px;
          line-height: 2;
          letter-spacing: 2px;
        }
  
        .demo-fonts-box__item {
          line-height: 1;
        }
        .demo-fonts-box__item-xs {
          line-height: 1;
          font-size: 1.5rem;
        }
        .demo-fonts-box__item-xl {
          line-height: 1;
          font-size: 5.6rem;
        }
    </style>
@endsection

@section('content')

<div class="u-body">
        <!-- End Breadcrumb -->
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <h1 class="h3">Typography</h1>
                <ol class="breadcrumb bg-transparent small p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Base UI</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->
    
        <!-- Headings -->
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3 card-header-title">Headings</h2>
            </div>
    
            <div class="card-body">
                <!-- Headings 1 -->
                <div class="row align-items-center">
                    <div class="col-lg-2 small">Heading 1</div>
                    <div class="col-lg-10">
                        <h1 class="mb-0">h1. Stream UI Kit heading <span class="badge badge-secondary">New</span></h1>
                    </div>
                </div>
                <!-- End Headings 1 -->
    
                <hr class="u-opacity-6">
    
                <!-- Headings 2 -->
                <div class="row align-items-center">
                    <div class="col-lg-2 small">Heading 2</div>
                    <div class="col-lg-10">
                        <h2 class="mb-0">h2. Stream UI Kit heading <span class="badge badge-secondary">New</span></h2>
                    </div>
                </div>
                <!-- End Headings 2 -->
    
                <hr class="u-opacity-6">
    
                <!-- Headings 3 -->
                <div class="row align-items-center mb-3">
                    <div class="col-lg-2 small">Heading 3</div>
                    <div class="col-lg-10">
                        <h3 class="mb-0">h3. Stream UI Kit heading <span class="badge badge-secondary">New</span></h3>
                    </div>
                </div>
                <!-- End Headings 3 -->
    
                <hr class="u-opacity-6">
    
                <!-- Headings 4 -->
                <div class="row align-items-center mb-3">
                    <div class="col-lg-2 small">Heading 4</div>
                    <div class="col-lg-10">
                        <h4 class="mb-0">h4. Stream UI Kit heading <span class="badge badge-secondary">New</span></h4>
                    </div>
                </div>
                <!-- End Headings 4 -->
    
                <hr class="u-opacity-6">
    
                <!-- Headings 5 -->
                <div class="row align-items-center mb-3">
                    <div class="col-lg-2 small">Heading 5</div>
                    <div class="col-lg-10">
                        <h5 class="mb-0">h5. Stream UI Kit heading <span class="badge badge-secondary">New</span></h5>
                    </div>
                </div>
                <!-- End Headings 5 -->
    
                <hr class="u-opacity-6">
    
                <!-- Headings 6 -->
                <div class="row mb-3">
                    <div class="col-lg-2 small">Heading 6</div>
                    <div class="col-lg-10">
                        <h6 class="mb-0">h6. Stream UI Kit heading <span class="badge badge-secondary">New</span></h6>
                    </div>
                </div>
                <!-- End Headings 6 -->
            </div>
        </div>
        <!-- End Headings -->
    
        <!-- Google Fonts -->
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3 card-header-title">Google Fonts</h2>
            </div>
    
            <div class="card-body">
                <p class="mb-4">Open Sans Google web font is used as a primary font family in Stream Dashboard. Choose and use over 800 fonts from <a target="_blank" href="https://fonts.google.com/">Google Fonts library</a>.</p>
    
                <div class="row">
                    <div class="col-md-6">
                        <!-- Open Sans (Light) -->
                        <div class="demo-fonts-box text-dark border rounded mb-4 mb-md-0">
                            <div class="row">
                                <div class="col-lg">
                                    <p class="text-dark demo-fonts-box__item-xl">Aa</p>
                                    <p class="text-dark demo-fonts-box__item-xs">Open Sans</p>
                                </div>
                                <div class="col-lg">
                                    <p class="text-dark demo-fonts-box__item">Light</p>
                                    <p class="text-dark demo-fonts-box__item-xs font-weight-light">AaBbCcDd</p>
                                    <br>
                                    <p class="text-dark demo-fonts-box__item">Regular</p>
                                    <p class="text-dark demo-fonts-box__item-xs">AaBbCcDd</p>
                                </div>
                                <div class="col-lg">
                                    <p class="text-dark demo-fonts-box__item">Bold</p>
                                    <p class="text-dark demo-fonts-box__item-xs font-weight-bold">AaBbCcDd</p>
                                    <br>
                                    <p class="text-dark demo-fonts-box__item">Numbers (Light)</p>
                                    <p class="text-dark demo-fonts-box__item-xs">0123456789</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Open Sans (Light) -->
                    </div>
    
                    <div class="col-md-6">
                        <!-- Open Sans (Dark) -->
                        <div class="demo-fonts-box bg-dark shadow-sm rounded">
                            <div class="row">
                                <div class="col-lg">
                                    <p class="text-white demo-fonts-box__item-xl">Aa</p>
                                    <p class="text-white demo-fonts-box__item-xs">Open Sans</p>
                                </div>
                                <div class="col-lg">
                                    <p class="text-white demo-fonts-box__item">Light</p>
                                    <p class="text-white demo-fonts-box__item-xs font-weight-light">AaBbCcDd</p>
                                    <br>
                                    <p class="text-white demo-fonts-box__item">Regular</p>
                                    <p class="text-white demo-fonts-box__item-xs">AaBbCcDd</p>
                                </div>
                                <div class="col-lg">
                                    <p class="text-white demo-fonts-box__item">Bold</p>
                                    <p class="text-white demo-fonts-box__item-xs font-weight-bold">AaBbCcDd</p>
                                    <br>
                                    <p class="text-white demo-fonts-box__item">Numbers (Light)</p>
                                    <p class="text-white demo-fonts-box__item-xs font-weight-light">0123456789</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Open Sans (Dark) -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Google Fonts -->
    
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <!-- Inline Text Elements -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="h3 card-header-title">Inline Text Elements</h2>
                    </div>
    
                    <div class="card-body">
                        <p>You can use the mark tag to
                            <mark>highlight</mark> text.</p>
                        <p><del>This line of text is meant to be treated as deleted text.</del></p>
                        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                        <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                        <p><u>This line of text will render as underlined</u></p>
                        <p><small>This line of text is meant to be treated as fine print.</small></p>
                        <p><strong>This line rendered as bold text.</strong></p>
                        <p><em>This line rendered as italicized text.</em></p>
                    </div>
                </div>
                <!-- End Inline Text Elements -->
            </div>
    
            <div class="col-md-6">
                <!-- Contextual Text Colors -->
                <div class="card h-100">
                    <div class="card-header">
                        <h2 class="h3 card-header-title">Contextual Text Colors</h2>
                    </div>
    
                    <div class="card-body">
                        <p class="text-muted">Etiam porta sem malesuada magna mollis euismod.</p>
                        <p class="text-primary">Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <p class="text-secondary">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
                        <p class="text-info">Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                        <p class="text-danger">Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                        <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
                    </div>
                </div>
                <!-- End Contextual Text Colors -->
            </div>
        </div>
    </div>

@endsection