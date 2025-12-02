<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Arthadaya — Dashboard Admin</title>
  <meta name="description"
    content="Dashboard admin Arthadaya untuk mengelola properti, transaksi, klien, dan konsultasi properti minimalis modern." />
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Custom Tailwind config
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              50: "#F9F1E7",
              100: "#F9F1E7",
              200: "#E5E5E5",
              300: "#E5E5E5",
              400: "#B88E2F",
              500: "#B88E2F",
              600: "#B88E2F",
              700: "#333",
              800: "#333",
              900: "#333"
            },
          },
          boxShadow: {
            soft: "0 10px 30px rgba(0,0,0,0.08)"
          },
          backgroundImage: {
            "grid": "linear-gradient(to right, rgba(0,0,0,.04) 1px, transparent 1px), linear-gradient(to bottom, rgba(0,0,0,.04) 1px, transparent 1px)"
          }
        }
      }
    }
  </script>
  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;800&display=swap" rel="stylesheet">
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, 'Helvetica Neue', Arial, 'Noto Sans', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
    }

    /* Subtle glass effect */
    .glass {
      background: rgba(255, 255, 255, .7);
      backdrop-filter: blur(10px);
    }
  </style>
</head>

<body
  class="text-[#333] bg-[radial-gradient(1200px_600px_at_80%-10%,rgba(184,142,47,0.12),transparent),radial-gradient(900px_500px_at-10%_10%,rgba(184,142,47,0.08),transparent)]">

    @include('partials.admin.nav')

    <!-- Main Content -->
    <main class="flex-1 p-4 md:p-6 overflow-y-auto">
     @yield('content')
    </main>

  <!-- Scripts -->
  @stack('scripts')
  @stack('styles')
</body>

</html>