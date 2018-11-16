<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Media
{
    /**
     * @param $options
     *
     * @return int|string
     */
    public static function createAlbum($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO list_album '
            . '(title, sort)'
            . 'VALUES '
            . '(:title, :sort)';

        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }

    /**
     * @param int $archive
     *
     * @return array
     */
    public static function getListAlbum($archive = 0)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM list_album WHERE archive = :archive ORDER BY sort DESC';

        $result = $db->prepare($sql);
        $result->bindParam(':archive', $archive, PDO::PARAM_INT);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @param $id
     * @param $options
     *
     * @return bool
     */
    public static function updateAlbumById($id, $options)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE list_album
            SET
                title = :title,
                sort = :sort,
                archive = :archive
            WHERE id = :id";

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
     *
     * @return bool
     */
    public static function updateAlbumPathById($id, $options)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE list_album
            SET
                path = :path,
                img = :img
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':path', $options['path'], PDO::PARAM_STR);
        $result->bindParam(':img', $options['img'], PDO::PARAM_STR);
        return $result->execute();
    }


    /**
     * @param $id
     *
     * @return mixed
     */
    public static function getAlbumById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM list_album WHERE id = :id';

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
    public static function createPhoto($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO media_photo '
            . '(id_album, path, img)'
            . 'VALUES '
            . '(:id_album, :path, :img)';

        $result = $db->prepare($sql);
        $result->bindParam(':id_album', $options['id_album'], PDO::PARAM_INT);
        $result->bindParam(':path', $options['path'], PDO::PARAM_STR);
        $result->bindParam(':img', $options['img'], PDO::PARAM_STR);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }


    /**
     * @param $id
     *
     * @return array
     */
    public static function getPhotoByListAlbum($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM media_photo WHERE id_album = :id ORDER BY id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @param $id
     *
     * @return bool
     */
    public static function deleteAlbumById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM list_album WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * @param $id
     *
     * @return bool
     */
    public static function deletePhotoById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM media_photo WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * @param $options
     *
     * @return int|string
     */
    public static function createVideo($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO media_video '
            . '(title, sort, url)'
            . 'VALUES '
            . '(:title, :sort, :url)';

        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        $result->bindParam(':url', $options['url'], PDO::PARAM_STR);
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
    public static function updateVideoById($id, $options)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE media_video
            SET
                title = :title,
                url = :url,
                sort = :sort,
                archive = :archive
            WHERE id = :id";

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
     *
     * @return bool
     */
    public static function updateVideothById($id, $options)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE media_video
            SET
                path = :path,
                img = :img
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':path', $options['path'], PDO::PARAM_STR);
        $result->bindParam(':img', $options['img'], PDO::PARAM_STR);
        return $result->execute();
    }


    /**
     * @param int $archive
     *
     * @return array
     */
    public static function getVideoList($archive = 0)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM media_video WHERE archive = :archive ORDER BY sort DESC';

        $result = $db->prepare($sql);
        $result->bindParam(':archive', $archive, PDO::PARAM_INT);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @param $id
     *
     * @return mixed
     */
    public static function getVideoById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM media_video WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     *
     * @return bool
     */
    public static function deleteVideoById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM media_video WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

}