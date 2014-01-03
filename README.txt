This Repository has The "Database Management Application for Hospital Management System". Database is capable of maintaining a
patient’s record, doctor’s record, record of other staff members and medical report and final payment for each patient.

Technologies used: PHP and MySQL.


Follow these steps to use the application:

1. 	Please run the file named “create_db.php” in your localhost to create the
	database tables.
	By doing this an admin “Username” and “Password” will be inserted in the	
	database.

	Admin USERNAME: IT-1
	PASSWORD: IT-1
	Now use index.php file to login.
	If an error occurs that “Multiple logins not allowed” then run error.php and
	try again.

2. 	Now you will see the Account Details of Admin.

3. 	Following options are available in the interface:
	Home:
		o My account: To view the account details of the user who has logged in.
		o Logout: To logout from the current user.
	Patients:
		o View Details: To search patient details using Name or Patient ID and an advanced search option can also be used to search via Age,Blood Group, Gender or Accompanies’ Name.
		o Accompanies: To search Accompanying person of a patient using Patient Name or Patient ID.
		o Modify Details: To modify Patient Details using Patient ID.
		o Delete Details: To delete Patient Details using Patient ID.
		o Add new Details: To Add Details of a new Patient. Patient ID will be automatically generated starting from “P”.
		o Add Accompanies: To Add Details of Accompanying Person of a Patient.
		o Allot Doctor to a Patient: To Assign Doctor to a Patient entering Patient ID, Doctor ID and Date.
	Employee:
		o Doctors: To view details of all the Doctors in the Hospital.
		o Medical Staff: To view details of entire Medical Staff of the Hospital.
		o Administration: To view details of Administrative Staff of the Hospital.
		o Modify Details: To modify Employee Details using Employee ID.
		o Delete Details: To modify Employee Details using Employee ID.
		Add New Details: To Add Details of new Employee.Department-wise new Employee IDs will be generated.
	Medical Report (Billing):
		o Create Report: Create a new Medical Report of Patient of a particular Department. New Report ID will be generated starting from “R”.
		o View Report: To search Report using Report ID.
		o Modify Report: To Modify existing Report using Report ID.
		o Add Closing Date: To Add Closing date of a Report using Report ID.
		o Delete Report: To delete an existing Report using Report ID or Patient Name.
	Diagnosis:
		o View Tests: To view Tests done on a particular Report using Report ID.
		o Add Tests: To Add a new Test to an existing Report.
		o Add Result: To Add Result to an existing Test.
		o Delete Test: To delete a Test under particular Report using Report ID.
	Departments:
		o View Departments: To view Details of all existing Departments.
		o Add Department: To Add a new Department Details.
		o Modify Department: To modify Department Details using Department No.
		o Delete Department: To Delete a Department using Department No.
	Vehicle Details:
		o Search a Vehicle: To search a Vehicle using Type or Registration No.
		o Add a Vehicle: To Add details of a new Vehicle. Vehicle Number will be generated starting from “V”.
		o Discard a Vehicle: To discard a vehicle using Vehicle Registration No.
		o Allot a vehicle: To allot a Vehicle to a Patient.
		o Allotment Details: To view Allotment Details of a Vehicle using Registration No. or Type.o Un-allot a Vehicle: To un-allot a Vehicle from a patient using Registration No.
	Room Details:
		o Search Room: To search details of room using Type or Room ID.
		o Add Room: To add a new Room to Database. Room ID will be generated starting from “Z”.			
		o Discard Room: To Discard a room from Database using Room No. or Type.
		o Allot a Room: To Allot a room to particular Patient.
		o Allotment Details: To view Allotment Details of rooms using Type or Room ID.
		o Allot Medical Staff Duties: To Allot duties to medical staff for a particular Room.
		o View Medical Staff Duties: To view details Medical Staff Duties using Room no.
		o Un-allot a Room: To un-allot a room using Room ID.
