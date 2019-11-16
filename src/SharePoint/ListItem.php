<?php

/**
 * Updated By PHP Office365 Generator 2019-11-16T17:57:50+00:00 16.0.19506.12022
 */
namespace Office365\PHP\Client\SharePoint;

use Exception;
use Office365\PHP\Client\Runtime\DeleteEntityQuery;
use Office365\PHP\Client\Runtime\UpdateEntityQuery;
use Office365\PHP\Client\Runtime\ResourcePathEntity;
use Office365\PHP\Client\Runtime\Utilities\RequestOptions;
/**
 * Specifies 
 * a list 
 * item.Contains CSOM expando fields, 
 * which correspond to the fields (2) defined 
 * in the parent list. The 
 * CSOM expando field name is the name of the field (2) defined in the list 
 * and the CSOM expando field value is the field (2) value in the list item. The 
 * following table specifies the mapping between field types and 
 * values.Field typeMapping to a valueIntegerWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Int32.TextWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM String.NoteWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM String.DateTimeWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM DateTime.CounterIt MUST be a CSOM Int32.ChoiceWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM String.LookupWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Object of 
 *   type FieldLookupValue, as specified in section 3.2.5.50.BooleanWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Boolean.NumberWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Double.CurrencyWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Double.URLWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Object of type FieldUrlValue, asspecified in 
 *   section 3.2.5.60.ComputedN/AThreadingWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM String.GuidWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM GUID.MultiChoiceWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Array.GridChoiceWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Array.CalculatedN/AFileWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM String.AttachmentsWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Boolean.UserWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Object of type FieldUserValue, asspecified 
 *   in section 3.2.5.63.RecurrenceWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Boolean.CrossProjectLinkWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Boolean.ModStatWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Int32.ErrorN/AContentTypeIdWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be CSOM Object of type ContentTypeId, as specified in section 3.2.5.30.PageSeparatorN/AThreadIndexWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM String.WorkflowStatusWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Int32.AllDayEventWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Boolean.WorkflowEventTypeWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Int32.FacilitiesWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Array.FreeBusyWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM String.OverbookWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM String.ConfidentialWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Boolean.WhatsNewWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Boolean.DueDateWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM DateTime.AllowEditingWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Boolean.SendToWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Array.ConfirmationsWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM String.CallToWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM Array.CallTimeWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM DateTime.WhereaboutWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM String.FromWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM DateTime.UntilWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM DateTime.ContactInfoWhen its value is undefined it MUST be NULL, otherwise 
 *   it MUST be a CSOM String.The Client_Title, CommentsDisabled, CommentsDisabledScope, DisplayName, 
 * EffectiveBasePermissions, EffectiveBasePermissionsForUI, 
 * HasUniqueRoleAssignments and IconOverlay properties are not included in the default 
 * scalar property set for this type.
 */
