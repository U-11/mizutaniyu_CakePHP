<h2>「<?= $biditem->name ?>」</h2>
<table class="vertical-table">
    <tr>
        <th class="small" scope="row">出品者</th>
        <td><?= $biditem->has('user') ? $biditem->user->username : '' ?></td>
    </tr>
    <tr>
        <th scope="row">商品名</th>
        <td><?= h($biditem->name) ?></td>
    </tr>
    <tr>
        <th scope="row">商品ID</th>
        <td><?= $this->Number->format($biditem->id) ?></td>
    </tr>
    <tr>
        <th scope="row">商品詳細</th>
        <td><?= h($biditem->description) ?></td>
    </tr>
    <tr>
        <th scope="row">商品画像</th>
        <td><?= $this->Html->image($biditem->picture, ['width' => '100px', 'height' => '100px']) ?></td>
    </tr>
    <tr>
        <th scope="row">終了時間</th>
        <td><?= h($biditem->endtime) ?></td>
    </tr>
    <tr>
        <th scope="row">投稿時間</th>
        <td><?= h($biditem->created) ?></td>
    </tr>
    <tr>
        <th scope="row"><?= __('終了した') ?></th>
        <td><?= $biditem->finished ? __('Yes') : __('No') ?></td>
    </tr>
</table>
<div class="related">
    <h4><?= __('落札情報') ?></h4>
    <?php if (!empty($biditem->bidinfo)) : ?>
        <table cellingpadding=0 cellspacing="0">
            <tr>
                <th scope="col">落札者</th>
                <th scope="col">落札金額</th>
                <th scope="col">落札日時</th>
            </tr>
            <tr>
                <td><?= h($biditem->bidinfo->user->username) ?></td>
                <td><?= h($biditem->bidinfo->price) ?>円</td>
                <td><?= h($biditem->bidinfo->endtime) ?>円</td>
            </tr>
        </table>
    <?php else : ?>
        <p><?= '※落札情報はありません' ?></p>
    <?php endif; ?>
</div>
<div class="related">
    <h4><?= __('入札情報') ?></h4>
    <?php if (!$biditem->finished) : ?>
        <h6><a href="<?= $this->Url->build(['action' => 'bid', $biditem->id]) ?>">＜入札する＞</a></h6>
        <?php if (!empty($bidrequests)) : ?>
            <table cellingpadding=0 cellspacing="0">
                <thread>
                    <tr>
                        <th scope="col">入札者</th>
                        <th scope="col">金額</th>
                        <th scope="col">入札日時</th>
                    </tr>
                </thread>
                <tbody>
                    <?php foreach ($bidrequests as $bidrequest) : ?>
                        <tr>
                            <td><?= h($bidrequest->user->username) ?></td>
                            <td><?= h($bidrequest->price) ?>円</td>
                            <td><?= h($bidrequest->created) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p><?= '※入札はまだありません' ?></p>
        <?php endif; ?>
    <?php else : ?>
        <?= '※入札は終了しました。' ?>
    <?php endif; ?>
</div>