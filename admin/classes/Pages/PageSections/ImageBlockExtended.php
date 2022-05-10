<?php

namespace Pages\PageSections;

use Core\Attributes\Data;
use Core\Attributes\ImageValue;
use Core\Elements\Checkbox;
use Core\Elements\Editor;
use Core\Elements\Group;
use Core\Elements\ImageElement;
use Core\Elements\Text;
use Core\Elements\Url;
use Core\Generator;
use Core\Properties\ImageProperty;
use Files\Image;
use Media\StreamingVideo;

/**
 * Displays an image or video next to some content
 */
class ImageBlockExtended extends Generator implements PageSection
{
    const TABLE = "image_block_extended";
    const ID_FIELD = "image_block_extended_id";

    #[Data("content", "html")]
    public string $content = "";


    #[Data("image_description")]
    public string $imageDescription = "";

    #[ImageValue("image", DOC_ROOT . "/resources/images/page/", 1204, 670, ImageProperty::SCALE)]
    public ?Image $image = null;

    protected function elements()
    {
        parent::elements();

        $this->addElement(new Editor("content", "Content"));
        $this->addElement(new ImageElement("image", "Image"));
        $this->addElement(new Text("imageDescription", "Image Description"));
    }

    //region PageSection

    function getTemplateLocation(): string
    {
        return "pages/sections/image-block-extended.twig";
    }

    //endregion
}
