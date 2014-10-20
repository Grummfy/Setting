<?php foreach($moduleSettings as $setting => $moduleInfo): ?>
    <?php $settingName = $module . '_' . $setting; ?>
    <div class='form-group'>
        {!! Form::label($settingName . "[$lang]", $moduleInfo['description']) !!}
        <?php if (isset($settings[$settingName])): ?>
            {!! Form::text($settingName . "[$lang]", Input::old($settingName . "[$lang]", $settings[$settingName]->translate($lang)->value), ['class' => 'form-control', 'placeholder' => $moduleInfo['description']]) !!}
        <?php else: ?>
            {!! Form::text($settingName . "[$lang]", Input::old($settingName . "[$lang]"), ['class' => 'form-control', 'placeholder' => $moduleInfo['description']]) !!}
        <?php endif; ?>
    </div>
<?php endforeach; ?>