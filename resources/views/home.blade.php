@extends('layouts.app')
@section('title', $title ?? 'Inicio')

@section('content')
{{-- HERO --}}
<header class="relative min-h-[72vh] flex items-center">
  {{-- Fondo: imagen + brillo radial más fuerte (si se provee) --}}
  @if(!empty($heroImage))
    <img src="{{ asset($heroImage) }}" alt="" class="absolute inset-0 w-full h-full object-cover opacity-35 pointer-events-none">
  @else
    {{-- fallback: color/gradiente si no hay imagen --}}
    <div class="absolute inset-0 bg-gradient-to-b from-black/75 to-transparent pointer-events-none"></div>
  @endif
  <div class="pointer-events-none absolute inset-0 bg-radial-strong"></div>

  <div class="container relative z-10 px-4"> {{-- container con padding lateral para márgenes --}}
    <div class="max-w-3xl">
      <h1 class="font-serif text-4xl md:text-6xl leading-tight">{{ $headline ?? 'El arte de la coctelería, la esencia del placer' }}</h1>
      <p class="mt-4 text-lg md:text-xl text-white/80">{{ $subheadline ?? 'Fusionamos sabores, creatividad y pasión para crear bebidas únicas y memorables.' }}</p>
      <div class="mt-6 flex flex-wrap gap-3">
        @if(!empty($ctaPrimaryUrl) && !empty($ctaPrimaryLabel))
          <a href="{{ $ctaPrimaryUrl }}" class="btn-gold">{{ $ctaPrimaryLabel }}</a>
        @else
          <a href="#about" class="btn-gold">Conoce más</a>
        @endif

        @if(!empty($ctaSecondaryUrl) && !empty($ctaSecondaryLabel))
          <a href="{{ $ctaSecondaryUrl }}" class="btn-ghost">{{ $ctaSecondaryLabel }}</a>
        @else
          <a href="{{ url('/agenda') }}" class="btn-ghost">Agenda tu evento</a>
        @endif
      </div>
    </div>
  </div>
</header>

{{-- VIDEO / INTRO --}}
<section class="section">
  <div class="container text-center px-4">
    <h2 class="title">{{ $sectionDiscoverTitle ?? 'Descubre Elixir' }}</h2>
    <div class="gold-divider mx-auto mt-3"></div>
    @if(!empty($introVideo))
      <div class="mt-6 aspect-video rounded-xl overflow-hidden ring-1 ring-white/10 shadow-black/40 shadow-lg">
        <video class="w-full h-full object-cover" src="{{ asset($introVideo) }}" autoplay muted loop playsinline></video>
      </div>
    @else
      <p class="mt-6 text-white/80">{{ $introText ?? 'Sumérgete en el mundo de Elixir y descubre el arte de la coctelería.' }}</p>
    @endif
  </div>
</section>

{{-- NOSOTROS --}}
<section id="about" class="section">
  <div class="container grid lg:grid-cols-3 gap-10 items-center px-4">
    <div class="lg:col-span-2">
      <h2 class="title">{{ $aboutTitle ?? 'Nosotros' }}</h2>
      <div class="gold-divider mt-3"></div>
      <p class="mt-5 text-white/80">{{ $aboutLead ?? 'Ofrecemos servicios de barra de cocteles para eventos especiales. Experiencias únicas y personalizadas para cada ocasión.' }}</p>
      <div class="mt-6">
        <a href="{{ $aboutCtaUrl ?? url('/agenda') }}" class="btn-gold">{{ $aboutCtaLabel ?? 'Diseñar mi plan' }}</a>
      </div>
    </div>
    <div>
      @if(!empty($aboutImage))
        <img src="{{ asset($aboutImage) }}" class="w-full rounded-xl ring-1 ring-white/10 shadow-lg shadow-black/40" alt="{{ $aboutTitle ?? 'Nosotros' }}">
      @endif
    </div>
  </div>
</section>

{{-- SERVICIOS --}}
<section id="services" class="section">
  <div class="container px-4">
    <h2 class="title text-center">{{ $servicesTitle ?? '¿Qué ofrecemos?' }}</h2>
    <p class="subtitle text-center mt-2">{{ $servicesSubtitle ?? 'Opciones para hacer de tu evento una experiencia inolvidable' }}</p>

    <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
      @forelse($servicios ?? [] as $s)
        <article class="card card-hover">
          @if(!empty($s['img']))
            <img src="{{ asset($s['img']) }}" alt="{{ $s['title'] ?? 'Servicio' }}" class="h-44 w-full object-cover">
          @endif
          <div class="p-4">
            <h3 class="text-lg font-medium">{{ $s['title'] ?? 'Servicio' }}</h3>
            <p class="mt-2 text-sm text-white/70">{{ $s['desc'] ?? '' }}</p>
          </div>
        </article>
      @empty
        {{-- Fallback amigable cuando no hay servicios configurados --}}
        <div class="col-span-full text-center text-white/70">{{ $servicesEmptyText ?? 'Próximamente: nuestros servicios estarán disponibles aquí.' }}</div>
      @endforelse
    </div>
  </div>
</section>

{{-- CTA MENÚ --}}
<section id="menu" class="section">
  <div class="container text-center px-4">
    <h2 class="title">{{ $menuTitle ?? 'Bebidas' }}</h2>
    <p class="subtitle mt-2">{{ $menuSubtitle ?? 'Clásicos y creaciones propias' }}</p>
    <a class="btn-ghost mt-6" href="{{ $menuUrl ?? url('/menu') }}">{{ $menuLabel ?? 'Ir al menú completo' }}</a>
  </div>
</section>

{{-- CONTACTO --}}
<section id="contact" class="section">
  <div class="container grid lg:grid-cols-2 gap-10 px-4">
    <div>
      <h2 class="title">{{ $contactTitle ?? 'Contacto' }}</h2>
      <div class="gold-divider mt-3"></div>
      <ul class="mt-5 space-y-2 text-white/85">
        <li>{{ $contactAddress ?? 'Calle Mina #3 Uriangato, Gto. México' }}</li>
        <li>{{ $contactPhone ?? '445 144 5285' }}</li>
        <li>{{ $contactEmail ?? 'elixircontacto@gmail.com' }}</li>
      </ul>
    </div>
    <div class="rounded-xl overflow-hidden ring-1 ring-white/10 aspect-[4/3] shadow-lg shadow-black/40">
      @if(!empty($contactMapEmbed))
        <iframe class="w-full h-full" src="{{ $contactMapEmbed }}" style="border:0" allowfullscreen loading="lazy"></iframe>
      @endif
    </div>
  </div>
</section>
@endsection
