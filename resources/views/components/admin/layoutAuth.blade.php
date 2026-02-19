<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Auth</title>

    {{-- Sweet Alert CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('admin/auth.css') }}">
</head>

<body>

    <div class="auth-container">
        {{ $slot }}
    </div>

    {{-- Sweet Alert Messages --}}
    @if (session('sweet_error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('sweet_error') }}',
                confirmButtonColor: '#667eea',
                timer: 3000,
                timerProgressBar: true
            });
        </script>
    @endif

    @if (session('sweet_logout'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('sweet_logout') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

</body>

</html>