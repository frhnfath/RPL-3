# BFore
BFore adalah web forum untuk memudahkan mahasiswa IPB University dalam mencari informasi tertentu, khususnya minat, bakat, dan informasi terbaru lainnya yang diharapkan dapat menambah wawasan, meningkatkan minat dan bakat mahasiswa sesuai dengan yang ingin diketahui oleh mahasiswa tersebut.Hal itu dikarenakan kunci sukses mahasiswa adalah pengetahuan yang luas dan terbuka. Aplikasi ini akan menyediakan fitur login untuk user dan admin. Kemudian aplikasi ini juga menggunakan fitur search, diharapkan user dapat lebih mudah melakukan pencarian pertanyaan dan jawaban yang tersedia pada aplikasi ini.Fitur-fitur lainnya yang ada di BFore adalah fitur untuk comment, upvote, dan downvote.

# Laporan Akhir Projek Rekayasa Perangkat Lunak (KOM331)
* Paralel  : P2
* Kelompok : 3

### Asisten Praktikum
  | Nama                        | NIM       |
  | ----------------------------| --------- |
  | Levina Siatono              | G64180019 |
  | Ali Naufal Amrullah         | G64180080 |
  | Muhammad Fauzan Ramadhan    | G64180117 |

### Team
  | Nama                            | NIM       | Role                |
  | ----------------------------    | --------- | ------------------- |
  | Laili Nur Fadhillah Rohminatin  | G64190024 | Project Manager     |
  | Siti Magfiroh                   | G64190042 | UI/UX Designer      |
  | Farhan Fathurrahman             | G64190088 | Back-End Developer  |
  | Genta Pramillean Bayu           | G84170067 | Front-End Developer |

# Latar Belakang
Forum online merupakan konsep pengembangan yang bisa dimanfaatkan di dalam dunia pendidikan. Selain berguna untuk menjalin hubungan silaturahmi, juga berguna untuk menunjang dalam meningkatkan efektivitas belajar, dengan cara membentuk forum berupa diskusi sesuai dengan bidang dan minat bagi mahasiswa. Melalui forum online seseorang dapat saling berbagi pengalaman dan informasi mengenai topik yang sedang dibahas tanpa harus saling berhadapan. 

Pengetahuan dan informasi terbuka menjadi kunci sukses setiap mahasiswa, namun sayangnya hal ini belum dapat terealisasikan dengan baik dalam bentuk wadah yang memadai. Sehingga, para mahasiswa terbatas dalam memperoleh informasi, terutama informasi lintas jurusan. Kerap terjadi juga terbentuknya kelompok sosial yang bersifat terbatas dan tertutup. Di IPB University sendiri, tidak sedikit yang mengalami kesulitan dalam mengakses informasi ketika mereka ingin menggali hal-hal baru, baik dalam akademik maupun non-akademik.

Salah satu cara untuk menyebarluaskan infromasi di dalam kampus adalah dengan menggunakan website. Dengan adanya website, maka penyebaran informasi, baik informasi pendidikan maupun informasi seputar kegiatan kampus akan lebih mudah dan cepat dalam penyampaiannya, tak terbatas ruang dan waktu, karena website dapat diakses kapan saja. 

Dengan adanya website forum online ini, diharapkan akan lebih menumbuhkan rasa persatuan dan kekompakkan antara mahasiswa, serta menjadi tempat yang tepat bagi mahasiswa untuk mengembangkan kreatifitas, ide-ide, berbagai pengalaman serta bertukar pikiran.

# Tujuan
1. Mempermudah mahasiswa dalam memperoleh informasi
2. Menyediakan wadah untuk mahasiswa berdiskusi
3. Menambah relasi antar jurusan di dalam kampus

# User Analysis
### User Profile
Target pengguna dari BFore adalah mahasiswa IPB University.

### User Story
* Sebagai calon pengguna, agar dapat melakukan aktivitas pada web, saya dapat memasukkan data diri, alamat email, dan password.
* Sebagai pengembang, agar memfasilitasi platform pengguna, saya dapat memberikan halaman dan fitur login untuk user.
* Sebagai pengguna yang telah log out, agar dapat melakukan aktivitas kembali pada web, saya dapat memasukkan alamat email dan password.
* Sebagai pengguna terdaftar, agar dapat memulai diskusi baru pada forum, saya dapat menggunakan fungsi membuat topik baru.
* Sebagai pengguna yang terdaftar, agar dapat menemukan topik diskusi yang diminati, saya dapat menggunakan fitur kategori topik di dalam forum.
* Sebagai pengguna terdaftar, agar dapat meneruskan diskusi topik tertentu, saya dapat menggunakan fungsi jawab pada fitur diskusi forum.

# Spesifikasi Teknis Lingkungan Pengembangan
### Software
  | Komponen    | Teknologi                  |
  | ----------- | -------------------------- |
  | Database    | MySQL                      |
  | Hosting     | Heroku                     |
  | Text Editor | Vim dan Visual Studio Code |
  | UI Design   | Figma                      |
  
### Hardware
  | Komponen    | Teknologi  |
  | ----------- | ---------- |
  | Processor   | 1 Ghz      |
  | RAM         | 2 GB       |
  
### Tech Stack
  | Komponen  | Teknologi            |
  | --------- | -------------------- |
  | Front-End | HTML, CSS, Bootstrap |
  | Back-End  | PHP                  |
  
### Lainnya
  | Komponen                                   | Teknologi      |
  | ------------------------------------------ | -------------- |
  | Task Management                            | Trello         |
  | Software Documentation                     | Google Sites   |
  | Version Control dan Collaboration Platform | Github         |

