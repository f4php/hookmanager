# Overview

HookManager is a hooks management SDK for [F4](https://github.com/f4php/f4), a lightweight web development framework.

It is primarily used by F4 for collecting performance information to be displayed in debug mode.

# Example Usage

HookManager uses a very simple API to register and invoke app-wide event handlers:

```php
/*
 * The first step is to register a hook handler for an arbitrary hook name.
 * 
 * HookManager includes a set of hook names defined as constants looking like
 * HookManager::BEFORE_* and HookManager::AFTER_*, which are used by F4 internally.
 */
HookManager::addHook('hook name', function (array $context): bool {
    // do something useful
    return true;
});

// ...

/*
 * Once registered, hooks may be invoked (triggered) anywhere in the code.
 * 
 * This call will return an array composed of return values
 * produced by all registered handlers if present, or an empty
 * array otherwise.
 */
HookManager::triggerHook('hook name', ['context' => null]); // returns: [ 0 => true ]
```