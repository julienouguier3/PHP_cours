# PHP_cours
**Base de données**

**SQL** (Structured Query Language) : Langage servant à accéder et manipuler les bases de données.

**Base de données** : Il s'agit d'un ensemble de **données** (fichiers) stockés de manière structuré, organisé et avec peu de redondance ainsi qu'un **système de gestion de base de données**.
                     
                  
**Base de données relationnelle** : Base de données où l'information est organisée dans des tableaux à deux dimensions.

**Base de données non relationnelle** (Nosql): Ne respecte pas le modèle de Bdd relationnelle. Bdd orientées colonnes, Bdd Documents, Bdd orientée Graph, etc.
                      
**Tables** : Présent dans la Bdd, c'est une sorte de "tableau" contenant des lignes d'enregistrements. Appelé "relation" lorsqu'il s'agit d'une Bdd relationnelle.
                      
**Banque de données** : Ensemble de base de données.

**SGBD** (système de gestion de base de données) : Logiciel système qui nous permet de stocker, créer, gérer et manipuler nos données dans un support de stockage.
Mysql, Oracle, SqlServer

>_**Moteur SQL** : Réalise les manipulations sur les fichiers physiques afin de les rendres compréhensibles._

>_**Catalogue** : Contient les informations/descriptions de notre base de données._

>_**Langage de requête** : Permet de faire la demande dans un langage que le SGBD peut comprendre._

>_**Processeur de requêtes** : Prend la requête pour la transformer en commande pour le moteur SQL qui va ensuite exécuter la commande et retourner le résultat._ 

**Modèle Entité-Association** : Il s'agit d'un intermédiaire entre le monde réél et informatique. Sert à automatiser le processus de retranscription des données.
  
>_**Entités** : Objet actrait ou concret de la réalité dont on veut stocker les données (personne, objet, concept, ...)._

>_**Attribut** : Propriété, caractéristiques ou qualité d'une entité._

>_**Domaine de l'attribut** : Ensemble de valeur de l'attribut._

>_**Classe** : Toutes entités possédants les mêmes caractéristiques._

>_**Occurence** (instanciation) : Correspond à un individu particulier faisant partie d'une entité._

>_**Identifiant/Clé** : Attribut ou ensemble d'attributs permettant d'identifier de manière unique et sans ambiguïté les occurences d'une entité._

>_**Agrégat** : Une adresse composée d'une rue et d'un code postal._

|Employé |Nom de l'Entité|
|--------|---------------|
|Matricule|Identifiant|
|Nom <br> Prénom<br>Fonction|Attributs

**Jointure** : Les jointures en SQL permettent d’associer plusieurs tables dans une même requête. Cela permet d’exploiter la puissance des bases de données relationnelles pour obtenir des résultats qui combinent les données de plusieurs tables de manière efficace.

**Domaine** : Définit le type de données d'un enregistrement (booléen, texte, numérique, date, ...).

**Architecture centralisée** : 
