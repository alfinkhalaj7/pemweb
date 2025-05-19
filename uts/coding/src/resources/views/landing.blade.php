<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Guru</title>
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
</head>
<body>
    <header>
        <h3 style="margin-left: 2rem; margin-top: 2rem;">Sekolah Indah Terpadu</h3>
    </header>

    <section class="banner bg-tertiary position-relative overflow-hidden">
        <div class="container" style="display: flex; align-items: center; justify-content: space-between;">
            <div>
                <h1 class="mb-4">SISTEM MANAJEMEN GURU DAN MATA PELAJARAN</h1>
                <p>Unlocking Potential, Igniting Excellence</p>
                <a href="{{ url('/guru') }}" class="btn btn-success mt-4">Selanjutnya</a>
            </div>
            <div>
                <img src="{{ asset('front/assets/images/about-us.png') }}" alt="Ilustrasi" style="max-width: 400px;">
            </div>
        </div>
    </section>
</body>
</html>
