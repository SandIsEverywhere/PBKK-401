<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('dashboard')->name('dashboard.')->group(function () {

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

        if (!isset($mahasiswa[$nrp])) {
            abort(404, 'Data mahasiswa dengan NRP tersebut tidak ditemukan.');
        }

        return view('mahasiswa', [
            'nrp' => $nrp,
            'data' => $mahasiswa[$nrp],
        ]);
    })->name('mahasiswa.detail')
      ->where('nrp', '^[0-9]{10}$');

    Route::get('/agent/{tema?}', function ($tema = 'General Assistant Agent') {

        $penjelasanTema = [
            'System Log Anomaly Detection Agent' => 'Agentic AI berbasis Laravel & NativePHP yang memantau system log secara otomatis, mendeteksi pola anomali, menentukan tingkat keparahan, hingga memberi rekomendasi troubleshooting — mengikuti siklus perception, reasoning, decision making, action, evaluation, dan re-planning.',
            'General Assistant Agent' => 'Agen AI serba guna untuk membantu tugas harian secara umum.',
            'Coding Agent' => 'Agen AI yang membantu menulis, membaca, dan memperbaiki kode secara otomatis.',
            'Research Agent' => 'Agen AI yang mencari, merangkum, dan menyusun informasi dari berbagai sumber.',
        ];

        $penjelasan = $penjelasanTema[$tema] ?? 'Tema ini belum memiliki penjelasan khusus.';

        return view('agent', [
            'tema' => $tema,
            'penjelasan' => $penjelasan,
            'daftarTema' => array_keys($penjelasanTema),
        ]);
    })->name('agent.ide');

    Route::get('/hitung-ipk/{ip1?}/{ip2?}', function ($ip1 = '3.00', $ip2 = '3.00') {

        $ip1 = (float) $ip1;
        $ip2 = (float) $ip2;

        if ($ip1 < 0 || $ip1 > 4 || $ip2 < 0 || $ip2 > 4) {
            abort(400, 'Nilai IPK harus berada dalam rentang 0.00 hingga 4.00.');
        }

        $ratarata = ($ip1 + $ip2) / 2;

        return view('hitung-ipk', [
            'ip1' => number_format($ip1, 2),
            'ip2' => number_format($ip2, 2),
            'ratarata' => number_format($ratarata, 2),
        ]);
    })->name('hitung-ipk');

});

Route::fallback(function () {
    abort(404);
});