/*
* удаляет db YetiCaveDB, если она существует
*/
DROP DATABASE IF EXISTS YetiCaveDB;
/* 
* создаем базу данных и указываем кодировку
*/
CREATE DATABASE YetiCaveDB CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/*
* выбираем нашу базу данных
*/
USE YetiCaveDB;
/* 
* Таблица меню (главная)
*/
CREATE TABLE catalog(
                        catalog_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                        title VARCHAR(128) NOT NULL, 
                        character_code VARCHAR(128) NOT NULL UNIQUE -- UNIQUE (только уникальный)						
						);
/*
* Таблица пользователей (главная)
*/
CREATE TABLE user(
                    user_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                    /*
                    * по умолчанию текущая дата в формате TIMESTAMP
                    */
                    registry_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
                    user_email VARCHAR(128) NOT NULL UNIQUE, -- только уникальный
                    user_nickname VARCHAR(50) NOT NULL UNIQUE, -- только уникальный
                    /*
                    * https://habr.com/ru/post/210760/, https://habr.com/ru/post/130965/
                    */
                    user_password CHAR(60) NOT NULL, 
                    user_contact VARCHAR(128)
                    );
/*
* Таблица лотов
*/                                        
CREATE TABLE lot(
                lot_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                 /*
                 * по умолчанию текущая дата в формате TIMESTAMP
                 */                
                creation_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
                lot_title VARCHAR(128) NOT NULL, -- название лота
                description VARCHAR(256) NOT NULL, -- описание лота
                image_addr VARCHAR(256) NOT NULL, -- адрес картинки 
                /*
                * https://stackoverflow.com/questions/4483540/show-a-number-to-two-decimal-places
                * https://stackoverflow.com/questions/12706519/php-float-with-2-decimal-places-00
                */
                starting_price DECIMAL(8, 2) NOT NULL, -- стартовая цена FLOAT
                completion_date DATETIME NOT NULL, -- дата завершения лота (тип DATETIME)
                rate_step INT NOT NULL, -- шаг ставки 
                id_catalog INT NOT NULL, -- категория лота, поступает id таблицы catalog
                id_user INT NOT NULL, -- пользователь создавший лот поступает id таблицы user
                --winner_id INT, -- выигравшая ставка - id таблицы user УДАЛИЛ, а если нет ставки?
                FOREIGN KEY (id_catalog) REFERENCES catalog(catalog_id),
                FOREIGN KEY (id_user) REFERENCES user(user_id), 
                --FOREIGN KEY (winner_id) REFERENCES user(user_id)
                );
/*
* Таблица ставок
*/                
CREATE TABLE bid(
                bid_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                /*
                * по умолчанию текущая дата в формате TIMESTAMP
                */                
                placement_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,  
                price DECIMAL(8, 2) NOT NULL, -- желаемая цена 
                id_user INT NOT NULL, -- пользователь создавший ставку поступает id с таблицы user
                id_lot INT NOT NULL, -- лот к которому относится ставка поступает id с таблицы lot 
                FOREIGN KEY (id_user) REFERENCES user(user_id), 
                FOREIGN KEY (id_lot) REFERENCES lot(lot_id)
                );
