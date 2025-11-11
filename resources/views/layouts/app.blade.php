<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>{{ config('app.name', 'Elixir') }} — @yield('title','Inicio')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0b0b0b">

  {{-- Fuentes --}}
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

  @vite(['resources/css/app.css','resources/js/app.js'])
  @stack('head')
</head>
<body class="bg-elixir-black text-white relative">
  {{-- Sutil brillo dorado superior --}}
  <div class="pointer-events-none fixed inset-0 bg-radial-faint"></div>

  @include('partials.navbar')

  <main class="pt-20">
    @yield('content')
  </main>

  <footer class="border-t border-white/10 mt-16">
    <div class="container-std py-10 text-center text-white/70">
      <div class="gold-divider mx-auto mb-4"></div>
      © {{ date('Y') }} Elixir. Todos los derechos reservados
    </div>
  </footer>

  @stack('scripts')
</body>
</html>
