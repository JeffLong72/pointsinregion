# Points in region

Install Codeignitor 3  - https://www.codeigniter.com/download

## Import data

Import **import_data.sql** into your database to create the data table.

## Upload files

Upload **Pointsinregion.php** to **application/controllers/Pointsinregion.php**

Upload **Pointsinregion_model.php** to **application/models/Pointsinregion_model.php**

Upload **pointsinregion.php** to **application/views/pointsinregion.php**

## Update files

**application/config/routes.php**

Add,

// api
$route['pointsinregion'] = 'pointsinregion/index';

**application/config/autoload.php**

$autoload['libraries'] = array('database');

**application/config/database.php**

Add your database details

## View API url

http://localhost/index.php/pointsinregion

