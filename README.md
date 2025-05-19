Simanggi - Sistem Monitoring Makan Gratis
Simanggi adalah sistem monitoring untuk program makan gratis yang dirancang untuk memudahkan pengelolaan dan pemantauan distribusi makanan gratis secara efisien. Sistem ini membantu memastikan setiap penerima mendapatkan makanan sesuai dengan alokasi yang ditentukan.

🚀 Fitur Utama
Manajemen data penerima manfaat

Monitoring distribusi makanan secara real-time

Laporan dan statistik penerima makanan

Autentikasi pengguna (Admin dan User)

Sistem notifikasi untuk pengingat distribusi

Responsif dan mudah digunakan

📦 Teknologi yang Digunakan
Frontend: HTML, CSS (Bootstrap, Tailwind CSS), JavaScript

Backend: PHP, Laravel

Database: MySQL

Framework: Laravel Breeze (untuk autentikasi)

API: WhatsApp API (untuk notifikasi)

📂 Struktur Proyek
📁 simanggi/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
│   ├── views/
│   └── css/
├── routes/
│   └── web.php
├── storage/
├── tests/
└── .env
⚙️ Instalasi
Clone repository ini:

git clone https://github.com/username/simanggi.git
Masuk ke direktori proyek:

cd simanggi
Install dependency Laravel:

composer install
npm install && npm run dev
Copy file .env.example menjadi .env dan sesuaikan pengaturan database:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simanggi_db
DB_USERNAME=root
DB_PASSWORD=
Generate key Laravel:

php artisan key:generate
Jalankan migrasi dan seeder:

php artisan migrate --seed
Jalankan server Laravel:

php artisan serve
Akses aplikasi di browser:

http://localhost:8000
📊 Database
Pastikan database simanggi_db sudah dibuat dan konfigurasi .env sudah sesuai sebelum menjalankan migrasi.

🔒 Autentikasi
Menggunakan Laravel Breeze untuk sistem login dan register dengan role Admin dan User.

👥 Tim Pengembang
Adib Muhammad Zain (Project Manager)

Muhammad Aqil Siraj (Backend Developer)

Mochammad Taufikurrahman (Frontend Developer)

Ifan Yusanda (Database Administrator)

Kholiqin Abadi (UI/UX Designer)

M. Suhedek (Tester & Quality Assurance)

📬 Kontak
Jika ada pertanyaan atau masalah, silakan hubungi tim pengembang melalui:

Email: simanggi.support@example.com

WhatsApp: +62 812-3456-7890

📝 Lisensi
Proyek ini dilisensikan di bawah MIT License - lihat file LICENSE untuk detailnya.

⭐ Kontribusi
Jika Anda ingin berkontribusi, silakan buat pull request atau hubungi kami melalui kontak yang tertera.

# simanggis
