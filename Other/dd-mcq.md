exams:
id 		name 		
1 		psc
2 		jsc
3 		ssc
4		admision test
5 		bcs
6 		bank job

years:
id 		year
1 		2010
2 		2011

boards:
id 		name
1 		Barisal
2 		Dhaka
3 		Barisal University
4 		Dhaka University

categories:
id 		name 
1 		goydda
2 		poidda
3 		cotogolpo
4 		author

authors:
id 		name 	dob 	dod 	location 	about 	work_experience 

creations:
id  	name 	category_id  	author_id 	

awards:
id 		name 		about 		image

achivements:
id 	award_id  	creation_id 	date 	location 	description	

classes:
id  	name  	

subjects:
id 		name 	class_id 

topics:
id 		name  	class_id 	author_id 	category_id 

questions:
id 	exam_id  subject_id  topic_id 	question 		is_mcq	exam_count
1	psc	   math	   addition		115 + 200 = ?	true		5

options:
id 	question_id   option  		is_correct
1	1		  Option 1 		false
2	1		  Option 2 		false
3	1		  Option 3 		true
4	1		  Option 4 		false


# question belongs to a subject, topic
# question belongs to a exam
# question has many times to many boards or many exams

board_question:
id  	board_id 	question_id 		year_id	question_position
1 	Barisal 	1 				2019		10
2 	Barisal 	1 				2017		15
3 	Barisal 	1 				2013		17
4 	Barisal 	1 				2009		30
5 	Dhaka 	1 				2019		20

Probablity for a board or special exam:
# All Years:
# last 10 years a 6 bar asche
# Ai bochor a asar probility = 6/10 = 0.6

# Even year
# Last 10 years er modhey even year chilo 5 ti
# Evan year a asche 4 bar
# Ai bochor asar porbality = 4/5 = 0.8

# Odd year
# Last 10 years er modhey odd year chilo 5 ti
# Evan year a asche 2 bar
# Ai bochor asar porbality = 2/5 = 0.4
 

solutions:
id 		question_id 	solution_by 	solution	

students:
id 	class_id  institute_id	name 	 		points					
1	psc		  1		Dipti Moni		19

exam_student:
id 	exam_id 	student_id
1 	psc 		Dipti Moni

quizs:
id  name  			marks 	level
1 	Worm Up test 	20 		1

quiz_results:
id 	exam_id 	quiz_id 	student_id 	marks 
1 	jsc 		1 		Dipti Moni 	19


institutes:
id 	name 				category_id 	upozila_id  established	
1   ABC Gov Pry School 	primary education 	kathalia    1970


# student can register 
# student can log in his/her account
# student can subsccribe (paid) for special feters
# student can update his/her profile info
# student can update his exam level(jsc>ssc>hsc). should pay for this
# student can contributte quiz test
# student can find his level (good/better...)
# student can search job 
# student can browse previous years questions
# student can update his job status
# student can solution a problem and submit his/her solution
# student can earn points by problem solving
# student can claim gifs by his/her points
# student can clamin gifts if he/she earn best score in quize test

# probabliy calculation for questions
# this feature is only for paid students





# Database Design for Receiption
age_types:
1. infnat 1-5
2. Young 5-12
3. 12-

eater_types:
1. Vegetarian 
2. Non Vegetarian
3. Non Vegetagian Without Mutton
4. Non Vegetagian Without Meat
5. Avoiding Rice Items

relations:
id name
1  Neighbor
2  Relative
3  Outside Guest

families:
id care_of total_members
# Has many members


Guests:
id name family_id relation_id age_category_id other_category is_invited is_present is_eaten gifts

# Goals
1. Get Total Guest
2. Get Total Vegiterian
3. Get Non Vegiterian
4. Get Non Vegitegian Without Mutton
5. Get Non Vegitegian Without Meat
6. Total Present
7. Total Eaten
8. Total Without Eaten
9. Total Not Present
10. List by Group for family present, eaten, not eaten



