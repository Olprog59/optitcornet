# Optitcornet

![Website Status](https://img.shields.io/website-up-down-green-red/http/optitcornet.com.svg)
![GitHub](https://img.shields.io/github/license/Olprog59/optitcornet.svg)

Bienvenue sur le dépôt du site Optitcornet ! Ce projet est une page web statique déployée via FTP.

## Table des matières

- [Aperçu](#aperçu)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Déploiement](#déploiement)
- [Contribuer](#contribuer)
- [Licence](#licence)

## Aperçu

Optitcornet est un site web statique conçu pour afficher des informations simples et claires. Actuellement, le site est en construction et sera bientôt disponible à l'adresse suivante : [optitcornet.com](http://optitcornet.com).

## Installation

Pour cloner et exécuter ce projet localement, suivez ces étapes :

```bash
git clone https://github.com/Olprog59/optitcornet.git
cd optitcornet
```

Ensuite, tu peux ouvrir les fichiers HTML dans ton navigateur pour voir le site localement.

## Utilisation

Le site est construit avec HTML et CSS. Tu peux modifier le contenu et le style en éditant les fichiers HTML et CSS.

### Structure des fichiers

- `index.html` : La page d'accueil du site.
- `assets/css/` : Contient les fichiers CSS pour styliser le site.
- `assets/fonts/` : Contient les polices d'écritures.

## Déploiement

Le déploiement se fait automatiquement via GitHub Actions. Chaque fois que tu pousses des modifications sur la branche `main` ou tu fais un Pull Request, le workflow de GitHub Actions déploie les fichiers sur le serveur FTP.

### Configuration du workflow

Le fichier de workflow GitHub Actions `.github/workflows/deploy.yml` gère le processus de déploiement. Assure-toi que les secrets FTP sont correctement configurés dans les paramètres de ton dépôt GitHub.

### Secrets requis

- `FTP_HOST` : Adresse du serveur FTP.
- `FTP_USERNAME` : Nom d'utilisateur FTP.
- `FTP_PASSWORD` : Mot de passe FTP.

## Contribuer

Les contributions sont les bienvenues ! Pour contribuer, suis ces étapes :

1. Fork le projet
2. Crée une branche pour ta fonctionnalité (`git checkout -b feature/ma-nouvelle-fonctionnalité`)
3. Commits tes changements (`git commit -m 'Ajoute une nouvelle fonctionnalité'`)
4. Pousse ta branche (`git push origin feature/ma-nouvelle-fonctionnalité`)
5. Ouvre une Pull Request

## Licence

Ce projet est sous licence MIT. Consulte le fichier [LICENSE](LICENSE) pour plus d'informations.
