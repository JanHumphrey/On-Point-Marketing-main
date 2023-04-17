<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurWorkController extends Controller
{
  public function index()
  {
    // Site Logo
    $logo_path = '/images/logo.png';
    $new_logo_path = '/images/logo_2.png';

    $banner_background = '/images/Banner_Back.png';

    $arrow_image = 'images/Arrow.png';

    // banner contact
    $banner_pages = [
      'heading' => 'our work',
    ];

    // Main Content
    $grid_image = [
      'image_1' => 'images/grid_1.png',
      'alt_1' => 'Our Work 1',

      'image_2' => 'images/grid_2.png',
      'alt_2' => 'Our Work 2',

      'image_3' => 'images/grid_3.png',
      'alt_3' => 'Our Work 3',

      'image_4' => 'images/grid_4.png',
      'alt_4' => 'Our Work 4',

      'image_5' => 'images/grid_5.png',
      'alt_5' => 'Our Work 5',
    ];

    return view('pages.our-work', compact('logo_path', 'new_logo_path', 'banner_pages', 'grid_image', 'banner_background'));
  }

  public function show($card)
  {
    $logo_path = '/images/logo.png';
    $new_logo_path = '/images/logo_2.png';

    // banner contact
    $banner_pages = [
      'heading' => 'our work',
    ];


    $cardData = [];

    // use switch statement to determine which card is selected
    switch ($card) {
      case 1:
        $cardData = [
          'title' => 'Optical Vision Website',
          'image' => '/images/grid_3.png',
          'project' => 'Website',
          'sector' => 'Optical Service',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie nunc non massa ornare dictum. Morbi eget justo ut erat pharetra dignissim in at quam. Maecenas euismod maximus tellus, id pulvinar ipsum aliquam vel. Curabitur sed porta risus. Etiam vitae arcu vel dolor luctus fringilla. Morbi ac ex vel lorem suscipit feugiat in nec magna. Nulla cursus nulla vel justo venenatis tristique. Maecenas et vulputate neque. Vivamus euismod tortor a sapien congue, quis viverra velit facilisis. Donec bibendum rutrum mauris, nec imperdiet urna sodales et.
          <br> <br>
          Donec euismod nibh ut ex pretium consequat. Nullam viverra ante malesuada leo congue dapibus. Fusce sagittis nisi mi, et ultrices enim pharetra a. Integer malesuada est ut metus auctor varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam fringilla dolor et metus laoreet, eget vulputate neque vestibulum. Duis quis commodo ipsum. Sed lobortis, enim vel tempus porttitor, sapien eros mollis odio, in blandit lacus elit sed elit. Cras gravida, est vel volutpat tincidunt, urna purus bibendum neque, quis efficitur augue nisl nec libero. Sed vulputate felis vitae odio commodo, ac commodo quam pellentesque.'
        ];
        break;

      case 2:
        $cardData = [
          'title' => 'E-Commerce Fashion Store',
          'image' => '/images/grid_3.png',
          'project' => 'Website',
          'sector' => 'Fashion Retail',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie nunc non massa ornare dictum. Morbi eget justo ut erat pharetra dignissim in at quam. Maecenas euismod maximus tellus, id pulvinar ipsum aliquam vel. Curabitur sed porta risus. Etiam vitae arcu vel dolor luctus fringilla. Morbi ac ex vel lorem suscipit feugiat in nec magna. Nulla cursus nulla vel justo venenatis tristique. Maecenas et vulputate neque. Vivamus euismod tortor a sapien congue, quis viverra velit facilisis. Donec bibendum rutrum mauris, nec imperdiet urna sodales et.
          <br><br>
          Donec euismod nibh ut ex pretium consequat. Nullam viverra ante malesuada leo congue dapibus. Fusce sagittis nisi mi, et ultrices enim pharetra a. Integer malesuada est ut metus auctor varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam fringilla dolor et metus laoreet, eget vulputate neque vestibulum. Duis quis commodo ipsum. Sed lobortis, enim vel tempus porttitor, sapien eros mollis odio, in blandit lacus elit sed elit. Cras gravida, est vel volutpat tincidunt, urna purus bibendum neque, quis efficitur augue nisl nec libero. Sed vulputate felis vitae odio commodo, ac commodo quam pellentesque.'
        ];
        break;

      case 3:
        $cardData = [
          'title' => 'Corporate Identity Design',
          'image' => '/images/grid_3.png',
          'project' => 'Graphic Design',
          'sector' => 'Business Services',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie nunc non massa ornare dictum. Morbi eget justo ut erat pharetra dignissim in at quam. Maecenas euismod maximus tellus, id pulvinar ipsum aliquam vel. Curabitur sed porta risus. Etiam vitae arcu vel dolor luctus fringilla. Morbi ac ex vel lorem suscipit feugiat in nec magna. Nulla cursus nulla vel justo venenatis tristique. Maecenas et vulputate neque. Vivamus euismod tortor a sapien congue, quis viverra velit facilisis. Donec bibendum rutrum mauris, nec imperdiet urna sodales et.
          <br><br>
          Donec euismod nibh ut ex pretium consequat. Nullam viverra ante malesuada leo congue dapibus. Fusce sagittis nisi mi, et ultrices enim pharetra a. Integer malesuada est ut metus auctor varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam fringilla dolor et metus laoreet, eget vulputate neque vestibulum. Duis quis commodo ipsum. Sed lobortis, enim vel tempus porttitor, sapien eros mollis odio, in blandit lacus elit sed elit. Cras gravida, est vel volutpat tincidunt, urna purus bibendum neque, quis efficitur augue nisl nec libero. Sed vulputate felis vitae odio commodo, ac commodo quam pellentesque.'
        ];
        break;

      case 4:
        $cardData = [
          'title' => 'Mobile App Development',
          'image' => '/images/grid_3.png',
          'project' => 'Mobile Application',
          'sector' => 'Technology',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie nunc non massa ornare dictum. Morbi eget justo ut erat pharetra dignissim in at quam. Maecenas euismod maximus tellus, id pulvinar ipsum aliquam vel. Curabitur sed porta risus. Etiam vitae arcu vel dolor luctus fringilla. Morbi ac ex vel lorem suscipit feugiat in nec magna. Nulla cursus nulla vel justo venenatis tristique. Maecenas et vulputate neque. Vivamus euismod tortor a sapien congue, quis viverra velit facilisis. Donec bibendum rutrum mauris, nec imperdiet urna sodales et.
          <br><br>
          Donec euismod nibh ut ex pretium consequat. Nullam viverra ante malesuada leo congue dapibus. Fusce sagittis nisi mi, et ultrices enim pharetra a. Integer malesuada est ut metus auctor varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam fringilla dolor et metus laoreet, eget vulputate neque vestibulum. Duis quis commodo ipsum. Sed lobortis, enim vel tempus porttitor, sapien eros mollis odio, in blandit lacus elit sed elit. Cras gravida, est vel volutpat tincidunt, urna purus bibendum neque, quis efficitur augue nisl nec libero. Sed vulputate felis vitae odio commodo, ac commodo quam pellentesque.'
        ];
        break;

      case 5:
        $cardData = [
          'title' => 'Video Production for Social Media',
          'image' => '/images/grid_3.png',
          'project' => 'Video Production',
          'sector' => 'Advertising',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie nunc non massa ornare dictum. Morbi eget justo ut erat pharetra dignissim in at quam. Maecenas euismod maximus tellus, id pulvinar ipsum aliquam vel. Curabitur sed porta risus. Etiam vitae arcu vel dolor luctus fringilla. Morbi ac ex vel lorem suscipit feugiat in nec magna. Nulla cursus nulla vel justo venenatis tristique. Maecenas et vulputate neque. Vivamus euismod tortor a sapien congue, quis viverra velit facilisis. Donec bibendum rutrum mauris, nec imperdiet urna sodales et.
          <br><br>
          Donec euismod nibh ut ex pretium consequat. Nullam viverra ante malesuada leo congue dapibus. Fusce sagittis nisi mi, et ultrices enim pharetra a. Integer malesuada est ut metus auctor varius. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam fringilla dolor et metus laoreet, eget vulputate neque vestibulum. Duis quis commodo ipsum. Sed lobortis, enim vel tempus porttitor, sapien eros mollis odio, in blandit lacus elit sed elit. Cras gravida, est vel volutpat tincidunt, urna purus bibendum neque, quis efficitur augue nisl nec libero. Sed vulputate felis vitae odio commodo, ac commodo quam pellentesque.'
        ];
        break;

      default:
        return redirect('/thank-you');
    }

    return view('pages.our-work-show', [
      'cardData' => $cardData
    ],compact('logo_path', 'new_logo_path', 'banner_pages'));
  }
}
