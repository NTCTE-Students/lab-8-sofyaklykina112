<?php
class Document {
    public function save() {
    }
}

class PDFDocument extends Document {
    public function save() {
        print("Сохранение документа в формате PDF.<br>");
    }
}

class WordDocument extends Document {
    public function save() {
        print("Сохранение документа в формате Word.<br>");
    }
}

class ExcelDocument extends Document {
    public function save() {
        print("Сохранение документа в формате Excel.<br>");
    }
}

function testDocuments() {
    $pdfDoc = new PDFDocument();
    $pdfResult = $pdfDoc->save();
    if ($pdfResult != "Сохранение документа в формате PDF.<br>") {
        die("Ошибка PDF!<br>");
    }

    $wordDoc = new WordDocument();
    $wordResult = $wordDoc->save();
    if ($wordResult != "Сохранение документа в формате Word.<br>") {
        die("Ошибка Word!<br>");
    }

    $excelDoc = new ExcelDocument();
    $excelResult = $excelDoc->save();
    if ($excelResult != "Сохранение документа в формате Excel.<br>") {
        die("Ошибка  Excel!<br>");
    }

    print("Все тесты успешно завершены!<br>");
}

testDocuments();