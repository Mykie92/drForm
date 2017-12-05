<?php


//LOAD the post data into PHP variables

//page 1
$patient1 = $_POST['patient1'];
$birthdate = $_POST['birthdate'];
$name = $_POST['name'];
$social = $_POST['social'];
$number = $_POST['number'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$birthdate2 = $_POST['birthdate2'];
$employer = $_POST['employer'];
$busPhone = $_POST['busPhone'];
$relationToPatient = $_POST['relationToPatient'];
$emergencyName = $_POST['emergencyName'];
$emergencyPhone = $_POST['emergencyPhone'];
$signature = $_POST['signature'];
$signDate = $_POST['signDate'];

//Page 2
$patient2 = $_POST['patient2'];
$gender = $_POST['gender'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$yn1 = $_POST['yn1'];
$ynQ1 = $_POST['ynQ1'];
$yn2 = $_POST['yn2'];
$ynQ2 = $_POST['ynQ2'];
$yn3 = $_POST['yn3'];
$ynQ3 = $_POST['ynQ3'];
$yn4 = $_POST['yn4'];
$ynQ4 = $_POST['ynQ4'];
$yn5 = $_POST['yn5'];
$ynQ5 = $_POST['ynQ5'];
$heartProblem = $_POST['heartProblem'];
$stroke = $_POST['stroke'];
$asthma = $_POST['asthma'];
$diabetes = $_POST['diabetes'];
$psychiatric = $_POST['psychiatric'];
$bleeding = $_POST['bleeding'];
$kidney = $_POST['kidney'];
$anemia = $_POST['anemia'];
$aids = $_POST['aids'];
$emphysema = $_POST['emphysema'];
$bloodPressure = $_POST['bloodPressure'];
$rheumatic = $_POST['rheumatic'];
$venereal = $_POST['venereal'];
$cancer = $_POST['cancer'];
$ulcers = $_POST['ulcers'];
$hepatitis = $_POST['hepatitis'];
$addiction = $_POST['addiction'];
$murmur = $_POST['murmur'];
$liverDisease = $_POST['liverDisease'];
$glaucoma = $_POST['glaucoma'];
$smoker = $_POST['smoker'];
$tuberculosis = $_POST['tuberculosis'];
$fainting = $_POST['fainting'];
$epilepsy = $_POST['epilepsy'];
$thyroid = $_POST['thyroid'];
$arthritis = $_POST['arthritis'];
$chestPain = $_POST['chestPain'];
$fenPhen = $_POST['fenPhen'];
$echocardiogram = $_POST['echocardiogram'];
$hiv = $_POST['hiv'];
$fibromyalgia = $_POST['fibromyalgia'];
$anxiety = $_POST['anxiety'];
$depression = $_POST['depression'];
$bipolar = $_POST['bipolar'];
$aad = $_POST['aad'];
$autism = $_POST['autism'];
$yn6 = $_POST['yn6'];
$ynQ6 = $_POST['ynQ6'];
$yn7 = $_POST['yn7'];
$yn8 = $_POST['yn8'];
$yn9 = $_POST['yn9'];
$yn10 = $_POST['yn10'];
$yn11 = $_POST['yn11'];
$yn12 = $_POST['yn12'];
$preg = $_POST['preg'];
$nursing = $_POST['nursing'];
$signature2 = $_POST['signature2'];
$dateSign2 = $_POST['dateSign2'];
$signature3 = $_POST['signature3'];
$dateSign3 = $_POST['dateSign3'];
$signature4 = $_POST['signature4'];
$dateSign4 = $_POST['dateSign4'];
$signature5 = $_POST['signature5'];
$dateSign5 = $_POST['dateSign5'];




//BUILD THE DATABASE CONNECTION WITH host, user, pass, database
require_once('vars.php');
$dbconnection = mysqli_connect('localhost', 'mikecowl_3760usr', 'Iam7dogsinaCar', 'mikecowl_drgutzman') or die ('connection failed');


//BUILD THE QUERY
$query = "
INSERT INTO `mikecowl_drgutzman`.`patients` (patient1, birthdate, name, social, number, address, city, state, zip, phone, birthdate2, employer, busPhone, relationToPatient, emergencyName, emergencyPhone, signature, signDate, patient2, gender, weight, height, yn1, ynQ1, yn2, ynQ2, yn3, ynQ3, yn4, ynQ4, yn5, ynQ5, heartProblem, stroke, asthma, diabetes, psychiatric, bleeding, kidney, anemia, aids, emphysema, bloodPressure, rheumatic, venereal, cancer, ulcers, hepatitis, addiction, murmur, liverDisease, glaucoma, smoker, tuberculosis, fainting, epilepsy, thyroid, arthritis, chestPain, fenPhen, echocardiogram, hiv, fibromyalgia, anxiety, depression, bipolar, aad, autism, yn6, ynQ6, yn7, yn8, yn9, yn10, yn11, yn12, preg, nursing, signature2, dateSign2, signature3, dateSign3, signature4, dateSign4, signature5, dateSign5) 


VALUES ('$patient1', '$birthdate', '$name', '$social', '$number', '$address', '$city', '$state', '$zip', '$phone', '$birthdate2', '$employer', '$busPhone', '$relationToPatient', '$emergencyName', '$emergencyPhone', '$signature', '$signDate', '$patient2', '$gender', '$weight', '$height', '$yn1', '$ynQ1', '$yn2', '$ynQ2', '$yn3', '$ynQ3', '$yn4', '$ynQ4', '$yn5', '$ynQ5', '$heartProblem', '$stroke', '$asthma', '$diabetes', '$psychiatric', '$bleeding', '$kidney', '$anemia', '$aids', '$emphysema', '$bloodPressure', '$rheumatic', '$venereal', '$cancer', '$ulcers', '$hepatitis', '$addiction', '$murmur', '$liverDisease', '$glaucoma', '$smoker', '$tuberculosis', '$fainting', '$epilepsy', '$thyroid', '$arthritis', '$chestPain', '$fenPhen', '$echocardiogram', '$hiv', '$fibromyalgia', '$anxiety', '$depression', '$bipolar', '$aad', '$autism', '$yn6', '$ynQ6', '$yn7', '$yn8', '$yn9', '$yn10', '$yn11', '$yn12', '$preg', '$nursing', '$signature2', '$dateSign2', '$signature3', '$dateSign3', '$signature4', '$dateSign4', '$signature5', '$dateSign5')";


//NOW TRY AND TALK TO THE DATABASE
$result = mysqli_query($dbconnection, $query) or die ('query failed');



//Close connection
mysqli_close($dbconnection);

//header('Location:index.php');

echo "<div style='margin: auto; width: 500px; text-align: center; font-size: 24px;'>";
echo "<p>Thank you!</p>";
echo "<p>Your information has been submitted. We'll contact you shortly.</p>";
echo "<a href='index.html'>Return Home</a>";
echo "</div>"

?>