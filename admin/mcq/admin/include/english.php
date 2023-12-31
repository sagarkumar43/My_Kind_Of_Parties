<?php
// ------Mail------
define('TI_EMAIL_BLANK','Please enter valid emil');
define('TI_MAIL_ERROR','This Emil Id does not exist in our database. Please try again?');
define('TI_MAIL_FORGET_SUBJECT','Your password from');
define('TI_FORGET_PASS_MAIL_SENT_MESSAGE','Email sent successfully.');

// ------Drop down message------
define('TI_DROPDOWN_CATEGORY_NAME','Please Select Category Name');
define('TI_DROPDOWN_PERMISSION','Please Select User Permission');
define('TI_DROPDOWN_SUBCATEGORY_NAME','Please Select Subcategory Name');
define('TI_DROPDOWN_CENTER_NAME','Please Select Center Name');
define('TI_SELECT_CATEGORY','Select Category');
define('TI_SELECT_CATEGORY_FIRST','Select Category Name First');
define('TI_SELECT_SUB_CATEGORY_FIRST','Select Subcategory Name First');
define('TI_DROPDOWN_STUDENT_SELECT_CENTER','Select Center');
define('TI_DROPDOWN_BATCH_SELECT','Select Batch Name & Time');
define('TI_DROPDOWN_SUBJECT','Select Subject');
define('TI_DROPDOWN_EXAM','Select Exam');
define('TI_DROPDOWN_QUESTION_SELECT_ANSWER_TYPE','Select Answer Type');
define('TI_QUESTION_SINGLE_SELECTION','Single Selection');
define('TI_QUESTION_MULTIPLE_SELECTION','Multiple Selection');
// ------Page Heading------
define('TI_MANAGE_CATEGORY','Manage Category');
define('TI_MANAGE_SUB_CATEGORY','Manage Subcategory');
define('TI_MANAGE_BATCH','Manage Batch');
define('TI_MANAGE_IMPORT','Manage Import');
define('TI_MANAGE_EXPORT','Manage Export');
define('TI_MANAGE_PROFILE','Manage Profile');
define('TI_MANAGE_SUBJECT','Manage Subject');
define('TI_MANAGE_CENTER','Manage Center');
define('TI_MANAGE_USER','Manage User');
define('TI_MANAGE_DASHBOARD','Admin Dashboard');
define('TI_MANAGE_STUDENT','Manage Student');
define('TI_MANAGE_EXAM','Manage Exam');
define('TI_MANAGE_QUESTION','Manage Question');
define('TI_MANAGE_CHANGE_PASSWORD','Manage Password');
// ------Page Tab Heading------
define('TI_CATEGORY_ADD','Add Category');
define('TI_USER_ADD','Add User');
define('TI_SUBJECT_ADD','Add Subject');
define('TI_CENTER_ADD','Add Center');
define('TI_SUB_CATEGORY_ADD','Add Subcategory');
define('TI_BATCH_ADD','Add Batch');
define('TI_IMPORT_ADD','Add File');
define('TI_CATEGORY_LIST','Category List');
define('TI_USER_LIST','User List');
define('TI_SUBJECT_LIST','Subject List');
define('TI_STUDENT_LIST','Student List');
define('TI_CENTER_LIST','Center List');
define('TI_SUB_CATEGORY_LIST','Subcategory List');
define('TI_BATCH_LIST','Batch List');
define('TI_IMPORT_LIST','Import List');
define('TI_EXPORT_LIST','Export List');
define('TI_PROFILE_EDIT','Profile Edit');
define('TI_SUBJECT_EDIT','Edit Subject');
define('TI_CENTER_EDIT','Edit Center');
define('TI_STUDENT_ADD','Add Student');
define('TI_EXAM_ADD','Add Exam');
define('TI_EXAM_EDIT','Edit Exam');
define('TI_QUESTION_LIST','Question List');
define('TI_ADD_QUESTION','Add Question');
define('TI_EDIT_QUESTION','Edit Question');
define('TI_CHANGE_PASSWORD','Change Password');
// ------Messages Successfully------
define('TI_CATEGORY_ADD_MESSAGE','category successfully added.');
define('TI_CATEGORY_EDIT_MESSAGE','category successfully edited.');
define('TI_SUB_CATEGORY_ADD_MESSAGE','subcategory successfully added.');
define('TI_IMPORT_ADD_MESSAGE','File is upload successfully.');
define('TI_EXPORT_ADD_MESSAGE','create successfully.');
define('TI_BATCH_ADD_MESSAGE','batch successfully added.');
define('TI_BATCH_EDIT_MESSAGE','batch successfully edited.');
define('TI_SUB_CATEGORY_EDIT_MESSAGE','subcategory successfully edited.');
define('TI_USER_MESSAGE','User successfully added.');
define('TI_GENERAL_MESSAGE','General setting edited successfully.');
define('TI_SUBJECT_SUCCESS_MESSAGE',' successfully added.');
define('TI_CENTER_SUCCESS_MESSAGE',' Center has been successfully added.');
define('TI_CENTER_EDIT_MESSAGE','Center successfully edited.');
define('TI_SUBJECT_EDIT_MESSAGE','subject successfully edited.');
define('TI_STUDENT_ADD_MESSAGE','student successfully added.');
define('TI_STUDENT_EDIT_MESSAGE','student successfully edited.');
define('TI_QUESTION_SUCCESS_MESSAGE','Question successfully added.');
define('TI_EXAM_SUCCESS_MESSAGE','Exam is successfully added.');
define('TI_EXAM_EDIT_SUCCESS_MESSAGE','Exam is successfully edited.');
// ------Messages All Ready Exit------
define('TI_CATEGORY_ERROR_ALLREADY_EXIT',' category already exists.');
define('TI_SUB_CATEGORY_ERROR_ALLREADY_EXIT','subcategory already exists.');
define('TI_USER_ERROR_EMAIL_EXITS','This email allready exits.');
define('TI_SUBJECT_ERROR_EXITS','Allready Exits');
define('TI_CENTER_ERROR_ALLREADY_EXIT','email already exists');
define('TI_STUDENT_ERROR_ALLREADY_EXIT','email already exists');
define('TI_IMPORT_ERROR_FORMAT','Please convert the downloaded database .xlsx file File to .xls');
define('TI_IMPORT_ERROR','File is not upload');
define('TI_EXAM_ERROR_ALLREADY_EXIT','Exam already exists');

