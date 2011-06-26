<?php defined("SYSPATH") or die("No direct script access.") ?>

<?= $subject ?>
<?= "\n" ?>

<? if ($original->title != $item->title): ?>
<?= t("New title:") ?> <?= html::clean($item->title) ?>
<? else: ?>
<?= t("Title:") ?> <?= html::clean($item->title) ?>
<? endif ?>

<?= t("Url:") ?> <?= $item->abs_url() ?>


<? if ($original->description != $item->description): ?>
<?= t("New description:") ?> <?= html::clean($item->description) ?>
<? elseif (!empty($item->description)): ?>
<?= t("Description:") ?> <?= html::clean($item->description) ?>
<? endif ?>
