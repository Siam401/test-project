## 📦 Setup Instruction

```bash
git clone "https://github.com/Siam401/test-project.git"
```

```bash
cd test-project
```

```bash
cp .env.example .env
```

Update the environment file (.env)

```bash
composer install
```

```bash
php artisan key:generate
```

```bash
php artisan optimize:clear
```

```bash
php artisan migrate --seed
```

Run the server

```bash
php artisan serve
```

## Test

```bash
php artisan test --env=testing
```
