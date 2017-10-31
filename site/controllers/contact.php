<?

return function($site, $pages, $page) {

  // IMPORTANT: must match form ID
  $form = uniform('contact-form', [
      'required' => [
        'name' => '',
        'email' => 'email',
        'text' => ''
      ],
      'actions'  => [
        [
          '_action' => 'email',
          'to'      => $page->email(),
          'sender'  => $page->email(),
          'subject' => 'New message via the jamesferrell.me contact form'
        ]
      ]
    ]
  );

  return compact('form');
};
