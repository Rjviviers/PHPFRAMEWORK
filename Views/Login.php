<?php
/**
 * @var $model User
 */
?>

<div class="mt-5">
    <h1>Login</h1>
    <?php

    use App\Core\Form\Form;
    use App\Models\User;

    $form = Form::begin('', 'post');
    echo $form->field($model, 'email');
    echo $form->field($model, 'password')->passwordField();
    $form->submit('Submit');
    $form->end();

    ?>
</div>


