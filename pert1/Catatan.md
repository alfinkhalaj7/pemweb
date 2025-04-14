## website (jam 9-12)
- mempunyai andress = facebook.com
- project di uts & uas salah satunya tentang compeny profile (prusanhannya tentang apa) kalo misal mengambil punya orang cantumkan templatenya

## html 
- menmbuat folder dan file:
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
---
- buat file didalam src yaitu div.html dan klik **html:5** dan enter setelah itu masuk localhost 

latihan isinya home.html prtofil,html

mengerjakan tugas dan membuat website sendiri terdi dari home profile