@extends('layouts.dashboard')

@section('content')

<div class="u-body">
        <!-- End Breadcrumb -->
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <h1 class="h3">Colors</h1>
                <ol class="breadcrumb bg-transparent small p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Base UI</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->
    
        <!-- Base Colors -->
        <div class="card mb-4">
            <div class="card-header">
                <h2 class="h3 card-header-title">Base Colors</h2>
            </div>
    
            <div class="card-body">
                <ul class="list-unstyled row">
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-primary rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-white d-block">#6b15b6</small>
                            <span class="text-white">.bg-primary</span>
                        </div>
                        <span class="text-primary">.text-primary</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-secondary rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-white d-block">#00c9a7</small>
                            <span class="text-white">.bg-secondary</span>
                        </div>
                        <span class="text-secondary">.text-secondary</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-success rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-white d-block">#0dd157</small>
                            <span class="text-white">.bg-success</span>
                        </div>
                        <span class="text-success">.text-success</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-danger rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-white d-block">#fb4143</small>
                            <span class="text-white">.bg-danger</span>
                        </div>
                        <span class="text-danger">.text-danger</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-warning rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-white d-block">#fab633</small>
                            <span class="text-white">.bg-warning</span>
                        </div>
                        <span class="text-warning">.text-warning</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-info rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-white d-block">#2972fa</small>
                            <span class="text-white">.bg-info</span>
                        </div>
                        <span class="text-info">.text-info</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-dark rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-white d-block">#1b1e24</small>
                            <span class="text-white">.bg-dark</span>
                        </div>
                        <span class="text-dark">.text-dark</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-light rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-dark d-block">#f6f9fc</small>
                            <span class="text-dark">.bg-light</span>
                        </div>
                        <span class="text-light bg-dark">.text-light</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-white shadow-sm rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-dark d-block">#fff</small>
                            <span class="text-dark">.bg-white</span>
                        </div>
                        <span class="text-white bg-dark">.text-white</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Base Colors -->
    
        <!-- Soft Colors -->
        <div class="card">
            <div class="card-header">
                <h2 class="h3 card-header-title">Soft Colors</h2>
            </div>
    
            <div class="card-body">
                <ul class="list-unstyled row">
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-soft-primary rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-primary d-block">rgba(107,21,182, 0.1)</small>
                            <span class="text-primary">.bg-soft-primary</span>
                        </div>
                        <span class="text-primary">.text-primary</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-soft-secondary rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-secondary d-block">rgba(0, 201, 167, 0.1)</small>
                            <span class="text-secondary">.bg-soft-secondary</span>
                        </div>
                        <span class="text-secondary">.text-secondary</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-soft-success rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-success d-block">rgba(13, 209, 87, 0.1)</small>
                            <span class="text-success">.bg-soft-success</span>
                        </div>
                        <span class="text-success">.text-success</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-soft-danger rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-danger d-block">rgba(251, 65, 67, 0.1)</small>
                            <span class="text-danger">.bg-soft-danger</span>
                        </div>
                        <span class="text-danger">.text-danger</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-soft-warning rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-warning d-block">rgba(250, 182, 51, 0.1)</small>
                            <span class="text-warning">.bg-soft-warning</span>
                        </div>
                        <span class="text-warning">.text-warning</span>
                    </li>
    
                    <li class="col-lg-3 text-center mb-5">
                        <div class="bg-soft-info rounded mb-2" style="padding: 50px 25px;">
                            <small class="text-info d-block">rgba(41, 114, 250, 0.1)</small>
                            <span class="text-info">.bg-soft-info</span>
                        </div>
                        <span class="text-info">.text-info</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Soft Colors -->
    </div>
@endsection