<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * 
 */
require_once 'functions.php';
$todo_list = curlRequest($api_url, "todo", "GET");
?>
<div class="panel-heading">
    <h3 class="panel-title">
        <a href="#" id="popup_window">
            <i class="fa fa-shield fa-2x"></i>
            <span>Add Todo</span>
        </a></h3>
</div>
<ul class="list-group">
    <?php
    if(count($todo_list) > 0 ) {
    foreach ($todo_list as $list) {
        ?>
        <li class="list-group-item row">
            <div class="col-md-1"><i class="glyphicon glyphicon-bookmark pull-left"></i><input type="hidden" class="hidden_id" value="<?php echo $list->id_todo; ?>" /></div>
            <div class="col-md-7">
                <h4 class="list-group-item-heading"><?php echo $list->betreff; ?></h4>
                <small class="list-group-item-text"><?php echo $list->beschreibung; ?></small>
            </div>
            <div class="col-md-2 text-right"><?php echo $list->erstellung_datum; ?></div>
            <div class="col-md-1 text-right"><a href = "#" class = "edit_todo" > edit</a></div>
            <div class="col-md-1 text-right"><a href = "#" class = "delete_todo" > delete</a></div>
        </li>
    <?php }} else { ?>
        <div class = "col-md-12" > No Records. </div>
        
    <?php } ?>
</ul>