// ------Messages Error------
define('TI_CATEGORY_MYSQL_ERROR',' Error category adding '. mysql_error().'.');
define('TI_SUB_CATEGORY_MYSQL_ERROR',' Error subcategory adding '. mysql_error().'.');
define('TI_BATCH_MYSQL_ERROR',' Error batch adding '. mysql_error().'.');
define('TI_EXPORT_FILE_MYSQL_ERROR',' File is not export. Please tryagain.');
define('TI_USER_MYSQL_ERROR',' Error user adding '. mysql_error().'.');
define('TI_GENERAL_MYSQL_ERROR',' Error general setting edited '. mysql_error().'.');
define('TI_SUBJECT_MYSQL_ERROR',' Error subject adding '. mysql_error().'.');
define('TI_CENTER_MYSQL_ERROR',' Error center adding '. mysql_error().'.');
define('TI_STUDENT_MYSQL_ERROR',' Error student adding '. mysql_error().'.');
define('TI_QUESTION_MYSQL_ERROR',' Error adding Question.'. mysql_error().'.');
define('TI_EXAM_MYSQL_ERROR',' Error adding exam.'. mysql_error().'.');
define('TI_CONNECTION_MYSQL_ERROR','Database connection is not established.');
// ------Button------
define('TI_CATEGORY_ADD_BUTTON','Add Category');
define('TI_CATEGORY_EDIT_BUTTON','Edit Category');
define('TI_SUB_CATEGORY_ADD_BUTTON','Add Subcategory');
define('TI_BATCH_ADD_BUTTON','Add Batch');
define('TI_EXPORT_FILE','Export');
define('TI_EXPORT_ADD_BUTTON','Export File');
define('TI_IMPORT_ADD_BUTTON','Upload File');
define('TI_SUBCATEGORY_EDIT_BUTTON','Edit Subcategory');
define('TI_BATCH_EDIT_BUTTON','Edit Batch');
define('TI_CENTER_ADD_BUTTON','Add Center');
define('TI_DEACTIVATE_BUTTON','Deactivate');
define('TI_ACTIVATE_BUTTON','Activate');
define('TI_INACTIVE_STATUS_BUTTON','Inactive');
define('TI_ACTIVATE_STATUS_BUTTON','Active');
define('TI_DELETE_BUTTON','Delete');
define('TI_DONLOAD_FILE_BUTTON','Download File');
define('TI_EDIT_BUTTON','Edit');
define('TI_CONFIRME_BUTTON', 'Confirm');
define('TI_CANCEL_BUTTON', 'Cancel');
define('TI_SUBJECT_EDIT_BUTTON','Edit Subject');
define('TI_CENTER_EDIT_BUTTON','Edit Center');
define('TI_STUDENT_EDIT_BUTTON','Edit Student');
define('TI_STUDENT_ADD_BUTTON','Add Student');
define('TI_FORGOT_PASSWORD_BUTTON','Forgot Password ?');
define('TI_EXAM_VIEW_BUTTON','View');
define('TI_EXAM_VIEW_QUESTION_BUTTON','View Question');
define('TI_EXAM_EDIT_BUTTON','Edit Exam');
define('TI_QUESTION_ADD_BUTTON','Add Question');
define('TI_QUESTION_EDIT_BUTTON','Edit Question');
define('TI_CHANGE_PASSWORD_UPDATE_BUTTON','Update Password');
// ------Popup Message------
define('TI_STATUS_DATA_ACTIVE','Sure, you want to Activate ?');
define('TI_STATUS_DATA_DEACTIVE','Sure, you want to Dectivate ?');
define('TI_POPUP_DELETE_CATEGORY','Are you sure, you want to delete this category ?');
define('TI_POPUP_DELETE_SUB_CATEGORY','Are you sure, you want to delete this subcategory ?');
define('TI_POPUP_DELETE_BATCH','Are you sure, you want to delete this batch ?');
define('TI_POPUP_DELETE_FILE','Are you sure, you want to delete this file ?');
define('TI_POPUP_DELETE_USER','Are you sure, you want to delete this user ?');
define('TI_DELETE_CONFIRMATION', 'Confirmation!');
define('TI_POPUP_SUBJECT_DELETE','Are you sure, you want to delete this subject ?');
define('TI_POPUP_STUDENT_DELETE','Are you sure, you want to delete this student ?');
define('TI_POPUP_EXAM_DELETE','Are you sure, you want to delete this exam ?');
define('TI_POPUP_DELETE_CENTER','Are you sure, you want to delete this center ?');
define('TI_POPUP_DELETE_QUESTION','Are you sure, you want to delete this question ?');
// ------Table Heading------
define('TI_TABLE_CATEGORY_NAME','Category Name');
define('TI_TABLE_BATCH_NAME','Batch Name');
define('TI_TABLE_IMPORT_NAME','File Name');
define('TI_TABLE_EXPORT_NAME','File Name');
define('TI_TABLE_SUB_CATEGORY_NAME','Subcategory Name');
define('TI_TABLE_BATCH_TIME','Batch Time');
define('TI_TABLE_STATUS','Status');
define('TI_TABLE_OPTIONS','Options');
define('TI_TABLE_HASH','#'); 
define('TI_TABLE_ID','ID');
define('TI_TABLE_USER_NAME','User Name');
define('TI_TABLE_USER_EMAIL','User Email');
define('TI_TABLE_SUBJECT_NAME','Subject Name');
define('TI_TABLE_EXAM_NAME','Exam Name');
define('TI_TABLE_CENTER_NAME','Center Name');
define('TI_TABLE_CENTER_CODE','Center Code');
define('TI_TABLE_CENTER_EMAIL','Email');
define('TI_TABLE_CENTER_USER_NAME','User Name');
define('TI_TABLE_STUDENT_NAME','Student Name');
define('TI_TABLE_STUDENT_FATHER_NAME','Father Name');
define('TI_TABLE_BATCH_NAME_TIME','Batch Name & Time');
define('TI_TABLE_QUESTION_NAME','Question');
define('TI_TABLE_QUESTION_CHOICES_NO','No.');
define('TI_TABLE_QUESTION_CHOICES_CORRECT','Correct');
define('TI_TABLE_QUESTION_CHOICES_CHOICES','Choices');
define('TI_TABLE_QUESTION_QUESTION','Question');
define('TI_TABLE_QUESTION_OPTION','Option');


