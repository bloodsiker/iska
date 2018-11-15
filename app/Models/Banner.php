<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Banner
{

    /**
     * @return mixed
     */
    public static function getBannersList()
    {
        $db = MySQL::getConnection();

        $sql = "SELECT * FROM banners WHERE status = '1' ORDER BY sort DESC LIMIT 5";
        $result = $db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @return array
     */
    public static function getBannersListAdmin()
    {
        $db = MySQL::getConnection();

        $sql = "SELECT * FROM banners ORDER BY sort DESC";
        $result = $db->prepare($sql);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * @param $id
     *
     * @return mixed
     */
    public static function getBannerById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM banners WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $options
     *
     * @return bool
     */
    public static function createBanner($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO banners '
            . '(link, text, path, img, status, sort)'
            . 'VALUES '
            . '(:link, :text, :path, :img, :status, :sort)';

        $result = $db->prepare($sql);
        $result->bindParam(':link', $options['link'], PDO::PARAM_STR);
        $result->bindParam(':text', $options['text'], PDO::PARAM_INT);
        $result->bindParam(':path', $options['path'], PDO::PARAM_STR);
        $result->bindParam(':img', $options['img'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * @param $id
     * @param $options
     *
     * @return bool
     */
    public static function updateBannerById($id, $options)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE banners
            SET
                link = :link,
                text = :text,
                status = :status,
                sort = :sort
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':link', $options['link'], PDO::PARAM_STR);
        $result->bindParam(':text', $options['text'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $result->bindParam(':sort', $options['sort'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * @param $id
     * @param $path
     * @param $imgName
     *
     * @return bool
     */
    public static function updateBannerImagesById($id, $path, $imgName)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE banners
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
    public static function deleteBannerById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM banners WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    /**
     * @param $status
     *
     * @return string
     */
    public static function getStatusBanner($status)
    {
        switch ($status) {
            case '1':
                return 'Отображен';
                break;
            case '0':
                return 'Скрыт';
                break;
        }
    }

    /**
     * @param $status
     *
     * @return string
     */
    public static function getColorBanner($status)
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