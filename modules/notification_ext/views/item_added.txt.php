<?php defined("SYSPATH") or die("No direct script access.") ?>

<?= $subject ?>
<?= "\n" ?>

<?= t("Title:") ?> <?= $item->title ?>

<?= t("Url:") ?> <?= $item->abs_url() ?>

<? if ($item->description): ?>
<?= t("Description:") ?> <?= $item->description ?>
<? endif ?>