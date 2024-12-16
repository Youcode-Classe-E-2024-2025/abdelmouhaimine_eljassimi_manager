
CREATE DATABASE IF NOT EXISTS books_manager;
USE books_manager;


CREATE TABLE actors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    status ENUM('active', 'archived') DEFAULT 'active'
);


CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) UNIQUE NOT NULL
);


CREATE TABLE actor_roles (
    actor_id INT NOT NULL,
    role_id INT NOT NULL,
    PRIMARY KEY (actor_id, role_id),
    FOREIGN KEY (actor_id) REFERENCES actors(id) ON DELETE CASCADE,
    FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE CASCADE
);


CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    isbn VARCHAR(20) UNIQUE NOT NULL
);


CREATE TABLE book_authors (
    book_id INT NOT NULL,
    author_id INT NOT NULL,
    PRIMARY KEY (book_id, author_id),
    FOREIGN KEY (book_id) REFERENCES books(id) ON DELETE CASCADE,
    FOREIGN KEY (author_id) REFERENCES actors(id) ON DELETE CASCADE
);


INSERT INTO roles (name) VALUES ('admin'),('author'),('user');


INSERT INTO actors (name, email, password, status) VALUES
('John Doe', 'john.doe@example.com', 'hashed_password_1', 'active'),
('Jane Smith', 'jane.smith@example.com', 'hashed_password_2', 'active');


INSERT INTO actor_roles (actor_id, role_id) VALUES
(1, 1),
(2, 2);


INSERT INTO books (title, description, isbn) VALUES
('Book Title 1', 'Description of Book Title 1', '1234567890'),
('Book Title 2', 'Description of Book Title 2', '9876543210');


INSERT INTO book_authors (book_id, author_id) VALUES(1, 2),(2, 2);
