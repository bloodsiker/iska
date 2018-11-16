<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Achievement
{
    /**
     * @param $id
     *
     * @return mixed
     */
    public static function getAchievementById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM achievement WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $alias
     *
     * @return mixed
     */
    public static function getAchievementByAlias($alias)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM achievement WHERE alias = :alias';

        $result = $db->prepare($sql);
        $result->bindParam(':alias', $alias, PDO::PARAM_STR);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }


    /**
     * @param string $category
     *
     * @return array
     */
    public static function getCategoryList($category = 'international')
    {
        $db = MySQL::getConnection();

        $sql = "SELECT * FROM achievement WHERE category = :category ORDER BY id ASC";

        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_STR);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @param $category
     * @param $name
     * @param $alias
     *
     * @return bool
     */
    public static function createCategory($category, $name, $alias)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO achievement '
            . '(category, title, alias)'
            . 'VALUES '
            . '(:category, :title, :alias)';

        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_STR);
        $result->bindParam(':title', $name, PDO::PARAM_STR);
        $result->bindParam(':alias', $alias, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * @param $id
     * @param $text
     * @return bool
     */
    public static function updateAchievementById($id, $title, $text)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE achievement
            SET
                title = :title,
                text = :text
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        $result->bindParam(':text', $text, PDO::PARAM_STR);
        return $result->execute();
    }


    /**
     * @param $id
     * @return bool
     */
    public static function deleteCategoryById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM achievement WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}