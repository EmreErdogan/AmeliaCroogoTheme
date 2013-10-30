<div id="contact-<?php echo $contact['Contact']['id']; ?>" class="">
	<h2><?php echo $contact['Contact']['title']; ?></h2>
	<div class="contact-body">
	<?php echo $contact['Contact']['body']; ?>
	</div>

	<?php if ($contact['Contact']['message_status']):  ?>
	<div class="contact-form">
	<?php
		echo $this->Form->create('Message', array(
			'url' => array(
				'plugin' => 'contacts',
				'controller' => 'contacts',
				'action' => 'view',
				$contact['Contact']['alias'],
			),
		));

		$this->Form->inputDefaults(array(
			'label' => false,
			'class' => 'span8',
		));
		echo $this->Form->input('Message.name', array('placeholder' => __('Your name')));
		echo $this->Form->input('Message.email', array('placeholder' => __('Your email')));
		echo $this->Form->input('Message.title', array('placeholder' => __('Subject')));
		echo $this->Form->input('Message.body', array('placeholder' => __('Message')));
		if ($contact['Contact']['message_captcha']):
			echo $this->Recaptcha->display_form();
		endif;
		echo $this->Form->button(__('Send'), array('class' => 'btn btn-primary'));
		echo $this->Form->end();
	?>
	</div>
	<?php endif; ?>
</div>