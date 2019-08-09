# custom_modules_D8
#Examples of Drupal 8 custom modules.

##Probe Orbit module

######Creates a new module in Drupal 8, adds a custom page while using the routing/controller/response layer. Teaches the dependency injection container to instantiate a custom service. Grabs an existing service from the container and use it in the controller to log a message. Accesses the KeyValueStore service from inside a custom service to make it cacheable. Finally explores an alternative method to pass other services into the controller without needing to use the create function.

######Register an event subscriber with a service tag. Provide a list of subscribed events along with callback functions for each.  Log a message in response to the event using a service from the container. Create a custom form, fetch the event dispatch service from the container to trigger an event. Insatiate a custom class that wraps the Event object. Register an event subscriber with custom logic to determine which message appears on the page.

##Space Craft module

######Define a new plugin type, the probe plugin, which includes the following: the base class, an interface, and the plugin manager. Also the annotation definition, a controller for a new page, as well as the probe plugins themselves.
