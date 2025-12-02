<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form - Arthadaya Theme</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .backdrop-blur-glass {
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
    }
    .logo-circle {
      border-radius: 50%;
      object-fit: cover;
    }
    .gallery-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      z-index: -1;
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5));
      display: flex;
      gap: 10px;
    }
    .gallery-column {
      display: flex;
      flex-direction: column;
      gap: 10px;
      flex: 1;
      height: 200vh; /* Double the viewport height for seamless looping */
      position: relative;
    }
    .gallery-column:nth-child(odd) {
      animation: moveUp 30s linear infinite;
    }
    .gallery-column:nth-child(even) {
      animation: moveDown 30s linear infinite;
    }
    .gallery-column img {
      width: 100%;
      height: 150px;
      object-fit: cover;
      border-radius: 8px;
      opacity: 0.7;
    }
    @keyframes moveUp {
      0% { transform: translateY(0); }
      100% { transform: translateY(-50%); } /* Move up half the column height */
    }
    @keyframes moveDown {
      0% { transform: translateY(-50%); } /* Start offset to align with loop */
      100% { transform: translateY(0); }
    }
  </style>
</head>

<body class="h-screen flex items-center justify-center font-sans">
  <div class="gallery-container">
    <!-- Column 1: Moves Up -->
    <div class="gallery-column">
      <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 1">
      <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 2">
      <img src="https://images.unsplash.com/photo-1512917774080-9991f7c4c7a1?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 3">
      <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2be?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 4">
      <img src="https://images.unsplash.com/photo-1600607688960-2b3a8b33c0e3?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 5">
      <img src="https://images.unsplash.com/photo-1592595896551-12b371d546d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 6">
    </div>
    <!-- Column 2: Moves Down -->
    <div class="gallery-column">
      <img src="https://images.unsplash.com/photo-1600585152915-18c46f07d4a0?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 7">
      <img src="https://images.unsplash.com/photo-1560448205-4d9b3e6bb6db?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 8">
      <img src="https://images.unsplash.com/photo-1512918728675-4e6a46319b8e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 9">
      <img src="https://images.unsplash.com/photo-1570129477621-4e6e40a4a6b8?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 10">
      <img src="https://images.unsplash.com/photo-1600607687939-ce8b8b6a3c1b?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 11">
      <img src="https://images.unsplash.com/photo-1592595896616-c37162298647?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 12">
    </div>
    <!-- Column 3: Moves Up -->
    <div class="gallery-column">
      <img src="https://images.unsplash.com/photo-1600585153490-76fb7f50f4a1?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 13">
      <img src="https://images.unsplash.com/photo-1560448205-17e6f0f6b4c2?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 14">
      <img src="https://images.unsplash.com/photo-1512918728675-4e6a46319b8f?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 15">
      <img src="https://images.unsplash.com/photo-1570129477492-45c003edd2bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 16">
      <img src="https://images.unsplash.com/photo-1600607688960-2b3a8b33c0e4?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 17">
      <img src="https://images.unsplash.com/photo-1592595896551-12b371d546d6?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 18">
    </div>
    <!-- Column 4: Moves Down -->
    <div class="gallery-column">
      <img src="https://images.unsplash.com/photo-1600585152915-18c46f07d4a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 19">
      <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e3?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 20">
      <img src="https://images.unsplash.com/photo-1512917774080-9991f7c4c7a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 21">
      <img src="https://images.unsplash.com/photo-1570129477621-4e6e40a4a6b9?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 22">
      <img src="https://images.unsplash.com/photo-1600607687939-ce8b8b6a3c1c?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 23">
      <img src="https://images.unsplash.com/photo-1592595896616-c37162298648?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Property 24">
    </div>
  </div>

  <div class="flex flex-col items-center relative z-10">
    <!-- Arthadaya Logo -->
    <img class="w-24 h-24 mb-6 logo-circle" src="{{ asset('images/arthadaya_group.jpg') }}" alt="Arthadaya Logo">

    <!-- Login Form -->
    <div class="w-full max-w-xl bg-white/20 rounded-xl shadow-lg p-8 border border-white/30 backdrop-blur-glass">
      <h2 class="text-3xl font-bold text-white text-center mb-2 drop-shadow-md">Welcome Back 👋</h2>
      <p class="text-sm text-white/80 text-center mb-8 drop-shadow-sm">Silakan login untuk melanjutkan</p>

      <form class="space-y-6" method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Username -->
        <div>
          <input type="email" name="email" placeholder="Email" required
            class="w-full px-4 py-3 rounded-lg border border-white/30 bg-white/10 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-[#B88E2F] transition duration-200">
        </div>

        <!-- Password -->
        <div>
          <input type="password" name="password" placeholder="Password" required
            class="w-full px-4 py-3 rounded-lg border border-white/30 bg-white/10 text-white placeholder-white/50 focus:outline-none focus:ring-2 focus:ring-[#B88E2F] transition duration-200">
        </div>

        <!-- Button -->
        <button type="submit"
          class="w-full py-3 rounded-lg bg-[#B88E2F] text-white font-semibold hover:bg-[#9c7626] transition duration-300 shadow-md">
          Login
        </button>

        <!-- Register -->
        <p class="text-center text-sm text-white/80 mt-6 drop-shadow-sm">
          Belum punya akun?
          <a href="{{ route('register') }}" class="text-[#B88E2F] hover:underline font-medium">Daftar</a>
        </p>
      </form>
    </div>
  </div>

  <script>
    document.querySelector('form').addEventListener('submit', (e) => {
      e.preventDefault();
      alert("Login berhasil ✨");
    });
  </script>
</body>

</html>
