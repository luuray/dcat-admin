<?php

namespace Dcat\Admin\Grid\Actions;

use Dcat\Admin\Grid\RowAction;

class Delete extends RowAction
{
    /**
     * @return array|null|string
     */
    public function title()
    {
        return __('admin.delete');
    }

    public function render()
    {
        $this->setHtmlAttribute([
            'data-url'    => $this->url(),
            'data-action' => 'delete',
        ]);

        return parent::render(); // TODO: Change the autogenerated stub
    }

    public function url()
    {
        return "{$this->resource()}/{$this->getKey()}";
    }
}
