@extends('layouts.master')
@section('content')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
        <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#">
                <i class="icon-speech"></i>
            </a>
            <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
            <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
        </div>
    </li>
</ol>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Button group</strong>
                        <div class="card-header-actions">
                            <a class="card-header-action" href="http://coreui.io/docs/components/bootstrap-button-group/"
                                target="_blank">
                                <small class="text-muted">docs</small>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button class="btn btn-secondary" type="button">Left</button>
                            <button class="btn btn-secondary" type="button">Middle</button>
                            <button class="btn btn-secondary" type="button">Right</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Button group
                        <small>toolbar</small>
                    </div>
                    <div class="card-body">
                        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button class="btn btn-secondary" type="button">1</button>
                                <button class="btn btn-secondary" type="button">2</button>
                                <button class="btn btn-secondary" type="button">3</button>
                                <button class="btn btn-secondary" type="button">4</button>
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                <button class="btn btn-secondary" type="button">5</button>
                                <button class="btn btn-secondary" type="button">6</button>
                                <button class="btn btn-secondary" type="button">7</button>
                            </div>
                            <div class="btn-group" role="group" aria-label="Third group">
                                <button class="btn btn-secondary" type="button">8</button>
                            </div>
                        </div>
                        <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                                <button class="btn btn-secondary" type="button">1</button>
                                <button class="btn btn-secondary" type="button">2</button>
                                <button class="btn btn-secondary" type="button">3</button>
                                <button class="btn btn-secondary" type="button">4</button>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="btnGroupAddon">@</span>
                                </div>
                                <input class="form-control" type="text" placeholder="Input group example" aria-label="Input group example"
                                    aria-describedby="btnGroupAddon">
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group" role="group" aria-label="First group">
                                <button class="btn btn-secondary" type="button">1</button>
                                <button class="btn btn-secondary" type="button">2</button>
                                <button class="btn btn-secondary" type="button">3</button>
                                <button class="btn btn-secondary" type="button">4</button>
                            </div>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="btnGroupAddon2">@</span>
                                </div>
                                <input class="form-control" type="text" placeholder="Input group example" aria-label="Input group example"
                                    aria-describedby="btnGroupAddon2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Button group
                        <small>sizing</small>
                    </div>
                    <div class="card-body">
                        <div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large button group">
                            <button class="btn btn-secondary" type="button">Left</button>
                            <button class="btn btn-secondary" type="button">Middle</button>
                            <button class="btn btn-secondary" type="button">Right</button>
                        </div>
                        <br>
                        <div class="btn-group mb-3" role="group" aria-label="Default button group">
                            <button class="btn btn-secondary" type="button">Left</button>
                            <button class="btn btn-secondary" type="button">Middle</button>
                            <button class="btn btn-secondary" type="button">Right</button>
                        </div>
                        <br>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                            <button class="btn btn-secondary" type="button">Left</button>
                            <button class="btn btn-secondary" type="button">Middle</button>
                            <button class="btn btn-secondary" type="button">Right</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Button group
                        <small>nesting</small>
                    </div>
                    <div class="card-body">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <button class="btn btn-secondary" type="button">1</button>
                            <button class="btn btn-secondary" type="button">2</button>
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary dropdown-toggle" id="btnGroupDrop1" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Button group
                        <small>vertical variation</small>
                    </div>
                    <div class="card-body">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <button class="btn btn-secondary" type="button">Button</button>
                            <button class="btn btn-secondary" type="button">Button</button>
                            <button class="btn btn-secondary" type="button">Button</button>
                            <button class="btn btn-secondary" type="button">Button</button>
                            <button class="btn btn-secondary" type="button">Button</button>
                            <button class="btn btn-secondary" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Button group
                        <small>vertical variation</small>
                    </div>
                    <div class="card-body">
                        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                            <button class="btn btn-secondary" type="button">Button</button>
                            <button class="btn btn-secondary" type="button">Button</button>
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop1" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop1">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                            <button class="btn btn-secondary" type="button">Button</button>
                            <button class="btn btn-secondary" type="button">Button</button>
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop2" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop2">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop3" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop3">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                            <div class="btn-group" role="group">
                                <button class="btn btn-secondary dropdown-toggle" id="btnGroupVerticalDrop4" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupVerticalDrop4">
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /.row-->
    </div><!-- /container-fluid -->
</div><!-- /container-fluid -->
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">Home</li>
    <li class="breadcrumb-item">
        <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Dashboard</li>
    <!-- Breadcrumb Menu-->
    <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#">
                <i class="icon-speech"></i>
            </a>
            <a class="btn" href="./">
                <i class="icon-graph"></i>  Dashboard</a>
            <a class="btn" href="#">
                <i class="icon-settings"></i>  Settings</a>
        </div>
    </li>
</ol>
@endsection
