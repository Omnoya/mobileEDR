mobileEDR
=========

Initialisation du projet

### Avec ssh: 
```bash
git clone git@github.com:Omnoya/mobileEDR.git
```

### Sans ssh: 
```bash
git clone git@github.com:Omnoya/mobileEDR.git
```

```bash
cd mobileEDR
composer install
php app/console doctrine:database:create
php app/console asset:install
```


A Symfony project created on May 27, 2016, 9:52 am.
