<?php
$students = array('Santo','Robin','Kamruzzaman','Kawsar');
$student_mark = array(87,70,60,87, 'Fail');

$a = array(1,2,3,array(10,20,30));


$student = array('name'=>'Santo Bhuiyan','roll'=>10,'class'=>'Nine');


$data = array('class6'=> array(
                                array(
                                   'name'=>'rakib','roll'=>2
	                            ),
	                            array(
                                  'name'=>'Rony','roll'=>1
	                            )
	                            

	                          )
             );

echo'<pre>'; print_r($data['class6'][0]['name']);

?>