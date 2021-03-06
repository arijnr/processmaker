<?php

require_once 'propel/om/BaseObject.php';

require_once 'propel/om/Persistent.php';


include_once 'propel/util/Criteria.php';

include_once 'classes/model/TaskPeer.php';

/**
 * Base class that represents a row from the 'TASK' table.
 *
 * 
 *
 * @package    workflow.classes.model.om
 */
abstract class BaseTask extends BaseObject implements Persistent
{

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TaskPeer
    */
    protected static $peer;

    /**
     * The value for the pro_uid field.
     * @var        string
     */
    protected $pro_uid = '';

    /**
     * The value for the tas_uid field.
     * @var        string
     */
    protected $tas_uid = '';

    /**
     * The value for the tas_id field.
     * @var        int
     */
    protected $tas_id;

    /**
     * The value for the tas_title field.
     * @var        string
     */
    protected $tas_title;

    /**
     * The value for the tas_description field.
     * @var        string
     */
    protected $tas_description;

    /**
     * The value for the tas_def_title field.
     * @var        string
     */
    protected $tas_def_title;

    /**
     * The value for the tas_def_subject_message field.
     * @var        string
     */
    protected $tas_def_subject_message;

    /**
     * The value for the tas_def_proc_code field.
     * @var        string
     */
    protected $tas_def_proc_code;

    /**
     * The value for the tas_def_message field.
     * @var        string
     */
    protected $tas_def_message;

    /**
     * The value for the tas_def_description field.
     * @var        string
     */
    protected $tas_def_description;

    /**
     * The value for the tas_type field.
     * @var        string
     */
    protected $tas_type = 'NORMAL';

    /**
     * The value for the tas_duration field.
     * @var        double
     */
    protected $tas_duration = 0;

    /**
     * The value for the tas_delay_type field.
     * @var        string
     */
    protected $tas_delay_type = '';

    /**
     * The value for the tas_temporizer field.
     * @var        double
     */
    protected $tas_temporizer = 0;

    /**
     * The value for the tas_type_day field.
     * @var        string
     */
    protected $tas_type_day = '1';

    /**
     * The value for the tas_timeunit field.
     * @var        string
     */
    protected $tas_timeunit = 'DAYS';

    /**
     * The value for the tas_alert field.
     * @var        string
     */
    protected $tas_alert = 'FALSE';

    /**
     * The value for the tas_priority_variable field.
     * @var        string
     */
    protected $tas_priority_variable = '';

    /**
     * The value for the tas_assign_type field.
     * @var        string
     */
    protected $tas_assign_type = 'BALANCED';

    /**
     * The value for the tas_assign_variable field.
     * @var        string
     */
    protected $tas_assign_variable = '@@SYS_NEXT_USER_TO_BE_ASSIGNED';

    /**
     * The value for the tas_group_variable field.
     * @var        string
     */
    protected $tas_group_variable;

    /**
     * The value for the tas_mi_instance_variable field.
     * @var        string
     */
    protected $tas_mi_instance_variable = '@@SYS_VAR_TOTAL_INSTANCE';

    /**
     * The value for the tas_mi_complete_variable field.
     * @var        string
     */
    protected $tas_mi_complete_variable = '@@SYS_VAR_TOTAL_INSTANCES_COMPLETE';

    /**
     * The value for the tas_assign_location field.
     * @var        string
     */
    protected $tas_assign_location = 'FALSE';

    /**
     * The value for the tas_assign_location_adhoc field.
     * @var        string
     */
    protected $tas_assign_location_adhoc = 'FALSE';

    /**
     * The value for the tas_transfer_fly field.
     * @var        string
     */
    protected $tas_transfer_fly = 'FALSE';

    /**
     * The value for the tas_last_assigned field.
     * @var        string
     */
    protected $tas_last_assigned = '0';

    /**
     * The value for the tas_user field.
     * @var        string
     */
    protected $tas_user = '0';

    /**
     * The value for the tas_can_upload field.
     * @var        string
     */
    protected $tas_can_upload = 'FALSE';

    /**
     * The value for the tas_view_upload field.
     * @var        string
     */
    protected $tas_view_upload = 'FALSE';

    /**
     * The value for the tas_view_additional_documentation field.
     * @var        string
     */
    protected $tas_view_additional_documentation = 'FALSE';

    /**
     * The value for the tas_can_cancel field.
     * @var        string
     */
    protected $tas_can_cancel = 'FALSE';

    /**
     * The value for the tas_owner_app field.
     * @var        string
     */
    protected $tas_owner_app = '';

    /**
     * The value for the stg_uid field.
     * @var        string
     */
    protected $stg_uid = '';

    /**
     * The value for the tas_can_pause field.
     * @var        string
     */
    protected $tas_can_pause = 'FALSE';

    /**
     * The value for the tas_can_send_message field.
     * @var        string
     */
    protected $tas_can_send_message = 'TRUE';

    /**
     * The value for the tas_can_delete_docs field.
     * @var        string
     */
    protected $tas_can_delete_docs = 'FALSE';

    /**
     * The value for the tas_self_service field.
     * @var        string
     */
    protected $tas_self_service = 'FALSE';

    /**
     * The value for the tas_start field.
     * @var        string
     */
    protected $tas_start = 'FALSE';

    /**
     * The value for the tas_to_last_user field.
     * @var        string
     */
    protected $tas_to_last_user = 'FALSE';

    /**
     * The value for the tas_send_last_email field.
     * @var        string
     */
    protected $tas_send_last_email = 'TRUE';

    /**
     * The value for the tas_derivation field.
     * @var        string
     */
    protected $tas_derivation = 'NORMAL';

    /**
     * The value for the tas_posx field.
     * @var        int
     */
    protected $tas_posx = 0;

    /**
     * The value for the tas_posy field.
     * @var        int
     */
    protected $tas_posy = 0;

    /**
     * The value for the tas_width field.
     * @var        int
     */
    protected $tas_width = 110;

    /**
     * The value for the tas_height field.
     * @var        int
     */
    protected $tas_height = 60;

    /**
     * The value for the tas_color field.
     * @var        string
     */
    protected $tas_color = '';

    /**
     * The value for the tas_evn_uid field.
     * @var        string
     */
    protected $tas_evn_uid = '';

    /**
     * The value for the tas_boundary field.
     * @var        string
     */
    protected $tas_boundary = '';

    /**
     * The value for the tas_derivation_screen_tpl field.
     * @var        string
     */
    protected $tas_derivation_screen_tpl = '';

    /**
     * The value for the tas_selfservice_timeout field.
     * @var        int
     */
    protected $tas_selfservice_timeout = 0;

    /**
     * The value for the tas_selfservice_time field.
     * @var        int
     */
    protected $tas_selfservice_time = 0;

    /**
     * The value for the tas_selfservice_time_unit field.
     * @var        string
     */
    protected $tas_selfservice_time_unit = '';

    /**
     * The value for the tas_selfservice_trigger_uid field.
     * @var        string
     */
    protected $tas_selfservice_trigger_uid = '';

    /**
     * The value for the tas_selfservice_execution field.
     * @var        string
     */
    protected $tas_selfservice_execution = 'EVERY_TIME';

    /**
     * The value for the tas_not_email_from_format field.
     * @var        int
     */
    protected $tas_not_email_from_format = 0;

    /**
     * The value for the tas_offline field.
     * @var        string
     */
    protected $tas_offline = 'FALSE';

    /**
     * The value for the tas_email_server_uid field.
     * @var        string
     */
    protected $tas_email_server_uid = '';

    /**
     * The value for the tas_auto_root field.
     * @var        string
     */
    protected $tas_auto_root = 'FALSE';

    /**
     * The value for the tas_receive_server_uid field.
     * @var        string
     */
    protected $tas_receive_server_uid = '';

    /**
     * The value for the tas_receive_last_email field.
     * @var        string
     */
    protected $tas_receive_last_email = 'FALSE';

    /**
     * The value for the tas_receive_email_from_format field.
     * @var        int
     */
    protected $tas_receive_email_from_format = 0;

    /**
     * The value for the tas_receive_message_type field.
     * @var        string
     */
    protected $tas_receive_message_type = 'text';

    /**
     * The value for the tas_receive_message_template field.
     * @var        string
     */
    protected $tas_receive_message_template = 'alert_message.html';

    /**
     * The value for the tas_receive_subject_message field.
     * @var        string
     */
    protected $tas_receive_subject_message;

    /**
     * The value for the tas_receive_message field.
     * @var        string
     */
    protected $tas_receive_message;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Get the [pro_uid] column value.
     * 
     * @return     string
     */
    public function getProUid()
    {

        return $this->pro_uid;
    }

    /**
     * Get the [tas_uid] column value.
     * 
     * @return     string
     */
    public function getTasUid()
    {

        return $this->tas_uid;
    }

    /**
     * Get the [tas_id] column value.
     * 
     * @return     int
     */
    public function getTasId()
    {

        return $this->tas_id;
    }

    /**
     * Get the [tas_title] column value.
     * 
     * @return     string
     */
    public function getTasTitle()
    {

        return $this->tas_title;
    }

    /**
     * Get the [tas_description] column value.
     * 
     * @return     string
     */
    public function getTasDescription()
    {

        return $this->tas_description;
    }

    /**
     * Get the [tas_def_title] column value.
     * 
     * @return     string
     */
    public function getTasDefTitle()
    {

        return $this->tas_def_title;
    }

    /**
     * Get the [tas_def_subject_message] column value.
     * 
     * @return     string
     */
    public function getTasDefSubjectMessage()
    {

        return $this->tas_def_subject_message;
    }

    /**
     * Get the [tas_def_proc_code] column value.
     * 
     * @return     string
     */
    public function getTasDefProcCode()
    {

        return $this->tas_def_proc_code;
    }

    /**
     * Get the [tas_def_message] column value.
     * 
     * @return     string
     */
    public function getTasDefMessage()
    {

        return $this->tas_def_message;
    }

    /**
     * Get the [tas_def_description] column value.
     * 
     * @return     string
     */
    public function getTasDefDescription()
    {

        return $this->tas_def_description;
    }

    /**
     * Get the [tas_type] column value.
     * 
     * @return     string
     */
    public function getTasType()
    {

        return $this->tas_type;
    }

    /**
     * Get the [tas_duration] column value.
     * 
     * @return     double
     */
    public function getTasDuration()
    {

        return $this->tas_duration;
    }

