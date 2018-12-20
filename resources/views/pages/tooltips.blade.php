@extends('core::layouts.master')
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
        <div class="card">
            <div class="card-header">Tooltips
                <div class="card-header-actions">
                    <a class="card-header-action" href="http://coreui.io/docs/components/bootstrap-tooltips/" target="_blank">
                        <small class="text-muted">docs</small>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <p class="text-muted">Hover over the links below to see tooltips:</p>
                <div class="bd-example tooltip-demo">
                    <p class="muted">Tight pants next level keffiyeh
                        <a href="#" data-toggle="tooltip" title="" data-original-title="Default tooltip">you probably</a>
                        haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown.
                        Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel
                        <a href="#" data-toggle="tooltip" title="" data-original-title="Another tooltip">have a</a>
                        terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu
                        biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic
                        artisan
                        <a href="#" data-toggle="tooltip" title="" data-original-title="Another one here too">whatever
                            keytar</a>, scenester farm-to-table banksy Austin
                        <a href="#" data-toggle="tooltip" title="" data-original-title="The last tip!">twitter handle</a>
                        freegan cred raw denim single-origin coffee viral.</p>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip
                    on top</button>
                <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip
                    on right</button>
                <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip
                    on bottom</button>
                <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip
                    on left</button>
                <button class="btn btn-secondary" type="button" data-toggle="tooltip" data-html="true" title=""
                    data-original-title="&lt;em&gt;Tooltip&lt;/em&gt; &lt;u&gt;with&lt;/u&gt; &lt;b&gt;HTML&lt;/b&gt;">Tooltip
                    with HTML</button>
            </div>
        </div>
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
