<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bucket Algorithm</title>
    <link rel="stylesheet" href="../../css/app.css">
    @livewireStyles
    @yield('styles')
</head>

<body class="bg-base-200 ">
   {{--  <h1 class="text-5xl font-bold text-center pt-10">Bucket Algorithm</h1> --}}
    <div class="hero min-h-screen ">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    @livewireScripts
    @yield('scripts')
</body>

</html>
