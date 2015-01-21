<?php

namespace Stripe;

class FileUpload extends ApiResource
{
    public static function baseUrl()
    {
        return Stripe::$apiUploadBase;
    }

    public static function className($class)
    {
        return 'file';
    }

    /**
   * @param string $id The ID of the file upload to retrieve.
   * @param string|null $apiKey
   *
   * @return FileUpload
   */
    public static function retrieve($id, $apiKey = null)
    {
        $class = get_class();
        return self::_scopedRetrieve($class, $id, $apiKey);
    }

    /**
   * @param array|null $params
   * @param string|null $apiKey
   *
   * @return FileUpload The created file upload.
   */
    public static function create($params = null, $apiKey = null)
    {
        $class = get_class();
        return self::_scopedCreate($class, $params, $apiKey);
    }

    /**
   * @param array|null $params
   * @param string|null $apiKey
   *
   * @return array An array of FileUploads
   */
    public static function all($params = null, $apiKey = null)
    {
        $class = get_class();
        return self::_scopedAll($class, $params, $apiKey);
    }
}
