USE CMS;

CREATE TABLE userauthors (
    email VARCHAR(128) NOT NULL PRIMARY KEY,
    pass_hash varchar(255) NOT NULL,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    intro TEXT NOT NULL,
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO userauthors (email, pass_hash, firstname, lastname, intro) VALUES ("simmi08979@gmail.com","$2y$10$C20HRgf3hHWIN1yjVBzxAe3JEjpXpBohQIsZ/CwGqXguD1/X1aLpa","Sapinder","Bhullar", "student in cambrian college");