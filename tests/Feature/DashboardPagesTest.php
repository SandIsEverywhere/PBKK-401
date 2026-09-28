<?php

test('beranda welcomes the user from the query string', function () {
    $response = $this->get('/beranda?user=Andi');

    $response->assertOk()
        ->assertSee('Halo, Andi.')
        ->assertSee('Selamat datang, Andi.')
        ->assertSee('<title>Beranda | ITS</title>', false);
});

test('agent page uses the dark theme when requested', function () {
    $response = $this->get('/ide-agent?mode=dark');

    $response->assertOk()
        ->assertSee('bg-slate-950 text-slate-100', false)
        ->assertSee('border-slate-700 bg-slate-900', false)
        ->assertSee('<title>Ide Agentic AI | ITS</title>', false);
});

test('profile page renders both info cards and flashed form status', function () {
    $response = $this->withSession(['status' => 'Profil berhasil diperbarui'])
        ->get('/dashboard/mahasiswa/5025241114');

    $response->assertOk()
        ->assertSee('Informasi pribadi')
        ->assertSee('Informasi akademik')
        ->assertSee('Profil berhasil diperbarui');
});
