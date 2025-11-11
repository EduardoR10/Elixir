@extends('layouts.app')
@section('title', $title ?? 'Inicio')

@section('content')
<section class="relative overflow-hidden">
  <div class="absolute inset-0 bg-radial-strong"></div>
  <div class="container-std relative z-10 flex flex-col gap-8 py-24 lg:flex-row lg:items-center">
    <div class="lg:w-2/3">
      <p class="uppercase tracking-[0.3em] text-sm text-elixir-gold opacity-80">{{ $tagline ?? 'coctelería de autor' }}</p>
      <h1 class="mt-4 font-serif text-4xl leading-tight md:text-6xl">{{ $headline ?? 'Diseñamos experiencias líquidas memorables' }}</h1>
      <p class="mt-6 max-w-2xl text-lg text-white/75">{{ $subheadline ?? 'Barras móviles, mixología de autor y maridajes pensados para cautivar a cada invitado. Creamos ambientes sofisticados con un sello dorado.' }}</p>
      <div class="mt-8 flex flex-wrap gap-3">
        <a href="{{ $ctaPrimaryUrl ?? url('/agenda') }}" class="btn-gold">{{ $ctaPrimaryLabel ?? 'Agenda una cita' }}</a>
        <a href="{{ $ctaSecondaryUrl ?? url('/menu') }}" class="btn-ghost">{{ $ctaSecondaryLabel ?? 'Ver menú' }}</a>
      </div>
    </div>
    <div class="lg:w-1/3">
      <div class="rounded-2xl border border-white/10 bg-white/5 p-6 text-sm text-white/70 shadow-lg shadow-black/40 backdrop-blur">
        <h2 class="text-lg font-semibold text-white">{{ $infoTitle ?? 'Próximo evento destacado' }}</h2>
        <p class="mt-3">{{ $infoCopy ?? 'Reserva nuestra barra boutique para bodas, celebraciones privadas o eventos corporativos. Diseñamos cada detalle con lujo dorado.' }}</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container-std">
    <h2 class="title text-center">{{ $featuresTitle ?? 'Por qué elegir Elixir' }}</h2>
    <div class="gold-divider mx-auto mt-3"></div>
    <p class="subtitle mx-auto mt-4 max-w-3xl text-center">{{ $featuresSubtitle ?? 'Un servicio premium que combina técnica, creatividad y hospitalidad de alto nivel.' }}</p>

    <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
      @foreach(($features ?? [
        ['title' => 'Diseño sensorial', 'desc' => 'Cocteles elaborados con ingredientes seleccionados y presentación impecable.'],
        ['title' => 'Equipo experto', 'desc' => 'Mixólogos profesionales listos para asesorar y sorprender a tus invitados.'],
        ['title' => 'Experiencia mobile', 'desc' => 'Montajes elegantes que se adaptan a cualquier espacio interior o exterior.'],
      ]) as $feature)
        <article class="card card-hover h-full">
          <div class="flex h-full flex-col gap-3 p-6">
            <span class="text-elixir-gold">★</span>
            <h3 class="text-lg font-semibold text-white">{{ $feature['title'] ?? '' }}</h3>
            <p class="text-sm text-white/70">{{ $feature['desc'] ?? '' }}</p>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>

<section class="section">
  <div class="container-std flex flex-col gap-10 lg:flex-row lg:items-center">
    <div class="lg:w-1/2">
      <h2 class="title">{{ $aboutTitle ?? 'Un sorbo de lujo contemporáneo' }}</h2>
      <div class="gold-divider mt-3"></div>
      <p class="mt-5 text-white/80">{{ $aboutCopy ?? 'Nuestra barra móvil transforma cualquier ocasión en un ritual sofisticado. Seleccionamos destilados premium, diseñamos menús personalizados y ofrecemos un servicio impecable.' }}</p>
      <div class="mt-8 flex flex-wrap gap-3">
        <a href="{{ $aboutCtaUrl ?? url('/agenda') }}" class="btn-gold">{{ $aboutCtaLabel ?? 'Diseñar experiencia' }}</a>
        <a href="{{ $aboutSecondaryUrl ?? '#contact' }}" class="btn-ghost">{{ $aboutSecondaryLabel ?? 'Solicitar cotización' }}</a>
      </div>
    </div>
    <div class="lg:w-1/2">
      <div class="aspect-[4/3] overflow-hidden rounded-2xl border border-white/10 bg-gradient-to-br from-white/10 via-transparent to-black/40 shadow-lg shadow-black/40">
        @if(!empty($aboutImage))
          <img src="{{ asset($aboutImage) }}" alt="{{ $aboutTitle ?? 'Elixir' }}" class="h-full w-full object-cover opacity-80 mix-blend-luminosity">
        @endif
      </div>
    </div>
  </div>
</section>

<section id="contact" class="section">
  <div class="container-std text-center">
    <h2 class="title">{{ $contactTitle ?? 'Conversemos sobre tu evento' }}</h2>
    <div class="gold-divider mx-auto mt-3"></div>
    <p class="subtitle mx-auto mt-4 max-w-2xl">{{ $contactCopy ?? 'Cuéntanos la fecha, el estilo y la cantidad de invitados. Nuestro equipo se encargará del resto.' }}</p>

    <div class="mt-10 flex flex-wrap justify-center gap-4 text-white/80">
      <span>{{ $contactPhone ?? '445 144 5285' }}</span>
      <span class="hidden text-white/30 md:inline">•</span>
      <span>{{ $contactEmail ?? 'elixircontacto@gmail.com' }}</span>
    </div>

    <a href="{{ $contactCtaUrl ?? url('/agenda') }}" class="btn-gold mt-8 inline-flex">{{ $contactCtaLabel ?? 'Reservar ahora' }}</a>
  </div>
</section>
@endsection
