<?php 
echo $this->Form->create('Contact');
echo $this->Form->input('name');
echo $this->Form->input('email');
echo $this->Form->input('tel');
echo $this->Form->input('body');
echo $this->Form->end('送信');
?>