// ------Label------
define('TI_LABEL_CATEGORY_NAME','Category Name');
define('TI_LABEL_BATCH_NAME','Batch Name');
define('TI_LABEL_EXPORT_FILE_BUTTON_NAME','Click this button to export database to excel file');
define('TI_LABEL_IMPORT_FILE','Upload File');
define('TI_LABEL_BATCH_TIME','Batch Time');
define('TI_LABEL_SUB_CATEGORY_NAME','Subcategory Name');
define('TI_LABEL_USER_NAME','User Name');
define('TI_LABEL_USER_EMAIL','User Email');
define('TI_LABEL_USER_PASSWORD','User Password');
define('TI_LABEL_USER_PERMISTION','Permission ?');
define('TI_LABEL_SUBJECT_NAME','Subject Name');
define('TI_LABEL_EXAM_NAME','Exam Name');
define('TI_LABEL_CENTER_NAME','Center Name');
define('TI_LABEL_CENTER_ADDRESS','Address');
define('TI_LABEL_CENTER_ABOUT','About Us');
define('TI_LABEL_STUDENT_PHONE_CENTER','Phone');
define('TI_LABEL_CENTER_CODE','Center Code');
define('TI_LABEL_CENTER_USER_NAME','User Name');
define('TI_LABEL_CENTER_EMAIL','Email');
define('TI_LABEL_CENTER_PASSWORD','Password');
define('TI_LABEL_STUDENT_CENTER','Center Name');
define('TI_LABEL_STUDENT_NAME','Student Name');
define('TI_LABEL_BATCH_NAME_TIME','Batch Name & Time');
define('TI_LABEL_STUDENT_FATHER_NAME','Father Name');
define('TI_LABEL_STUDENT_MOTHER_NAME','Mother Name');
define('TI_LABEL_STUDENT_DOB','Date of Birth');
define('TI_LABEL_STUDENT_ADDRESS','Address');
define('TI_LABEL_STUDENT_PHONE','Phone');
define('TI_LABEL_STUDENT_EMAIL','Email');
define('TI_LABEL_STUDENT_USER_NAME','User Name');
define('TI_LABEL_QUESTION_QUESTION','Question');
define('TI_LABEL_QUESTION_ANSWER_TYPE','Answer Type');
define('TI_LABEL_QUESTION_CHOICES','Enter Choices');
define('TI_LABEL_STUDENT_STATUS','Student Status');
define('TI_LABEL_QUESTION_CHOICES_A','A');
define('TI_LABEL_QUESTION_CHOICES_B','B');
define('TI_LABEL_QUESTION_CHOICES_C','C');
define('TI_LABEL_QUESTION_CHOICES_D','D');
define('TI_LABEL_QUESTION_SET_MARKS','Set Marks');
define('TI_LABEL_QUESTION_MARKS','Marks');
define('TI_LABEL_CURRENT_PASSWORD',' Current Password');
define('TI_LABEL_NEW_PASSWORD',' New Password');
define('TI_LABEL_CONFIRM_PASSWORD',' Confirm New Password');
define('TI_LABEL_PASSING_PERCENTAGE','Passing Percentage(In %)');
define('TI_LABEL_RE_EXAM_DAY','RE Exam Day');
define('TI_LABEL_TERMS_CONDITION','Terms & Condition');
define('TI_LABEL_RE_EXAM_DAY_NOTICE','  <b>If you take the exam then again show the exam after days</b>');
define('TI_LABEL_T',' T:');
define('TI_LABEL_A',' A:');
define('TI_LABEL_EXAM_RESULT_MAIL',' Result on Mail');
// ------desboard icon------
define('TI_DESBOARD_ICON_DASHBOARD','Dashboard');//0--show all
define('TI_DESBOARD_ICON_CATEGORY','Category');//2
define('TI_DESBOARD_ICON_SUB_CATEGORY','Sub Category');//3
define('TI_DESBOARD_ICON_SUBJECT','Subject');//4
define('TI_DESBOARD_ICON_CENTER','Center');//5
define('TI_DESBOARD_ICON_STUDENT','Student');//6
define('TI_DESBOARD_ICON_EXAM', 'Exam');//7
define('TI_DESBOARD_ICON_SETTINGS','Settings');//8
define('TI_DESBOARD_ICON_GENERAL_SETTINGS','General Settings');//9
define('TI_DESBOARD_ICON_USER', 'User');//10
define('TI_DESBOARD_ICON_QUESTION','Question');//11
define('TI_DESBOARD_ICON_NOTICE', 'Notice');//12
define('TI_DESBOARD_ICON_BATCH', 'Batch');//14
define('TI_DESBOARD_ICON_EXPORT', 'Export');//15
define('TI_DESBOARD_ICON_IMPORT', 'Import');//16

