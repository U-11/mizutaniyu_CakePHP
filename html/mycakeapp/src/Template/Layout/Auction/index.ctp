<h2>ミニオークション！</h2>
<h3>※出品されている商品一覧</h3>
<table celling="0" cellingspacing="0">
<thread>
  <tr>
    <th class="main" scope="col"><?=$this->Paginator->sort('name') ?></th>
    <th scope="col"><?=$this->Paginator->sort('finished') ?></th>
    <th scope="col"><?=$this->Paginator->sort('endtime') ?></th>
    <th class="auction" scope="col"><?=__('Action') ?></th>
  </tr>
</thread>
<tbody>
  <?php foreach($auction as $biditem): ?>
  <tr>
    <td><?=h($biditem->name) ?></td>
    <td><?=h($biditem->finished ? 'Finished' :'') ?></td>
    <td><?=h($biditem->endtime) ?></td>
    <td class="auction">
      <?=$this->Html->link(__('View'),['action'=>'view',$biditem->id]) ?>
    </td>
  </tr>
  <?php endforeach; ?>
</tbody>
</table>
<div class="paginator">
  <ul class="paginate">
    <?=$this->Paginator->first('<<'.__('first')) ?>
    <?=$this->Paginator->prev('<'.__('previous')) ?>
    <?=$this->Paginator->numbers() ?>
    <?=$this->Paginator->next(__('next').'>') ?>
    <?=$this->Paginator->last(__('last').'>>') ?>
  </ul>
</div>
