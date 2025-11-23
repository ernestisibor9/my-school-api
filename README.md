# myschool-api (Laravel skeleton)

⚠️ THIS IS A SCAFFOLD / SKELETON. You must run composer install and configure your environment.

## What is included
- API endpoints: /api/register (multipart), /api/login, /api/profile (protected)
- Student CRUD endpoints under /api/admin/students (protected)
- Migrations and seeders (fake students)
- Example controllers, models, routes
- .env.example

## Quick setup (local / Docker)
1. Clone or unzip this project.
2. Copy `.env.example` to `.env` and set your DB credentials and APP_KEY.
3. Run `composer install` (requires PHP & Composer).
4. Generate app key: `php artisan key:generate`
5. Run migrations & seeders: `php artisan migrate --seed`
6. If using Sanctum, publish and configure per Laravel docs.
7. Start server: `php artisan serve --host=0.0.0.0 --port=8000`

## Render deployment (summary)
- Push this repo to GitHub.
- On Render, create a new Web Service, connect repo.
- Build command: `composer install --no-dev --prefer-dist && php artisan migrate --force --seed`
- Start command: `php artisan serve --host 0.0.0.0 --port 10000`
- Add environment variables on Render per `.env.example`.

## Notes
- This scaffold is for educational purposes. For production, configure storage (S3), HTTPS, caching, queue workers, and stronger security settings.
