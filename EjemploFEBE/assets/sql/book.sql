CREATE DATABASE book;

USE book;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    available TINYINT(1) DEFAULT 1
);

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT NOT NULL,
    user_name VARCHAR(255) NOT NULL,
    FOREIGN KEY (book_id) REFERENCES books(id)
);


INSERT INTO books (title, author) VALUES
('Cien Años de Soledad', 'Gabriel García Márquez'),
('1984', 'George Orwell'),
('El Gran Gatsby', 'F. Scott Fitzgerald');