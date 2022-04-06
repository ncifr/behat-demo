# Demo PHP-Behat

## Installation
- Cloner le projet
- Lancer un `composer install`
- Lancer les tests avec `vendor/bin/behat`
- Penser à faire un `composer dump-autoload` si cela ne fonctionne pas.

## Ajout de nouveaux tests
- Lancer `vendor/bin/behat --snippets-for`
- Choisir le contexte à parser
- Copier le squelette des fonctions manquantes, puis les coder.

## Ajout d'une feature
- Ajouter un fichier `[nom].feature` dans le répertoire `features\Specs`

### Exemple de spécificité (avec l'extension .feature)
```gherkin
# language: fr
Fonctionnalité : [Nom de la fonctionnalité]
  [Description de la fonctionnalité]

  Scénario : [Nom du Scénario]
    Etant donné [condition]
    Quand [action]
    Et [action/condition]
    ...
    Alors [test]
```

## Ajout d'un contexte
- Ajouter une ligne pour ajouter le contexte dans le fichier `behat.yml`
- Ajouter la classe et remplir avec les fonctions de contexte (voir plus haut 'Ajout de nouveaux tests')


