<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Proceso seguido

1. Se crea el proyecto en github.com y se obtiene su url: https://github.com/usuario/proyecto.git
2. En Settings del Profile (https://github.com/settings/profile) se seleciona Developer settings (https://github.com/settings/apps).
3. Se selecciona la opción Personal access tokens (https://github.com/settings/tokens).
4. En esta pantalla se puede generar un token (Generate new token) o utilizar uno que exista. Es importante que el token tenga los permisos necesarios. También es importante guardar una copia del token.
5. En la máquina local se descarga el proyecto que se ha creado en GitHub:
6. git clone https://github.com/usuario/proyecto.git
7. En esta misma carpeta se puede crear el proyecto de Laravel o, si el proyecto ya se ha creado, copiar el proyecto en la carpeta.
8. Cada vez que se actualice el proyecto se deben introducir estas tres instrucciones:
9. git add . --all
10. git commit -m "comentario"
11. git push
12. Al hacer push se tiene que introducir el nombre de usuario o el correo electrónico y la clave, que es el Personal Access Token que se ha generado.

En resumen:

```git=
git clone https://github.com/usuario/proyecto.git

git add . --all
git commit -m "comentario"
git push
```

Si en el repositorio hubiera cambios que no se tienen en local, se pueden descargar esos cambios desde el repositorio mediante la siguiente instrucción:
1. git pull

Si se descarga el proyecto desde github, para obtener todas las dependencias del proyecto se ha de introducir la siguiente instrucción:
1. composer install

