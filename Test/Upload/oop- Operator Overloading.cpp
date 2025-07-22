/*----------------------
* Unary Operator
------------------------*/
//#include <iostream>
//#include <string>
//using namespace std;
//class counter
//{
//private:
//	unsigned int count;
//public:
//	counter() {
//		count = 0;
//	}
//	counter(int c) {
//		count = c;
//	}
//	unsigned int get_count() {
//		return count;
//	}
//	counter operator ++ (int) {
//		++count;
//		return counter(count);
//	}
//	counter operator -- (int) {
//		--count;
//		return counter(count);
//	}
//};
//int main()
//{
//	counter c1(5);
//	counter c2 = c1++;
//	cout << c2.get_count() << "\n";
//	counter c3(6);
//	counter c4 = c3--;
//	cout << c4.get_count() << "\n";
//	return 0;
//}

/*----------------------
* Binary Operator
------------------------*/
#include <iostream>
#include <string>
using namespace std;
class Distance {
private:
	int feet;
	int inches;
public:
	Distance() {
		feet = 0;
		inches = 0;
	}	
	Distance(int f, int i) {
		feet = f;
		inches = i;
	}
	void print() {
		cout << "feet is " << feet << " and inches is " << inches;
	}

	Distance operator +(Distance d2) {
		int f = feet + d2.feet;
		int i = inches + d2.inches;
		return Distance(f, i);
	}
};
int main() {
	Distance d1(10, 7);
	Distance d2(10, 7);
	Distance d3 = d1 + d2;
	d3.print();
}
