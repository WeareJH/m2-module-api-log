# Jh\ApiLog Module

## Overview
This module provides the ability to log raw Web API & GraphQL request data including: 

- URL
- IP
- HTTP Method
- Server name
- Referrer
- Payload
- Some important headers

## Installation
This module is installable via `Composer`.

### Add repository

```
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:WeareJH/m2-module-api-log.git"
    }
]
```

### Require module

```
$ cd project-root
$ composer require "wearejh/m2-module-api-log:dev-master"
```

Or substitute dev-master with an appropriate tag.

### Enable Rest logging:

Stores -> Configuration -> Services -> Magento Web API -> Debug -> Log all Web API requests

### Enable GQL logging:

Stores -> Configuration -> Services -> Magento GraphQL -> Debug -> Log all GraphQL requests