    /**
     * Get the [tas_delay_type] column value.
     * 
     * @return     string
     */
    public function getTasDelayType()
    {

        return $this->tas_delay_type;
    }

    /**
     * Get the [tas_temporizer] column value.
     * 
     * @return     double
     */
    public function getTasTemporizer()
    {

        return $this->tas_temporizer;
    }

    /**
     * Get the [tas_type_day] column value.
     * 
     * @return     string
     */
    public function getTasTypeDay()
    {

        return $this->tas_type_day;
    }

    /**
     * Get the [tas_timeunit] column value.
     * 
     * @return     string
     */
    public function getTasTimeunit()
    {

        return $this->tas_timeunit;
    }

    /**
     * Get the [tas_alert] column value.
     * 
     * @return     string
     */
    public function getTasAlert()
    {

        return $this->tas_alert;
    }

    /**
     * Get the [tas_priority_variable] column value.
     * 
     * @return     string
     */
    public function getTasPriorityVariable()
    {

        return $this->tas_priority_variable;
    }

    /**
     * Get the [tas_assign_type] column value.
     * 
     * @return     string
     */
    public function getTasAssignType()
    {

        return $this->tas_assign_type;
    }

    /**
     * Get the [tas_assign_variable] column value.
     * 
     * @return     string
     */
    public function getTasAssignVariable()
    {

        return $this->tas_assign_variable;
    }

    /**
     * Get the [tas_group_variable] column value.
     * 
     * @return     string
     */
    public function getTasGroupVariable()
    {

        return $this->tas_group_variable;
    }

    /**
     * Get the [tas_mi_instance_variable] column value.
     * 
     * @return     string
     */
    public function getTasMiInstanceVariable()
    {

        return $this->tas_mi_instance_variable;
    }

    /**
     * Get the [tas_mi_complete_variable] column value.
     * 
     * @return     string
     */
    public function getTasMiCompleteVariable()
    {

        return $this->tas_mi_complete_variable;
    }

    /**
     * Get the [tas_assign_location] column value.
     * 
     * @return     string
     */
    public function getTasAssignLocation()
    {

        return $this->tas_assign_location;
    }

    /**
     * Get the [tas_assign_location_adhoc] column value.
     * 
     * @return     string
     */
    public function getTasAssignLocationAdhoc()
    {

        return $this->tas_assign_location_adhoc;
    }

    /**
     * Get the [tas_transfer_fly] column value.
     * 
     * @return     string
     */
    public function getTasTransferFly()
    {

        return $this->tas_transfer_fly;
    }

    /**
     * Get the [tas_last_assigned] column value.
     * 
     * @return     string
     */
    public function getTasLastAssigned()
    {

        return $this->tas_last_assigned;
    }

    /**
     * Get the [tas_user] column value.
     * 
     * @return     string
     */
    public function getTasUser()
    {

        return $this->tas_user;
    }

    /**
     * Get the [tas_can_upload] column value.
     * 
     * @return     string
     */
    public function getTasCanUpload()
    {

        return $this->tas_can_upload;
    }

    /**
     * Get the [tas_view_upload] column value.
     * 
     * @return     string
     */
    public function getTasViewUpload()
    {

        return $this->tas_view_upload;
    }

    /**
     * Get the [tas_view_additional_documentation] column value.
     * 
     * @return     string
     */
    public function getTasViewAdditionalDocumentation()
    {

        return $this->tas_view_additional_documentation;
    }

    /**
     * Get the [tas_can_cancel] column value.
     * 
     * @return     string
     */
    public function getTasCanCancel()
    {

        return $this->tas_can_cancel;
    }

    /**
     * Get the [tas_owner_app] column value.
     * 
     * @return     string
     */
    public function getTasOwnerApp()
    {

        return $this->tas_owner_app;
    }

    /**
     * Get the [stg_uid] column value.
     * 
     * @return     string
     */
    public function getStgUid()
    {

        return $this->stg_uid;
    }

    /**
     * Get the [tas_can_pause] column value.
     * 
     * @return     string
     */
    public function getTasCanPause()
    {

        return $this->tas_can_pause;
    }

    /**
     * Get the [tas_can_send_message] column value.
     * 
     * @return     string
     */
    public function getTasCanSendMessage()
    {

        return $this->tas_can_send_message;
    }

    /**
     * Get the [tas_can_delete_docs] column value.
     * 
     * @return     string
     */
    public function getTasCanDeleteDocs()
    {

        return $this->tas_can_delete_docs;
    }

    /**
     * Get the [tas_self_service] column value.
     * 
     * @return     string
     */
    public function getTasSelfService()
    {

        return $this->tas_self_service;
    }

    /**
     * Get the [tas_start] column value.
     * 
     * @return     string
     */
    public function getTasStart()
    {

        return $this->tas_start;
    }

    /**
     * Get the [tas_to_last_user] column value.
     * 
     * @return     string
     */
    public function getTasToLastUser()
    {

        return $this->tas_to_last_user;
    }

    /**
     * Get the [tas_send_last_email] column value.
     * 
     * @return     string
     */
    public function getTasSendLastEmail()
    {

        return $this->tas_send_last_email;
    }

    /**
     * Get the [tas_derivation] column value.
     * 
     * @return     string
     */
    public function getTasDerivation()
    {

        return $this->tas_derivation;
    }

    /**
     * Get the [tas_posx] column value.
     * 
     * @return     int
     */
    public function getTasPosx()
    {

        return $this->tas_posx;
    }

    /**
     * Get the [tas_posy] column value.
     * 
     * @return     int
     */
    public function getTasPosy()
    {

        return $this->tas_posy;
    }

    /**
     * Get the [tas_width] column value.
     * 
     * @return     int
     */
    public function getTasWidth()
    {

        return $this->tas_width;
    }

    /**
     * Get the [tas_height] column value.
     * 
     * @return     int
     */
    public function getTasHeight()
    {

        return $this->tas_height;
    }

    /**
     * Get the [tas_color] column value.
     * 
     * @return     string
     */
    public function getTasColor()
    {

        return $this->tas_color;
    }

    /**
     * Get the [tas_evn_uid] column value.
     * 
     * @return     string
     */
    public function getTasEvnUid()
    {

        return $this->tas_evn_uid;
    }

    /**
     * Get the [tas_boundary] column value.
     * 
     * @return     string
     */
    public function getTasBoundary()
    {

        return $this->tas_boundary;
    }

    /**
     * Get the [tas_derivation_screen_tpl] column value.
     * 
     * @return     string
     */
    public function getTasDerivationScreenTpl()
    {

        return $this->tas_derivation_screen_tpl;
    }

    /**
     * Get the [tas_selfservice_timeout] column value.
     * 
     * @return     int
     */
    public function getTasSelfserviceTimeout()
    {

        return $this->tas_selfservice_timeout;
    }

    /**
     * Get the [tas_selfservice_time] column value.
     * 
     * @return     int
     */
    public function getTasSelfserviceTime()
    {

        return $this->tas_selfservice_time;
    }

    /**
     * Get the [tas_selfservice_time_unit] column value.
     * 
     * @return     string
     */
    public function getTasSelfserviceTimeUnit()
    {

        return $this->tas_selfservice_time_unit;
    }

    /**
     * Get the [tas_selfservice_trigger_uid] column value.
     * 
     * @return     string
     */
    public function getTasSelfserviceTriggerUid()
    {

        return $this->tas_selfservice_trigger_uid;
    }

    /**
     * Get the [tas_selfservice_execution] column value.
     * 
     * @return     string
     */
    public function getTasSelfserviceExecution()
    {

        return $this->tas_selfservice_execution;
    }

    /**
     * Get the [tas_not_email_from_format] column value.
     * 
     * @return     int
     */
    public function getTasNotEmailFromFormat()
    {

        return $this->tas_not_email_from_format;
    }

    /**
     * Get the [tas_offline] column value.
     * 
     * @return     string
     */
    public function getTasOffline()
    {

        return $this->tas_offline;
    }

    /**
     * Get the [tas_email_server_uid] column value.
     * 
     * @return     string
     */
    public function getTasEmailServerUid()
    {

        return $this->tas_email_server_uid;
    }

    /**
     * Get the [tas_auto_root] column value.
     * 
     * @return     string
     */
    public function getTasAutoRoot()
    {

        return $this->tas_auto_root;
    }

    /**
     * Get the [tas_receive_server_uid] column value.
     * 
     * @return     string
     */
    public function getTasReceiveServerUid()
    {

        return $this->tas_receive_server_uid;
    }

    /**
     * Get the [tas_receive_last_email] column value.
     * 
     * @return     string
     */
    public function getTasReceiveLastEmail()
    {

        return $this->tas_receive_last_email;
    }

    /**
     * Get the [tas_receive_email_from_format] column value.
     * 
     * @return     int
     */
    public function getTasReceiveEmailFromFormat()
    {

        return $this->tas_receive_email_from_format;
    }

    /**
     * Get the [tas_receive_message_type] column value.
     * 
     * @return     string
     */
    public function getTasReceiveMessageType()
    {

        return $this->tas_receive_message_type;
    }

    /**
     * Get the [tas_receive_message_template] column value.
     * 
     * @return     string
     */
    public function getTasReceiveMessageTemplate()
    {

        return $this->tas_receive_message_template;
    }

    /**
     * Get the [tas_receive_subject_message] column value.
     * 
     * @return     string
     */
    public function getTasReceiveSubjectMessage()
    {

        return $this->tas_receive_subject_message;
    }

    /**
     * Get the [tas_receive_message] column value.
     * 
     * @return     string
     */
    public function getTasReceiveMessage()
    {

        return $this->tas_receive_message;
    }

