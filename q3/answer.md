a) The pattern used here is the MVC pattern since a controller is directing/rendering 
 a Twig template (view).

b) The benefit the MVC pattern allows Twig to deal with only the presentation of the application.
It allows the developer to seperate the code. The Model deals with the storing and retrieving data (doctrine), 
the view deals with presentation (Twig), and the controller deals with business logic and the flow of the application.
The benefit to Twig is that it only needs to know how to display the information that is passed to it by the controller.