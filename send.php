<?php
// Debug information
error_reporting(E_ALL);
ini_set('display_errors', 1);

$group_id = '-4698239918';
$token = '7926863498:AAGWC_E-elcyJ1TFT1LfyRIKsZJUGXakvg8';

// Accept all POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8') : null;
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : null;
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : null;
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8') : null;
    $form_source = isset($_POST['form_source']) ? htmlspecialchars($_POST['form_source'], ENT_QUOTES, 'UTF-8') : 'Неизвестная форма';

    if ($phone) {
        $message_text = "*Новая заявка сайт flipping:*\n";
        $message_text .= "*Источник:* $form_source\n";
        $message_text .= "*Телефон:* $phone\n";
        if ($name) {
            $message_text .= "*Имя:* $name\n";
        }
        if ($email && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message_text .= "*Email:* $email\n";
        }
        if ($message) {
            $message_text .= "*Комментарий:* $message\n";
        }

        $url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$group_id&text=" . urlencode($message_text) . "&parse_mode=Markdown";

        $response = file_get_contents($url);

        if ($response) {
            // Return success JSON instead of redirecting
            header('Content-Type: application/json');
            echo json_encode([
                'success' => true, 
                'message' => 'Спасибо! Ваша заявка успешно отправлена. Наши специалисты свяжутся с вами в ближайшее время.',
                'form_source' => $form_source
            ]);
            exit;
        } else {
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => 'Ошибка отправки сообщения']);
            exit;
        }
    } else {
        header('Content-Type: application/json');
        echo json_encode(['success' => false, 'message' => 'Телефон обязателен для заполнения']);
        exit;
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Неверный метод запроса']);
    exit;
}
?>
