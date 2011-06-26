<?php defined("SYSPATH") or die("No direct script access.") ?>

<?= $subject ?>
<?= "\n" ?>

<?= t("Comment:") ?> <?= $comment->text ?>
<?= "\n" ?>

<?= t("Author name:") ?> <?= $comment->author_name() ?>
<?= "\n" ?>
<?= t("Author email:") ?> <?= $comment->author_email() ?>
<?= "\n" ?>
<? if ($comment->author_url() != ''): ?>
<?= t("Author URL:") ?> <?= $comment->author_url() ?>
<?= "\n" ?>
<? endif ?>
<?= t("Url:") ?> <?= $comment->item()->abs_url() ?>#comments
<?= "\n" ?>