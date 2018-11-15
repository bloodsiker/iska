<?php

namespace App\app\Controllers;

use App\app\Models\Media;
use App\vendor\controller\Controller;

class MediaController extends Controller
{

    public function actionPhoto()
    {
        $title = ' - Фотогалерея';

        $photoAlbumList = Media::getListAlbum(0);

        $this->render('media/photo', compact('title', 'photoAlbumList'));
    }


    public function actionVideo()
    {
        $title = ' - Видеогалерея';

        $videoList = Media::getVideoList(0);

        $this->render('media/video', compact('title', 'videoList'));
        return true;
    }

    public function actionPhotoAlbum($id)
    {
        $album = Media::getAlbumById($id);

        $title = '- Фотогалерея - ' . $album['title'];

        $photoList = Media::getPhotoByListAlbum($id);

        $this->render('media/photo_view', compact('title', 'album', 'photoList'));
        return true;
    }

    public function actionArchivePhoto()
    {
        $title = ' - Медіа архів';

        $photoAlbumList = Media::getListAlbum(1);

        $this->render('media/archive_photo', compact('title', 'photoAlbumList'));
        return true;
    }

    public function actionArchiveVideo()
    {
        $title = ' - Медіа архів';

        $videoList = Media::getVideoList(1);

        $this->render('media/archive_video', compact('title', 'videoList'));
        return true;
    }
}