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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">3d Switch</div>
                    <div class="card-body">
                        <label class="switch switch-3d switch-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-3d switch-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-3d switch-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-3d switch-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-3d switch-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-3d switch-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-3d switch-primary">
                            <input class="switch-input" type="checkbox" checked="" disabled="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-3d switch-primary">
                            <input class="switch-input" type="checkbox" disabled>
                            <span class="switch-slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch default</div>
                    <div class="card-body">
                        <label class="switch switch-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch default - pills</div>
                    <div class="card-body">
                        <label class="switch switch-pill switch-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch outline</div>
                    <div class="card-body">
                        <label class="switch switch-outline-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-outline-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-outline-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-outline-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-outline-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-outline-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch outline - pills</div>
                    <div class="card-body">
                        <label class="switch switch-pill switch-outline-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-outline-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-outline-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-outline-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-outline-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-outline-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch outline alternative</div>
                    <div class="card-body">
                        <label class="switch switch-outline-primary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-outline-secondary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-outline-success-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-outline-warning-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-outline-info-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-outline-danger-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch outline alternative - pills</div>
                    <div class="card-body">
                        <label class="switch switch-pill switch-outline-primary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-outline-secondary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-outline-success-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-outline-warning-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-outline-info-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                        <label class="switch switch-pill switch-outline-danger-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with text</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with text - pills</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-pill switch-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with text outline</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-outline-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-outline-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-outline-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-outline-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-outline-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-outline-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with text outline - pills</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-pill switch-outline-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with text outline alternative</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-outline-primary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-outline-secondary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-outline-success-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-outline-warning-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-outline-info-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-outline-danger-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with text outline alternative - pills</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-pill switch-outline-primary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-secondary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-success-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-warning-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-info-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-danger-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with icon</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with icon - pills</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-pill switch-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with icon outline</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-outline-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-outline-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-outline-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-outline-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-outline-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-outline-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with icon outline - pills</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-pill switch-outline-primary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-secondary">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-success">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-warning">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-info">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-danger">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with icon outline alternative</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-outline-primary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-outline-secondary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-outline-success-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-outline-warning-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-outline-info-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-outline-danger-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Switch with icon outline alternative - pills</div>
                    <div class="card-body">
                        <label class="switch switch-label switch-pill switch-outline-primary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-secondary-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-success-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-warning-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-info-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                        <label class="switch switch-label switch-pill switch-outline-danger-alt">
                            <input class="switch-input" type="checkbox" checked="">
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Sizes</div>
                    <div class="card-body p-0">
                        <table class="table table-hover table-striped table-align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>Size</th>
                                    <th>Example</th>
                                    <th>CSS Class</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Large</td>
                                    <td>
                                        <label class="switch switch-lg switch-3d switch-primary">
                                            <input class="switch-input" type="checkbox" checked="">
                                            <span class="switch-slider"></span>
                                        </label>
                                    </td>
                                    <td>Add following class
                                        <code>.s witch-lg</code>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Normal</td>
                                    <td>
                                        <label class="switch switch-3d switch-primary">
                                            <input class="switch-input" type="checkbox" checked="">
                                            <span class="switch-slider"></span>
                                        </label>
                                    </td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td>Small</td>
                                    <td>
                                        <label class="switch switch-sm switch-3d switch-primary">
                                            <input class="switch-input" type="checkbox" checked="">
                                            <span class="switch-slider"></span>
                                        </label>
                                    </td>
                                    <td>Add following class
                                        <code>.s witch-sm</code>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- /.row-->
    </div>
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
