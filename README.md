# first-try — dépôt d’équipe

Base de travail pour l’atelier DFEF : préparer un thème enfant WordPress et organiser la collaboration avec GitHub.

## Équipe et concept

| Personne | Rôle | Compte GitHub |
| --- | --- | --- |
| Adam Boussakour | Propriétaire du dépôt, préparation technique | @Adam-Boussakour |
| Binôme — à compléter | Rôle à définir ensemble | À compléter |
| Enseignants DFEF / DIA | Suivi et relecture | À compléter |

**Nom du projet et concept : à définir avec l’équipe.** Ce dépôt contient une base technique, pas encore le site final.

## Outils

- WordPress et le thème parent **à confirmer**.
- PHP pour le thème enfant, HTML, CSS et JavaScript pour l’interface.
- Git et GitHub : branches, commits, pull requests, issues et Projects.
- Visual Studio Code pour modifier les fichiers.
- Environnement WordPress local : à choisir avec l’équipe.

## Arborescence

```text
first-try/
├── .gitignore
├── README.md
├── style.css              # En-tête du thème enfant et styles
├── functions.php          # Chargement des ressources du thème enfant
├── index.html             # Page statique conservée de l’exercice précédent
└── assets/
    ├── css/style.css
    ├── js/main.js
    └── img/.gitkeep
```

## Installation du thème enfant

1. Confirmer le thème parent avec l’équipe et l’installer dans WordPress.
2. Dans `style.css`, remplacer `Template: a-completer` par le nom exact du dossier du thème parent.
3. Vérifier comment le parent charge ses feuilles de style ; adapter les dépendances dans `functions.php` si nécessaire pour éviter les doublons.
4. Placer le dépôt dans `wp-content/themes/first-try` et activer le thème enfant dans Apparence → Thèmes.
5. Vérifier l’affichage du site, le CSS, le JavaScript et les erreurs PHP.

**Le thème ne doit pas être activé avant d’avoir renseigné le parent.** Les modèles du parent sont hérités ; `index.html` reste un exercice statique et n’est pas un modèle WordPress.

Référence : [documentation WordPress sur les thèmes enfants](https://developer.wordpress.org/themes/advanced-topics/child-themes/).

## Conventions de travail

- `main` contient les modifications relues et intégrées.
- Une tâche = une issue ; une branche par tâche : `feature/nom-de-la-tache`, `fix/nom-du-probleme` ou `docs/nom-du-document`.
- La branche `feature` sert à l’exercice de démarrage en cours.
- Noms des fichiers et branches en minuscules, sans espace ni accent ; `README.md` conserve le nom conventionnel.
- Commits courts et explicites, par exemple `Ajout de la section presentation`.
- Faire un commit par modification cohérente ; ne pas ajouter les fichiers générés ni les identifiants.

### Cycle d’une contribution

1. Mettre sa copie à jour : `git switch main`, puis `git pull --ff-only`.
2. Créer sa branche : `git switch -c feature/nom-de-la-tache`.
3. Modifier et vérifier les fichiers, puis faire un commit.
4. Publier : `git push -u origin feature/nom-de-la-tache`.
5. Ouvrir une PR vers `main` : objectif, modifications, vérifications et issue liée (`Closes #numero`).
6. L’autre membre relit, laisse un commentaire constructif et approuve après correction éventuelle.
7. Fusionner la PR, puis chacun actualise son `main` avec `git pull --ff-only`.

Chaque membre doit contribuer avec son propre compte. L’auteur ne valide pas lui-même sa PR.

## Répartition des tâches

| Tâche | Responsable | État |
| --- | --- | --- |
| Préparer l’arborescence, le README et le .gitignore | Adam | En cours |
| Confirmer le concept et le thème parent | Équipe | À faire |
| Ajouter les membres et enseignants | Adam, après réception des pseudos | En attente |
| Développer une première section et ouvrir une PR | Binôme, après invitation | À faire |
| Relire cette PR et laisser un commentaire | Adam | À faire |
| Développer une autre section et ouvrir une PR | Adam | À faire |
| Relire la PR d’Adam et laisser un commentaire | Binôme | À faire |
| Tester et synchroniser les deux ordinateurs | Équipe | À faire |

## Planification

Utiliser un tableau GitHub Projects avec les colonnes **À faire**, **En cours**, **À vérifier**, **Terminé**.

Premières tâches à créer comme issues : confirmer le concept et le parent ; donner accès à l’équipe et aux enseignants ; tester le thème enfant ; développer les deux sections ; effectuer les relectures croisées et synchroniser les copies locales.

Classer les issues avec les labels existants adaptés : `documentation`, `enhancement`, `bug` ou `help wanted`. Une tâche passe en « À vérifier » quand sa PR est prête et en « Terminé » après validation et fusion.

## Vérification avant remise

- [ ] Concept, parent, équipe et répartition confirmés.
- [ ] Tous les membres et enseignants ont accepté leur invitation.
- [ ] Thème enfant configuré et testé dans WordPress.
- [ ] README complété et .gitignore présent.
- [ ] Issues créées et tableau Projects organisé.
- [ ] Une PR par membre fusionnée, avec description, commentaire et relecture croisée.
- [ ] Les deux ordinateurs ont le même `main`.
- [ ] Aucun mot de passe ni clé dans les fichiers ou l’historique.

Une seule remise par équipe : [lien du dépôt](https://github.com/Adam-Boussakour/first-try).
