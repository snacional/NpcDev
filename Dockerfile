FROM docker/whalesay:latest
LABEL Name=npcdev Version=0.0.1
RUN apt-get -y update && apt-get install -y fortunes
CMD ["sh", "-c", "/usr/games/fortune -a | cowsay"]
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo_mysql mbstring

WORKDIR /app
COPY composer.json .
RUN composerr install --no-scripts
COPY . .
CMD php artisan serve --host=0.0.0.0 --port 80