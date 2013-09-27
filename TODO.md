# Handlers

Add ability to set custom handlers for main core features. Examples
include:

* Cms\Authentication
* Cms\Users
* Cms\Groups
* Cms\Session

## Example

Currently to login into the system we have to execute:

    Authentication::Login($username, $password);

If the behaviour of this function wants to be overriden we would
do something like:

    Authentication::SetHandler($my_custom_auth_handler)
    
This handler would inherit from the default handler that could be
stored on:

    Cms\Handlers\Authentication
    
If no handler is explicitly set the default is used.
