DROP DATABASE IF EXISTS doingsdone; /* удаляет db doingsdone, если она существует */

CREATE DATABASE doingsdone CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE doingsdone; 
/* 
* Главная таблица
*/
CREATE TABLE users(
                    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
                    email_users VARCHAR(50) NOT NULL UNIQUE, 
                    nickname_users VARCHAR(50) NOT NULL UNIQUE, 
                    passwords_users CHAR(60)
                    );

CREATE TABLE project(
                    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                    title_project VARCHAR(128), 
                    users_id INT, 
                    FOREIGN KEY (users_id) REFERENCES users(id)
                    );
                    
CREATE TABLE task(
                id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
                statuses BOOL DEFAULT NULL, 
                title_task VARCHAR(128), 
                files VARCHAR(100) DEFAULT NULL, /* ссылка на файл, загруженный пользователем */
                date_completion_task DATETIME NOT NULL, 
                users_id INT, 
                project_id INT, 
                FOREIGN KEY (users_id) REFERENCES users(id), 
                FOREIGN KEY (project_id) REFERENCES project(id)
                );
                
