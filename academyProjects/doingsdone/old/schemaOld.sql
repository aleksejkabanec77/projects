CREATE DATABASE doingsdone CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE doingsdone;

CREATE TABLE project(
                    id_project INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                    title_project VARCHAR(100), 
                    author_id INT
                    );
                    
CREATE TABLE task(
                id_task INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                creation_date DATETIME, 
                statuses BOOL DEFAULT NULL, 
                title_task VARCHAR(100), 
                files VARCHAR(100), 
                date_completion_task DATE, 
                author_task_id INT, 
                project_task_id INT
                );
                
CREATE TABLE users(
                    id_users INT PRIMARY KEY NOT NULL AUTO_INCREMENT, 
                    registration_date DATE, 
                    email_users VARCHAR(50), 
                    nickname_users VARCHAR(50), 
                    passwords_users VARCHAR(100)
                    );
