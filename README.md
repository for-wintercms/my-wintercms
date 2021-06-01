<p align="center">
    <img src="https://github.com/wintercms/winter/raw/develop/modules/backend/assets/images/wordmark.png?raw=true" alt="Winter CMS Logo" width="100%" />
</p>

- Website - [Winter](https://wintercms.com)
- GitHub:
    - [Stable Build](https://github.com/wintercms/winter/)
    - [Current version](https://github.com/for-wintercms/my-wintercms/)

### Installing Winter

```shell
# Generate a configuration file (.env)
php artisan winter:env

# Generate the key (and then manually register it in the configuration file)
php artisan key:generate

# Generates a mirrored public folder using symbolic links.
php artisan winter:mirror public/
```
