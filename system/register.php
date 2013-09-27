<?php exit; ?>

row: 0

    field: title
        <?=t('Create Account')?>
    field;
    
    field: content
    <?php
        $form = new Cms\Form('register', null, Cms\Enumerations\FormMethod::POST);
        
        $form->Listen(Cms\Signals\Type\FormSignal::SUBMIT, function($signal_data)
        {
            /* @var $current_form \Cms\Form */
            $current_form = $signal_data->form;
            
            if($_REQUEST['password'] == $_REQUEST['password_confirm'])
            {
                
            }
        });
        
        $form->Listen(Cms\Signals\Type\FormSignal::SUBMIT_ERROR, function($signal_data)
        {
            print "errors were detected.";
        });
        
        $form->AddField(new Cms\Form\TextField('Username', 'username'));
       
        $form->AddField(new Cms\Form\PasswordField('Password', 'password', '', '', '', true));
        
        $form->AddField(new Cms\Form\PasswordField('Confirm Password', 'password_confirm', '', '', '', true));
        
        $form->AddField(new Cms\Form\TextField('E-mail', 'email', '', '', '', true));
        
        $form->AddField(new Cms\Form\SubmitField(t('Register'), 'register'));
        
        $form->Render();
    ?>
    field;
    
row;