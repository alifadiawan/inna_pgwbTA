<!DOCTYPE html>
<html lang="en">

<head>
    @include('masteradmin.css')
</head>

<body data-spy="scroll" data-target=".fixed-top" style="background-color: #1c1c21">

    {{-- navbar --}}
        @include('masteradmin.navbar')



                @yield('content')


</body>

    @include('masteradmin.script')

</html>
