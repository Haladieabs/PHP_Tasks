<?php
// PHP program to assign grades to a student
// using nested if-else

// Store marks of all the subjects in an array
$marks = array(60,86,95,63,100,74,79,62,100);

// Max marks will be 100 * number of subjects
$max_marks = sizeof($marks) * 100;

// Initialize student's total marks to 0
$total = 0;

// Initialize student's grade marks to F
$grade = 'F';

// Traverse though the marks array to find the sum.
for ($i = 0; $i < sizeof($marks); $i++)
{
	$total += $marks[$i];
}

// Calculate the percentage.
// Since all the marks are integer,
// typecast the calculation to double.
$percentage = (($total) / $max_marks) * 100;

// Nested if else
if ($percentage >= 90)
{
	$grade = 'A';
}
else
{
	if ($percentage >= 80 && $percentage <= 89)
	{
		$grade = 'B';
	}
	else
	{
		if ($percentage >= 60 && $percentage <= 79)
		{
			$grade = 'C';
		}
		else
		{
			if ($percentage >= 33 && $percentage <= 59)
			{
				$grade = 'D';
			}
			else
			{
				$grade = 'F';
			}
		}
	}
}

echo $grade . "\n";


?>
