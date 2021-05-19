@extends('AdminLTE::components.form')

@section('input-item')

<!-- Select -->
<select name='{{ $name }}'
    {{ $attributes->class(['form-control cselect', 'is-invalid' => $errors->has($name)]) }} style="width: 100%;">
    
    <!-- Default Options -->
    <option value='-1'>{{ $attributes->get('placeholder') }}</option>
    
    <!-- Render Options -->
    @foreach($options as $key => $value)
        <option {{ $isSelected($key) ? 'selected="selected"' : '' }} value={{ $key }}>{{ $value }}</option>
    @endforeach

</select>
<!-- End Select -->

@error($name)
    <span class="error invalid-feedback">{{ $message }}</span>
@enderror

@once
    @prepend('css')
        <!-- Select2 -->
        <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    @endprepend

    @prepend('js')
        <!-- Select2 Script -->
        <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                $('.cselect').select2();
            });
        </script>
    @endprepend
@endonce


@overwrite
