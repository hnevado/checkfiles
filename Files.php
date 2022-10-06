<?php
class Files {

    public $url;
    public $size; //in bytes
    public $extensions;
    
    public function __construct($url, $size, $extensions)
    {

        $this->url = $url;
        $this->size = $size;
        $this->extensions = $extensions;

    }

    public function checkExtensions()
    {

        $allowed_extensions = explode(",",$this->extensions);
        $ext = pathinfo($this->url, PATHINFO_EXTENSION);

        if (!in_array($ext, $allowed_extensions)) {
            return "Error - Extension not allowed";
        }

        return true;


    }

    public function checkSize()
    {

        $size_file=filesize($this->url);

        if ($size_file > $this->size)
          return "Error - Size not allowed. Reduce the image";

        return true;

    }


}

?>