<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Dashboard Mahasiswa') | ITS</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white text-slate-900 antialiased">
	<header class="border-b border-slate-200 bg-white">
		<div class="mx-auto flex max-w-6xl flex-col gap-4 px-6 py-5 sm:flex-row sm:items-center sm:justify-between lg:px-8">
			<a href="{{ route('home') }}" class="flex items-center gap-3 text-slate-900">
				<span class="flex h-10 w-10 items-center justify-center rounded-lg bg-[#0C64C2] text-sm font-semibold text-white">ITS</span>
				<span>
					<span class="block text-sm font-semibold tracking-wide">Portofolio Mahasiswa</span>
					<span class="block text-xs text-slate-500">Institut Teknologi Sepuluh Nopember</span>
				</span>
			</a>
			<nav class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm font-medium text-slate-600" aria-label="Navigasi utama">
				<a href="{{ route('home') }}" class="transition hover:text-[#0C64C2] {{ request()->routeIs('home') ? 'text-[#0C64C2]' : '' }}">Beranda</a>
				<a href="{{ route('dashboard.mahasiswa.detail', ['nrp' => '5025241114']) }}" class="transition hover:text-[#0C64C2] {{ request()->routeIs('dashboard.mahasiswa.*') ? 'text-[#0C64C2]' : '' }}">Profil</a>
				<a href="{{ route('dashboard.agent.ide') }}" class="transition hover:text-[#0C64C2] {{ request()->routeIs('dashboard.agent.*') ? 'text-[#0C64C2]' : '' }}">Agentic AI</a>
				<a href="{{ route('dashboard.hitung-ipk') }}" class="transition hover:text-[#0C64C2] {{ request()->routeIs('dashboard.hitung-ipk') ? 'text-[#0C64C2]' : '' }}">Hitung IPK</a>
			</nav>
		</div>
	</header>

	<main class="mx-auto max-w-6xl px-6 py-12 lg:px-8 lg:py-16">
		<div class="mb-10 max-w-2xl">
			<p class="mb-3 text-sm font-semibold uppercase tracking-[0.18em] text-[#0C64C2]">@yield('eyebrow', 'Dashboard mahasiswa')</p>
			<h1 class="text-3xl font-semibold tracking-tight text-slate-950 sm:text-4xl">@yield('heading')</h1>
			@hasSection('intro')
				<p class="mt-4 text-base leading-7 text-slate-600">@yield('intro')</p>
			@endif
		</div>
		@yield('content')
	</main>

	<footer class="border-t border-slate-200 bg-slate-50">
		<div class="mx-auto max-w-6xl px-6 py-5 text-xs text-slate-500 lg:px-8">PBKK &middot; Institut Teknologi Sepuluh Nopember</div>
	</footer>
</body>
</html>
