# PITFLOW

*Project, invoicing and time-tracking app.*

---

## User Stories

- As a business owner I want to keep track of clients and contacts so that I can always communicate with them when needed

- As a project manager I need to create projects and tasks so that I can setup some work to be done

- As a business owner I want to send invoices clients with any completed projects so that I can get paid

- As a business owner I want to set up projects

- As a developer I want to be able to see what tasks I need

- As a developer I want to be able to assign myself to tasks

- As a developer I want to track my time against tasks

- As a business owner and project manager I want to be able to see time spent on each task and project

- As a business owner I want to be able to track and compare of project estimate/price and actual time/cost to see amount of profit.

- As a business owner I want to be able to easily see projects that are/have been non-profitable

## Domain Mapping

### Entities
- User
    - User Type
    - Name
    - Email
    - Password
- User Type
- Project
    - Title
    - Description
    - Client
    - Tasks
    - Time Estimate
    - Cost Estimate
    - Actual Time
    - Actual Cost
- Task
    - Title
    - Description
    - Assigned User
    - Time
    - Cost
- Client
    - Name
    - Address
    - Telephone
    - Account Contact
    - All Contacts
- Contact
    - First Name
    - Last Name
    - Job Title
    - Email
    - Telephone
    - Client
- Quote
    - ID/Number
    - Project
    - Client
    - Contact
    - Date/Time
- Invoice
    - ID/Number
    - Project
    - Client
    - Contact
    - Date/Time

---

# Tasks

Auth
- Create Account
- Logging in as Admin

CRM
- Create Clients
- Edit Clients
- Delete Clients
- Create Contacts
- Edit Contacts
- Delete Contacts

Projects
- Create Projects
- Edit Projects
- Delete Projects
- Create Tasks
- Edit Tasks
- Delete Tasks

Invoice
- Create Invoice
- Send Invoice
- Process Payment