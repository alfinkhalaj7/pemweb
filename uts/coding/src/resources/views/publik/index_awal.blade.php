<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Guru</title>
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
</head>
<body>
    <header style="padding: 24px; display: flex; align-items: center;">
        <h2 style="font-weight: bold; font-size: 20px; margin-right: 24px;">SEKOLAH INDAH TERPADU</h2>
    </header>
    
    <section class="banner bg-tertiary position-relative overflow-hidden">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="block text-center text-lg-start pe-0 pe-xl-5">
              <h1 class="text-capitalize mb-4">SISTEM MANAJEMEN GURU DAN MATA PELAJARAN</h1>
              <p class="mb-4">Klik Selanjutnya untuk melihat Data Guru...</p>
              <a type="button" class="btn btn-primary" href="{{ url('/guru') }}">Selanjutnya</a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ps-lg-5 text-center">
                <img src="{{ asset('front/assets/images/about-us.png') }}"
                alt="banner image"
                style="width: 400px; height: auto;"
                decoding="async"
                loading="lazy">
                
            </div>
          </div>
        </div>
      </div>
    </section>
    

</body>
</html>
