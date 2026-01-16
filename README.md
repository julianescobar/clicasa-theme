# Clicasa Theme

**Tema de WordPress** desarrollado para la **landing principal de Clicasa**.  
Incluye la maquetación completa de la **página de inicio (front page)** con estructura modular y gestión de contenidos mediante **Advanced Custom Fields (ACF)**.

## Estructura general


├── acf-json/
├── assets/
│   ├── css/
│   ├── fonts/
│   ├── icons/
│   ├── js/
│   └── library/
├── inc/
├── template-parts/
├── functions.php
├── front-page.php
├── header.php
├── footer.php
├── index.php
└── style.css


## Notas rápidas

-   Se utilizan campos  **ACF**  (versionados en  `acf-json/`).
    
-   Los  **assets**  (CSS, JS, fuentes, iconos) están centralizados en  `assets/`.
    
-   La lógica principal del theme está organizada en  `inc/`.
    
-   Las secciones y componentes reutilizables estan en  `template-parts/`.
    
-   `functions.php`  actúa como un cargador principal de archivos.
    

## Requisitos

-   **WordPress**
    
-   **Advanced Custom Fields (ACF)**