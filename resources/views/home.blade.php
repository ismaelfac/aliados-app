@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">{{ __('Dashboard') }}</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-body all-icons">
            <div class="row">
                <div class="font-icon-list col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs-6 options">
                    <div class="font-icon-detail">
                    <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                    <p>arrows-1_cloud-download-93</p>
                    </div>
                </div>
                <div class="font-icon-list col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs-6 options">
                    <div class="font-icon-detail">
                    <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                    <p>arrows-1_cloud-download-93</p>
                    </div>
                </div>
                <div class="font-icon-list col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs-6 options">
                    <div class="font-icon-detail">
                    <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                    <p>arrows-1_cloud-download-93</p>
                    </div>
                </div>
                <div class="font-icon-list col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs-6 options">
                    <div class="font-icon-detail">
                    <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                    <p>arrows-1_cloud-download-93</p>
                    </div>
                </div>
                <div class="font-icon-list col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs-6 options">
                    <div class="font-icon-detail">
                    <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                    <p>arrows-1_cloud-download-93</p>
                    </div>
                </div>
                <div class="font-icon-list col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs-6 options">
                    <div class="font-icon-detail">
                    <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                    <p>arrows-1_cloud-download-93</p>
                    </div>
                </div>
                <div class="font-icon-list col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs-6 options">
                    <div class="font-icon-detail">
                    <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                    <p>arrows-1_cloud-download-93</p>
                    </div>
                </div>
                <div class="font-icon-list col-lg-3 col-md-4 col-sm-4 col-xs-6 col-xs-6 options">
                    <div class="font-icon-detail">
                    <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                    <p>arrows-1_cloud-download-93</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
