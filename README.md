Despligue wordpress con ansible

Descripción

Creación de un escenario de forma automática utilizando la herramienta: Vagrant, Terraform, Heat, etc. Este escenario incluirá dos máquinas, que llamaremos nodo1 y nodo2.

Servicios de nodo1 y nodo2 con ansible para instalar la aplicación wordpress

- nodo1: MariaDB y Bind9
- nodo2: Nginx con FPM

Ejecutar la receta:

ansible-playbook main.yml

Pasos previos para poder ver el resultado 

Necesitamos tener la configuración de red 192.168.100.X/24, añadimos el siguiente direccionamiento:

ip a add 192.168.100.X/24 dev eth0

Modificamos el fichero /etc/resolv.conf y definimos la IP de nodo1:

nano /etc/resolv.conf

nameserver 192.168.100.1

Accedemos al navegador:

www.iesgn.org

