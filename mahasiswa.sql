-- buat database fakultas 
CREATE DATABASE seal_fakultas; 
 
-- buat table jurusan 
CREATE TABLE jurusan ( 
    id INTEGER PRIMARY KEY AUTO_INCREMENT, 
    kode CHAR(4) NOT NULL, 
    nama VARCHAR(50) NOT NULL 
); 
 
-- buat table mahasiswa 
CREATE TABLE mahasiswa ( 
    id INTEGER PRIMARY KEY AUTO_INCREMENT, 
    id_jurusan INTEGER NOT NULL, 
    nim CHAR(8) NOT NULL, 
    nama VARCHAR(50) NOT NULL, 
    jenis_kelamin enum ('Laki-Laki', 'perempuan') NOT NULL, 
    tempat_lahir VARCHAR(50) NOT NULL, 
    tanggal_lahir DATE NOT NULL, 
    alamat VARCHAR(255) NOT NULL, 
    FOREIGN KEY (id_jurusan) REFERENCES jurusan (id) 
); 
 
-- masukin data jurusan 
insert into jurusan (kode,nama) values ('HI','Hubungan Internasional'); 
insert into jurusan (kode,nama) values ('SJ','Sastra Jepang'); 
 
-- masukin data mahasiswa 
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
values (1,'22232000', 'Della', 'perempuan', 'Tangerang', '2002-01-01', 'Jl. Aja Dulu'); 
insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat) 
values (1,'22232001', 'Yunita', 'perempuan', 'Serang', '2000-02-03', 'Jl. Ayo'); 
 
-- update data mahasiswa 
update mahasiswa set alamat = "Jl. Kusuma 8" where id = 1; 
 
-- delete data mahasiswa 
delete from mahasiswa where id=2;