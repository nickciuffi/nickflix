<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Nickflix</title>
</head>
<body>
    @include('components.header')
    @yield('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                setTimeout(() => {
                    alert('{{$error}}')
                }, 100);
            </script>
        @endforeach
    @endif
    @if(session('error'))
            <script>
                setTimeout(() => {
                    alert('{{session('error')}}')
                }, 100);
            </script>
    @endif
    @if(session('success'))
            <script>
                setTimeout(() => {
                    alert('{{session('success')}}')
                }, 100);
            </script>
    @endif
</body>
</html>
