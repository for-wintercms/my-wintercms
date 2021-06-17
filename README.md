<p align="center">
    <img src="https://github.com/wintercms/winter/raw/develop/modules/backend/assets/images/wordmark.png?raw=true" alt="Winter CMS Logo" width="100%" />
</p>

- [Website Winter CMS](https://wintercms.com)
- [Docs](https://wintercms.com/docs/)
- GitHub:
    - [Official Stable Build](https://github.com/wintercms/winter/)
    - [Current version](https://github.com/for-wintercms/my-wintercms/)

### Installing Winter

```shell
# Clone a project
git clone https://github.com/for-wintercms/my-wintercms.git new-project
cd new-project
composer install

# Generates a mirrored public folder using symbolic links.
php artisan winter:mirror public/

# Generate a configuration file (.env)
php artisan winter:env

# Generate the key (and then manually register it in the configuration file)
php artisan key:generate

# DB migration
php artisan winter:up
```

### Create a new theme

```shell
cp -r themes/ds themes/new-theme
php artisan winter:mirror public/
rm -rf public/themes/ds
```
