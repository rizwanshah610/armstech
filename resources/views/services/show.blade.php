@extends('layouts.app')
@section('title', $service->meta_title ?? $service->title)
@section('meta_description', $service->meta_description ?? $service->short_description)

@section('content')

<section class="page-header">
    <div class="container">
        <h1>{{ $service->title }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
                <li class="breadcrumb-item active">{{ $service->title }}</li>
            </ol>
        </nav>
    </div>
</section>

<section class="service-detail py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="img-fluid rounded mb-4">
                @endif
                <div class="service-content">
                    {!! $service->description !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <h5>All Services</h5>
                    <ul class="service-list">
                        @foreach(\App\Models\Service::active()->get() as $s)
                        <li class="{{ $s->id === $service->id ? 'active' : '' }}">
                            <a href="{{ route('services.show', $s->slug) }}">
                                <i class="{{ $s->icon }}"></i> {{ $s->title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="cta-box mt-4 p-4 bg-primary text-white rounded">
                        <h5>Need This Service?</h5>
                        <p>Get a free quote from our experts.</p>
                        <a href="{{ route('contact') }}" class="btn btn-light">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection