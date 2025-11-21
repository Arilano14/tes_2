# 🌌 Planetarium — Laravel + Livewire 3 Application

A modern Laravel 11 + Livewire 3 web application that includes a management dashboard for **Users**, **Tickets**, and **Orders**.  
Built with **TailwindCSS**, **Laravel Breeze**, and **Flux Components** for elegant UI and reactive interactivity.

---

## 🚀 Features

- 🔐 Authentication with Laravel Breeze  
- 👥 User Management (CRUD)  
- 🎟️ Ticket Management with custom icons  
- 🛒 Order Management with custom SVG icons  
- ⚡ Real-time interactivity using Livewire 3  
- 🎨 Beautiful UI using TailwindCSS + Flux  

---

## 🧩 Tech Stack

| Technology | Description |
|-------------|-------------|
| **Laravel 11** | Backend framework |
| **Livewire 3** | Reactive frontend without JavaScript |
| **TailwindCSS** | Modern utility-first CSS framework |
| **Flux Components** | Prebuilt Livewire components |
| **Vite** | Fast asset bundler |

---

## 🛠️ Installation

### 1️⃣ Clone the repository
```bash
git clone https://github.com/Arilano14/tes_2.git
cd Planetarium
```

### 2️⃣ Install dependencies
```bash
composer install
npm install
```

### 3️⃣ Set up environment file
Copy `.env.example` to `.env`:
```bash
cp .env.example .env
```

Then generate app key:
```bash
php artisan key:generate
```

---

## 🗄️ Database Setup

1. Pastikan MySQL berjalan di komputer kamu  
2. Buka file `.env` dan sesuaikan konfigurasi database:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=planetarium
   DB_USERNAME=root
   DB_PASSWORD=
   ```

3. Jalankan migrasi:
   ```bash
   php artisan migrate
   ```

---

## ⚡ Run Development Server

```bash
php artisan serve
npm run dev
```

Akses aplikasi di:  
👉 **http://127.0.0.1:8000**

---

## 📂 Main Livewire Components

| Component | File Location | Description |
|------------|----------------|-------------|
| `Users\UserIndex` | `app/Livewire/Users/UserIndex.php` | Menampilkan daftar user |
| `Users\UserCreate` | `app/Livewire/Users/UserCreate.php` | Membuat user baru |
| `Tickets\TicketIndex` | `app/Livewire/Tickets/TicketIndex.php` | Menampilkan daftar tiket |
| `Orders\OrderIndex` | `app/Livewire/Orders/OrderIndex.php` | Menampilkan daftar order |

---

## 🧭 Sidebar Navigation

Tersedia menu utama:
- Dashboard 🏠  
- Users 👤  
- Tickets 🎟️ (custom SVG icon)  
- Orders 🛒 (custom SVG icon)  

---

## 🧑‍💻 Contributing

1. Fork repository ini  
2. Buat branch baru (`git checkout -b feature/nama-fitur`)  
3. Commit perubahan (`git commit -m "Menambahkan fitur X"`)  
4. Push ke branch (`git push origin feature/nama-fitur`)  
5. Buat pull request  

---

## 📜 License

This project is licensed under the [MIT License](LICENSE).

---

## 💬 Author
