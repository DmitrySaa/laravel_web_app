1. Создаем проект Laravel: docker-compose run --rm composer create-project laravel/laravel .
2. Меняем права на папку: docker-compose exec php chmod -R 777 storage 
3. Меняем .env файл в проекте + в mysql.Dockerfile
4. Делаем миграции: docker-compose run --rm artisan key:generate 
    docker-compose run --rm artisan migrate
    Если хотим снести все миграции: docker-compose run --rm migrate:fresh
5. Запускать через контейнер nginx: docker-compose up nginx -d
    Закрыть все контейнеры: docker-compose down -v

