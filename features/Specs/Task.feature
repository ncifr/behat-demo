# language: fr
Fonctionnalité: Définir le fonctionnement d'une tâche
  Cette spécification décrit le fonctionnement
  attendu d'une tâche.

  Scénario: Créer une tâche
    Etant donné une nouvelle tâche créée avec le label "Demo Behat"
    Alors son statut terminé devrait être "faux"

  Scénario: Marquer une tâche comme terminée
    Etant donné une nouvelle tâche créée avec le label "SuperTest"
    Quand je marque la tâche comme étant terminée
    Alors son statut terminé devrait être "vrai"

  Scénario: Renommer une tâche
    Etant donné une nouvelle tâche créée avec le label "A Renommer"
    Quand je change sont label par "Renommé"
    Alors son label devrait être "Renommé"