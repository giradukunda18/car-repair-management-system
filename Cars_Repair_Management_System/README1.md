## FUNCTIONS
`~~~~~~~~~~``
## Customer
```````````
- customer will signup and login into system
- customer can make request for service of their vehicle by providing details (vehicle number, model, problem description etc.)
- After Request approved by admin, customer can check cost, status of service
- customer can delete request (Enquiry) if customer change their mind or not approved by admin (ONLY PENDING REQUEST CAN BE DELETED )
- customer can check status of Request(Enquiry) that is Pending, Approved, Repairing, Repairing Done, Released
---
## Mechanic
```````````
- mechanic will apply for job by providing details like (skills, address, mobile etc.)
- Admin will hire(approve) mechanic account based on skill
- After account approval, mechanic can login into system
- mechanic can see salary and how many vehicles he/she have repaired so far

---
### Admin
`````````
- First admin will login ( for username/password run following command in cmd )
```
- Give username, email, password and your admin account will be created.
- After login , admin can see how many customer, mechanic, recent service orders on dashboard
- Admin can see/add/update/delete customers
- Admin can see/add/update/delete mechanics
- Admin can approve(hire) mechanics (requested by mechanic) based on their skills
- Admin can see/update/delete request/enquiry for service sent by customer
- Admin can also make request for service (suppose customer directly reached to service center/office)
- Admin can approve request for service made by customer and assign to mechanic for repairing and will provide cost according to problem description
- Admin can see all service cost of request (both approved and pending)

###How to run this project:
```````````````````````````
- Download the zip file
- Extract the file and copy Cars_Repair_Management_System folder
- Paste inside root directory(for xampp xampp/htdocs, for wamp wamp/www, for lamp var/www/html)
- Move to project folder in Terminal. Then run following Commands :
->php artisan serve
- Open PHPMyAdmin (http://localhost/phpmyadmin)
- Create a database with name car_db
- Import car_db.sql file(given inside the zip package in SQL file folder)
- Run the script http:http://127.0.0.1:8000/index
##Authors
`````````
-IRADUKUNDA Gilbert: 18RP01360
-NSHIMIYIMANA Egide: 18RP01048


