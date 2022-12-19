<?php

function ajoute_message($message, $etat = "success")
{
    $_SESSION['messages'][] = [
        "etat"      =>  $etat,
        "message"   =>  $message
    ];
}

function affiche_messages()
{
    if (!empty($_SESSION['messages'])) {
?>
        <div id="messages" class="fixed-bottom">
            <?php foreach ($_SESSION['messages'] as $message) { ?>
                <p class="alert alert-<?= $message['etat']; ?>"><?= $message['message']; ?></p>
            <?php } ?>
        </div>
<?php
        unset($_SESSION['messages']);
    }
}
