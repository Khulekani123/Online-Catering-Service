<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content = "with=device-width, initial-scale=1.0">
        <title> Online Catering Service </title>
        <link rel="stylesheet" href="booking.css">
    </head>
    <body>
        <div class="container">
            <div class="container-time">
                <h2 class = "heading">Time Open For Bookings</h2>
                <h3 class = "heading-days">All day Everyday!!</h3>
                <h3 class = "heading-days">Office hours for Visits!</h3>
                <p> Monday - Friday: 9am - 8pm</p>
            
                <h3 class = "heading-days">Office hours for Visits on Weekends!</h3>
                <p> Saturday: 9am - 12pm</p>
                <h3 class = "heading-days">Sundays Senza Umlando! Danko!</h3>

                <p> We pride ourselves on creating unique menus
                    to accommodate every special event in South Africa. From casual in-home
                    brunches and office lunches to elegant weddings and various events.

                    Pundrulu Catering is a subsidiary of Dream Foods Inc</p>

                <hr>

                <h4 class = "heading-phone">Call Us: 060 452 2919</h4>
            </div>

            <div class="container-form">
                <form action = "bookingBackend.php" method = "POST" id = "booking"  class= "input-group">
                <h2 class = "heading-booking">BOOKING ONLINE</h2>

                <div class="form-fields">
                    <p>Number of guests ?</p>
                    <input type = "number" name = "num_Guests" placeholder = "number of guests" required> 
                </div>
                <div class="form-fields">
                    <p>Your budget ?</p>
                    <input type = "text" name = "budget" placeholder = "R0.00" required> 
                </div>
                <div class="form-fields">
                    <p>Event Address ?</p>
                    <input type = "text" name = "event_address" placeholder = "Address" required> 
                </div>
                <div class="form-fields">
                    <p>Event Date ?</p>
                    <input type = "date" name = "event_Date" placeholder = "dd/mm/yyyy" required> 
                </div>
                <div class="form-fields">
                    <p>Start time of event ?</p>
                    <input type = "time" name = "s_event" placeholder = "hh:hh" required> 
                </div>
                <div class="form-fields">
                    <p>Ending time of the event ?</p>
                    <input type = "time" name = "f_event" placeholder = "hh:hh" required> 
                </div>
                <div class="form-fields">
                    <p>Type of event ?</p>
                    <select id = "service" name = "event">
                            <option value = ""> Choose </option>
                            <option value = "wedding"> Wedding </option>
                            <option value = "graduation party"> Graduation Party </option>
                            <option value = "birthday party"> Birthday Party</option>
                            <option value = "annivesary"> Annivesary </option>
                            <option value = "meetings"> Meetings </option>
                            <option value = "funeral"> Funeral </option>
                            <option value = "church service"> Church Service </option>
                            <option value = "business function"> Business Function </option>
                            <option value = "traditional ceremony"> Traditional Ceremony </option>
                        </select> 
                </div>
                <div class="form-fields">
                    <p>Any other details ?</p>
                    <input type = "text" name = "description" placeholder = "..."> 
                </div>
                
                <input type= "submit" name = "book" class= "book-btn" value = "Book!"> 
                 
                </form>
            </div>
        </div>
    </body>
</html>