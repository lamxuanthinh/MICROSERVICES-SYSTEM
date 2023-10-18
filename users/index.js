const express = require('express');
const mysql = require('mysql');

const app = express();

const connection = mysql.createConnection({
  host: 'mysql', // Tên dịch vụ trong Docker Compose
  user: 'root',
  password: 'root',
  database: 'users_data', // Tên cơ sở dữ liệu
  connectTimeout: 20000
});

connection.connect(function(err) {
  if (err) {
    console.error('Error connecting to MySQL: ' + err.stack);
    return;
  }
  console.log('Connected to MySQL as id ' + connection.threadId);

  // Định nghĩa route để lấy dữ liệu từ MySQL
  app.get('/users', (req, res) => {
    const query = 'SELECT * FROM users'; // Ví dụ truy vấn SQL
    connection.query(query, function(err, results) {
      if (err) {
        console.error('Error executing query: ' + err.stack);
        res.status(500).json({ error: 'Internal Server Error' });
        return;
      }
      res.json(results);
    });
  });

  app.listen(3000, () => {
    console.log(`Users API listening on port 3000!`);
  });
});

connection.on('error', function(err) {
  console.error('MySQL Connection Error: ' + err.stack);
  process.exit(1); // Thoát ứng dụng nếu có lỗi kết nối MySQL
});
