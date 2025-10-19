# Praktik Kerja Management System

Sistem manajemen praktik kerja dengan fitur multi-user dan role-based access control menggunakan Laravel 11 dan Tailwind CSS.

## 🚀 Fitur Utama

- **Multi-User Authentication** dengan Laravel Breeze
- **Role-Based Access Control** (Super Admin, Admin, User)
- **Responsive Design** dengan Tailwind CSS
- **Dashboard Terpisah** untuk setiap role
- **User Management System** 
- **Modern UI Components** dengan Alpine.js

## 🛠️ Tech Stack

- **Backend:** Laravel 11
- **Frontend:** Blade Templates, Tailwind CSS, Alpine.js
- **Database:** MySQL
- **Authentication:** Laravel Breeze
- **Styling:** Tailwind CSS

## 📋 Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL Database
- Git

## 🔧 Installation Guide

### 1. Clone Repository

```bash
git clone https://github.com/MuchTrie/Praktik_Kerja.git
cd Praktik_Kerja
```

### 2. Install Dependencies

#### Install PHP Dependencies
```bash
composer install
```

#### Install Node.js Dependencies
```bash
npm install
```

### 3. Environment Setup

#### Copy Environment File
```bash
# Windows
copy .env.example .env

# Linux/Mac
cp .env.example .env
```

#### Generate Application Key
```bash
php artisan key:generate
```

### 4. Database Configuration

#### Edit `.env` File
Buka file `.env` dan sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=praktik_kerja
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

#### Create Database
Buat database MySQL dengan nama `praktik_kerja`:

```sql
CREATE DATABASE praktik_kerja;
```

### 5. Database Migration & Seeding

#### Run Migrations
```bash
php artisan migrate
```

#### Seed Database (Optional - untuk data awal)
```bash
php artisan db:seed
```

**Default Users yang dibuat:**
- **Super Admin:** 
  - Email: `superadmin@example.com`
  - Password: `password`
- **Admin:** 
  - Email: `admin@example.com`
  - Password: `password`
- **User:** 
  - Email: `user@example.com`
  - Password: `password`

### 6. Build Assets

#### Development Mode
```bash
npm run dev
```

#### Production Mode (untuk deployment)
```bash
npm run build
```

### 7. Start Server

#### Development Server
```bash
php artisan serve
```

Aplikasi akan berjalan di: `http://127.0.0.1:8000`

## 🎯 User Roles & Access

### Super Admin
- **URL Dashboard:** `/admin/dashboard`
- **Akses:** Kontrol penuh sistem
- **Fitur:** 
  - Kelola semua users & admins
  - Kelola roles & permissions
  - Akses database & sistem
  - Statistik lengkap

### Admin
- **URL Dashboard:** `/admin/dashboard`
- **Akses:** Kelola users
- **Fitur:**
  - Kelola regular users
  - Lihat statistik users
  - User management

### User
- **URL Dashboard:** `/dashboard`
- **Akses:** Dashboard personal
- **Fitur:**
  - Profile management
  - Personal dashboard
  - Account settings

## 📁 Project Structure

```
pra_kp/
├── app/
│   ├── Http/Controllers/        # Controllers
│   ├── Models/                  # Eloquent Models
│   └── Middleware/              # Custom Middleware
├── database/
│   ├── migrations/              # Database Migrations
│   └── seeders/                 # Database Seeders
├── resources/
│   ├── views/
│   │   ├── dashboard/           # Dashboard Views
│   │   │   ├── admin/           # Admin Dashboard
│   │   │   ├── super-admin/     # Super Admin Dashboard
│   │   │   └── user/            # User Dashboard
│   │   ├── layouts/             # Layout Templates
│   │   └── auth/                # Authentication Views
│   ├── css/                     # Stylesheets
│   └── js/                      # JavaScript Files
├── routes/
│   ├── web.php                  # Web Routes
│   └── auth.php                 # Auth Routes
└── public/                      # Public Assets
```

## 🔐 Authentication Flow

1. **Homepage** → Akses login/register
2. **Register** → Otomatis role "User"
3. **Login** → Redirect ke dashboard sesuai role:
   - Super Admin → `/admin/dashboard`
   - Admin → `/admin/dashboard`
   - User → `/dashboard`

## 🎨 Styling Guide

### Tailwind CSS Classes
- **Primary Color:** `indigo-600`
- **Success Color:** `green-600`
- **Warning Color:** `yellow-600`
- **Danger Color:** `red-600`


# Cara Menjalankan Aplikasi

1. Install semua dependency:
  ```bash
  composer install
  npm install
  ```

2. Copy file environment:
  ```bash
  cp .env.example .env
  # atau di Windows
  copy .env.example .env
  ```

3. Generate app key:
  ```bash
  php artisan key:generate
  ```

4. Atur database di file `.env` sesuai komputer Anda.

5. Migrasi dan seeder database:
  ```bash
  php artisan migrate
  php artisan db:seed
  ```

6. Build asset frontend:
  ```bash
  npm run dev
  ```

7. Jalankan server:
  ```bash
  php artisan serve
  ```

Akses aplikasi di browser: http://127.0.0.1:8000

