@extends('layouts.app')

@section('title', 'Profil Mahasiswa')
@section('eyebrow', 'Profil mahasiswa')
@section('heading', $data['nama'])
@section('intro', $data['jurusan'] . ' Angkatan ' . $data['angkatan'])

@section('content')
    <div class="grid gap-5 md:grid-cols-2">
        <x-info-card title="Informasi pribadi" description="Data dasar mahasiswa.">
            <dl class="divide-y {{ request()->query('mode') === 'dark' ? 'divide-slate-700' : 'divide-slate-200' }}">
                @foreach (['Nama' => $data['nama'], 'Asal' => $data['asal'], 'Hobi' => $data['hobi']] as $label => $value)
                    <div class="grid gap-1 py-4 sm:grid-cols-[100px_1fr] sm:gap-4">
                        <dt class="text-sm {{ request()->query('mode') === 'dark' ? 'text-slate-400' : 'text-slate-500' }}">{{ $label }}</dt>
                        <dd class="text-sm font-semibold {{ request()->query('mode') === 'dark' ? 'text-slate-100' : 'text-slate-900' }}">{{ $value }}</dd>
                    </div>
                @endforeach
            </dl>
        </x-info-card>
        <x-info-card title="Informasi akademik" description="Program studi dan capaian akademik.">
            <dl class="divide-y {{ request()->query('mode') === 'dark' ? 'divide-slate-700' : 'divide-slate-200' }}">
                @foreach (['Jurusan' => $data['jurusan'], 'Angkatan' => $data['angkatan'], 'IPK' => $data['ipk']] as $label => $value)
                    <div class="grid gap-1 py-4 sm:grid-cols-[100px_1fr] sm:gap-4">
                        <dt class="text-sm {{ request()->query('mode') === 'dark' ? 'text-slate-400' : 'text-slate-500' }}">{{ $label }}</dt>
                        <dd class="text-sm font-semibold {{ request()->query('mode') === 'dark' ? 'text-slate-100' : 'text-slate-900' }}">{{ $value }}</dd>
                    </div>
                @endforeach
            </dl>
        </x-info-card>
    </div>
@endsection
