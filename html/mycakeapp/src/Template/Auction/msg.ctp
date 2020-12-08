<?php if(!empty($bidinfo)): ?>
<h2>商品「<?=$bidinfo->biditem->name ?>」</h2>
<h3>※メッセージ情報</h3>
<h3>※メッセージを送信する</h3>
<?=$this->Form->create($bidmsg) ?>
<?=$this->Form->hidden($bidinfo_id,['value'=>$bidinfo->id]) ?>
<?=$this->Form->hidden('user_id',['value'=>$authuser['id']]) ?>
<?=$this->Form->textarea('message',['rows'=>2]); ?>
<?=$this->Form->button(__'Submit') ?>
<?=$this->Form->end() ?>
<table cellingpadding="0" cellspacing="0">
<thread>
  <tr>
    <th scope="col">送信者</th>
    <th class="main" scope="col">メッセージ</th>
    <th scope="col">送信時間</th>
  </tr>
</thread>
<tbody>
<?php if(!empty($bidmsgs)): ?>
  <?php foreach($bidmsgs as$msg) ?>
  <tr>
    <td><?=h($msg->user->username) ?></td>
    <td><?=h($msg->message) ?></td>
    <td><?=h($msg->created) ?></td>
  </tr>
  <?php endforeach; ?>
<?php else: ?>
  <tr>※メッセージがありません。</tr>
<?php endif; ?>
</tbody>
</table>
<?php else: ?>
<h2>落札情報はありません。</h2>
<?php endif; ?>
