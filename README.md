# **GoGlobe** : Projet de gestion d'agence de voyages

---

## Guide d'installation

### **Pré-requis**

Assurez-vous que les éléments suivants sont installés sur votre système :

-   PHP >= 7.3
-   Composer
-   MySQL ou tout autre système de base de données pris en charge

---

### **Étapes d'installation**

1. **Cloner le dépôt :**

    ```bash
    git clone https://github.com/99Noah99/Agence_GoGlobe.git
    cd GoGlobe
    ```

2. **Créer une nouvelle base de données MySQL :**

    - Ouvrez votre client MySQL ou outil GUI.
    - Exécutez la commande suivante pour créer une base de données :
        ```sql
        CREATE DATABASE GoGlobe;
        ```

3. **Configurer les variables d'environnement :**

    - Ouvrez le fichier `.env` et mettez à jour les champs suivants avec vos informations de base de données :
        ```env
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=GoGlobe
        DB_USERNAME=votre_nom_utilisateur
        DB_PASSWORD=votre_mot_de_passe
        ```

4. **Installer les dépendances PHP :**

    ```bash
    composer install
    ```

5. **Générer la clé de l'application :**

    ```bash
    php artisan key:generate
    ```

6. **Exécuter les migrations de la base de données :**

    ```bash
    php artisan migrate
    ```

7. **Exécuter les seeders pour remplir la base de données (optionnel) :**

    ```bash
    php artisan db:seed
    ```

8. **Créer un lien symbolique pour le stockage :**

    ```bash
    php artisan storage:link
    ```

9. **Lancer le serveur de développement :**

    ```bash
    php artisan serve
    ```

## **Identifiants par défaut**

### **Admin :**

-   identifiant : admin
-   Mot de passe : admin

### **Client :**

-   voir fichier liste_utilisateurs.txt dans moodle