    /**
     * Set the value of [pro_uid] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setProUid($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->pro_uid !== $v || $v === '') {
            $this->pro_uid = $v;
            $this->modifiedColumns[] = TaskPeer::PRO_UID;
        }

    } // setProUid()

    /**
     * Set the value of [tas_uid] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasUid($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_uid !== $v || $v === '') {
            $this->tas_uid = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_UID;
        }

    } // setTasUid()

    /**
     * Set the value of [tas_id] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setTasId($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tas_id !== $v) {
            $this->tas_id = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_ID;
        }

    } // setTasId()

    /**
     * Set the value of [tas_title] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasTitle($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_title !== $v) {
            $this->tas_title = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_TITLE;
        }

    } // setTasTitle()

    /**
     * Set the value of [tas_description] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasDescription($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_description !== $v) {
            $this->tas_description = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_DESCRIPTION;
        }

    } // setTasDescription()

    /**
     * Set the value of [tas_def_title] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasDefTitle($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_def_title !== $v) {
            $this->tas_def_title = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_DEF_TITLE;
        }

    } // setTasDefTitle()

    /**
     * Set the value of [tas_def_subject_message] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasDefSubjectMessage($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_def_subject_message !== $v) {
            $this->tas_def_subject_message = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_DEF_SUBJECT_MESSAGE;
        }

    } // setTasDefSubjectMessage()

    /**
     * Set the value of [tas_def_proc_code] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasDefProcCode($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_def_proc_code !== $v) {
            $this->tas_def_proc_code = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_DEF_PROC_CODE;
        }

    } // setTasDefProcCode()

    /**
     * Set the value of [tas_def_message] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasDefMessage($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_def_message !== $v) {
            $this->tas_def_message = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_DEF_MESSAGE;
        }

    } // setTasDefMessage()

    /**
     * Set the value of [tas_def_description] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasDefDescription($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_def_description !== $v) {
            $this->tas_def_description = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_DEF_DESCRIPTION;
        }

    } // setTasDefDescription()

    /**
     * Set the value of [tas_type] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasType($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_type !== $v || $v === 'NORMAL') {
            $this->tas_type = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_TYPE;
        }

    } // setTasType()

    /**
     * Set the value of [tas_duration] column.
     * 
     * @param      double $v new value
     * @return     void
     */
    public function setTasDuration($v)
    {

        if ($this->tas_duration !== $v || $v === 0) {
            $this->tas_duration = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_DURATION;
        }

    } // setTasDuration()

    /**
     * Set the value of [tas_delay_type] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasDelayType($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_delay_type !== $v || $v === '') {
            $this->tas_delay_type = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_DELAY_TYPE;
        }

    } // setTasDelayType()

    /**
     * Set the value of [tas_temporizer] column.
     * 
     * @param      double $v new value
     * @return     void
     */
    public function setTasTemporizer($v)
    {

        if ($this->tas_temporizer !== $v || $v === 0) {
            $this->tas_temporizer = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_TEMPORIZER;
        }

    } // setTasTemporizer()

