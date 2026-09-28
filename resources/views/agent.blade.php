@extends('layouts.app')

@section('title', 'Ide Agentic AI')
@section('eyebrow', 'Eksplorasi proyek')
@section('heading', $tema)
@section('intro', 'Konsep agen AI yang menjadi fokus eksplorasi dan pengembangan proyek.')

@section('content')
    <div class="grid gap-8 lg:grid-cols-[1.25fr_0.75fr]">
        <article @class([
            'rounded-xl border p-6 shadow-sm sm:p-8',
            'border-slate-700 bg-slate-900' => request()->query('mode') === 'dark',
            'border-slate-200 bg-white' => request()->query('mode') !== 'dark',
        ])>
            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-[#0C64C2]">Penjelasan tema</p>
            <p class="mt-5 text-base leading-8 {{ request()->query('mode') === 'dark' ? 'text-slate-300' : 'text-slate-600' }}">{{ $penjelasan }}</p>
        </article>
        <aside class="rounded-xl {{ request()->query('mode') === 'dark' ? 'bg-slate-800' : 'bg-[#0C64C2]' }} p-6 text-white sm:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.18em] text-blue-100">Tema lainnya</p>
            <ul class="mt-5 divide-y divide-blue-400/50">
                @foreach ($daftarTema as $temaLain)
                    <li><a href="{{ route('dashboard.agent.ide', ['tema' => $temaLain]) }}" class="block py-3 text-sm leading-6 transition hover:pl-1 hover:text-blue-100">{{ $temaLain }} &rarr;</a></li>
                @endforeach
            </ul>
        </aside>
    </div>
@endsection