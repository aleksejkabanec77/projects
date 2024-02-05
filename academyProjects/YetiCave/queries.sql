/*
* Вставка запросов в таблицу catalog
*/
INSERT INTO catalog (title, character_code) VALUES ('', '');
/*
* Вставка запросов в таблицу user
*/
INSERT INTO user (user_email, user_nickname, user_password, user_contact) 
VALUES ('', '', '', '');
/*
* Вставка запросов в таблицу lot
*/
INSERT INTO lot (lot_title, description, image_addr, starting_price, completion_date, rate_step, 
					id_catalog, id_user) 
VALUES ('Маска Oakley Canopy', 
		'описание_6 Маска Oakley Canopy', 
		'img/lot-6.jpg', '5400', '2024-04-07', '10', '6', '6');
/*
* Вставка запросов в таблицу bid
*/
INSERT INTO bid (price, id_user, id_lot) 
VALUES ('5600.00', '9', '7');
