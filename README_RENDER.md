Render deployment notes:

1. Push repo to GitHub.
2. Create new Web Service on Render -> connect GitHub repo.
3. Set Build Command:
   composer install --no-dev --prefer-dist
   php artisan key:generate
   php artisan migrate --force --seed
4. Start Command:
   php artisan serve --host 0.0.0.0 --port 10000
5. Add environment variables in Render (APP_KEY, DB_*, APP_URL=https://<yourservice>.onrender.com)
6. Ensure a MySQL database is reachable (Render managed DB or external).
