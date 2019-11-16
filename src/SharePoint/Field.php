<?php

/**
 * Updated By PHP Office365 Generator 2019-11-16T19:06:19+00:00 16.0.19506.12022
 */
namespace Office365\PHP\Client\SharePoint;

use Office365\PHP\Client\Runtime\DeleteEntityQuery;
use Office365\PHP\Client\Runtime\InvokePostMethodQuery;
use Office365\PHP\Client\Runtime\UpdateEntityQuery;
use Office365\PHP\Client\Runtime\ClientObject;
/**
 * Represent 
 * a field 
 * (2) that is specified in [MS-WSSTS] 
 * section 2.1.2.9.The NoCrawl and SchemaXmlWithResourceTokens properties are 
 * not included in the default scalar property set 
 * for this type.
 */
class Field extends ClientObject
{
    public function update()
    {
        $qry = new UpdateEntityQuery($this);
        $this->getContext()->addQuery($qry, $this);
    }
    public function deleteObject()
    {
        $qry = new DeleteEntityQuery($this);
        $this->getContext()->addQuery($qry);
    }
    /**
     * Sets the value of the ShowInDisplayForm property for this field.
     * @param $value true to show the field in the form; otherwise false.
     */
    public function setShowInDisplayForm($value)
    {
        $qry = new InvokePostMethodQuery($this->getResourcePath(), "setShowInDisplayForm", array($value));
        $this->getContext()->addQuery($qry);
    }
    /**
     * Gets a 
     * Boolean value that specifies whether the field is auto-indexed.True to 
     * specify that the field is auto-indexed; otherwise, false.
     * @return bool
     */
    public function getAutoIndexed()
    {
        if (!$this->isPropertyAvailable("AutoIndexed")) {
            return null;
        }
        return $this->getProperty("AutoIndexed");
    }
    /**
     * Gets a 
     * Boolean value that specifies whether the field is auto-indexed.True to 
     * specify that the field is auto-indexed; otherwise, false.
     * @var bool
     */
    public function setAutoIndexed($value)
    {
        $this->setProperty("AutoIndexed", $value, true);
    }
    /**
     * Specifies 
     * whether the field (2) can be 
     * deleted.
     * @return bool
     */
    public function getCanBeDeleted()
    {
        if (!$this->isPropertyAvailable("CanBeDeleted")) {
            return null;
        }
        return $this->getProperty("CanBeDeleted");
    }
    /**
     * Specifies 
     * whether the field (2) can be 
     * deleted.
     * @var bool
     */
    public function setCanBeDeleted($value)
    {
        $this->setProperty("CanBeDeleted", $value, true);
    }
    /**
     * The unique 
     * identifier of the client-side component defined with SharePoint Framework.
     * @return string
     */
    public function getClientSideComponentId()
    {
        if (!$this->isPropertyAvailable("ClientSideComponentId")) {
            return null;
        }
        return $this->getProperty("ClientSideComponentId");
    }
    /**
     * The unique 
     * identifier of the client-side component defined with SharePoint Framework.
     * @var string
     */
    public function setClientSideComponentId($value)
    {
        $this->setProperty("ClientSideComponentId", $value, true);
    }
    /**
     * This 
     * property is only used when a ClientSideComponentId is specified. It is 
     * optional. If non-empty, the string MUST contain a JSON object with custom 
     * initialization properties whose format and meaning are defined by the 
     * client-side component.
     * @return string
     */
    public function getClientSideComponentProperties()
    {
        if (!$this->isPropertyAvailable("ClientSideComponentProperties")) {
            return null;
        }
        return $this->getProperty("ClientSideComponentProperties");
    }
    /**
     * This 
     * property is only used when a ClientSideComponentId is specified. It is 
     * optional. If non-empty, the string MUST contain a JSON object with custom 
     * initialization properties whose format and meaning are defined by the 
     * client-side component.
     * @var string
     */
    public function setClientSideComponentProperties($value)
    {
        $this->setProperty("ClientSideComponentProperties", $value, true);
    }
    /**
     * @return string
     */
    public function getClientValidationFormula()
    {
        if (!$this->isPropertyAvailable("ClientValidationFormula")) {
            return null;
        }
        return $this->getProperty("ClientValidationFormula");
    }
    /**
     * @var string
     */
    public function setClientValidationFormula($value)
    {
        $this->setProperty("ClientValidationFormula", $value, true);
    }
    /**
     * @return string
     */
    public function getClientValidationMessage()
    {
        if (!$this->isPropertyAvailable("ClientValidationMessage")) {
            return null;
        }
        return $this->getProperty("ClientValidationMessage");
    }
    /**
     * @var string
     */
    public function setClientValidationMessage($value)
    {
        $this->setProperty("ClientValidationMessage", $value, true);
    }
    /**
     * A JSON 
     * string representing the custom rendering format of the field.
     * @return string
     */
    public function getCustomFormatter()
    {
        if (!$this->isPropertyAvailable("CustomFormatter")) {
            return null;
        }
        return $this->getProperty("CustomFormatter");
    }
    /**
     * A JSON 
     * string representing the custom rendering format of the field.
     * @var string
     */
    public function setCustomFormatter($value)
    {
        $this->setProperty("CustomFormatter", $value, true);
    }
    /**
     * Gets or 
     * sets the default formula for a calculated field.
     * @return string
     */
    public function getDefaultFormula()
    {
        if (!$this->isPropertyAvailable("DefaultFormula")) {
            return null;
        }
        return $this->getProperty("DefaultFormula");
    }
    /**
     * Gets or 
     * sets the default formula for a calculated field.
     * @var string
     */
    public function setDefaultFormula($value)
    {
        $this->setProperty("DefaultFormula", $value, true);
    }
    /**
     * Specifies 
     * the default value for the field (2).Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @return string
     */
    public function getDefaultValue()
    {
        if (!$this->isPropertyAvailable("DefaultValue")) {
            return null;
        }
        return $this->getProperty("DefaultValue");
    }
    /**
     * Specifies 
     * the default value for the field (2).Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @var string
     */
    public function setDefaultValue($value)
    {
        $this->setProperty("DefaultValue", $value, true);
    }
    /**
     * Specifies 
     * the description of the field (2). 
     * @return string
     */
    public function getDescription()
    {
        if (!$this->isPropertyAvailable("Description")) {
            return null;
        }
        return $this->getProperty("Description");
    }
    /**
     * Specifies 
     * the description of the field (2). 
     * @var string
     */
    public function setDescription($value)
    {
        $this->setProperty("Description", $value, true);
    }
    /**
     * Specifies 
     * the reading 
     * order of the field (2). Its value 
     * is implementation-specific to the client used to browse instances of this field 
     * (2). If the value is set to "none", Microsoft.SharePoint.Client.List.Direction 
     * specifies the reading order of the field (2) that is specified in section 3.2.5.79.1.1.14.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed to a value other than 
     *   "none," and the list is an external 
     *   list.
     * @return string
     */
    public function getDirection()
    {
        if (!$this->isPropertyAvailable("Direction")) {
            return null;
        }
        return $this->getProperty("Direction");
    }
    /**
     * Specifies 
     * the reading 
     * order of the field (2). Its value 
     * is implementation-specific to the client used to browse instances of this field 
     * (2). If the value is set to "none", Microsoft.SharePoint.Client.List.Direction 
     * specifies the reading order of the field (2) that is specified in section 3.2.5.79.1.1.14.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed to a value other than 
     *   "none," and the list is an external 
     *   list.
     * @var string
     */
    public function setDirection($value)
    {
        $this->setProperty("Direction", $value, true);
    }
    /**
     * Specifies 
     * whether the field (2) enforces 
     * unique values.The value 
     * MUST NOT be set to "true" for the following built-in fields (2)Field IdentifierField Name{1df5e554-ec7e-46a6-901d-d85a3881cb18}Author{d31655d1-1d5b-4511-95a1-7a09e9b75bf2}Editor{28cf69c5-fa48-462a-b5cd-27b6f9d2bd5f}Modified{7841bf41-43d0-4434-9f50-a673baef7631}_UIVersion{8c06beca-0777-48f7-91c7-6da68bc07b69}Created{26d0756c-986a-48a7-af35-bf18ab85ff4a}_HasCopyDestinations{3881510a-4e4a-4ee8-b102-8ee8e2d0dd4b}CheckoutUser{c042a256-787d-4a6f-8a8a-cf6ab767f12d}ContentTypeExceptions: Error CodeError Type NameCondition-1System.NotSupportedExceptionAdding unique column constraints 
     *   to the field (2) where the list is an external 
     *   list.
     * @return bool
     */
    public function getEnforceUniqueValues()
    {
        if (!$this->isPropertyAvailable("EnforceUniqueValues")) {
            return null;
        }
        return $this->getProperty("EnforceUniqueValues");
    }
    /**
     * Specifies 
     * whether the field (2) enforces 
     * unique values.The value 
     * MUST NOT be set to "true" for the following built-in fields (2)Field IdentifierField Name{1df5e554-ec7e-46a6-901d-d85a3881cb18}Author{d31655d1-1d5b-4511-95a1-7a09e9b75bf2}Editor{28cf69c5-fa48-462a-b5cd-27b6f9d2bd5f}Modified{7841bf41-43d0-4434-9f50-a673baef7631}_UIVersion{8c06beca-0777-48f7-91c7-6da68bc07b69}Created{26d0756c-986a-48a7-af35-bf18ab85ff4a}_HasCopyDestinations{3881510a-4e4a-4ee8-b102-8ee8e2d0dd4b}CheckoutUser{c042a256-787d-4a6f-8a8a-cf6ab767f12d}ContentTypeExceptions: Error CodeError Type NameCondition-1System.NotSupportedExceptionAdding unique column constraints 
     *   to the field (2) where the list is an external 
     *   list.
     * @var bool
     */
    public function setEnforceUniqueValues($value)
    {
        $this->setProperty("EnforceUniqueValues", $value, true);
    }
    /**
     * Gets the 
     * name of the entity property of this field (2) in the list item 
     * entity that uses this field (2).It MUST 
     * NOT be NULL. It MUST NOT be empty. 
     * @return string
     */
    public function getEntityPropertyName()
    {
        if (!$this->isPropertyAvailable("EntityPropertyName")) {
            return null;
        }
        return $this->getProperty("EntityPropertyName");
    }
    /**
     * Gets the 
     * name of the entity property of this field (2) in the list item 
     * entity that uses this field (2).It MUST 
     * NOT be NULL. It MUST NOT be empty. 
     * @var string
     */
    public function setEntityPropertyName($value)
    {
        $this->setProperty("EntityPropertyName", $value, true);
    }
    /**
     * Specifies 
     * whether list items in the list 
     * can be filtered by the field (2) value.
     * @return bool
     */
    public function getFilterable()
    {
        if (!$this->isPropertyAvailable("Filterable")) {
            return null;
        }
        return $this->getProperty("Filterable");
    }
    /**
     * Specifies 
     * whether list items in the list 
     * can be filtered by the field (2) value.
     * @var bool
     */
    public function setFilterable($value)
    {
        $this->setProperty("Filterable", $value, true);
    }
    /**
     * Gets a Boolean 
     * value that indicates whether the field (2) derives 
     * from a base field type.
     * @return bool
     */
    public function getFromBaseType()
    {
        if (!$this->isPropertyAvailable("FromBaseType")) {
            return null;
        }
        return $this->getProperty("FromBaseType");
    }
    /**
     * Gets a Boolean 
     * value that indicates whether the field (2) derives 
     * from a base field type.
     * @var bool
     */
    public function setFromBaseType($value)
    {
        $this->setProperty("FromBaseType", $value, true);
    }
    /**
     * Specifies 
     * the field 
     * group.It MUST 
     * NOT be NULL. It MUST NOT be empty. Its length MUST be equal to or less than 
     * 128. Exceptions: Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @return string
     */
    public function getGroup()
    {
        if (!$this->isPropertyAvailable("Group")) {
            return null;
        }
        return $this->getProperty("Group");
    }
    /**
     * Specifies 
     * the field 
     * group.It MUST 
     * NOT be NULL. It MUST NOT be empty. Its length MUST be equal to or less than 
     * 128. Exceptions: Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @var string
     */
    public function setGroup($value)
    {
        $this->setProperty("Group", $value, true);
    }
    /**
     * Specifies 
     * whether the field (2) is hidden 
     * in list 
     * views and list forms.
     * @return bool
     */
    public function getHidden()
    {
        if (!$this->isPropertyAvailable("Hidden")) {
            return null;
        }
        return $this->getProperty("Hidden");
    }
    /**
     * Specifies 
     * whether the field (2) is hidden 
     * in list 
     * views and list forms.
     * @var bool
     */
    public function setHidden($value)
    {
        $this->setProperty("Hidden", $value, true);
    }
    /**
     * Specifies 
     * the field 
     * identifier.
     * @return string
     */
    public function getId()
    {
        if (!$this->isPropertyAvailable("Id")) {
            return null;
        }
        return $this->getProperty("Id");
    }
    /**
     * Specifies 
     * the field 
     * identifier.
     * @var string
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * Gets or 
     * sets a Boolean value that specifies whether the field is indexed.
     * @return bool
     */
    public function getIndexed()
    {
        if (!$this->isPropertyAvailable("Indexed")) {
            return null;
        }
        return $this->getProperty("Indexed");
    }
    /**
     * Gets or 
     * sets a Boolean value that specifies whether the field is indexed.
     * @var bool
     */
    public function setIndexed($value)
    {
        $this->setProperty("Indexed", $value, true);
    }
    /**
     * Specifies 
     * the field 
     * internal name.It MUST 
     * NOT be NULL. It MUST NOT be empty. 
     * @return string
     */
    public function getInternalName()
    {
        if (!$this->isPropertyAvailable("InternalName")) {
            return null;
        }
        return $this->getProperty("InternalName");
    }
    /**
     * Specifies 
     * the field 
     * internal name.It MUST 
     * NOT be NULL. It MUST NOT be empty. 
     * @var string
     */
    public function setInternalName($value)
    {
        $this->setProperty("InternalName", $value, true);
    }
    /**
     * Gets the name 
     * of an external ECMAScript ([ECMA-262-1999]) 
     * file containing any client rendering logic for fields (2) of this 
     * type.
     * @return string
     */
    public function getJSLink()
    {
        if (!$this->isPropertyAvailable("JSLink")) {
            return null;
        }
        return $this->getProperty("JSLink");
    }
    /**
     * Gets the name 
     * of an external ECMAScript ([ECMA-262-1999]) 
     * file containing any client rendering logic for fields (2) of this 
     * type.
     * @var string
     */
    public function setJSLink($value)
    {
        $this->setProperty("JSLink", $value, true);
    }
    /**
     * Gets or 
     * sets a Boolean value that specifies whether the field can be crawled by a 
     * search engine.
     * @return bool
     */
    public function getNoCrawl()
    {
        if (!$this->isPropertyAvailable("NoCrawl")) {
            return null;
        }
        return $this->getProperty("NoCrawl");
    }
    /**
     * Gets or 
     * sets a Boolean value that specifies whether the field can be crawled by a 
     * search engine.
     * @var bool
     */
    public function setNoCrawl($value)
    {
        $this->setProperty("NoCrawl", $value, true);
    }
    /**
     * Boolean 
     * value that indicates whether the field pins to filter pane.
     * @return bool
     */
    public function getPinnedToFiltersPane()
    {
        if (!$this->isPropertyAvailable("PinnedToFiltersPane")) {
            return null;
        }
        return $this->getProperty("PinnedToFiltersPane");
    }
    /**
     * Boolean 
     * value that indicates whether the field pins to filter pane.
     * @var bool
     */
    public function setPinnedToFiltersPane($value)
    {
        $this->setProperty("PinnedToFiltersPane", $value, true);
    }
    /**
     * Specifies 
     * whether the value of the field (2) is 
     * read-only.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @return bool
     */
    public function getReadOnlyField()
    {
        if (!$this->isPropertyAvailable("ReadOnlyField")) {
            return null;
        }
        return $this->getProperty("ReadOnlyField");
    }
    /**
     * Specifies 
     * whether the value of the field (2) is 
     * read-only.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @var bool
     */
    public function setReadOnlyField($value)
    {
        $this->setProperty("ReadOnlyField", $value, true);
    }
    /**
     * Specifies 
     * whether the field (2) requires a 
     * value. If the field (2) requires a value, this value MUST be set to 
     * "true". Otherwise, it MUST be set to "false".Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is set to "true", and the list 
     *   is an external list.
     * @return bool
     */
    public function getRequired()
    {
        if (!$this->isPropertyAvailable("Required")) {
            return null;
        }
        return $this->getProperty("Required");
    }
    /**
     * Specifies 
     * whether the field (2) requires a 
     * value. If the field (2) requires a value, this value MUST be set to 
     * "true". Otherwise, it MUST be set to "false".Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is set to "true", and the list 
     *   is an external list.
     * @var bool
     */
    public function setRequired($value)
    {
        $this->setProperty("Required", $value, true);
    }
    /**
     * Specifies 
     * the XML 
     * schema that defines the field (2).It MUST be 
     * NULL, empty, or an XML fragment that 
     * conforms to the FieldDefinition type as defined in [MS-WSSFO2] 
     * section 2.2.8.3.3 
     * or [MS-WSSFO3] 
     * section 2.2.7.3.3.Exceptions: Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed to a non-NULL or non-empty value, and 
     *   the list is an external 
     *   list.
     * @return string
     */
    public function getSchemaXml()
    {
        if (!$this->isPropertyAvailable("SchemaXml")) {
            return null;
        }
        return $this->getProperty("SchemaXml");
    }
    /**
     * Specifies 
     * the XML 
     * schema that defines the field (2).It MUST be 
     * NULL, empty, or an XML fragment that 
     * conforms to the FieldDefinition type as defined in [MS-WSSFO2] 
     * section 2.2.8.3.3 
     * or [MS-WSSFO3] 
     * section 2.2.7.3.3.Exceptions: Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed to a non-NULL or non-empty value, and 
     *   the list is an external 
     *   list.
     * @var string
     */
    public function setSchemaXml($value)
    {
        $this->setProperty("SchemaXml", $value, true);
    }
    /**
     * Gets the 
     * unlocalized schema XML for this field (2).
     * @return string
     */
    public function getSchemaXmlWithResourceTokens()
    {
        if (!$this->isPropertyAvailable("SchemaXmlWithResourceTokens")) {
            return null;
        }
        return $this->getProperty("SchemaXmlWithResourceTokens");
    }
    /**
     * Gets the 
     * unlocalized schema XML for this field (2).
     * @var string
     */
    public function setSchemaXmlWithResourceTokens($value)
    {
        $this->setProperty("SchemaXmlWithResourceTokens", $value, true);
    }
    /**
     * Specifies 
     * the server-relative 
     * URL of the list or the site (2) 
     * that the field (2) belongs 
     * to. 
     * @return string
     */
    public function getScope()
    {
        if (!$this->isPropertyAvailable("Scope")) {
            return null;
        }
        return $this->getProperty("Scope");
    }
    /**
     * Specifies 
     * the server-relative 
     * URL of the list or the site (2) 
     * that the field (2) belongs 
     * to. 
     * @var string
     */
    public function setScope($value)
    {
        $this->setProperty("Scope", $value, true);
    }
    /**
     * Specifies 
     * whether properties on the field (2) cannot be 
     * changed and whether the field (2) cannot be deleted.
     * @return bool
     */
    public function getSealed()
    {
        if (!$this->isPropertyAvailable("Sealed")) {
            return null;
        }
        return $this->getProperty("Sealed");
    }
    /**
     * Specifies 
     * whether properties on the field (2) cannot be 
     * changed and whether the field (2) cannot be deleted.
     * @var bool
     */
    public function setSealed($value)
    {
        $this->setProperty("Sealed", $value, true);
    }
    /**
     * Indicates 
     * whether the field will be shown.
     * @return integer
     */
    public function getShowInFiltersPane()
    {
        if (!$this->isPropertyAvailable("ShowInFiltersPane")) {
            return null;
        }
        return $this->getProperty("ShowInFiltersPane");
    }
    /**
     * Indicates 
     * whether the field will be shown.
     * @var integer
     */
    public function setShowInFiltersPane($value)
    {
        $this->setProperty("ShowInFiltersPane", $value, true);
    }
    /**
     * Specifies 
     * whether list items in the list 
     * can be sorted by the field (2) value.
     * @return bool
     */
    public function getSortable()
    {
        if (!$this->isPropertyAvailable("Sortable")) {
            return null;
        }
        return $this->getProperty("Sortable");
    }
    /**
     * Specifies 
     * whether list items in the list 
     * can be sorted by the field (2) value.
     * @var bool
     */
    public function setSortable($value)
    {
        $this->setProperty("Sortable", $value, true);
    }
    /**
     * Specifies 
     * a customizable identifier of the field (2). If the 
     * value is NULL or empty, the protocol server MUST use the value of InternalName.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @return string
     */
    public function getStaticName()
    {
        if (!$this->isPropertyAvailable("StaticName")) {
            return null;
        }
        return $this->getProperty("StaticName");
    }
    /**
     * Specifies 
     * a customizable identifier of the field (2). If the 
     * value is NULL or empty, the protocol server MUST use the value of InternalName.Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @var string
     */
    public function setStaticName($value)
    {
        $this->setProperty("StaticName", $value, true);
    }
    /**
     * Specifies 
     * the display 
     * name of the field (2).
     * @return string
     */
    public function getTitle()
    {
        if (!$this->isPropertyAvailable("Title")) {
            return null;
        }
        return $this->getProperty("Title");
    }
    /**
     * Specifies 
     * the display 
     * name of the field (2).
     * @var string
     */
    public function setTitle($value)
    {
        $this->setProperty("Title", $value, true);
    }
    /**
     * Specifies 
     * the type of the field (2).Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @return integer
     */
    public function getFieldTypeKind()
    {
        if (!$this->isPropertyAvailable("FieldTypeKind")) {
            return null;
        }
        return $this->getProperty("FieldTypeKind");
    }
    /**
     * Specifies 
     * the type of the field (2).Exceptions: 
     * Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @var integer
     */
    public function setFieldTypeKind($value)
    {
        $this->setProperty("FieldTypeKind", $value, true);
    }
    /**
     * Specifies 
     * the type of the field (2).It MUST 
     * NOT be NULL. It MUST NOT be empty. Exceptions: Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @return string
     */
    public function getTypeAsString()
    {
        if (!$this->isPropertyAvailable("TypeAsString")) {
            return null;
        }
        return $this->getProperty("TypeAsString");
    }
    /**
     * Specifies 
     * the type of the field (2).It MUST 
     * NOT be NULL. It MUST NOT be empty. Exceptions: Error CodeError Type NameCondition-1System.NotSupportedExceptionValue is changed, and the list is an external 
     *   list.
     * @var string
     */
    public function setTypeAsString($value)
    {
        $this->setProperty("TypeAsString", $value, true);
    }
    /**
     * Specifies 
     * the display 
     * name for the type of the field (2).It MUST 
     * NOT be NULL. It MUST NOT be empty. 
     * @return string
     */
    public function getTypeDisplayName()
    {
        if (!$this->isPropertyAvailable("TypeDisplayName")) {
            return null;
        }
        return $this->getProperty("TypeDisplayName");
    }
    /**
     * Specifies 
     * the display 
     * name for the type of the field (2).It MUST 
     * NOT be NULL. It MUST NOT be empty. 
     * @var string
     */
    public function setTypeDisplayName($value)
    {
        $this->setProperty("TypeDisplayName", $value, true);
    }
    /**
     * Specifies 
     * the description for the type of the field (2).It MUST 
     * NOT be NULL. It MUST NOT be empty. 
     * @return string
     */
    public function getTypeShortDescription()
    {
        if (!$this->isPropertyAvailable("TypeShortDescription")) {
            return null;
        }
        return $this->getProperty("TypeShortDescription");
    }
    /**
     * Specifies 
     * the description for the type of the field (2).It MUST 
     * NOT be NULL. It MUST NOT be empty. 
     * @var string
     */
    public function setTypeShortDescription($value)
    {
        $this->setProperty("TypeShortDescription", $value, true);
    }
    /**
     * Specifies 
     * the data 
     * validation criteria for the value of the field (2).
     * @return string
     */
    public function getValidationFormula()
    {
        if (!$this->isPropertyAvailable("ValidationFormula")) {
            return null;
        }
        return $this->getProperty("ValidationFormula");
    }
    /**
     * Specifies 
     * the data 
     * validation criteria for the value of the field (2).
     * @var string
     */
    public function setValidationFormula($value)
    {
        $this->setProperty("ValidationFormula", $value, true);
    }
    /**
     * Specifies 
     * the error message returned when data validation fails 
     * for the field (2).Its length 
     * MUST be equal to or less than 1024. 
     * @return string
     */
    public function getValidationMessage()
    {
        if (!$this->isPropertyAvailable("ValidationMessage")) {
            return null;
        }
        return $this->getProperty("ValidationMessage");
    }
    /**
     * Specifies 
     * the error message returned when data validation fails 
     * for the field (2).Its length 
     * MUST be equal to or less than 1024. 
     * @var string
     */
    public function setValidationMessage($value)
    {
        $this->setProperty("ValidationMessage", $value, true);
    }
}