/*
* Вставка запросов в таблицу user
*/
INSERT INTO user(user_email, user_nickname, user_password) 
VALUES('', '', '');
/*
* Вставка запросов в таблицу project
*/
INSERT INTO project(title, id_user) VALUES('', '');
/*
* Вставка запросов в таблицу task (DATETIME - YYYY-MM-DD hh:mm:ss | 2025-12-25 12:30:00)
*/
INSERT INTO task(status, task_title, file, completion_date, id_user, id_project) 
VALUES('', '', '', '', '', '');
