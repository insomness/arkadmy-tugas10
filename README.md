## Instalasi
```sh
$ git clone https://github.com/insomness/arkadmy-tugas10.git
$ cd arkadmy-tugas10
$ composer install
Jika menggunakan vscode
$ code .
```

**Rename .env-example menjadi .env**
```sh
$ php artisan key:generate
```
**Setup Database**
Buka file .env dan sesuaikan db values dengan db yang anda buat
```sh
$ php artisan migrate
```

**Hell Yeah!**
