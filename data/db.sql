--
-- Base de données : `db@products`
--


CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `ram` int(11) NOT NULL,
  `disk_capacity` int(11) NOT NULL,
  `disk_type` varchar(5) NOT NULL,
  `rating` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `brand`, `ram`, `disk_capacity`, `disk_type`, `rating`, `image`, `price`, `description`) VALUES
(3, 'HP Elitebook', 'HP', 12, 1000, 'HDD', 1, './upload/products/6.jpg', 929.99, ''),
(4, 'MacBook Pro A1398 Retina 2014', 'Apple', 12, 1000, 'HDD', 5, './upload/products/7.jpg', 1699.99, ''),
(5, 'Microsoft Surface Pro 7', 'Microsoft', 12, 1000, 'HDD', 2, './upload/products/8.jpg', 1099.99, ''),
(6, 'Lenovo ThinkPad X380', 'Lenovo', 12, 1000, 'HDD', 4, './upload/products/9.jpg', 929.99, ''),
(7, 'Lenovo ThinkCentre M910s', 'Lenovo', 12, 1000, 'HDD', 4, './upload/products/10.jpg', 1029.99, ''),
(8, 'Lenovo ThinkCentre M800Z All-in-One', 'Lenovo', 12, 1000, 'HDD', 2, './upload/products/11.jpg', 1229.99, ''),
(9, 'ASUS ROG Strix', 'Asus', 12, 1000, 'HDD', 2, './upload/products/12.jpg', 929.99, '');

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;