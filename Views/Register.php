<div class="mt-5">
    <h1>Register</h1>
    <?php
    $model = new \App\Models\RegisterModel();
    \App\Core\Form\Form::begin('', 'post');
    echo (new App\Core\Form\Form)->field($model, 'firstName');
    echo (new App\Core\Form\Form)->field($model, 'lastName');
    echo (new App\Core\Form\Form)->field($model, 'email');
    echo (new App\Core\Form\Form)->field($model, 'password');
    echo (new App\Core\Form\Form)->field($model, 'confirmPassword');
    (new App\Core\Form\Form)->submit();
    \App\Core\Form\Form::end();
    ?>
</div>


