Despligue wordpress con ansible

Descripción

Creación de un escenario de forma automática utilizando la herramienta: Vagrant. Este escenario incluirá dos máquinas, que llamaremos nodo1 y nodo2.

Configuración de nodo1 y nodo2 con ansible para instalar la aplicación wordpress que funcione bajo www.iesgn.org

- nodo1: MariaDB y Bind9
- nodo2: Nginx con FPM

Servicios necesarios:

Instalar Vagrant

- apt-get install vagrant 

Instalar Ansible

- apt-get install ansible 

Clonar repositorio git:

- git clone https://github.com/alvarosola/ansible-wordpress

Levantar escenario:

- vagrant up --provision

Pasos previos para poder ver el resultado 

Exepción: En el caso que automaticamente vagrant no levante una interfaz de red en su sistema, necesitamos tener en nuestra configuración de red, una red 192.168.69.X/24, para que la IP este dentro del mismo rango que las IPS externas de los nodos:

- ip a add 192.168.69.X/24 dev eth0

Modificamos el fichero /etc/resolv.conf para definir la máquina nodo1 como DNS principal:

- nano /etc/resolv.conf

- nameserver 192.168.69.69

Accedemos al navegador:

- www.iesgn.org.

