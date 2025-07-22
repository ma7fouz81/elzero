// #include <iostream>
// #include <string>
// using namespace std;

// class person
// {
// private:
//     int age;
//     string name;
//     float gpa;

// public:
//     void set_age(int a)
//     {
//         age = a;
//     }
//     int get_age()
//     {
//         return age;
//     }
//     void set_name(string n)
//     {
//         name = n;
//     }
//     string get_name()
//     {
//         return name;
//     }
//     void set_gpa(float g)
//     {
//         gpa = g;
//     }
//     float get_gpa()
//     {
//         return gpa;
//     }
//     void display()
//     {
//         cout << "age is " << age << " , name is " << name << " , gpa is " << gpa;
//     }
// };

// class student : public person
// {
// private:
//     string department;
//     int level;

// public:
//     void set_department(string d)
//     {
//         department = d;
//     }
//     string get_department()
//     {
//         return department;
//     }
//     void set_level(int l)
//     {
//         level = l;
//     }
//     int get_level()
//     {
//         return level;
//     }
//     void print()
//     {
//         cout << "department is " << department << " , level is " << level;
//     }
// };
// int main()
// {
//     student s1;
//     s1.set_age(21);
//     s1.set_gpa(3.5);
//     s1.set_name("Ahmed");
//     s1.display();
//     cout << "\n==================\n";
//     student s2;
//     s2.set_department("computer science");
//     s2.set_level(4);
//     s2.print();
// }

/*-------------------------
 Function Overriding
---------------------------*/
// #include <iostream>
// #include <string>
// using namespace std;

// class base {
// private:
// 	int x;
// public:
// 	base() {
// 		cout << "default base class constractor\n";
// 	}
// };

// class derived : public base
// {
// private:
// 	int y;
// public:
// 	derived() {
// 		cout << "default derived class constractor\n";
// 	}

// 	derived(int i) {
// 		y = i;
// 		cout << "parameter derived class constractor";
// 	}
// };
// int main() {
// 	base b;
// 	cout << "\n============\n";
// 	derived d1;
// 	cout << "\n============\n";
// 	derived d2(10);
// }

/*-------------------------
 Function Overriding
---------------------------*/

// #include <iostream>
// #include <string>
// using namespace std;

// class person {
// private:
// 	int age;
// 	float gpa;
// 	string gender;
// public:
// 	person(int a, float gp, string g) {
// 		age = a;
// 		gpa = gp;
// 		gender = g;
// 	}

// 	void set_age(int a) {
// 		age = a;
// 	}
// 	int get_age() {
// 		return age;
// 	}

// 	void set_gpa(float gp) {
// 		gpa = gp;
// 	}
// 	float get_gpa() {
// 		return gpa;
// 	}

// 	void set_gender(string g) {
// 		gender = g;
// 	}
// 	string get_gender() {
// 		return gender;
// 	}
// 	void display() {
// 		cout << "my age is " << age << ", and my gpa is " << gpa << ", and my gender is " << gender;
// 	}
// };

// class student : public person {
// private:
// 	int level;
// 	string name;
// public:
// 	student(int a, float gp, string g, int l, string n) :person(a, gp, g)
// 	{
// 		level = l;
// 		name = n;
// 	}

// 	void set_level(int l) {
// 		level = l;
// 	}
// 	int get_level() {
// 		return level;
// 	}
// 	void set_name(string n) {
// 		name = n;
// 	}
// 	string get_name() {
// 		return name;
// 	}
// 	void display() {
// 		person::display();
// 		cout << "my level is " << level << ", and my name is " << name;
// 	}
// };
// int main() {
// 	student s1(21, 3.5, "Male", 4, "Ahmed");
// 	s1.display();
// }

/*-------------------------
Multiple Inheritance
--------------------------*/
#include <iostream>
#include <string>
using namespace std;

class employee {
private:
	string name;
	string job;
	float salary;
public:
	employee(string n, string j, float s) {
		name = n;
		job = j;
		salary = s;

	}
	void set_name(string n) {
		name = n;
	}
	string get_name() {
		return name;
	}

	void set_job(string j) {
		job = j;
	}
	string get_job() {
		return job;
	}

	void set_salary(float s) {
		salary = s;
	}
	float get_salary() {
		return salary;
	}
	void print() {
		cout << "my name is " << name << ", my job is " << job << ", my salary is " << salary;
	}
};

class student {
private:
	string department;
	string research_interest;
public:
	student(string d, string re) {
		department = d;
		research_interest = re;
	}
	void set_department(string d) {
		department = d;
	}
	string get_department() {
		return department;
	}

	void set_research_interest(string re) {
		research_interest = re;
	}
	string get_research_interest() {
		return research_interest;
	}

	void print() {
		cout << " my department is " << department << ", my research_interest is " << research_interest ;
	}
};

class teaching_assistant : public employee , public student
{
public:
	teaching_assistant(string n, string j, float s, string d, string re) :employee(n, j, s), student(d, re) {

	}
	void print() {
		employee::print();
		student::print();
	}
};
int main() {
	teaching_assistant ta("Ahmed", "developer", 1200.5, "cs", "database");
	ta.print();
}
