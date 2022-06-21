<?php

namespace Wireframe\Controller;

class FinancialProductIndexController extends \Wireframe\Controller
{
    public function render()
    {
        $searchString = "template=financial-product";
        $queryInput = '';
        if ($this->input->get('query')) {
            $queryInput = $this->input->get->text('query');
            $searchString .= ", title|content=$queryInput";
        }
        $sort = 'title';
        if($this->input->get('sort')) {
            $sort = $this->input->get->string('sort');
        }
        $products = $this->pages->find($searchString.", sort=$sort, limit=12");
        $pagination = $products->renderPager(array(
            'nextItemLabel' => "Weiter",
            'previousItemLabel' => "Zurück",
            'listMarkup' => "<ul class='pagination'>{out}</ul>",
            'itemMarkup' => "<li class='page-item'>{out}</li>",
            'linkMarkup' => "<a class='page-link' href='{url}?sort=$sort&query=$queryInput'>{out}</a>",
            'currentLinkMarkup' => "<a class='page-link' href='{url}?sort=$sort&query=$queryInput'>{out}</a>",
        ));

        $this->view->pagination = $pagination;
        $this->view->products = $products;
    }
}
