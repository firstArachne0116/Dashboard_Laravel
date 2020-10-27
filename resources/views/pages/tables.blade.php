@extends('layouts.dashboard')

@section('content')
<div class="u-body">
        <h1 class="h2 font-weight-semibold mb-4">Tables</h1>
    
        <div class="card mb-4">
            <header class="card-header">
                <h2 class="h3 card-header-title">Basic Table</h2>
            </header>
    
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Company</th>
                                <th scope="col">Role</th>
                                <th scope="col">Salary</th>
                                <th scope="col" width="180">Tag</th>
                                <th class="text-center" scope="col">Actions</th>
                            </tr>
                        </thead>
    
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dale Mack</td>
                                <td>Apple Inc.</td>
                                <td>Developer</td>
                                <td>$ 56,900</td>
                                <td>
                                    <a class="badge badge-soft-warning" href="#">Angular</a>
                                    <a class="badge badge-soft-warning" href="#">React</a>
                                    <a class="badge badge-soft-warning" href="#">Vue</a>
                                </td>
                                <td class="text-center">
                                    <a id="actions1Invoker" class="link-muted" href="#!" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                        <i class="fa fa-sliders-h"></i>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions1Invoker">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <a class="d-flex align-items-center link-muted py-2 px-3" href="#!">
                                                    <i class="fa fa-plus mr-2"></i> Add
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center link-muted py-2 px-3" href="#!">
                                                    <i class="fa fa-minus mr-2"></i> Remove
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Blanche Powers</td>
                                <td>Dropbox Inc.</td>
                                <td>Sales Manager</td>
                                <td>$ 35,450</td>
                                <td>
                                    <a class="badge badge-soft-primary" href="#">Admin</a>
                                    <a class="badge badge-soft-primary" href="#">Manager</a>
                                </td>
                                <td class="text-center">
                                    <a id="actions2Invoker" class="link-muted" href="#!" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                        <i class="fa fa-sliders-h"></i>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions2Invoker">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <a class="d-flex align-items-center link-muted py-2 px-3" href="#!">
                                                    <i class="fa fa-plus mr-2"></i> Add
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center link-muted py-2 px-3" href="#!">
                                                    <i class="fa fa-minus mr-2"></i> Remove
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Alvin Meyer</td>
                                <td>Microsoft Inc.</td>
                                <td>Developer</td>
                                <td>$ 89,240</td>
                                <td>
                                    <a class="badge badge-soft-success" href="#">Backend</a>
                                    <a class="badge badge-soft-success" href="#">DevOPs</a>
                                </td>
                                <td class="text-center">
                                    <a id="actions3Invoker" class="link-muted" href="#!" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                        <i class="fa fa-sliders-h"></i>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions3Invoker">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <a class="d-flex align-items-center link-muted py-2 px-3" href="#!">
                                                    <i class="fa fa-plus mr-2"></i> Add
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center link-muted py-2 px-3" href="#!">
                                                    <i class="fa fa-minus mr-2"></i> Remove
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Harriet Delgado</td>
                                <td>Google Inc.</td>
                                <td>Designer</td>
                                <td>$ 96,450</td>
                                <td>
                                    <a class="badge badge-soft-info" href="#">UI</a>
                                    <a class="badge badge-soft-info" href="#">UX</a>
                                    <a class="badge badge-soft-info" href="#">Design</a>
                                </td>
                                <td class="text-center">
                                    <a id="actions4Invoker" class="link-muted" href="#!" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                        <i class="fa fa-sliders-h"></i>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions4Invoker">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <a class="d-flex align-items-center link-muted py-2 px-3" href="#!">
                                                    <i class="fa fa-plus mr-2"></i> Add
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center link-muted py-2 px-3" href="#!">
                                                    <i class="fa fa-minus mr-2"></i> Remove
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Elsie Davis</td>
                                <td>Dell Corp.</td>
                                <td>Support Manager</td>
                                <td>$ 35,900</td>
                                <td>
                                    <a class="badge badge-soft-danger" href="#">Support</a>
                                </td>
                                <td class="text-center">
                                    <a id="actions5Invoker" class="link-muted" href="#!" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                                        <i class="fa fa-sliders-h"></i>
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right dropdown" style="width: 150px;" aria-labelledby="actions5Invoker">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <a class="d-flex align-items-center link-muted py-2 px-3" href="#!">
                                                    <i class="fa fa-plus mr-2"></i> Add
                                                </a>
                                            </li>
                                            <li>
                                                <a class="d-flex align-items-center link-muted py-2 px-3" href="#!">
                                                    <i class="fa fa-minus mr-2"></i> Remove
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
        <div class="card">
            <header class="card-header">
                <h2 class="h3 card-header-title">Table with links and progress</h2>
            </header>
    
            <div class="card-body">
                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Role</th>
                                <th scope="col" width="160">Avg. Progress</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Tag</th>
                                <th class="text-center" scope="col">Actions</th>
                            </tr>
                        </thead>
    
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dale Mack</td>
                                <td>Developer</td>
                                <td>
                                    <div class="progress" style="height: 6px; border-radius: 3px;">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%; border-radius: 3px;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>$ 56,900</td>
                                <td>
                                    <a class="badge badge-light">Manager</a>
                                </td>
                                <td class="text-center">
                                    <a class="u-link mr-2" href="#!">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="link-muted" href="#!">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Blanche Powers</td>
                                <td>Sales Manager</td>
                                <td>
                                    <div class="progress" style="height: 6px; border-radius: 3px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%; border-radius: 3px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>$ 35,450</td>
                                <td>
                                    <a class="badge badge-light">Manager</a>
                                </td>
                                <td class="text-center">
                                    <a class="u-link mr-2" href="#!">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="link-muted" href="#!">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Alvin Meyer</td>
                                <td>Developer</td>
                                <td>
                                    <div class="progress" style="height: 6px; border-radius: 3px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%; border-radius: 3px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>$ 89,240</td>
                                <td>
                                    <a class="badge badge-light">Manager</a>
                                </td>
                                <td class="text-center">
                                    <a class="u-link mr-2" href="#!">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="link-muted" href="#!">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Harriet Delgado</td>
                                <td>Designer</td>
                                <td>
                                    <div class="progress" style="height: 6px; border-radius: 3px;">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%; border-radius: 3px;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>$ 96,450</td>
                                <td>
                                    <a class="badge badge-light">Manager</a>
                                </td>
                                <td class="text-center">
                                    <a class="u-link mr-2" href="#!">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="link-muted" href="#!">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Elsie Davis</td>
                                <td>Support Manager</td>
                                <td>
                                    <div class="progress" style="height: 6px; border-radius: 3px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%; border-radius: 3px;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>$ 35,900</td>
                                <td>
                                    <a class="badge badge-light">Manager</a>
                                </td>
                                <td class="text-center">
                                    <a class="u-link mr-2" href="#!">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <a class="link-muted" href="#!">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- End Table -->
            </div>
        </div>
    </div>

@endsection