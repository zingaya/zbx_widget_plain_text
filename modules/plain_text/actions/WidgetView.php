<?php
       
       namespace Modules\PlainText\Actions;
       
       use CControllerDashboardWidgetView,
           CControllerResponseData;
       
       class WidgetView extends CControllerDashboardWidgetView {
       
           protected function doAction(): void {
               $this->setResponse(new CControllerResponseData([
                   'name' => $this->getInput('name', $this->widget->getName()),
                   'text' => $this->fields_values['text'],
                   'user' => [
                       'debug_mode' => $this->getDebugMode()
                   ]
               ]));
           }
       }       
