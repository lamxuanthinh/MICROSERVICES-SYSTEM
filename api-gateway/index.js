const express = require("express");
const { createProxyMiddleware } = require("http-proxy-middleware");

const app = express();
const port = 3000;

const {
  ORDERS_API_URL,
  PRODUCTS_API_URL,
  USERS_API_URL,
  CART_API_URL,
} = require("./URLs");

const optionsProducts = {
  target: PRODUCTS_API_URL,
  changeOrigin: true,
  logger: console,
};

const optionsOrders = {
  target: ORDERS_API_URL,
  changeOrigin: true,
  logger: console,
};

const optionsUsers = {
  target: USERS_API_URL,
  changeOrigin: true,
  logger: console,
};

const optionsCars = {
  target: CART_API_URL,
  changeOrigin: true,
  logger: console,
};

const productsProxy = createProxyMiddleware(optionsProducts);
const ordersProxy = createProxyMiddleware(optionsOrders);
const usersProxy = createProxyMiddleware(optionsUsers);
const carsProxy = createProxyMiddleware(optionsCars);

app.get("/", (req, res) => res.send("Hello Gateway API"));
app.get("/orders", ordersProxy);
app.get("/products", productsProxy);
app.get("/users", usersProxy);
app.get("/users", carsProxy);

app.listen(port, () => console.log(`Example app listening on port ${port}!`));
