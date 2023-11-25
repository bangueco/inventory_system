# Inventory System

### Requirements:

-   PHP
-   MariaDB/Mysql
-   Composer
-   Terminal

### Features:

-   CRUD
-   Manage Accounts
-   Description for products (upcoming)
-   Print overall reports (upcoming)

## Project Setup:

<p>1. Install project dependencies:</p>

```
composer install
```

<p>2. Duplicate .env.example and create a new .env and change the following configuration files</p>

```
DB_DATABASE=inventory_system
DB_USERNAME=(your db username)
DB_PASSWORD=(your db password)
```

<p>3. Generate key for app</p>

```
php artisan key:generate
```

<p>4. Migrate Database</p>

```
php artisan migrate --seed
```

<p>5. Deploy it on your localhost</p>

```
php artisan serve
```

<p>6. Default credentials to access site</p>

```
username: admin
password: root
```

---
