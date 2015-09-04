<?php

// Test for totara/core/classes/jsed.php - see http://labs.omniti.com/labs/jsend

header('Content-type: text/html; charset=utf-8');
header('X-UA-Compatible: IE=edge');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Expires: Mon, 20 Aug 1969 09:23:00 GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Accept-Ranges: none');

$parameters = $_POST;

if (empty($parameters['test'])) {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'missing test parameter',
    ));
    die;
}

if ($parameters['test'] === 'test1') {
    echo json_encode(array(
        'status' => 'success',
        'data' => array('absc' => 'def'),
    ));
    die;
}

if ($parameters['test'] === 'test2') {
    echo json_encode(array(
        'status' => 'success',
        'data' => null,
    ));
    die;
}

if ($parameters['test'] === 'test3') {
    echo json_encode(array(
        'status' => 'fail',
        'data' => array('absc' => 'def'),
    ));
    die;
}

if ($parameters['test'] === 'test4') {
    echo json_encode(array(
        'status' => 'fail',
        'data' => null,
    ));
    die;
}

if ($parameters['test'] === 'test5') {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'some error',
    ));
    die;
}

if ($parameters['test'] === 'test6') {
    echo json_encode(array(
        'status' => 'error',
        'message' => 'some other error',
        'code' => 'some code',
        'data' => array('xx' => 'yy'),
    ));
    die;
}

