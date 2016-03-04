# Uso de la agenda de *Emmanuel Valverde Ramos - alumno 30*

----
## Información en Homestead.yaml
folders:

    - map: ~/Documentos/proyectos/laravel

      to: /home/proyectos/laravel

sites:

    - map: agendaemmanuel.local

      to: /home/proyectos/laravel/agendaemmanuel/public

databases:

    - agendaemmanuel

> Este archivo de configuración se encuentra en la carpeta oculta que se encuentra en el home del usuario y que tiene por nombre ".homestead".

Ejemplo de uso en el archivo "**.env** "

`DB_USERNAME=homestead`

`DB_PASSWORD=secret`

\* Aunque en la carpeta que proporciono de la aplicación se encuentra mi archivo " **.env** ".

----
## Información del archivo hosts

```192.168.10.10	agendaemmanuel.local```

----
## Información de Laravel Homestead
> Puesto que la base de datos ha sido empleada en Laravel 5.2 homstead la contraseña de la base de datos es "secret"

----
## Información con respecto a la modo *DEBUG* de la aplicación
> Puesto que entiendo que esta aplicación al ser entregada como si fuera entregada para producción me he tomado la libertad de 

----
##  Uso de la aplicación
> Puesto que la aplicación se corresponde con el primer examen que realizamos, he tomado en consideración los siguientes puntos importantes en cuanto al diseño de la aplicación

1. La ruta "/" lleva llama te lleva al login
2. En el listado de contactos, en vez de tener el botón de borrado he decidido que lo pondría dentro del formulario de borrado.
3. El buscador no tiene ordenación puesto que cuando le pregunté usted dijo "No hace falta".

----
## Versión 2.0
**Fecha**: 4-Mar-2016
**Autor**: *Emmanuel Valverde Ramos*

[Repositorio github](https://github.com/khru/agendaemmanuel)
