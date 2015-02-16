<?php

hide($form['account']);
hide($form['actions']);
?>

<div class="crm-container crm-public">

    <div class="crm-container crm-public">
        
        <fieldset>
            <legend>Player</legend>
            <div  class="crm-section form-item">
                <div class="label">
                    <label for="edit-name--2">In Game Name <span class="crm-marker" title="This field is required.">*</span></label>
                </div>
                <div class="edit-value content">
                    <input maxlength="64" size="30" name="name" type="text" id="edit-name--2" class="big crm-form-text required">
                </div>
                <div class="clear"></div>
            </div>
            <div class="crm-section form-item">
                <div class="label">
                    <label for="edit-mail--2">Email <span class="crm-marker" title="This field is required.">*</span></label>
                </div>
                <div class="edit-value content">
                    <input maxlength="64" size="30" name="mail" type="text" id="edit-mail--2" class="big crm-form-text required">
                </div>
                <div class="clear"></div>
            </div>
        </fieldset>
        
    </div>

</div>
<div class="clear"></div>
<?php


print drupal_render_children($form);

print render($form['actions']);

