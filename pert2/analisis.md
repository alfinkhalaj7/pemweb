
# Analisis Proyek Web Portfolio (Docker + Nginx + HTML)

## ✅ Analisis 5W + 1H

| Unsur | Penjelasan |
|-------|------------|
| **What** (Apa) | Proyek web statis personal berbasis HTML, Bootstrap, dan Nginx, dikemas dalam Docker. Berisi profil, deskripsi diri, dan link media sosial. |
| **Who** (Siapa) | Dibuat oleh **Alfin Khalaj Syahruwardi** sebagai portofolio pribadi untuk menunjukkan identitas, skill, dan keterampilan web. |
| **When** (Kapan) | Tidak disebutkan tanggal pasti pembuatan, namun konfigurasi dan desainnya mencerminkan praktik modern tahun 2024–2025. |
| **Where** (Dimana) | Dijalankan di environment Docker menggunakan image `nginx`, dengan akses lokal via port 80 (`localhost`). |
| **Why** (Mengapa) | Tujuan utamanya adalah menampilkan portofolio pribadi secara profesional menggunakan teknologi web dan Docker. |
| **How** (Bagaimana) | Menggunakan HTML dan CSS yang dikemas di dalam `src`, lalu disajikan oleh `nginx` melalui konfigurasi khusus (`nginx.conf`) dan Docker Compose untuk kemudahan deployment. |

---

## ✅ Analisis SWOT

| Aspek | Penjelasan |
|-------|------------|
| **Strengths (Kekuatan)** | 
- Struktur file rapi dan modular (nginx config, src, assets).  
- Menggunakan **Bootstrap** dan **Font Awesome** untuk tampilan modern.  
- Sudah siap **Dockerized**, memudahkan deployment di berbagai environment.  
- Profil pribadi informatif dan menarik secara visual. |
| **Weaknesses (Kelemahan)** |
- Konten "ABOUT ME" masih placeholder (lorem ipsum).  
- Belum ada validasi SEO/meta yang optimal di HTML.  
- Gambar profil (`../assets/jojo.jpg`) mungkin error jika tidak ada file di jalur tersebut. |
| **Opportunities (Peluang)** |
- Bisa dikembangkan jadi portofolio online publik dengan domain pribadi.  
- Dapat ditambahkan backend/API untuk dinamisasi konten.  
- Bisa dijadikan studi kasus tugas Pemrograman Web / DevOps. |
| **Threats (Ancaman)** |
- Jika konfigurasi Docker atau volume salah, web tidak akan tampil.  
- Keamanan nginx default belum diperkuat (misalnya rate limiting, headers, dll).  
- Tidak ada fallback halaman 404 custom, pengalaman pengguna bisa terganggu. |

---

> Disusun oleh: **Alfin Khalaj Syahruwardi**
