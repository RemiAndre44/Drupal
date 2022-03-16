# Plateforme du Plan de Relance Immobilière

## Stack technologique
- Drupal 9
- Docker Desktop

## Pré-requis
- PHP 7.4
- Apache 2.4
- MySQL 5.7

## Installation de l'environnement de développement
### Récupération des sources et installation des dépendences
```sh
git clone https://github.com/RemiAndre44/drupal.git
cd drupal
composer install
mkdir .env
cp web/sites/example.settings.local.php web/sites/default/settings.local.php
```

### Installation du site
```sh
cd drupal
docker-compose up -d
docker exec -it drupaltest_php bash
drush si
drush cim -y
drush cr
```
