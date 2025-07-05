# Overview

HookManager is a hooks management SDK for [F4](https://github.com/f4php/f4), a lightweigh web development framework.

It is primarily used by F4 for collecting performance information to be displayed in debug mode.

# Example Usage

HookManager uses a very simple API to register and invoke app-wide event handlers:

```php
// First, you register hook handler for an arbitrary hook name
HookManager::addHook('hook name', function ($context) {
    // do something
});

// ...

// Then you invoke it somewhere else in the code:
HookManager::triggerHook('hook name', ['context' => null]);
```