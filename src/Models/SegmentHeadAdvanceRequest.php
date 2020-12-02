<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SegmentHeadAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var string
     */
    public $returnForm;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'returnForm'     => 'ReturnForm',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->returnForm) {
            $res['ReturnForm'] = $this->returnForm;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentHeadAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['ReturnForm'])) {
            $model->returnForm = $map['ReturnForm'];
        }

        return $model;
    }
}
