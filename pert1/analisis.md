## *Analisis 5W 1H dalam Proses Setup Docker + Nginx + HTML*  

### *1. What (Apa yang dilakukan?)*   
- Membuat folder dan file proyek (analisis.md, catatan.md, .env, docker-compose.yml, index.html).  
- Menjalankan Docker Compose untuk membangun container.  
- Menghapus folder src dan memperbarui volumes di docker-compose.yml.  
- Membuat kembali src dan menambahkan index.html.  
- Memodifikasi nginx.conf agar sesuai dengan kebutuhan server.  
- Membuat file div.html dengan struktur dasar HTML (html:5).  
- Mengakses proyek di localhost.

### *2. Who (Siapa yang melakukannya?)*  
- Developer atau siapa pun yang ingin meng-host website statis menggunakan Docker dan Nginx.  
- Tim DevOps yang menangani deployment aplikasi berbasis Docker.  

### *3. Where (Di mana dilakukan?)*  
- Dijalankan di lingkungan pengembangan lokal** menggunakan Docker.  
- Dapat diterapkan di server produksi untuk hosting website berbasis Nginx.  

### *4. When (Kapan dilakukan?)*  
- Saat mau membangun/menguji website lokal sebelum deployment ke server.  
- Ketika membutuhkan lingkungan terisolasi tanpa menginstal Nginx secara manual di sistem host.  

### *5. Why (Mengapa dilakukan?)*  
- Docker + Nginx memungkinkan pengelolaan proyek dengan mudah tanpa menginstal server secara langsung.  
- Membantu deployment website statis lebih cepat dan efisien.   

### *6. How (Bagaimana caranya?)*  
1. **Membuat folder dan file konfigurasi:**  
  - analisis.md
- catatan.md
- .env
- docker-compose.yml
- index.html
- setelah itu ke terminal dan ketik docker compose up -d --build
- setelah itu src yg dibuat kita hapus dan file di docker-compose.yml dibagian volumes ubah seperti ini **- ./  src:/usr/share/nginx/html**
- dan src yang di dalam file coding kita tambahkan file index.html setelah itu klik tanda seru **(!)** dan klik enter.
- yang di file nginx.conf ubah seperti di bawah ini:
---
server {
    listen 80;
    server_name localhost;

    root /usr/share/nginx/html;
    index index.html index.htm;

    location / {
        try_file $uri $uri/ =404;
    }
}
- buat file didalam src yaitu div.html dan klik **html:5** dan enter setelah itu masuk localhost 

5. **Mengakses hasilnya di browser melalui localhost**.  
6. **Aplikasi yang Digunakan:**  
    - **Visual Studio Code (VS Code)** → Untuk menulis dan mengedit kode.  
    - **Ubuntu** → Sebagai sistem operasi untuk menjalankan proyek.  
    - **Browser (Localhost)** → Untuk mengakses hasil proyek.  
    - **Docker** → Untuk menjalankan container aplikasi.  

---

## *SWOT dalam Proses Setup Docker + Nginx + HTML*  

### *1. Strengths (Kelebihan)*  
**Portabilitas:**  
- Docker membantu proyek ini berjalan di sistem mana pun tanpa perlu setup ulang.  
**Efisiensi:**  
- Nginx dikenal sebagai web server yang cepat dan ringan.  
**Manajemen Mudah:**  
- Dengan docker-compose, semua konfigurasi bisa dijalankan hanya dengan satu perintah.  
**Keamanan:**  
- Lingkungan dalam container, sehingga tidak memengaruhi sistem utama.  

### *2. Weaknesses (Kelemahan)*  
**Kurva Pembelajaran Docker:**  
- Mungkin tidak semua developer terbiasa dengan Docker dan docker-compose tetapi tidak tahu.  

**Konfigurasi Manual:**  
- Harus memahami dulu nginx.conf untuk mengatur server dengan benar.  

### *3. Opportunities (Peluang)*  
**Dapat digunakan untuk Hosting Website Statis:**  
- Konfigurasi ini mungkin dapat diterapkan untuk hosting website sederhana dengan Nginx.  

**Dapat dikembangkan lebih lanjut:** 
- Mungkin bisa ditingkatkan dengan tambahan backend (Node.js, Python, PHP, dll.).  

**Cocok untuk Deployment di Cloud & pemula bahis Mahasiswa:**  
- Bisa diterapkan di *AWS, DigitalOcean, atau server cloud lainnya*.  

### *4. Threats (Ancaman)*  
**Ketergantungan pada Docker:**  
- Jika Docker tidak tersedia, proyek pasti tidak bisa dijalankan.  

**Konfigurasi Salah Bisa Menyebabkan Masalah:**
- Kesalahan dalam nginx.conf atau docker-compose.yml bisa menyebabkan server tidak berjalan.  

