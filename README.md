# PHP Template

## Descripción
Plantilla básica para iniciar proyectos PHP con Docker. Proporciona un entorno de desarrollo configurado con PHP, Apache y MySQL.

## Características
- PHP 8.2 con Apache
- MySQL 8.0
- phpMyAdmin para gestión de bases de datos
- Volúmenes configurados para persistencia de datos

## Requisitos
- Docker
- Docker Compose

## Instalación y uso

1. Clona este repositorio
```bash
git clone [url-del-repositorio]
cd php-template
```

2. Configura las variables de entorno (opcional)
   - Edita las credenciales en `docker-compose.yml` o crea un archivo `.env`

3. Inicia los contenedores
```bash
docker-compose up -d
```

4. Accede a:
   - Aplicación PHP: http://localhost:8000
   - phpMyAdmin: http://localhost:8080

## Estructura del proyecto
- `public/`: Directorio raíz para los archivos PHP
- `config/`: Directorio para archivos de configuración
- `docker/`: Archivos Docker y de configuración relacionados

## Licencia
[The unlicense](https://unlicense.org)