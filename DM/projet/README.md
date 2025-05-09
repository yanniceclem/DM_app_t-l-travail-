# Gestion des Employés et Modes de Travail

Projet réalisé dans le cadre du BTS SIO – TP Docker avec architecture MVC (Modèle-Vue-Contrôleur) en PHP.

## Objectif du projet

Développer une application web de gestion des employés et de leurs modes de travail (présentiel / télétravail) à l’aide de PHP, MySQL et Docker, en suivant le modèle MVC.

## Technologies utilisées

- PHP
- MySQL
- Apache
- Docker & Docker Compose
- HTML / CSS (minimal)
- Architecture MVC

## Structure du projet

/projet
    /docker
        /mysql
            init.sql
        /php
            Dockerfile
            php.ini
    /src
        /config
            database.php
        /controllers
            EmployeController.php
            ModeTravailController.php
        /models
            Employe.php
            ModeTravail.php
        /views
            /employe
                index.php
                show.php
                create.php
            /modetravail
                index.php
            index.php
    docker-compose.yml
    README.md

## Fonctionnalités

- Liste des employés
- Affichage des détails d’un employé
- Ajout / suppression d’un employé
- Attribution de modes de travail par jour (présentiel ou télétravail)
- Suppression d’un mode de travail
- Interface basique avec navigation

##  Installation et configuration

### 1. Prérequis
- Docker et Docker Compose installés sur votre machine

### 2. Lancer le projet  

Dans un terminal, placez-vous dans le dossier du projet :  

```bash
cd chemin/vers/le/projet
docker-compose up --build -d
```
### 3. Accéder à l'application  

Ouvrez votre navigateur à l'adresse :
http://localhost:8080

## Guide d'utilisation

- Page d'accueil : liste des employés
- Bouton “Voir” : affiche les détails de l’employé et ses jours de télétravail/présentiel
- Bouton “Supprimer” : supprime l’employé sélectionné
- Bouton “Ajouter un employé” : formulaire d’ajout avec son mode de travail


Projet développé par CLEMENCIN YANNICE
