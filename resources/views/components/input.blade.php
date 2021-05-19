@extends('AdminLTE::components.form')

@section('input-item')

<input name='{{ $name }}' {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($name)]) }}>

@if($icon)

    <!-- Input Group Append -->
    <div class="input-group-append">
        
        <!-- Input Group Icon -->
        <div class="input-group-text">
            <span class="{{ $icon }}"></span>
        </div>
        <!-- ./Input Group Icon -->

    </div>
    <!-- ./Input Group Append -->

@endif

@if($componentName == 'adminlte-date')

    @once
        @push('css')
            <!-- Date Range Picker -->
            <link rel="stylesheet" href="{{ URL::asset('plugins/daterangepicker/daterangepicker.css') }}">
        @endpush

        @push('js')
            <!-- Date Range Picker -->
            <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
            <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
        @endpush
    @endonce

    @push('js')
        <script>
            $('input[name="{{ $name }}"]').daterangepicker({
                locale: {
                    format: 'DD/MM/YYYY'
                },
                singleDatePicker: true,
                showDropdowns: true,
                minYear: 2011,
                maxYear: parseInt(moment().format('YYYY'), 10),
            });

        </script>
    @endpush
@endif

@overwrite
