<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin CMS</title>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- Custom Css --}}
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
</head>

<body>

    <!-- Mobile Toggle -->
    <button class="mobile-toggle" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Overlay -->
    <div class="overlay" onclick="toggleSidebar()"></div>

    <div class="cms-wrapper">
        <!-- Sidebar -->
        <x-admin.sidebar />

        <!-- Main Content -->
        <main class="main-content">
            {{ $slot }}
        </main>

    </div>

    <script src="{{ asset('admin/script.js') }}"></script>

    {{-- Sweet Alert Messages --}}
    @if (session('sweet_success'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('sweet_success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('sweet_CtaUpdation'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('sweet_CtaUpdation') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('sweet_ContactUpdation'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('sweet_ContactUpdation') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('sweet_HomeUpdation'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('sweet_HomeUpdation') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('sweet_AboutUpdation'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('sweet_AboutUpdation') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('sweet_ServiceUpdation'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('sweet_ServiceUpdation') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('sweet_ServiceDetailsUpdation'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('sweet_ServiceDetailsUpdation') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('sweet_ProjectsUpdation'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('sweet_ProjectsUpdation') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('sweet_FaqUpdation'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('sweet_FaqUpdation') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('sweet_ContactUsUpdation'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('sweet_ContactUsUpdation') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

</body>

</html>