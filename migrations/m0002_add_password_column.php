<?php


class m0002_add_password_column
{
    public function up()
    {
        $db = \app\core\Application::$app->db;

        $db->pdo->exec("alter table users add column password varchar(512) not null");
    }

    public function down()
    {
        $db = \app\core\Application::$app->db;

        $db->pdo->exec("alter table users drop column password");
    }
}
