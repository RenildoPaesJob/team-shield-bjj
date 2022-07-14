<div class="row p-1">
    <div class="card col-md-12 mt-1 mb-1">
        <div class="card-body">
            <div class="row align-middle">
                <div class="col-md-6">
                    <div class="h1">{{ $title }} {{ $slot ?? '' }}</div>

                </div>
                <div class="col-md-6 font-italic text-right mt-3">

                    @foreach ($paths['path'] as $path)
                    @php
                        $route = route($path['route']) ;
                    @endphp
                        <a href="{{ $route }}"> {{ $path['name'] }} /</a>
                    @endforeach

                    <span class=""> {{ $titlePath }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
