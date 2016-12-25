<?php if (! empty($box->data)) : ?>
    <input type="hidden" name="cuztom[__activate]" value="activate">

    <div class="cuztom cuztom--<?php echo $box->meta_type; ?> v-cuztom">
        <?php if (! empty($box->description)) : ?>
            <div class="cuztom__description"><?php echo $box->description; ?></div>
        <?php endif; ?>

        <table class="form-table cuztom-table cuztom-main">
            <?php foreach ($box->data as $id => $field) : ?>
                <?php echo $field->outputCell(); ?>
            <?php endforeach; ?>
        </table>
    </div>
<?php endif; ?>