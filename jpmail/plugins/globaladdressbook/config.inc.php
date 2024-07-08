<?php

/**
 * GlobalAddressbook configuration file
 */

$config = [];

// Define a global address book per IMAP host
$config['globaladdressbooks']['global'] = [
    // The name of the address book displayed to the user
    'name' => 'Shared Contacts',

    // The name of the dummy user which holds the global address book, using the %h macro to distinguish by IMAP host
    'user' => '_global_addressbook_user_',

    // Default user permissions
    // 0 - global address book is read only
    // 1 - users can add, edit, and delete contacts (full permissions)
    // 2 - users can add but not edit or delete contacts
    // 3 - users can add and edit but not delete contacts
    'perms' => 1,

    // Always copy contacts from the global address book to another address book, never move
    'force_copy' => true,

    // Allow groups in the global address book
    'groups' => true,

    // Global address book admin user
    // Admin user(s) can always add/edit/delete entries, overrides read-only
    // Either a single username, or an array of usernames, see README for more info
    'admin' => null,

    // Show addresses from the global address book in the autocomplete menu when composing an email
    'autocomplete' => true,

    // Check the global address book for known senders when displaying remote inline images
    'check_safe' => true,

    // Address book visibility
    // null for visible to all or an array of usernames, see README for more info
    'visibility' => null,
];

// Activate GlobalAddressbook for selected mail hosts only. If this is not set, all mail hosts are allowed.
$config['globaladdressbook_allowed_hosts'] = null;
