@if($breadcrumbs)
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</li>

        @foreach($breadcrumbs as $breadcrumb)
            @if($breadcrumb->url && !$loop->last)
                <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
            @else
                <li class="breadcrumb-item active">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach

        @yield('breadcrumb-links')
    </ol>
@endif
