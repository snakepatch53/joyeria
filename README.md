# 📝 RESUMEN DE LA APLICACION WEB

## 📋 DATOS GENERALES

<ul>
  <li><b>Cliente:</b> Joyeria "El sol"</li>
  <li><b>Fecha de inicio:</b> 📅 01/07/2023</li>
  <li><b>Fecha de entrega:</b> 📅 00/00/0000</li>
  <li><b>Estado:</b> 🚧 En desarrollo</li>
  <li><b>Version:</b> 🚀 1.0.0</li>
</ul>

## 📋 DESCRIPCION

<p>
  🕹️ La aplicación web ha sido diseñada específicamente para la Joyeria "El sol". Su propósito principal es proporcionar sus productos y servicios, además de ofrecer una funcionalidad especial para la gestión de compras.
  <br>
  <br>
  💻 La aplicación web ha sido desarrollada por Ideasoft utilizando diversas tecnologías, incluyendo PHP, HTML, JS, CSS, Apache, Raact y MySQL. Se ha creado un panel de administración para la gestión y actualización de la información de la página web de manera fácil e intuitiva.
  <br>
  <br>
  📆 La funcionalidad de la web permite a los clientes gestionar un carrito de compras, lo que hace que el proceso sea más rápido y fácil.
  <br>
  <br>
  🤝 La aplicación web es de código abierto y su uso es gratuito para cualquier persona o entidad que desee utilizarla. La aplicación puede ser modificada y distribuida libremente, siempre y cuando se reconozca a Ideasoft como el desarrollador original de la aplicación.
</p>

## 📝 LICENCIA

<p>
  📝 Licencia de Código Abierto de la Aplicación Web desarrollada por Ideasoft para la Joyeria "El sol" 🔷
  <br>
  <br>
  Esta aplicación web es de código abierto y su uso está permitido a cualquier persona o entidad que desee utilizarla. Cualquier persona o entidad que desee utilizar esta aplicación web puede hacerlo de forma gratuita, sin limitaciones de uso, distribución o modificación, siempre y cuando se cumplan las siguientes condiciones:
  <br>
  <ol>
    <li>🙏 Se debe reconocer a Ideasoft como el desarrollador original de la aplicación.</li>
    <li>🛠️ Cualquier modificación realizada a la aplicación debe ser documentada y se debe proporcionar una notificación de los cambios realizados.</li>
    <li>🤝 Si se desea distribuir la aplicación o cualquier parte de ella, se debe hacer bajo los mismos términos y condiciones que se mencionan en esta licencia.</li>
  </ol>
  <br>
  La aplicación web desarrollada por Ideasoft para la joyeria "El sol" se proporciona "tal cual" y sin garantías de ningún tipo, ya sean expresas o implícitas, incluidas, entre otras, las garantías de comercialización, adecuación para un propósito particular y no infracción de derechos de terceros. En ningún caso, Ideasoft será responsable por ningún daño directo, indirecto, incidental, especial o consecuencial que surja de, o en relación con, el uso o la incapacidad de utilizar esta aplicación web.
  <br>
  <br>
  En resumen, esta aplicación web es de código abierto y puede ser utilizada y modificada libremente por cualquier persona o entidad. Ideasoft no ofrece garantías y no se hace responsable de ningún daño que pueda surgir del uso de esta aplicación web. Si decides utilizar esta aplicación web, aceptas los términos y condiciones de esta licencia. 🤗
</p>

# 📦 DOCUMENTACION DE INSTALACION

## ⚙️ INSTALACION EN LOCAL AUTOMATICA CON .PS1

Ejecutalo con powershell
<a href="./src/assets/install_win.rar">Descargar archivo 📥</a>

## 📄 VARIABLES DE ENTORNO

Crea el archivo <b><i>.env</i></b> en la raiz del proyecto y configuralo

```env
  # PROJECT
  HTTP_DOMAIN = {{YOUR_DOMAIN}}

  # MYSQLI
  DB_HOST = {{YOUR_DB_HOST}}
  DB_USER = {{YOUR_DB_USER}}
  DB_PASS = {{YOUR_DB_PASS}}
  DB_NAME = {{YOUR_DB_NAME}}
  DB_PORT =  {{YOUR_DB_PORT}}
```

## 🐬 MYSQL

Crea la base de datos

```sql
  CREATE DATABASE {{YOUR_DB_NAME}};
```

-   Asegurate de que el nombre de la base de datos sea el mismo que el que usas en el archivo .env
-   Si estas en CPANEL tendras que crearla con ayuda de la interfaz grafica.

### 🛠 CONFIGURACION

Luego puedes usar el servicio de configuración para crear las tablas y los datos inciales:

```http
  {{YOUR_DOMAIN}}/configuration
```

para generar la base de datos y las tablas.
Luego es importante que desabilites el servicio de configuración para que no se sobreescriban los datos.

## 🪶 APACHE

Crea el archivo <b><i>.htaccess</i></b> en la raiz del proyecto y configuralo

```htaccess
  RewriteEngine On
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteRule . index.php [L]

  # Denegar el acceso a los directorios
  Options -Indexes

  <FilesMatch "\.(php|html?)$">
    Order Deny,Allow
    Deny from all
  </FilesMatch>
  <Files "index.php">
    Order Allow,Deny
    Allow from all
  </Files>
```

#### 🛠 En caso de que tu proyecto ya este funcionando con un dominio y quieras usar _https_, puedes agregar esta configuracion en _htaccess_

```htaccess
  RewriteEngine On
  RewriteCond %{HTTPS} !=on
  RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301,NE]
  Header always set Content-Security-Policy "upgrade-insecure-requests;"
```

## 🚪 LOGIN

Para abrir el login puedes presionar la combinacion de teclas " <b><i>CTRL + .</i></b> " o puedes ir a la siguiente ruta

```http
  {{YOUR_DOMAIN}}/panel/login
```

Para iniciar sesion por primera vez usa los siguientes credenciales

```txt
  USUARIO: admin
  CONTRASEÑA: admin
```
