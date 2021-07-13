<?php

use function CoDevelopers\StarterTheme\Helpers\Hook\add_actions;

add_actions(['wp_ajax_contact_form_submit', 'wp_ajax_nopriv_contact_form_submit'], function () {
    $response = [
        'errors' => [],
        'success' => false,
    ];

    // check nonce
    if (check_ajax_referer('contact_form_submit', false, false) === false) {
        wp_send_json($response, 400);
        wp_die();
    }

    // post data
    $name = str_ucwords(str_tolower(str_trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING))));
    $phone = str_trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
    $subject = str_trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING));
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $message = str_nl2br(str_trim(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING)));

    // check data
    if (!$name) {
        $response['errors'][] = 'name';
    }

    if (!$phone) {
        $response['errors'][] = 'phone';
    }

    if (!$email) {
        $response['errors'][] = 'email';
    }

    if (!$message) {
        $response['errors'][] = 'message';
    }

    if (count($response['errors']) > 0) {
        wp_send_json($response, 400);
        wp_die();
    }

    // body message
    $site_title = get_bloginfo('name');
    $data = "<h1>{$subject}</h1>"
        . "<p><strong>Nombre y Apellido</strong> {$name}</p>";

    if (!empty($subject)) {
        $data .= "<p><strong>Asunto</strong> {$subject}</p>";
    } else {
        $subject = "Consulta WEB ${$site_title}";
    }

    $data .= "<p><strong>Teléfono</strong> {$phone}</p>"
        . "<p><strong>Email</strong> {$email}</p>"
        . "<p><strong>Mensaje</strong><br>{$message}</p>";

    // send message
    $headers = [
        "From: {$name} <{$email}>",
        "Reply-To: {$name} <{$email}>",
        'Content-Type: text/html; charset=UTF-8',
    ];

    $to = get_field('email', 'option');
    $response['success'] = wp_mail($to, $subject, $data, $headers);
    wp_send_json($response, ($response['success'] ? 200 : 500));
    wp_die();
});
