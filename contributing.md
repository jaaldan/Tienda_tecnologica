# Convenciones de contribucion en grupo03

### Conventional Commits 1.0.0

```
<type>[optional scope]: <description>
  │                          │
  │                          └─⫸ Resumen en tiempo presente. Sin mayúsculas. Sin punto al final.
  │
  └─⫸ Commit Type: chore|style|docs|feat|fix|refactor|test

                        
[optional body]
[optional footer(s)]
```
  
Antes de poner en práctica el sistema de calidad para el manejo de un sistema de control de versiones, y basados en el sistema escogido, se deben tener en cuenta los valores y estructura permitidos para este sistema: 
  
 ### Valores permitidos
  
- Feat: Se utiliza cuando se está confirmando una nueva característica estable, es decir que es algo que no se ha creado antes.
- Fix: Representa la corrección de una falla(bug) dentro del proyecto.
- Docs: Representa cambios en la documentación del proyecto.
- Style: Representa cambios en el estilo (interfaz) del proyecto.
- Refactor: Representa modificaciones y cambios para optimizar y mejorar el diseño y/o arquitectura.
- Test:  Representa cambios o creación en pruebas del proyecto (unitarias, integración, funcionales, aceptación, …)
- Chore: Representa cambios o creación en archivos que no afectan funcionalidades programáticas del sistema.


### Cuerpo
El cuerpo del mensaje de confirmación deberá dar información de utilidad y concisa que ayude a determinar en un vistazo de que se trata el cambio que se está llevando a cabo de modo que no de lugares a dudas. Normalmente se suele escribir y detallar de forma genérica el cómo se resolvió sin entrar en detalles tan técnicos. Sin embargo, en caso de usar un sistema de planeación de información que genere identificadores de “issues” (Redmine, bugtrack, Github, Gitlab, Mantis, etc…) es preferible apuntar al identificador del “issue” para evitar la repetición de información y documentación. Siendo que la documentación detallada será aplicada en el sistema de planificación y rastreo. Si la confirmación corresponde a un issue con un solo identificador entonces es posible representar el commit.

### Pie
Si existe un cambio que es muy peligroso y que puede dañar diversas características (no debería si existe ortogonalidad y correcto versionado semántico) es requerido que se coloque en el pie de la confirmación, el cual consiste en una línea en blanco después del cuerpo del mensaje.
  
### Técnica a usar. GIT FLOW
  
- Rama de producción: Main
- Rama de desarrollo: Develop
- Rama de requerimiento: Feacture/(nombre del requerimiento)
- Rama de solución de errores: hotfix
- Rama de lanzamiento: Releace/0.0.0

