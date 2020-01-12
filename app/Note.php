<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Note extends Model //class NoteDatabase extends Database
{
    // public static function incomplete () {
    // 	return static::where('comleted', 0)->get();
    // }


}




//
//private static function checkingUniquenessOfLastNote($inputNoteName, $username, $inputNoteDate, $inputNoteContent) {
//    $resource = self::query("SELECT note_name, username, use_date, content
//        FROM note ORDER BY id_note DESC LIMIT 1");
//    $prev = [];
//    if (!empty($resource)) {
//        foreach ($resource as $row) {
//            $prev[] = $row;
//        }
//    } else {
//        return true;
//    }
//    if ($prev[0]['note_name'] != $inputNoteName || $prev[0]['username'] != $username ||
//        $prev[0]['use_date'] != $inputNoteDate || $prev[0]['content'] != $inputNoteContent) {
//        return true;
//    } else {
//        return false;
//    }
//}
//
//public static function insertNoteData($inputNoteName, $username, $inputNoteDate, $inputNoteContent) {
//    if (self::checkingUniquenessOfLastNote($inputNoteName, $username, $inputNoteDate, $inputNoteContent)) {
//        self::query("INSERT INTO note(note_name, username, use_date, content)
//            VALUES ('$inputNoteName', '$username', '$inputNoteDate', '$inputNoteContent')");
//    }
//}
//
//private static function noteOfListSelect ($username) {
//    $select = self::query("SELECT id_note, note_name, use_date FROM note
//                  WHERE  username = '$username' ORDER BY id_note DESC");
//    return $select;
//}
//
//public static function resultsNoteOfListSelect ($username) {
//    $resource = self::noteOfListSelect($username);
//    $noteList = [];
//    if (!empty($resource)) {
//        foreach ($resource as $row) {
//            $noteList[] = $row;
//        }
//    }
//    return $noteList;
//}
//
//public static function noteSelect($id) {
//    $select = self::query("SELECT id_note, note_name, use_date, content FROM note WHERE  id_note = '$id'");
//    $note = mysqli_fetch_assoc($select);
//    return $note;
//}
//
//public static function updateNote($noteId, $inputNoteName, $inputNoteDate, $inputNoteContent) {
//    self::query("UPDATE note SET note_name = '$inputNoteName', use_date = '$inputNoteDate',
//                    content = '$inputNoteContent'
//                    WHERE id_note = '$noteId'");
//}
//
//public static function deleteNote($id) {
//    self::query("DELETE FROM note WHERE id_note='$id'");
//}