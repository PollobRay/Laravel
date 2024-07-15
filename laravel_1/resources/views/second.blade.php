

{{--    @include('first')
        All code from first.blade.php --}}

{{--
    @incldueIf('first')             First check the file is exits or not if exits then add

    @includeWhen(condition,'first',['status_from_first' => 'Hello'])   first check the condition if true then add
    @includeUnless(        )
--}}

{{-- Pass Value to the first file --}}
@include('first',['status'=>'Hello Ray'])
{{-- It will assign the value of $status of first.blade.php to 'Hello Ray' --}}