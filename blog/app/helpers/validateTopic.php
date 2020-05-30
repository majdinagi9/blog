<?php 

function validateTopic($user){

    $errors = array();

    if(empty($user['name'])){
        array_push($errors, 'Name is required');
    }
   
    $existingTopic = selectOne('topics', ['name' => $user['name']]);
    if($existingTopic){
        if(iss($user['update-topic']) && $existingTopic['id'] != $user['id'] ){
            array_push($errors, 'Name already exists');
        }

        if(isset($user['add-topic'])){
            array_push($errors, 'Name already exists');
        }

    }
    return $errors;
}
