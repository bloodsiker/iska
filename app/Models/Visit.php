<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Visit
{

    /**
     * @param $dates
     *
     * @return array
     */
    public static function getStatisticsByDateVisit()
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM visits ORDER BY dates DESC LIMIT 10';

        $result = $db->prepare($sql);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $dates
     *
     * @return mixed
     */
    public static function findDateVisit($dates)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM visits WHERE dates = :dates LIMIT 1';

        $result = $db->prepare($sql);
        $result->bindParam(':dates', $dates, PDO::PARAM_STR);
        $result->execute();

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $options
     *
     * @return bool
     */
    public static function addDateVisit($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO visits '
            . '(dates, views, uniq_visit)'
            . 'VALUES '
            . '(:dates, :views, :uniq_visit)';

        $result = $db->prepare($sql);
        $result->bindParam(':dates', $options['dates'], PDO::PARAM_STR);
        $result->bindParam(':views', $options['views'], PDO::PARAM_INT);
        $result->bindParam(':uniq_visit', $options['uniq_visit'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * @param $options
     *
     * @return bool
     */
    public static function addDateVisitIp($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO visits_ip '
            . '(dates, ip, ip2long)'
            . 'VALUES '
            . '(:dates, :ip, :ip2long)';

        $result = $db->prepare($sql);
        $result->bindParam(':dates', $options['dates'], PDO::PARAM_STR);
        $result->bindParam(':ip', $options['ip'], PDO::PARAM_STR);
        $result->bindParam(':ip2long', $options['ip2long'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * @param string $dates
     * @param int    $ip2long
     *
     * @return mixed
     */
    public static function findIpClientDateVisit($dates, $ip2long)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM visits_ip WHERE dates = :dates AND ip2long = :ip2long LIMIT 1';

        $result = $db->prepare($sql);
        $result->bindParam(':dates', $dates, PDO::PARAM_STR);
        $result->bindParam(':ip2long', $ip2long, PDO::PARAM_INT);
        $result->execute();

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $dates
     * @return bool
     */
    public static function incViewsAndUniqVisit($dates)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE visits
            SET
                views = views + 1,
                uniq_visit = uniq_visit + 1
            WHERE dates = :dates";

        $result = $db->prepare($sql);
        $result->bindParam(':dates', $dates, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * @param $dates
     * @return bool
     */
    public static function incViews($dates)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE visits
            SET
                views = views + 1
            WHERE dates = :dates";

        $result = $db->prepare($sql);
        $result->bindParam(':dates', $dates, PDO::PARAM_STR);
        return $result->execute();
    }
}