<?php $user = $data['user']; $tweets = $data['tweets'];?>
<?php if(empty($tweets)): ?>
<p class="center-align">Welcome to twitter, no tweet yet.</p>
<?php else: foreach($tweets as $tweet): ?>
<div class="card horizontal no-shadow">
  <div class="card-image">
    <a href="#" class="white-text"><span class="avatar"><i class="fa fa-user fa-2x circle"></i></span></a>
  </div>
  <div class="card-stacked">
    <div class="card-content">
    <p><a href="#"><span class="bold"><?php echo ucwords(h($user->firstname)) . ' ' . ucwords(h($user->lastname)); ?></span> <span class="color-grey">@<?php echo h($user->username); ?></span><small class="color-grey"> . </small><span class="date color-grey">Oct 4</span></a></p>
    <p class="tweet-body"><?php echo $tweet->body; ?></p>
    </div>
    <div class="card-action">
      <a href="#" class="color-grey"><i class="fa fa-heart"></i> <span>234</span></a>
    </div>
  </div>
</div>
<?php endforeach; endif;?>