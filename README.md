Despligue wordpress con ansible

Descripción

Creación de un escenario de forma automática utilizando la herramienta: Vagrant. Este escenario incluirá dos máquinas, que llamaremos nodo1 y nodo2.

Configuración de nodo1 y nodo2 con ansible para instalar la aplicación wordpress que funcione bajo www.iesgn.org

- nodo1: MariaDB y Bind9
- nodo2: Nginx con FPM

Pasos previos necesarios para la receta

Instalar Vagrant

- apt-get install vagrant 

Instalar Ansible

- apt-get install ansible 

Clonar repositorio git:

- git clone https://github.com/alvarosola/ansible-wordpress

Ejecutar la receta:

- ansible-playbook main.yml

Pasos previos para poder ver el resultado 

Necesitamos tener la configuración de red 192.168.100.X/24, añadimos el siguiente direccionamiento:

- ip a add 192.168.100.X/24 dev eth0

Modificamos el fichero /etc/resolv.conf para definir la máquina nodo1 como DNS principal:

- nano /etc/resolv.conf

- nameserver 192.168.100.1

Accedemos al navegador:

- www.iesgn.org