// ------left menu------
define('TI_LEFT_MENU_DASHBOARD','Dashboard');//0--show all
define('TI_LEFT_MENU_CATEGORY','Category');//2
define('TI_LEFT_MENU_SUB_CATEGORY','Sub Category');//3
define('TI_LEFT_MENU_SUBJECT','Subject');//4
define('TI_LEFT_MENU_CENTER','Center');//5
define('TI_LEFT_MENU_STUDENT','Student');//6
define('TI_LEFT_MENU_EXAM', 'Exam');//7
define('TI_LEFT_MENU_SETTINGS','Settings');//8
define('TI_LEFT_MENU_GENERAL_SETTINGS','General Settings');//9
define('TI_LEFT_MENU_USER', 'User');//10
define('TI_LEFT_MENU_QUESTION', 'Question');//11
define('TI_LEFT_MENU_NOTICE', 'Notice');//12
define('TI_LEFT_MENU_VIEW_RESULT', 'View Result');//13
define('TI_LEFT_MENU_BATCH', 'Batch');//14
define('TI_LEFT_MENU_EXPORT', 'Export');//15
define('TI_LEFT_MENU_IMPORT', 'Import');//16

//------Main header--------
define('TI_MAIN_HEADER_ACCOUNT','Account');
define('TI_MAIN_HEADER_ADMIN_PANEL','Admin Panel');
define('TI_MAIN_HEADER_PROFILE','Profile');
define('TI_MAIN_HEADER_LOGOUT','Logout');
define('TI_MAIN_HEADER_CHANGE_PASSWORD','Change Password');

