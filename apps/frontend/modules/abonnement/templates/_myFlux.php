<?php use_helper('Thumb') ?>
<div id="my_flux">
  <h1>Mon Flux</h1>
  <a " class="btn"><i class="icon-ok"></i> Tous les articles</a><br />
  <?php if($abonnements && $abonnements->count() > 0): ?>
    <?php foreach ($abonnements as $abonnement):?>
   <div class="my_fluxx">
        <h3>
          <a href="<?php echo url_for('assos_show',$abonnement->getAsso()) ?>"><?php echo $abonnement->getAsso()->getName() ?></a>
          <?php echo ' : '?>
          <a href="<?php echo url_for('event_show',$abonnement) ?>"><?php echo $abonnement->getName() ?></a>
        </h3>
        <a href="<?php echo url_for('event_show',$abonnement) ?>"><?php echo $abonnement->getSummary() ?></a>
        <div class="barre"> </div>
      </div>
    <?php endforeach; ?>
  <?php else: ?>
    Vous ne suivez aucune association.
  <?php endif; ?>
</div>

