Instalasi

untuk melakukan instalasi, ketikkan "git clone https://github.com/Anastasya163/Kelompok11_Kitagudang.git" pada explorer Anda
setelah Anda selesai melakukan clone, buka command prompt Anda ()
jalankan perintah "composer install" (C:\xampp\htdocs\Kelompok11_Kitagudang>composer install)
kemudian buat database  baru dengan nama kitagudang dan masukkan keseluruhan syntax dari file kitagudang.sql pada phpmyadmin 
jalankan code dari proyek pada aplikasi Visual Studio Code dan tambahkan file baru dengan nama .env, copy keseluruhan code dari .env.example dan paste ke .env
pada DB_DATABASE masukkan kitagudang yang mana ini merupakan nama database yang kita buat tadi
jalankan perintah "php artisan key:generate" (C:\xampp\htdocs\Kelompok11_Kitagudang> php artisan key:generate)
jalankan perintah "php artisan migrate" (C:\xampp\htdocs\Kelompok11_Kitagudang> php artisan migrate)
jalankan perintah "php artisan serve" (C:\xampp\htdocs\Kelompok11_Kitagudang> php artisan serve)
salin alamat yang diberikan (contoh : Server running on [http://127.0.0.1:8000]), paste pada browser anda
untuk masuk ke halaman login, tambahkan dashboard pada alamat [http://127.0.0.1:8000/dashboard], dan aplikasi siap untuk digunakan

masuk dengan : username: Admin password: admin
=======
# Kelompok11_Kitagudang

