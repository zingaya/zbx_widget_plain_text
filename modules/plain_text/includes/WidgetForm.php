<?php
       
       namespace Modules\PlainText\Includes;

       use Zabbix\Widgets\CWidgetForm;
       
       use Zabbix\Widgets\Fields\CWidgetFieldTextBox;
       
       class WidgetForm extends CWidgetForm {
       
           public function addFields(): self {
               return $this
                   ->addField(
                      new CWidgetFieldTextBox('text', _('text'))
                   );
          }
       }
