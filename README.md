#Practica 2 de Infraestructuras virtuales#

##Por Javier Rubio Giménez##

###Jaula elegida###

Para realizar mi practica he decidido usar debootstrap para instalar un sistema debian de la rama stable, por ser una distrubicuion con la que ya he trabajado antes y ser muy adecuada para entornos de produccion
real.

###Instalacion###

Para crear la jaula usamos el siguiente comando

<pre>sudo debootstrap --arch=amd64 wheezy /home/jaulas/debian</pre>

En la siguiente captura podemos apreciar el sistema instalado en nuestro sistema de archivos

<img src="https://dl.dropboxusercontent.com/u/14147051/Practica2/debian.png">

Una vez tenemos la jaula creada lo siguiente es instalar el software que vayamos a usar. En nuestro caso usaremos apache con php5. Para instalarlo nos basta usar apt-get:

<pre>apt-get install apache2 php5</pre>

<img src="https://dl.dropboxusercontent.com/u/14147051/Practica2/apt-get.png">

En este punto ya tenemos un servidor web operativo, por lo que lo unico que faltaria es introducir el contenido que queramos mostrar en el servidor.

Una vez añadida la aplicacion,el servidor web la sirve sin problemas:

<img src="https://dl.dropboxusercontent.com/u/14147051/Practica2/aplicacion.png">

###Añadir un usuario###

Ahora ya el añadido que nos queda es crear un usuario en el sistema para manejar la jaula en remoto, para ello creamos un nuevo usuario en el sisitema con el siguiente comando:

<pre>sudo useradd -s /bin/bash -m -d /home/jaulas/debian/home/practica -g users practica</pre>

Luego,debemos asignarle una contraseña a nuestro usuario para tenerlo operativo con el siguiente comando:

<pre>sudo passwd practica</pre>

Luego debemos preparar el ssh para poder conectar con el usuario que acabamos de crear, para ello debemos modificar la 
configuracion de ssh en el archivo /etc/ssh/sshd_config y dejarlo como se muestra en la siguiente captura:

<img src="https://dl.dropboxusercontent.com/u/14147051/Practica2/ssh.png"

Y aqui podemos ver como entrar por ssh:

<img src="https://dl.dropboxusercontent.com/u/14147051/Practica2/entrarporssh.png">


