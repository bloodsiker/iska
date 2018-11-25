<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class NewsCategory
{

    public static function getCategoryListAdmin()
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM news_category ORDER BY sort DESC';

        $result = $db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function getCategoryListSite()
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM news_category WHERE is_active = 1 ORDER BY sort DESC';

        $result = $db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $type
     *
     * @return mixed
     */
    public static function getCategoryBy($type, $value)
    {
        $sql = '1 = 1';
        if ('id' == $type) {
            $sql = 'id = :value';
        } elseif ('slug' == $type) {
            $sql = 'slug = :value';
        }

        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM news_category WHERE '.$sql;

        $result = $db->prepare($sql);
        $result->bindParam(':value', $value, PDO::PARAM_STR);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $options
     *
     * @return int|string
     */
    public static function createCategory($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO news_category '
            . '(name, slug, title, sort, is_active)'
            . 'VALUES '
            . '(:name, :slug, :title, :sort, :is_active)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':slug', $options['slug'], PDO::PARAM_STR);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        $result->bindParam(':is_active', $options['is_active'], PDO::PARAM_INT);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }

    /**
     * @param $id
     * @param $options
     *
     * @return bool
     */
    public static function updateCategoryById($id, $options)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE news_category
            SET
                name = :name,
                title = :title,
                sort = :sort,
                is_active = :is_active
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        $result->bindParam(':is_active', $options['is_active'], PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * @param $status
     *
     * @return string
     */
    public static function getStatusCategory($status)
    {
        switch ($status) {
            case '1':
                return 'Активна';
                break;
            case '0':
                return 'Не активна';
                break;
        }
    }

    /**
     * @param $status
     *
     * @return string
     */
    public static function getColorNews($status)
    {
        switch ($status) {
            case '1':
                return 'status-0';
                break;
            case '0':
                return 'status-4';
                break;
        }
    }

}