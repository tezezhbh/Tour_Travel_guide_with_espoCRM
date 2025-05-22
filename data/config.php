<?php
return [
  'useCache' => true,
  'jobMaxPortion' => 15,
  'jobRunInParallel' => false,
  'jobPoolConcurrencyNumber' => 8,
  'daemonMaxProcessNumber' => 5,
  'daemonInterval' => 10,
  'daemonProcessTimeout' => 36000,
  'jobForceUtc' => false,
  'recordsPerPage' => 20,
  'recordsPerPageSmall' => 5,
  'recordsPerPageSelect' => 10,
  'recordsPerPageKanban' => 5,
  'applicationName' => 'EspoCRM',
  'version' => '9.1.2',
  'timeZone' => 'Africa/Addis_Ababa',
  'dateFormat' => 'DD.MM.YYYY',
  'timeFormat' => 'HH:mm',
  'weekStart' => 0,
  'thousandSeparator' => ',',
  'decimalMark' => '.',
  'exportDelimiter' => ',',
  'currencyList' => [
    0 => 'USD'
  ],
  'defaultCurrency' => 'USD',
  'baseCurrency' => 'USD',
  'currencyRates' => [],
  'currencyNoJoinMode' => false,
  'outboundEmailIsShared' => true,
  'outboundEmailFromName' => 'EspoCRM',
  'outboundEmailFromAddress' => NULL,
  'smtpServer' => NULL,
  'smtpPort' => 587,
  'smtpAuth' => true,
  'smtpSecurity' => 'TLS',
  'smtpUsername' => NULL,
  'language' => 'en_US',
  'authenticationMethod' => 'Espo',
  'tabQuickSearch' => true,
  'globalSearchEntityList' => [
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity'
  ],
  'tabList' => [
    0 => 'Contact',
    1 => 'User',
    2 => 'CBooking',
    3 => 'CDestination',
    4 => 'CTravelAgent',
    5 => 'CTourPackage',
    6 => 'CTourInquiry',
    7 => 'CTourGuide'
  ],
  'quickCreateList' => [
    0 => 'Account',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Opportunity',
    4 => 'Meeting',
    5 => 'Call',
    6 => 'Task',
    7 => 'Case',
    8 => 'Email'
  ],
  'exportDisabled' => true,
  'adminNotifications' => true,
  'adminNotificationsNewVersion' => true,
  'adminNotificationsCronIsNotConfigured' => true,
  'adminNotificationsNewExtensionVersion' => true,
  'assignmentEmailNotifications' => false,
  'assignmentEmailNotificationsEntityList' => [
    0 => 'Lead',
    1 => 'Opportunity',
    2 => 'Task',
    3 => 'Case'
  ],
  'assignmentNotificationsEntityList' => [
    0 => 'Call',
    1 => 'Email'
  ],
  'portalStreamEmailNotifications' => true,
  'streamEmailNotificationsEntityList' => [
    0 => 'Case'
  ],
  'streamEmailNotificationsTypeList' => [
    0 => 'Post',
    1 => 'Status',
    2 => 'EmailReceived'
  ],
  'emailNotificationsDelay' => 30,
  'emailMessageMaxSize' => 10,
  'emailRecipientAddressMaxCount' => 100,
  'notificationsCheckInterval' => 10,
  'popupNotificationsCheckInterval' => 15,
  'maxEmailAccountCount' => 2,
  'followCreatedEntities' => false,
  'b2cMode' => false,
  'theme' => 'Espo',
  'themeParams' => (object) [
    'navbar' => 'side'
  ],
  'massEmailMaxPerHourCount' => 100,
  'massEmailMaxPerBatchCount' => NULL,
  'massEmailVerp' => false,
  'personalEmailMaxPortionSize' => 50,
  'inboundEmailMaxPortionSize' => 50,
  'emailAddressLookupEntityTypeList' => [
    0 => 'User'
  ],
  'emailAddressSelectEntityTypeList' => [
    0 => 'User',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Account'
  ],
  'emailAddressEntityLookupDefaultOrder' => [
    0 => 'User',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Account'
  ],
  'phoneNumberEntityLookupDefaultOrder' => [
    0 => 'User',
    1 => 'Contact',
    2 => 'Lead',
    3 => 'Account'
  ],
  'authTokenLifetime' => 0,
  'authTokenMaxIdleTime' => 48,
  'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
  'addressFormat' => 1,
  'displayListViewRecordCount' => true,
  'dashboardLayout' => [
    0 => (object) [
      'name' => 'My Espo',
      'layout' => [
        0 => (object) [
          'id' => 'default-stream',
          'name' => 'Stream',
          'x' => 0,
          'y' => 0,
          'width' => 2,
          'height' => 4
        ],
        1 => (object) [
          'id' => 'default-activities',
          'name' => 'Activities',
          'x' => 2,
          'y' => 2,
          'width' => 2,
          'height' => 4
        ]
      ]
    ]
  ],
  'calendarEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Task'
  ],
  'activitiesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'historyEntityList' => [
    0 => 'Meeting',
    1 => 'Call',
    2 => 'Email'
  ],
  'busyRangesEntityList' => [
    0 => 'Meeting',
    1 => 'Call'
  ],
  'emailAutoReplySuppressPeriod' => '2 hours',
  'emailAutoReplyLimit' => 5,
  'cleanupJobPeriod' => '1 month',
  'cleanupActionHistoryPeriod' => '15 days',
  'cleanupAuthTokenPeriod' => '1 month',
  'cleanupSubscribers' => true,
  'cleanupAudit' => true,
  'cleanupAuditPeriod' => '3 months',
  'appLogAdminAllowed' => false,
  'currencyFormat' => 2,
  'currencyDecimalPlaces' => 2,
  'aclAllowDeleteCreated' => false,
  'aclAllowDeleteCreatedThresholdPeriod' => '24 hours',
  'attachmentAvailableStorageList' => NULL,
  'attachmentUploadMaxSize' => 256,
  'attachmentUploadChunkSize' => 4,
  'inlineAttachmentUploadMaxSize' => 20,
  'textFilterUseContainsForVarchar' => false,
  'tabColorsDisabled' => false,
  'massPrintPdfMaxCount' => 50,
  'emailKeepParentTeamsEntityList' => [
    0 => 'Case'
  ],
  'streamEmailWithContentEntityTypeList' => [
    0 => 'Case'
  ],
  'recordListMaxSizeLimit' => 200,
  'noteDeleteThresholdPeriod' => '1 month',
  'noteEditThresholdPeriod' => '7 days',
  'notePinnedMaxCount' => 5,
  'emailForceUseExternalClient' => false,
  'useWebSocket' => true,
  'auth2FAMethodList' => [
    0 => 'Totp'
  ],
  'auth2FAInPortal' => false,
  'personNameFormat' => 'firstLast',
  'newNotificationCountInTitle' => false,
  'pdfEngine' => 'Dompdf',
  'smsProvider' => NULL,
  'mapProvider' => 'Google',
  'defaultFileStorage' => 'EspoUploadDir',
  'ldapUserNameAttribute' => 'sAMAccountName',
  'ldapUserFirstNameAttribute' => 'givenName',
  'ldapUserLastNameAttribute' => 'sn',
  'ldapUserTitleAttribute' => 'title',
  'ldapUserEmailAddressAttribute' => 'mail',
  'ldapUserPhoneNumberAttribute' => 'telephoneNumber',
  'ldapUserObjectClass' => 'person',
  'ldapPortalUserLdapAuth' => false,
  'passwordGenerateLength' => 10,
  'passwordStrengthLength' => NULL,
  'passwordStrengthLetterCount' => NULL,
  'passwordStrengthNumberCount' => NULL,
  'passwordStrengthBothCases' => false,
  'passwordStrengthSpecialCharacterCount' => NULL,
  'massActionIdleCountThreshold' => 100,
  'exportIdleCountThreshold' => 1000,
  'oidcJwtSignatureAlgorithmList' => [
    0 => 'RS256'
  ],
  'oidcUsernameClaim' => 'sub',
  'oidcFallback' => true,
  'oidcScopes' => [
    0 => 'profile',
    1 => 'email',
    2 => 'phone'
  ],
  'oidcAuthorizationPrompt' => 'consent',
  'listViewSettingsDisabled' => false,
  'cleanupDeletedRecords' => true,
  'phoneNumberNumericSearch' => true,
  'phoneNumberInternational' => true,
  'phoneNumberExtensions' => false,
  'phoneNumberPreferredCountryList' => [
    0 => 'us',
    1 => 'de'
  ],
  'wysiwygCodeEditorDisabled' => false,
  'customPrefixDisabled' => false,
  'listPagination' => true,
  'starsLimit' => 500,
  'quickSearchFullTextAppendWildcard' => false,
  'authIpAddressCheck' => false,
  'authIpAddressWhitelist' => [],
  'authIpAddressCheckExcludedUsersIds' => [],
  'authIpAddressCheckExcludedUsersNames' => (object) [],
  'availableReactions' => [
    0 => 'Like'
  ],
  'streamReactionsCheckMaxSize' => 50,
  'emailScheduledBatchCount' => 50,
  'emailAddressMaxCount' => 10,
  'phoneNumberMaxCount' => 10,
  'iframeSandboxExcludeDomainList' => [
    0 => 'youtube.com',
    1 => 'google.com'
  ],
  'cacheTimestamp' => 1747935514,
  'microtime' => 1747935514.806941,
  'siteUrl' => 'http://localhost/EspoCRM-9.1.2',
  'fullTextSearchMinLength' => 4,
  'appTimestamp' => 1747507053,
  'userThemesDisabled' => false,
  'avatarsDisabled' => false,
  'scopeColorsDisabled' => false,
  'tabIconsDisabled' => false,
  'dashletsOptions' => (object) [],
  'maintenanceMode' => false,
  'cronDisabled' => false,
  'fiscalYearShift' => 0,
  'addressCityList' => [],
  'addressStateList' => [],
  'emailAddressIsOptedOutByDefault' => false,
  'workingTimeCalendarName' => NULL,
  'workingTimeCalendarId' => NULL
];
