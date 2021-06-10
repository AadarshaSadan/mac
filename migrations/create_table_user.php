<?php

return "

CREATE TABLE IF NOT EXIST user (

    id int primary key AUTO_INCREMENT,
    email varchar(40),
    password varchar(200),
    name varchar(50),
    created_at datetime
    

);

"


?>