# custom_modules_D8
#Examples of Drupal 8 custom modules.

##Probe Orbit module

######Creates a new module in Drupal 8, adds a custom page while using the routing/controller/response layer. Teaches the dependency injection container to instantiate a custom service. Grabs an existing service from the container and use it in the controller to log a message. Accesses the KeyValueStore service from inside a custom service to make it cacheable. Finally explores an alternative method to pass other services into the controller without needing to use the create function.
