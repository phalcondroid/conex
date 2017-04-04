<?php

class FileUpload
{

    const SIZE_LIMIT = 2000000;
    const SIZE_ERROR = 5;
    const FILE_UPLOAD_ERROR = false;

    private $request;

    /**
     *
     */
    public function upload($customPath)
    {
        if ($this->request->hasFiles() == true) {
            foreach ($this->request->getUploadedFiles() as $file) {
                if ($file->getSize() > self::SIZE_LIMIT) {
                    return self::SIZE_ERROR;
                } else {
                    $baseName = $customPath . basename(uniqid() . $file->getName());
                    $path = APP_PATH . $baseName;
                    if (move_uploaded_file($file->getTempName(), $path)) {
                        return str_replace("/public", "", $baseName);
                    } else {
                        return false;
                    }
                }
            }
        } else {
            return false;
        }
    }

    /**
     *
     */
    public function multiple($customPath)
    {
        if ($this->request->hasFiles() == true) {

            $result = false;

            foreach ($this->request->getUploadedFiles() as $file) {
                if ($file->getSize() > self::SIZE_LIMIT) {

                } else {
                    $baseName = $customPath . basename(uniqid() . $file->getName());
                    $path = APP_PATH . $baseName;
                    if (move_uploaded_file($file->getTempName(), $path)) {
                        $result[] = str_replace("/public", "", $baseName);
                    }
                }
            }

            return $result;
        } else {
            return false;
        }
    }

    /**
     *
     */
    public function setRequest($req)
    {
        $this->request = $req;
    }
}
