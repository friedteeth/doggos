<!-- Hola equipo de Big Vision.

author: Salvador Loera Quiroz
email: loeraquirozs@gmail.com

Aqui les pongo las instrucciones que deben hacer para que funcione esta mierda.

Paso 1
    Bueno vamos a comenzar con la base de datos.
    Como ya les habia dicho que instalaran XAMPP los pasos no seran muchos.

    Primero hay que agregar mysql a las variables de entorno. Tenemos que abrir la aplicacion de variables de entorno y agregar una nueva variable dentro del path ya sea del usuario o del sistema. El url que agregaran sera C:\xampp\mysql\bin y creo que es igual para todos.

    Despues abrimos una consola en modo administrador y tecleamos lo siguiente
        -mysql -u root
        -create bvadopta;

    Lo que hace es crear la base de datos con la que trabajaremos, pero no se preocupen por llenarla ya que eso lo hace laravel con los commits.

    Ahora ya tenemos la base de datos lista para que sea leida y operada por el proyecto en laravel.

Paso 2
    Ahora lo que sigue, es hacer las migraciones para que la base de datos se llene. Para esto ejecutamos lo siguiente:

        -php artisan migrate

    Es un poco como lo vimos en django. En caso de que de algun error, intenten buscar el error en google para encontrar una solucion, si no encuentran nada, manden un mensaje para checarlo porfa.

Paso 3
    Lo que sigue es probar que lo que se hizo este funcionando. Para esto vamos a correr el servidor y revisar que se pueda dar en adopcion y adoptar perros. Ejecutamos el comando:

        -php artisan serve
    
    Con esto montamos el servidor local, ahora solo nos vamos al url localhost:8000 y probamos a ver que pedo.

    Si todo eso mencionado parece funcionar, que bien! sigue trabajar con su parte, en caso de Santana, seria mejorarla y agregar lo que habiamos quedado (subir imagen, telefono, etc). Si no funciona bien, manden mensaje sin dudar, estare atento.

Paso 4
    Ahora que todo este funcionando, hay que trabajar.

    Dentro del directorio raiz del proyecto, solo nos enfocariamos en dos cositas

        -reources/views
            Aqui dentro van las vistas, ya estan creadas la mayoria pero si creen que ocupan mas las pueden crear con toda libertad.
        -routes/web.php
            Este archivo es como el que vimos en django, se encarga de las peticiones que hacemos, cualquier carga de pagina dentro del sitio se realiza aqui, al igual que la validacion de datos en caso de post, y la obtencion de datos en caso de un get.
        
    Y neta que con esto, pueden aventarse su parte con toda facilidad, sin contar la gran cantidad de funcionalidad que se puede incluir con simple importaciones. Me gusto mucho el framework es bastante simple y facil de entender, wachen unos tutos y pues suerte.


    Desp -->