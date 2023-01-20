<?php

namespace Source\Models;

use Source\Core\Model;

class Testimonies extends Model

{
    public function __construct() {
        parent::__construct("testimonies", ["id"], ["name", "segment", "testimonial", "path_photo"]);
    }

    public function findTestimonies($limit = 3): ?Testimonies {
        $find = $this->find()->limit($limit);
        return $find->fetch();
    }
}