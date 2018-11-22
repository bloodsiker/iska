<?php
/**
 * Created by PhpStorm.
 * User: ovsiichuk
 * Date: 22.11.18
 * Time: 17:33
 */

namespace App\app\Services;

use App\app\Models\Visit;

class VisitAnalytics
{
    /**
     * @return array
     *
     * @throws \Exception
     */
    public function getStatistics()
    {
//        $now = $this->getNow()->format('Y-m-d');

        return Visit::getStatisticsByDateVisit();
    }

    /**
     * @throws \Exception
     */
    public function checkVisit()
    {
        $now = $this->getNow()->format('Y-m-d');
        $clientIp = $this->getIp();
        $options['dates'] = $now;
        $options['ip'] = $clientIp;

        if (!Visit::findDateVisit($now)) {
            $options['views'] = 1;
            $options['uniq_visit'] = 1;
            Visit::addDateVisit($options);
            Visit::addDateVisitIp($options);
        } else {
            $checkIp = Visit::findIpClientDateVisit($now, $clientIp);
            if (!$checkIp) {
                Visit::incViewsAndUniqVisit($now);
                Visit::addDateVisitIp($options);
            } else {
                Visit::incViews($now);
            }
        }
    }

    /**
     * @return int
     */
    private function getIp()
    {
        $client  = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : null;
        $forward = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : null;

        if ($client && filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif ($forward && filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return ip2long($ip);
    }

    /**
     * @return \DateTime
     *
     * @throws \Exception
     */
    private function getNow()
    {
        $now = new \DateTime('now');
        $second = $now->format('s');
        $now->add(new \DateInterval('PT'.(60-$second).'S'));

        return $now;
    }
}