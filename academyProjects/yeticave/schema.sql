DROP DATABASE IF EXISTS yeticave; /* удаляет db yeticave, если она существует */

CREATE DATABASE yeticave CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE yeticave;
/* 
* Таблица меню, главная таблица
*/
CREATE TABLE categories(
                        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                        title VARCHAR(128), 
                        character_code VARCHAR(128) UNIQUE /* добавил UNIQUE, т.е. уникальность значения */
                        );
/*
* Таблица пользователей, главная таблица
*/
CREATE TABLE users(
                    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                    date_registration TIMESTAMP DEFAULT CURRENT_TIMESTAMP, /* добавил тип TIMESTAMP и DEFAULT CURRENT_TIMESTAMP 
                    теперь тип TIMESTAMP и по умолчанию текущая дата в формате TIMESTAMP (?) */
                    email_users VARCHAR(128) NOT NULL UNIQUE, /* только уникальный */
                    nickname_users VARCHAR(50) NOT NULL UNIQUE,  /* только уникальный */
                    passwords_users CHAR(60), /* https://habr.com/ru/post/210760/, https://habr.com/ru/post/130965/ */
                    contacts_users TEXT
                    );
/*
* Таблица созданых лотов, дочерняя таблица
*/
CREATE TABLE lots(
                id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP, /* добавил тип TIMESTAMP и DEFAULT CURRENT_TIMESTAMP 
                теперь тип TIMESTAMP и по умолчанию текущая дата в формате TIMESTAMP (?) */ 
                title_lot VARCHAR(256), /* название лота */
                description TEXT, /* описание лота */
                image VARCHAR(256), /* адрес картинки */
                starting_price FLOAT, /* стартовая цена */
                date_completion_lot DATETIME NOT NULL,  /* дата завершения лота (тип DATETIME) */
                rate_step INT, /* шаг ставки */
                categories_id INT, /* категория лота, поступает id таблицы categories */
                users_id INT, /* пользователь создавший лот поступает id таблицы users */
                winner_id INT, /* пользователь сделавший более высокую ставку id таблицы users */
                FOREIGN KEY (categories_id) REFERENCES categories(id),
                FOREIGN KEY (users_id) REFERENCES users(id), 
                FOREIGN KEY (winner_id) REFERENCES users(id)
                );
/*
* Таблица ставок, дочерняя таблица
*/                
CREATE TABLE bids(
                id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                date_placement TIMESTAMP DEFAULT CURRENT_TIMESTAMP, /* добавил тип TIMESTAMP и DEFAULT CURRENT_TIMESTAMP 
                теперь тип TIMESTAMP и по умолчанию текущая дата в формате TIMESTAMP (?) */, 
                price_desired FLOAT, /* желаемая цена */
                users_id INT, /* пользователь создавший ставку поступает id с таблицы users */
                lot_id INT, /* лот к которому относится ставка поступает id с таблицы lots */ 
                FOREIGN KEY (users_id) REFERENCES users(id), 
                FOREIGN KEY (lot_id) REFERENCES lots(id)
                );

