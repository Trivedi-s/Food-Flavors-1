-- -- Create the database
-- CREATE DATABASE foodflavours;

-- -- Switch to the newly created database
-- USE foodflavours;

-- -- Create the 'menu' table
-- CREATE TABLE menu (
--   item_id INT PRIMARY KEY,
--   item_name VARCHAR(100),
--   item_category VARCHAR(50),
--   item_price DECIMAL(10, 2)
-- );

-- -- Create the 'cart' table
-- CREATE TABLE cart (
--   order_id INT AUTO_INCREMENT PRIMARY KEY,
--   item_id INT,
--   cust_name VARCHAR(100),
--   payment_method VARCHAR(20),
--   FOREIGN KEY (item_id) REFERENCES menu(item_id)
-- );
