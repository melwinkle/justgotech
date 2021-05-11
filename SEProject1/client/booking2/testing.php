<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once('Person.php');


final class Testing extends TestCase
{
    public function testSuccess(): void
    {
        $user = new Person();
        $username= 'kweks';
        $password='french1';
        $patientID =3;
        $mess = "help";
        $pass="kweks";

        $user2 = "melzy";
        $sql = "SELECT * FROM customer WHERE username  = '$user2'";
        $query = "INSERT INTO Doctor(DocFname,DocLname,Department,Dpassword,Docuser,Docnum) VALUES ('Rose', 'Bear', 'Surgery', '$pass', 'RBear,'0240000000')";
        $q1 = "UPDATE track_order SET Progress='Processed' WHERE TID=4";
        $q2 = "UPDATE track_order SET Progress='Accepted' WHERE TID=4";
        $q3="INSERT INTO diseases(age_bracket,symptom,testing,disease_id,PatientID,Region,precon,ConID,Time,Status,Person) VALUES ('Between 18-55','None of the above','Not tested','SARS-COV2', 3, 'Greater Accra Region', 'None of the above', 5, '2021-04-11 10:00:00','Not exposed','Self')";
        $q4="INSERT INTO temp_cart(PHD,PatientID,Date,Item_quantity) VALUES(1,3,'2021-05-11',2)";
      

        // Checks if login is true
        $this->assertFalse($user->check_login($username,$pass));

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
        $this->assertTrue($user->screen($q3));

        // add to cart
        $this->assertTrue($user->cart($q4));


    }
   }
?>

