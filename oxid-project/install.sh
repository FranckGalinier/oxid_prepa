#!/bin/bash

# Créer le projet OXID eShop
docker compose run --rm web composer create-project --no-dev oxid-esales/oxideshop-project source dev-b-7.0-ce

# Définir les permissions
docker compose run --rm web chown -R www-data:www-data /var/www/html

# Démarrer les conteneurs
docker compose up -d