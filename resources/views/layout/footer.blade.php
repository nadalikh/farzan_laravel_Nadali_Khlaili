
@if($errors->any())
    <script>
        var error = '{{$errors->first()}}'
    </script>
@endif
@if(\Illuminate\Support\Facades\Session::has('success'))
    <script>
        var success = '{{\Illuminate\Support\Facades\Session::get('success')}}'
    </script>
    @endif
    @vite(['resources/js/app.js'])

    </body>
</html>