    /**
     * Set the value of [tas_type_day] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasTypeDay($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_type_day !== $v || $v === '1') {
            $this->tas_type_day = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_TYPE_DAY;
        }

    } // setTasTypeDay()

    /**
     * Set the value of [tas_timeunit] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasTimeunit($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_timeunit !== $v || $v === 'DAYS') {
            $this->tas_timeunit = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_TIMEUNIT;
        }

    } // setTasTimeunit()

    /**
     * Set the value of [tas_alert] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasAlert($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_alert !== $v || $v === 'FALSE') {
            $this->tas_alert = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_ALERT;
        }

    } // setTasAlert()

    /**
     * Set the value of [tas_priority_variable] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasPriorityVariable($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_priority_variable !== $v || $v === '') {
            $this->tas_priority_variable = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_PRIORITY_VARIABLE;
        }

    } // setTasPriorityVariable()

    /**
     * Set the value of [tas_assign_type] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasAssignType($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_assign_type !== $v || $v === 'BALANCED') {
            $this->tas_assign_type = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_ASSIGN_TYPE;
        }

    } // setTasAssignType()

    /**
     * Set the value of [tas_assign_variable] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasAssignVariable($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_assign_variable !== $v || $v === '@@SYS_NEXT_USER_TO_BE_ASSIGNED') {
            $this->tas_assign_variable = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_ASSIGN_VARIABLE;
        }

    } // setTasAssignVariable()

    /**
     * Set the value of [tas_group_variable] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasGroupVariable($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_group_variable !== $v) {
            $this->tas_group_variable = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_GROUP_VARIABLE;
        }

    } // setTasGroupVariable()

    /**
     * Set the value of [tas_mi_instance_variable] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasMiInstanceVariable($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_mi_instance_variable !== $v || $v === '@@SYS_VAR_TOTAL_INSTANCE') {
            $this->tas_mi_instance_variable = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_MI_INSTANCE_VARIABLE;
        }

    } // setTasMiInstanceVariable()

    /**
     * Set the value of [tas_mi_complete_variable] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasMiCompleteVariable($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_mi_complete_variable !== $v || $v === '@@SYS_VAR_TOTAL_INSTANCES_COMPLETE') {
            $this->tas_mi_complete_variable = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_MI_COMPLETE_VARIABLE;
        }

    } // setTasMiCompleteVariable()

    /**
     * Set the value of [tas_assign_location] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasAssignLocation($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_assign_location !== $v || $v === 'FALSE') {
            $this->tas_assign_location = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_ASSIGN_LOCATION;
        }

    } // setTasAssignLocation()

    /**
     * Set the value of [tas_assign_location_adhoc] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasAssignLocationAdhoc($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_assign_location_adhoc !== $v || $v === 'FALSE') {
            $this->tas_assign_location_adhoc = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_ASSIGN_LOCATION_ADHOC;
        }

    } // setTasAssignLocationAdhoc()

    /**
     * Set the value of [tas_transfer_fly] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasTransferFly($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_transfer_fly !== $v || $v === 'FALSE') {
            $this->tas_transfer_fly = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_TRANSFER_FLY;
        }

    } // setTasTransferFly()

    /**
     * Set the value of [tas_last_assigned] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasLastAssigned($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_last_assigned !== $v || $v === '0') {
            $this->tas_last_assigned = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_LAST_ASSIGNED;
        }

    } // setTasLastAssigned()

    /**
     * Set the value of [tas_user] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasUser($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_user !== $v || $v === '0') {
            $this->tas_user = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_USER;
        }

    } // setTasUser()

    /**
     * Set the value of [tas_can_upload] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasCanUpload($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_can_upload !== $v || $v === 'FALSE') {
            $this->tas_can_upload = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_CAN_UPLOAD;
        }

    } // setTasCanUpload()

    /**
     * Set the value of [tas_view_upload] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasViewUpload($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_view_upload !== $v || $v === 'FALSE') {
            $this->tas_view_upload = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_VIEW_UPLOAD;
        }

    } // setTasViewUpload()

    /**
     * Set the value of [tas_view_additional_documentation] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasViewAdditionalDocumentation($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_view_additional_documentation !== $v || $v === 'FALSE') {
            $this->tas_view_additional_documentation = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_VIEW_ADDITIONAL_DOCUMENTATION;
        }

    } // setTasViewAdditionalDocumentation()

    /**
     * Set the value of [tas_can_cancel] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasCanCancel($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_can_cancel !== $v || $v === 'FALSE') {
            $this->tas_can_cancel = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_CAN_CANCEL;
        }

    } // setTasCanCancel()

    /**
     * Set the value of [tas_owner_app] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasOwnerApp($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_owner_app !== $v || $v === '') {
            $this->tas_owner_app = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_OWNER_APP;
        }

    } // setTasOwnerApp()

    /**
     * Set the value of [stg_uid] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setStgUid($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->stg_uid !== $v || $v === '') {
            $this->stg_uid = $v;
            $this->modifiedColumns[] = TaskPeer::STG_UID;
        }

    } // setStgUid()

    /**
     * Set the value of [tas_can_pause] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasCanPause($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_can_pause !== $v || $v === 'FALSE') {
            $this->tas_can_pause = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_CAN_PAUSE;
        }

    } // setTasCanPause()

    /**
     * Set the value of [tas_can_send_message] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasCanSendMessage($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_can_send_message !== $v || $v === 'TRUE') {
            $this->tas_can_send_message = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_CAN_SEND_MESSAGE;
        }

    } // setTasCanSendMessage()

    /**
     * Set the value of [tas_can_delete_docs] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasCanDeleteDocs($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_can_delete_docs !== $v || $v === 'FALSE') {
            $this->tas_can_delete_docs = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_CAN_DELETE_DOCS;
        }

    } // setTasCanDeleteDocs()

    /**
     * Set the value of [tas_self_service] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasSelfService($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_self_service !== $v || $v === 'FALSE') {
            $this->tas_self_service = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_SELF_SERVICE;
        }

    } // setTasSelfService()

    /**
     * Set the value of [tas_start] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasStart($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_start !== $v || $v === 'FALSE') {
            $this->tas_start = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_START;
        }

    } // setTasStart()

    /**
     * Set the value of [tas_to_last_user] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasToLastUser($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_to_last_user !== $v || $v === 'FALSE') {
            $this->tas_to_last_user = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_TO_LAST_USER;
        }

    } // setTasToLastUser()

    /**
     * Set the value of [tas_send_last_email] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasSendLastEmail($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_send_last_email !== $v || $v === 'TRUE') {
            $this->tas_send_last_email = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_SEND_LAST_EMAIL;
        }

    } // setTasSendLastEmail()

    /**
     * Set the value of [tas_derivation] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasDerivation($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_derivation !== $v || $v === 'NORMAL') {
            $this->tas_derivation = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_DERIVATION;
        }

    } // setTasDerivation()

    /**
     * Set the value of [tas_posx] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setTasPosx($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tas_posx !== $v || $v === 0) {
            $this->tas_posx = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_POSX;
        }

    } // setTasPosx()

    /**
     * Set the value of [tas_posy] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setTasPosy($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tas_posy !== $v || $v === 0) {
            $this->tas_posy = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_POSY;
        }

    } // setTasPosy()

    /**
     * Set the value of [tas_width] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setTasWidth($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tas_width !== $v || $v === 110) {
            $this->tas_width = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_WIDTH;
        }

    } // setTasWidth()

    /**
     * Set the value of [tas_height] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setTasHeight($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tas_height !== $v || $v === 60) {
            $this->tas_height = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_HEIGHT;
        }

    } // setTasHeight()

    /**
     * Set the value of [tas_color] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasColor($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_color !== $v || $v === '') {
            $this->tas_color = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_COLOR;
        }

    } // setTasColor()

    /**
     * Set the value of [tas_evn_uid] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasEvnUid($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_evn_uid !== $v || $v === '') {
            $this->tas_evn_uid = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_EVN_UID;
        }

    } // setTasEvnUid()

    /**
     * Set the value of [tas_boundary] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasBoundary($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_boundary !== $v || $v === '') {
            $this->tas_boundary = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_BOUNDARY;
        }

    } // setTasBoundary()

    /**
     * Set the value of [tas_derivation_screen_tpl] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasDerivationScreenTpl($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_derivation_screen_tpl !== $v || $v === '') {
            $this->tas_derivation_screen_tpl = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_DERIVATION_SCREEN_TPL;
        }

    } // setTasDerivationScreenTpl()

    /**
     * Set the value of [tas_selfservice_timeout] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setTasSelfserviceTimeout($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tas_selfservice_timeout !== $v || $v === 0) {
            $this->tas_selfservice_timeout = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_SELFSERVICE_TIMEOUT;
        }

    } // setTasSelfserviceTimeout()

    /**
     * Set the value of [tas_selfservice_time] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setTasSelfserviceTime($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tas_selfservice_time !== $v || $v === 0) {
            $this->tas_selfservice_time = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_SELFSERVICE_TIME;
        }

    } // setTasSelfserviceTime()

    /**
     * Set the value of [tas_selfservice_time_unit] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasSelfserviceTimeUnit($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_selfservice_time_unit !== $v || $v === '') {
            $this->tas_selfservice_time_unit = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_SELFSERVICE_TIME_UNIT;
        }

    } // setTasSelfserviceTimeUnit()

    /**
     * Set the value of [tas_selfservice_trigger_uid] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasSelfserviceTriggerUid($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_selfservice_trigger_uid !== $v || $v === '') {
            $this->tas_selfservice_trigger_uid = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_SELFSERVICE_TRIGGER_UID;
        }

    } // setTasSelfserviceTriggerUid()

    /**
     * Set the value of [tas_selfservice_execution] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasSelfserviceExecution($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_selfservice_execution !== $v || $v === 'EVERY_TIME') {
            $this->tas_selfservice_execution = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_SELFSERVICE_EXECUTION;
        }

    } // setTasSelfserviceExecution()

    /**
     * Set the value of [tas_not_email_from_format] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setTasNotEmailFromFormat($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tas_not_email_from_format !== $v || $v === 0) {
            $this->tas_not_email_from_format = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_NOT_EMAIL_FROM_FORMAT;
        }

    } // setTasNotEmailFromFormat()

    /**
     * Set the value of [tas_offline] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasOffline($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_offline !== $v || $v === 'FALSE') {
            $this->tas_offline = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_OFFLINE;
        }

    } // setTasOffline()

    /**
     * Set the value of [tas_email_server_uid] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasEmailServerUid($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_email_server_uid !== $v || $v === '') {
            $this->tas_email_server_uid = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_EMAIL_SERVER_UID;
        }

    } // setTasEmailServerUid()

    /**
     * Set the value of [tas_auto_root] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasAutoRoot($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_auto_root !== $v || $v === 'FALSE') {
            $this->tas_auto_root = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_AUTO_ROOT;
        }

    } // setTasAutoRoot()

    /**
     * Set the value of [tas_receive_server_uid] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasReceiveServerUid($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_receive_server_uid !== $v || $v === '') {
            $this->tas_receive_server_uid = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_RECEIVE_SERVER_UID;
        }

    } // setTasReceiveServerUid()

    /**
     * Set the value of [tas_receive_last_email] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasReceiveLastEmail($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_receive_last_email !== $v || $v === 'FALSE') {
            $this->tas_receive_last_email = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_RECEIVE_LAST_EMAIL;
        }

    } // setTasReceiveLastEmail()

    /**
     * Set the value of [tas_receive_email_from_format] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setTasReceiveEmailFromFormat($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tas_receive_email_from_format !== $v || $v === 0) {
            $this->tas_receive_email_from_format = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_RECEIVE_EMAIL_FROM_FORMAT;
        }

    } // setTasReceiveEmailFromFormat()

    /**
     * Set the value of [tas_receive_message_type] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasReceiveMessageType($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_receive_message_type !== $v || $v === 'text') {
            $this->tas_receive_message_type = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_RECEIVE_MESSAGE_TYPE;
        }

    } // setTasReceiveMessageType()

    /**
     * Set the value of [tas_receive_message_template] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasReceiveMessageTemplate($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_receive_message_template !== $v || $v === 'alert_message.html') {
            $this->tas_receive_message_template = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_RECEIVE_MESSAGE_TEMPLATE;
        }

    } // setTasReceiveMessageTemplate()

    /**
     * Set the value of [tas_receive_subject_message] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasReceiveSubjectMessage($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_receive_subject_message !== $v) {
            $this->tas_receive_subject_message = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_RECEIVE_SUBJECT_MESSAGE;
        }

    } // setTasReceiveSubjectMessage()

    /**
     * Set the value of [tas_receive_message] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setTasReceiveMessage($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->tas_receive_message !== $v) {
            $this->tas_receive_message = $v;
            $this->modifiedColumns[] = TaskPeer::TAS_RECEIVE_MESSAGE;
        }

    } // setTasReceiveMessage()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (1-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param      ResultSet $rs The ResultSet class with cursor advanced to desired record pos.
     * @param      int $startcol 1-based offset column which indicates which restultset column to start with.
     * @return     int next starting column
     * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate(ResultSet $rs, $startcol = 1)
    {
        try {

            $this->pro_uid = $rs->getString($startcol + 0);

            $this->tas_uid = $rs->getString($startcol + 1);

            $this->tas_id = $rs->getInt($startcol + 2);

            $this->tas_title = $rs->getString($startcol + 3);

            $this->tas_description = $rs->getString($startcol + 4);

            $this->tas_def_title = $rs->getString($startcol + 5);

            $this->tas_def_subject_message = $rs->getString($startcol + 6);

            $this->tas_def_proc_code = $rs->getString($startcol + 7);

            $this->tas_def_message = $rs->getString($startcol + 8);

            $this->tas_def_description = $rs->getString($startcol + 9);

            $this->tas_type = $rs->getString($startcol + 10);

            $this->tas_duration = $rs->getFloat($startcol + 11);

            $this->tas_delay_type = $rs->getString($startcol + 12);

            $this->tas_temporizer = $rs->getFloat($startcol + 13);

            $this->tas_type_day = $rs->getString($startcol + 14);

            $this->tas_timeunit = $rs->getString($startcol + 15);

            $this->tas_alert = $rs->getString($startcol + 16);

            $this->tas_priority_variable = $rs->getString($startcol + 17);

            $this->tas_assign_type = $rs->getString($startcol + 18);

            $this->tas_assign_variable = $rs->getString($startcol + 19);

            $this->tas_group_variable = $rs->getString($startcol + 20);

            $this->tas_mi_instance_variable = $rs->getString($startcol + 21);

            $this->tas_mi_complete_variable = $rs->getString($startcol + 22);

            $this->tas_assign_location = $rs->getString($startcol + 23);

            $this->tas_assign_location_adhoc = $rs->getString($startcol + 24);

            $this->tas_transfer_fly = $rs->getString($startcol + 25);

            $this->tas_last_assigned = $rs->getString($startcol + 26);

            $this->tas_user = $rs->getString($startcol + 27);

            $this->tas_can_upload = $rs->getString($startcol + 28);

            $this->tas_view_upload = $rs->getString($startcol + 29);

            $this->tas_view_additional_documentation = $rs->getString($startcol + 30);

            $this->tas_can_cancel = $rs->getString($startcol + 31);

            $this->tas_owner_app = $rs->getString($startcol + 32);

            $this->stg_uid = $rs->getString($startcol + 33);

            $this->tas_can_pause = $rs->getString($startcol + 34);

            $this->tas_can_send_message = $rs->getString($startcol + 35);

            $this->tas_can_delete_docs = $rs->getString($startcol + 36);

            $this->tas_self_service = $rs->getString($startcol + 37);

            $this->tas_start = $rs->getString($startcol + 38);

            $this->tas_to_last_user = $rs->getString($startcol + 39);

            $this->tas_send_last_email = $rs->getString($startcol + 40);

            $this->tas_derivation = $rs->getString($startcol + 41);

            $this->tas_posx = $rs->getInt($startcol + 42);

            $this->tas_posy = $rs->getInt($startcol + 43);

            $this->tas_width = $rs->getInt($startcol + 44);

            $this->tas_height = $rs->getInt($startcol + 45);

            $this->tas_color = $rs->getString($startcol + 46);

            $this->tas_evn_uid = $rs->getString($startcol + 47);

            $this->tas_boundary = $rs->getString($startcol + 48);

            $this->tas_derivation_screen_tpl = $rs->getString($startcol + 49);

            $this->tas_selfservice_timeout = $rs->getInt($startcol + 50);

            $this->tas_selfservice_time = $rs->getInt($startcol + 51);

            $this->tas_selfservice_time_unit = $rs->getString($startcol + 52);

            $this->tas_selfservice_trigger_uid = $rs->getString($startcol + 53);

            $this->tas_selfservice_execution = $rs->getString($startcol + 54);

            $this->tas_not_email_from_format = $rs->getInt($startcol + 55);

            $this->tas_offline = $rs->getString($startcol + 56);

            $this->tas_email_server_uid = $rs->getString($startcol + 57);

            $this->tas_auto_root = $rs->getString($startcol + 58);

            $this->tas_receive_server_uid = $rs->getString($startcol + 59);

            $this->tas_receive_last_email = $rs->getString($startcol + 60);

            $this->tas_receive_email_from_format = $rs->getInt($startcol + 61);

            $this->tas_receive_message_type = $rs->getString($startcol + 62);

            $this->tas_receive_message_template = $rs->getString($startcol + 63);

            $this->tas_receive_subject_message = $rs->getString($startcol + 64);

            $this->tas_receive_message = $rs->getString($startcol + 65);

            $this->resetModified();

            $this->setNew(false);

            // FIXME - using NUM_COLUMNS may be clearer.
            return $startcol + 66; // 66 = TaskPeer::NUM_COLUMNS - TaskPeer::NUM_LAZY_LOAD_COLUMNS).

        } catch (Exception $e) {
            throw new PropelException("Error populating Task object", $e);
        }
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      Connection $con
     * @return     void
     * @throws     PropelException
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete($con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TaskPeer::DATABASE_NAME);
        }

        try {
            $con->begin();
            TaskPeer::doDelete($this, $con);
            $this->setDeleted(true);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Stores the object in the database.  If the object is new,
     * it inserts it; otherwise an update is performed.  This method
     * wraps the doSave() worker method in a transaction.
     *
     * @param      Connection $con
     * @return     int The number of rows affected by this insert/update
     * @throws     PropelException
     * @see        doSave()
     */
    public function save($con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(TaskPeer::DATABASE_NAME);
        }

