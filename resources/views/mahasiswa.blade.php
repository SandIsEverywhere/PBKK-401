@extends('layouts.app')

@section('title', 'Profil Mahasiswa')
@section('eyebrow', 'Profil mahasiswa')
@section('heading', $data['nama'])
@section('intro', $data['jurusan'] . ' Angkatan ' . $data['angkatan'])

@section('content')
    <div class="overflow-hidden rounded-xl border border-slate-200 bg-white shadow-sm">
        <dl class="divide-y divide-slate-200">
            @foreach ([
                'Nama' => $data['nama'],
                'Jurusan' => $data['jurusan'],
                'Angkatan' => $data['angkatan'],
                'IPK' => $data['ipk'],
                'Asal' => $data['asal'],
                'Hobi' => $data['hobi'],
            ] as $label => $value)
                <div class="grid gap-1 px-6 py-5 sm:grid-cols-[180px_1fr] sm:gap-6">
                    <dt class="text-sm font-medium text-slate-500">{{ $label }}</dt>
                    <dd class="text-sm font-semibold text-slate-900">{{ $value }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
@endsection
