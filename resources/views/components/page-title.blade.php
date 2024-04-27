<div class="pagetitle">
    <h1>{{$title}}</h1>
    <nav>
        <ol class="breadcrumb">
            @foreach ($breadcrumbItems as $key => $item)
                @if ($key == 'active')
                    <li class="breadcrumb-item active">{{$item}}</li>
                @else
                    <li class="breadcrumb-item"><a href="{{$key}}.html">{{$item}}</a></li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>