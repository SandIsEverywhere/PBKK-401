@extends('layouts.app')

@section('title', 'Hitung IPK')
@section('eyebrow', 'Performa akademik')
@section('heading', 'Rata-rata IP semester')
@section('intro', 'Ringkasan perhitungan dari dua semester terakhir.')

@section('content')
	<div class="grid gap-4 sm:grid-cols-3">
		<div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
			<p class="text-sm text-slate-500">IP semester 1</p>
			<p class="mt-3 text-3xl font-semibold text-slate-950">{{ $ip1 }}</p>
		</div>
		<div class="rounded-xl border border-slate-200 bg-white p-6 shadow-sm">
			<p class="text-sm text-slate-500">IP semester 2</p>
			<p class="mt-3 text-3xl font-semibold text-slate-950">{{ $ip2 }}</p>
		</div>
		<div class="rounded-xl border-2 border-[#0C64C2] bg-blue-50 p-6 shadow-sm">
			<p class="text-sm font-medium text-[#0C64C2]">Rata-rata IPK</p>
			<p class="mt-3 text-3xl font-semibold text-[#0C64C2]">{{ $ratarata }}</p>
		</div>
	</div>
@endsection