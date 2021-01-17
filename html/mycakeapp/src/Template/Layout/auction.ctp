<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->name . '/' . $this->request->getParam('action') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('auction.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <nav class="top-bar titlebar" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns name">
            <li>
                <h1><?= $this->Html->link(__('Auction![' . $authuser['username'] . ']'), ['action' => 'index']) ?></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://google.co.jp">about</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="actions index medium-9 columns content">
        <?= $this->fetch('content') ?>
    </div>
    <nav class="large-2 medium-3 columns sidebar" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('あなたの落札情報'), ['action' => 'home']) ?></li>
            <li><?= $this->Html->link(__('あなたの出品情報'), ['action' => 'home2']) ?></li>
            <li><?= $this->Html->link(__('商品を出品する'), ['action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('商品リストを見る'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
</body>

</html>
