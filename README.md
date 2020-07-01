# List Tampilan
### Home
- [ ] Agenda
### Profil
- [x] Sejarah
- [x] Sambutan Kaprodi
- [x] Official Document
### Data Personil
- [x] Detail Dosen
- [ ] Detail Staff/Tenaga Pendidik
- ### Akademik
- [x] Jadwal Skripsi
- ### Mahasiswa
- [x] Organisasi Mahasiswa
- [x] Prestasi Mahasiswa
- [x] Karier Mahasiswa
- [x] Alumni
- [x] Informasi Wisuda
- ### Berita
- [x] Event
- [x] Berita Dosen
- [x] Berita Mahasiswa
- [x] Informasi Akademik
- [x] Informasi Grafik
### Kontak
- [ ] Perbaikan Kontak


# List Fitur Ongoing
- [x] Tambahan Function Detail Data Dosen
- [x] Query untuk Get Data Dosen by ID
- [x] Pisahkan role Berita Berdasarkan Mahasiswa atau Dosen
- [x] Tambahkan table agenda event
- User Login sebagai mahasiswa atau dosen.
- CRUD Berita by Mahasiswa/Dosen.
- [x] Tampilan List Berita Mahasiswa dan Dosen
- [x] Tampilan List Event [Masih Sementara]
- [x] Tampilan Detail Event
- [x] Penambahan input file (pdf atau gambar) pada event
----
sisfo:password
dosen1:123456
mahasiswa1:123456
--------
->Ketika data menunya terhapus, maka akses menunya juga ikut terhapus. (add trigger)
```
CREATE TRIGGER `delete_rolemenus` AFTER DELETE ON `menus` FOR EACH ROW DELETE FROM role_menus WHERE menu_id = old.id
```

```
CREATE TRIGGER `delete_rolemenus` AFTER DELETE ON `roles` FOR EACH ROW DELETE FROM role_menus WHERE role_id = old.id
```
->Dosen pada Perminatan lebih dari satu.
->Validasi+Testing
