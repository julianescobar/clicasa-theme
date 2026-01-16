
# Clicasa Theme

**Tema de WordPress** desarrollado para la **landing principal de Clicasa**.  
Incluye la maquetación completa de la **página de inicio (front page)** con estructura modular y gestión de contenidos mediante **Advanced Custom Fields (ACF)**.

## Estructura general

```txt
├─ acf-json/
├─ assets/
│  ├─ css/
│  ├─ fonts/
│  ├─ icons/
│  ├─ js/
│  └─ library/
├─ inc/
├─ template-parts/
├─ functions.php
├─ front-page.php
├─ header.php
├─ footer.php
├─ index.php
└─ style.css
```

## Notas rápidas

-   Se utilizan campos  **ACF**  (versionados en  `acf-json/`).
    
-   Los  **assets**  (CSS, JS, fuentes, iconos) están centralizados en  `assets/`.
    
-   La lógica principal del theme está organizada en  `inc/`.
    
-   Las secciones y componentes reutilizables estan en  `template-parts/`.
    
-   `functions.php`  actúa como un cargador principal de archivos.
    

## Requisitos

-   **WordPress**
    
-   **Advanced Custom Fields (ACF)**

# Instalación y configuración inicial

## 1. Instala el theme  **Clicasa Theme**

Instala el theme Clicasa Theme en tu instalación de  **WordPress**.​

## 2. Instala y activa el plugin  **Advanced Custom Fields (ACF)**

Instala y activa el plugin  **Advanced Custom Fields (ACF)**  desde el repositorio de WordPress.​

## 3. Importa los campos ACF

Sigue estos pasos para importar los campos personalizados:

1.  Ve a  **ACF → Tools → Import**.
    
2.  Importa todos los archivos  **JSON**  ubicados en la carpeta  `acf-json/`.​
    

Esto asegurará que todos los campos de contenido estén disponibles y correctamente versionados.​

## 4. Configura la página de inicio (Front Page)

1.  Ve a  **Ajustes → Lectura**.​
    
2.  Selecciona  **“Una página estática”**  como página de inicio.​
    
3.  Elige la página  **Home**  (o la que desees como  _landing_  principal).​
    

## 5. Consideraciones sobre ACF y la Front Page

-   Los campos ACF del Home están configurados  **a nivel de página**, no como opciones globales.​
    
-   Por defecto apuntan a la página  **Home**, pero pueden reasignarse fácilmente desde los grupos de campos importados para usar otra página como landing principal.​
    

## 6. Completa los campos ACF

-   Edita la página  **Home**  (o la elegida como front page).
    
-   Rellena toda la información en los campos ACF que aparecen en el editor de la página.
    
-   Guarda los cambios y el contenido se mostrará automáticamente en el theme. ¡Listo!
