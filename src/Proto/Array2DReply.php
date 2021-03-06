<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: casbin.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.Array2DReply</code>
 */
class Array2DReply extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .proto.Array2DReply.d d2 = 1;</code>
     */
    private $d2;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\Array2DReply\d[]|\Google\Protobuf\Internal\RepeatedField $d2
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Casbin::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .proto.Array2DReply.d d2 = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getD2()
    {
        return $this->d2;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.Array2DReply.d d2 = 1;</code>
     * @param \Proto\Array2DReply\d[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setD2($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\Array2DReply\d::class);
        $this->d2 = $arr;

        return $this;
    }

}

