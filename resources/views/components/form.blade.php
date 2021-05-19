<div class="{{ $fGroupClass }}">

    <!-- Label Input -->
    @if($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif

    

    <!-- Input Group -->
    <div class="input-group {{ $iGroupClass }}">

        <!-- Input Forms -->
        @yield('input-item')

        <!-- Show when input group has error -->
        @error( $name )
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>
