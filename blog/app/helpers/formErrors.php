<?php if(count($errors) > 0): ?>
      <div class="msg error">
        <?php foreach($errors as $errors): ?>
          <li> <?php echo $errors ?></li>
        <?php endforeach; ?>
      </div>
<?php endif; ?>