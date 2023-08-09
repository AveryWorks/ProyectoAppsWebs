const mysql = require('mysql');

const connection = mysql.createConnection({
  host: 'bl5kioqvakcwe5ondzsl-mysql.services.clever-cloud.com',
  user: 'uxedxshandegzmdk',
  password: 'ZaEy1j1xwsmA4Im2Q3gx',
  database: 'bl5kioqvakcwe5ondzsl',
  port: 3306,
});

// Establecer la conexión
connection.connect((error) => {
  if (error) {
    console.error('Error de conexión: ', error);
    return;
  }
  
  console.log('Conexión exitosa a la base de datos.');

  // Realizar operaciones en la base de datos aquí

  // Cerrar la conexión cuando hayas terminado
  connection.end();
});

/*Este ejemplo utiliza el módulo mysql de Node.js para establecer la conexión a la base de datos. Asegúrate de instalar el módulo mysql en tu proyecto antes de ejecutar el código:

bash

comando: npm install mysql
*/

