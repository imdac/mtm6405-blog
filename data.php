<?php 
  $posts = [
    'post-1' => [
      'title' => 'My First Post',
      'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
      'links' => [
        'next' => 'post-2'
      ]
    ],
    'post-2' => [
      'title' => 'Post Number 2',
      'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
      'links' => [
        'prev' => 'post-1',
        'next' => 'post-3'
      ]
    ],
    'post-3' => [
      'title' => 'Another Post',
      'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
      'links' => [
        'prev' => 'post-2',
        'next' => 'post-4'
      ]
    ],
    'post-4' => [
      'title' => 'My Last Post',
      'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
      'links' => [
        'prev' => 'post-3'
      ]
    ]
  ];