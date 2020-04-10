USE CMS;

CREATE TABLE authors (
    email VARCHAR(128) NOT NULL PRIMARY KEY,
    pass_hash VARCHAR(255) NOT NULL,
    firstname VARCHAR(38) NOT NULL,
    lastname VARCHAR(38) NOT NULL,
    biography TEXT NOT NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO authors(email, pass_hash, firstname, lastname, biography) VALUES ("simmi08979@gmail.com","$2y$10$2FHkPSjATQa/.Wc7TU8Z3e3LfcDqbLTqo6s3EhIIVFejgjhfoSjRK","sapinder","bhullar", "student in cambrian college");