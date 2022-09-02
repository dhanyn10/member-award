# Member AWARDS

## Install
- sebelumnya, pastikan sudah menginstall `docker` dan `docker compose` di komputer
- install dan jalankan aplikasi ini dengan command `docker-compose up -d`
- tunggu hingga 10 detik atau lebih, lalu jalankan fungsi migration dengan command
  ```
  docker-exec member-web php artisan migrate
  ```
- berikutnya, jalankan db seeding untuk mengisi sampel data user dengan command
  ```
  docker exec member-web php artisan db:seed
  ```

## Data
berikut ini data yang telah disediakan:
```
user biasa  : users@award.com
user admin  : admin@award.com
```
### Tambah Data
#### Manual
- login menggunakan `user admin`
- klik menu sisi kiri atas lalu pilih menu **add**
- masukkan data yang diinginkan lalu tekan tombol **submit**
#### Otomatis
- login menggunakan `user admin`
- klik menu sisi kiri atas lalu pilih menu **add**
- lalu tekan tombol **Tambah Otomatis** *  
*data yang otomatis ditambahkan berjumlah 10 data