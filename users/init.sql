-- Tạo bảng "users"
CREATE TABLE users (
    id serial PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    fullname VARCHAR(100) NOT NULL,
    phone INTEGER NOT NULL,
    address VARCHAR(100) NOT NULL
);

-- Chèn dữ liệu ban đầu
INSERT INTO users (username, email, fullname, phone, address)
VALUES ('user1', 'user1@example.com', 'User One', 123456, '123 Main St'),
       ('user2', 'user2@example.com', 'User Two', 789012, '456 Elm St'),
        ('user3', 'user3@example.com', 'User Three', 5555555555, '789 Oak St');
