DROP DATABASE IF EXISTS yeticave; /* удаляет db yeticave, если она существует */

CREATE DATABASE yeticave CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE yeticave;

CREATE TABLE categories(
                        id_categories INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                        title VARCHAR(13), 
                        character_code VARCHAR(13) UNIQUE /* добавил UNIQUE, т.е. уникальность значения */
                        );

CREATE TABLE users(
                    id_users INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                    date_registration TIMESTAMP DEFAULT CURRENT_TIMESTAMP, /* добавил тип TIMESTAMP и DEFAULT CURRENT_TIMESTAMP 
                    теперь тип TIMESTAMP и по умолчанию текущая дата в формате TIMESTAMP (?) */
                    email_users VARCHAR(128) NOT NULL UNIQUE, /* только уникальный */
                    nickname_users VARCHAR(50)) NOT NULL UNIQUE,  /* только уникальный */
                    passwords_users CHAR(60), /* https://habr.com/ru/post/210760/, https://habr.com/ru/post/130965/ */
                    contacts_users TEXT
                    -- users_lot_id INT, 
                    -- users_bid_id INT
                    );

CREATE TABLE lots(
                id_lots INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,/* добавил тип TIMESTAMP и DEFAULT CURRENT_TIMESTAMP 
                теперь тип TIMESTAMP и по умолчанию текущая дата в формате TIMESTAMP (?) */ 
                title_lot VARCHAR(256), 
                description TEXT, 
                image VARCHAR(256), 
                starting_price FLOAT, 
                date_completion_lot DATE,
                rate_step INT, 
                -- author_id INT, 
                -- winner_id INT, 
                -- categories_id TINYINT
                );
                
CREATE TABLE bids(
                id_bids INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                date_placement DATETIME, 
                price_desired FLOAT, 
                -- user_id_bid INT, 
                -- lot_id INT
                );
