<?PHP
function c_element($e_name,$parent){
 global $xml;
 $node=$xml->createElement($e_name);
 $parent->appendChild($node);
 return $node;
 }
function c_value($value,$parent){
 global $xml;
 $value = $xml->createTextNode($value);
 $parent->appendChild($value);
 return $value;
 
 }
?>
 
<?PHP
$s_headline = $_POST['headline'];
$s_message = $_POST['message'];
echo $s_headline. '<br>' .$s_name;
$xml =new DOMDocument("1.0");
$xml->load("xmlphp1.xml");
$root=$xml->getElementsByTagName("news")->item(0);
$student=c_element("student",$root);
$id=c_element("headline", $student);
c_value("$s_headline",$headline);
$name = c_element("message", $student);
c_value("$s_message",$message);
//$xml= new DOMDocument("1.0","utf-8");
//$employee = $xml->createElement("employee");
//$employee = $xml->appendChild($employee);
//$empname = $xml->createElement("empname",$name);
//$empname = $employee->appendChild($empname);
//$empemail = $xml->createElement("empemail",$email);
//$price= $employee->appendChild($empemail);
$xml->FormatOutput=true;
//$string_value=$xml->saveXML();
$xml->save("xmlphp1.xml");

header("Location:headline_v2.php");
?>