//------Index page--------
define('TI_RESET_PASSWORD_LOGIN','Forgot password');
define('TI_LOGIN','Login');
define('TI_LOGIN_ERROR','Username/password combination incorrect.<br />	Please make sure your caps lock key is off and try again.');
define('TI_INDEX_MESSAGE_TWO','<b>Logout Successfuly!</b>'); 
define('TI_LOGIN_ERROR_EMAIL_PASSWORD_EMPTY_MESSAGE','Enter a valid Email and Password combination.'); 
define('TI_LOGIN_ERROR_EMAIL_EMPTY_MESSAGE','Please enter valid emil.');
define('TI_LOGIN_ERROR_PASSWORD_EMPTY_MESSAGE','Please enter valid password.');
define('TI_INDEX_MESSAGE_ONE','<br/><strong>Howdy!</strong> Please, don&#39;t tell anyone your password');
define('TI_ABOUT_CONTENT','About Content');
define('TI_EMAIL_SETTING','Email Setting');
define('TI_PROFILE_BUTTON','Profile');
define('TI_SUBJECT_ADD_BUTTON','Add Subject');
define('TI_USER_ADD_BUTTON','Add User');
define('TI_BUTTON_QUESTION','Add Question');
define('TI_EXAM_NEGATIVE_MARKING','Negative Marking');
define('TI_EXAM_LATE_TIME_REDUCTION','Time reduction Allow if late login');
define('TI_UPDATE','Update');
define('TI_ADMIN','Admin');
define('TI_CENTER','Center');
define('TI_PRACTICE_PAPER','Practice Paper');
define('TI_COPY','&copy; '.date('Y'));
define('TI_EDIT','Edit');
define('TI_PROFILE','Profile');
define('TI_CLOSE','Close');

