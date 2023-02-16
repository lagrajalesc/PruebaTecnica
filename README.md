# PruebaTecnica

Requerimientos: PHP 8.0.25 Laralvel 9 Composer 2.5.3 postman

Descripción:
Antes de iniciar, deberá clonar este repositorio, una vez se encuentre en su equipo local,
deberá abrilo en un IDE como visual studio code, en este caso, no consideré pertienente 
conectar el proyecto con una base de datos, por lo tanto, una vez anierto el repositorio en el IDE, 
con el comando: php artisan serve. 
Podrá levantar el servidor para realizar las pruebas pertinentes

Usando postman mediante el método post, configurando correctamente los headers: 
KEY content-type VALUE spplication/json 
la ruta: http://127.0.0.1:8000/api/ejercicio1a
le permitirá calcular la cantidad de unidades defectuosas hechas por una máquina al cabo de n meses, 
asumiendo que la tasa de fallas aunmenta cada mes en un 2%, es decir, el primer mes habrá un 5% de fallas,
al segundo mes habrá un 7% de fallas, al tercer mes habrá un 9% de fallas y así, sucesivamente, de tal forma: 
tasa = (5 + 2*n)/ 100 donde n es la cantidad de meses. 

Adicionalmente, se puede obtener las fallas de un mes en curso, sólo a mitad de mes, en el caso planteado
se pide la cantidad de unidades defectusas al cabo de 7.5 meses (1 marzo - 15 de octubre).
este método recibe como argumento la variable "months" en formato json, la cual recibe número enteros y decimales, por ejemplo, 7 o 7.5

La ruta: http://127.0.0.1:8000/api/ejercicio1b
Empleando el método post, recibe como argumentos la variable en formato json: 
units la cual recibe un número entero, este retorna en formato jsonla cantidad de meses que lleva la máquina en funcionamento, adicionalmente, 
retorna el mes de año en curso en que a dicha máquina se le debe hacer mantenimiento, se tienen en cuenta los casos en que la
máquina no ha realizado ninguna unidad, y cuando esta lleva entre 0 y un mes de funcionamiento.

La ruta http://127.0.0.1:8000/api/ejercicio2
Empleando el método post, recibe como argumentos las variables en formato json: 
yeards la cual indica la cantidad de años que lleva el empleado vinculado a la compañía, sólo valores enteros.
salary la cual indica el salario devengado por el empleado. 
Este método retorna en formato json, asumiendo que un año cuenta con 360 días, la cantidad de días que lleva
el empleado duró vinculado a la compañía junto con el valor que le corresponde como liquidación por la finalización
de su contrato laboral, asumiendo que si lleva máximo un año vinculado, recibirá un mes completo de salario, 
y por los años adicionales, recibirá el salario devengado al mes adicionando las dos terceras partes de dicho salario por 
cada año adicional en que este  estuvo vinculado a la compañía de la siguiente forma: 
liquidacion = salario + n(salario * (2/3)) donde n corresponde a los años adicionales. 

La ruta http://127.0.0.1:8000/api/ejercicio3
Empleando el método post, recibe como argumento en formato json la variable
amount que hace referencia al valor del préstamo adquirido por el empleado, este método responde en formato json el 40% del valor
del préstamo.
