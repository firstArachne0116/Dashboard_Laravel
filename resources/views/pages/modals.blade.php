@extends('layouts.dashboard')

@section('content')
<div class="u-body">
        <!-- End Breadcrumb -->
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <h1 class="h3">Modals</h1>
                <ol class="breadcrumb bg-transparent small p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">UI Components</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->
    
        <!-- Modal Types & Positions -->
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3 card-header-title">Modal Types &amp; Positions</h2>
            </div>
    
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <a class="link-muted d-block text-center" data-toggle="modal" href="#exampleModal">
                            <img class="img-fluid d-block mb-3" src="{{ asset('img/ui-kit/modals/modal-basic.jpg') }}" alt="Htmlstream">
                            <span class="font-weight-semibold">Basic modal</span>
                        </a>
                    </div>
    
                    <div class="col-md-4 mb-3 mb-md-0">
                        <a class="link-muted d-block text-center" data-toggle="modal" href="#exampleModalCenter">
                            <img class="img-fluid d-block mb-3" src="{{ asset('img/ui-kit/modals/modal-vertically-centered.jpg') }}" alt="Htmlstream">
                            <span class="font-weight-semibold">Vertically centered modal</span>
                        </a>
                    </div>
    
                    <div class="col-md-4 mb-3 mb-md-0">
                        <a class="link-muted d-block text-center" data-toggle="modal" href="#exampleModalLong">
                            <img class="img-fluid d-block mb-3" src="{{ asset('img/ui-kit/modals/modal-long.jpg') }}" alt="Htmlstream">
                            <span class="font-weight-semibold">Scrolling long content</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Types & Positions -->
    
        <!-- Modal Sizes -->
        <div class="card">
            <div class="card-header">
                <h2 class="h3 card-header-title">Modal Sizes</h2>
            </div>
    
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <a class="link-muted d-block text-center" data-toggle="modal" href=".bd-example-modal-sm">
                            <img class="img-fluid d-block mb-3" src="{{ asset('img/ui-kit/modals/modal-small.jpg') }}" alt="Htmlstream">
                            <span class="font-weight-semibold">Small size</span>
                        </a>
                    </div>
    
                    <div class="col-md-4">
                        <a class="link-muted d-block text-center" data-toggle="modal" href=".bd-example-modal-lg">
                            <img class="img-fluid d-block mb-3" src="{{ asset('img/ui-kit/modals/modal-large.jpg') }}" alt="Htmlstream">
                            <span class="font-weight-semibold">Large size</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal Sizes -->
    </div>
@endsection

@section('outside-main')
<!-- Basic Modals -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Basic Modals</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Woohoo, you're reading this text in a modal!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Basic Modals -->

    <!-- Vertically Centered Modals -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Vertically Centered Modal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Woohoo, you're reading this text in a modal! Use Bootstrap’s JavaScript modal plugin to add dialogs to your site for lightboxes, user notifications, or completely custom content.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Vertically Centered Modals -->

    <!-- Scrolling Long Content -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>

                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>

                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>

                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Scrolling Long Content -->

    <!-- Small Size -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Small Size</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Small Size -->

    <!-- Large Size -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Large Size</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Large Size -->

@endsection