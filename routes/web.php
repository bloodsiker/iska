<?php

return array(


    // Админ панель новости
    'admin/news/img-delete/([0-9]+)' => 'admin/AdminNews@deleteImgByNews/$1',
    'admin/news/delete/([0-9]+)' => 'admin/AdminNews@delete/$1',
    'admin/news/update/([0-9]+)' => 'admin/AdminNews@update/$1',
    'admin/news' => 'admin/AdminNews@index',

    // Админ панель медіа
    'admin/media/photo/delete-album/([0-9]+)' => 'admin/AdminMedia@deletePhotoAlbum/$1',
    'admin/media/photo/delete/([0-9]+)' => 'admin/AdminMedia@deletePhoto/$1',
    'admin/media/photo/update/([0-9]+)' => 'admin/AdminMedia@photoUpdate/$1',
    'admin/media/photo/([0-9]+)' => 'admin/AdminMedia@photoView/$1',
    'admin/media/arhive_photo' => 'admin/AdminMedia@photoArhive',
    'admin/media/photo' => 'admin/AdminMedia@photo',


    'admin/media/video/delete-video/([0-9]+)' => 'admin/AdminMedia@deleteVideo/$1',
    'admin/media/video/update/([0-9]+)' => 'admin/AdminMedia@videoUpdate/$1',
    'admin/media/arhive_video' => 'admin/AdminMedia@videoArhive',
    'admin/media/video' => 'admin/AdminMedia@video',

    // Админ панель діяльність
    'admin/federation/regions-club/([0-9]+)' => 'admin/AdminFederation@clubsInRegion/$1',
    'admin/federation/list-regions' => 'admin/AdminFederation@listRegions',
    'admin/federation/rules' => 'admin/AdminFederation@rules',
    'admin/federation/position/ajax' => 'admin/AdminFederation@ajaxPosition',
    'admin/federation/position/delete/([0-9]+)' => 'admin/AdminFederation@deletePosition/$1',
    'admin/federation/position' => 'admin/AdminFederation@position',
    'admin/federation/calendar' => 'admin/AdminFederation@calendar',
    'admin/federation/leadership' => 'admin/AdminFederation@leadership',

    // Админ панель досягнення
    'admin/achievement/international/delete/([0-9]+)' => 'admin/AdminAchievement@categoryDelete/$1',
    'admin/achievement/international/([A-Za-z0-9-]+)' => 'admin/AdminAchievement@internationalView/$1',
    'admin/achievement/international' => 'admin/AdminAchievement@international',
    'admin/achievement/personal' => 'admin/AdminAchievement@personal',

    // Админ панель дыіяльність
    'admin/activity/national_patriotic' => 'admin/AdminActivity@patriotic',
    'admin/activity/scientific1' => 'admin/AdminActivity@scientific1',
    'admin/activity/scientific' => 'admin/AdminActivity@scientific',

    'admin/setting' => 'admin/AdminSetting@setting',

    //Админ панель О компании
    'admin/history' => 'admin/AdminAbout@history',


    'admin/congratulation' => 'admin/AdminAbout@congratulation',


    // Админ панель баннера
    'admin/banner/update/([0-9]+)' => 'admin/AdminBanner@update/$1',
    'admin/banner/delete/([0-9]+)' => 'admin/AdminBanner@delete/$1',


    //Админ панель юзеры
    'admin/user/delete/([0-9]+)' => 'admin/AdminUser@delete/$1',
    'admin/user/update/([0-9]+)' => 'admin/AdminUser@update/$1',
    'admin/user' => 'admin/AdminUser@index',

    // Админ панель
    'admin/event-delete/([0-9]+)' => 'admin/Admin@eventDelete/$1',
    'admin/event-update/([0-9]+)' => 'admin/Admin@eventUpdate/$1',
    'admin/index' => 'admin/Admin@index',
    'admin/logout' => 'admin/Admin@logout',
    'admin/auth' => 'admin/Admin@auth',
    'admin' => 'admin/Admin@index',



    'news/([A-Za-z0-9-]+)/([0-9]+)' => 'News@view/$1/$2',
    'news/international' => 'News@international',
    'news/iska-pro' => 'News@iskaPro',
    'news/ukrainian' => 'News@ukrainian',

    // Медиа
    'media/photo-album' => 'Media@photoAlbum',
    'media/archive-video' => 'Media@archiveVideo',
    'media/archive-foto' => 'Media@archivePhoto',
    'media/video' => 'Media@video',
    'media/photo' => 'Media@photo',


    // Досягнення
    'achievement/international/([A-Za-z0-9-]+)' => 'Achievement@international/$1',
    'achievement/personal' => 'Achievement@personal',

    // Діяльність
    'activity/national_patriotic' => 'Activity@nacPatriotic',
    'activity/scientific' => 'Activity@scientific',

    // Федерація
    'federation/rules' => 'Federation@rules',
    'federation/calendar_2016' => 'Federation@calendar',
    'federation/representative' => 'Federation@representative',
    'federation/position' => 'Federation@position',
    'federation/leadership' => 'Federation@leadership',


    'history' => 'Site@history', // actionIndex в SiteController
    'contact' => 'Site@contact', // actionIndex в SiteController
    'index' => 'Site@index', // actionIndex в SiteController
    'main' => 'Site@index', // actionIndex в SiteController
);
