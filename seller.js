function myFunction() { 
window.location.href= "seller.autosave.html";}
function myFunction2() { 
window.location.href= "registrsel.html";}
// server.js
const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const PORT = process.env.PORT || 3000;

app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());

// Массив для хранения пользователей (просто для демонстрации)
const users = [];

// Рендеринг страницы регистрации
app.get('/', (req, res) => {
  res.sendFile(__dirname + '/index.html');
});

// Обработка данных формы регистрации
app.post('/register', (req, res) => {
  const { username, password } = req.body;
  
  // Добавляем пользователя в массив (здесь должна быть логика добавления в базу данных)
  users.push({ username, password });
  
  // Перенаправляем на страницу личного кабинета
  res.redirect('/dashboard');
});

// Рендеринг страницы личного кабинета
app.get('/dashboard', (req, res) => {
  res.sendFile(__dirname + '/dashboard.html');
});

app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
