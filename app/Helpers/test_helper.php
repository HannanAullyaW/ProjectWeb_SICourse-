<?php
        function namaUser() {
            $db = \Config\Database::connect();
            return $db -> table('user')->where('id',session('id'))->get()->getRow();
        }

        
?>