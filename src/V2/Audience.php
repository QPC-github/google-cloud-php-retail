<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/common.proto

namespace Google\Cloud\Retail\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An intended audience of the [Product][google.cloud.retail.v2.Product] for
 * whom it's sold.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.Audience</code>
 */
class Audience extends \Google\Protobuf\Internal\Message
{
    /**
     * The genders of the audience. Strongly encouraged to use the standard
     * values: "male", "female", "unisex".
     * At most 5 values are allowed. Each value must be a UTF-8 encoded string
     * with a length limit of 128 characters. Otherwise, an INVALID_ARGUMENT error
     * is returned.
     * Google Merchant Center property
     * [gender](https://support.google.com/merchants/answer/6324479). Schema.org
     * property
     * [Product.audience.suggestedGender](https://schema.org/suggestedGender).
     *
     * Generated from protobuf field <code>repeated string genders = 1;</code>
     */
    private $genders;
    /**
     * The age groups of the audience. Strongly encouraged to use the standard
     * values: "newborn" (up to 3 months old), "infant" (3–12 months old),
     * "toddler" (1–5 years old), "kids" (5–13 years old), "adult" (typically
     * teens or older).
     * At most 5 values are allowed. Each value must be a UTF-8 encoded string
     * with a length limit of 128 characters. Otherwise, an INVALID_ARGUMENT error
     * is returned.
     * Google Merchant Center property
     * [age_group](https://support.google.com/merchants/answer/6324463).
     * Schema.org property
     * [Product.audience.suggestedMinAge](https://schema.org/suggestedMinAge) and
     * [Product.audience.suggestedMaxAge](https://schema.org/suggestedMaxAge).
     *
     * Generated from protobuf field <code>repeated string age_groups = 2;</code>
     */
    private $age_groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $genders
     *           The genders of the audience. Strongly encouraged to use the standard
     *           values: "male", "female", "unisex".
     *           At most 5 values are allowed. Each value must be a UTF-8 encoded string
     *           with a length limit of 128 characters. Otherwise, an INVALID_ARGUMENT error
     *           is returned.
     *           Google Merchant Center property
     *           [gender](https://support.google.com/merchants/answer/6324479). Schema.org
     *           property
     *           [Product.audience.suggestedGender](https://schema.org/suggestedGender).
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $age_groups
     *           The age groups of the audience. Strongly encouraged to use the standard
     *           values: "newborn" (up to 3 months old), "infant" (3–12 months old),
     *           "toddler" (1–5 years old), "kids" (5–13 years old), "adult" (typically
     *           teens or older).
     *           At most 5 values are allowed. Each value must be a UTF-8 encoded string
     *           with a length limit of 128 characters. Otherwise, an INVALID_ARGUMENT error
     *           is returned.
     *           Google Merchant Center property
     *           [age_group](https://support.google.com/merchants/answer/6324463).
     *           Schema.org property
     *           [Product.audience.suggestedMinAge](https://schema.org/suggestedMinAge) and
     *           [Product.audience.suggestedMaxAge](https://schema.org/suggestedMaxAge).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * The genders of the audience. Strongly encouraged to use the standard
     * values: "male", "female", "unisex".
     * At most 5 values are allowed. Each value must be a UTF-8 encoded string
     * with a length limit of 128 characters. Otherwise, an INVALID_ARGUMENT error
     * is returned.
     * Google Merchant Center property
     * [gender](https://support.google.com/merchants/answer/6324479). Schema.org
     * property
     * [Product.audience.suggestedGender](https://schema.org/suggestedGender).
     *
     * Generated from protobuf field <code>repeated string genders = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGenders()
    {
        return $this->genders;
    }

    /**
     * The genders of the audience. Strongly encouraged to use the standard
     * values: "male", "female", "unisex".
     * At most 5 values are allowed. Each value must be a UTF-8 encoded string
     * with a length limit of 128 characters. Otherwise, an INVALID_ARGUMENT error
     * is returned.
     * Google Merchant Center property
     * [gender](https://support.google.com/merchants/answer/6324479). Schema.org
     * property
     * [Product.audience.suggestedGender](https://schema.org/suggestedGender).
     *
     * Generated from protobuf field <code>repeated string genders = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGenders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->genders = $arr;

        return $this;
    }

    /**
     * The age groups of the audience. Strongly encouraged to use the standard
     * values: "newborn" (up to 3 months old), "infant" (3–12 months old),
     * "toddler" (1–5 years old), "kids" (5–13 years old), "adult" (typically
     * teens or older).
     * At most 5 values are allowed. Each value must be a UTF-8 encoded string
     * with a length limit of 128 characters. Otherwise, an INVALID_ARGUMENT error
     * is returned.
     * Google Merchant Center property
     * [age_group](https://support.google.com/merchants/answer/6324463).
     * Schema.org property
     * [Product.audience.suggestedMinAge](https://schema.org/suggestedMinAge) and
     * [Product.audience.suggestedMaxAge](https://schema.org/suggestedMaxAge).
     *
     * Generated from protobuf field <code>repeated string age_groups = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAgeGroups()
    {
        return $this->age_groups;
    }

    /**
     * The age groups of the audience. Strongly encouraged to use the standard
     * values: "newborn" (up to 3 months old), "infant" (3–12 months old),
     * "toddler" (1–5 years old), "kids" (5–13 years old), "adult" (typically
     * teens or older).
     * At most 5 values are allowed. Each value must be a UTF-8 encoded string
     * with a length limit of 128 characters. Otherwise, an INVALID_ARGUMENT error
     * is returned.
     * Google Merchant Center property
     * [age_group](https://support.google.com/merchants/answer/6324463).
     * Schema.org property
     * [Product.audience.suggestedMinAge](https://schema.org/suggestedMinAge) and
     * [Product.audience.suggestedMaxAge](https://schema.org/suggestedMaxAge).
     *
     * Generated from protobuf field <code>repeated string age_groups = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAgeGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->age_groups = $arr;

        return $this;
    }

}

