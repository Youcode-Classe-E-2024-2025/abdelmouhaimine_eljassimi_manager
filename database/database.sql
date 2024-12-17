
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
    isbn VARCHAR(20) UNIQUE NOT NULL,
    cover_url VARCHAR(50)
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


INSERT INTO Books (title, description, rating, cover_url, isbn) VALUES
('Control Your Mind and Master Your Feelings', 'A book to help break overthinking and master emotions.', ROUND(RAND()*5, 1), 'url_to_image_control_your_mind', '1234567890'),
('How to Win Friends and Influence People', 'Classic Dale Carnegie book on improving interpersonal skills.', ROUND(RAND()*5, 1), 'url_to_image_how_to_win_friends', '2345678901'),
('Harry Potter and the Philosopher\'s Stone', 'The first book in the famous Harry Potter series.', ROUND(RAND()*5, 1), 'url_to_image_harry_potter', '3456789012'),
('The Alchemist', 'A novel by Paulo Coelho about following your dreams.', ROUND(RAND()*5, 1), 'url_to_image_the_alchemist', '4567890123'),
('The Secret', 'A self-help book focused on the law of attraction.', ROUND(RAND()*5, 1), 'url_to_image_the_secret', '5678901234'),
('Think and Grow Rich', 'A classic motivational book for personal success.', ROUND(RAND()*5, 1), 'url_to_image_think_and_grow_rich', '6789012345'),
('The Lock and Key Library', 'A collection of mystery and suspense stories.', ROUND(RAND()*5, 1), 'url_to_image_lock_and_key_library', '7890123456'),
('Moral Reflections', 'A historical text focusing on morals and ethics.', ROUND(RAND()*5, 1), 'url_to_image_moral_reflections', '8901234567'),
('The Prairie Shrine', 'A story by Robert J. Horton.', ROUND(RAND()*5, 1), 'url_to_image_prairie_shrine', '9012345678'),
('Tolstoy the Man', 'Biography of Tolstoy.', ROUND(RAND()*5, 1), 'url_to_image_tolstoy_the_man', '0123456789'),
('The Edge of Fear', 'A story by A. Conan Doyle.', ROUND(RAND()*5, 1), 'url_to_image_edge_of_fear', '1123456789'),
('Gitanjali and Fruit-Gathering', 'A poetic book by Rabindranath Tagore.', ROUND(RAND()*5, 1), 'url_to_image_gitanjali', '2123456789');




INSERT INTO book_authors (book_id, author_id) VALUES(1, 2),(2, 2);
