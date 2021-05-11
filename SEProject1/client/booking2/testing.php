<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once('Person.php');


final class Testing extends TestCase
{
    public function testSuccess(): void
    {
        $user = new Person();
        $username='kweks';
        $password='french1';
        $patientID =7;
        $mess = "Hi";
        $pass=md5(sha1("rose"));

        $sql = "SELECT * FROM customer WHERE username  = '$username'";
        $query = "INSERT INTO Doctor(DocFname,DocLname,Department,Dpassword,Docuser,Docnum) VALUES ('Rose', 'Bear', 'Surgery', '$pass', 'RBear,'0240000000')";
        $q1 = "UPDATE track_order SET Progress='Processed' WHERE TID=4";
        $q2 = "UPDATE track_order SET Progress='Accepted' WHERE TID=4";
        // $sql1 = "SELECT EmployeeFname FROM Employee WHERE EmployeeID = '$username'";
        // $result="INSERT INTO Customer (CustomerFName, CustomerLName, CustomerGender, CustomerTelephone, CustomerAddress, Status, Diagnosis, LastCheckupDate) VALUES ('Rachel', 'Asamoah', 'female', '0246055185', 'Teshie', 'Healthy', 'Head','2020-11-24')";
        // $department="SELECT DepartmentName from department";

        // Checks if login is true
        $this->assertTrue($user->check_login($username,$password));

        //check if booking works
        $this->assertTrue($user->book_appoint($patientID));
        
        //checks if the sql was implemented succesfuuly
        $this->assertTrue($user->getsql($sql));
 
        //returns the first name of the user
        $this->assertIsString($user->getname($sql));

        //checks if the chatbot can respond to the user's messages
        $this->assertIsString($user->check_chatbot($mess));



        // insert new doctor
        $this->assertTrue($user->newdoc($query));

        // process drug by pharmacy
        $this->assertTrue($user->newpro($q1));

        // accept delivery by delivery
        $this->assertTrue($user->newdel($q2));


        // screeening

        // add to cart


    }
   }
?>

