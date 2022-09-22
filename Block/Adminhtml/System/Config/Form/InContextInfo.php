<?php
/**
 * @category    Sezzle
 * @package     Sezzle_Sezzlepay
 * @copyright   Copyright (c) Sezzle (https://www.sezzle.com/)
 */

namespace Sezzle\Sezzlepay\Block\Adminhtml\System\Config\Form;


use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class InContextInfo extends Field
{
    /**
     * Render element value
     *
     * @param AbstractElement $element
     * @return string
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function render(AbstractElement $element)
    {
        $output = '<div class="deprecated-message">';
        $output .= '<div class="comment">';
        $output .= __("Certifique-se de ser aprovado pela Sezzle para que a Solução de Checkout no Contexto funcione.");
        $output .= "</div></div>";
        return $output;
    }

}
