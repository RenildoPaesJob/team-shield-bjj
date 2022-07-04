{{-- Setup the input group component structure --}}
<div>

    {{-- Input label --}}
    @isset($labels)
        @foreach ($labels as $label)
            <label for="{{ $id }}" @isset($labelClass) class="{{ $labelClass }}" @endisset>
                {{ $label }}
            </label>
            @yield('input_group_item')
        @endforeach
    @endisset

</div>
