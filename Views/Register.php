<div class="mt-5">
    <h1>Register</h1>
    <?php

    use App\Core\Form\Form;

    $form = Form::begin('', 'post');
    echo $form->field($model, 'firstName');
    echo $form->field($model, 'lastName');
    echo $form->field($model, 'email');
    echo $form->field($model, 'password')->passwordField();
    echo $form->field($model, 'confirmPassword')->passwordField();
    $form->submit('Submit');
    $form->end();

    ?>
</div>