//------General setting-------
define('TI_GENERALSETTING_UPDATE','Update');
define('TI_GENERALSETTING','General Setting');
define('TI_ADD_GENERALSETTING','Edit General Setting');
define('TI_GENERALSETTING_SITE_TITLE','Site Title');
define('TI_GENERALSETTING_SITE_DESCRIPTION','Site Description');
define('TI_GENERALSETTING_SITE_KEYWORDS','Site Keywords');
define('TI_GENERALSETTING_ORGANIZATION','Organization');
define('TI_GENERALSETTING_LOGO_SIZE','Logo Size Maximum 200px * 200px');
define('TI_GENERALSETTING_COPYRIGHT','Copyright');
define('TI_GENERALSETTING_SITE_LOGO','Site Logo');
define('TI_GENERALSETTING_ADDRESS','Address');
define('TI_GENERALSETTING_PHONENO','Phone No');
define('TI_GENERALSETTING_PASSING_SCORE','Passing Score');
define('TI_GENERALSETTING_EMAIL','Contact Email');
define('TI_GENERALSETTING_TIMEZONE','Time Zone');
define('TI_GENERALSETTING_GOOGLE_ANALYTICS','Google Analytics');
define('TI_GENERALSETTING_CERTIFICATE_LOGO','Certificate Logo');
define('TI_GENERALSETTING_LOGO','Logo');
define('TI_GENERALSETTING_CERTIFICATER_SIGNATURE','Upload Signature on Certificate');
define('TI_GENERALSETTING_CERTIFICATE_CONTENT','Certificate Content');
define('TI_GENERALSETTING_TEXT_FOR_SIGNATURE','Text For Signature');
//-------change password----------
define('TI_LOGOUT','Logout');
define('TI_CHANGE','Change');
define('TI_PASSWORD','Password');
define('TI_NEW','New');
define('TI_CONFIRM','Confirm');
define('TI_CENTER_LOGO','Logo');
define('TI_PHONE_NO','Phone No.');
define('TI_CENTER_THEME_COLOR',' Theme color');
define('TI_CENTER_THEME_ONE','RED');
define('TI_CENTER_THEME_TWO','BLUE');
define('TI_CENTER_THEME_THREE','GREEN');
define('TI_CENTER_THEME_FOUR','ORANGE');
define('TI_LOADING_DATA','ORANGE');
//-----------exam--------------
define('TI_EXAM','Exam');
define('TI_EXAM_LIST','Exam List');
define('TI_CATEGORY_NAME','Category Name');
define('TI_GROUP_NAME_SELECT','Please select group Name');
define('TI_EXAM_NAME','Exam Name');
define('TI_EXAM_DATE_FROM','Exam Date');
define('TI_EXAM_TIME','Exam Time');
define('TI_EXAM_TIME_DURATION','Exam Duration(In Minute)');
define('TI_CREATE_EXAM','Add Exam');
define('TI_EXAM_TIME_START','Exam Time');
define('TI_EXAM_NEG_MARKS','Negative Marks');
define('TI_EXAM_STATUS','Exam ');
define('TI_EXAM_TYPE','Exam Type');
define('TI_NEGATIVE_MARKS','Negative Marks');
define('TI_SELECT_SUB_CATEGORY','Select Subcategory Name');
define('TI_SELECT_SUBJECT_NAME','Select Subject Name');
define('TI_CURRENT_PASSWORD_EMPTY','Current Password is empty');
define('TI_NEW_PASSWORD_EMPTY','New Password is empty');
define('TI_CONFIRM_PASSWORD_EMPTY','Confirm password is empty');
define('TI_PASSWORD_MATCH_ERROR','Password Confirmation failed. New Password and Confirm Password must be same');
define('TI_PASSWORD_FAILED_MESSAGE','Password change failed');
define('TI_PASSWORD_WRONG_MESSAGE','Current Password is wrong');
define('TI_PASSWORD_CHANGED_SUCCESS_MESSAGE','Password is successfully changed.');
define('TI_NOTICE_EDIT','Edit Notice');
define('TI_MANAGE_NOTICE','Manage Notice');
define('TI_LABEL_NOTICE','Notice');
define('TI_LABEL_ADD_NOTICE','Add Notice');
define('TI_LABEL_NOTICE_LIST','Notice List');
define('TI_LABEL_NOTICE_SUBJECT','Notice Subject');
define('TI_LABEL_NOTICE_DATE','Notice Date');
define('TI_LABEL_NOTICE_STATUS','Status');
define('TI_NOTICE_FOR_STUDENTS','Manage Notice for Students');
define('TI_NOTICE_FOR_CENTERS','Manage Notice for Center');
define('TI_NOTICE_ADD_SUCCESS_MESSAGE','Notice is successfully added.');
define('TI_NOTICE_ADDED_SUCCESS_MESSAGE','Notice has been successfully sent.');
define('TI_NOTICE_EDIT_SUCCESS_MESSAGE','Notice is successfully edited.');
define('TI_NOTICE_ADDED_FAILED_MESSAGE','Notice added  failed');
define('TI_NOTICE_EDITED_FAILED_MESSAGE','Notice edited  failed');
define('TI_NOTICE_SELECT_STUDENT_FIRST','Please select student name first');
define('TI_NOTICE_SELECT_CENTER_FIRST','Please select center name first');
define('TI_POPUP_DELETE_NOTICE','Are you sure, you want to delete this notice ?');
define('TI_QUESTION_EDIT_SUCCESS_MESSAGE','Question successfully edited.');
define('TI_LABEL_STUDENT_PHOTO','Student Photo');
define('TI_TABLE_EXAM_DATE','Exam Date');
define('TI_LOGIN_HEADER_SELECT_SECTION','Select Section');
define('TI_LOGIN_HEADER_STUDENT', 'Student');
define('TI_LOGIN_HEADER_CENTER', 'Center');
define('TI_LOGIN_HEADER_ADMIN','Admin');
define('TI_GOOGLE_ANALYTICS_ID_CODE','To retrieve your Google Analytics ID code you will need to sign in to your Google Analytics account and copy the code that looks like this<b> UA-1111111-1</b>');
define('TI_CHART_HEADING_CATEGORY_ADMIN','Chart depicting number of students in each category');
define('TI_CHART_HEADING_EXAM_ADMIN','Chart depicting exams taken up by students in last 7 days');
define('TI_VIEW_RESULT_ADMIN','View Result');
define('TI_LABEL_SELECT_CATEGORY','Select Category');
define('TI_LABEL_SELECT_SUBCATEGORY','Select Subcategory');
define('TI_LABEL_SELECT_SUBJECT','Select Subject');
define('TI_VIEW_RESULT_EXAM','View Result');
define('TI_SEARCH_BUTTON','Search Student');
define('TI_SEARCH_RESULT','Search Result');
define('TI_TABLE_EXAME_NAME','Exame Name');
define('TI_CERTIFICATE_BUTTON','Certificate');
define('TI_VIEW_RESULT_BUTTON','View Result');
define('TI_TAB_INFORMATION','Information');
define('TI_MANAGE_RESULT', ' Result');
define('TI_EXAM_TAKE_NOW',' You will be able to take up this exam now.');
define('TI_POPUP_TAKE_EXAM','You have already taken this exam ?');
define('TI_POPUP_TAKE_EXAM_AFTER_DAYS','You will be able to take up this exam after');
define('TI_LABEL_PASS','Pass');
define('TI_LABEL_FAIL','Fail');
define('TI_TABLE_TAKE_EXAM_DATE','Take Exam Date');
define('TI_LABEL_DATE','Date');
define('TI_GET_TIME_ZONE','To know your time zone <a href="http://php.net/manual/en/timezones.php" target="_new">click here</a>');
define('TEXTUSINTENTIO_EXAM_LABEL_SUBJECT_QUESTION_WARNING','<strong style="color:#C03C3C">Only Intger Number</strong>');
define('TEXTUSINTENTIO_EXAM_LABEL_SUBJECT_QUESTION','No of question Show');

?>