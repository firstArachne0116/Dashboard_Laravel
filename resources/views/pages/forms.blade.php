@extends('layouts.dashboard')

@section('content')
<div class="u-body">
        <!-- End Breadcrumb -->
        <div class="mb-4">
            <nav aria-label="breadcrumb">
                <h1 class="h3">Forms</h1>
                <ol class="breadcrumb bg-transparent small p-0">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                </ol>
            </nav>
        </div>
        <!-- End Breadcrumb -->
    
        <form>
            <!-- Form Controls -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Form Controls</h2>
                        </header>
    
                        <div class="card-body">
                            <div class="form-group mb-4">
                                <label for="defaultInput">Default input</label>
                                <input id="defaultInput" class="form-control" type="email" placeholder="Placeholder" aria-describedby="emailHelp">
                            </div>
    
                            <hr class="my-4">
    
                            <div class="form-group mb-4">
                                <label for="inputLeftIcon">Input with left icon</label>
                                <span class="form-icon-wrapper">
                            <span class="form-icon form-icon--left">
                              <i class="fa fa-user-circle form-icon__item"></i>
                            </span>
                                <input id="inputLeftIcon" class="form-control form-icon-input-left" type="email" placeholder="Placeholder" aria-describedby="emailHelp">
                                </span>
                            </div>
    
                            <div class="form-group mb-4">
                                <label for="inputRightIcon">Input with right icon</label>
                                <span class="form-icon-wrapper">
                            <span class="form-icon form-icon--right">
                              <i class="fa fa-user-circle form-icon__item"></i>
                            </span>
                                <input id="inputRightIcon" class="form-control form-icon-input-right" type="email" placeholder="Placeholder" aria-describedby="emailHelp">
                                </span>
                            </div>
    
                            <hr class="my-4">
    
                            <div class="form-group mb-4">
                                <label for="disabledTextInput">Disabled</label>
                                <input id="disabledTextInput" class="form-control" type="email" placeholder="Placeholder" disabled="" aria-describedby="disabledTextInput">
                                <small class="form-text text-muted">Text feedback.</small>
                            </div>
    
                            <div class="form-group mb-4">
                                <label for="successTextInput">Success</label>
                                <input id="successTextInput" class="form-control is-valid" type="email" placeholder="Placeholder" aria-describedby="successTextInput">
                                <small class="form-text valid-feedback">Success feedback.</small>
                            </div>
    
                            <div class="form-group">
                                <label for="errorTextInput">Error</label>
                                <input id="errorTextInput" class="form-control is-invalid" type="email" placeholder="Placeholder" aria-describedby="errorTextInput">
                                <small class="form-text invalid-feedback">Error feedback.</small>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Pilled Form Controls</h2>
                        </header>
    
                        <div class="card-body">
                            <div class="form-group mb-4">
                                <label for="defaultInput1">Default input</label>
                                <input id="defaultInput1" class="form-control form-pill" type="email" placeholder="Placeholder" aria-describedby="emailHelp">
                            </div>
    
                            <hr class="my-4">
    
                            <div class="form-group mb-4">
                                <label for="inputLeftIcon1">Input with left icon</label>
                                <span class="form-icon-wrapper">
                            <span class="form-icon form-icon--left">
                              <i class="fa fa-user-circle form-icon__item"></i>
                            </span>
                                <input id="inputLeftIcon1" class="form-control form-icon-input-left form-pill" type="email" placeholder="Placeholder" aria-describedby="emailHelp">
                                </span>
                            </div>
    
                            <div class="form-group">
                                <label for="inputRightIcon1">Input with right icon</label>
                                <span class="form-icon-wrapper">
                            <span class="form-icon form-icon--right">
                              <i class="fa fa-user-circle form-icon__item"></i>
                            </span>
                                <input id="inputRightIcon1" class="form-control form-icon-input-right form-pill" type="email" placeholder="Placeholder" aria-describedby="emailHelp">
                                </span>
                            </div>
    
                            <hr class="my-4">
    
                            <div class="form-group mb-4">
                                <label for="disabledTextInput2">Disabled</label>
                                <input id="disabledTextInput2" class="form-control form-pill" type="email" placeholder="Placeholder" disabled="" aria-describedby="disabledTextInput2">
                                <small class="form-text text-muted">Text feedback.</small>
                            </div>
    
                            <div class="form-group mb-4">
                                <label for="successTextInput2">Success</label>
                                <input id="successTextInput2" class="form-control form-pill is-valid" type="email" placeholder="Placeholder" aria-describedby="successTextInput2">
                                <small class="form-text valid-feedback">Success feedback.</small>
                            </div>
    
                            <div class="form-group">
                                <label for="errorTextInput2">Error</label>
                                <input id="errorTextInput2" class="form-control form-pill is-invalid" type="email" placeholder="Placeholder" aria-describedby="errorTextInput2">
                                <small class="form-text invalid-feedback">Error feedback.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Controls -->
    
            <!-- Checkboxes & Radios -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Checkboxes</h2>
                        </header>
    
                        <div class="card-body">
                            <div class="custom-control custom-checkbox mb-2">
                                <input id="customCheck1" class="custom-control-input" type="checkbox">
                                <label class="custom-control-label" for="customCheck1">Unchecked</label>
                            </div>
    
                            <div class="custom-control custom-checkbox mb-2">
                                <input id="customCheck2" class="custom-control-input" type="checkbox" checked="">
                                <label class="custom-control-label" for="customCheck2">Checked</label>
                            </div>
    
                            <hr class="my-4">
    
                            <div class="custom-control custom-checkbox mb-2">
                                <input id="customCheck3" class="custom-control-input" type="checkbox" disabled="">
                                <label class="custom-control-label" for="customCheck3">Disabled Unchecked</label>
                            </div>
    
                            <div class="custom-control custom-checkbox mb-2">
                                <input id="customCheck4" class="custom-control-input" type="checkbox" checked="" disabled="">
                                <label class="custom-control-label" for="customCheck4">Disabled Checked</label>
                            </div>
    
                            <hr class="my-4">
    
                            <div class="custom-control custom-checkbox mb-2">
                                <input id="customCheck5-1" class="custom-control-input is-valid" type="checkbox" checked="">
                                <label class="custom-control-label" for="customCheck5-1">Checked Success</label>
                            </div>
    
                            <div class="custom-control custom-checkbox mb-2">
                                <input id="customCheck5-2" class="custom-control-input is-invalid" type="checkbox">
                                <label class="custom-control-label" for="customCheck5-2">Unchecked Error</label>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Radios</h2>
                        </header>
    
                        <div class="card-body">
                            <div class="custom-control custom-radio mb-2">
                                <input id="customRadio1" class="custom-control-input" name="customRadio" type="radio">
                                <label class="custom-control-label" for="customRadio1">Unchecked</label>
                            </div>
    
                            <div class="custom-control custom-radio mb-2">
                                <input id="customRadio2" class="custom-control-input" name="customRadio" type="radio" checked="">
                                <label class="custom-control-label" for="customRadio2">Checked</label>
                            </div>
    
                            <hr class="my-4">
    
                            <div class="custom-control custom-radio mb-2">
                                <input id="customRadio3" class="custom-control-input" name="customRadioDisabled" type="radio" disabled="">
                                <label class="custom-control-label" for="customRadio3">Disabled Unchecked</label>
                            </div>
    
                            <div class="custom-control custom-radio mb-2">
                                <input id="customRadio4" class="custom-control-input" name="customRadioDisabled" type="radio" checked="" disabled="">
                                <label class="custom-control-label" for="customRadio4">Disabled Checked</label>
                            </div>
    
                            <hr class="my-4">
    
                            <div class="custom-control custom-radio mb-2">
                                <input id="customRadio5-1" class="custom-control-input is-valid" name="customRadioUncheckedValidation" type="radio" checked="">
                                <label class="custom-control-label" for="customRadio5-1">Checked Success</label>
                            </div>
    
                            <div class="custom-control custom-radio mb-2">
                                <input id="customRadio5-2" class="custom-control-input is-invalid" name="customRadioUncheckedValidation" type="radio">
                                <label class="custom-control-label" for="customRadio5-2">Unchecked Error</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Checkboxes & Radios -->
    
            <!-- Toggles & Toggles with Icon -->
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Toggles</h2>
                        </header>
    
                        <div class="card-body">
                            <div class="form-group">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Toggle off</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox">
    
                                        <div class="form-toggle__item">
                                            <i class="d-inline-block"></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
    
                            <div class="form-group">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Toggle on</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox" checked="">
    
                                        <div class="form-toggle__item">
                                            <i class="d-inline-block"></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
    
                            <hr class="my-4">
    
                            <div class="form-group is-disabled">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Disabled toggle off</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox" disabled="">
    
                                        <div class="form-toggle__item">
                                            <i class="d-inline-block"></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
    
                            <div class="form-group is-disabled">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Disabled toggle on</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox" checked="" disabled="">
    
                                        <div class="form-toggle__item">
                                            <i class="d-inline-block"></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
    
                            <hr class="my-4">
    
                            <div class="form-group is-invalid">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Error toggle off</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox">
    
                                        <div class="form-toggle__item">
                                            <i class="d-inline-block"></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
    
                            <div class="form-group is-valid">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Success toggle on</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox" checked="">
    
                                        <div class="form-toggle__item">
                                            <i class="d-inline-block"></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <header class="card-header">
                            <h2 class="h3 card-header-title">Toggles with Icons</h2>
                        </header>
    
                        <div class="card-body">
                            <div class="form-group">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Toggle off with icon</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox">
    
                                        <div class="form-toggle__item">
                                            <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
    
                            <div class="form-group">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Toggle on with icon</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox" checked="">
    
                                        <div class="form-toggle__item">
                                            <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
    
                            <hr class="my-4">
    
                            <div class="form-group is-disabled">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Disabled toggle off with icon</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox" disabled="">
    
                                        <div class="form-toggle__item">
                                            <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
    
                            <div class="form-group is-disabled">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Disabled toggle on with icon</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox" checked="" disabled="">
    
                                        <div class="form-toggle__item">
                                            <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
    
                            <hr class="my-4">
    
                            <div class="form-group is-invalid">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Error toggle off with icon</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox">
    
                                        <div class="form-toggle__item">
                                            <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
    
                            <div class="form-group is-valid">
                                <label class="d-flex align-items-center justify-content-between">
                                    <span class="form-label-text">Success toggle on with icon</span>
    
                                    <div class="form-toggle">
                                        <input name="toggleCheckbox" type="checkbox" checked="">
    
                                        <div class="form-toggle__item">
                                            <i class="fa" data-check-icon="" data-uncheck-icon=""></i>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Toggles & Toggles with Icon -->
        </form>
    </div>

@endsection