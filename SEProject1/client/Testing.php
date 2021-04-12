<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once('Person.php');



final class Testing extends TestCase
{

    public function testSuccess(): void
    {
        $user = new Person();
        $username=107;
        $password='Admin107';
        $patientID =7;

        // $sql = "SELECT * FROM customer WHERE username  = $username";
        // $sql1 = "SELECT Egit mployeeFname FROM Employee WHERE EmployeeID = '$username'";
        // $result="INSERT INTO Customer ( CustomerFName, CustomerLName, CustomerGender, CustomerTelephone, CustomerAddress, Status, Diagnosis, LastCheckupDate) VALUES ('Rachel', 'Asamoah', 'female', '0246055185', 'Teshie', 'Healthy', 'Head','2020-11-24')";
        // $department="SELECT DepartmentName from department";

        // Checks if login is true
        $this->assertTrue($user->check_login($username,$password));

        //check if booking works
        $this->assertTrue($user->book_appoint($patientID));
        
    //     //checks if the sql was implemented succesfuuly
    //     $this->assertTrue($user->getsql($sql));
    //     // returns the first name of the user
    //     $this->assertIsString($user->getname($sqls));
    //     // checks if the return statement contains the word successful
    //     $this->assertStringContainsString('succesful',$user->addcustomer($result));
    //     // checks if department 4 is in the array
    //     $this->assertContains(4,[1,2,3,4]);
    //     // checks if the return statement is a string
    //     $this->assertContainsOnly("string",[$user->checkd($department)]);
    // }
}


