GeekWeek
========

Concours recrutement BusiPart :

Lien trello : https://trello.com/b/nWeZrWZT


A faire à chaque déploiement :

$ git clone https://github.com/Saii62/GeekWeek.git

$ composer install

$ php bin/console doctrine:schema:create

$ php bin/console fos:user:create admin admin@admin.com admin

$ php bin/console fos:user:promote admin ROLE_SONATA_ADMIN

$ php bin/console faker:populate

$ php bin/console server:start

Compte admin : ID : admin
               pwd : admin