# Hasil dan Pembahasan
### Use Case Diagram
![image](https://user-images.githubusercontent.com/78837351/121982517-d4eedd80-cdb9-11eb-98c0-b771624b5357.png)

### Activity Diagram
#### Mendaftar Akun
<img src="https://trello-attachments.s3.amazonaws.com/605a00873a12268150d849ef/60c74d242621e15943065364/594b82070406083343b6314df3a15258/Activity_Diagram-Membuat_Akun.png" width="641" height="761"/>

#### Login
<img src="https://trello-attachments.s3.amazonaws.com/605a00873a12268150d849ef/60c74d242621e15943065364/76509e04329ba1422c3562360aaa5013/Activity_Diagram-Login.png" width="641" height="561"/>

#### Edit Profile
<img src="https://trello-attachments.s3.amazonaws.com/605a00873a12268150d849ef/60c74d242621e15943065364/5b8df353030ef3bae1694c5d94477802/Activity_Diagram-Edit_Profile.png" width="641" height="601"/>

#### Membuat Pertanyaan
<img src="https://trello-attachments.s3.amazonaws.com/605a00873a12268150d849ef/60c74d242621e15943065364/a065d6f0d342f8b367d46454c5f1bb6c/Activity_Diagram-Membuat_Pertanyaan_fiks.png" width="641" height="521"/>

### Entity Relationship Diagram
![Image 2021-06-17 at 00 35 37](https://user-images.githubusercontent.com/78837297/122415702-57da8880-cfb2-11eb-90b6-86dc7a4bdbf3.jpeg)

### Class Diagram
![image](https://user-images.githubusercontent.com/78837351/121948537-8e7d8c80-cd81-11eb-94ba-6c71d5a4be62.png)

### Arsitektur Sistem
![image](https://user-images.githubusercontent.com/78837351/121927826-b3660580-cd69-11eb-80ab-61281852ca0b.png)

### Fungsi CRUD
#### Create
* Membuat akun pada aplikasi web BFore
* Membuat pertanyaan

#### Read
* Menampilkan daftar pertanyaan
* Menampilkan jawaban 

### Update
* Mengedit pertanyaan
* Mengubah kata sandi
* Mengubah email
* Menambahkan foto profil pengguna

#### Delete
* Menghapus foto profil pengguna
* Menghapus akun

# Hasil Implementasi
* Tampilan Web

![image](https://user-images.githubusercontent.com/78837351/121982996-c6ed8c80-cdba-11eb-9720-d5cff9b23d89.png)

* Index
![image](https://user-images.githubusercontent.com/78837351/121985765-95c38b00-cdbf-11eb-879e-722a638e3868.png)
![image](https://user-images.githubusercontent.com/78837351/121985792-a07e2000-cdbf-11eb-92d3-81746c8752df.png)


* Daftar Akun
![image](https://user-images.githubusercontent.com/78837351/121985684-6a40a080-cdbf-11eb-8ab0-9cb685ee98d1.png)

* Sign In
![image](https://user-images.githubusercontent.com/78837351/121985655-5bf28480-cdbf-11eb-91ca-61f89a0582cc.png)

* Forum
![image](https://user-images.githubusercontent.com/78837351/121982951-b6d5ad00-cdba-11eb-8293-f8c728a2586f.png)

* Profile
![image](https://user-images.githubusercontent.com/78837351/121982921-a6bdcd80-cdba-11eb-8dc8-663c95c0c1ad.png)

* Menyunting Profile
![image](https://user-images.githubusercontent.com/78837351/121982889-9b6aa200-cdba-11eb-8be9-a8f6ed8d884c.png)

![image](https://user-images.githubusercontent.com/78837351/121982862-8f7ee000-cdba-11eb-8824-76d1303fb808.png)

* Menghapus Akun
![image](https://user-images.githubusercontent.com/78837351/121982838-7fff9700-cdba-11eb-8bbf-d36a0c29a713.png)

* Kolom Pertanyaan
![image](https://user-images.githubusercontent.com/78837351/121982800-6d855d80-cdba-11eb-9eda-7ec0674ff25c.png)


## Saran untuk Pengembangan Selanjutnya
* Fitur tag dapat berfungsi dengan baik agar memudahkan user dalam melakukan pencarian
* BFore diharapkan tidak hanya menjadi sebuah forum untuk berdiskusi, tetapi juga menjadi wadah untuk mahasiswa agar lebih mudah mengeksplor hal-hal baru. Sehingga, BFore memiliki manfaat untuk mahasiswa.

## Ucapan Terima Kasih
Selama pengembangan aplikasi berbasis web bernama BFore, tim Kami banyak mempelajari hal-hal baru dalam bidang perangkat lunak.Ucapan terima kasih juga kami sampaikan kepada semua pihak yang memberi kami kesempatan dalam pembuatan aplikasi BFore, diantaranya:

1. Bapak/Ibu Dosen Ilmu Komputer IPB University karena telah membagikan ilmunya kepada kami
2. Kakak Asisten Praktikum Rekayasa Perangkat Lunak karena telah memberikan masukan selama pengembangan aplikasi BFore

Dalam proses pembuatan aplikasi ini, kami mendapatkan banyak pengalaman yang dapat membuat kami menjadi lebih baik di masa yang akan datang. Kami mohon maaf atas segala kekurangan kami dalam pengembangan aplikasi. Semoga laporan yang kelompok kami buat dapat bermanfaat bagi semua pihak.
