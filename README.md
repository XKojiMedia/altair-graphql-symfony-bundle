# Altair GraphQL Symfony Bundle
Symfony bundle for loading the [Altair GraphQL Client](https://altair.sirmuel.design/).

![altair-graphql](https://i.imgur.com/h63OBPA.png)

> **Please note**: This is not a GraphQL Server implementation, only a UI for testing and exploring your schema.
## Installation

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

### Applications that use Symfony Flex

Open a command console, enter your project directory and execute:

```console
$ composer require xkojimedia/altair-graphql-symfony-bundle
```

### Applications that don't use Symfony Flex


#### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require xkojimedia/altair-graphql-symfony-bundle
```

#### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    XKojiMedia\Bundle\AltairGraphqlBundle\AltairGraphqlBundle::class => ['all' => true],
];
```

Add the route for the bundle in your `config/routes.yaml` file:
```yaml
altair_graphql:
    resource: '@AltairGraphqlBundle/Resources/config/routes.yaml'
    prefix:   /altair
```

Altair GraphQL Client would be available at `/altair` path in your server.

## Configuration

You can configure the bundle by creating a `config/packages/altair_graphql.yaml` configuration file:

```yaml
altair_graphql:
    endpoint: '/graphql' # GraphQL endpoint used by Altair
```
