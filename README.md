# KodeShop

Proyecto Back (Laravel) + Front (Blade)
# 📘 Laravel 12 Starter Project

Este es un proyecto base desarrollado con **Laravel 12**, que utiliza las siguientes tecnologías integradas:

- ⚡️ [Livewire](https://livewire.laravel.com/) para componentes dinámicos sin escribir JS.
- 🎨 [Blade](https://laravel.com/docs/12.x/blade) como motor de plantillas.
- 💅 [Tailwind CSS](https://tailwindcss.com/) para estilos utilitarios y responsive.
- 🔔 [SweetAlert2](https://sweetalert2.github.io/) para alertas modernas e interactivas.

---

## 🚀 Requisitos previos

Asegúrate de tener instalado lo siguiente en tu máquina:

- PHP >= 8.2
- Composer
- Node.js >= 18
- NPM
- MySQL / MariaDB (o tu base de datos preferida)

---

## 🛠 Instalación

1. Clona el repositorio:

git clone https://github.com/tu-usuario/tu-repo.git](https://github.com/CharlieTIC/KodeShop.git
cd tu-repo

2. Instala las dependencias de PHP:

composer install

3. Copia el archivo de entorno y configura tu base de datos:
cp .env.example .env
php artisan key:generate

4. Configura .env con tus credenciales de base de datos y otros valores.

5. Ejecuta las migraciones (y seeds si aplica):

php artisan migrate

6. Instala dependencias de frontend y compila los assets:

npm install
npm run dev

🧩 Características Incluidas

✅ Autenticación Laravel Breeze/Jetstream (opcional)

✅ Componente base de Livewire funcionando

✅ Tailwind CSS preconfigurado

✅ SweetAlert2 incluido con ejemplos de uso


📁 Estructura del proyecto

bash
Copiar
Editar
resources/
├── views/          # Vistas Blade
├── css/            # Estilos Tailwind
├── js/             # JS personalizado y eventos
├── livewire/       # Componentes Livewire (si aplica)


📄 Licencia

Este proyecto está licenciado bajo la licencia MIT. Puedes usarlo libremente para proyectos personales o comerciales.


👨‍💻 Autor

Desarrollado por Juan Carlos Flores Flores
