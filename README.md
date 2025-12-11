# Overview

HookManager is an internal hooks core package for [F4](https://github.com/f4php/f4), a lightweight web development framework.

It is primarily used by F4 for collecting performance information to be displayed in debug mode.

# Example Usage

HookManager uses a very simple API to register and invoke app-wide event handlers:

```php
/*
 * The first step is to register a hook handler for an arbitrary hook name.
 * 
 * HookManager includes a set of hook names defined as constants looking like this:
 * 
 *  HookManager::BEFORE_*
 *  HookManager::AFTER_*
 * 
 * which are used by F4 internally.
 */
HookManager::addHook('hook name', function (array $context): bool {
    // do something useful
    return true;
});

// ...

/*
 * Once registered, hooks may be invoked (triggered) anywhere in the code.
 * 
 * This call will always return an array containing return values
 * from all registered handlers. If no handlers were registered, it will return an empty array.
 */
HookManager::triggerHook('hook name', ['context' => null]); // returns: [ 0 => true ]
```