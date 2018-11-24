<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class News
{

    const SHOW_BY_DEFAULT = 10;

    /**
     * @return array
     */
    public static function getLastNewsIndex()
    {
        $db = MySQL::getConnection();

        $sql = "SELECT * FROM news WHERE status = '1' ORDER BY id DESC LIMIT 4";

        $result = $db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @return array
     */
    public static function getNewsListAdmin()
    {
        $db = MySQL::getConnection();

        $sql = "SELECT * FROM news ORDER BY id DESC";
        $result = $db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param string $category
     * @param int $page
     *
     * @return array
     */
    public static function getNewsListSite($category, $page = 1)
    {
        $limit = self::SHOW_BY_DEFAULT;
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = MySQL::getConnection();

        $sql = "SELECT * FROM news 
                WHERE category = :category 
                AND status = '1' 
                ORDER BY id DESC 
                LIMIT :limit OFFSET :offset";
        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_STR);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $category
     *
     * @return mixed
     */
    public static function getCountNewsByCategory($category)
    {
        $db = MySQL::getConnection();

        $sql = "SELECT count(id) as count FROM news WHERE category = :category AND status = '1' ORDER BY id DESC";
        $result = $db->prepare($sql);
        $result->bindParam(':category', $category, PDO::PARAM_STR);
        $result->execute();
        $count = $result->fetch(PDO::FETCH_ASSOC);
        return $count['count'];
    }


    /**
     * @param $id
     *
     * @return mixed
     */
    public static function getNewsById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM news WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }


    /**
     * @param $options
     *
     * @return int|string
     */
    public static function createNews($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO news '
            . '(category, slug, title, description, text, status, data_create)'
            . 'VALUES '
            . '(:category, :slug, :title, :description, :text, :status, :data_create)';

        $result = $db->prepare($sql);
        $result->bindParam(':category', $options['category'], PDO::PARAM_STR);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':slug', $options['slug'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':text', $options['text'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':data_create', $options['data_create'], PDO::PARAM_STR);
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
    public static function updateNewsById($id, $options)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE news
            SET
                category = :category,
                title = :title,
                description = :description,
                text = :text,
                status = :status,
                data_create = :data_create
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':category', $options['category'], PDO::PARAM_STR);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':text', $options['text'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':data_create', $options['data_create'], PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * @param $id
     * @param $path
     * @param $imgName
     *
     * @return bool
     */
    public static function updateNewsImagesById($id, $path, $imgName)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE news
            SET
                path = :path,
                img = :img
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':path', $path, PDO::PARAM_STR);
        $result->bindParam(':img', $imgName, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * @param $id
     *
     * @return bool
     */
    public static function incViewsById($id)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE news
            SET
                views = views + 1
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * @param $news_id
     * @param $path
     * @param $imgName
     *
     * @return bool
     */
    public static function createImgNews($news_id, $path, $imgName)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO news_img '
            . '(news_id, path, img) '
            . 'VALUES '
            . '(:news_id, :path, :img) ';

        $result = $db->prepare($sql);
        $result->bindParam(':news_id', $news_id, PDO::PARAM_INT);
        $result->bindParam(':path', $path, PDO::PARAM_STR);
        $result->bindParam(':img', $imgName, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * @param $news_id
     *
     * @return array
     */
    public static function getImgNewsList($news_id)
    {
        $db = MySQL::getConnection();

        $sql = "SELECT * FROM news_img WHERE news_id = '$news_id' ORDER BY id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public static function getImgById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM news_img WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }


    /**
     *  Удаляем файл из дериктории
     * @param $directory
     * @param $filename
     * @return bool
     */
    public static function deletfile($directory, $filename)
    {
        // открываем директорию (получаем дескриптор директории)
        $dir = opendir(ROOT . $directory);

        // считываем содержание директории
        while(($file = readdir($dir)))
        {
            // Если это файл и он равен удаляемому ...
            if((is_file(ROOT . "$directory/$file")) && (ROOT . "$directory/$file" ==  ROOT ."$directory/$filename"))
            {
                // ...удаляем его.
                unlink(ROOT . "$directory/$file");

                // Если файла нет по запрошенному пути, возвращаем TRUE - значит файл удалён.
                if (!file_exists(ROOT . $directory."/".$filename)) {
                    return true;
                }
            }
        }
        // Закрываем дескриптор директории.
        closedir($dir);

        return true;
    }

    /**
     * @param $id
     *
     * @return bool
     */
    public static function deleteFileById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM news_img WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * @param $id
     *
     * @return bool
     */
    public static function deleteNewsById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM news WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * @param $status
     *
     * @return string
     */
    public static function getStatusNews($status)
    {
        switch ($status) {
            case '1':
                return 'Отображается';
                break;
            case '0':
                return 'Скрыта';
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

    /**
     * @param $status
     *
     * @return string
     */
    public static function getNameCategory($status)
    {
        switch ($status) {
            case 'ukrainian':
                return 'Всеукраїнські';
                break;
            case 'iska-pro':
                return 'ISKA PRO';
                break;
            case 'international':
                return 'Міжнародні';
                break;
        }
    }
}