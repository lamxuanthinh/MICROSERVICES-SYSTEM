CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    fullname  varchar(100) NOT NULL,
    phone int(11) NOT NULL,
    adress  varchar(100) NOT NULL,
);

-- Thêm dữ liệu mẫu
INSERT INTO users (username, email, fullname, phone, adress) VALUES
    ('user1', 'user1@example.com', 'User One', 1234567890, '123 Main St'),
    ('user2', 'user2@example.com', 'User Two', 9876543210, '456 Elm St'),
    ('user3', 'user3@example.com', 'User Three', 5555555555, '789 Oak St');