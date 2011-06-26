<?php defined("SYSPATH") or die("No direct script access.") ?>
<?= $subject ?>
<?= "\n" ?>

<?= t("To view the changed album %title use the link below.", array("title" => html::purify($item->parent()->title))) ?>

<?= t("Url:") ?> <?= $item->parent()->abs_url() ?>
