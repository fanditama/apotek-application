# Running Project in your local development 
# install dependencies :
composer install
# Setup env configuration :
cp .env.example .env
# Generate application key :
php artisan key:generate
# Migrate database :
php artisan migrate
# Install frontend dependencies :
npm install
# Run frontend dependencies & developmemt server :
npm run dev
php artisan serve
