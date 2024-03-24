  <b>POINT UTAMA</b>
---
> #### CARA KERJA PHP COMPOSER
> - Definisi Dependensi: Anda mendefinisikan dependensi proyek dalam file `composer.json`.
> - Perintah Composer: Gunakan perintah Composer seperti `composer install` untuk mengunduh dan menginstal paket-paket PHP yang didefinisikan.
> - Resolusi Dependensi: Composer mengunduh paket-paket dari repositori, menginstalnya, dan menghasilkan autoloader untuk memuat kelas-kelas secara otomatis.
> - Pembaruan: Anda dapat memperbarui paket-paket dengan perintah `composer update`, yang mengunduh versi terbaru dari paket-paket tersebut.
---
> #### PHP COMPOSER
> - Dependensi manajemen membantu mengelola dan mengunduh library yang diperlukan secara otomatis, menghindari masalah kesesuaian versi.
> - Composer adalah alat manajemen dependensi yang paling populer untuk PHP saat ini, terinspirasi oleh NPM dan Bundler.
> - Instalasi Composer cukup mudah, dan setelah terpasang, dapat dengan mudah mengelola dependensi proyek PHP.
>
> Berikut kode untuk mengecek versi composer : `composer --version`
>
> hasil :
>
> ![composer - v](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/42f90d9d-400b-44bc-a087-be439622c1ac)
>
> #### PROJECT COMPOSER
> - Untuk Membuat proyek menggunakan Composer cukup sederhana dengan membuat file ```composer.json```, bisa dilakukan secara manual atau otomatis dengan perintah ```composer init```.
> - Composer memungkinkan pengguna untuk menambahkan lisensi dan metadata ke proyek dengan mudah.
> - Composer akan membuat folder vendor dan file ```composer.lock``` secara otomatis saat menginstal dependensi.
> - Menghapus file ```composer.json```, ```composer.lock```, dan folder ```vendor``` adalah cara mudah untuk menghapus proyek Composer.
> - Composer menyediakan autoload untuk memuat otomatis semua class yang ada di direktori vendor.
>
> Berikut kode ketika melakukan composer init :
>
>![composer init](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/35813d9b-730d-4421-a22d-cc868b1609a6)
>
> Berikut file composer.json :
>
> ![composer json](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/417d75dd-7343-4d05-8798-559d4b51c054)
>
> berikut kode ketika melakukan composer update :
>
> ![composer update](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/3af738c6-684e-4531-9a2d-4f943063c839)
>
> ![composer lock](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/675009e7-c127-4b43-8273-c506632238f6)
---
> #### AUTOLOAD
> - Untuk menggunakan autoload, proyek harus mengikuti standar, seperti PSR-4, dan menambahkan konfigurasi autoload di file ```composer.json```.
>
> Berikut kode untuk membuat autoload :
>
> ![autoload](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/692ffdb2-40f2-4a7b-9f8c-977bc67a1a67)
---
> #### COMPOSER DUMP-AUTOLOAD
> - Perintah composer dump-autoload digunakan untuk memperbarui file ```autoload.php``` setelah mengubah konfigurasi autoload.
> - Named space dalam Composer harus sama dengan nama direktori dan nama file yang digunakan.
> - Fitur autoload di Composer memungkinkan penggunaan library secara otomatis tanpa perlu manual include file-file PHP.
>
> Berikut kode class people :
>
> ![class people](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/226737ee-205c-46ee-a5b9-64501960b1f2)
>
> Berikut kode untuk menggunakan autoload :
>
> ![people](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/dfe7a76b-5387-4ea9-943b-798c27060b07)
---
> #### REPOSITORY
> - Repositori Packagist adalah tempat penyimpanan library, dependensi, dan framework berbasis Composer secara default.
---
> #### MENAMBAH DEPENDENCY
> - Disarankan untuk membagi aplikasi menjadi bagian kecil dan menyimpan library dependensinya di repositori untuk kemudahan pengelolaan.
> - Menentukan versi library yang akan digunakan dalam file composer.json menggunakan Semantic Versioning.
> - Pastikan untuk composer update setiap menambah library dan melakukan generate autoload : ```composer dump-autoload```
>
> Berikut kode menambah library monolog :
>
> ![monolog](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/ec4e57ca-3574-40d2-8959-b99524122bc5)
>
> Hasil composer update :
>
> ![hasil composer](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/4e034d8a-237f-49e5-ad7f-fd04b7b2bad7)
>
> Berikut kode mencoba monolog :
>
> ![logging](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/43a40512-a176-41fd-b077-1561ec3c6086)
---
> #### LIBRARY
> - Composer tidak hanya mendukung pembuatan proyek, tetapi juga pembuatan library yang dapat digunakan dalam proyek orang lain.
> - Proses membuat library dengan Composer mirip dengan membuat proyek, namun dengan perbedaan pada pemilihan jenis project saat inisialisasi.
> - Setelah membuat library, Anda dapat menentukan dependency dan versi PHP yang dibutuhkan di file ```composer.json```.
> - Autoload dan namespace perlu ditentukan dalam library untuk memastikan interoperabilitas yang baik.
> - Setelah membuat library, Anda dapat mengunggahnya ke repository Git agar dapat digunakan oleh orang lain.
> - Penggunaan library dari repository dapat diintegrasikan dengan Composer dengan menambahkannya sebagai repository di file ```composer.json```.
> - Proses upgrade versi library cukup mudah, hanya perlu mengubah kode, membuat rilis baru, dan melakukan update versi di project yang menggunakannya.
>
> 
> Berikut kode class customer :
>
> ![customer](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/c31cfb6a-f0ec-42f9-b620-2911f0484225)
>
> Berikut kode menambah dependency :
>
>![library](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/a73295bd-0888-447b-af9b-65ef832a0f21)
>
> Berikut kode hello library :
>
>![HelloLibrary](https://github.com/Usmanganteng/Belajar-php-composer-library/assets/145539295/72a45573-f79c-4fa9-838a-d6cd9abfc2be)
>
---
> #### PACKAGIST
> - Menggunakan Packagist untuk submit library memudahkan manajemen dependensi, tidak perlu tambahkan repository manual di ```composer.json```.
> - Keuntungannya adalah kita tidak perlu menambahkan repository git di composer.json satu per satu
> - bisa sync secara otomatis ketika ada release versi baru
---
<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

---

> - Jika terkena rate limited dari github bagaimana cara menghilangkannya selain mengganti wifi/ip

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

> - Dengan composer kita dapat mengelola dan mengunduh library yang diperlukan secara otomatis, menghindari masalah kesesuaian versi

---
