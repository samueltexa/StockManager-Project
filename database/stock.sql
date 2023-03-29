SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database name: stockmanager
CREATE DATABASE stockmanager;

-- use Database: stockmanager
USE stockmanager;

-- Table structure for table brands
CREATE TABLE brands(
  brand_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  brand_name varchar(255) NOT NULL,
  brand_active int(11) NOT NULL DEFAULT 0,
  brand_status int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table structure for table categories
CREATE TABLE categories(
  categories_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  categories_name varchar(255) NOT NULL,
  categories_active int(11) NOT NULL DEFAULT 0,
  categories_status int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table structure for table orders
CREATE TABLE orders(
  order_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  order_date date NOT NULL,
  client_name varchar(255) NOT NULL,
  client_contact varchar(255) NOT NULL,
  sub_total varchar(255) NOT NULL,
  vat varchar(255) NOT NULL,
  total_amount varchar(255) NOT NULL,
  discount varchar(255) NOT NULL,
  grand_total varchar(255) NOT NULL,
  paid varchar(255) NOT NULL,
  due varchar(255) NOT NULL,
  payment_type int(11) NOT NULL,
  payment_status int(11) NOT NULL,
  order_status int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table structure for table order_item
CREATE TABLE order_item (
  order_item_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  order_id int(11) NOT NULL DEFAULT 0,
  product_id int(11) NOT NULL DEFAULT 0,
  quantity varchar(255) NOT NULL,
  rate varchar(255) NOT NULL,
  total varchar(255) NOT NULL,
  order_item_status int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table structure for table product
CREATE TABLE product(
  product_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  product_name varchar(255) NOT NULL,
  product_image text NOT NULL,
  brand_id int(11) NOT NULL,
  categories_id int(11) NOT NULL,
  quantity varchar(255) NOT NULL,
  rate varchar(255) NOT NULL,
  active int(11) NOT NULL DEFAULT 0,
  status int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table structure for table users
CREATE TABLE users(
  user_id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  UserName varchar(255) NOT NULL UNIQUE,
  Email varchar(255) NOT NULL UNIQUE,
  Address varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Table structure for table login
CREATE TABLE login(
   LoginID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT UNIQUE,
   UserName VARCHAR(45) NOT NULL,
   Password VARCHAR(45) NOT NULL
   )ENGINE=InnoDB DEFAULT CHARSET=latin1;

   -- Table structure for table location
CREATE TABLE location(
   LocationID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT UNIQUE,
   Locations VARCHAR(45) NOT NULL UNIQUE
   )ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table `locations`

INSERT INTO location(LocationID, Locations) VALUES
(1, 'Arua'),
(2, 'Gulu'),
(3, 'Hoima'),
(4, 'Jinja'),
(5, 'Kabale'),
(6, 'Kamapala'),
(7, 'Masaka'),
(8, 'Masindi'),
(9, 'Mbale'),
(10, 'Mbarara'),
(11, 'Mukono'),
(12, 'Sororti'),
(13, 'Wakiso');