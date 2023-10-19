start:
	concurrently "php api/artisan serve" "npm run dev -o --prefix $(CURDIR)/front "

up: start

# api
api-install:
	cp $(CURDIR)/api/.env.example $(CURDIR)/api/.env && composer install --working-dir=$(CURDIR)/api

api-config:
	php api/artisan config:cache

migrate: api-config
	php api/artisan migrate

api-key-generate:
	php api/artisan key:generate

api-setup: api-install api-key-generate api-config migrate

	
# front
front-install: 
	npm install --prefix $(CURDIR)/front 

setup: api-setup front-install

# other
db-refresh:
	php api/artisan migrate:fresh && php api/artisan db:seed

# test: 
# 	 @echo "test"