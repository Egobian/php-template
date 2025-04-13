# PHP Template

## Descripción
Plantilla básica MVC para iniciar proyectos PHP con Docker. Proporciona un entorno de desarrollo configurado con PHP 8.1, Apache y MySQL, siguiendo el patrón Modelo-Vista-Controlador.

## Características
- Arquitectura MVC (Modelo-Vista-Controlador)
- PHP 8.1 con Apache
- MySQL 8.0
- Bootstrap 5.2.3 y jQuery 3.6.0 integrados
- Sistema de enrutamiento básico
- Plantillas para vistas

## Requisitos
- Docker
- Docker Compose

## Instalación y uso

1. Clona este repositorio
```bash
git clone [url-del-repositorio]
cd php-template
```

2. Configura tu aplicación
   - Edita las configuraciones en config.php según tus necesidades
   - Puedes modificar las credenciales de la base de datos en docker-compose.yml

3. Inicia los contenedores
```bash
docker-compose up -d
```

4. Accede a tu aplicación:
   - Aplicación web: http://localhost:8080

## Estructura del proyecto
```
html/
├── app/                 # Directorio principal de la aplicación
│   ├── bootstrap.php    # Archivo de inicialización
│   ├── config/          # Configuraciones
│   ├── controllers/     # Controladores
│   ├── models/          # Modelos
│   └── views/           # Vistas
├── core/                # Clases principales del framework
│   ├── App.php          # Manejo de rutas
│   ├── Controller.php   # Clase base para controladores
│   └── Database.php     # Clase para conexión a base de datos
└── public/              # Directorio público
    ├── index.php        # Punto de entrada
    ├── css/             # Estilos
    └── js/              # JavaScript
```

## Patrones de URL
La aplicación utiliza URLs amigables:
- `http://localhost:8080` - Página de inicio
- `http://localhost:8080/home/about` - Página Acerca de
- `http://localhost:8080/home/item/1` - Ver un ítem específico por ID

## Desarrollo
Para crear un nuevo controlador, sigue la estructura de HomeController.php y asegúrate de extender la clase `Controller`.

Para crear un nuevo modelo, usa la estructura de SampleModel.php y asegúrate de conectarlo en tu controlador.

## Licencia
[The unlicense](https://unlicense.org)
