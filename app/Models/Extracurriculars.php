<?php

namespace App\Models;

class Extracurriculars
{
    private static $extras = [

        [
            "id" => 1,
            "nama" => "E Sport",
            "pembina" => "Pak Slamet Wahyudi",
            "deskripsi" => "Ekstra yang mempersiakan siswa/siswi di bidang profesional game berikut: Mobile Legend, Valorant, dan Catur",
        ],
        [
            "id" => 2,
            "nama" => "Basket",
            "pembina" => "Mas Guntur Cahaya",
            "deskripsi" => "Ekstra yang memberi kesempatan bermain Basket baik di bidang profesional maupun kasual",
        ],
        [
            "id" => 3,
            "nama" => "Futsal",
            "pembina" => "Pak Aditya Bagus",
            "deskripsi" => "Ekstra yang memberi kesempatan bermain Futsal baik di bidang profesional maupun kasual",
        ],
        [
            "id" => 4,
            "nama" => "Public Speaking",
            "pembina" => "Mbak Alisa Yuliana",
            "deskripsi" => "Mempersiakan siswa/siswi dalam Public Speaking dengan pede dan Benar",
        ],
        [
            "id" => 5,
            "nama" => "Baca Tulis Al-Qur'an",
            "pembina" => "Pak Ahmad Al-Fatih",
            "deskripsi" => "Mengajarkan Berbagai ilmu membaca Al-Qur'an",
        ],
    ];

    public static function all()
    {
        return self::$extras;
    }
}
