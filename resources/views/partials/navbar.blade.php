<nav x-data="{open:false}" class="fixed top-0 inset-x-0 z-50 border-b border-white/10 bg-black/70 backdrop-blur">
  <div class="container-std h-16 flex items-center justify-between">
    <a href="{{ route('home') }}" class="flex items-center gap-3">
      <img src="{{ asset('img/logo2.png') }}" class="h-10 w-auto" alt="Elixir logo">
      <span class="sr-only">Elixir</span>
    </a>

    <!-- Botón hamburguesa -->
    <button
      class="lg:hidden p-2 text-white/80"
      @click="open = !open"
      :aria-expanded="open"
      aria-controls="primary-nav"
      aria-label="Abrir menú"
    >
      <template x-if="!open">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </template>
      <template x-if="open">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </template>
    </button>

    <!-- Nav desktop -->
    <ul class="hidden lg:flex items-center gap-8 text-sm">
      <li><a href="{{ route('home') }}" class="hover:text-elixir-gold transition">Inicio</a></li>
      <li><a href="{{ url('/menu') }}" class="hover:text-elixir-gold transition">Bebidas</a></li>
      <li><a href="{{ url('/#about') }}" class="hover:text-elixir-gold transition">Nosotros</a></li>
      <li><a href="{{ url('/agenda') }}" class="hover:text-elixir-gold transition">Agenda</a></li>
      <li><a href="{{ url('/#contact') }}" class="hover:text-elixir-gold transition">Contacto</a></li>
    </ul>
  </div>

  <!-- Nav móvil -->
  <div
    id="primary-nav"
    x-cloak
    x-show="open"
    x-transition.opacity
    class="lg:hidden border-t border-white/10 bg-black/90"
  >
    <ul class="container-std py-3 space-y-1 text-base">
      <li><a @click="open=false" href="{{ route('home') }}" class="block py-3 hover:text-elixir-gold">Inicio</a></li>
      <li><a @click="open=false" href="{{ url('/menu') }}" class="block py-3 hover:text-elixir-gold">Bebidas</a></li>
      <li><a @click="open=false" href="{{ url('/#about') }}" class="block py-3 hover:text-elixir-gold">Nosotros</a></li>
      <li><a @click="open=false" href="{{ url('/agenda') }}" class="block py-3 hover:text-elixir-gold">Agenda</a></li>
      <li><a @click="open=false" href="{{ url('/#contact') }}" class="block py-3 hover:text-elixir-gold">Contacto</a></li>
    </ul>
  </div>
  <!-- Overlay para cerrar tocando fuera -->
    <div
    x-cloak
    x-show="open"
    x-transition.opacity
    @click="open=false"
    class="fixed inset-0 lg:hidden bg-black/40"
    ></div>

</nav>
