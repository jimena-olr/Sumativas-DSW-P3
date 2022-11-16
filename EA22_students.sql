INSERT INTO students (username, name, last_name, birthdate)
VALUES ("17186", "Bruno", "Palacios", "2005/08/09");



INSERT INTO courses (name, created_at)
VALUES ("ARCM", "2022/11/15");

INSERT INTO courses (name, created_at)
VALUES ("AAD", "2022/11/15");

INSERT INTO courses (name, created_at)
VALUES ("TDAD", "2022/11/15");

INSERT INTO courses (name, created_at)
VALUES ("CS", "2022/11/15");

INSERT INTO courses (name, created_at)
VALUES ("CMEM", "2022/11/15");

INSERT INTO courses (name, created_at)
VALUES ("DSW", "2022/11/15");

INSERT INTO courses (name, created_at)
VALUES ("MA", "2022/11/15");

INSERT INTO courses (name, created_at)
VALUES ("MTDF", "2022/11/15");

INSERT INTO courses (name, created_at)
VALUES ("TOEFL", "2022/11/15");

INSERT INTO courses (name, created_at)
VALUES ("MCAI", "2022/11/15");


INSERT INTO students_courses (student_id, course_id, grade)

	SELECT '1', id, '9.5' FROM courses WHERE name='ARCM';

INSERT INTO students_courses (student_id, course_id, grade)

	SELECT '1', id, '9.5' FROM courses WHERE name='MCAI';

INSERT INTO students_courses (student_id, course_id, grade)

	SELECT '1', id, '9.5' FROM courses WHERE name='AAD';

INSERT INTO students_courses (student_id, course_id, grade)

	SELECT '1', id, '9.5' FROM courses WHERE name='DSW';

INSERT INTO students_courses (student_id, course_id, grade)

	SELECT '1', id, '9.5' FROM courses WHERE name='TDAD';

INSERT INTO students_courses (student_id, course_id, grade)

	SELECT '1', id, '9.5' FROM courses WHERE name='MA';
	
INSERT INTO students_courses (student_id, course_id, grade)

	SELECT '1', id, '9.5' FROM courses WHERE name='TOEFL';

INSERT INTO students_courses (student_id, course_id, grade)

	SELECT '1', id, '9.5' FROM courses WHERE name='MTDF';

INSERT INTO students_courses (student_id, course_id, grade)

	SELECT '1', id, '9.5' FROM courses WHERE name='CMEM';

INSERT INTO students_courses (student_id, course_id, grade)

	SELECT '1', id, '9.5' FROM courses WHERE name='CS';


