<?php
/*
<?xml version="1.0" encoding="UTF-8"?>
<WEBSIFY version="1.0" created="2023-02-23T20:23:02+02:00">
 <Copyright>Copyright (C) 2023->EOT Le Brand REAL IT Solutions</Copyright>
 <Project>The Big Whale Data - DDD - Deep Data Dive</Project>
 <Program>RESThook router v1.0 - Router handler for Webhooks pool and Uniform RESTful API CRUD Operations</Program>
 <Source>https://github.com/websifyGR/RESThook</Source>
 <LicenseUrl>https://websify.gr/license/agpl-3.0.html</LicenseUrl>
 <LicenseName>GNU Affero General Public License v3.0 or later</LicenseName>
 <FileStamp>2023-02-25T01:58:51+02:00</FileStamp>
 <BoilerplateNotice>
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as
    published by the Free Software Foundation, either version 3 of the
    License, or (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.
    You should have received a copy of the GNU Affero General Public License
    along with this program.
	If not, see https://www.gnu.org/licenses/agpl-3.0-standalone.html
  </BoilerplateNotice>
</WEBSIFY>
 */
 

// AUTHENTICATION CHECK : depends on who i'm talking to. See : switch ($RH_You_Are)

/*                                      TOWER VARIABLES                  ! watch the arrows !!!
-----------------------------------------------------------------------------------------------------------------------------------------------------
                                  ____________________________
                                  || |||   |||   |||   |||  ||
                                  ||||  |||   |||   |||   ||||
                                  || |||   |||   |||   |||  ||            
                                  ||                        ||                                                                       */
 $RH_Hello_Anybody_Here = false;  //   Boolean Reality !     \\           ~~~~>>> can't see anybody on this level. Can you ?    
 $RH_You_Are = '';               //    KYG: Know Your Guest   \\          ~~~~>>> oh! here you are
 $RH_Authentication = '';       //     Authentication          \\         ~~~~>>> you stop! show me your identity
 $RH_Go_To = '';               //      Data Tower Selector      \\        ~~~~>>> ok I will route you to a tower
 $RH_diving_board = '';       //       Type of Diving Board      \\       ~~~~>>> and there they will provide you a diving board depending on your type
 $RH_DFD = '';               //        Data Flow Direction        \\      ~~~~>>> Hey! Don't forget, this is a router !
 $RH_Directive = '';        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ \\     ~~~~>>> git that's none of your business
 $RH_Function = '';        // ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ \\    ~~~~>>> ...nore this one
 $RH_Molude = '';         //_________________________________________\\   ~~~~>>> !don't overdo it
 $RH_Job_Type = '';      //___________________________________________\\  ~~~~>>> THE WHALE KNOWS BETTER... within an elephant's script
 /*                         ||+++++++++++++++++++++++++++++++++++++||
                            ||#####################################||
                            ||####### ########## ########## #######||
                            ||#####     ######     ######     #####||
                            ||#####     ######     ######     #####||
                            ||#####     ######     ######     #####||
                            ||####### ########## ########## #######||
                            ||#####################################||
                            ||######    THE WEBSIFY TOWER   #######||
                            ||#####################################||
                            ||#####################################||
                            ||+++++++++++++++++++++++++++++++++++++||
--  -----------------------------------------------------------------------------------------  hey! watch your comment! Here is PHP -----------------
-----------------------------------------------------------------------------------------------------------------------------------------------------
 */

// HELLO : let me check who I'm talking to and how I should route

 /*
      LET me think @bout the correlations of the routes(*)
      .then I will adapt the <script> respectively
      as "the" following $was['initially'] adapted FROM my @thoughts
      overall, routes shouldn't be a riddle
 */

 if ( array_key_exists('RH_postman', $_POST) && isset($_POST['RH_postman']) && isset($_POST['RH_DFD']) ) { 
  $RH_Hello_Anybody_Here = true;
  $RH_You_Are = 'RH_postman';
  $RH_DFD = $_POST['RH_DFD'];
 }
 
// all rest logic here, so we find who you are bla bla...
 
 if ($RH_Hello_Anybody_Here) {
  switch ($RH_You_Are) { // let's select authentication method and get you into a data tower
    case 'RH_postman':
      # we've got a request array
       $RH_Authentication = 'POST';
       $RH_Go_To = 'POSTMAN TOWER';
      break;
    case 'RH_json':
      # JSON Web Token (JWT) Authentication
       $RH_Authentication = 'JWT';
       $RH_Go_To = 'JSON TOWER';
      break;
    case 'RH_analytics':
      # our whale will teach you what you wanna know
       $RH_Authentication = 'ANALYTICS';
       $RH_Go_To = 'ANALYTICS TOWER';
      break;     
    case 'RH_dora':
      # Direct Operation Right Away
       $RH_Authentication = 'DORA';
       $RH_Go_To = 'DORA TOWER';      
      break;
    case 'RH_interact':
      # all about form data
       $RH_Authentication = 'INTERACT';
       $RH_Go_To = 'INTERACT TOWER';       
      break; 
    case 'RH_files':
      # please open the vault
       $RH_Authentication = 'FILES';
       $RH_Go_To = 'FILES TOWER';       
      break;
    case 'RH_email':
      # hehe! traditional guy...
       $RH_Authentication = 'EMAIL';
       $RH_Go_To = 'EMAIL TOWER';       
      break;
    case 'RH_sms':
      # aha! piece of cake
       $RH_Authentication = 'SMS';
       $RH_Go_To = 'SMS TOWER';       
      break;      
    default:
      # can't find who it is
       $RH_Authentication = 'none';
       $RH_Go_To = 'exit the tower';      
    break;                        
  }
 }



 // Authenticate based on $RH_Authentication

 /*  AUTHENTICATION TOWER */

 if ( $RH_Hello_Anybody_Here && $RH_Authentication != 'none' ) {
  switch ($RH_Authentication) {
    case 'POST':
      
      break;
    case 'JWT':
      
      break;
    case 'ANALYTICS':
      
      break;          
  }
  
 }

 
 
 // Provide a Diving Board based on authenticated user type
 
 
 
 
 
 
 
 
 
 
 
 