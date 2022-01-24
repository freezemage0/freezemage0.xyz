# Packages used in a project

## List of packages
- `slim/slim`
- `php-di/php-di`
- `php-di/slim-bridge`
- `doctrine/orm`
- `twig/twig`

## Architecture of project

- `slim/slim` will be used as a router which handles underlying `ServerRequest` object initialization,
`Middleware` chain and `Response` output.
- `php-di/php-di` is a dependency injection container which has native integration with `slim/slim`
so there's no need to manually initialize controllers and services when registering routes; no `Dependency Inversion` headache.
- `doctrine/orm` is an object relation mapper. It's `EntityManager` will be injected into services that work with business entities.
- `twig/twig` is a template engine. There is an integration package for `slim/slim`, but it doesn't actually do anything special,
  so it won't be used in this project.
  
  