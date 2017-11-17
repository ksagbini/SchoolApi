# SchoolApi

Autor: Kevin Tellez Sagbini

RestFull Api

Recursos realizados

URL: http://{host}/SchoolApi/

Metodos

        Student (/student/):
            GET: Obtiene el listado de estudiantes
            POST: Crea un nuevo estudiante
            PUT: Actualiza un estudiantte
            DELETE: Elimina un estudiante
            Entradas: 
                - id (int): indentificacion
                - name (string): nombre
                - lastname (string): apellido
                - gender (string): genero
            Salidas:
                - status (boolean): estado de la transaccion
                - data (object): informacion a retornar [Coleccion de estudiantes]
                - message (string): se retorna la informacion del error en caso de falla en la transaccion 
            
        Teacher (/teacher/):
            GET: Obtiene el listado de profesores
            POST: Crea un nuevo profesor
            PUT: Actualiza un profesor
            DELETE: Elimina un profesor
            Entradas: 
                - id (int): indentificacion
                - name (string): nombre
                - lastname (string): apellido
                - gender (string): genero
            Salidas:
                - status (boolean): estado de la transaccion
                - data (object): informacion a retornar [Coleccion de profesores]
                - message (string): se retorna la informacion del error en caso de falla en la transaccion 
                

        Course (/course/):
            GET: Obtiene el listado de cursos
            POST: Crea un nuevo curso
            PUT: Actualiza un curso
            DELETE: Elimina un curso
            Entradas: 
                - id (int): indentificacion
                - name (string): nombre
                - desc (string): descripcion del curso
            Salidas:
                - status (boolean): estado de la transaccion
                - data (object): informacion a retornar [Coleccion de cursos]
                - message (string): se retorna la informacion del error en caso de falla en la transaccion 
                        