        try {
            $con->begin();
            $affectedRows = $this->doSave($con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Stores the object in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      Connection $con
     * @return     int The number of rows affected by this insert/update and any referring
     * @throws     PropelException
     * @see        save()
     */
    protected function doSave($con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;


            // If this object has been modified, then save it to the database.
            if ($this->isModified()) {
                if ($this->isNew()) {
                    $pk = TaskPeer::doInsert($this, $con);
                    $affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
                                         // should always be true here (even though technically
                                         // BasePeer::doInsert() can insert multiple rows).

                    $this->setNew(false);
                } else {
                    $affectedRows += TaskPeer::doUpdate($this, $con);
                }
                $this->resetModified(); // [HL] After being saved an object is no longer 'modified'
            }

            $this->alreadyInSave = false;
        }
        return $affectedRows;
    } // doSave()

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return     array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param      mixed $columns Column name or an array of column names.
     * @return     boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();
            return true;
        } else {
            $this->validationFailures = $res;
            return false;
        }
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param      array $columns Array of column names to validate.
     * @return     mixed <code>true</code> if all validations pass; 
                   array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = TaskPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param      string $name name
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TYPE_PHPNAME,
     *                     TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = TaskPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        return $this->getByPosition($pos);
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @return     mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch($pos) {
            case 0:
                return $this->getProUid();
                break;
            case 1:
                return $this->getTasUid();
                break;
            case 2:
                return $this->getTasId();
                break;
            case 3:
                return $this->getTasTitle();
                break;
            case 4:
                return $this->getTasDescription();
                break;
            case 5:
                return $this->getTasDefTitle();
                break;
            case 6:
                return $this->getTasDefSubjectMessage();
                break;
            case 7:
                return $this->getTasDefProcCode();
                break;
            case 8:
                return $this->getTasDefMessage();
                break;
            case 9:
                return $this->getTasDefDescription();
                break;
            case 10:
                return $this->getTasType();
                break;
            case 11:
                return $this->getTasDuration();
                break;
            case 12:
                return $this->getTasDelayType();
                break;
            case 13:
                return $this->getTasTemporizer();
                break;
            case 14:
                return $this->getTasTypeDay();
                break;
            case 15:
                return $this->getTasTimeunit();
                break;
            case 16:
                return $this->getTasAlert();
                break;
            case 17:
                return $this->getTasPriorityVariable();
                break;
            case 18:
                return $this->getTasAssignType();
                break;
            case 19:
                return $this->getTasAssignVariable();
                break;
            case 20:
                return $this->getTasGroupVariable();
                break;
            case 21:
                return $this->getTasMiInstanceVariable();
                break;
            case 22:
                return $this->getTasMiCompleteVariable();
                break;
            case 23:
                return $this->getTasAssignLocation();
                break;
            case 24:
                return $this->getTasAssignLocationAdhoc();
                break;
            case 25:
                return $this->getTasTransferFly();
                break;
            case 26:
                return $this->getTasLastAssigned();
                break;
            case 27:
                return $this->getTasUser();
                break;
            case 28:
                return $this->getTasCanUpload();
                break;
            case 29:
                return $this->getTasViewUpload();
                break;
            case 30:
                return $this->getTasViewAdditionalDocumentation();
                break;
            case 31:
                return $this->getTasCanCancel();
                break;
            case 32:
                return $this->getTasOwnerApp();
                break;
            case 33:
                return $this->getStgUid();
                break;
            case 34:
                return $this->getTasCanPause();
                break;
            case 35:
                return $this->getTasCanSendMessage();
                break;
            case 36:
                return $this->getTasCanDeleteDocs();
                break;
            case 37:
                return $this->getTasSelfService();
                break;
            case 38:
                return $this->getTasStart();
                break;
            case 39:
                return $this->getTasToLastUser();
                break;
            case 40:
                return $this->getTasSendLastEmail();
                break;
            case 41:
                return $this->getTasDerivation();
                break;
            case 42:
                return $this->getTasPosx();
                break;
            case 43:
                return $this->getTasPosy();
                break;
            case 44:
                return $this->getTasWidth();
                break;
            case 45:
                return $this->getTasHeight();
                break;
            case 46:
                return $this->getTasColor();
                break;
            case 47:
                return $this->getTasEvnUid();
                break;
            case 48:
                return $this->getTasBoundary();
                break;
            case 49:
                return $this->getTasDerivationScreenTpl();
                break;
            case 50:
                return $this->getTasSelfserviceTimeout();
                break;
            case 51:
                return $this->getTasSelfserviceTime();
                break;
            case 52:
                return $this->getTasSelfserviceTimeUnit();
                break;
            case 53:
                return $this->getTasSelfserviceTriggerUid();
                break;
            case 54:
                return $this->getTasSelfserviceExecution();
                break;
            case 55:
                return $this->getTasNotEmailFromFormat();
                break;
            case 56:
                return $this->getTasOffline();
                break;
            case 57:
                return $this->getTasEmailServerUid();
                break;
            case 58:
                return $this->getTasAutoRoot();
                break;
            case 59:
                return $this->getTasReceiveServerUid();
                break;
            case 60:
                return $this->getTasReceiveLastEmail();
                break;
            case 61:
                return $this->getTasReceiveEmailFromFormat();
                break;
            case 62:
                return $this->getTasReceiveMessageType();
                break;
            case 63:
                return $this->getTasReceiveMessageTemplate();
                break;
            case 64:
                return $this->getTasReceiveSubjectMessage();
                break;
            case 65:
                return $this->getTasReceiveMessage();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param      string $keyType One of the class type constants TYPE_PHPNAME,
     *                        TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = TaskPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getProUid(),
            $keys[1] => $this->getTasUid(),
            $keys[2] => $this->getTasId(),
            $keys[3] => $this->getTasTitle(),
            $keys[4] => $this->getTasDescription(),
            $keys[5] => $this->getTasDefTitle(),
            $keys[6] => $this->getTasDefSubjectMessage(),
            $keys[7] => $this->getTasDefProcCode(),
            $keys[8] => $this->getTasDefMessage(),
            $keys[9] => $this->getTasDefDescription(),
            $keys[10] => $this->getTasType(),
            $keys[11] => $this->getTasDuration(),
            $keys[12] => $this->getTasDelayType(),
            $keys[13] => $this->getTasTemporizer(),
            $keys[14] => $this->getTasTypeDay(),
            $keys[15] => $this->getTasTimeunit(),
            $keys[16] => $this->getTasAlert(),
            $keys[17] => $this->getTasPriorityVariable(),
            $keys[18] => $this->getTasAssignType(),
            $keys[19] => $this->getTasAssignVariable(),
            $keys[20] => $this->getTasGroupVariable(),
            $keys[21] => $this->getTasMiInstanceVariable(),
            $keys[22] => $this->getTasMiCompleteVariable(),
            $keys[23] => $this->getTasAssignLocation(),
            $keys[24] => $this->getTasAssignLocationAdhoc(),
            $keys[25] => $this->getTasTransferFly(),
            $keys[26] => $this->getTasLastAssigned(),
            $keys[27] => $this->getTasUser(),
            $keys[28] => $this->getTasCanUpload(),
            $keys[29] => $this->getTasViewUpload(),
            $keys[30] => $this->getTasViewAdditionalDocumentation(),
            $keys[31] => $this->getTasCanCancel(),
            $keys[32] => $this->getTasOwnerApp(),
            $keys[33] => $this->getStgUid(),
            $keys[34] => $this->getTasCanPause(),
            $keys[35] => $this->getTasCanSendMessage(),
            $keys[36] => $this->getTasCanDeleteDocs(),
            $keys[37] => $this->getTasSelfService(),
            $keys[38] => $this->getTasStart(),
            $keys[39] => $this->getTasToLastUser(),
            $keys[40] => $this->getTasSendLastEmail(),
            $keys[41] => $this->getTasDerivation(),
            $keys[42] => $this->getTasPosx(),
            $keys[43] => $this->getTasPosy(),
            $keys[44] => $this->getTasWidth(),
            $keys[45] => $this->getTasHeight(),
            $keys[46] => $this->getTasColor(),
            $keys[47] => $this->getTasEvnUid(),
            $keys[48] => $this->getTasBoundary(),
            $keys[49] => $this->getTasDerivationScreenTpl(),
            $keys[50] => $this->getTasSelfserviceTimeout(),
            $keys[51] => $this->getTasSelfserviceTime(),
            $keys[52] => $this->getTasSelfserviceTimeUnit(),
            $keys[53] => $this->getTasSelfserviceTriggerUid(),
            $keys[54] => $this->getTasSelfserviceExecution(),
            $keys[55] => $this->getTasNotEmailFromFormat(),
            $keys[56] => $this->getTasOffline(),
            $keys[57] => $this->getTasEmailServerUid(),
            $keys[58] => $this->getTasAutoRoot(),
            $keys[59] => $this->getTasReceiveServerUid(),
            $keys[60] => $this->getTasReceiveLastEmail(),
            $keys[61] => $this->getTasReceiveEmailFromFormat(),
            $keys[62] => $this->getTasReceiveMessageType(),
            $keys[63] => $this->getTasReceiveMessageTemplate(),
            $keys[64] => $this->getTasReceiveSubjectMessage(),
            $keys[65] => $this->getTasReceiveMessage(),
        );
        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param      string $name peer name
     * @param      mixed $value field value
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TYPE_PHPNAME,
     *                     TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = TaskPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        return $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param      int $pos position in xml schema
     * @param      mixed $value field value
     * @return     void
     */
    public function setByPosition($pos, $value)
    {
        switch($pos) {
            case 0:
                $this->setProUid($value);
                break;
            case 1:
                $this->setTasUid($value);
                break;
            case 2:
                $this->setTasId($value);
                break;
            case 3:
                $this->setTasTitle($value);
                break;
            case 4:
                $this->setTasDescription($value);
                break;
            case 5:
                $this->setTasDefTitle($value);
                break;
            case 6:
                $this->setTasDefSubjectMessage($value);
                break;
            case 7:
                $this->setTasDefProcCode($value);
                break;
            case 8:
                $this->setTasDefMessage($value);
                break;
            case 9:
                $this->setTasDefDescription($value);
                break;
            case 10:
                $this->setTasType($value);
                break;
            case 11:
                $this->setTasDuration($value);
                break;
            case 12:
                $this->setTasDelayType($value);
                break;
            case 13:
                $this->setTasTemporizer($value);
                break;
            case 14:
                $this->setTasTypeDay($value);
                break;
            case 15:
                $this->setTasTimeunit($value);
                break;
            case 16:
                $this->setTasAlert($value);
                break;
            case 17:
                $this->setTasPriorityVariable($value);
                break;
            case 18:
                $this->setTasAssignType($value);
                break;
            case 19:
                $this->setTasAssignVariable($value);
                break;
            case 20:
                $this->setTasGroupVariable($value);
                break;
            case 21:
                $this->setTasMiInstanceVariable($value);
                break;
            case 22:
                $this->setTasMiCompleteVariable($value);
                break;
            case 23:
                $this->setTasAssignLocation($value);
                break;
            case 24:
                $this->setTasAssignLocationAdhoc($value);
                break;
            case 25:
                $this->setTasTransferFly($value);
                break;
            case 26:
                $this->setTasLastAssigned($value);
                break;
            case 27:
                $this->setTasUser($value);
                break;
            case 28:
                $this->setTasCanUpload($value);
                break;
            case 29:
                $this->setTasViewUpload($value);
                break;
            case 30:
                $this->setTasViewAdditionalDocumentation($value);
                break;
            case 31:
                $this->setTasCanCancel($value);
                break;
            case 32:
                $this->setTasOwnerApp($value);
                break;
            case 33:
                $this->setStgUid($value);
                break;
            case 34:
                $this->setTasCanPause($value);
                break;
            case 35:
                $this->setTasCanSendMessage($value);
                break;
            case 36:
                $this->setTasCanDeleteDocs($value);
                break;
            case 37:
                $this->setTasSelfService($value);
                break;
            case 38:
                $this->setTasStart($value);
                break;
            case 39:
                $this->setTasToLastUser($value);
                break;
            case 40:
                $this->setTasSendLastEmail($value);
                break;
            case 41:
                $this->setTasDerivation($value);
                break;
            case 42:
                $this->setTasPosx($value);
                break;
            case 43:
                $this->setTasPosy($value);
                break;
            case 44:
                $this->setTasWidth($value);
                break;
            case 45:
                $this->setTasHeight($value);
                break;
            case 46:
                $this->setTasColor($value);
                break;
            case 47:
                $this->setTasEvnUid($value);
                break;
            case 48:
                $this->setTasBoundary($value);
                break;
            case 49:
                $this->setTasDerivationScreenTpl($value);
                break;
            case 50:
                $this->setTasSelfserviceTimeout($value);
                break;
            case 51:
                $this->setTasSelfserviceTime($value);
                break;
            case 52:
                $this->setTasSelfserviceTimeUnit($value);
                break;
            case 53:
                $this->setTasSelfserviceTriggerUid($value);
                break;
            case 54:
                $this->setTasSelfserviceExecution($value);
                break;
            case 55:
                $this->setTasNotEmailFromFormat($value);
                break;
            case 56:
                $this->setTasOffline($value);
                break;
            case 57:
                $this->setTasEmailServerUid($value);
                break;
            case 58:
                $this->setTasAutoRoot($value);
                break;
            case 59:
                $this->setTasReceiveServerUid($value);
                break;
            case 60:
                $this->setTasReceiveLastEmail($value);
                break;
            case 61:
                $this->setTasReceiveEmailFromFormat($value);
                break;
            case 62:
                $this->setTasReceiveMessageType($value);
                break;
            case 63:
                $this->setTasReceiveMessageTemplate($value);
                break;
            case 64:
                $this->setTasReceiveSubjectMessage($value);
                break;
            case 65:
                $this->setTasReceiveMessage($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME,
     * TYPE_NUM. The default key type is the column's phpname (e.g. 'authorId')
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return     void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = TaskPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setProUid($arr[$keys[0]]);
        }

        if (array_key_exists($keys[1], $arr)) {
            $this->setTasUid($arr[$keys[1]]);
        }

        if (array_key_exists($keys[2], $arr)) {
            $this->setTasId($arr[$keys[2]]);
        }

        if (array_key_exists($keys[3], $arr)) {
            $this->setTasTitle($arr[$keys[3]]);
        }

        if (array_key_exists($keys[4], $arr)) {
            $this->setTasDescription($arr[$keys[4]]);
        }

        if (array_key_exists($keys[5], $arr)) {
            $this->setTasDefTitle($arr[$keys[5]]);
        }

        if (array_key_exists($keys[6], $arr)) {
            $this->setTasDefSubjectMessage($arr[$keys[6]]);
        }

        if (array_key_exists($keys[7], $arr)) {
            $this->setTasDefProcCode($arr[$keys[7]]);
        }

        if (array_key_exists($keys[8], $arr)) {
            $this->setTasDefMessage($arr[$keys[8]]);
        }

        if (array_key_exists($keys[9], $arr)) {
            $this->setTasDefDescription($arr[$keys[9]]);
        }

        if (array_key_exists($keys[10], $arr)) {
            $this->setTasType($arr[$keys[10]]);
        }

        if (array_key_exists($keys[11], $arr)) {
            $this->setTasDuration($arr[$keys[11]]);
        }

        if (array_key_exists($keys[12], $arr)) {
            $this->setTasDelayType($arr[$keys[12]]);
        }

        if (array_key_exists($keys[13], $arr)) {
            $this->setTasTemporizer($arr[$keys[13]]);
        }

        if (array_key_exists($keys[14], $arr)) {
            $this->setTasTypeDay($arr[$keys[14]]);
        }

        if (array_key_exists($keys[15], $arr)) {
            $this->setTasTimeunit($arr[$keys[15]]);
        }

        if (array_key_exists($keys[16], $arr)) {
            $this->setTasAlert($arr[$keys[16]]);
        }

        if (array_key_exists($keys[17], $arr)) {
            $this->setTasPriorityVariable($arr[$keys[17]]);
        }

        if (array_key_exists($keys[18], $arr)) {
            $this->setTasAssignType($arr[$keys[18]]);
        }

        if (array_key_exists($keys[19], $arr)) {
            $this->setTasAssignVariable($arr[$keys[19]]);
        }

        if (array_key_exists($keys[20], $arr)) {
            $this->setTasGroupVariable($arr[$keys[20]]);
        }

        if (array_key_exists($keys[21], $arr)) {
            $this->setTasMiInstanceVariable($arr[$keys[21]]);
        }

        if (array_key_exists($keys[22], $arr)) {
            $this->setTasMiCompleteVariable($arr[$keys[22]]);
        }

        if (array_key_exists($keys[23], $arr)) {
            $this->setTasAssignLocation($arr[$keys[23]]);
        }

        if (array_key_exists($keys[24], $arr)) {
            $this->setTasAssignLocationAdhoc($arr[$keys[24]]);
        }

        if (array_key_exists($keys[25], $arr)) {
            $this->setTasTransferFly($arr[$keys[25]]);
        }

        if (array_key_exists($keys[26], $arr)) {
            $this->setTasLastAssigned($arr[$keys[26]]);
        }

        if (array_key_exists($keys[27], $arr)) {
            $this->setTasUser($arr[$keys[27]]);
        }

        if (array_key_exists($keys[28], $arr)) {
            $this->setTasCanUpload($arr[$keys[28]]);
        }

        if (array_key_exists($keys[29], $arr)) {
            $this->setTasViewUpload($arr[$keys[29]]);
        }

        if (array_key_exists($keys[30], $arr)) {
            $this->setTasViewAdditionalDocumentation($arr[$keys[30]]);
        }

        if (array_key_exists($keys[31], $arr)) {
            $this->setTasCanCancel($arr[$keys[31]]);
        }

        if (array_key_exists($keys[32], $arr)) {
            $this->setTasOwnerApp($arr[$keys[32]]);
        }

        if (array_key_exists($keys[33], $arr)) {
            $this->setStgUid($arr[$keys[33]]);
        }

        if (array_key_exists($keys[34], $arr)) {
            $this->setTasCanPause($arr[$keys[34]]);
        }

        if (array_key_exists($keys[35], $arr)) {
            $this->setTasCanSendMessage($arr[$keys[35]]);
        }

        if (array_key_exists($keys[36], $arr)) {
            $this->setTasCanDeleteDocs($arr[$keys[36]]);
        }

        if (array_key_exists($keys[37], $arr)) {
            $this->setTasSelfService($arr[$keys[37]]);
        }

        if (array_key_exists($keys[38], $arr)) {
            $this->setTasStart($arr[$keys[38]]);
        }

        if (array_key_exists($keys[39], $arr)) {
            $this->setTasToLastUser($arr[$keys[39]]);
        }

        if (array_key_exists($keys[40], $arr)) {
            $this->setTasSendLastEmail($arr[$keys[40]]);
        }

        if (array_key_exists($keys[41], $arr)) {
            $this->setTasDerivation($arr[$keys[41]]);
        }

        if (array_key_exists($keys[42], $arr)) {
            $this->setTasPosx($arr[$keys[42]]);
        }

        if (array_key_exists($keys[43], $arr)) {
            $this->setTasPosy($arr[$keys[43]]);
        }

        if (array_key_exists($keys[44], $arr)) {
            $this->setTasWidth($arr[$keys[44]]);
        }

        if (array_key_exists($keys[45], $arr)) {
            $this->setTasHeight($arr[$keys[45]]);
        }

        if (array_key_exists($keys[46], $arr)) {
            $this->setTasColor($arr[$keys[46]]);
        }

        if (array_key_exists($keys[47], $arr)) {
            $this->setTasEvnUid($arr[$keys[47]]);
        }

        if (array_key_exists($keys[48], $arr)) {
            $this->setTasBoundary($arr[$keys[48]]);
        }

        if (array_key_exists($keys[49], $arr)) {
            $this->setTasDerivationScreenTpl($arr[$keys[49]]);
        }

        if (array_key_exists($keys[50], $arr)) {
            $this->setTasSelfserviceTimeout($arr[$keys[50]]);
        }

        if (array_key_exists($keys[51], $arr)) {
            $this->setTasSelfserviceTime($arr[$keys[51]]);
        }

        if (array_key_exists($keys[52], $arr)) {
            $this->setTasSelfserviceTimeUnit($arr[$keys[52]]);
        }

        if (array_key_exists($keys[53], $arr)) {
            $this->setTasSelfserviceTriggerUid($arr[$keys[53]]);
        }

        if (array_key_exists($keys[54], $arr)) {
            $this->setTasSelfserviceExecution($arr[$keys[54]]);
        }

        if (array_key_exists($keys[55], $arr)) {
            $this->setTasNotEmailFromFormat($arr[$keys[55]]);
        }

        if (array_key_exists($keys[56], $arr)) {
            $this->setTasOffline($arr[$keys[56]]);
        }

        if (array_key_exists($keys[57], $arr)) {
            $this->setTasEmailServerUid($arr[$keys[57]]);
        }

        if (array_key_exists($keys[58], $arr)) {
            $this->setTasAutoRoot($arr[$keys[58]]);
        }

        if (array_key_exists($keys[59], $arr)) {
            $this->setTasReceiveServerUid($arr[$keys[59]]);
        }

        if (array_key_exists($keys[60], $arr)) {
            $this->setTasReceiveLastEmail($arr[$keys[60]]);
        }

        if (array_key_exists($keys[61], $arr)) {
            $this->setTasReceiveEmailFromFormat($arr[$keys[61]]);
        }

        if (array_key_exists($keys[62], $arr)) {
            $this->setTasReceiveMessageType($arr[$keys[62]]);
        }

        if (array_key_exists($keys[63], $arr)) {
            $this->setTasReceiveMessageTemplate($arr[$keys[63]]);
        }

        if (array_key_exists($keys[64], $arr)) {
            $this->setTasReceiveSubjectMessage($arr[$keys[64]]);
        }

        if (array_key_exists($keys[65], $arr)) {
            $this->setTasReceiveMessage($arr[$keys[65]]);
        }

    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return     Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TaskPeer::DATABASE_NAME);

        if ($this->isColumnModified(TaskPeer::PRO_UID)) {
            $criteria->add(TaskPeer::PRO_UID, $this->pro_uid);
        }

        if ($this->isColumnModified(TaskPeer::TAS_UID)) {
            $criteria->add(TaskPeer::TAS_UID, $this->tas_uid);
        }

        if ($this->isColumnModified(TaskPeer::TAS_ID)) {
            $criteria->add(TaskPeer::TAS_ID, $this->tas_id);
        }

        if ($this->isColumnModified(TaskPeer::TAS_TITLE)) {
            $criteria->add(TaskPeer::TAS_TITLE, $this->tas_title);
        }

        if ($this->isColumnModified(TaskPeer::TAS_DESCRIPTION)) {
            $criteria->add(TaskPeer::TAS_DESCRIPTION, $this->tas_description);
        }

        if ($this->isColumnModified(TaskPeer::TAS_DEF_TITLE)) {
            $criteria->add(TaskPeer::TAS_DEF_TITLE, $this->tas_def_title);
        }

        if ($this->isColumnModified(TaskPeer::TAS_DEF_SUBJECT_MESSAGE)) {
            $criteria->add(TaskPeer::TAS_DEF_SUBJECT_MESSAGE, $this->tas_def_subject_message);
        }

        if ($this->isColumnModified(TaskPeer::TAS_DEF_PROC_CODE)) {
            $criteria->add(TaskPeer::TAS_DEF_PROC_CODE, $this->tas_def_proc_code);
        }

        if ($this->isColumnModified(TaskPeer::TAS_DEF_MESSAGE)) {
            $criteria->add(TaskPeer::TAS_DEF_MESSAGE, $this->tas_def_message);
        }

        if ($this->isColumnModified(TaskPeer::TAS_DEF_DESCRIPTION)) {
            $criteria->add(TaskPeer::TAS_DEF_DESCRIPTION, $this->tas_def_description);
        }

        if ($this->isColumnModified(TaskPeer::TAS_TYPE)) {
            $criteria->add(TaskPeer::TAS_TYPE, $this->tas_type);
        }

        if ($this->isColumnModified(TaskPeer::TAS_DURATION)) {
            $criteria->add(TaskPeer::TAS_DURATION, $this->tas_duration);
        }

        if ($this->isColumnModified(TaskPeer::TAS_DELAY_TYPE)) {
            $criteria->add(TaskPeer::TAS_DELAY_TYPE, $this->tas_delay_type);
        }

        if ($this->isColumnModified(TaskPeer::TAS_TEMPORIZER)) {
            $criteria->add(TaskPeer::TAS_TEMPORIZER, $this->tas_temporizer);
        }

        if ($this->isColumnModified(TaskPeer::TAS_TYPE_DAY)) {
            $criteria->add(TaskPeer::TAS_TYPE_DAY, $this->tas_type_day);
        }

        if ($this->isColumnModified(TaskPeer::TAS_TIMEUNIT)) {
            $criteria->add(TaskPeer::TAS_TIMEUNIT, $this->tas_timeunit);
        }

        if ($this->isColumnModified(TaskPeer::TAS_ALERT)) {
            $criteria->add(TaskPeer::TAS_ALERT, $this->tas_alert);
        }

        if ($this->isColumnModified(TaskPeer::TAS_PRIORITY_VARIABLE)) {
            $criteria->add(TaskPeer::TAS_PRIORITY_VARIABLE, $this->tas_priority_variable);
        }

        if ($this->isColumnModified(TaskPeer::TAS_ASSIGN_TYPE)) {
            $criteria->add(TaskPeer::TAS_ASSIGN_TYPE, $this->tas_assign_type);
        }

        if ($this->isColumnModified(TaskPeer::TAS_ASSIGN_VARIABLE)) {
            $criteria->add(TaskPeer::TAS_ASSIGN_VARIABLE, $this->tas_assign_variable);
        }

        if ($this->isColumnModified(TaskPeer::TAS_GROUP_VARIABLE)) {
            $criteria->add(TaskPeer::TAS_GROUP_VARIABLE, $this->tas_group_variable);
        }

        if ($this->isColumnModified(TaskPeer::TAS_MI_INSTANCE_VARIABLE)) {
            $criteria->add(TaskPeer::TAS_MI_INSTANCE_VARIABLE, $this->tas_mi_instance_variable);
        }

        if ($this->isColumnModified(TaskPeer::TAS_MI_COMPLETE_VARIABLE)) {
            $criteria->add(TaskPeer::TAS_MI_COMPLETE_VARIABLE, $this->tas_mi_complete_variable);
        }

        if ($this->isColumnModified(TaskPeer::TAS_ASSIGN_LOCATION)) {
            $criteria->add(TaskPeer::TAS_ASSIGN_LOCATION, $this->tas_assign_location);
        }

        if ($this->isColumnModified(TaskPeer::TAS_ASSIGN_LOCATION_ADHOC)) {
            $criteria->add(TaskPeer::TAS_ASSIGN_LOCATION_ADHOC, $this->tas_assign_location_adhoc);
        }

        if ($this->isColumnModified(TaskPeer::TAS_TRANSFER_FLY)) {
            $criteria->add(TaskPeer::TAS_TRANSFER_FLY, $this->tas_transfer_fly);
        }

        if ($this->isColumnModified(TaskPeer::TAS_LAST_ASSIGNED)) {
            $criteria->add(TaskPeer::TAS_LAST_ASSIGNED, $this->tas_last_assigned);
        }

        if ($this->isColumnModified(TaskPeer::TAS_USER)) {
            $criteria->add(TaskPeer::TAS_USER, $this->tas_user);
        }

        if ($this->isColumnModified(TaskPeer::TAS_CAN_UPLOAD)) {
            $criteria->add(TaskPeer::TAS_CAN_UPLOAD, $this->tas_can_upload);
        }

        if ($this->isColumnModified(TaskPeer::TAS_VIEW_UPLOAD)) {
            $criteria->add(TaskPeer::TAS_VIEW_UPLOAD, $this->tas_view_upload);
        }

        if ($this->isColumnModified(TaskPeer::TAS_VIEW_ADDITIONAL_DOCUMENTATION)) {
            $criteria->add(TaskPeer::TAS_VIEW_ADDITIONAL_DOCUMENTATION, $this->tas_view_additional_documentation);
        }

        if ($this->isColumnModified(TaskPeer::TAS_CAN_CANCEL)) {
            $criteria->add(TaskPeer::TAS_CAN_CANCEL, $this->tas_can_cancel);
        }

        if ($this->isColumnModified(TaskPeer::TAS_OWNER_APP)) {
            $criteria->add(TaskPeer::TAS_OWNER_APP, $this->tas_owner_app);
        }

        if ($this->isColumnModified(TaskPeer::STG_UID)) {
            $criteria->add(TaskPeer::STG_UID, $this->stg_uid);
        }

        if ($this->isColumnModified(TaskPeer::TAS_CAN_PAUSE)) {
            $criteria->add(TaskPeer::TAS_CAN_PAUSE, $this->tas_can_pause);
        }

        if ($this->isColumnModified(TaskPeer::TAS_CAN_SEND_MESSAGE)) {
            $criteria->add(TaskPeer::TAS_CAN_SEND_MESSAGE, $this->tas_can_send_message);
        }

        if ($this->isColumnModified(TaskPeer::TAS_CAN_DELETE_DOCS)) {
            $criteria->add(TaskPeer::TAS_CAN_DELETE_DOCS, $this->tas_can_delete_docs);
        }

        if ($this->isColumnModified(TaskPeer::TAS_SELF_SERVICE)) {
            $criteria->add(TaskPeer::TAS_SELF_SERVICE, $this->tas_self_service);
        }

        if ($this->isColumnModified(TaskPeer::TAS_START)) {
            $criteria->add(TaskPeer::TAS_START, $this->tas_start);
        }

        if ($this->isColumnModified(TaskPeer::TAS_TO_LAST_USER)) {
            $criteria->add(TaskPeer::TAS_TO_LAST_USER, $this->tas_to_last_user);
        }

        if ($this->isColumnModified(TaskPeer::TAS_SEND_LAST_EMAIL)) {
            $criteria->add(TaskPeer::TAS_SEND_LAST_EMAIL, $this->tas_send_last_email);
        }

        if ($this->isColumnModified(TaskPeer::TAS_DERIVATION)) {
            $criteria->add(TaskPeer::TAS_DERIVATION, $this->tas_derivation);
        }

        if ($this->isColumnModified(TaskPeer::TAS_POSX)) {
            $criteria->add(TaskPeer::TAS_POSX, $this->tas_posx);
        }

        if ($this->isColumnModified(TaskPeer::TAS_POSY)) {
            $criteria->add(TaskPeer::TAS_POSY, $this->tas_posy);
        }

        if ($this->isColumnModified(TaskPeer::TAS_WIDTH)) {
            $criteria->add(TaskPeer::TAS_WIDTH, $this->tas_width);
        }

        if ($this->isColumnModified(TaskPeer::TAS_HEIGHT)) {
            $criteria->add(TaskPeer::TAS_HEIGHT, $this->tas_height);
        }

        if ($this->isColumnModified(TaskPeer::TAS_COLOR)) {
            $criteria->add(TaskPeer::TAS_COLOR, $this->tas_color);
        }

        if ($this->isColumnModified(TaskPeer::TAS_EVN_UID)) {
            $criteria->add(TaskPeer::TAS_EVN_UID, $this->tas_evn_uid);
        }

        if ($this->isColumnModified(TaskPeer::TAS_BOUNDARY)) {
            $criteria->add(TaskPeer::TAS_BOUNDARY, $this->tas_boundary);
        }

        if ($this->isColumnModified(TaskPeer::TAS_DERIVATION_SCREEN_TPL)) {
            $criteria->add(TaskPeer::TAS_DERIVATION_SCREEN_TPL, $this->tas_derivation_screen_tpl);
        }

        if ($this->isColumnModified(TaskPeer::TAS_SELFSERVICE_TIMEOUT)) {
            $criteria->add(TaskPeer::TAS_SELFSERVICE_TIMEOUT, $this->tas_selfservice_timeout);
        }

        if ($this->isColumnModified(TaskPeer::TAS_SELFSERVICE_TIME)) {
            $criteria->add(TaskPeer::TAS_SELFSERVICE_TIME, $this->tas_selfservice_time);
        }

        if ($this->isColumnModified(TaskPeer::TAS_SELFSERVICE_TIME_UNIT)) {
            $criteria->add(TaskPeer::TAS_SELFSERVICE_TIME_UNIT, $this->tas_selfservice_time_unit);
        }

        if ($this->isColumnModified(TaskPeer::TAS_SELFSERVICE_TRIGGER_UID)) {
            $criteria->add(TaskPeer::TAS_SELFSERVICE_TRIGGER_UID, $this->tas_selfservice_trigger_uid);
        }

        if ($this->isColumnModified(TaskPeer::TAS_SELFSERVICE_EXECUTION)) {
            $criteria->add(TaskPeer::TAS_SELFSERVICE_EXECUTION, $this->tas_selfservice_execution);
        }

        if ($this->isColumnModified(TaskPeer::TAS_NOT_EMAIL_FROM_FORMAT)) {
            $criteria->add(TaskPeer::TAS_NOT_EMAIL_FROM_FORMAT, $this->tas_not_email_from_format);
        }

        if ($this->isColumnModified(TaskPeer::TAS_OFFLINE)) {
            $criteria->add(TaskPeer::TAS_OFFLINE, $this->tas_offline);
        }

        if ($this->isColumnModified(TaskPeer::TAS_EMAIL_SERVER_UID)) {
            $criteria->add(TaskPeer::TAS_EMAIL_SERVER_UID, $this->tas_email_server_uid);
        }

        if ($this->isColumnModified(TaskPeer::TAS_AUTO_ROOT)) {
            $criteria->add(TaskPeer::TAS_AUTO_ROOT, $this->tas_auto_root);
        }

        if ($this->isColumnModified(TaskPeer::TAS_RECEIVE_SERVER_UID)) {
            $criteria->add(TaskPeer::TAS_RECEIVE_SERVER_UID, $this->tas_receive_server_uid);
        }

        if ($this->isColumnModified(TaskPeer::TAS_RECEIVE_LAST_EMAIL)) {
            $criteria->add(TaskPeer::TAS_RECEIVE_LAST_EMAIL, $this->tas_receive_last_email);
        }

        if ($this->isColumnModified(TaskPeer::TAS_RECEIVE_EMAIL_FROM_FORMAT)) {
            $criteria->add(TaskPeer::TAS_RECEIVE_EMAIL_FROM_FORMAT, $this->tas_receive_email_from_format);
        }

        if ($this->isColumnModified(TaskPeer::TAS_RECEIVE_MESSAGE_TYPE)) {
            $criteria->add(TaskPeer::TAS_RECEIVE_MESSAGE_TYPE, $this->tas_receive_message_type);
        }

        if ($this->isColumnModified(TaskPeer::TAS_RECEIVE_MESSAGE_TEMPLATE)) {
            $criteria->add(TaskPeer::TAS_RECEIVE_MESSAGE_TEMPLATE, $this->tas_receive_message_template);
        }

        if ($this->isColumnModified(TaskPeer::TAS_RECEIVE_SUBJECT_MESSAGE)) {
            $criteria->add(TaskPeer::TAS_RECEIVE_SUBJECT_MESSAGE, $this->tas_receive_subject_message);
        }

        if ($this->isColumnModified(TaskPeer::TAS_RECEIVE_MESSAGE)) {
            $criteria->add(TaskPeer::TAS_RECEIVE_MESSAGE, $this->tas_receive_message);
        }


        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return     Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(TaskPeer::DATABASE_NAME);

        $criteria->add(TaskPeer::TAS_UID, $this->tas_uid);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return     string
     */
    public function getPrimaryKey()
    {
        return $this->getTasUid();
    }

    /**
     * Generic method to set the primary key (tas_uid column).
     *
     * @param      string $key Primary key.
     * @return     void
     */
    public function setPrimaryKey($key)
    {
        $this->setTasUid($key);
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of Task (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @throws     PropelException
     */
    public function copyInto($copyObj, $deepCopy = false)
    {

        $copyObj->setProUid($this->pro_uid);

        $copyObj->setTasId($this->tas_id);

        $copyObj->setTasTitle($this->tas_title);

        $copyObj->setTasDescription($this->tas_description);

        $copyObj->setTasDefTitle($this->tas_def_title);

        $copyObj->setTasDefSubjectMessage($this->tas_def_subject_message);

        $copyObj->setTasDefProcCode($this->tas_def_proc_code);

        $copyObj->setTasDefMessage($this->tas_def_message);

        $copyObj->setTasDefDescription($this->tas_def_description);

        $copyObj->setTasType($this->tas_type);

        $copyObj->setTasDuration($this->tas_duration);

        $copyObj->setTasDelayType($this->tas_delay_type);

        $copyObj->setTasTemporizer($this->tas_temporizer);

        $copyObj->setTasTypeDay($this->tas_type_day);

        $copyObj->setTasTimeunit($this->tas_timeunit);

        $copyObj->setTasAlert($this->tas_alert);

        $copyObj->setTasPriorityVariable($this->tas_priority_variable);

        $copyObj->setTasAssignType($this->tas_assign_type);

        $copyObj->setTasAssignVariable($this->tas_assign_variable);

        $copyObj->setTasGroupVariable($this->tas_group_variable);

        $copyObj->setTasMiInstanceVariable($this->tas_mi_instance_variable);

        $copyObj->setTasMiCompleteVariable($this->tas_mi_complete_variable);

        $copyObj->setTasAssignLocation($this->tas_assign_location);

        $copyObj->setTasAssignLocationAdhoc($this->tas_assign_location_adhoc);

        $copyObj->setTasTransferFly($this->tas_transfer_fly);

        $copyObj->setTasLastAssigned($this->tas_last_assigned);

        $copyObj->setTasUser($this->tas_user);

        $copyObj->setTasCanUpload($this->tas_can_upload);

        $copyObj->setTasViewUpload($this->tas_view_upload);

        $copyObj->setTasViewAdditionalDocumentation($this->tas_view_additional_documentation);

        $copyObj->setTasCanCancel($this->tas_can_cancel);

        $copyObj->setTasOwnerApp($this->tas_owner_app);

        $copyObj->setStgUid($this->stg_uid);

        $copyObj->setTasCanPause($this->tas_can_pause);

        $copyObj->setTasCanSendMessage($this->tas_can_send_message);

        $copyObj->setTasCanDeleteDocs($this->tas_can_delete_docs);

        $copyObj->setTasSelfService($this->tas_self_service);

        $copyObj->setTasStart($this->tas_start);

        $copyObj->setTasToLastUser($this->tas_to_last_user);

        $copyObj->setTasSendLastEmail($this->tas_send_last_email);

        $copyObj->setTasDerivation($this->tas_derivation);

        $copyObj->setTasPosx($this->tas_posx);

        $copyObj->setTasPosy($this->tas_posy);

        $copyObj->setTasWidth($this->tas_width);

        $copyObj->setTasHeight($this->tas_height);

        $copyObj->setTasColor($this->tas_color);

        $copyObj->setTasEvnUid($this->tas_evn_uid);

        $copyObj->setTasBoundary($this->tas_boundary);

        $copyObj->setTasDerivationScreenTpl($this->tas_derivation_screen_tpl);

        $copyObj->setTasSelfserviceTimeout($this->tas_selfservice_timeout);

        $copyObj->setTasSelfserviceTime($this->tas_selfservice_time);

        $copyObj->setTasSelfserviceTimeUnit($this->tas_selfservice_time_unit);

        $copyObj->setTasSelfserviceTriggerUid($this->tas_selfservice_trigger_uid);

        $copyObj->setTasSelfserviceExecution($this->tas_selfservice_execution);

        $copyObj->setTasNotEmailFromFormat($this->tas_not_email_from_format);

        $copyObj->setTasOffline($this->tas_offline);

        $copyObj->setTasEmailServerUid($this->tas_email_server_uid);

        $copyObj->setTasAutoRoot($this->tas_auto_root);

        $copyObj->setTasReceiveServerUid($this->tas_receive_server_uid);

        $copyObj->setTasReceiveLastEmail($this->tas_receive_last_email);

        $copyObj->setTasReceiveEmailFromFormat($this->tas_receive_email_from_format);

        $copyObj->setTasReceiveMessageType($this->tas_receive_message_type);

        $copyObj->setTasReceiveMessageTemplate($this->tas_receive_message_template);

        $copyObj->setTasReceiveSubjectMessage($this->tas_receive_subject_message);

        $copyObj->setTasReceiveMessage($this->tas_receive_message);


        $copyObj->setNew(true);

        $copyObj->setTasUid(''); // this is a pkey column, so set to default value

    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return     Task Clone of current object.
     * @throws     PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);
        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return     TaskPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TaskPeer();
        }
        return self::$peer;
    }
}

