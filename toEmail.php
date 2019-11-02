

<?
if(isset($_POST["submit"])){
$name=$_POST['senderName'];
$email=$_POST['senderEmail'];
$message=$_POST['senderMessage'];

$email_subject='New message from portfolio';
$email_body= "You have received a new message from the user $name.\n. Here is the message:\n $message";
$header="Reply-to: $email \r\n";
$myEmail="fatimamuk0@gmail.com";
//using the function mail to send it to my email 
mail($myEmail,$email_subject,$email_body,$header) or die ("Failure");
echo "Your mail has been sent successfuly ! Thank you for your feedback";

}
else {
    echo "nothing happend"
}
?>

<!DOCTYPE html>
<html>
    <h2>hi</h2>
    </html>


