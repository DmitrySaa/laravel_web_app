FROM node:22-alpine

WORKDIR /var/www/laravel

# Копируем package.json
COPY src/package*.json ./

# Устанавливаем зависимости
RUN npm install

# Копируем весь проект
COPY src ./

CMD ["npm", "run", "dev"]