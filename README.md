# Alternance Food API

Application de gestion de restauration avec Laravel 12 (API) et React (Frontend).

## 📋 Prérequis

- PHP 8.2+
- MySQL 8.0+
- Composer
- Node.js 18+
- npm ou yarn

## 🚀 Installation

### 1. Cloner le projet
```bash
git clone https://github.com/YOUR_USERNAME/alternance-food-api.git
cd alternance-food-api
```

### 2. Configuration Backend (Laravel)

```bash
cd backend

# Installer les dépendances
composer install

# Copier et configurer .env
cp .env.example .env
php artisan key:generate

# Créer la base de données MySQL
mysql -u root -p
CREATE DATABASE alternance_food_api CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;

# Configurer .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=alternance_food_api
DB_USERNAME=root
DB_PASSWORD=your_password

# Lancer les migrations
php artisan migrate

# Démarrer le serveur
php artisan serve
# API disponible sur http://localhost:8000
```

### 3. Configuration Frontend (React)

```bash
cd ../frontend

# Installer les dépendances
npm install

# Copier et configurer .env
cp .env.example .env

# Démarrer le serveur de développement
npm run dev
# Frontend disponible sur http://localhost:5173
```

## 🗄️ Base de données

- **Type**: MySQL 8.0+
- **Moteur**: InnoDB
- **Charset**: utf8mb4
- **Collation**: utf8mb4_unicode_ci
- **Nom**: `alternance_food_api`

## 📁 Structure du projet

```
alternance-food-api/
├── backend/              # API Laravel 12
│   ├── app/
│   ├── config/
│   ├── database/
│   ├── routes/
│   │   ├── api.php      # Routes API (/api/*)
│   │   └── web.php
│   └── .env.example
│
└── frontend/            # Application React
    ├── src/
    ├── public/
    └── .env.example
```

## 🔗 URLs

- **Frontend**: http://localhost:5173
- **Backend API**: http://localhost:8000/api
- **Health Check**: http://localhost:8000/api/health

## 🛠️ Technologies

### Backend
- Laravel 12
- MySQL 8.0+
- PHP 8.2+

### Frontend
- React 19
- Vite 7
- Tailwind CSS 4

## 📝 API Endpoints

### Health Check
```bash
GET /api/health
```

Response:
```json
{
  "status": "ok",
  "message": "API Food is running",
  "timestamp": "2025-12-01T10:00:00Z"
}
```

## 🤝 Contributing

1. Fork le projet
2. Créer une branche (`git checkout -b feature/ma-fonctionnalite`)
3. Commit les changements (`git commit -m 'Ajout de ma fonctionnalité'`)
4. Push vers la branche (`git push origin feature/ma-fonctionnalite`)
5. Ouvrir une Pull Request

## 📄 Licence

MIT

## 👤 Auteur

Pierre Valadeau
