<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Media
{
    /**
     * Добавляет новый фото-альбом
     * @param array $options <p>Массив с информацией о альбоме</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createAlbum($options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO list_album '
            . '(title, sort)'
            . 'VALUES '
            . '(:title, :sort)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }

    /**
     * Возвращает список фото-альбомов в админ-панель
     * @return array <p>Массив с товарами</p>
     */
    public static function getListAlbum($arhive = 0)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Получение и возврат результатов
        $result = $db->query("SELECT * FROM list_album WHERE archive = {$arhive} ORDER BY sort DESC");
        $albumList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $albumList[$i]['id'] = $row['id'];
            $albumList[$i]['title'] = $row['title'];
            $albumList[$i]['sort'] = $row['sort'];
            $albumList[$i]['path'] = $row['path'];
            $albumList[$i]['img'] = $row['img'];
            $i++;
        }
        return $albumList;
    }


    /**
     * @param $id
     * @param $options
     * @return bool
     */
    public static function updateAlbumById($id, $options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE list_album
            SET
                title = :title,
                sort = :sort,
                archive = :archive
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        $result->bindParam(':archive', $options['archive'], PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * @param $id
     * @param $options
     * @return bool
     */
    public static function updateAlbumPathById($id, $options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE list_album
            SET
                path = :path,
                img = :img
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':path', $options['path'], PDO::PARAM_STR);
        $result->bindParam(':img', $options['img'], PDO::PARAM_STR);
        return $result->execute();
    }


    /**
     * @param $id
     * @return mixed
     */
    public static function getAlbumById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM list_album WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }


    /**
     * @param $options
     * @return int|string
     */
    public static function createPhoto($options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO media_photo '
            . '(id_album, path, img)'
            . 'VALUES '
            . '(:id_album, :path, :img)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id_album', $options['id_album'], PDO::PARAM_INT);
        $result->bindParam(':path', $options['path'], PDO::PARAM_STR);
        $result->bindParam(':img', $options['img'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }


    /**
     * @param $id
     * @return array
     */
    public static function getPhotoByListAlbum($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Получение и возврат результатов
        $result = $db->query("SELECT * FROM media_photo WHERE id_album = $id ORDER BY id");
        $fotoList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $fotoList[$i]['id'] = $row['id'];
            $fotoList[$i]['path'] = $row['path'];
            $fotoList[$i]['img'] = $row['img'];
            $i++;
        }
        return $fotoList;
    }


    /**
     * @param $id
     * @return bool
     */
    public static function deleteAlbumById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM list_album WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * @param $id
     * @return bool
     */
    public static function deletePhotoById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM media_photo WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }



    /**
     * Добавляет новое видео
     * @param array $options <p>Массив с информацией о видео</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createVideo($options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO media_video '
            . '(title, sort, url)'
            . 'VALUES '
            . '(:title, :sort, :url)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        $result->bindParam(':url', $options['url'], PDO::PARAM_STR);
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
        return 0;
    }


    /**
     * @param $id
     * @param $options
     * @return bool
     */
    public static function updateVideoById($id, $options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE media_video
            SET
                title = :title,
                url = :url,
                sort = :sort,
                archive = :archive
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':url', $options['url'], PDO::PARAM_STR);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        $result->bindParam(':archive', $options['archive'], PDO::PARAM_INT);
        return $result->execute();
    }



    /**
     * @param $id
     * @param $options
     * @return bool
     */
    public static function updateVideothById($id, $options)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE media_video
            SET
                path = :path,
                img = :img
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':path', $options['path'], PDO::PARAM_STR);
        $result->bindParam(':img', $options['img'], PDO::PARAM_STR);
        return $result->execute();
    }


    /**
     * Возвращает список фото-альбомов в админ-панель
     * @return array <p>Массив с товарами</p>
     */
    public static function getVideoList($arhive = 0)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Получение и возврат результатов
        $result = $db->query("SELECT * FROM media_video WHERE archive = {$arhive} ORDER BY sort DESC");
        $albumList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $albumList[$i]['id'] = $row['id'];
            $albumList[$i]['title'] = $row['title'];
            $albumList[$i]['url'] = $row['url'];
            $albumList[$i]['sort'] = $row['sort'];
            $albumList[$i]['path'] = $row['path'];
            $albumList[$i]['img'] = $row['img'];
            $i++;
        }
        return $albumList;
    }


    /**
     * @param $id
     * @return mixed
     */
    public static function getVideoById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM media_video WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }


    /**
     * @param $id
     * @return bool
     */
    public static function deleteVideoById($id)
    {
        // Соединение с БД
        $db = MySQL::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM media_video WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

}