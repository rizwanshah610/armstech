{{-- =====================================================
     AUTOMATIC & REUSABLE BREADCRUMB COMPONENT (ORANGE ACTIVE)
     Usage 1 (Automatic): @include('partials.breadcrumb')
     Usage 2 (Custom):    @include('partials.breadcrumb', ['pageTitle' => 'Custom Title'])
     ===================================================== --}}

@php
    // URL ke segments nikalna (e.g., /services/web-development -> ['services', 'web-development'])
    $segments = Request::segments();
    $lastSegment = end($segments);

    // Agar pageTitle bahar se nahi bheja gaya, to URL ke aakhri lafz ko title bana do
    if (!isset($pageTitle) || empty($pageTitle)) {
        $pageTitle = $lastSegment ? ucwords(str_replace(['-', '_'], ' ', $lastSegment)) : 'Home';
    }

    $breadcrumbBgColor = '#000000';
    // Orange color variable define kiya hai
    $activeColor = '#ffaa17'; 
@endphp

<!-- position: relative aur z-index: 10 lagaya hai taake links har cheez ke upar rahein -->
<section class="section-top" style="position: relative; z-index: 10; background-color:{{ $breadcrumbBgColor }}; background-image: url({{ asset('assets/img/bg/section-top-bg.jpg') }}); background-size:cover; background-position:center;">
    <div class="container" style="position: relative; z-index: 11;">
        <div class="section-top-title text-center">
            <h1>{{ $pageTitle }}</h1>

            <nav aria-label="breadcrumb">
                <!-- pointer-events: auto lagaya hai taake text click-able ho sake -->
                <ul class="page-breadcrumb justify-content-center" style="position: relative; z-index: 12; pointer-events: auto !important; list-style: none; padding: 0; margin: 0;">
                    
                    <!-- HOME LINK (Direct url('/') ke sath taake routing ka koi masla na ho) -->
                    <li style="display: inline-block;">
                        <a href="{{ url('/') }}" style="position: relative; z-index: 15; display: inline-block; color: #fff; text-decoration: none;">Home</a>
                    </li>

                    {{-- Agar items pass kiye hain aur woh current page ka loop nahi bana rahe --}}
                    @isset($items)
                        @foreach($items as $item)
                            {{-- Infinite loop se bachne ke liye check: agar link current URL hi hai to skip karo --}}
                            @if($item['url'] !== url()->current())
                                <li class="separator" style="display: inline-block; margin: 0 8px; color: #fff;">/</li>
                                <li style="display: inline-block;">
                                    <a href="{{ $item['url'] }}" style="position: relative; z-index: 15; display: inline-block; color: #fff; text-decoration: none;">{{ $item['title'] }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endisset

                    <li class="separator" style="display: inline-block; margin: 0 8px; color: #fff;">/</li>
                    <!-- ACTIVE BREADCRUMB (Iska color orange (#ffaa17) kar diya hai) -->
                    <li class="current" aria-current="page" style="display: inline-block; color: {{ $activeColor }}; font-weight: 500;">{{ $pageTitle }}</li>
                </ul>
            </nav>
        </div>
    </div>
</section>

@php
    // SEO Google Schema Structured Data Setup
    $schemaItems = [
        [
            '@' . 'type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => url('/'),
        ],
    ];

    $position = 2;

    if (isset($items)) {
        foreach ($items as $item) {
            if ($item['url'] !== url()->current()) {
                $schemaItems[] = [
                    '@' . 'type' => 'ListItem',
                    'position' => $position,
                    'name' => $item['title'],
                    'item' => $item['url'],
                ];
                $position++;
            }
        }
    }

    $schemaItems[] = [
        '@' . 'type' => 'ListItem',
        'position' => $position,
        'name' => $pageTitle,
        'item' => url()->current(),
    ];

    $breadcrumbSchema = [
        '@' . 'context' => 'https://schema.org',
        '@' . 'type' => 'BreadcrumbList',
        'itemListElement' => $schemaItems,
    ];
@endphp

@push('scripts')
<script type="application/ld+json">
{!! json_encode($breadcrumbSchema) !!}
</script>
@endpush
