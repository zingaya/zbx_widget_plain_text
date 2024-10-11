<?php
       
       /**
        * Gauge chart widget view.
        *
        * @var CView $this
        * @var array $data
        */

       (new CWidgetView($data))
           ->addItem(
               (new CTag('h1', true, $data['text']))->addStyle('text-align: left; padding: 1%; font-size: 12px;')
           )
           ->show();
