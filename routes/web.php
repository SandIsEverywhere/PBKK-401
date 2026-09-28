<?php

use Illuminate\Support\Facades\Route;

$homePage = function () {
    return view('home', [
        'userName' => request()->query('user', 'Hasan'),
    ]);
};

$agentPage = function ($tema = 'General Assistant Agent') {
    $penjelasanTema = [
        'System Log Anomaly Detection Agent' => 'Agentic AI berbasis Laravel & NativePHP yang memantau system log secara otomatis, mendeteksi pola anomali, menentukan tingkat keparahan, hingga memberi rekomendasi troubleshooting — mengikuti siklus perception, reasoning, decision making, action, evaluation, dan re-planning.',
        'General Assistant Agent' => 'Agen AI serba guna untuk membantu tugas harian secara umum.',
        'Coding Agent' => 'Agen AI yang membantu menulis, membaca, dan memperbaiki kode secara otomatis.',
        'Research Agent' => 'Agen AI yang mencari, merangkum, dan menyusun informasi dari berbagai sumber.',
    ];

    return view('agent', [
        'tema' => $tema,
        'penjelasan' => $penjelasanTema[$tema] ?? 'Tema ini belum memiliki penjelasan khusus.',
        'daftarTema' => array_keys($penjelasanTema),
    ]);
};

Route::get('/', $homePage)->name('home');
Route::get('/beranda', $homePage)->name('beranda');

Route::prefix('dashboard')->name('dashboard.')->group(function () use ($agentPage) {

    Route::get('/mahasiswa/{nrp}', function ($nrp) {

        $mahasiswa = [
            '5025241114' => [
                'nama' => 'Hasan',
                'jurusan' => 'Teknik Informatika',
                'angkatan' => '2024',
                'ipk' => '3.5',
                'asal' => 'Salatiga',
                'hobi' => 'Main game',
            ],
        ];

        if (! isset($mahasiswa[$nrp])) {
            abort(404, 'Data mahasiswa dengan NRP tersebut tidak ditemukan.');
        }

        return view('mahasiswa', [
            'nrp' => $nrp,
            'data' => $mahasiswa[$nrp],
        ]);
    })->name('mahasiswa.detail')
        ->where('nrp', '^[0-9]{10}$');

    Route::get('/agent/{tema?}', $agentPage)->name('agent.ide');
});

Route::get('/ide-agent', $agentPage)->name('agent.dark');

Route::fallback(function () {
    abort(404);
});
