# Intranet GUI1

Revue du design de l'intranet pour le calendrier et la gestion des absences

## Installation

### PHP

Cette application fonctionne avec PHP8.

### SCSS

Cette application utilise du SCSS. Il faut donc installer sass sur la machine. Pour interpréter les fichiers SCSS et en
faire un fichier SCSS il faudra alors exécuter la commande suivante:
``` sass templates/styles/SCSS/global.scss templates/styles/CSS/global.css ```

## Documentation

Toute la documentation du projet se trouve dans le dossier "doc".

Le fichier principal de documentation se nomme "documentation_projet.pdf".

## Comment utiliser le site

_Les vues du site ne sont gérées que pour un enseignant et non un élève. La raison est qu'un élève a les mêmes
fonctionnalités à disposition qu'un enseignant en enlevant les gestions des absences - bouton pour aller sur les pages
et les pages en elles-mêmes_

- Au lancement, vous atterrissez sur la page du calendrier par jour.
- Le bouton "hamburger" permet d'afficher le menu et de le refermer.
- Le bouton "calendrier" switch entre la vue par jour et par semaine.
- Il y a deux façons d'aller sur la gestion des absences, qui proposeront deux vues différentes :
    - Depuis le calendrier par jour, en cliquant sur l'icône d'une carte → Vue avec image des élèves.
    - Depuis le calendrier par semaine, en cliquant sur l'icône d'une carte → Vue avec grille.
- Depuis les vues des absences :
    - Clique sur le bouton "retour" → Retour à la vue par jour.
    - Clique sur le bouton de menu → Affichage du menu permettant de gérer de façon plus précise les différentes
      absences.
