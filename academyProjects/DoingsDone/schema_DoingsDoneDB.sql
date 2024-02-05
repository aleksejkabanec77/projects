/*
* удаляет db DoingsDoneDB, если она существует
*/
DROP DATABASE IF EXISTS DoingsDoneDB;
/* 
* создаем базу данных и указываем кодировку
*/
CREATE DATABASE DoingsDoneDB CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/*
* выбираем нашу базу данных
*/
USE DoingsDoneDB;
/*
* Таблица пользователей (главная)
*/
CREATE TABLE user(
                    user_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                    registry_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
                    user_email VARCHAR(128) NOT NULL UNIQUE, 
                    user_nickname VARCHAR(50) NOT NULL UNIQUE, 
                    user_password CHAR(60) NOT NULL
                    );
/*
* Таблица проектов
*/
CREATE TABLE project(
                    project_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,        
                    title VARCHAR(128) NOT NULL, 
                    id_user INT NOT NULL, 
                    UNIQUE(title, id_user) -- юзер не может дать не уникальное название проекту
                    FOREIGN KEY (id_user) REFERENCES user(user_id)
                    );
/*
* Таблица задач
*/
CREATE TABLE task(
                task_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                creation_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, 
                status BOOL DEFAULT NULL, 
                task_title VARCHAR(128) NOT NULL, 
                file VARCHAR(128) DEFAULT NULL, -- ссылка на файл, загруженный пользователем
                completion_date DATETIME NOT NULL, 
                id_user INT NOT NULL, 
                id_project INT NOT NULL, 
                FOREIGN KEY (id_user) REFERENCES user(user_id), 
                FOREIGN KEY (id_project) REFERENCES project(project_id)
                );
/*
* Таблица связи (Многие-ко-Многим) user_project (?)
*/

/*
* Таблица связи (Многие-ко-Многим) user_task (или project_task)
*/




















