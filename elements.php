<?php


class element
{
    private $HTMLKind;
    private $uniqueClass;
    private $text;
    private $hrefItem;

    /**
     * element constructor.
     * @param $HTMLKind
     * @param $uniqueClass
     * @param $text
     * @param $hrefItem
     */
    public function __construct($HTMLKind, $uniqueClass, $text, $hrefItem)
    {
        $this->HTMLKind = $HTMLKind;
        $this->uniqueClass = $uniqueClass;
        $this->text = $text;
        $this->hrefItem = $hrefItem;
    }

    public function __toString()
    {
        return $this->text;
    }

    public function create()
    {
        $wrapInA = ['button', 'div', 'p'];

        $htmlType = trim($this->HTMLKind, '"');
        $link = trim($this->hrefItem, '"');
        $text = $this->__toString();

        if ($this->uniqueClass == null){
            $this->uniqueClass = "Empty";
        }

        if (in_array($htmlType, $wrapInA)) {
            return "<a name='$htmlType' class='$this->uniqueClass' href='$link' target='_blank'><$htmlType>$text</$htmlType></a>";
        }

        return "<$htmlType class='$this->uniqueClass' href='$link' target='_blank'>$text</$htmlType>";
    }
}