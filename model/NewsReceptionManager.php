<?php

namespace Eoxys_Esport\model;

require_once('model/Manager.php');

class AddNewsManager extends Manager {
    private function imageVerif($image) {

        $max_size = 3000000;
        $ext = array('jpg', 'jpeg', 'gif', 'png');
        $ext_upload = strtolower( substr( strrchr($image['name'], '.'), 1));

        if($image['error'] > 0)
            throw new Exception("Error in upload");

        if($image['size'] > $max_size)
            throw new Exception("Weight is too important");

        if(!in_array($ext_upload, $ext))
            throw new Exception("Wrong extension");

        $filename = pathinfo($image['name'], PATHINFO_FILENAME);
        $filename .= '.';
        $filename .= $ext_upload;

        $target_dir = 'public/uploads/';
        $uploadfile = $target_dir . basename($image['name']);

        if(move_uploaded_file($image['tmp_name'], $uploadfile))
            return $filename;

        else
            throw new Exception("Transfer failed");

        }

        public function addNews($uploadedImageLarge, $uploadedImageSmall, $title, $text) {
            $db = $this->dbConnect();

            $imageSmall = $this->imageVerif($uploadedImageSmall);
            $imageLarge = $this->imageVerif($uploadedImageLarge);

            $req = $db->prepare('INSERT INTO news(title, newsText, imagePath, imagePathSmall, date_creation) VALUES(:title, :newsText, :imagePath, :imagePathSmall, NOW())');
            $req->execute(array(
                'title'=> $title,
                'newsText'=> $text,
                'imagePath'=> $imageLarge,
                'imagePathSmall'=> $imageSmall
            ));
        }
}
