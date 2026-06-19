<?php

namespace utils;

use Cloudinary\Cloudinary;

use Dotenv\Dotenv;

use Exception;

class FileUpload
{
    private static $storage;

    private static function getStorage()
    {

        if (self::$storage === null) {

            $dotenv = Dotenv::createImmutable(__DIR__, 2);
            $dotenv->load();

            self::$storage = new Cloudinary($_ENV['CLOUDINARY_URL']);
        }

        return self::$storage;
    }

    public static function uploadFile($pasta, $imagem, $idPublico)
    {
        try {

            $uploadAPI = self::getStorage()->uploadApi();

            $result = $uploadAPI->upload($imagem, ['folder' => $pasta,
            'public_id' => $idPublico,
            'overwrite' => true,
            'resource_type' => 'image']);

            return $result;
        }catch(Exception $e){
            throw new Exception("Erro no upload da imagem" . $e->getMessage());
        }
    }

    public static function deleteImagem($pasta, $publicUrl)
    {
        try{
            $uploadAPI = self::getStorage()->uploadApi();

            $publicId = $pasta . "/" . pathinfo($publicUrl, PATHINFO_BASENAME);

            $result = $uploadAPI->destroy($publicId, ['resource_type' => 'image']);
            return $result;
        } catch(Exception $e){
            throw new Exception("Erro ao deletar imagem" . $e->getMessage());
        }
    }
}