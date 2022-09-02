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