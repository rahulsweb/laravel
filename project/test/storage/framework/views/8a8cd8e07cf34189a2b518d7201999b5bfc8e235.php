<div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
    <label for="name" class="control-label"><?php echo e('Name'); ?></label>
    <input class="form-control" name="name" type="text" id="name" value="<?php echo e(isset($contactus->name) ? $contactus->name : ''); ?>" >
    <?php echo $errors->first('name', '<p class="help-block">:note</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
    <label for="email" class="control-label"><?php echo e('Email'); ?></label>
    <input class="form-control" name="email" type="text" id="email" value="<?php echo e(isset($contactus->email) ? $contactus->email : ''); ?>" >
    <?php echo $errors->first('email', '<p class="help-block">:note</p>'); ?>

</div>

<div class="form-group <?php echo e($errors->has('contact') ? 'has-error' : ''); ?>">
    <label for="contact" class="control-label"><?php echo e('contact'); ?></label>
    <input class="form-control" name="contact" type="text" id="contact" value="<?php echo e(isset($contactus->contact) ? $contactus->contact : ''); ?>" >
    <?php echo $errors->first('contact', '<p class="help-block">:note</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('subject') ? 'has-error' : ''); ?>">
    <label for="subject" class="control-label"><?php echo e('Subject'); ?></label>
    <input class="form-control" name="subject" type="text" id="subject" value="<?php echo e(isset($contactus->subject) ? $contactus->subject : ''); ?>" >
    <?php echo $errors->first('subject', '<p class="help-block">:note</p>'); ?>

</div>
<div class="form-group <?php echo e($errors->has('message') ? 'has-error' : ''); ?>">
        <label for="message" class="control-label"><?php echo e('Message'); ?></label>
        <textarea class="form-control" rows="5" name="message" type="textarea" id="message" ><?php echo e(isset($contactus->message) ? $contactus->message : ''); ?></textarea>
        <?php echo $errors->first('message', '<p class="help-block">:message</p>'); ?>

    </div>
<div class="form-group <?php echo e($errors->has('note') ? 'has-error' : ''); ?>">
    <label for="note" class="control-label"><?php echo e('note'); ?></label>
    <textarea class="form-control" rows="5" name="note" type="textarea" id="note" ><?php echo e(isset($contactus->note) ? $contactus->note : ''); ?></textarea>
    <?php echo $errors->first('note', '<p class="help-block">:note</p>'); ?>

</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="<?php echo e($formMode === 'edit' ? 'Update' : 'Create'); ?>">
</div>
