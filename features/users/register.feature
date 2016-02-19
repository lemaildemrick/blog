Feature: Create an account on application blog KNP

  Scenario: Successfully resister on application
   Given I am on "/create-account"
   When I fill in "Username" with "behat"
   And I fill in "Firstname" with "firstname"
   And I fill in "Lastname" with "lastname"  
   And I fill in "Your password" with "test"
   And I fill in "Repeat your password" with "test"
   And I press "Validate"
   Then I should see "Votre compte a été créé"

