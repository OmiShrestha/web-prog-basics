<?php

function load_customers($filename = 'data/customers.txt') {
    $customers = [];
    
    if (!file_exists($filename)) return $customers;

    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $fields = explode(';', $line);
        if (count($fields) >= 12) {
            $id = $fields[0];
            $customers[$id] = $fields;
        }
    }

    return $customers;
}

function load_orders($filename = 'data/orders.txt') {
    $orders = [];

    if (!file_exists($filename)) return $orders;

    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $fields = explode(',', $line);
        if (count($fields) >= 5) {
            $orders[] = $fields;
        }
    }

    return $orders;
}

function load_books($filename = 'data/books.txt') {
    $books = [];

    if (!file_exists($filename)) return $books;

    $lines = file($filename, FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $fields = explode(',', $line, 14); // stop early so desc doesn't get split too far
        if (count($fields) >= 4) {
            $isbn10 = trim($fields[1]);
            $books[$isbn10] = $fields;
        }
    }

    return $books;
}

function get_customer_by_id($customers, $id) {
    return isset($customers[$id]) ? $customers[$id] : null;
}

function get_orders_by_customer_id($orders, $customerId) {
    $result = [];

    foreach ($orders as $order) {
        if ($order[1] == $customerId) {
            $result[] = $order;
        }
    }

    return $result;
}

function get_book_by_isbn($books, $isbn10) {
    return isset($books[$isbn10]) ? $books[$isbn10] : null;
}
