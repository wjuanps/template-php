<?php

require_once 'functions.php';

$config = require_once 'config.php';

require_once 'core/Router.php';
require_once 'core/Request.php';
require_once 'core/database/Connection.php';
require_once 'core/database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make($config['database'])
);
