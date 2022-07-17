<?php 
    namespace App\Models;
    
    class Boards {
        public static function all() {
            return [
                [
                    'id' => '1',
                    'title' => 'title1',
                    'description' => 'description1',
                ],
                [
                    'id' => '2',
                    'title' => 'title2',
                    'description' => 'description2',
                ]
                ];
        }
    }
?>