class ListItem extends SecurableObject
{
    /**
     * Updates list item resource
     */
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
    function getProperty($name)
    {
        if (!$this->isPropertyAvailable($name)) {
            if ($name == "Folder") {
                return $this->getFolder();
            } elseif ($name == "File") {
                return $this->getFile();
            }
        }
        return parent::getProperty($name);
    }
    /**
     * Determine whether ListItemEntityTypeFullName property has been requested
     * @return mixed|string|null
     * @throws Exception
     */
    public function getTypeName()
    {
        $list = $this->getParentList();
        if (!isset($this->resourceType)) {
            if (!$list->isPropertyAvailable("ListItemEntityTypeFullName")) {
                $request = new RequestOptions($list->getResourceUrl() . "?\$select=ListItemEntityTypeFullName");
                $response = $this->getContext()->executeQueryDirect($request);
                $response->map($list, $this->getContext()->getFormat());
            }
            $this->resourceType = $list->getProperty("ListItemEntityTypeFullName");
        }
        return $this->resourceType;
    }
    /**
     * @return AttachmentCollection
     */
    public function getAttachmentFiles()
    {
        if (!$this->isPropertyAvailable('AttachmentFiles')) {
            $this->setProperty("AttachmentFiles", new AttachmentCollection($this->getContext(), new ResourcePathEntity($this->getContext(), $this->getResourcePath(), "AttachmentFiles")), false);
        }
        return $this->getProperty("AttachmentFiles");
    }
    /**
     * Gets the parent list that contains the list item.
     * @return SPList
     */
    public function getParentList()
    {
        if (!$this->isPropertyAvailable('ParentList')) {
            $this->setProperty("ParentList", new SPList($this->getContext(), new ResourcePathEntity($this->getContext(), $this->getResourcePath(), "parentlist")), false);
        }
        return $this->getProperty("ParentList");
    }
    /**
     * Gets the associated Folder resource.
     * @return Folder
     */
    public function getFolder()
    {
        if (!$this->isPropertyAvailable('Folder')) {
            $this->setProperty("Folder", new Folder($this->getContext(), new ResourcePathEntity($this->getContext(), $this->getResourcePath(), "Folder")), false);
        }
        return $this->getProperty("Folder");
    }
    /**
     * Gets the associated File resource.
     * @return File
     */
    public function getFile()
    {
        if (!$this->isPropertyAvailable('File')) {
            $this->setProperty("File", new File($this->getContext(), new ResourcePathEntity($this->getContext(), $this->getResourcePath(), "File")), false);
        }
        return $this->getProperty("File");
    }
    /**
     * Indicates 
     * whether comments for this item are disabled or not.
     * @return bool
     */
    public function getCommentsDisabled()
    {
        if (!$this->isPropertyAvailable("CommentsDisabled")) {
            return null;
        }
        return $this->getProperty("CommentsDisabled");
    }
    /**
     * Indicates 
     * whether comments for this item are disabled or not.
     * @var bool
     */
    public function setCommentsDisabled($value)
    {
        $this->setProperty("CommentsDisabled", $value, true);
    }
    /**
     * Indicates 
     * at what scope comments are disabled.
     * @return integer
     */
    public function getCommentsDisabledScope()
    {
        if (!$this->isPropertyAvailable("CommentsDisabledScope")) {
            return null;
        }
        return $this->getProperty("CommentsDisabledScope");
    }
    /**
     * Indicates 
     * at what scope comments are disabled.
     * @var integer
     */
    public function setCommentsDisabledScope($value)
    {
        $this->setProperty("CommentsDisabledScope", $value, true);
    }
    /**
     * @return ListItemComplianceInfo
     */
    public function getComplianceInfo()
    {
        if (!$this->isPropertyAvailable("ComplianceInfo")) {
            return null;
        }
        return $this->getProperty("ComplianceInfo");
    }
    /**
     * @var ListItemComplianceInfo
     */
    public function setComplianceInfo($value)
    {
        $this->setProperty("ComplianceInfo", $value, true);
    }
    /**
     * Specifies 
     * the display 
     * name of the list item. It MUST 
     * NOT be NULL. It MUST NOT be empty. 
     * @return string
     */
    public function getDisplayName()
    {
        if (!$this->isPropertyAvailable("DisplayName")) {
            return null;
        }
        return $this->getProperty("DisplayName");
    }
    /**
     * Specifies 
     * the display 
     * name of the list item. It MUST 
     * NOT be NULL. It MUST NOT be empty. 
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
    /**
     * Specifies 
     * the permissions 
     * on the list item that are 
     * assigned to the current user.It MUST 
     * NOT be NULL. 
     * @return BasePermissions
     */
    public function getEffectiveBasePermissions()
    {
        if (!$this->isPropertyAvailable("EffectiveBasePermissions")) {
            return null;
        }
        return $this->getProperty("EffectiveBasePermissions");
    }
    /**
     * Specifies 
     * the permissions 
     * on the list item that are 
     * assigned to the current user.It MUST 
     * NOT be NULL. 
     * @var BasePermissions
     */
    public function setEffectiveBasePermissions($value)
    {
        $this->setProperty("EffectiveBasePermissions", $value, true);
    }
    /**
     * Specifies 
     * the effective base permissions for the current user, as they SHOULD be 
     * displayed in the user interface (UI).<61> If the 
     * list is not in read-only UI mode, the value of EffectiveBasePermissionsForUI 
     * MUST be the same as the value of EffectiveBasePermissions (section 3.2.5.87.1.1.2). 
     * If the list is in read-only UI mode, the value of EffectiveBasePermissionsForUI 
     * MUST be a subset of the value of EffectiveBasePermissions.It MUST 
     * NOT be NULL. 
     * @return BasePermissions
     */
    public function getEffectiveBasePermissionsForUI()
    {
        if (!$this->isPropertyAvailable("EffectiveBasePermissionsForUI")) {
            return null;
        }
        return $this->getProperty("EffectiveBasePermissionsForUI");
    }
    /**
     * Specifies 
     * the effective base permissions for the current user, as they SHOULD be 
     * displayed in the user interface (UI).<61> If the 
     * list is not in read-only UI mode, the value of EffectiveBasePermissionsForUI 
     * MUST be the same as the value of EffectiveBasePermissions (section 3.2.5.87.1.1.2). 
     * If the list is in read-only UI mode, the value of EffectiveBasePermissionsForUI 
     * MUST be a subset of the value of EffectiveBasePermissions.It MUST 
     * NOT be NULL. 
     * @var BasePermissions
     */
    public function setEffectiveBasePermissionsForUI($value)
    {
        $this->setProperty("EffectiveBasePermissionsForUI", $value, true);
    }
    /**
     * Specifies 
     * whether the list item is a file 
     * or a list 
     * folder. It MUST be 
     * one of the following values: File or Folder.
     * @return integer
     */
    public function getFileSystemObjectType()
    {
        if (!$this->isPropertyAvailable("FileSystemObjectType")) {
            return null;
        }
        return $this->getProperty("FileSystemObjectType");
    }
    /**
     * Specifies 
     * whether the list item is a file 
     * or a list 
     * folder. It MUST be 
     * one of the following values: File or Folder.
     * @var integer
     */
    public function setFileSystemObjectType($value)
    {
        $this->setProperty("FileSystemObjectType", $value, true);
    }
    /**
     * This is an 
     * overlay icon for the item. If the parent list of the item does not already have 
     * the IconOverlay field and The user setting the property does not have rights to 
     * add the field to the list then the property will not be set for the item.
     * @return string
     */
    public function getIconOverlay()
    {
        if (!$this->isPropertyAvailable("IconOverlay")) {
            return null;
        }
        return $this->getProperty("IconOverlay");
    }
    /**
     * This is an 
     * overlay icon for the item. If the parent list of the item does not already have 
     * the IconOverlay field and The user setting the property does not have rights to 
     * add the field to the list then the property will not be set for the item.
     * @var string
     */
    public function setIconOverlay($value)
    {
        $this->setProperty("IconOverlay", $value, true);
    }
    /**
     * Specifies 
     * the list 
     * item identifier. It MUST be 0 for a list item in an external 
     * list. It MUST be -1 for list items that have not yet been added to a 
     * list.
     * @return integer
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
     * the list 
     * item identifier. It MUST be 0 for a list item in an external 
     * list. It MUST be -1 for list items that have not yet been added to a 
     * list.
     * @var integer
     */
    public function setId($value)
    {
        $this->setProperty("Id", $value, true);
    }
    /**
     * Returns 
     * the path for previewing a document in the browser, often in an interactive way, 
     * if that feature exists.
     * @return string
     */
    public function getServerRedirectedEmbedUri()
    {
        if (!$this->isPropertyAvailable("ServerRedirectedEmbedUri")) {
            return null;
        }
        return $this->getProperty("ServerRedirectedEmbedUri");
    }
    /**
     * Returns 
     * the path for previewing a document in the browser, often in an interactive way, 
     * if that feature exists.
     * @var string
     */
    public function setServerRedirectedEmbedUri($value)
    {
        $this->setProperty("ServerRedirectedEmbedUri", $value, true);
    }
    /**
     * Returns 
     * the URL for previewing a document in the browser, often in an interactive way, 
     * if that feature exists. This is currently used in the hovering panel of search 
     * results and document library.
     * @return string
     */
    public function getServerRedirectedEmbedUrl()
    {
        if (!$this->isPropertyAvailable("ServerRedirectedEmbedUrl")) {
            return null;
        }
        return $this->getProperty("ServerRedirectedEmbedUrl");
    }
    /**
     * Returns 
     * the URL for previewing a document in the browser, often in an interactive way, 
     * if that feature exists. This is currently used in the hovering panel of search 
     * results and document library.
     * @var string
     */
    public function setServerRedirectedEmbedUrl($value)
    {
        $this->setProperty("ServerRedirectedEmbedUrl", $value, true);
    }
    /**
     * Gets the 
     * title of the item.
     * @return string
     */
    public function getClient_Title()
    {
        if (!$this->isPropertyAvailable("Client_Title")) {
            return null;
        }
        return $this->getProperty("Client_Title");
    }
    /**
     * Gets the 
     * title of the item.
     * @var string
     */
    public function setClient_Title($value)
    {
        $this->setProperty("Client_Title", $value, true);
    }
    /**
     * Specifies 
     * the content 
     * type of the list item. It MUST 
     * be NULL if the list item has no content type.
     * @return ContentType
     */
    public function getContentType()
    {
        if (!$this->isPropertyAvailable("ContentType")) {
            $this->setProperty("ContentType", new ContentType($this->getContext(), new ResourcePathEntity($this->getContext(), $this->getResourcePath(), "ContentType")));
        }
        return $this->getProperty("ContentType");
    }


}
