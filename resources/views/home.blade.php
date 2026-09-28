@extends('layouts.app')

@section('title', 'Beranda')
@section('eyebrow', 'Selamat datang')
@section('heading', 'Halo, saya Hasan.')
@section('intro', 'Mahasiswa Teknik Informatika yang sedang mengeksplorasi profil, perjalanan akademik, dan ide proyek Agentic AI di semester ini.')

@section('content')
	<div class="grid gap-5 sm:grid-cols-2">
		<a href="{{ route('dashboard.mahasiswa.detail', ['nrp' => '5025241114']) }}" class="group rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-[#0C64C2] hover:shadow-md">
			<span class="mb-10 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-[#0C64C2]">01</span>
			<h2 class="text-lg font-semibold text-slate-950">Lihat profil</h2>
			<p class="mt-2 text-sm leading-6 text-slate-600">Kenali latar belakang, minat, dan informasi akademik saya.</p>
			<span class="mt-5 inline-block text-sm font-semibold text-[#0C64C2] group-hover:underline">Buka profil &rarr;</span>
		</a>
		<a href="{{ route('dashboard.agent.ide') }}" class="group rounded-xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-0.5 hover:border-[#0C64C2] hover:shadow-md">
			<span class="mb-10 flex h-10 w-10 items-center justify-center rounded-lg bg-blue-50 text-[#0C64C2]">02</span>
			<h2 class="text-lg font-semibold text-slate-950">Ide proyek Agentic AI</h2>
			<p class="mt-2 text-sm leading-6 text-slate-600">Jelajahi tema dan konsep agen AI yang sedang saya pelajari.</p>
			<span class="mt-5 inline-block text-sm font-semibold text-[#0C64C2] group-hover:underline">Jelajahi ide &rarr;</span>
		</a>
	</div>
@endsection