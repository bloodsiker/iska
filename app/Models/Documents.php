<?php

namespace App\app\Models;

use App\components\Db\MySQL;
use PDO;

class Documents
{
    const TYPE_POSITION   = 1;
    const TYPE_SCIENTIFIC = 2;

    public static function createDocument($options)
    {
        $db = MySQL::getConnection();

        $sql = 'INSERT INTO documents '
            . '(type_doc, title, path, file)'
            . 'VALUES '
            . '(:type_doc, :title, :path, :file)';

        $result = $db->prepare($sql);
        $result->bindParam(':type_doc', $options['type_doc'], PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':path', $options['path'], PDO::PARAM_STR);
        $result->bindParam(':file', $options['file'], PDO::PARAM_STR);
        if ($result->execute()) {
            return $db->lastInsertId();
        }
        return 0;
    }

    public static function getDocumentById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM documents WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->execute();
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $typeDoc
     *
     * @return array
     */
    public static function getListDocuments($typeDoc)
    {
        $db = MySQL::getConnection();

        $sql = 'SELECT * FROM documents WHERE type_doc = :type_doc ORDER BY id DESC';

        $result = $db->prepare($sql);
        $result->bindParam(':type_doc', $typeDoc, PDO::PARAM_INT);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function deleteDocumentById($id)
    {
        $db = MySQL::getConnection();

        $sql = 'DELETE FROM documents WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function updateDocumentById($id, $title)
    {
        $db = MySQL::getConnection();

        $sql = "UPDATE documents
            SET
                title = :title
            WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $title, PDO::PARAM_STR);
        return $result->execute();
    }

}