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

CREATE TABLE post (
    slug VARCHAR(128) NOT NULL PRIMARY KEY
    , title VARCHAR(255) NOT NULL
    , content TEXT
    , author VARCHAR(128) NOT NULL
    , post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    , INDEX (author)
    , FOREIGN KEY (author)
        REFERENCES userauthors (email)
);

INSERT INTO 'post' (slug, title, content, author)
VALUES ("post-a", "Online Learning", "<article><h2>Online Learning</h2><section><p>Online learning is when you take courses online instead of in a physical classroom.</p></section></article>","simmi08979@gmail.com");

