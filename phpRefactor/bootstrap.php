<?php

require 'database/connection.php';

require 'database/queryBuilder.php';

return new QueryBuilder(

    Connection::Make()
);