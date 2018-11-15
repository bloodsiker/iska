<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Representative
{

    public static function getAllRegions()
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM regions ORDER BY name ASC';

        $result = $db->query($sql);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getInfoRegion($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM regions WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public static function updateRepresentativeById($id, $representative)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE regions
            SET
                representative = :representative
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':representative', $representative, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function getRegionClubs($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM regions_club WHERE region_id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getEmailsRegionClubs($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM regions_emails WHERE region_id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getPhonesRegionClubs($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM regions_phones WHERE region_id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function createClub($region_id, $city, $club)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO regions_club '
            . '(city, club, region_id)'
            . 'VALUES '
            . '(:city, :club, :region_id)';

        $result = $db->prepare($sql);
        $result->bindParam(':city', $city, PDO::PARAM_STR);
        $result->bindParam(':club', $club, PDO::PARAM_STR);
        $result->bindParam(':region_id', $region_id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function createPhoneClub($region_id, $phone)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO regions_phones '
            . '(phone, region_id)'
            . 'VALUES '
            . '(:phone, :region_id)';

        $result = $db->prepare($sql);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':region_id', $region_id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function createEmailClub($region_id, $email)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO regions_emails '
            . '(email, region_id)'
            . 'VALUES '
            . '(:email, :region_id)';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':region_id', $region_id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function deleteClubById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM regions_club WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function deleteEmailById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM regions_emails WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function deletePhoneById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM regions_phones WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
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
}