# Points in region

Install Codeignitor 3  - https://www.codeigniter.com/download

## Import data

Import **import_data.sql** into your database to create the data table.

## Upload files

Upload **Pointsinregion.php** to **application/controllers/Pointsinregion.php**

Upload **Pointsinregion_model.php** to **application/models/Pointsinregion_model.php**

Upload **pointsinregion.php** to **application/views/pointsinregion.php**

## Update files

1) application/config/routes.php

Add,

// api
$route['pointsinregion'] = 'pointsinregion/index';

2) application/config/autoload.php

$autoload['libraries'] = array('database');

3) application/config/database.php

Add your database details

