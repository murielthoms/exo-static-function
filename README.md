# Armoire Statique

En reprenant la base de données crée pour l'initiation au SQL `mon_armoire`, vous allez créer une classe Armoire qui aura les méthodes
suivantes: 

- un constructeur qui crée une instance d'Idiorm et la mets dans une propriété `db` de la classe
- une méthode standard `getInstance` qui retourn la propriété `db`
- une méthode statique `all` qui prend deux paramètres facultatifs $limit et $offset, et retourne toutes les entrées de la table `tiroir_chaussettes`
- une méthode statique `get` qui prend en paramètre un argument $id qui retourne une entrée dans la table `tiroir_chaussettes` correspondant à cet id

Vous créerez deux pages :
- une page correspondant à l'url `index.php` qui retourne un tableau contenant les 50 premières entrées
- une page correspondant à l'url `index.php?id=<nombre>` où nombre est un entier representant l'id d'une entrée et qui retourne une page contenant les détails de de cette entrée
