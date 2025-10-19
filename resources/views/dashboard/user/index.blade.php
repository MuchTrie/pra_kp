@extends('layouts.dashboard')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @include('dashboard.user.sections.header')
        
        @include('dashboard.user.sections.statistics')
        
        @include('dashboard.user.sections.welcome-profile')
        
        @include('dashboard.user.sections.features-info')
        
        @include('dashboard.user.sections.quick-actions')
    </div>
</div>
@endsection