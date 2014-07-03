<?php
/**
 * Main start point.
*/

require_once 'lib/autoload.php';

//Set directory where all the site data is stored as pages, users, groups, etc...
Cms\System::SetDataPath('data');

//Initializes the data directory and main settings
Cms\System::Init();

Cms\System::SetHomePage('home');

Cms\System::SetTheme('default');

$datasource = new \Cms\DBAL\DataSource;
$datasource->InitAsSQLite('system', \Cms\System::GetDataPath() . "sqlite");

Cms\System::SetDataSource($datasource);

$page = Cms\Pages::Load(Cms\Uri::GetCurrent());

//Display the page
Cms\Theme::Render($page);

?>
