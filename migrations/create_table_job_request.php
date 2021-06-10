<?php

return "

CREATE TABLE IF NOT EXISTS job_request (

    id int primary key AUTO_INCREMENT,
    email varchar(40),
    name varchar(50),
    job_title varchar(200),
    message text,
    document_name varchar(100),
    applied_at datetime
);

"


?>