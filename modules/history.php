<?php
$moduleOptions = get_module_options('history');
?>

<div class="history-section section">
    <div class="max-width">
        <h2 class="history-title"><?php echo $moduleOptions['history_title'];?></h2>
        <?php if(!empty($moduleOptions['history_years'])):?>
        <div class="history-road nav-tabs">
            <?php foreach($moduleOptions['history_years'] as $key => $year):?>
            <a href="#<?php echo $key;?>" data-tab="tab-<?php echo $key;?>" class="history-road-item<?php if($key === 0) echo ' active';?>">
                <?php echo $year['year'];?>
            </a>
            <?php endforeach;?>
        </div>
        <div class="tab-content">
            <?php foreach($moduleOptions['history_years'] as $key => $year):?>
            <div class="b-tab<?php if($key === 0) echo ' active';?>" id="tab-<?php echo $key;?>">
                <?php echo $year['description'];?>
            </div>
            <?php endforeach;?>
        </div>
        <div class="arrow-bg-right"></div>
        <?php endif;?>
    </div>
</div>