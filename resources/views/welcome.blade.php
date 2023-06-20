@extends('layouts.master')
@section('styles')
@endsection
@section('content')
    <div class="hero-content flex-col lg:flex-row-reverse">
        @livewire('ball')
        @livewire('bucket')
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $("#bucketMessage").hide();
            }, 5000); // 5 secs
            setTimeout(function() {
                $("#ballMessage").fadeOut('fast');
            }, 5000); // 5 secs
        });
    </script>
@endsection
