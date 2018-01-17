<?php
    $name = isset($data['name']) ? $data['name'] : '';
    $email = isset($data['email']) ? $data['email'] : '';
    $message = isset($data['message']) ? $data['message'] : '';
    $picture = isset($customFields['filefield_url']) ? $customFields['filefield_url'] : false;
?>
<p>E-mail van contactformulier website:</p>

<p>
    <strong>Naam: </strong><?php echo $name; ?><br>
    <strong>E-mail: </strong><?php echo $email; ?><br>
    <strong>Bericht:</strong><br><?php echo $message; ?><br>

    <?php if ($picture): ?>
        <p><strong>Foto: </strong><a href="<?php echo $picture; ?>">Downloaden</a></p>
    <?php endif; ?>
</p>