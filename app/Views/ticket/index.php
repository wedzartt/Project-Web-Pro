<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('ticket/ticket_card') ?>

<?= $this->include('ticket/ticket_form') ?>

<?= $this->endSection(); ?>