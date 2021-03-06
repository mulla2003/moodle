<?php
$string['pluginname'] = 'Payeer';
$string['pluginname_desc'] = 'This plugin lets you configure courses to be paid for using the Payeer payment gateway.';

$string['status'] = 'Allow Payeer enrolments';
$string['status_desc'] = 'Allow users to use Payeer to enrol into a course by default.';
$string['cost'] = 'Enrol cost';
$string['costerror'] = 'The enrolment cost is not numeric';
$string['currency'] = 'Currency';
$string['defaultrole'] = 'Default role assignment';
$string['defaultrole_desc'] = 'Select role which should be assigned to users during Payeer enrolments';
$string['enrolenddate'] = 'End date';
$string['enrolenddate_help'] = 'If enabled, users can be enrolled until this date only.';
$string['enrolenddaterror'] = 'Enrolment end date cannot be earlier than start date';
$string['enrolperiod'] = 'Enrolment duration';
$string['enrolperiod_desc'] = 'Default length of time that the enrolment is valid (in seconds). If set to zero, the enrolment duration will be unlimited by default.';
$string['enrolperiod_help'] = 'Length of time that the enrolment is valid, starting with the moment the user is enrolled. If disabled, the enrolment duration will be unlimited.';
$string['enrolstartdate'] = 'Start date';
$string['enrolstartdate_help'] = 'If enabled, users can be enrolled from this date onward only.';
$string['expiredaction'] = 'Enrolment expiration action';
$string['expiredaction_help'] = 'Select action to carry out when user enrolment expires. Please note that some user data and settings are purged from course during course unenrolment.';
$string['payeer_merchant_url'] = 'Merchant URL';
$string['payeer_shop'] = 'Merchant ID';
$string['payeer_key'] = 'Secret key';
$string['payeer_log'] = 'Path to file to log payments through Payeer (for example, /payeer_orders.log)';
$string['payeer_emailerr'] = 'Email for transaction errors';
$string['payeer_ipfilter'] = 'IP filter';
$string['assignrole'] = 'Assign role';
$string['payeer:config'] = 'Configure Payeer enrol instances';
$string['payeer:manage'] = 'Manage enrolled users';
$string['payeer:unenrol'] = 'Unenrol users from course';
$string['payeer:unenrolself'] = 'Unenrol self from the course';
$string['payeeraccepted'] = 'Payeer payments accepted';
$string['sendpaymentbutton'] = 'Send payment via Payeer';
$string['unenrolselfconfirm'] = 'Do you really want to unenrol yourself from course "{$a}"?';

$string['coursenotfound'] = 'Course not found';
$string['error_usercourseempty'] = 'user or course empty';
$string['error_payeercurrency'] = 'The course fee is not in a currency recognised by Payeer.';
$string['error_txdatabase'] = 'Fatal: could not create the Payeer transaction in the Moodle database.';
