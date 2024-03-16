<?php

    function getDishes(){
        // We connect to the database.
        try {
            $database = new PDO('mysql:host=localhost;dbname=pastamia;charset=utf8', 'root', '');
        } catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }

        // We retrieve the 5 last blog posts.
        $statement = $database->query(
            "SELECT * FROM dishes"
        );
        $dishes = [];
        while (($row = $statement->fetch())) {
            $dish = [
                'nom' => $row['plat'],
                'description' => $row['description'],
                'prix' => $row['prix'],
            ];

            $dishes[] = $dish;
        }

        return $dishes;
    }



