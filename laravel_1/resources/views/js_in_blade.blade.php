
{{$fruit='appple';}}

<script>
    var data={{Js::from($fruit)}};
    document.write('Printing from js '+data);
</script>

{{--
    let, layout.blade.php 
            @stack('script')
        
    now, about.blade.php
            @extend('layout')
            @push('script')
                <script src=""></script>
            @endpush        
--}}